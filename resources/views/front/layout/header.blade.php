<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <x-custom-code type="head" />
    <x-lgpd-head-script />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Agência Ellite Digital">

    {{-- Favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('front/images/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('front/images/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/images/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('front/images/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('front/images/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    {{-- Fonte temporária --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Lora:ital@1&family=Manrope:wght@400;700;800&family=Montserrat:wght@400;700&family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    {{-- Swiper.js --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.css" integrity="sha512-Ja1oxinMmERBeokXx+nbQVVXeNX771tnUSWWOK4mGIbDAvMrWcRsiteRyTP2rgdmF8bwjLdEJADIwdMXQA5ccg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Fancybox --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

    {{--  --}}

    {{-- Front css --}}
    @vite(['resources/front/sass/vendors/bootstrap/bootstrap.scss', 'resources/front/sass/main.scss'])

    <x-head-tags />
    @livewireStyles
</head>

<body>
    <x-custom-code type="body" />
    <header class="header w-100 position-absolute top-0 start-0 w-100">
        <div class="w-100 bg-custom py-1">
            <div class="container">
                <div class="row opacity-1">
                    <div class="col-6 justify-content-start d-flex align-items-center">
                        <p class="m-0 p-16 p-400 ">Vendas <span>0800 600 220</span></p>
                        <button class="">Solicitar Demonstração</button>
                    </div>
                    <div class="col-6 justify-content-end d-flex align-items-center">
                        <p class="m-0 p-16 p-400">Vendas <span>0800 600 220</span></p>
                        <button class="">Solicitar Demonstração</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-2">
            <div class="row align-items-center">
                <div class="col-6 d-flex justify-content-start">
                    <a class="d-flex header-logo" href="{{ route('home') }}" title="Página principal">
                        <img class="w-100 h-100 object-fit-contain" src="{{ asset('front/images/logos/logo.svg') }}" alt="Logo {{ env('APP_NAME') }}">
                    </a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <ul class="list-unstyled d-flex gap-1">
                        <li>
                            <a href="" class="text-decoration-none p-16 p-400 btn btn-outline-cinza rounded-40 text-black">Empresa</a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none p-16 p-400 btn btn-outline-cinza rounded-40 text-black">Soluções</a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none p-16 p-400 btn btn-outline-cinza rounded-40 text-black">Blog</a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none p-16 p-400 btn btn-outline-cinza rounded-40 text-black">Parceiros</a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none p-16 p-400 btn btn-outline-cinza rounded-40 text-black">Contato</a>
                        </li>
                    </ul>
                </div>

                <div class="col-auto ms-auto">

                    {{-- Botão mobile --}}
                    <button class="d-lg-none btn p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasHeader" aria-controls="offcanvasHeader">
                        <svg class="w-1-50 h-1-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="offcanvasHeader" aria-labelledby="offcanvasHeaderLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasHeaderLabel">Menu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasHeader" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div class="">
                                {{--<x-site-menu />--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @if (!Route::is('home'))
        <x-breadcrumbs />
    @endif
