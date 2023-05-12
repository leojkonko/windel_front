
    <section class="banner ratio ratio-6x9 ratio-md-16x9 ratio-xl-21x9">
        <div class="banner-swiper">
            <div class="swiper-wrapper">
                @foreach (range(1,5) as $banner)
                    <div class="swiper-slide banner-slide position-relative">

                        <picture>
                            {{-- Desktop --}}
                            <source srcset="{{ asset("front/images/backgrounds/banner.png") }}" media="(min-width: 767px)">
                            {{-- Mobile --}}
                            <img class="object-fit-cover w-100 h-100" src="{{ asset("front/images/backgrounds/banner.png") }}" alt="">
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
        <div class="position-relative">
            <div class="position-absolute bottom--88 start-50 translate-middle z-index-1 border border-1 border-danger rounded-circle p-2 bg-danger">
                <svg width="26" height="14" viewBox="0 0 26 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L13 13L25 1" stroke="white" stroke-width="2" stroke-linejoin="round"/>
                </svg>                    
            </div> 
        </div>
    </section>
