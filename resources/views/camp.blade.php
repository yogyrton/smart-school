@extends('layouts.app')

@section('content')
@php($routeName = Route::current()->getName())
@php($page = Route::current()->getName())

<section id="head"
            class="head mb-160 position-relative @if(!empty($mainNews)  && count($mainNews) > 0) notification-size @endif">
        <div class="container">

            <div class="head--container centered-mobile">
                <div>
                    <img src="/img/main/banners/camp.png" alt="" class="d-none d-md-block banner-image">
                    <img src="/img/main/banners/camp-mob.png" alt="" class="banner-image d-block d-md-none">
                </div>

                <div>
                    <h1 class="h1 pb-48">
                        Детский лагерь
                    </h1>
                    <div class=" btn-group-4">
                        <a href="/camp/jukov-lug" class="button_1 btn-purple">Жуков Луг</a>
                        <a href="/camp/dreamland" class="button_1 btn-purple">Dreamland</a>
                        <a href="/camp/georgia" class="button_1 btn-purple">Грузия</a>
                        <a href="/dev" class="button_1 btn-purple">Польша</a>
                        <a href="/camp" class="button_1 btn-purple">Онлайн</a>
                        <button class="button_1 btn-pink w-100" data-bs-toggle="modal" data-bs-target="#requestModal">Оставить заявку</button>
                    </div>

                    <div class="notification--head">
                        @if(!empty($mainNews)  && count($mainNews) > 0)
                            <div class="position-relative swiper-box head-swiper">
                                <div class="position-relative container-slider-pagination">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            @foreach($mainNews as $mainNew)
                                                <div class="swiper-slide">
                                                    <div class="advt-box w-100">
                                                        <h5 class="accentColor">{{ $mainNew->title }}</h5>
                                                        <p class="head-text text">{!! $mainNew->text !!}</p>
                                                    </div>

                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        @endif
                    </div>

                </div>
            </div>

        </div>
</section>

<section id="history" class="history scrollreveal pb-120">
        <div class="container">
            <h2 class="accentColor mb-40">О нас</h2>
            <div class="row align-items-center justify-content-between container-mob">
                <div class=" col-lg-7 text order-2 order-lg-7">
                    <div class="history-text-box">
                        <p class="pb-10">
                            Мы – команда единомышленников, создавшая в 2017 году инновационный детский центр и лагерь «Фабрика звезд». Нами была разработана система психологических тренингов, направленная на формирование лидерских качеств, эмоциональную поддержку ребёнка и развитие эмоционального интеллекта. Таким образом, мы стали  первым в Беларуси лагерем с психологическим уклоном.  За годы проведения лагеря более 60% детей возвращаются к нам каждое лето, а старшие ребята приезжают в качестве волонтеров и помощников вожатых.
                        </p>

                        <div id="hidden-text-box">
                            <p class="pb-10">
                                Важной частью программы лагеря является развитие творческих способностей ребенка. На сменах ежедневно проводятся занятия по лепке, живописи, дизайну, а также кулинарные мастер-классы. Занятия проводятся командой наших профессиональных вожатых совместно с приглашенными «звездными» гостями.
                                
                            </p>
                            <p class="pb-10">
                                Мы стремимся к тому, чтобы каждая смена была уникальным погружением в новый мир, в котором каждый ребенок узнает что-то новое и раскроет себя с непривычной стороны. Мы ищем вдохновение во всем, что нас окружает, и идем в ногу со временем, изучая с детьми такие современные направления, как блогерство и мобильная фотография.
                            </p>
                            <p class="pb-10">
                                Благодаря насыщенной программе и неиссякающей энергии наших педагогов в лагере не бывает скучно, а летний отдых детей проходит не только увлекательно, но и полезно. 
                            </p>
                            <p class="pb-10">
                                Сегодня наши лагеря открыты не только в Беларуси, но также в Грузии и Польше. 
                            </p>
                        </div>

                        <button class="accentColor" id="btnMore">Подробнее</button>
                    </div>

                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 text position-relative swiper-box align-items-center order-1 order-lg-2">
                    <div class="slider-button-prev">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.0023 24.9992C21.0015 24.7993 21.0708 24.6054 21.1982 24.4511L25.4705 19.308C25.6156 19.1329 25.8243 19.0226 26.0508 19.0013C26.2773 18.9799 26.503 19.0493 26.6782 19.1941C26.8535 19.339 26.964 19.5475 26.9854 19.7737C27.0067 19.9999 26.9373 20.2253 26.7922 20.4004L22.9642 24.9949L26.675 29.5732C26.7464 29.6605 26.7998 29.7611 26.8321 29.8691C26.8644 29.9772 26.875 30.0905 26.8633 30.2027C26.8516 30.3148 26.8178 30.4235 26.7639 30.5226C26.71 30.6216 26.637 30.7091 26.5491 30.7799C26.4612 30.8584 26.358 30.918 26.246 30.9549C26.1339 30.9917 26.0155 31.0051 25.898 30.9941C25.7806 30.9831 25.6667 30.948 25.5635 30.891C25.4602 30.834 25.3699 30.7563 25.2981 30.6628L21.1491 25.5379C21.0413 25.3798 20.9896 25.1901 21.0023 24.9992V24.9992Z"
                                fill="white"/>
                            <rect x="48.5517" y="48.449" width="47" height="47" rx="23.5"
                                  transform="rotate(179.876 48.5517 48.449)" stroke="white"/>
                        </svg>
                    </div>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="d-flex h-100 justify-content-center">
                                    <img src="/img/main/history/camp-1.jpg" alt="history-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex h-100 justify-content-center">
                                    <img src="/img/main/history/camp-2.jpg" alt="history-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex h-100 justify-content-center">
                                    <img src="/img/main/history/camp-3.jpg" alt="history-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex h-100 justify-content-center">
                                    <img src="/img/main/history/camp-4.jpg" alt="history-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex h-100 justify-content-center">
                                    <img src="/img/main/history/camp-5.jpg" alt="history-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex h-100 justify-content-center">
                                    <img src="/img/main/history/camp-6.jpg" alt="history-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex h-100 justify-content-center">
                                    <img src="/img/main/history/camp-7.jpg" alt="history-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex h-100 justify-content-center">
                                    <img src="/img/main/history/camp-8.jpg" alt="history-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex h-100 justify-content-center">
                                    <img src="/img/main/history/camp-9.jpg" alt="history-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex h-100 justify-content-center">
                                    <img src="/img/main/history/camp-10.jpg" alt="history-img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="slider-button-next">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M27.998 24.0094C27.9984 24.2093 27.9287 24.4031 27.8009 24.557L23.5174 29.6909C23.372 29.8656 23.1631 29.9755 22.9365 29.9964C22.71 30.0172 22.4844 29.9474 22.3095 29.8021C22.1345 29.6569 22.0245 29.4482 22.0036 29.2219C21.9827 28.9957 22.0527 28.7704 22.1981 28.5957L26.0361 24.0094L22.3352 19.4232C22.264 19.3356 22.2109 19.2349 22.1788 19.1268C22.1467 19.0187 22.1364 18.9054 22.1483 18.7932C22.1603 18.6811 22.1943 18.5725 22.2484 18.4735C22.3025 18.3746 22.3757 18.2873 22.4637 18.2167C22.5518 18.1383 22.6551 18.079 22.7672 18.0424C22.8794 18.0058 22.9978 17.9927 23.1153 18.0039C23.2327 18.0152 23.3465 18.0505 23.4496 18.1077C23.5527 18.165 23.6429 18.2428 23.7145 18.3365L27.8523 23.4704C27.9599 23.6287 28.0111 23.8185 27.998 24.0094Z"
                                fill="white"/>
                            <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="white"/>
                        </svg>
                    </div>
                    <div class="history-pseudo"></div>
                </div>
            </div>
        </div>
</section>

<section id="faq">
        <div class="container">
            <h2 class="accentColor mb-40">Часто задаваемые вопросы</h2>

            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="accordion accordion-faq" id="accordionFaq">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOneFaq">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneFaq" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>Возможно только круглосуточное пребывание или есть дневное?</span>
                                </button>
                            </h2>
                            <div id="collapseOneFaq" class="accordion-collapse collapse" aria-labelledby="headingOneFaq" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                Есть возможность дневного пребывания.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2Faq">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2Faq" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>Если у ребенка аллергия или пожелания по питанию?</span>
                                </button>
                            </h2>
                            <div id="collapse2Faq" class="accordion-collapse collapse" aria-labelledby="heading2Faq" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    На сменах работает профессиональный шеф-повар, который готовит с учетом индивидуальных запросов и особенностей детей.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3Faq">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3Faq" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>Сколько вожатых на смене?</span>
                                </button>
                            </h2>
                            <div id="collapse3Faq" class="accordion-collapse collapse" aria-labelledby="heading3Faq" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    На 10 человек 1 вожатый круглосуточного пребывания. Также на сменах работают психологи, представитель администрации, сотрудники анимационной программы и приглашенные гости.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5Faq">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5Faq" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>Как забронировать место?</span>
                                </button>
                            </h2>
                            <div id="collapse5Faq" class="accordion-collapse collapse" aria-labelledby="heading5Faq" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    Необходимо связаться с менеджером по телефонам, указанным на сайте, и в течение суток для вас подготовят договор для бронирования места.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                    <img src="/img/main/faq/camp.jpg" alt="" class="w-100 border-20">
                </div>
            </div>
        </div>
</section>

@include ('sections.partners')
@include ('sections.reviews')
@include ('sections.contacts')

@stop