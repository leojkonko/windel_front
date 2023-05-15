@extends('front.layout.app')

@section('content')
    <main id="vaga-detalhe" class="">
        <section id="solucoes" class="busca py-2 py-lg-4 position-relative" data-aos="zoom-out-up">
            <svg class="position-absolute start-0 top-50  d-none d-lg-block" width="197" height="506" viewBox="0 0 197 506" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-36.8316 504.942C-76.3479 509.192 -118.828 485.113 -148.88 456.057C-179.428 427 -197.299 393.214 -221.134 358.437C-245.218 323.412 -274.767 286.9 -286.169 239.69C-297.322 192.728 -290.078 134.82 -260.473 84.8498C-230.37 34.8795 -178.156 -7.4012 -130.199 2.7571C-82.2424 12.4184 -39.2893 74.2706 12.8764 108.532C64.7938 142.545 125.178 148.719 160.446 181.5C195.714 214.281 205.617 273.421 187.197 320.153C168.777 366.885 122.283 400.961 80.7601 434.537C39.2369 468.113 2.68466 500.692 -36.8316 504.942Z" stroke="#D9476D"/>
            </svg>     
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex m-auto">
                        <div class="border border-cinza p-lg-3 p-2 rounded-40">
                            <h2 class="h2 p-600 text-primary text-lg-start text-center w-100">Programador Back-End</h2>
                            <p class="p-16 p-400 text-lg-start text-center">
                                Venha fazer parte da Windel Sistemas!
                            </p>
                            <p class="p-16 p-400 text-lg-start text-center">
                                A Windel está expandindo o setor de desenvolvimento e está com vaga para Programador Back-End com conhecimento em PHP. A atuação é voltada para o desenvolvimento de sistemas
                            </p>
                            <p class="p-16 p-400 text-lg-start text-center">
                                Os requisitos são:    
                            </p>
                            <ul>
                                <li class="p-16 p-400">Experiência na linguagem, com banco de dados MySQL,</li>
                                <li class="p-16 p-400">Desenvolvimento de CMS de sites e gerenciadores de app's.</li>
                                <li class="p-16 p-400">Conhecimento em Frameworks e Front-End.</li>
                            </ul>
                            <p class="p-16 p-400 text-lg-start text-center">
Não é necessária muita experiência prévia. Buscamos pessoas que queiram crescer e aprender junto à equipe da Windel Sistemas!
                            </p>
                            <p class="p-16 p-400 text-lg-start text-center">
                                Se interessou?
                            </p>
                            <p class="p-16 p-400 text-lg-start text-center">
                                Preencha o formulário abaixo que entraremos em contato o mais breve possível caso você seja selecionado!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class=" pb-2 pb-lg-4 mb-2" data-aos="zoom-out-down">
            <div class="container">
                <div class="px-1 bg-cinza-claro rounded-40" style="background-image: url({{ asset('front/images/backgrounds/bg-contato.png') }});
                background-repeat: no-repeat;
            background-size: cover;">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 position-relative ">
                            <div class="">
                                <img class="position-absolute top--5 start-50 translate-middle-x h-105 rounded-40-topp z-index-2" 
                            src="{{ asset('front/images/backgrounds/trabalhe-conosco.png') }}" alt="Logo {{ env('APP_NAME') }}">
                            </div>
                       
                        </div>
                        <div class="col-lg-7 col-12">
                            <div class="formulario shadow-l rounded-3 p-lg-2 p-1">
                                <h2 class="h2 p-600 text-dark fw-bold text-lg-start text-center text-black my-1">Fale com a gente</h2>
                                <form wire:submit.prevent="send" class="row g-1">
                                    @csrf
                                    <div class="col-12 mt-0">
                                        <input type="text" placeholder="Nome completo*" class="form-control mb-0-50 mt-1" wire:model.defer="name" required>
                                    </div>
                                    <div class="col-12 mt-0">
                                        <input type="text" placeholder="Telefone*" class="form-control mb-0-50 mask-telefone" wire:model.defer="phone" required>
                                    </div> 
                                    <div class="col-12 mt-0">
                                        <input type="text" placeholder="Email*" class="form-control mb-0-50 mask-telefone" wire:model.defer="phone" required>
                                    </div>
                                    <div class="col-12 mt-0 mb-0-50">
                                        <div class="custom-file-input bg-cinza position-relative">
                                            <label for="file-input" style="background-image: url({{ asset('front/images/backgrounds/input.svg') }});
                                                background-size: 100% 40%;
            background-position-y: 50%;
            display: flex;
            background-repeat: no-repeat;
            margin-left: auto;"></label>
                                            <input id="file-input" type="file" placeholder="CNPJ*" class="form-control mb-0-50" wire:model.defer="phone" required>
                                        </div>
                                        <!--<input type="file" placeholder="CNPJ*" class="form-control mb-0-50" wire:model.defer="phone" required>-->
                                    </div>
                                    <div class="col-12 mt-0">
                                        <textarea id="" Placeholder="Mensagem*" class="form-control" rows="5" wire:model.defer="message" required></textarea>
                                    </div>
                                    <div class="col-12 d-flex justify-content-lg-start justify-content-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" wire:model.defer="accept" id="termosCheck" required>
                                            <label class="form-check-label" for="termosCheck">
                                                <x-accept-text />
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-lg-start justify-content-center">
                                        <button type="submit" class="btn btn-danger text-white mb-1">
                                            <span wire:loading.remove>
                                                Enviar currículo
                                            </span>
                                            <span wire:loading.inline>
                                                Aguarde...
                                            </span>
                                        </button>
                                    </div>
                                   {{-- <div class="col-12">
                                        <x-flash-messages />
                                    </div>--}}
                                </form>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
