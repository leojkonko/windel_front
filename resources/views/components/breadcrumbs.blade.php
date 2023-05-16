@inject('site', 'App\\Services\\SiteService')

<section class="bg-cinza-claro position-relative overflow-hidden pt-lg-21 pt-19 pb-4 d-flex justify-content-center">
    <img class="w-100 h-100 top-0 position-absolute object-fit-cover" src="{{ asset('front/images/backgrounds/breadcrumb.png') }}" alt="Logo {{ env('APP_NAME') }}"> 
    <div class="container d-flex align-items-center justify-content-center position-absolute 
    z-index-1 top-50">
        <nav aria-label="breadcrumb" class="">
            @if ($site->getBreadTitle())
                <div class="d-none d-lg-block">
                    <h2 class="w-100 text-center text-danger h2 p-600 gap-lg-1 gap-0-50 d-flex align-items-center justify-content-center mb-1 p-600 h2">
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
                </div>
            @endif
            @if ($site->getBreadTitle())
                <div class="d-lg-none">
                    <div class="w-100 text-center">
                        <svg class="" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                            <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                            <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                        </svg>
                    </div>
                    <h2 class="w-100 py-1 h2 p-600 text-primary">
                            Nossos diferenciais
                    </h2> 
                </div>
            @endif
            <ul class="breadcrumb mb-3 mb-md-3 mb-lg-1 d-flex justify-content-center">
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
    <div class="position-absolute w-100 z-index-3 d-none d-lg-block">
        <svg class="position-absolute bottom--110" width="100%" height="100" viewBox="0 0 1920 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0H846.645C869.282 0 890.993 8.99277 907 25L912.201 30.201C924.878 42.8781 942.072 50 960 50C977.928 50 995.122 42.8781 1007.8 30.201L1013 25C1029.01 8.99277 1050.72 0 1073.36 0H1920V100H0V0Z" fill="white"/>
        </svg>     
        <div class="position-absolute start-50 translate-middle-x bottom--40">
            <a href="#solucoes" class="arrow">
                <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.5">
                    <path d="M1 6L13 18L25 6" stroke="#272342" stroke-width="2" stroke-linejoin="round"/>
                    </g>
                </svg>                    
            </a>
        </div>
    </div>  
</section>
