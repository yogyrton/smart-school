require('./bootstrap');

import Vue from 'vue';

// Vue.component('app-form', require('./Form.vue'));


import Swiper from 'swiper/bundle';
import TeachersSlider from './TeachersSlider';
import RepliesSlider from './RepliesSlider';
import NewsSlider from './NewsSlider';

const swiper_1 = new Swiper('#head .swiper', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: "#head .swiper-pagination",
        clickable: true
    }
});





