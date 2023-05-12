@extends('front.layout.app')

@section('content')
    <main id="solucoes py-lg-4 py-3">
        <section class="py-lg-4 py-3">
            <div class="container">
                <div class="row">
                    @foreach (range(0,6) as $i)
                        <div class="col-lg-6">
                            <div class="bg-cinza-claro rounded-40 p-2 p-lg-3 my-1 text-lg-start text-center">
                                <img class="mb-2" src="{{ asset('front/images/icons/icon-solucoes.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                                <h2 class="text-primary p-600 h2">Windel compacto</h2>   
                                <p class="p-400 p-16 text-dark">
                                    O Windel Compacto é uma solução completa para você, empresário ou empreendedor que não necessita emitir documentos fiscais*, com ele você poderá controlar sua empresa ou negócio individual contando com diversos benefícios.
                                </p>
                                <button class="btn btn-outline-danger text-dark rounded-40 mt-1 p-16 p-400">Saiba mais</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection