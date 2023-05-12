@extends('front.layout.app')

@section('content')
    <main id="vaga-detalhe" class="">
        <section class="busca py-2 py-lg-4">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex m-auto">
                        <div class="border border-cinza p-lg-2 p-1 rounded-40">
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
        <section class=" pb-2 pb-lg-4 mb-2" >
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
                                        <select name="" id="" placeholder="Telefone*" class="form-select mb-0-50">
                                            <option value="" class="text-cinza-escuro" selected>Setor de interesse *</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-0">
                                        <input type="file" placeholder="CNPJ*" class="form-control mb-0-50" wire:model.defer="phone" required>
                                    </div>
                                    <div class="col-12 mt-0">
                                        <input type="text" placeholder="Assunto*" class="form-control mb-0-50" wire:model.defer="phone" required>
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
