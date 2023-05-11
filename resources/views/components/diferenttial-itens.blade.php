<section class="py-lg-4 py-3 bg-cinza-claro"style="background-image: url({{ asset('front/images/backgrounds/bg-seja-parceiro.png') }});
        background-repeat: no-repeat;
    background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="empresa-swiper swiper">
                        <div class="swiper-wrapper mb-1">
                            @foreach (range(1,8) as $banner)
                                <div class="swiper-slide p-2">
                                    <div class="ratio ratio-1x1 bg-danger rounded-circle">
                                        <img class="w-100 h-100 p-2 object-fit-cover" src="{{ asset('front/images/icons/diferenciais.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                                    </div>
                                    <p class="p-16 p-400 text-center mt-1">Gestão facilitada</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination pagination-danger">

                        </div>
                    </div>
                </div>
            </div>
        </section>