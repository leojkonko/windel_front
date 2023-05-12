@extends('front.layout.app')

@section('content')
<main id="partners">
    <section class="pt-lg-4 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex align-items-center text-center text-lg-start">
                    <div class="">
                        <div class="w-100">
                            <svg class="ms-1" width="99" height="6" viewBox="0 0 99 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" width="6" height="6" fill="#D9476D"/>
                                <rect x="46.5" width="6" height="6" fill="#D9476D"/>
                                <rect x="92.5" width="6" height="6" fill="#D9476D"/>
                            </svg>
                        </div>
                        <h2 class="w-100 py-1 h2 p-600 text-primary">
                                Seja um franqueado
                        </h2> 
                        <p class="p-16 p-400">
                            O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ratio ratio-12x9">
                        <img class="w-100 h-100 object-fit-cover" src="{{ asset('front/images/backgrounds/partners.png') }}" alt="Logo {{ env('APP_NAME') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-diferenttial-itens />
    <x-partners-item />
        <x-we-partners />
</main>
@endsection