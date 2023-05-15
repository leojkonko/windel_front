<section class="parceiros pb-lg-4 pb-3" data-aos="fade-up-left">
    <div class="container">
        <div class="row">
            <h2 class="w-100 text-center gap-1 d-flex align-items-center justify-content-center mb-2 p-600 h2 my-2">
                <svg class="me-1" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                    <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                    <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                </svg>
                    Nossos parceiros
                <svg class="ms-1" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                    <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                    <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                </svg>
            </h2>
            <div class="shadow-ligh">
                <div class="parceiros-swiper swiper pb-4 pt-lg-3">
                    <div class="swiper-wrapper">
                        @foreach (range(1,8) as $banner)
                            <div class="swiper-slide banner-slide position-relative d-flex">
                                <div class="ratio ratio-31x9">
                                    <img class="w-100 h-100 object-fit-cover" src="{{ asset('front/images/logos/logo.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination pagination-danger"></div>
                </div>
            </div>
        </div>
    </div>
</section>