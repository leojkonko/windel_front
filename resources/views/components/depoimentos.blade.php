<section class="depoimentos pt-lg-4 pt-3 position-relative" data-aos="fade-up-left">
    <svg class="position-absolute end-0 top--35 d-none d-lg-block" width="252" height="506" viewBox="0 0 252 506" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M255.167 504.942C215.651 509.192 173.171 485.113 143.119 456.056C112.571 427 94.6994 393.214 70.8645 358.437C46.7812 323.412 17.2315 286.9 5.83019 239.69C-5.3228 192.728 1.92116 134.82 31.5262 84.8498C61.6283 34.8794 113.843 -7.40126 161.8 2.75704C209.756 12.4183 252.709 74.2705 304.875 108.532C356.793 142.545 417.177 148.719 452.445 181.5C487.713 214.281 497.616 273.421 479.196 320.153C460.776 366.885 414.282 400.961 372.759 434.537C331.236 468.113 294.683 500.692 255.167 504.942Z" stroke="#D9476D"/>
    </svg>
        
    <div class="container">
        <div class="row">
            <h2 class="w-100 text-center gap-1 d-flex align-items-center justify-content-center mt-2 mb--2 mb-lg-0 p-600 h2">
                <svg class="me-1" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                    <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                    <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                </svg>
                    Depoimentos
                <svg class="ms-1" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                    <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                    <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                </svg>
            </h2> 
            <div class="depoimentos-swiper swiper d-flex m-auto p-lg-5">
                <div class="swiper-wrapper">
                    @foreach (range(1,2) as $banner)
                        <div class="swiper-slide banner-slide position-relative d-block d-lg-flex">
                            <div class="col-lg-8 col-12 d-flex align-items-center bg-cinza-claro p-4 position-relative rounded-40-left rounded-40-top">
                                <div>
                                    <p class="p-400 text-lg-start text-center p-16">
                                        O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. 
                                    </p>
                                    <p class="p-16 p-400 text-lg-start text-center w-100 mt-1">
                                       <span class="p-600 ">Elias Martins</span> <br>
                                        Empresa XYZ
                                    </p>
                                </div>
                                <svg class="position-absolute position-aspas d-none d-lg-block" width="134" height="110" viewBox="0 0 134 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 109L1 81.9441C1 72.8509 2.48148 63.3851 5.44445 53.5466C8.55556 43.559 13 34.0186 18.7778 24.9255C24.5556 15.6832 31.5185 7.70807 39.6667 1L63 17.323C56.1852 27.1615 50.9259 37.2981 47.2222 47.7329C43.5185 58.0186 41.6667 69.1987 41.6667 81.2733L41.6667 109H1ZM71 109V81.9441C71 72.8509 72.4815 63.3851 75.4445 53.5466C78.5556 43.559 83 34.0186 88.7778 24.9255C94.5556 15.6832 101.519 7.70807 109.667 1L133 17.323C126.185 27.1615 120.926 37.2981 117.222 47.7329C113.519 58.0186 111.667 69.1987 111.667 81.2733V109H71Z" stroke="#D9476D" stroke-linejoin="round"/>
                                </svg>                                            
                            </div>
                            <div class="col-lg-4 col-12 d-flex align-items-center bg-roxo p-3 rounded-40-right rounded-40-bottom">
                                <div class="ratio ratio-1x1">
                                    <img class="w-100 h-100 object-fit-cover" src="{{ asset('front/images/logos/_logo_vertical.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev rounded-circle bg-danger w-35 h-35">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 12L16 20L24 28" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>                                      
                </div>
                <div class="swiper-button-next rounded-circle bg-danger w-35 h-35">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 28L24 20L16 12" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                    </svg>                    
                </div>
            </div>
        </div>
    </div>
</section>