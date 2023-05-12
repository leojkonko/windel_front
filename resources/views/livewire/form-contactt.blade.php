<form wire:submit.prevent="send" class="row g-1">
    @csrf
    <div class="col-12 mt-0">
        <input type="text" placeholder="Nome completo*" class="form-control mb-0-50 mt-1" wire:model.defer="name" required>
    </div>
    <div class="col-12 mt-0">
        <input type="text" placeholder="Telefone*" class="form-control mb-0-50 mask-telefone" wire:model.defer="phone" required>
    </div>
    <div class="col-12 mt-0">
        <select name="" id="" placeholder="Telefone*" class="form-control mb-0-50 mask-telefone">
            <option value="">Setor de interesse *</option>
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
                Enviar formulário
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
