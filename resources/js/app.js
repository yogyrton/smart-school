require('./bootstrap');

import Swiper from 'swiper/bundle';

const swiper_1 = new Swiper('#head .swiper', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: "#head .swiper-pagination",
        clickable: true
    }
});

const swiper_2 = new Swiper('#teachers .swiper', {
    loop: false,
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
        nextEl: '#teachers .slider-button-next',
        prevEl: '#teachers .slider-button-prev',
    }
});