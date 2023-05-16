@extends('front.layout.app')

@section('content')
    <main id="">

        <x-banners />

        <section class="py-lg-5 py-2 mt-lg-5 mt-2 position-relative z-index-3" id="solucoes"> 
            <svg class="position-absolute end-0 top--35 d-none d-lg-block" width="148" height="504" viewBox="0 0 148 504" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M369.268 41.207C400.216 66.144 413.228 113.208 413.931 155.004C414.986 197.151 403.732 233.678 395.995 275.123C388.259 316.919 383.335 363.632 358.014 405.076C332.694 446.17 286.624 481.995 230.356 496.395C173.736 510.444 106.918 503.419 80.1908 462.326C53.1117 421.584 66.4754 347.475 53.8151 286.362C41.1548 225.6 2.82214 178.536 1.06376 130.418C-0.694619 82.3004 34.1213 33.4801 80.1908 13.4602C126.26 -6.5596 183.232 2.22104 236.335 7.84064C289.438 13.4602 338.321 16.27 369.268 41.207Z" stroke="#D9476D"/>
            </svg>                
            <div class="container">
                <div class="row">
                    <h2 class="w-100 text-center gap-1 d-flex align-items-center justify-content-center mb-2 p-600 h2">
                        <svg class="me-1" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                            <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                            <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                        </svg>
                            Soluções em Destaque
                        <svg class="ms-1" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                            <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                            <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                        </svg>
                    </h2> 
                    @foreach (range(0,2) as $l)
                    <div class="col-lg-4" data-aos="flip-right">
                        <div class="bg-cinza-claro rounded-40 p-2 p-lg-3 text-lg-start text-center my-1 my-lg-0">
                            <img class="mb-2" src="{{ asset('front/images/icons/icon-solucoes.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                            <h2 class="text-primary p-600 h2 w-100 text-lg-start text-center">Windel compacto</h2>   
                            <p class="p-400 p-16 text-lg-start text-center">Emissão de documentos fiscais facilitada</p>
                            <a href="{{ route('Products-details') }}">
                                <button class="btn btn-outline-danger rounded-40 mt-2 p-16 p-400 text-dark">Saiba mais</button>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-12 d-flex justify-content-center">
                        <a href="{{ route('solutions') }}">
                            <button class="btn btn-outline-danger rounded-40 mt-2 p-400 p-16 text-dark">Veja todas</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-3 pt-lg-0 bg-cinza-lg px-0-50 px-lg-0 position-relative" data-aos="fade-down-right">
            <svg class="position-absolute start-0 top--35 d-none d-lg-block" width="140" height="505" viewBox="0 0 140 505" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-322.157 334.29C-336.49 297.221 -324.227 249.956 -303.938 213.408C-283.778 176.38 -255.769 150.373 -228.346 118.35C-200.748 86.0217 -173.128 48.0289 -130.477 24.7971C-88.0019 1.86955 -30.1921 -6.12104 25.7376 9.54203C81.7963 25.6851 136.15 65.1777 138.75 114.129C141.83 162.952 93.2028 220.451 73.6104 279.706C54.1936 338.658 63.8585 398.583 41.3224 441.133C18.7863 483.684 -35.7753 508.556 -85.6826 502.858C-135.59 497.161 -180.538 461.071 -223.717 429.653C-266.896 398.235 -307.825 371.36 -322.157 334.29Z" stroke="#D9476D"/>
            </svg>                
            <div class="container container-start bg-cinza-sm rounded-40">
                <div class="row g-0">
                    <div class="col-lg-3 d-flex align-items-center">
                        <div class="text-lg-start text-center py-2 py-lg-0">
                            <div class="w-100">
                                <svg class="" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                                    <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                                    <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                                </svg>
                            </div>
                            <h2 class="w-100 py-1 h2 p-600 text-primary">
                                    Nossos diferenciais
                            </h2> 
                            <p class="p-16 p-400 px-0-25">
                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser.
                            </p>
                            <a href="{{ route('company') }}">
                                <button class="btn btn-outline-danger rounded-40 mt-1 p-16 p-400 text-dark">Conheça a Windel</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-lg-3 m-auto " style="background-image: url({{ asset('front/images/backgrounds/w.png') }}); 
                    background-repeat: no-repeat;
                    background-size: 100%;
                    background-position-x: 50%;
                    ">
                       <div class="row d-flex align-items-center justify-content-evenly py-2 py-lg-0">
                            @foreach (range(0,4) as $i)
                                <div class="{{ $i >= 3 ? 'mt-1' : ' ' }} col-md-3 col-4 d-flex justify-content-center align-items-center mx-0-50 flex-column">
                                    <div class="ratio ratio-1x1 bg-danger p-lg-1 p-1 p-sm-2 rounded-circle shadow-lg">
                                        <img class="w-100 h-100 object-fit-cover p-lg-1 p-1 p-sm-2" src="{{ asset('front/images/icons/diferenciais.svg') }}" alt="Logo {{ env('APP_NAME') }}">
                                        
                                    </div>
                                    <p class="p-16 p-400 text-center pt-1">Suporte especializado</p>
                                </div> 
                            @endforeach
                        </div>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-lg-4 g-0">
                        <div class="ratio ratio-7x9 mt-4 mt-lg-0">
                            <img class="w-100 h-100 object-fit-cover rounded-40-bottom" src="{{ asset('front/images/backgrounds/bg-diferenciais.png') }}" alt="Logo {{ env('APP_NAME') }}">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <x-depoimentos />
        <x-partners-item />
        <x-we-partners />
        
    </main>
@endsection
