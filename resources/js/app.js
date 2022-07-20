require('./bootstrap');

import Vue from 'vue';
window.EventHandler = new Vue;

import Validations from 'vuelidate';

import Swiper from 'swiper/bundle';

Vue.use(Validations);

Vue.component('app-form', require('./Form.vue').default);
new Vue({
}).$mount('#app');

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
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
        nextEl: '.teachers .slider-button-next',
        prevEl: '.teachers .slider-button-prev',
    },
    pagination: {
        el: ".teachers .swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },
    breakpoints: {
        560: {
            slidesPerView: 2,
        },
        700: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
        1400: {
            slidesPerView: 4,
        }
    }
});

const swiper_3 = new Swiper('#replies .swiper', {
    loop: false,
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
        nextEl: '.replies .slider-button-next',
        prevEl: '.replies .slider-button-prev',
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 30,
            // autoHeight: true,
        },
        500: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        992: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1600: {
            slidesPerView: 3,
            spaceBetween: 20
        }
    }
});

const swiper_4 = new Swiper('#news .swiper', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
        nextEl: '.news .slider-button-next',
        prevEl: '.news .slider-button-prev',
    },
    breakpoints: {
        700: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 3,
        },
        1400: {
            slidesPerView: 4,
        }
    }
});

//для уменьшения лого при скролле
window.onscroll = function() {
    if (window.scrollY < 200) {
        document.querySelector('.header-rectangle').classList.remove('tiny');
        document.querySelector('.logo').classList.remove('tiny');
    } else {
        document.querySelector('.header-rectangle').classList.add('tiny');
        document.querySelector('.logo').classList.add('tiny'); 
    }
}

//для появления ссылки подробнее в блоке news
function cutTextWithDots(line) {
    line = line.substring(0,120)
    line = line.substring(0, line.lastIndexOf(' '));
    line += '...'
    return line;
}

const el = document.getElementsByClassName('news-text');
const mores = document.getElementsByClassName('news-btn');

for (let i = 0; i < el.length; i++) {
    let height = getComputedStyle(el[i]).height;
    if (Number(height.substring(0, height.indexOf('px'))) > 110) {
        el[i].style.height = '110px';
        el[i].style.overflow = 'hidden';
        mores[i].style.display = 'block';
        el[i].innerHTML = cutTextWithDots(el[i].innerHTML);
    }
}