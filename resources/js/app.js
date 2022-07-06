require('./bootstrap');

import Vue from 'vue';
window.EventHandler = new Vue;

import Validations from 'vuelidate';
Vue.use(Validations);



Vue.component('app-form', require('./Form.vue').default);
new Vue({
}).$mount('#app');


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





