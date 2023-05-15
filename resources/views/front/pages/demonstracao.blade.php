@extends('front.layout.app')

@section('content')
<main class="">
    <section id="solucoes" class="pt-lg-4 pt-3 position-relative" data-aos="zoom-in-left">
        <svg class="position-absolute end-0 top-50 d-none d-lg-block" width="200" height="512" viewBox="0 0 200 512" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M338.126 9.41452C374.473 25.492 399.223 67.5848 410.72 107.774C422.647 148.212 421.231 186.408 424.485 228.443C427.829 270.817 435.163 317.212 421.432 363.798C407.61 410.045 372.382 456.572 321.759 485.045C270.704 513.27 204.345 523.779 167.892 491.003C131.191 458.658 124.919 383.616 96.8726 327.861C68.9173 272.447 19.7097 236.907 5.55746 190.884C-8.59481 144.861 12.3991 88.6932 51.7174 57.4318C91.0356 26.1705 148.338 19.9066 201.086 11.5907C253.834 3.27477 301.779 -6.66298 338.126 9.41452Z" stroke="#D9476D"/>
        </svg>            
        <div class="container">
            <div class="row">
                <h2 class="h2 p-600 text-primary text-lg-start text-center">Conheça o Windel em uma demonstração guiada por nossos consultores</h2>
                <p class="p-16 p-400 text-lg-start text-center">O primeiro passo em uma demonstração é identificar qual produto está de acordo com a necessidade da sua empresa e a seguir mostrar como o sistema de gestão Windel pode te ajudar a alavancar seus resultados e acelerar seus processos.</p>
                <p class="p-16 p-400 text-lg-start text-center">Nossas principais características são:</p>
                <ul class="ps-2">
                    <li class="p-16 p-400">
                        Sistema intuitivo e de fácil aprendizagem;
                    </li>
                    <li class="p-16 p-400">
                        Diversos produtos para atender a diferentes necessidades dos clientes;
                    </li>
                    <li class="p-16 p-400">
                        Ideal para micro, pequenas e médias empresas;
                    </li>
                    <li class="p-16 p-400">
                        Atende comércio, indústria e serviços;
                    </li>
                    <li class="p-16 p-400">
                        Interação entre módulos evitando redigitação;
                    </li>
                    <li class="p-16 p-400">
                        Exporta lançamentos para sistemas contábeis; Sistema intuitivo e de fácil aprendizagem;
                    </li>
                    <li class="p-16 p-400">
                        Equipe de implantação especializada para treinar o usuário no seu ritmo;
                    </li>
                    <li class="p-16 p-400">
                        Equipe de suporte sempre apostos para dúvidas dos clientes.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class=" py-3 py-lg-4" data-aos="zoom-out-down">
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
                            <h2 class="h2 p-600 text-dark fw-bold text-lg-start text-center text-black my-1">Solicite uma demonstração!</h2>
                            <livewire:form-contact />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection 