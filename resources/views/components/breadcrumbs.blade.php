@inject('site', 'App\\Services\\SiteService')

<section class="bg-cinza-claro position-relative overflow-hidden pt-19 pb-4">
    <img class="w-100 h-100 top-0 position-absolute object-fit-cover" src="{{ asset('front/images/backgrounds/breadcrumb.png') }}" alt="Logo {{ env('APP_NAME') }}"> 
    <div class="container">
        <nav aria-label="breadcrumb" class="d-flex flex-column w-100 gap-0-50 align-items-center justify-content-center position-absolute 
        z-index-1 bottom-15">
            @if ($site->getBreadTitle())
            <h2 class="w-100 text-center text-danger h2 p-600 gap-1 d-flex align-items-center justify-content-center mb-1 p-600 h2">
                <svg class="me-1" width="98" height="6" viewBox="0 0 98 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="6" height="6" fill="#615E76"/>
                    <rect x="46" width="6" height="6" fill="#615E76"/>
                    <rect x="92" width="6" height="6" fill="#615E76"/>
                </svg>                            
                 {{ $site->getBreadTitle() }}
                <svg class="ms-1" width="98" height="6" viewBox="0 0 98 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="6" height="6" fill="#615E76"/>
                    <rect x="46" width="6" height="6" fill="#615E76"/>
                    <rect x="92" width="6" height="6" fill="#615E76"/>
                </svg>
            </h2> 
            @endif
            <ul class="breadcrumb mb-1">
                @foreach ($site->getBreadCrumbs() as $bread)
                    @if ($loop->last)
                        <li class="breadcrumb-item active p-16 p-400 text-decoration-none text-secondary" aria-current="{{ $bread->getText() }}">{{ $bread->getText() }}</li>
                    @else
                        <li class="breadcrumb-item">
                            <a class=" p-16 p-400 text-decoration-none text-secondary" href="{{ $bread->getUrl() }}">{{ $bread->getText() }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
</section>
