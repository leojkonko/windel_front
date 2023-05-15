<footer id="footer" class="overflow-hidden bg-cinza-claro position-relative" data-aos="fade-down">
    <div class="container">
        <div class="row gy-2 gy-lg-0 text-center text-lg-start align-items-center justify-content-between pt-lg-3 pt-4">
            <div class="col-12 d-flex justify-content-center justify-content-lg-start">
                <a href="{{ route_lang('home') }}" class="d-block logo mb-lg-3">
                    <img class="object-fit-contain w-100 h-100" src="{{ asset('front/images/logos/logo.svg') }}" title="Página principal" alt="Logo {{ env('APP_NAME') }}">
                </a>
            </div>
        </div>    
        <div class="row  gy-lg-0 h-100 w-100 pb-2 d-flex m-auto">
            <div class="col-lg-2 d-flex align-items-start justify-content-center justify-content-lg-start flex-column">
                <p class="p-22 p-600 w-100 text-lg-start text-center mt-2 mt-lg-0">Menu</p>
                <ul class="list-unstyled text-lg-start text-center w-100">
                    <li>
                        <a href="{{ route('company') }}" class="text-decoration-none">
                            Empresa
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('solutions') }}" class="text-decoration-none">
                            Soluções
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="text-decoration-none">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('partners') }}" class="text-decoration-none">
                            Parceiros
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-decoration-none">
                            Fale conosco
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('trabalhe-conosco') }}" class="text-decoration-none">
                            Trabalhe conosco
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 d-flex align-items-start justify-content-center justify-content-lg-start flex-column">
                <p class="p-22 p-600 w-100 text-lg-start text-center">Contatos</p>
                <ul class="list-unstyled text-lg-start text-center w-100">
                    <li>
                        <a href="" target="_blank" class="text-decoration-none">
                            comercial@windel.com.br
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank" class="text-decoration-none">
                            (54) 3025 - 2540
                        </a>
                    </li>
                </ul>
                <div class="mt-1 mt-lg-0">
                    <p class="p-22 p-600 w-100 text-lg-start text-center">Endereço</p>
                    <ul class="list-unstyled text-lg-start text-center w-100">
                        <li>
                            <a href="" target="_blank" class="text-decoration-none">
                                R. Visc. de Pelotas, 361, Centro
    Caxias do Sul-RS, 95020-180
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 d-flex align-items-start justify-content-center justify-content-lg-start flex-column">
                    <p class="p-22 p-600 w-100 text-lg-start text-center mt-1 mt-lg-0">Redes sociais</p>
                    <ul class="list-unstyled w-100 text-lg-start text-center">
                        <li>
                            <a href="" class="text-decoration-none">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_13_379)">
                                    <path d="M8 1.44133C10.136 1.44133 10.3893 1.44933 11.2327 1.488C12.1047 1.528 13.0027 1.72667 13.638 2.362C14.2793 3.00333 14.472 3.89267 14.512 4.76733C14.5507 5.61067 14.5587 5.864 14.5587 8C14.5587 10.136 14.5507 10.3893 14.512 11.2327C14.4727 12.1 14.2693 13.0067 13.638 13.638C12.9967 14.2793 12.108 14.472 11.2327 14.512C10.3893 14.5507 10.136 14.5587 8 14.5587C5.864 14.5587 5.61067 14.5507 4.76733 14.512C3.90667 14.4727 2.988 14.2647 2.362 13.638C1.724 13 1.528 12.102 1.488 11.2327C1.44933 10.3893 1.44133 10.136 1.44133 8C1.44133 5.864 1.44933 5.61067 1.488 4.76733C1.52733 3.90333 1.73267 2.99133 2.362 2.362C3.002 1.722 3.89467 1.528 4.76733 1.488C5.61067 1.44933 5.864 1.44133 8 1.44133ZM8 0C5.82733 0 5.55467 0.00933333 4.70133 0.048C3.46467 0.104667 2.23667 0.448667 1.34267 1.34267C0.445333 2.24 0.104667 3.46533 0.048 4.70133C0.00933333 5.55467 0 5.82733 0 8C0 10.1727 0.00933333 10.4453 0.048 11.2987C0.104667 12.534 0.45 13.7653 1.34267 14.6573C2.23933 15.554 3.46667 15.8953 4.70133 15.952C5.55467 15.9907 5.82733 16 8 16C10.1727 16 10.4453 15.9907 11.2987 15.952C12.5347 15.8953 13.764 15.5507 14.6573 14.6573C15.5553 13.7593 15.8953 12.5347 15.952 11.2987C15.9907 10.4453 16 10.1727 16 8C16 5.82733 15.9907 5.55467 15.952 4.70133C15.8953 3.46467 15.5507 2.236 14.6573 1.34267C13.762 0.447333 12.5313 0.104 11.2987 0.048C10.4453 0.00933333 10.1727 0 8 0Z" fill="#D9476D"/>
                                    <path d="M8 3.892C5.73133 3.892 3.892 5.73133 3.892 8C3.892 10.2687 5.73133 12.108 8 12.108C10.2687 12.108 12.108 10.2687 12.108 8C12.108 5.73133 10.2687 3.892 8 3.892ZM8 10.6667C6.52733 10.6667 5.33333 9.47267 5.33333 8C5.33333 6.52733 6.52733 5.33333 8 5.33333C9.47267 5.33333 10.6667 6.52733 10.6667 8C10.6667 9.47267 9.47267 10.6667 8 10.6667Z" fill="#D9476D"/>
                                    <path d="M12.2707 4.68933C12.8009 4.68933 13.2307 4.25953 13.2307 3.72933C13.2307 3.19914 12.8009 2.76933 12.2707 2.76933C11.7405 2.76933 11.3107 3.19914 11.3107 3.72933C11.3107 4.25953 11.7405 4.68933 12.2707 4.68933Z" fill="#D9476D"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_13_379">
                                    <rect width="16" height="16" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                                @windelsistemas                                
                            </a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_13_384)">
                                    <path d="M16 8.04858C16 12.0413 13.0707 15.3513 9.24667 15.9519V10.3766H11.106L11.46 8.06992H9.24667V6.57325C9.24667 5.94192 9.556 5.32725 10.5467 5.32725H11.5527V3.36325C11.5527 3.36325 10.6393 3.20725 9.76667 3.20725C7.944 3.20725 6.75333 4.31192 6.75333 6.31125V8.06925H4.72733V10.3759H6.75333V15.9513C2.93 15.3499 0 12.0406 0 8.04858C0 3.63058 3.582 0.048584 8 0.048584C12.418 0.048584 16 3.62992 16 8.04858Z" fill="#D9476D"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_13_384">
                                    <rect width="16" height="16" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                                /windelsistemas                                
                            </a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_13_390)">
                                    <path d="M13.6331 13.6336H11.2622V9.92069C11.2622 9.03523 11.2464 7.89587 10.0291 7.89587C8.79436 7.89587 8.60513 8.86018 8.60513 9.85682V13.6336H6.23506V5.99801H8.51131V7.04116H8.54285C9.00725 6.24795 9.86981 5.77408 10.7884 5.80798C13.1915 5.80798 13.6339 7.38888 13.6339 9.44445L13.6331 13.6336ZM3.55985 4.95406C2.79978 4.95406 2.184 4.33826 2.184 3.57817C2.184 2.81807 2.79978 2.20227 3.55985 2.20227C4.31991 2.20227 4.93569 2.81807 4.93569 3.57817C4.93569 4.33826 4.31991 4.95406 3.55985 4.95406ZM4.74489 13.6336H2.37166V5.99801H4.74489V13.6336ZM14.815 0.000840247H1.18031C0.536146 -0.00625606 0.00788449 0.510197 0 1.15438V14.8455C0.00788449 15.4905 0.536146 16.007 1.18031 15.9999H14.815C15.4607 16.0077 15.9913 15.4913 16 14.8455V1.1536C15.9905 0.507832 15.4599 -0.00783302 14.815 0.000840247Z" fill="#D9476D"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_13_390">
                                    <rect width="16" height="16" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                                /windel-sistemas                                
                            </a>
                        </li>
                    </ul>
            </div>
            <div class="col-lg-4">
                <div class="p-lg-2 p-2 border border-secondary rounded-40 mt-1 mt-lg-0 mb-3 mb-lg-0">
                    <p class="p-22 p-600 text-lg-start text-center">Área do cliente</p>
                    <form action="">
                        <input type="text" placeholder="CPF ou CNPJ" class="w-100 form-control border-none mb-0-50">
                        <div class="d-lg-flex align-items-center gap-0-50 text-center">
                            <input type="password" placeholder="Senha" class="form-control border-none">
                            <button class="btn btn-danger text-white rounded-40 p-16 p-400 mt-0-50 mt-lg-0">OK</button>
                        </div>
                        <div class="d-flex justify-content-between mt-1 mt-lg-1">
                            <a href="" class="text-decoration-none text-decoration-underline text-dark p-12 p-400">Esqueci minha senha</a>
                            <a href="" class="text-decoration-none text-decoration-underline text-dark p-12 p-400">Primeiro acesso</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="w-100 bg-custom pb-lg-4 pb-2 d-none d-lg-block">
        <div class="container ">
            <div class="row">
                <div class="col-6 justify-content-start d-flex align-items-center gap-1">
                    <p class="m-0 p-14 p-600 ">Vendas <span class="p-600">0800 600 220</span></p>
                    <a class="text-decoration-none" href="{{ route('solicitacao') }}">
                        <button class="p-600 p-14 btn btn-outline-danger rounded-40 text-dark">Solicitar Demonstração</button>
                    </a>
                </div>
                <div class="col-6 justify-content-end d-flex align-items-center gap-1">
                    <a href="{{ route('suporte') }}" class="text-decoration-none text-dark">
                        <p class="m-0 p-14 p-600 pe-lg-2"><span class="p-600">Central de suporte</span></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="py-1 copyright ">
        <div class="container">
            <div class="d-flex flex-column flex-lg-row text-center text-lg-start gap-1 justify-content-center align-items-center justify-content-sm-between">
                <small class="text-muted small text-dark">@ {{ date('Y') }} {{ env('APP_NAME') }} Sistemas.</small>
                <div class="col-12 col-md-6 col-lg-auto">
                    @inject('site', 'App\\Services\\SiteService')
                    @if ($site->hasPrivacy())
                        <a href="{{ route_lang('privacy') }}" class="small text-muted text-decoration-underline p-14 text-d-n" title="Política de privacidade">Política de privacidade</a>
                    @elseif ($site->useLgpd())
                        <button onClick="ElliteLgpdApi.showModal()" class="btn btn-link p-0 text-muted text-decoration-underline p-14 text-d-n">Gerenciar preferências de cookies</button>
                    @endif
                </div>
                <div class="col-12  col-md-6 col-lg-auto d-flex justify-content-center justify-content-lg-end pe-lg-2">
                    <a href="https://www.ellitedigital.com.br" target="_blank">
                        <svg width="78" height="17" viewBox="0 0 78 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.168 14.0833H5.42779C4.35236 14.0833 3.47947 13.2078 3.47947 12.1291V9.57514C3.47947 8.49646 4.35236 7.62095 5.42779 7.62095H13.2162C14.7136 7.62095 15.9265 6.40442 15.9265 4.9025C15.9265 4.79366 15.8397 4.70417 15.7312 4.70417H4.30654C1.92902 4.70176 0 6.6366 0 9.02129V12.6733C0 15.058 1.92902 16.9928 4.30654 16.9928H6.55385C6.63825 16.9953 6.72264 17.0001 6.80945 17.0001H10.653C12.1504 17.0001 13.3633 15.7836 13.3633 14.2816C13.3633 14.1728 13.2765 14.0833 13.168 14.0833Z" fill="#615E76"/>
                            <path d="M16.5269 0.0170213H14.2796C14.1952 0.0146027 14.1108 0.00976562 14.024 0.00976562H10.1804C8.68301 0.00976562 7.47014 1.2263 7.47014 2.72822C7.47014 2.83705 7.55694 2.92654 7.66545 2.92654H15.4057C16.4811 2.92654 17.354 3.80205 17.354 4.88073V7.43472C17.354 8.51339 16.4811 9.38891 15.4057 9.38891H7.61723C6.11982 9.38891 4.90695 10.6054 4.90695 12.1074C4.90695 12.2162 4.99376 12.3057 5.10226 12.3057H16.5245C18.902 12.3057 20.831 10.3708 20.831 7.98615V4.33414C20.8334 1.95186 18.9068 0.0170213 16.5269 0.0170213Z" fill="#615E76"/>
                            <path d="M42.6917 0H42.3613C40.7434 0 39.434 1.31569 39.434 2.93612V15.2683C39.434 15.3917 39.5353 15.4932 39.6583 15.4932H39.9886C41.6066 15.4932 42.9159 14.1776 42.9159 12.5571V0.224925C42.9159 0.101579 42.8147 0 42.6917 0Z" fill="#615E76"/>
                            <path d="M37.7944 0.0120928H28.0552C25.6729 0.0120928 23.7415 1.94935 23.7415 4.33888V11.164C23.7415 13.5536 25.6729 15.4908 28.0552 15.4908H30.3074C30.3918 15.4932 30.4762 15.4981 30.563 15.4981H34.4114C35.9112 15.4981 37.1265 14.2791 37.1265 12.7772C37.1265 12.6684 37.0397 12.5789 36.9311 12.5789H29.1765C28.0986 12.5789 27.2233 11.7034 27.2233 10.6199V9.20743C27.2233 9.1518 27.2692 9.10585 27.3246 9.10585H32.668C34.1437 9.10585 35.3373 7.90625 35.3373 6.42851C35.3373 6.31968 35.2505 6.23019 35.142 6.23019H27.3246C27.2692 6.23019 27.2233 6.18424 27.2233 6.12861V4.89273C27.2233 3.81164 28.0962 2.9337 29.1765 2.9337H35.277C36.7768 2.9337 37.9921 1.71475 37.9921 0.212833C37.9897 0.0991606 37.9029 0.0120928 37.7944 0.0120928Z" fill="#615E76"/>
                            <path d="M52.561 3.46578H53.9909C54.9024 3.46578 55.6403 2.72571 55.6403 1.8115V0.377294C55.6403 0.169299 55.4715 0 55.2641 0H53.8342C52.9227 0 52.1849 0.740077 52.1849 1.65429V3.08849C52.1849 3.29649 52.3537 3.46578 52.561 3.46578Z" fill="#615E76"/>
                            <path d="M49.0816 0H48.7512C47.1333 0 45.8239 1.31569 45.8239 2.93612V15.2683C45.8239 15.3917 45.9252 15.4932 46.0482 15.4932H46.3785C47.9965 15.4932 49.3058 14.1776 49.3058 12.5571V0.224925C49.3058 0.101579 49.2045 0 49.0816 0Z" fill="#615E76"/>
                            <path d="M72.2154 3.46578C70.3273 3.46578 68.7624 4.08977 67.6894 5.27486C66.7201 6.34386 66.1872 7.8482 66.1872 9.51217C66.1872 12.9973 68.8758 15.6263 72.4396 15.6263C75.6249 15.6263 77.1537 13.6793 77.4358 13.2779C77.4599 13.2416 77.4527 13.1908 77.4213 13.1642L77.3128 13.0723C76.3411 12.2524 75.0269 11.9888 73.8092 12.3491C73.3631 12.4821 72.8327 12.5765 72.2226 12.5765C70.9422 12.5765 69.862 11.8727 69.3604 10.8327H76.6811C77.4093 10.8327 77.9976 10.2426 78 9.51217C77.9976 6.12136 75.4585 3.46578 72.2154 3.46578ZM69.2567 8.32466C69.6474 7.2218 70.6071 6.33419 72.0996 6.33419C74.1203 6.33419 74.7014 7.93043 74.8147 8.32466H69.2567Z" fill="#615E76"/>
                            <path d="M55.4281 4.20828H55.0977C53.4797 4.20828 52.1704 5.52397 52.1704 7.1444V15.2683C52.1704 15.3917 52.2717 15.4932 52.3947 15.4932H52.725C54.343 15.4932 55.6523 14.1776 55.6523 12.5571V4.43321C55.6523 4.30986 55.5534 4.20828 55.4281 4.20828Z" fill="#615E76"/>
                            <path d="M64.5981 3.31825H62.3557V0.522407C62.3557 0.413572 62.305 0.31683 62.2206 0.251529C62.1338 0.186228 62.0253 0.16688 61.924 0.198321L61.355 0.370038C60.0457 0.766681 59.1631 1.94935 59.1462 3.31583H57.4969C57.3113 3.31583 57.1618 3.46579 57.1618 3.65201V6.08266C57.1618 6.26889 57.3113 6.41884 57.4969 6.41884H59.1462V11.5534C59.1462 13.1642 59.5827 14.3009 60.4435 14.9346C61.068 15.3941 62.0229 15.6238 63.2936 15.6238C63.706 15.6238 64.1496 15.5997 64.6271 15.5513C64.8007 15.5344 64.9333 15.3892 64.9333 15.2151V12.9344C64.9333 12.8401 64.8971 12.7554 64.8296 12.6901C64.7621 12.6273 64.6753 12.5934 64.5837 12.5982C64.1231 12.62 63.7229 12.62 63.3925 12.6007C63.0453 12.5789 62.7825 12.487 62.6088 12.3274C62.4401 12.1726 62.3557 11.9114 62.3557 11.5558V6.42367H64.5981C64.7838 6.42367 64.9333 6.27372 64.9333 6.0875V3.65443C64.9333 3.4682 64.7838 3.31825 64.5981 3.31825Z" fill="#615E76"/>
                        </svg>                            
                    </a>
                </div>
            </div>
        </div>
        <div class="bg-copyright"></div>
    </div>
    <svg class="position-absolute end--5 bottom-0 d-none d-lg-block" width="205" height="352" viewBox="0 0 205 352" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M461.826 169.954C476.159 207.024 463.895 254.289 443.607 290.837C423.447 327.865 395.437 353.872 368.015 385.895C340.416 418.223 312.796 456.216 270.145 479.448C227.67 502.375 169.861 510.366 113.931 494.703C57.8722 478.56 3.518 439.067 0.918123 390.115C-2.16193 341.292 46.4656 283.794 66.0581 224.538C85.4749 165.587 75.81 105.662 98.3461 63.1114C120.882 20.5609 175.444 -4.3108 225.351 1.38627C275.258 7.08334 320.207 43.1733 363.386 74.5915C406.564 106.01 447.493 132.885 461.826 169.954Z" stroke="#D9476D"/>
    </svg>
</footer>

{{-- Whatsapp fixed button --}}
<x-whatsapp-fixed />

{{-- Jquery --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Swiper.js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.2.0/swiper-bundle.min.js" integrity="sha512-KBCt3sdFOcFtYTgEfE3uJckVpvPr1w8HPugyPgHFE/4iJOwhwj6eSaF27bDJTHRX2jyAFOgV3Ve9vOD97rbjrg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Fancybox --}}
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

{{-- GSAP (caso necessário) --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script> --}}

{{-- Front js --}}
@vite(['resources/front/js/vendors/bootstrap.bundle.min.js', 'resources/front/js/main.js'])

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@livewireScripts

<script>
    AOS.init();
  </script>
</body>

</html>
