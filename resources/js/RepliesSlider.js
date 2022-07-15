import Swiper, { Navigation } from 'swiper';

function initSliders() {
	if (document.querySelector('.replies-swiper')) { 
		new Swiper('.replies-swiper', { 
			modules: [Navigation],
			observer: true,
			observeParents: true,
			slidesPerView: 3,
			spaceBetween: 20,
			speed: 1000,

			navigation: {
				prevEl: '.replies-swiper__prev',
				nextEl: '.replies-swiper__next',
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
				
			},
			
			// События
			on: {

			}
		});
	}
}
// Скролл на базе слайдера (по классу swiper_scroll для оболочки слайдера)
function initSlidersScroll() {
	let sliderScrollItems = document.querySelectorAll('.swiper_scroll');
	if (sliderScrollItems.length > 0) {
		for (let index = 0; index < sliderScrollItems.length; index++) {
			const sliderScrollItem = sliderScrollItems[index];
			const sliderScrollBar = sliderScrollItem.querySelector('.swiper-scrollbar');
			const sliderScroll = new Swiper(sliderScrollItem, {
				observer: true,
				observeParents: true,
				direction: 'vertical',
				slidesPerView: 'auto',
				freeMode: {
					enabled: true,
				},
				scrollbar: {
					el: sliderScrollBar,
					draggable: true,
					snapOnRelease: false
				},
				mousewheel: {
					releaseOnEdges: true,
				},
			});
			sliderScroll.scrollbar.updateSize();
		}
	}
}

window.addEventListener("load", function (e) {
	// Запуск инициализации слайдеров
	initSliders();
	// Запуск инициализации скролла на базе слайдера (по классу swiper_scroll)
	//initSlidersScroll();
});