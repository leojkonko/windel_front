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