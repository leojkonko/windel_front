@extends('front.layout.app')

@section('content')
    <main id="solucoes py-lg-4 py-3">
        <section id="solucoes" class="py-lg-4 py-3 position-relative">
            <svg class="position-absolute end-0  d-none d-lg-block z-index-3" width="208" height="504" viewBox="0 0 208 504" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M369.268 41.207C400.216 66.144 413.228 113.208 413.931 155.004C414.986 197.151 403.732 233.678 395.995 275.123C388.259 316.919 383.335 363.632 358.014 405.076C332.694 446.17 286.624 481.995 230.356 496.395C173.736 510.444 106.918 503.419 80.1908 462.326C53.1117 421.584 66.4754 347.475 53.8151 286.362C41.1548 225.6 2.82214 178.536 1.06376 130.418C-0.694619 82.3004 34.1213 33.4801 80.1908 13.4602C126.26 -6.5596 183.232 2.22104 236.335 7.84064C289.438 13.4602 338.321 16.27 369.268 41.207Z" stroke="#D9476D"/>
            </svg>
            <svg class="position-absolute start-0 top-50 d-none d-lg-block z-index-3" width="201" height="505" viewBox="0 0 201 505" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-261.158 334.29C-275.49 297.221 -263.227 249.956 -242.938 213.408C-222.778 176.38 -194.769 150.373 -167.346 118.35C-139.748 86.0217 -112.128 48.0289 -69.477 24.7971C-27.002 1.86955 30.8079 -6.12104 86.7376 9.54203C142.796 25.6851 197.15 65.1777 199.75 114.129C202.83 162.952 154.203 220.451 134.61 279.706C115.194 338.658 124.858 398.583 102.322 441.133C79.7862 483.684 25.2246 508.556 -24.6826 502.858C-74.5899 497.161 -119.538 461.071 -162.717 429.653C-205.896 398.235 -246.825 371.36 -261.158 334.29Z" stroke="#D9476D"/>
            </svg>
                    
            <div class="container">
                <div class="row">
                    @foreach (range(0,6) as $i)
                        <div class="col-lg-6">
                            <div class="bg-cinza-claro rounded-40 p-2 p-lg-3 my-1 text-lg-start text-center" data-aos="zoom-in">
                                <img class="mb-2" src="{{ asset('front/images/icons/icon-solucoes.svg') }}" alt="Logo {{ env('APP_NAME') }}"> 
                                <h2 class="text-primary p-600 h2">Windel compacto</h2>   
                                <p class="p-400 p-16 text-dark">
                                    O Windel Compacto é uma solução completa para você, empresário ou empreendedor que não necessita emitir documentos fiscais*, com ele você poderá controlar sua empresa ou negócio individual contando com diversos benefícios.
                                </p>
                                <a href="{{ route('Products-details') }}">
                                    <button class="btn btn-outline-danger text-dark rounded-40 mt-1 p-16 p-400">Saiba mais</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection