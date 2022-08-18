@extends('layouts.app')
@section('title', 'Частная школа Смарт Скул в Минске 1-11 классы')
@section('description', 'Оффлайн и онлайн обучение для 1-11 классов в Беларуси в Минске в школе Smart School. Театральная студия, занятия с репетитором, подготовка к школе, факультативы, курсы, лагеря.')
@section('content')
@php($routeName = Route::current()->getName())

    @php($activeNav = 'school')
    <section id="head" class="head mb-120 position-relative @if(!empty($mainNews)  && count($mainNews) > 0) notification-size @endif">
        <div class="container">

            <div class="head--container centered-mobile">
                <div>
                    <img src="/img/main/banners/new3.webp" alt="" class="d-none d-md-block banner-image">
                    <img src="/img/main/banners/school-belarus-mob.webp" alt="" class="banner-image d-block d-md-none">
                </div>

                <div>
                    <h1 class="h1 pb-48">
                        Частная школа <br> в Республике Беларусь
                    </h1>
                    <div class="btn-group btn-group-3">
                        <a href="/school-belarus/junior" class="button_1 btn-purple text-bold">1-4 класс</a>
                        <a href="/school-belarus/senior" class="button_1 btn-purple text-bold">5-11 класс</a>
                        <button class="button_1 btn-pink text-bold" data-bs-toggle="modal" data-bs-target="#requestModal">Оставить заявку</button>
                    </div>

                    <div class="notification--head">
                        @include('sections.main-news')
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section id="history" class="history pb-120 scrollreveal">
        <div class="container">
            <h2 class="accentColor mb-40">О нас</h2>
            <div class="row align-items-center justify-content-between container-mob">
                <div class=" col-lg-7 text order-2 order-lg-7">
                    <div class="history-text-box">
                        <p class="pb-10">
                            Ученики с 1 по 11 класс обучаются официально с выдачей аттестата государственного образца. Обучение проводится как очно, так и онлайн.
                            Во всех наших школах подобран лучший педагогический коллектив, имеющий большой опыт и авторские методики.
                        </p>

                        <div id="hidden-text-box">
                            <p class="pb-10">Родители наших учеников отмечают повышение уровня успеваемости детей, увеличение концентрации внимания на уроках, возникновение интереса к предметам и рост мотивации к учебе. Это оказалось возможным благодаря авторской методологии, увлекательной подаче учебного материала, вовлечению детей в учебный процесс на протяжении всего периода обучения.
                                <span class="text-bold">Достойное образование для наших детей!</span>
                            </p>
                            <p class="pb-10">
                                Более подробную информацию по программам и условиям обучения в нашей школе можно узнать у менеджеров или оставив заявку на сайте.
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
                                    <img src="/img/main/history/home-3.jpg" alt="history-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex h-100 justify-content-center">
                                    <img src="/img/main/history/home-1.jpg" alt="history-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex h-100 justify-content-center">
                                    <img src="/img/main/history/home-2.jpg" alt="history-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/3H1QoTI_uj0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

    @include('sections.advantagies')

    <section class="pt-120 pb-120 scrollreveal" id="address">
        <div class="container">
            <h2 class="accentColor mb-40">Наши школы</h2>
            <div class="row mb-40">
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="text-center">
                            <a href="https://goo.gl/maps/1DqaKy5WPwUwZm2UA" target="_blank" rel="noopener" class="d-inline-flex align-items-start align-items-sm-center font-weight-bold mb-24">
                                <img src="/svg/location.svg" alt="" class="me-2">
                                <span class="text-start text-md-center h6">г.Минск, ул. Орловская, 80 (Dreamland)</span>
                            </a>

                            <div class="row justify-content-center mb-24">
                                <div class="col-6 col-sm-4 col-md-6 col-xl-4"> <a href="/school-belarus/junior" class="w-100 button_1 btn-purple">1-4 класс</a></div>
                                <div class="col-6 col-sm-4 col-md-6 col-xl-4"><a href="/school-belarus/senior" class="w-100 button_1 btn-purple">5-11 класс</a></div>
                            </div>
                        </div>
                        @include('address.dreamland-slider')
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="text-center">
                            <a href="https://goo.gl/maps/efPppZVbbreqtA369" target="_blank" rel="noopener" class="d-inline-flex align-items-start align-items-sm-center font-weight-bold mb-24">
                                <img src="/svg/location.svg" alt="" class="me-2">
                                <span class="text-start text-md-center h6">д. Жуков Луг, ул. Дорожная, 14А, 5 км от ст.м.Уручье </span>
                            </a>

                            <div class="row justify-content-center mb-24">
                                <div class="col-6 col-sm-4 col-md-6 col-xl-4"> <a href="/school-belarus/junior" class="w-100 button_1 btn-purple">1-4 класс</a></div>
                            </div>
                        </div>

                        @include('address.zhukov-lug-slider')
                    </div>

                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button data-bs-toggle="modal" data-bs-target="#requestModal" class="button_1 btn-pink">Оставить заявку</button>
            </div>
        </div>
    </section>

    <div class="pb-120">
        @include('sections.documents')
    </div>

    <div class="pb-120">
        @include('sections.album')
    </div>

    <div class="pb-120">
        @include('sections.contacts')
    </div>

    @include('sections.schools-without-bel')

@stop

