@inject('site', 'App\\Services\\SiteService')

@if ($site->hasPrivacy())
    <p class="p-16 p-400">Li e aceito a <a href="{{ route_lang('privacy') }}" target="_blank">política de privacidade</a> da {{ env('APP_NAME') }}</p>
@else
<p class="p-16 p-400">Li e aceito a <a href="{{ route_lang('privacy') }}" target="_blank" class="p-600 text-decoration-none text-decoration-underline text-dark">política de privacidade</a> da {{ env('APP_NAME') }}</p>
@endif