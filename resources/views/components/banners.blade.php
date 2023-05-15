
    <section class="banner ratio ratio-6x9 ratio-md-16x9 ratio-xl-21x9 posi">
        <div class="banner-swiper">
            <div class="swiper-wrapper">
                @foreach (range(1,5) as $banner)
                    <div class="swiper-slide banner-slide position-relative">

                        <picture>
                            {{-- Desktop --}}
                            <source srcset="{{ asset("front/images/backgrounds/banner.png") }}" media="(min-width: 767px)">
                            {{-- Mobile --}}
                            <img class="object-fit-cover w-100 h-112" src="{{ asset("front/images/backgrounds/banner.png") }}" alt="">
                        </picture>

                    {{-- @if ($banner->link_1)
                            <a href="{{ $banner->link_1 }}" class="stretched-link"></a>
                        @endif --}}

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
        <!--<div class="position-relative">
            <div class="position-absolute z-index-1 w-100">
                <svg class="position-absolute" width="100%" height="100" viewBox="0 0 1920 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 0H846.645C869.282 0 890.993 8.99277 907 25L912.201 30.201C924.878 42.8781 942.072 50 960 50C977.928 50 995.122 42.8781 1007.8 30.201L1013 25C1029.01 8.99277 1050.72 0 1073.36 0H1920V100H0V0Z" fill="white"/>
                </svg> 
                <a href="#solucoes" class="position-absolute start-50 translate-middle-x bottom--40">
                    <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.5">
                        <path d="M1 6L13 18L25 6" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a>
                                              
            </div> 
        </div>-->
        <div class="position-absolute w-100 h-112 z-index-1 d-none d-lg-block">
            <svg class="position-absolute bottom--5" width="100%" height="100" viewBox="0 0 1920 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 0H846.645C869.282 0 890.993 8.99277 907 25L912.201 30.201C924.878 42.8781 942.072 50 960 50C977.928 50 995.122 42.8781 1007.8 30.201L1013 25C1029.01 8.99277 1050.72 0 1073.36 0H1920V100H0V0Z" fill="white"/>
            </svg>     
            <div class="position-absolute start-50 translate-middle-x bottom-30">
                <a href="#solucoes" class="arrow">
                    <svg class="arrow" width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.5">
                        <path d="M1 6L13 18L25 6" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>     
    </section>
