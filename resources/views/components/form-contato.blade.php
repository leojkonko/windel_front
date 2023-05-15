<section class=" pt-2 pt-lg-4" data-aos="zoom-out">
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
                        <h2 class="h2 p-600 text-dark fw-bold text-lg-start text-center text-black my-1">Fale com a gente!</h2>
                        <livewire:form-contact />
                    </div>
                </div>
            </div>
        </div>
        <iframe data-aos="zoom-out-down" class=" mt-lg-4 mt-2 d-lg-none rounded-40 mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d871.0363498856439!2d-51.17361760080261!3d-29.160387300000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951ebcd73f6e965d%3A0x4ff77f48cced0607!2sCIC%20Caxias%20do%20Sul!5e0!3m2!1spt-BR!2sbr!4v1684150968095!5m2!1spt-BR!2sbr" 
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <iframe data-aos="zoom-out-down" class="mb--7 mt-lg-4 mt-2 d-none d-lg-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d871.0363498856439!2d-51.17361760080261!3d-29.160387300000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951ebcd73f6e965d%3A0x4ff77f48cced0607!2sCIC%20Caxias%20do%20Sul!5e0!3m2!1spt-BR!2sbr!4v1684150968095!5m2!1spt-BR!2sbr" 
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>