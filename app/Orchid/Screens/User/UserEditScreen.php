<?php

declare(strict_types=1);

namespace App\Orchid\Screens\User;

use App\Orchid\Layouts\Role\RolePermissionLayout;
use App\Orchid\Layouts\User\UserEditLayout;
use App\Orchid\Layouts\User\UserPasswordLayout;
use App\Orchid\Layouts\User\UserRoleLayout;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Orchid\Access\Impersonation;
use Orchid\Platform\Models\User;
use App\Models\User as AppUser;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;
use App\Services\LogsService;

class UserEditScreen extends Screen
{
    /**
     * @var User
     */
    public $user;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @param User $user
     *
     * @return array
     */
    public function query(User $user): iterable
    {
        $user->load(['roles']);

        return [
            'user'       => $user,
            'permission' => $user->getStatusPermission(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->user->exists ? 'Edit User' : 'Create User';
    }

    /**
     * Display header description.
     *
     * @return string|null
     */
    public function description(): ?string
    {
        return 'Details such as name, email and password';
    }

    /**
     * @return iterable|null
     */
    public function permission(): ?iterable
    {
        return [
            'platform.systems.users',
        ];
    }

    /**
     * The screen's action buttons.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Impersonate user'))
                ->icon('login')
                ->confirm(__('You can revert to your original state by logging out.'))
                ->method('loginAs')
                ->canSee($this->user->exists && \request()->user()->id !== $this->user->id),

            Button::make(__('Remove'))
                ->icon('trash')
                ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                ->method('remove')
                ->class('btn btn-default text-danger')
                ->canSee($this->user->exists),

            Button::make(__('Save'))
                ->icon('save')
                ->type(Color::SUCCESS())
                ->method('save'),
        ];
    }

    /**
     * @return \Orchid\Screen\Layout[]
     */
    public function layout(): iterable
    {
        return [

            Layout::columns([
                Layout::block(UserEditLayout::class)
                    // ->title(__('Profile Information'))
                    // ->description(__('Update your account\'s profile information and email address.'))
                    ->vertical(true)
                    ->commands(
                        Button::make(__('Save'))
                            ->type(Color::PRIMARY())
                            ->icon('save')
                            ->canSee($this->user->exists)
                            ->method('save')
                    ),

                [
                    Layout::block(UserPasswordLayout::class)
                        ->vertical(true)
                        // ->title(__('Password'))
                        // ->description(__('Ensure your account is using a long, random password to stay secure.'))
                        ->commands(
                            Button::make(__('Save'))
                                ->type(Color::PRIMARY())
                                ->icon('save')
                                ->canSee($this->user->exists)
                                ->method('save')
                        ),

                    Layout::block(UserRoleLayout::class)
                        ->vertical(true)
                        // ->title(__('Roles'))
                        // ->description(__('A Role defines a set of tasks a user assigned the role is allowed to perform.'))
                        ->commands(
                            Button::make(__('Save'))
                                ->type(Color::PRIMARY())
                                ->icon('save')
                                ->canSee($this->user->exists)
                                ->method('save')
                        ),
                ]



                /*Layout::block(RolePermissionLayout::class)
                ->title(__('Permissions'))
                ->description(__('Allow the user to perform some actions that are not provided for by his roles'))
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::DEFAULT())
                        ->icon('check')
                        ->canSee($this->user->exists)
                        ->method('save')
                ),*/


            ]),

        ];
    }

    /**
     * @param User    $user
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(User $user, Request $request, LogsService $logs)
    {
        $is_new = empty($user->id);

        $request->validate([
            'user.username' => [
                'required',
                Rule::unique(User::class, 'username')->ignore($user),
            ],
        ]);

        $permissions = collect($request->get('permissions'))
            ->map(fn ($value, $key) => [base64_decode($key) => $value])
            ->collapse()
            ->toArray();

        $user->when($request->filled('user.password'), function (Builder $builder) use ($request) {
            $builder->getModel()->password = Hash::make($request->input('user.password'));
        });

        $user
            ->fill($request->collect('user')->except(['password', 'permissions', 'roles'])->toArray())
            ->fill(['permissions' => $permissions]);

        $user->username = $request->input('user.username');

        $user->save();

        $logs->insertLog(
            $is_new ? "Cadastrou o usuário {$user->name}" : "Editou o usuário {$user->name}",
            $is_new ? "create" : "edit",
            User::class,
            $user->id,
        );

        $user->replaceRoles($request->input('user.roles'));

        Toast::info(__('User was saved.'));

        return redirect()->route('platform.systems.users');
    }

    /**
     * @param AppUser $user precisa ser o usuário do App por causa do softdelete
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function remove(AppUser $user, LogsService $logs)
    {
        $user->delete();

        $logs->insertLog(
            "Deletou o usuário {$user->name}",
            "delete",
            User::class,
            $user->id,
        );

        Toast::info(__('User was removed'));

        return redirect()->route('platform.systems.users');
    }

    /**
     * @param User $user
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginAs(User $user)
    {
        Impersonation::loginAs($user);

        Toast::info(__('You are now impersonating this user'));

        return redirect()->route(config('platform.index'));
    }
}
