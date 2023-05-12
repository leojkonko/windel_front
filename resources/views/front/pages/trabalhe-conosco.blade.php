@inject('contact', 'Ellite\\Contact\\Services\\ContactService')

@extends('front.layout.app')

@section('content')
    <main id="contato">
        <section class="py-2 py-lg-4">
            <div class="container">
                <div class="row">
                    <h2 class="text-lg-start text-center h2 p-600 text-primary mb-1">Vagas disponíveis</h2>
                    @foreach (range(0,4) as $o)
                    <div class="col-lg-4 mt-3">
                        <div class="d-flex justify-content-center align-items-center rounded-40 bg-cinza-claro h-120 w-100">
                            <div class="flex-column p-1">
                                <h2 class="m-0 p-20 p-600 text-primary text-lg-start text-center">Programador Front-end</h2>
                                <p class="m-0 p-16 p-400 text-dark text-lg-start text-center mt-0-50">
                                    Tempo integral
                                </p>
                                <div class="d-flex justify-content-between align-items-center pt-1">
                                    <p class="m-0 p-16 p-400 text-dark">
                                        Caxias do Sul
                                    </p> 
                                    <a href="" class="text-decoration-none">
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
