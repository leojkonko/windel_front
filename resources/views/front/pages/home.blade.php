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
                        <div class="bg-cinza-claro rounded-40 p-2 p-lg-3 text-lg-start text-center my-1 my-lg-0">
                            <img class="mb-2" src="{{ asset('front/images/icons/icon-solucoes.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                            <h2 class="text-primary p-600 h2 w-100 text-lg-start text-center">Windel compacto</h2>   
                            <p class="p-400 p-16 text-lg-start text-center">Emissão de documentos fiscais facilitada</p>
                            <button class="btn btn-outline-danger rounded-40 mt-2 p-16 p-400 text-dark">Saiba mais</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-cinza-claro rounded-40 p-2 p-lg-3 text-lg-start text-center my-1 my-lg-0">
                            <img class="mb-2" src="{{ asset('front/images/icons/icon-solucoes.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                            <h2 class="text-primary p-600 h2 w-100 text-lg-start text-center">Windel compacto</h2>   
                            <p class="p-400 p-16 text-lg-start text-center">Emissão de documentos fiscais facilitada</p>
                            <button class="btn btn-outline-danger rounded-40 mt-2 p-16 p-400 text-dark">Saiba mais</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-cinza-claro rounded-40 p-2 p-lg-3 text-lg-start text-center my-1 my-lg-0">
                            <img class="mb-2" src="{{ asset('front/images/icons/icon-solucoes.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                            <h2 class="text-primary p-600 h2 w-100 text-lg-start text-center">Windel compacto</h2>   
                            <p class="p-400 p-16 text-lg-start text-center">Emissão de documentos fiscais facilitada</p>
                            <button class="btn btn-outline-danger rounded-40 mt-2 p-16 p-400 text-dark">Saiba mais</button>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button class="btn btn-outline-danger rounded-40 mt-2 p-400 p-16 text-dark">Veja todas</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-3 py-lg-0 bg-cinza-lg">
            <div class="container bg-cinza-sm container-start">
                <div class="row g-0">
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="text-lg-start text-center py-2 py-lg-0">
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
                            <p class="p-16 p-400 px-0-25">
                                O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser.
                            </p>
                            <button class="btn btn-outline-danger rounded-40 mt-1 p-16 p-400 text-dark">Veja todas</button>
                        </div>
                    </div>
                    <div class="col-lg-4 m-auto ">
                       <div class="row d-flex align-items-center justify-content-evenly py-2 py-lg-0">
                            @foreach (range(0,4) as $i)
                                <div class="{{ $i >= 3 ? 'mt-1' : ' ' }} col-3 d-flex justify-content-center align-items-center mx-0-50 flex-column">
                                    <div class="ratio ratio-1x1 bg-danger p-2 p-lg-1 rounded-circle shadow-lg">
                                        <img class="w-100 h-100 object-fit-cover p-2 p-lg-1" src="{{ asset('front/images/icons/diferenciais.svg') }}" alt="Logo {{ env('APP_NAME') }}">
                                        
                                    </div>
                                    <p class="p-16 p-400 text-center pt-1">Suporte especializado</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 g-0">
                        <div class="ratio ratio-6x9 ">
                            <img class="w-100 h-100 object-fit-cover" src="{{ asset('front/images/backgrounds/bg-diferenciais.png') }}" alt="Logo {{ env('APP_NAME') }}">
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
