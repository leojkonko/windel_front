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
                        <h2 class="h2 p-600 text-dark fw-bold text-lg-start text-center text-black my-1">Não encontrou a sua vaga?</h2>
                        <h2 class="h2 p-600 text-primary fw-bold text-lg-start text-center my-1">Envie um currículo!</h2>
                        <form wire:submit.prevent="send" class="row g-1">
                            @csrf
                            <div class="col-12 mt-0">
                                <input type="text" placeholder="Nome completo*" class="form-control mb-0-50 mt-1" wire:model.defer="name" required>
                            </div>
                            <div class="col-12 mt-0">
                                <input type="text" placeholder="Telefone*" class="form-control mb-0-50 mask-telefone" wire:model.defer="phone" required>
                            </div>
                            <div class="col-12 mt-0">
                                <input type="text" placeholder="Email*" class="form-control mb-0-50 " wire:model.defer="phone" required>
                            </div>
                            <div class="col-12 mt-0">
                                <select name="" id="" placeholder="Telefone*" class="form-select mb-0-50">
                                    <option value="" class="text-cinza-escuro" selected>Setor de interesse *</option>
                                </select>
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