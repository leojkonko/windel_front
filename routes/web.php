<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['languages'])->group(function () {
    Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/empresa', [Controllers\CompanyController::class, 'index'])->name('company');
    Route::get('/produtos', [Controllers\ProductsController::class, 'index'])->name('products');
    Route::get('/produto/{category}', [Controllers\ProductsController::class, 'index'])->name('products.category');
    Route::get('/produtos/{slug}', [Controllers\ProductsController::class, 'details'])->name('products.details');
    Route::get('/blog', [Controllers\BlogController::class, 'index'])->name('blog');
    //Route::get('/blog/{slug}', [Controllers\BlogController::class, 'details'])->name('blog.details');
    Route::get('/contato', [Controllers\ContactController::class, 'index'])->name('contact');
    Route::get('/trabalhe-conosco', [Controllers\ContactController::class, 'trabalhe'])->name('trabalhe-conosco');
    Route::get('/vaga-detalhe', [Controllers\ContactController::class, 'vaga'])->name('vaga-detalhe');
    Route::get('/politica-de-privacidade', [Controllers\PrivacyController::class, 'index'])->name('privacy');
    Route::get('/solucoes', [Controllers\SolutionsController::class, 'index'])->name('solutions');
    Route::get('/parceiros', [Controllers\PartnesController::class, 'index'])->name('partners');
    Route::get('/blog-detalhe', [Controllers\BlogDetalheController::class, 'detalhes'])->name('blog-detalhe');
    Route::get('/produto-detalhe', [Controllers\ProductsDetailsController::class, 'index'])->name('Products-details');
    Route::get('/central-de-suporte', [Controllers\CentralController::class, 'index'])->name('suporte');
    Route::get('/solicite-demonstracao', [Controllers\SolicitacaoController::class, 'index'])->name('solicitacao');
});

// Rotas da restrita que ficam sem o middleware de autorização
Route::match(['get', 'post'], '/restrita/password/send-recovery', [Controllers\Restrita\PasswordRecoveryController::class, 'sendRecovery'])
    ->name('platform.password.send-recovery');

Route::match(['get', 'post'], '/restrita/password/recover-password/{id}', [Controllers\Restrita\PasswordRecoveryController::class, 'recoverPassword'])
    ->name('platform.password.recover-password');
