@extends('layouts.app')
@section('title', 'Детские лагеря Фабрика Звезд на каникулах за городом')
@section('description', 'Фабрика звезд - детский отдых в Беларуси в Минске. Детские образовательные лагеря круглосуточного и дневного пребывания за городом в д.Жуков Луг.')
@section('content')

<section id="head"
            class="head mb-120 position-relative @if(!empty($mainNews)  && count($mainNews) > 0) notification-size @endif">
        <div class="container">

            <div class="head--container centered-mobile">
                <div>
                    <img src="/img/main/banners/camp-jukov-lug.png" alt="main-banner" class="d-none d-md-block banner-image">
                    <img src="/img/main/banners/camp-jukov-lug-mob.png" alt="main-banner-mob" class="banner-image d-block d-md-none">
                </div>

                <div>
                    <h1 class="h1 pb-48">
                        Лагерь Жуков Луг
                    </h1>
                    <p class="text mb-32 page-description">Наша цель - создать ребенку приятные воспоминания о летнем отдыхе на всю жизнь.</br>
                    Мы достигаем этого благодаря домашней обстановке, дружной команде и атмосфере постоянного праздника и приключений. Наша программа - развлечения, способствующие развитию и приобретению новых знаний и навыков, которые останутся с ребенком на всю жизнь!</p>
                    <div class="btn-group btn-group-1">
                    <button class="button_1 btn-pink" data-bs-toggle="modal" data-bs-target="#requestModal">Оставить заявку</button>
                    </div>

                    <div class="notification--head notification--head-camp">
                        @include('sections.main-news')
                    </div>

                </div>
            </div>

        </div>
</section>

<section class="pb-120 camp-addres-section" id="address">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-5 mb-md-0">
                    <a href="https://goo.gl/maps/wft5Bh46PFRMhpWR6" target="_blank" rel="noopener" class="d-inline-flex align-items-start align-items-sm-center font-weight-bold mb-24">
                        <img src="/svg/location.svg" alt="location-img" class="me-2">
                        <span class="text-start h4 camp-address">д. Жуков Луг, ул. Дорожная, 14А, 5 км от ст. м.Уручье </span>
                    </a>

                    <ul class="mb-10 custom-ul">
                        <li>находится в 5 км от ст.м. Уручье, большая охраняемая территория, двухэтажное здание, удобные помещения;</li>
                        <li>шестиразовое питание с учетом индивидуальных запросов родителей, собственный шеф-повар;</li>
                        <li>условия соответствуют санитарным и противопожарным нормам Республики Беларусь.</li>
                    </ul>

                    <div class="row">

                        <div class="col-md-4"><button class="button_1 btn-pink w-100" data-bs-toggle="modal" data-bs-target="#requestModal">Оставить заявку</button></div>
                    </div>

                </div>
                <div class="col-md-6">
                    @include('address.zhukov-lug-slider')
                </div>
            </div>
        </div>
</section>

<section class="schedule pb-120" id="schedule">
    <div class="container">
        <h2 class="accentColor mb-40">
            График смен
        </h2>
        <div class="row">
            <div class="col-lg-9">
                {{-- MOBILE --}}
                <div class="swiper-box d-block d-lg-none">
                    <div class="swiper">
                        <div class="swiper-wrapper text-bold">

                            <div class="swiper-slide">
                                <div class="schedule-card d-flex align-items-center justify-content-center grey">01.06.22 - 14.06.22 </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="schedule-card d-flex align-items-center justify-content-center grey">16.06.22 - 29.06.22 </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="schedule-card d-flex align-items-center justify-content-center grey">01.07.22 - 14.07.22 </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="schedule-card d-flex align-items-center justify-content-center grey">16.07.22 - 29.07.22 </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="schedule-card d-flex align-items-center justify-content-center grey">01.08.22 - 12.08.22 </div>
                            </div>

                            <div  class="swiper-slide">
                                <div class="schedule-card d-flex align-items-center justify-content-center grey">14.08.22 - 25.08.22</div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="d-lg-block d-none">
                    <div class="d-flex text-bold pb-30">
                        <div class="schedule-card d-flex align-items-center justify-content-center grey">01.06.22 - 14.06.22 </div>
                        <div class="schedule-card d-flex align-items-center justify-content-center grey">16.06.22 - 29.06.22 </div>
                        <div class="schedule-card d-flex align-items-center justify-content-center grey">01.07.22 - 14.07.22 </div>
                    </div>
                    <div class="d-flex text-bold">
                        <div class="schedule-card d-flex align-items-center justify-content-center grey">16.07.22 - 29.07.22 </div>
                        <div class="schedule-card d-flex align-items-center justify-content-center grey">01.08.22 - 12.08.22 </div>
                        <div class="schedule-card d-flex align-items-center justify-content-center grey">14.08.22 - 25.08.22</div>
                    </div>
                </div>
            </div>

            <div class="d-block col-lg-3">
                <div class="w-100 h-100 schedule-photo">
                    <img src="/img/main/schedule/camp-jukov-lug.jpg" alt="schedule-img">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pb-120">
    @include('sections.documents')
</div>

<section id="price" class="pb-120 price-jukov">
        <div class="container">
            <h2 class="accentColor mb-40">Наш прейскурант</h2>

            <div class="row">
                <div class="col-lg-6">
                    <img src="/img/main/price/jukov-lug.jpg" alt="jukov-lug-img" class="border-20 img-fluid mb-20">

                </div>

                <div class="col-lg-6">

                    <div class="price--card price--card-camp  mb-24">
                        <div class="d-flex align-items-start mb-3">
                            <img src="/svg/time.svg" alt="timetable-img" class="me-2">
                            <span>Пребывание в лагере: круглосуточное / дневное;</span>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <img src="/svg/food.svg" alt="food-img" class="me-2">
                            <span>Питание: шестиразовое;</span>
                        </div>
                        <div class="d-flex align-items-start">
                            <img src="/svg/people.svg" alt="group-img" class="me-2">
                            <span>Лагерь: до 35 человек.</span>
                        </div>
                    </div>

                    <div class="row mb-40 ">
                        <div class="col-lg-6 col-md-4 mb-3 mb-md-0">
                            <div class="price--card-2 d-flex flex-column h-100">
                                <div class="h3 accentColor text-md-end mb-2">@if(!empty($price)){{$price}} @else 1200 BYN @endif</div>
                                <div class="text-md-end grey">за 14 дней пребывания</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 mb-3 mb-md-0">
                            <div class="price--card-2 d-flex flex-column justify-content-center h-100">
                                <div class="h3 accentColor text-md-end mb-2">@if(!empty($priceForSale)){{$priceForSale}} @else 1000 BYN @endif</div>
                                <div class="mb-2 text-md-end">на смены августа</div>
                                <div class="text-md-end grey">за 12 дней пребывания</div>
                            </div>
                        </div>
                    </div>

                    <ul class="custom-ul-2">
                        <li>проживание в комфортабельных комнатах</li>
                        <li>чистый воздух</li>
                        <li>развлекательно-образовательная программа</li>
                        <li>шестиразовое питание: домашняя кухня от профессионального шеф-повара с учетом индивидуальных запросов родителей</li>
                        <li>есть возможность только дневного пребывания 09:00-19:00</li>
                    </ul>
                </div>
            </div>
        </div>
</section>

@include ('sections.guides')

<div class="pb-120">
    @include ('sections.album')
</div>

<div class="pb-120">
    @include ('sections.contacts')
</div>

<section id="campLinks" class="pb-120">
    <div class="container">
        <h2 class="accentColor mb-40">Вам может быть интересно</h2>
        <div class="d-flex align-items-center justify-content-between position-relative">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="linkBox" href="/camp/dreamland">
                            <div class="img-box">
                                <img src="/img/main/campLinks/dreamland3.jpg" alt="dreamlang-img">
                            </div>
                            <div class="box-inner d-flex flex-column">
                                    <div>
                                        <h3 class="accentColor">Лагерь Беларусь Dreamland </h3>
                                    </div>
                                    <button class="button_2 text">Подробнее</button>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="linkBox" href="/camp/georgia">
                            <div class="img-box">
                                <img src="/img/main/campLinks/gruzia2.jpg" alt="gruzia-img">
                            </div>
                            <div class="box-inner d-flex flex-column">
                                    <div>
                                        <h3 class="accentColor">Лагерь Грузия</h3>
                                    </div>
                                    <button class="button_2 text">Подробнее</button>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="linkBox" href="/dev">
                            <div class="img-box">
                                <img src="/img/main/campLinks/poland.jpg" alt="poland-img">
                            </div>
                            <div class="box-inner d-flex flex-column">
                                    <div>
                                        <h3 class="accentColor">Лагерь Польша</h3>
                                    </div>
                                    <button class="button_2 text">Подробнее</button>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="linkBox" href="/dev">
                            <div class="img-box">
                                <img src="/img/main/campLinks/online.jpg" alt="online-img">
                            </div>
                            <div class="box-inner d-flex flex-column">
                                    <div>
                                        <h3 class="accentColor">Лагерь Онлайн</h3>
                                    </div>
                                    <button class="button_2 text">Подробнее</button>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

@stop
