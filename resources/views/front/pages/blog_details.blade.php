@extends('front.layout.app')

@section('content')
    <main id="blog" class="overflow-hidden">
        <section class="py-2 py-lg-4">
            <div class="container">
                <div class="row gy-2 justify-content-center text-center text-lg-start">
                    <div class="col-12 col-lg-8">
                            <div class="ratio ratio-16x9">
                                <x-gallery-swiper  />
                                    <div class="m-0-50 d-flex gap-0-50 align-items-start justify-content-start">
                                        @foreach (range(0,2) as $category)
                                            <span class="badge bg-secondary">teste</span>
                                        @endforeach
                                    </div>
                            </div>
                    </div>
                    <div class="col-12 col-lg-8">
                            <small class="text-muted mb-1 d-block">Data: 27/25/2020</small>
                        
                        <div class="mb-1">
                            <h1 class="h4 text-primary fw-bold mb-0">Título</h1>
                        </div>
                        <div class="editor-texto">
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="d-flex gap-1 gap-lg-3 align-items-center flex-wrap flex-column-reverse flex-lg-row">
                            <a href="{{ route_lang('blog') }}" class="btn btn-primary w-max mt-1 mt-sm-0">Voltar</a>
                            <div class="d-flex flex-column flex-lg-row gap-0-50 align-items-center flex-wrap">
                                <span>
                                    Compartilhe:
                                </span>
                                <div class="d-flex gap-0-50 align-items-center">
                                    <a class="d-flex btn btn-outline-primary p-0-50" title="Compartilhe no WhatsApp" href="https://api.whatsapp.com/send?text={{ 'Veja esse link: ' . route_lang('blog.details', ['slug' => $post->slug]) }}" target="_blank" aria-label="Whatsapp">
                                        <svg class="w-1-25 h-1-25" id="whatsapp" width="1.25em" height="1.25em" viewBox="0 0 256 256" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M207.15 47.8406C186.013 26.6531 157.864 15 127.95 15C66.2031 15 15.9585 65.2446 15.9585 126.991C15.9585 146.716 21.104 165.986 30.8906 182.987L15 241L74.3754 225.412C90.7201 234.341 109.133 239.033 127.899 239.033H127.95C189.646 239.033 241 188.788 241 127.042C241 97.1268 228.287 69.0281 207.15 47.8406V47.8406ZM127.95 220.166C111.201 220.166 94.8062 215.676 80.5299 207.201L77.15 205.183L41.9384 214.415L51.3214 180.061L49.1018 176.529C39.7692 161.698 34.8759 144.597 34.8759 126.991C34.8759 75.6871 76.6455 33.9174 128 33.9174C152.87 33.9174 176.227 43.6031 193.782 61.2089C211.337 78.8147 222.133 102.171 222.083 127.042C222.083 178.396 179.254 220.166 127.95 220.166V220.166ZM179.001 150.449C176.227 149.036 162.455 142.276 159.882 141.368C157.309 140.41 155.443 139.956 153.576 142.781C151.71 145.606 146.362 151.861 144.698 153.778C143.083 155.645 141.419 155.897 138.644 154.484C122.199 146.262 111.403 139.804 100.557 121.19C97.6817 116.246 103.433 116.599 108.78 105.904C109.688 104.038 109.234 102.424 108.528 101.011C107.821 99.5987 102.222 85.8268 99.9013 80.2272C97.6312 74.779 95.3107 75.5357 93.5955 75.4348C91.9812 75.3339 90.1147 75.3339 88.2482 75.3339C86.3817 75.3339 83.3549 76.0402 80.7821 78.8147C78.2094 81.6397 70.9955 88.3996 70.9955 102.171C70.9955 115.943 81.0344 129.261 82.3964 131.128C83.8089 132.994 102.121 161.244 130.22 173.402C147.977 181.07 154.938 181.725 163.817 180.414C169.215 179.607 180.363 173.654 182.684 167.096C185.004 160.538 185.004 154.938 184.298 153.778C183.642 152.517 181.776 151.811 179.001 150.449Z" />
                                        </svg>
                                    </a>
                                    <a class="d-flex btn btn-outline-primary p-0-50" title="Compartilhe no Facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ route_lang('blog.details', ['slug' => $post->slug]) }}" target="_blank" aria-label="Facebook">
                                        <svg class="w-1-25 h-1-25" id="facebook_f" width="1.25em" height="1.25em" viewBox="0 0 256 256" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M181.005 142.188L187.332 101.106H147.776V74.4466C147.776 63.2075 153.301 52.2521 171.017 52.2521H189V17.2754C189 17.2754 172.681 14.5 157.079 14.5C124.503 14.5 103.21 34.1763 103.21 69.7958V101.106H67V142.188H103.21V241.5H147.776V142.188H181.005Z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
