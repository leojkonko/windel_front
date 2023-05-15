@inject('contact', 'Ellite\\Contact\\Services\\ContactService')

@extends('front.layout.app')

@section('content')
    <main id="contato">
        <section class="py-2 py-lg-4 mb-3 mb-lg-0 position-relative" id="solucoes" >
            <svg class="position-absolute start-0 top-50  d-none d-lg-block" width="197" height="506" viewBox="0 0 197 506" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-36.8316 504.942C-76.3479 509.192 -118.828 485.113 -148.88 456.057C-179.428 427 -197.299 393.214 -221.134 358.437C-245.218 323.412 -274.767 286.9 -286.169 239.69C-297.322 192.728 -290.078 134.82 -260.473 84.8498C-230.37 34.8795 -178.156 -7.4012 -130.199 2.7571C-82.2424 12.4184 -39.2893 74.2706 12.8764 108.532C64.7938 142.545 125.178 148.719 160.446 181.5C195.714 214.281 205.617 273.421 187.197 320.153C168.777 366.885 122.283 400.961 80.7601 434.537C39.2369 468.113 2.68466 500.692 -36.8316 504.942Z" stroke="#D9476D"/>
            </svg>                
            <div class="container">
                <div class="row">
                    <h2 class="text-lg-start text-center h2 p-600 text-primary mb-lg-1 mb--2 pb-2 pb-lg-0 mt-2 mt-lg-0">Vagas disponíveis</h2>
                    @foreach (range(0,4) as $o)
                    <div class="col-lg-4 mt-lg-3 mt-3" data-aos="zoom-out-up">
                        <div class="d-flex justify-content-center align-items-center rounded-40 bg-cinza-claro h-120 w-100 px-2">
                            <div class="flex-column p-1 w-100">
                                <h2 class="m-0 p-20 p-600 text-primary text-lg-start text-center">Programador Front-end</h2>
                                <p class="m-0 p-16 p-400 text-dark text-lg-start text-center mt-0-50">
                                    Tempo integral
                                </p>
                                <div class="d-flex justify-content-between align-items-center pt-1">
                                    <p class="m-0 p-16 p-400 text-dark">
                                        Caxias do Sul
                                    </p> 
                                    <a href="{{ route('vaga-detalhe') }}" class="text-decoration-none">
                                        <button class="btn btn-outline-danger p-400 p-16 text-dark rounded-40">Ver vaga</button>
                                    </a>   
                                </div>   
                            </div>  
                        </div>                          
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <x-form-contato2 />
        <x-contact-iframe-map />
    </main>
@endsection
