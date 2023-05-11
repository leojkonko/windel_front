@inject('contact', 'Ellite\\Contact\\Services\\ContactService')

@extends('front.layout.app')

@section('content')
    <main id="contato">
        <section class="py-2 py-lg-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-center align-items-center rounded-40 bg-cinza-claro h-120 my-1 my-lg-0">
                            <div class="p-1">
                                <img class="" width="60px" src="{{ asset('front/images/backgrounds/map-location.png') }}" alt="Logo {{ env('APP_NAME') }}">
                            </div>
                            <div class="flex-column p-1">
                                <h2 class="m-0 p-22 p-600 text-primary">Visite-nos</h2>
                                <a href="" class="text-decoration-none" target="_blank">
                                    <p class="m-0 p-16 p-400 text-dark">
                                        Rua Italo Vitor Bersani, 1134 Jardim América
                                    </p>
                                </a>    
                            </div>  
                        </div>                          
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-center align-items-center rounded-40 bg-cinza-claro h-120 my-1 my-lg-0">
                            <div class="p-1">
                                <img class="" width="60px" src="{{ asset('front/images/backgrounds/email.png') }}" alt="Logo {{ env('APP_NAME') }}">
                            </div>
                            <div class="flex-column p-1">
                                <h2 class="m-0 p-22 p-600 text-primary">Envie-nos um email</h2>
                                <a href="" class="text-decoration-none" target="_blank">
                                    <p class="m-0 p-16 p-400 text-dark">
                                        eventos@sica.net.br
                                    </p>
                                </a>    
                            </div>  
                        </div>                          
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-center align-items-center rounded-40 bg-cinza-claro h-120 my-1 my-lg-0">
                            <div class="p-1">
                                <img class="" width="60px" src="{{ asset('front/images/backgrounds/phone.png') }}" alt="Logo {{ env('APP_NAME') }}">
                            </div>
                            <div class="flex-column p-1">
                                <h2 class="m-0 p-22 p-600 text-primary">Ligue para a gente</h2>
                                <a href="" class="text-decoration-none" target="_blank">
                                    <p class="m-0 p-16 p-400 text-dark">
                                        (54) 3028-4800
                                    </p>
                                </a>    
                            </div>  
                        </div>                          
                    </div>
                    
                </div>
            </div>
        </section>

        <section class=" py-2 py-lg-4" >
            <div class="container">
                <div class="row justify-content-center form-wrapper rounded-40" style="background-image: url({{ asset('front/images/backgrounds/bg-contato.png') }});
                background-repeat: no-repeat;
            background-size: cover;">
                    <div class="col-lg-5">
                        <div class="ratio ratio-6x9">
                            <img class="w-100 h-100 object-fit-cover rounded-40-topp" src="{{ asset('front/images/backgrounds/contato.png') }}" alt="Logo {{ env('APP_NAME') }}">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="formulario shadow-l rounded-3 p-2">
                            <h2 class="h2 p-600 text-dark fw-bold text-lg-start text-center text-black mt-1">Fale com a gente</h2>
                            <livewire:form-contact />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <x-contact-iframe-map />
    </main>
@endsection
