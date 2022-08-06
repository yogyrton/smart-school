require('./bootstrap');

import Vue from 'vue';

window.EventHandler = new Vue;

import Validations from 'vuelidate';

import Swiper from 'swiper/bundle';
import ScrollReveal from 'scrollreveal';
import magnificPopup from 'magnific-popup';

Vue.use(Validations);

Vue.component('app-form', require('./Form.vue').default);
Vue.component('app-request-form', require('./ReqForm.vue').default);
new Vue({}).$mount('#app');

document.getElementById('preview').classList.add('hidden')

setTimeout(() => {

    document.getElementById('content-area').classList.add('loaded')
    initPage();

}, 1000)

//*Animation*//
var slideUp = {
    delay: 300,
    duration: 1500,
    reset: false,
    easing: 'ease'
};

ScrollReveal().reveal('.scrollreveal', slideUp);
ScrollReveal().reveal('.scrollheader',
    {
        delay: 250,
        duration: 1000,
        reset: false,
    }
);

//



//свайперы

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
    slidesPerGroup: 1,
    spaceBetween: 30,
    navigation: {
        nextEl: '.teachers .slider-button-next',
        prevEl: '.teachers .slider-button-prev',
    },
    pagination: {
        dynamicBullets: true,
        dynamicMainBullets: 1,
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
        nextEl: '#replies .slider-button-next',
        prevEl: '#replies .slider-button-prev',
    },
    pagination: {
        dynamicBullets: true,
        dynamicMainBullets: 1,
        el: ".replies .swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },
    breakpoints: {
        280: {
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
            slidesPerView: 4,
            spaceBetween: 10,
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
    pagination: {
        el: ".news .swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },
    breakpoints: {
        600: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 10,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 30
        }
    }
});

const swiper_5 = new Swiper('#history .swiper', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
        nextEl: '.history .slider-button-next',
        prevEl: '.history .slider-button-prev',
    },
    pagination: {
        el: "#history .swiper-pagination",
        clickable: true
    }
});

const swiper_6 = new Swiper('#info .swiper', {
    loop: false,
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
        el: "#info .swiper-pagination",
        clickable: true
    },
    breakpoints: {
        280: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 3
        },
        1240: {
            slidesPerView: 4
        }
    }
});

const swiper_7 = new Swiper('#partners .swiper', {
    loop: false,
    slidesPerView: 3,
    spaceBetween: 10,
    pagination: {
        el: "#partners .swiper-pagination",
        clickable: true
    },
    breakpoints: {
        280: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        700: {
            slidesPerView: 3
        },
        1400: {
            slidesPerView: 4
        }
    }
});

const swiper_8 = new Swiper('#priority .swiper', {
    loop: false,
    slidesPerView: 2,
    spaceBetween: 10,
    pagination: {
        el: "#priority .swiper-pagination",
        clickable: true
    },
    grid: {
        fill: 'row',
        rows: 2,
    },
    breakpoints: {
        280: {
            slidesPerView: 1,
            rows: 2,
        },
        768: {
            slidesPerView: 2,
            rows: 2,
        },
        1200: {
            slidesPerView: 6,
            rows: 1,
        }
    }
});

const swiper_9 = new Swiper('#priority-online .swiper', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 0,
    pagination: {
        el: "#priority-online .swiper-pagination",
        clickable: true
    },

    breakpoints: {
        280: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 0,
        },
        991: {
            slidesPerView: 2,
        },
        1200: {
            slidesPerView: 6,
        }
    }
});

const swiper_10 = new Swiper('#address .swiper-1', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: "#address .swiper-pagination-1",
        clickable: true
    },

    navigation: {
        nextEl: '#address .swiper-box-1 .slider-button-next',
        prevEl: '#address .swiper-box-1 .slider-button-prev',
    }
});

const swiper_11 = new Swiper('#address .swiper-2', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: "#address .swiper-pagination-2",
        clickable: true
    },

    navigation: {
        nextEl: '#address .swiper-box-2 .slider-button-next',
        prevEl: '#address .swiper-box-2 .slider-button-prev',
    },
});

const swiper_12 = new Swiper('#album .swiper', {
    loop: false,
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
        el: "#album .swiper-pagination",
        clickable: true
    },

    navigation: {
        nextEl: '#album .swiper-box .slider-button-next',
        prevEl: '#album .swiper-box .slider-button-prev',
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        575: {
            slidesPerView: 2,
        },
        991: {
            slidesPerView: 3,
        }
    }
});

const swiper_13 = new Swiper('#price .swiper-0', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 30,
    autoHeight: true,
    pagination: {
        el: "#price .swiper-pagination-0",
        clickable: true
    }
});

const swiper_14 = new Swiper('#price .swiper-1', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 30,
    autoHeight: true,
    pagination: {
        el: "#price .swiper-pagination-1",
        clickable: true
    }
});


const swiper_15 = new Swiper('#price.price-online .swiper-2', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 30,
    autoHeight: true,
    pagination: {
        el: "#price.price-online .swiper-pagination-2",
        clickable: true
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        991: {
            slidesPerView: 2,
        }
    }
});

const swiper_16 = new Swiper('#school .swiper', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: "#school .swiper-pagination",
        clickable: true
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        575: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 0
        }
    }
});

const swiper_17 = new Swiper('#schedule .swiper', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 30,
    autoHeight: true,
    pagination: {
        el: "#schedule .swiper-pagination",
        clickable: true
    }
});

const swiper_18 = new Swiper('#guides .swiper', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 100,
    pagination: {
        el: "#guides .swiper-pagination",
        clickable: true
    },

    navigation: {
        nextEl: '#guides .slider-button-next',
        prevEl: '#guides .slider-button-prev',
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        575: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        1600: {
            slidesPerView: 2,
            spaceBetween: 30
        }
    }
});

const swiper_19 = new Swiper('#campLinks .swiper', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 100,
    pagination: {
        el: "#campLinks .swiper-pagination",
        clickable: true
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        600: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    }
});

const swiper_20 = new Swiper('#documents .swiper', {
    slidesPerView: 1,
    loop: false,
    pagination: {
        el: "#documents .swiper-pagination",
        clickable: true
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        576: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        900: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1400: {
            slidesPerView: 5,
            spaceBetween: 30
        },
        1500: {
            slidesPerView: 6,
            spaceBetween: 30
        }
    },
    navigation: {
        nextEl: '#documents .slider-button-next',
        prevEl: '#documents .slider-button-prev',
    },
});




//для уменьшения лого при скролле
window.onscroll = function () {
    if (window.scrollY < 200) document.querySelector('header').classList.remove('tiny');
    else document.querySelector('header').classList.add('tiny');
};

//для появления ссылки подробнее в блоке news
window.addEventListener("DOMContentLoaded", () => {
    function cutTextWithDots(line) {
        line = line.substring(0, 120);
        line = line.substring(0, line.lastIndexOf(' '));
        line += '...';
        return line;
    }

    const el = document.getElementsByClassName('news-text');
    const el_image = document.getElementsByClassName('news__image-ibg');
    const el_title = document.getElementsByClassName('news-title');
    const full_el = document.getElementsByClassName('full-text');
    const mores = document.getElementsByClassName('news-btn');

    for (let i = 0; i < el.length; i++) {
        let height = getComputedStyle(el[i]).height;
        if (Number(height.substring(0, height.indexOf('px'))) > 115) {
            // el[i].style.height = '120px';
            el[i].style.overflow = 'hidden';
            mores[i].style.display = 'block';
            el[i].innerHTML = cutTextWithDots(el[i].innerHTML);
        }
    }
    for(let i=0; i<mores.length; i++) {
        mores[i].onclick = function() {
            let image = el_image[i].innerHTML;
            let title = el_title[i].innerHTML;
            let description = full_el[i].innerHTML;
            document.querySelector('.modal--image').innerHTML = image;
            document.querySelector('.modal--title').innerHTML = title;
            document.querySelector('.modal--description').innerHTML = description;
            $('#full_news_modal').modal('show');
        }
    }
});

//для кнопки Подробнее, которая раскрывает остальной текст в history
window.addEventListener("DOMContentLoaded", () => {
    let button_more = document.getElementById("btnMore");
    button_more.onclick = function readMore() {
        let hidden_box = document.getElementById("hidden-text-box");

        if (hidden_box.classList.contains('active')) {
            hidden_box.classList.remove('active');

        } else {
            hidden_box.classList.add('active');
            button_more.innerHTML = "Свернуть";
        }
    }
});

//для кнопки Подробнее, которая раскрывает остальной текст в advantages

window.addEventListener("DOMContentLoaded", () => {
    var btn = document.getElementById("btnMore2");
    btn.onclick = function readMore() {
        var dots = document.getElementById("dots2");
        var more = document.getElementById("more2");


        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btn.innerHTML = "Подробнее";
            more.style.display = "none";
        } else {
            dots.style.display = "none";
            btn.innerHTML = "Свернуть";
            more.style.display = "inline";
        }
    }
})


//ZOOM ALBUM IMAGES
$(document).ready(function() {
    $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Загрузка...',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        gallery: {
            clickable: true,
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1],
            tCounter: '<span class="mfp-counter">%curr% из %total%</span>',
            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>'
        }
    });
});

//для отмены выделения при перелистывании слайдера

swiper.onmousedown = swiper.onselectstart = function() {
    return false;
};

swiper.onselectstart = () => false;

swiper.onselectstart.preventDefault() 

document.onselectstart = () => {
event.preventDefault();
}

