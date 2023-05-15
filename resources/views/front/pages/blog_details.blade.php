@extends('front.layout.app')

@section('content')
    <main id="blog" class="overflow-hidden">
        <section id="solucoes" class="py-2 py-lg-4">
            <svg class="position-absolute start-0 top-35 d-none d-lg-block" width="197" height="506" viewBox="0 0 197 506" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-36.8316 504.942C-76.3479 509.192 -118.828 485.113 -148.88 456.057C-179.428 427 -197.299 393.214 -221.134 358.437C-245.218 323.412 -274.767 286.9 -286.169 239.69C-297.322 192.728 -290.078 134.82 -260.473 84.8498C-230.37 34.8795 -178.156 -7.4012 -130.199 2.7571C-82.2424 12.4184 -39.2893 74.2706 12.8764 108.532C64.7938 142.545 125.178 148.719 160.446 181.5C195.714 214.281 205.617 273.421 187.197 320.153C168.777 366.885 122.283 400.961 80.7601 434.537C39.2369 468.113 2.68466 500.692 -36.8316 504.942Z" stroke="#D9476D"/>
            </svg>
            <svg class="position-absolute end-0 top-150 translate-middle-y d-none d-lg-block" width="200" height="512" viewBox="0 0 200 512" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M338.126 9.41452C374.473 25.492 399.223 67.5848 410.72 107.774C422.647 148.212 421.231 186.408 424.485 228.443C427.829 270.817 435.163 317.212 421.432 363.798C407.61 410.045 372.382 456.572 321.759 485.045C270.704 513.27 204.345 523.779 167.892 491.003C131.191 458.658 124.919 383.616 96.8726 327.861C68.9173 272.447 19.7097 236.907 5.55746 190.884C-8.59481 144.861 12.3991 88.6932 51.7174 57.4318C91.0356 26.1705 148.338 19.9066 201.086 11.5907C253.834 3.27477 301.779 -6.66298 338.126 9.41452Z" stroke="#D9476D"/>
            </svg>                
            <div class="container position-relative"  data-aos="fade-up-left">
                <div class="row gy-2 justify-content-center text-center text-lg-start">
                    <div class="col-12 col-lg-8">
                        <div class="mb-1 w-100 text-lg-start text-center">
                            <h1 class="h2 p-600 text-primary fw-bold mb-0">Título</h1>
                        </div>
                        <div class="ratio ratio-16x9">
                            <x-gallery-swiper  />
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                            <small class="text-muted mb-1 d-block">Data: 27/25/2020</small>
                        <div class="editor-texto">
                            <p class="text-dark p-16 p-400">
                                Descrição
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="d-flex flex-column flex-lg-row gap-0-50 align-items-center flex-wrap mb-2">
                            <span>
                                Compartilhe:
                            </span>
                            <div class="d-flex gap-0-50 align-items-center">
                                <a class="d-flex btn btn-outline-cinza p-0-50" title="Compartilhe no WhatsApp" href="https://api.whatsapp.com/send?text={{-- 'Veja esse link: ' . route_lang('blog.details', ['slug' => $post->slug]) }}" target="_blank" aria-label="Whatsapp"--}}">
                                    <svg class="w-1-25 h-1-25" id="whatsapp" width="1.25em" height="1.25em" viewBox="0 0 256 256" fill="#D9476D" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M207.15 47.8406C186.013 26.6531 157.864 15 127.95 15C66.2031 15 15.9585 65.2446 15.9585 126.991C15.9585 146.716 21.104 165.986 30.8906 182.987L15 241L74.3754 225.412C90.7201 234.341 109.133 239.033 127.899 239.033H127.95C189.646 239.033 241 188.788 241 127.042C241 97.1268 228.287 69.0281 207.15 47.8406V47.8406ZM127.95 220.166C111.201 220.166 94.8062 215.676 80.5299 207.201L77.15 205.183L41.9384 214.415L51.3214 180.061L49.1018 176.529C39.7692 161.698 34.8759 144.597 34.8759 126.991C34.8759 75.6871 76.6455 33.9174 128 33.9174C152.87 33.9174 176.227 43.6031 193.782 61.2089C211.337 78.8147 222.133 102.171 222.083 127.042C222.083 178.396 179.254 220.166 127.95 220.166V220.166ZM179.001 150.449C176.227 149.036 162.455 142.276 159.882 141.368C157.309 140.41 155.443 139.956 153.576 142.781C151.71 145.606 146.362 151.861 144.698 153.778C143.083 155.645 141.419 155.897 138.644 154.484C122.199 146.262 111.403 139.804 100.557 121.19C97.6817 116.246 103.433 116.599 108.78 105.904C109.688 104.038 109.234 102.424 108.528 101.011C107.821 99.5987 102.222 85.8268 99.9013 80.2272C97.6312 74.779 95.3107 75.5357 93.5955 75.4348C91.9812 75.3339 90.1147 75.3339 88.2482 75.3339C86.3817 75.3339 83.3549 76.0402 80.7821 78.8147C78.2094 81.6397 70.9955 88.3996 70.9955 102.171C70.9955 115.943 81.0344 129.261 82.3964 131.128C83.8089 132.994 102.121 161.244 130.22 173.402C147.977 181.07 154.938 181.725 163.817 180.414C169.215 179.607 180.363 173.654 182.684 167.096C185.004 160.538 185.004 154.938 184.298 153.778C183.642 152.517 181.776 151.811 179.001 150.449Z" />
                                    </svg>
                                </a>
                                <a class="d-flex btn btn-outline-cinza p-0-50" title="Compartilhe no Facebook" href="https://www.facebook.com/sharer/sharer.php?u={{-- route_lang('blog.details', ['slug' => $post->slug]) }}" target="_blank" aria-label="Facebook--}}">
                                    <svg class="w-1-25 h-1-25" id="facebook_f" width="1.25em" height="1.25em" viewBox="0 0 256 256" fill="#D9476D" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M181.005 142.188L187.332 101.106H147.776V74.4466C147.776 63.2075 153.301 52.2521 171.017 52.2521H189V17.2754C189 17.2754 172.681 14.5 157.079 14.5C124.503 14.5 103.21 34.1763 103.21 69.7958V101.106H67V142.188H103.21V241.5H147.776V142.188H181.005Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex gap-1 align-items-center flex-wrap flex-column-reverse flex-lg-row">
                            <a href="{{ route_lang('blog') }}" class="btn btn-outline-danger w-max mt-1 mt-sm-0">Voltar</a>
                            <a href="{{ route_lang('blog') }}" class="btn btn-danger text-white w-max mt-1 mt-sm-0">Clique e saiba mais</a>
                        </div>
                    </div>
                    
                    <div class="col-12 mt-4">
                        <h2 class="p-600 h2 w-100 text-center gap-1 d-flex align-items-center justify-content-center mb-2">
                            <svg class="me-1" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                                <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                                <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                            </svg>
                                Mais notícias
                            <svg class="ms-1" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                                <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                                <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                            </svg>
                        </h2> 
                    </div>
                </div>
            </div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-10 d-flex m-auto">
                        <div class="swiper blog-detalhe-swiper">
                            <div class="swiper-wrapper">
                                
                                @foreach (range(0,10) as $i)
                                    <div class="swiper-slide" data-aos="zoom-in-left">
                                        <div class="ratio ratio-1x1">
                                            <a href="">
                                                <img class="w-100 h-100 object-fit-cover rounded-40-topp" src="{{ asset('front/images/backgrounds/blog.png') }}" alt="Logo {{ env('APP_NAME') }}">
                                            </a>    
                                        </div>
                                        <div class="bg-cinza-claro p-2 p-lg-3 rounded-40-bottomm text-lg-start text-center">
                                            <p class="p-16 p-400 text-dark">20/05/2002</p>
                                            <h2 class="text-dark h2 p-600">TEF: O que é, como funciona, quem está obrigado, onde adquirir</h2>
                                            <p class="p-16 p-400 text-dark pt-1">
                                                A Tecnologia é um segmento que cresce muito, mas ninguém cresce sozinho não é mesmo? E como nosso projeto de expansão visa atender a todo [...]
                                            </p>
                                            <a href="{{ route('blog-detalhe') }}" class="text-decoration-none">
                                                <button class="btn btn-outline-danger rounded-40 mt-2 p-16 p-400 text-dark">Ver mais</button>
                                            </a>
                                        </div>
                                    </div>
                            @endforeach
                               
                            </div>
                            <div class="swiper-button-prev rounded-circle bg-danger w-35 h-35 start-30 top-50">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24 12L16 20L24 28" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                                </svg>                                      
                            </div>
                            <div class="swiper-button-next rounded-circle bg-danger w-35 h-35 end-30 top-50">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 28L24 20L16 12" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
                                </svg>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
