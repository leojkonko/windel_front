@extends('front.layout.app')

@section('content')
<main id="partners">
    <section class="pt-lg-4 pt-3" id="solucoes" data-aos="zoom-in-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex align-items-center text-center text-lg-start">
                    <div class="">
                        <div class="w-100">
                            <svg class="" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                                <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                                <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                            </svg>
                        </div>
                        <h2 class="w-100 py-1 h2 p-600 text-primary">
                                Seja um franqueado
                        </h2> 
                        <p class="p-16 p-400">
                            O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ratio ratio-12x9">
                        <img class="w-100 h-100 object-fit-cover" src="{{ asset('front/images/backgrounds/partners.png') }}" alt="Logo {{ env('APP_NAME') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-diferenttial-itens />
    <x-partners-item />
        <x-we-partners />
        <section class=" pb-2 pb-lg-4 mb-2" data-aos="zoom-out">
            <div class="container">
                <div class="px-1 bg-cinza-claro rounded-40" style="background-image: url({{ asset('front/images/backgrounds/bg-contato.png') }});
                background-repeat: no-repeat;
            background-size: cover;">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 position-relative ">
                            <div class="">
                                <img class="position-absolute top--5 start-50 translate-middle-x h-105 rounded-40-topp z-index-2" 
                            src="{{ asset('front/images/backgrounds/contato2.png') }}" alt="Logo {{ env('APP_NAME') }}">
                            </div>
                       
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="formulario shadow-l rounded-3 p-lg-2 p-1">
                                <h2 class="h2 p-600 text-dark fw-bold text-lg-start text-center text-black my-1">Fale com a gente</h2>
                                <livewire:form-contact />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>
@endsection