<section class="py-lg-4 py-3 d-lg-none px-0-50 " data-aos="zoom-in-up">
            <div class="container bg-cinza-claro rounded-40" style="background-image: url({{ asset('front/images/backgrounds/bg-seja-parceiro.png') }});
            background-repeat: no-repeat;
        background-size: cover;">
                <div class="row">
                    <div class="empresa-swiper swiper">
                        <div class="swiper-wrapper mb-1">
                            @foreach (range(1,8) as $banner)
                                <div class="swiper-slide p-2">
                                    <div class="ratio ratio-1x1 bg-danger rounded-circle">
                                        <img class="w-100 h-100 p-1 object-fit-cover" src="{{ asset('front/images/icons/diferenciais.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
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
<section class="py-lg-4 py-3 bg-cinza-claro d-none d-lg-block" style="background-image: url({{ asset('front/images/backgrounds/bg-seja-parceiro.png') }});
background-repeat: no-repeat;
background-size: cover;" data-aos="zoom-in-up">
            <div class="container">
                <div class="row">
                    <div class="empresa-swiper swiper">
                        <div class="swiper-wrapper mb-1">
                            @foreach (range(1,8) as $banner)
                                <div class="swiper-slide p-2 p-xl-3 p-xxl-4">
                                    <div class="ratio ratio-1x1 bg-danger rounded-circle">
                                        <img class="w-100 h-100 p-1 p-xl-2 p-xxl-2 object-fit-cover" src="{{ asset('front/images/icons/diferenciais.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                                    </div>
                                    <p class="p-16 p-400 text-center mt-1">Gestão facilitada</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination pagination-danger"></div>
                    </div>
                </div>
            </div>
        </section>