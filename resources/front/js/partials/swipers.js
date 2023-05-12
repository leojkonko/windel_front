/**
 * Declaração dos swipers
 * Exemplo:
 * let swiper = new Swiper(".swiper-teste", {opcoes})
 */

new Swiper(".banner-swiper", {
    // autoplay: {
    // delay: 7500,
    // disableOnInteraction: false,
    //},
    rewind: false,
    navigation: {
        nextEl: ".banner-swiper .swiper-button-next",
        prevEl: ".banner-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".banner-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
});
new Swiper(".depoimentos-swiper", {
    slidesPerView: 1,
    spaceBetween: 130,
    rewind: false,
    navigation: {
        nextEl: ".depoimentos-swiper .swiper-button-next",
        prevEl: ".depoimentos-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".depoimentos-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
});
new Swiper(".empresa-swiper", {
    slidesPerView: 2,
    spaceBetween: 30,
    navigation: {
        nextEl: ".empresa-swiper .swiper-button-next",
        prevEl: ".empresa-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".empresa-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
    breakpoints: {
        1200: {
            slidesPerView: 5,
        },
        992: {
            slidesPerView: 5,
        },
        767: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 2,
        },
    },
});
new Swiper(".empresa2-swiper", {
    slidesPerView: 2,
    spaceBetween: 10,
    navigation: {
        nextEl: ".empresa2-swiper .swiper-button-next",
        prevEl: ".empresa2-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".empresa2-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
    breakpoints: {
        1200: {
            slidesPerView: 4,
        },
        992: {
            slidesPerView: 4,
        },
        767: {
            slidesPerView: 3,
        },
    },
});
new Swiper(".parceiros-swiper", {
    slidesPerView: 2,
    spaceBetween: 50,
    //rewind: false,
    navigation: {
        nextEl: ".parceiros-swiper .swiper-button-next",
        prevEl: ".parceiros-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".parceiros-swiper .swiper-pagination",
        type: "bullets",
        clickable: true,
    },
    breakpoints: {
        1200: {
            slidesPerView: 6,
        },
        992: {
            slidesPerView: 4,
        },
        767: {
            slidesPerView: 3,
        },
        576: {
            slidesPerView: 2,
        },
    },
});

new Swiper(".gallery-swiper", {
    rewind: false,
    slidesPerView: 1,
    spaceBetween: 1,
    navigation: {
        nextEl: ".gallery-swiper .swiper-button-next",
        prevEl: ".gallery-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".gallery-swiper .swiper-pagination",
        type: "bullets",
        dynamicBullets: true,
        clickable: true,
    },
});
new Swiper(".produto-detalhe-swiper", {
    //rewind: false,
    slidesPerView: 1,
    spaceBetween: 1,
    navigation: {
        nextEl: ".produto-detalhe-swiper .swiper-button-next",
        prevEl: ".produto-detalhe-swiper .swiper-button-prev",
    },
    pagination: {
        el: ".produto-detalhe-swiper .swiper-pagination",
        type: "bullets",
        dynamicBullets: true,
        clickable: true,
    },
});
