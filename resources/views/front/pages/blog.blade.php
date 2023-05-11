@extends('front.layout.app')

@section('content')
    <main id="blog" class="overflow-hidden py-2 py-lg-4">
        <section class="busca">
            <div class="container">
                <div class="row g-2">
                    <h2 class="w-100 text-lg-start text-center h2 p-600 text-primary">Nossa últimas postagens</h2>
                    @foreach (range(0,10) as $i)
                        <div class="col-lg-4">
                            <div class="ratio ratio-1x1">
                                <a href="">
                                    <img class="w-100 h-100 object-fit-cover rounded-40-topp" src="{{ asset('front/images/backgrounds/blog.png') }}" alt="Logo {{ env('APP_NAME') }}">
                                </a>    
                            </div>
                            <div class="bg-cinza-claro p-2 rounded-40-bottomm">
                                <p class="p-16 p-400 text-dark">20/05/2002</p>
                                <h2 class="text-dark h2 p-600">TEF: O que é, como funciona, quem está obrigado, onde adquirir</h2>
                                <p class="p-16 p-400 text-dark pt-1">
                                    A Tecnologia é um segmento que cresce muito, mas ninguém cresce sozinho não é mesmo? E como nosso projeto de expansão visa atender a todo [...]
                                </p>
                                <a href="" class="text-decoration-none">
                                    <button class="btn btn-outline-danger rounded-40 mt-2 p-16 p-400 text-dark">Ver mais</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

    </main>
@endsection
