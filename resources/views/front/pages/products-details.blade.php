@extends('front.layout.app')

@section('content')
    <main id="produto">
        <section class="produto-detalhe py-lg-4 py-2">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-start titulo">
                            <h2 class="h2 p-600 text-primary text-lg-start text-center">Controle os resultados do seu negócio em um só lugar!</h2>
                        </div>
                        <div class="p p-text pt-1 text-lg-start text-center">
                            <p class="p-400 p-16">
                                Sistema de Gestão Empresarial simples e de alta performance, ideal para pequenos comércios ou empreendedores.
                            </p>
                            <p class="p-400 p-16">
                                O <span class="p-600">Windel Compacto</span> é uma solução completa para você, empresário ou empreendedor que não necessita emitir documentos fiscais*, com ele você poderá controlar sua empresa ou negócio individual contando com diversos benefícios.
                            </p>
                            <p class="p-400 p-16">
                                O <span class="p-600">Windel Compacto</span> é composto pelos principais módulos do <span class="p-600">Sistema Windel ERP</span>, são eles:
                            </p>
                            <div class="=">
                                <ul class="w-100 col-12 text-start d-flex justify-content-center flex-column">
                                    <li>
                                        Cadastros
                                    </li>
                                    <li>
                                        Financeiro
                                    </li>
                                    <li>
                                        Compras
                                    </li>
                                    <li>
                                        Orçamentos
                                    </li>
                                    <li>
                                        Pedido
                                    </li>
                                    <li>
                                        Ordens de serviço
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center">
                        <div class="swiper produto-detalhe-swiper">
                            <div class="swiper-wrapper">
                                
                                    @foreach (range(0,4) as $image)
                                        <div class="swiper-slide">
                                            <div class="ratio ratio-1x1">
                                                <img class="w-100 h-100 object-fit-cover" src="{{ asset('front/images/backgrounds/windel-compacto.png') }}" alt="Logo {{ env('APP_NAME') }}"> 
                                            </div>
                                            <p class="text-white">.</p>
                                        </div>
                                    @endforeach
                               
                            </div>
                            <div class="swiper-button-prev rounded-circle bg-danger w-35 h-35">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 12L16 20L24 28" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                                </svg>                                      
                            </div>
                            <div class="swiper-button-next rounded-circle bg-danger w-35 h-35">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 28L24 20L16 12" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                                </svg>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cards">
            <div class="container">
                <div class="row">
                    @foreach (range(0,2) as $e)
                    <div class="col-lg-4 col-6">
                        <div class="border border-cinza rounded-40 p-lg-3 p-2 my-1 my-lg-0">
                            <h2 class="w-100 text-lg-start text-center text-danger p-16 p-600">Windel cadastros</h2>
                            <ul>
                                @foreach (range(0,9) as $i)
                                <li>* Clientes</li>
                                @endforeach
                            </ul>
                            <p class="p-400 p-12">* Este item não está contemplado neste pacote</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <x-depoimentos />
        <section class="py-lg-4 py-2">
            <div class="container">
                <div class="row">
                    <h2 class="w-100 text-center gap-1 d-flex align-items-center justify-content-center mb-2 p-600 h2">
                        <svg class="me-1" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                            <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                            <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                        </svg>
                            Serviços adicionais
                        <svg class="ms-1" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                            <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                            <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                        </svg>
                    </h2> 
                    <div class="col-lg-4">
                        <div class="bg-cinza-claro rounded-40 p-2 p-lg-3 text-lg-start text-center my-1 my-lg-0">
                            <img class="mb-2" src="{{ asset('front/images/icons/icon-solucoes.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                            <h2 class="text-danger p-600 h2 w-100 text-lg-start text-center">Windel compacto</h2>   
                            <p class="p-400 p-16 text-lg-start text-center">Emissão de documentos fiscais facilitada</p>
                            <button class="btn btn-outline-danger rounded-40 mt-2 p-16 p-400 text-dark">Saiba mais</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-cinza-claro rounded-40 p-2 p-lg-3 text-lg-start text-center my-1 my-lg-0">
                            <img class="mb-2" src="{{ asset('front/images/icons/icon-solucoes.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                            <h2 class="text-danger p-600 h2 w-100 text-lg-start text-center">Windel compacto</h2>   
                            <p class="p-400 p-16 text-lg-start text-center">Emissão de documentos fiscais facilitada</p>
                            <button class="btn btn-outline-danger rounded-40 mt-2 p-16 p-400 text-dark">Saiba mais</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-cinza-claro rounded-40 p-2 p-lg-3 text-lg-start text-center my-1 my-lg-0">
                            <img class="mb-2" src="{{ asset('front/images/icons/icon-solucoes.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                            <h2 class="text-danger p-600 h2 w-100 text-lg-start text-center">Windel compacto</h2>   
                            <p class="p-400 p-16 text-lg-start text-center">Emissão de documentos fiscais facilitada</p>
                            <button class="btn btn-outline-danger rounded-40 mt-2 p-16 p-400 text-dark">Saiba mais</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=" pb-2 pb-lg-4 mb-2" >
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
