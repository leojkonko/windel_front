@extends('front.layout.app')

@section('content')
    <main id="blog" class="overflow-hidden py-2 py-lg-4">
        <section class="busca position-relative">
            <div class="container">
                <div class="row g-2">
                    <div class="d-flex">
                        <h2 class="w-100 text-lg-start text-center h2 p-600 text-primary">Nossa últimas postagens</h2>
                        <button class="btn btn-outline-cinza rounded-40 text-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            Categorias
                            <svg class="ms-0-50" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 2.5H13M5 10.5H9M3 6.5H11" stroke="#615E76" stroke-width="1.5" stroke-linejoin="round"/>
                            </svg>                                
                        </button>
                    </div>
                    @foreach (range(0,10) as $i)
                        <div class="col-lg-4" data-aos="zoom-in">
                            <div class="ratio ratio-1x1">
                                <a href="">
                                    <img class="w-100 h-100 object-fit-cover rounded-40-topp" src="{{ asset('front/images/backgrounds/blog.png') }}" alt="Logo {{ env('APP_NAME') }}">
                                </a>    
                            </div>
                            <div class="bg-cinza-claro p-2 rounded-40-bottomm text-lg-start text-center">
                                <p class="p-16 p-400 text-dark">20/05/2002</p>
                                <h2 class="text-dark h2 p-600">TEF: O que é, como funciona, quem está obrigado, onde adquirir</h2>
                                <p class="p-16 p-400 text-dark pt-1">
                                    A Tecnologia é um segmento que cresce muito, mas ninguém cresce sozinho não é mesmo? E como nosso projeto de expansão visa atender a todo [...]
                                </p>
                                <a href="{{ route('blog-detalhe') }}" class="text-decoration-none">
                                    <button class="btn btn-outline-danger rounded-40 mt-2 p-16 p-400 text-dark">Ver mais</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <svg class="position-absolute end-0 bottom-50 translate-middle-y d-none d-lg-block" width="204" height="505" viewBox="0 0 204 505" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.84247 334.29C-7.49031 297.22 4.77304 249.956 25.0618 213.408C45.2217 176.38 73.2313 150.373 100.654 118.349C128.252 86.0216 155.872 48.0287 198.523 24.797C240.998 1.86943 298.808 -6.12117 354.738 9.54191C410.796 25.685 465.15 65.1776 467.75 114.129C470.83 162.952 422.203 220.45 402.61 279.706C383.194 338.658 392.858 398.583 370.322 441.133C347.786 483.684 293.225 508.555 243.317 502.858C193.41 497.161 148.462 461.071 105.283 429.653C62.1042 398.235 21.1753 371.36 6.84247 334.29Z" stroke="#D9476D"/>
            </svg>                
        </section>

    </main>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="background-image: url({{ asset('front/images/backgrounds/bg-seja-parceiro.png') }});
                      background-repeat: no-repeat;
                  background-size: cover;">
        <div class="offcanvas-header w-100">
        <button type="button" class="ms-auto btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

            </div>
        <div class="offcanvas-body">
            <div class=" d-flex justify-content-center">
                {{--<x-site-menu />--}}
                <ul class="list-unstyled d-block mt-4">
                    <li class="mb-1">
                        <a href="{{ route('company') }}" class="text-decoration-none text-dark btn btn-outline-danger p-22 p-600 rounded-40">Filtro 1</a>
                    </li>
                    <li class="mb-1">
                        <a href="{{ route('solutions') }}" class="text-decoration-none text-dark btn btn-outline-danger p-22 p-600 rounded-40">Filtro 2</a>
                    </li>
                    <li class="mb-1">
                        <a href="{{ route('blog') }}" class="text-decoration-none text-dark btn btn-outline-danger p-22 p-600 rounded-40">Filtro 3</a>
                    </li>
                    <div class="d-flex position-absolute bottom-30 start-50 translate-middle-x">
                        <a href="{{ route('home') }}" title="Página principal">
                            <img class="w-100 h-100 object-fit-contain" src="{{ asset('front/images/logos/logo.svg') }}" alt="Logo {{ env('APP_NAME') }}">
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
@endsection
