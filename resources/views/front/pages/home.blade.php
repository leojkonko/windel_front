@extends('front.layout.app')

@section('content')
    <main id="">

        <x-banners />

        <section class="py-lg-5 py-2">
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
                    <div class="col-lg-4">
                        <div class="bg-cinza-claro rounded-40 p-2 p-lg-3">
                            <img class="mb-2" src="{{ asset('front/images/icons/icon-solucoes.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                            <h2 class="text-primary p-600 h2">Windel compacto</h2>   
                            <p class="p-400 p-16">Emissão de documentos fiscais facilitada</p>
                            <button class="btn btn-outline-danger rounded-40 mt-2 p-16 p-400">Saiba mais</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-cinza-claro rounded-40 p-2 p-lg-3">
                            <img class="mb-2" src="{{ asset('front/images/icons/icon-solucoes.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                            <h2 class="text-primary p-600 h2">Windel compacto</h2>   
                            <p class="p-400 p-16">Emissão de documentos fiscais facilitada</p>
                            <button class="btn btn-outline-danger rounded-40 mt-2 p-16 p-400">Saiba mais</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-cinza-claro rounded-40 p-2 p-lg-3">
                            <img class="mb-2" src="{{ asset('front/images/icons/icon-solucoes.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                            <h2 class="text-primary p-600 h2">Windel compacto</h2>   
                            <p class="p-400 p-16">Emissão de documentos fiscais facilitada</p>
                            <button class="btn btn-outline-danger rounded-40 mt-2 p-16 p-400">Saiba mais</button>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-outline-danger rounded-40 mt-2 p-400 p-16">Veja todas</button>
                    </div>
                </div>
            </div>
        </section>
        <section class=" bg-cinza">
            <div class="container container-start">
                <div class="row g-0">
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="">
                            <div class="w-100">
                                <svg class="ms-1" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                                    <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                                    <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                                </svg>
                            </div>
                            <h2 class="w-100 py-1 h2 p-600 text-primary">
                                    Nossos diferenciais
                            </h2> 
                            <p class="p-16 p-400">
                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser.
                            </p>
                            <button class="btn btn-outline-danger rounded-40 mt-1 p-16 p-400">Veja todas</button>
                        </div>
                    </div>
                    <div class="col-lg-4 m-auto">
                       <div class="row d-flex align-items-center">
                            @foreach (range(0,4) as $i)
                                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                                    <div class="ratio ratio-1x1">
                                        <img class="w-100 h-100 object-fit-cover" src="{{ asset('front/images/icons/diferenciais.svg') }}" alt="Logo {{ env('APP_NAME') }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ratio ratio-6x9 ">
                            <img class="w-100 h-100 object-fit-cover" src="{{ asset('front/images/backgrounds/bg-diferenciais.png') }}" alt="Logo {{ env('APP_NAME') }}">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="depoimentos pt-lg-4 pt-3">
            <div class="container">
                <div class="row">
                    <div class="depoimentos-swiper swiper d-flex m-auto p-4">
                        <div class="swiper-wrapper">
                            @foreach (range(1,2) as $banner)
                                <div class="swiper-slide banner-slide position-relative d-flex">
                                    <div class="col-8 d-flex align-items-center bg-cinza-claro flex-column p-4 position-relative rounded-40-left rounded-40-top">
                                        <p class="p-400 text-lg-start text-center p-16">
                                            O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. 
                                        </p>
                                        <p class="p-16 p-400 text-lg-start text-center w-100 mt-1">
                                           <span class="p-600 ">Elias Martins</span> <br>
                                            Empresa XYZ
                                        </p>
                                        <svg class="position-absolute top--10 start--10" width="134" height="110" viewBox="0 0 134 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 109L1 81.9441C1 72.8509 2.48148 63.3851 5.44445 53.5466C8.55556 43.559 13 34.0186 18.7778 24.9255C24.5556 15.6832 31.5185 7.70807 39.6667 1L63 17.323C56.1852 27.1615 50.9259 37.2981 47.2222 47.7329C43.5185 58.0186 41.6667 69.1987 41.6667 81.2733L41.6667 109H1ZM71 109V81.9441C71 72.8509 72.4815 63.3851 75.4445 53.5466C78.5556 43.559 83 34.0186 88.7778 24.9255C94.5556 15.6832 101.519 7.70807 109.667 1L133 17.323C126.185 27.1615 120.926 37.2981 117.222 47.7329C113.519 58.0186 111.667 69.1987 111.667 81.2733V109H71Z" stroke="#D9476D" stroke-linejoin="round"/>
                                        </svg>                                            
                                    </div>
                                    <div class="col-4 d-flex align-items-center bg-roxo p-3 rounded-40-right rounded-40-bottom">
                                        <div class="ratio ratio-1x1">
                                            <img class="w-100 h-100 object-fit-cover" src="{{ asset('front/images/logos/_logo_vertical.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-prev rounded-circle p-1 bg-danger">
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 1L1 9L9 17" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                            </svg>                     
                        </div>
                        <div class="swiper-button-next rounded-circle p-1 bg-danger">
                            <svg width="1.25em" height="1.25em" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-partners-item />
        <x-we-partners />
        
    </main>
@endsection
