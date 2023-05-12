@inject('contact', 'Ellite\\Contact\\Services\\ContactService')

@extends('front.layout.app')

@section('content')
    <main id="contato">
        <section class="py-2 py-lg-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mt-2 mt-lg-0">
                        <div class="d-flex justify-content-center align-items-center rounded-40 bg-cinza-claro h-120 ">
                            <div class="p-1">
                                <img class="" width="60px" src="{{ asset('front/images/backgrounds/map-location.png') }}" alt="Logo {{ env('APP_NAME') }}">
                            </div>
                            <div class="flex-column p-1">
                                <h2 class="m-0 p-20 p-600 text-primary">Visite-nos</h2>
                                <a href="" class="text-decoration-none" target="_blank">
                                    <p class="m-0 p-16 p-400 text-dark mt-0-50">
                                        Rua Italo Vitor Bersani, 1134 Jardim América
                                    </p>
                                </a>    
                            </div>  
                        </div>                          
                    </div>
                    <div class="col-lg-4 mt-2 mt-lg-0">
                        <div class="d-flex justify-content-center align-items-center rounded-40 bg-cinza-claro h-120 ">
                            <div class="p-1">
                                <img class="" width="60px" src="{{ asset('front/images/backgrounds/email.png') }}" alt="Logo {{ env('APP_NAME') }}">
                            </div>
                            <div class="flex-column p-1">
                                <h2 class="m-0 p-20 p-600 text-primary">Envie-nos um email</h2>
                                <a href="" class="text-decoration-none" target="_blank">
                                    <p class="m-0 p-16 p-400 text-dark mt-0-50">
                                        eventos@sica.net.br
                                    </p>
                                </a>    
                            </div>  
                        </div>                          
                    </div>
                    <div class="col-lg-4 mt-2 mt-lg-0 mb-3 mb-lg-0">
                        <div class="d-flex justify-content-center align-items-center rounded-40 bg-cinza-claro h-120 ">
                            <div class="p-1">
                                <img class="" width="60px" src="{{ asset('front/images/backgrounds/phone.png') }}" alt="Logo {{ env('APP_NAME') }}">
                            </div>
                            <div class="flex-column p-1">
                                <h2 class="m-0 p-20 p-600 text-primary">Ligue para a gente</h2>
                                <a href="" class="text-decoration-none" target="_blank">
                                    <p class="m-0 p-16 p-400 text-dark mt-0-50">
                                        (54) 3028-4800
                                    </p>
                                </a>    
                            </div>  
                        </div>                          
                    </div>
                    
                </div>
            </div>
        </section>

        

        <x-form-contato />
        <x-contact-iframe-map />
    </main>
@endsection
