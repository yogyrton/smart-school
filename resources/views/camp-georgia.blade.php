@extends('layouts.app')

@section('content')

<section id="head"
            class="head mb-120 position-relative @if(!empty($mainNews)  && count($mainNews) > 0) notification-size @endif">
        <div class="container">

            <div class="head--container centered-mobile">
                <div>
                    <img src="/img/main/banners/camp-georgia.png" alt="" class="d-none d-md-block banner-image">
                    <img src="/img/main/banners/camp-georgia-mob.png" alt="" class="banner-image d-block d-md-none">
                </div>

                <div>
                    <h1 class="h1 pb-48">
                        Лагерь в Грузии
                    </h1>
                    <p class="text mb-32 page-description">Наша цель - создать ребенку приятные воспоминания о летнем отдыхе на всю жизнь.</br>
                    Мы достигаем этого благодаря домашней обстановке, дружной команде и атмосфере постоянного праздника и приключений. Наша программа - развлечения, способствующие развитию и приобретению новых знаний и навыков, которые останутся с ребенком на всю жизнь!</p>
                    <div class="btn-group btn-group-1">
                    <button class="button_1 btn-pink" data-bs-toggle="modal" data-bs-target="#requestModal">Оставить заявку</button>
                    </div>

                    <div class="notification--head notification--head-camp">
                        @if(!empty($mainNews)  && count($mainNews) > 0)
                            <div class="position-relative swiper-box head-swiper">
                                <div class="position-relative container-slider-pagination">
                                    <div class="swiper" >
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

<section class="pb-120 camp-addres-section" id="address">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-5 mb-md-0">
                    <a href="https://goo.gl/maps/Nn2LfRR61jfZPt7CA" target="_blank" rel="noopener" class="d-inline-flex align-items-start align-items-sm-center font-weight-bold mb-24">
                        <img src="/svg/location.svg" alt="" class="me-2">
                        <span class="text-start text-md-left h4 camp-address">14 км от г. Батуми, курортный поселок Гонио</span>
                    </a>

                    <ul class="mb-10 custom-ul">
                        <li>14 км от г. Батуми, курортный поселок Гонио;</li>
                        <li>большая охраняемая территория в частном семейном отеле Venera in Gonio с сезонным открытым бассейном и садом.</li>
                    </ul>

                    <div class="row">
                        <div class="col-md-4"><button class="button_1 btn-pink w-100" data-bs-toggle="modal" data-bs-target="#requestModal">Оставить заявку</button></div>
                    </div>

                </div>
                <div class="col-md-6">
                    @include('address.georgia-slider')
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
            <div class="col-lg-6">
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

                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="d-lg-block d-none">
                    <div class="d-flex text-bold pb-30">
                        <div class="schedule-card d-flex align-items-center justify-content-center grey">01.06.22- 14.06.22  </div>
                        <div class="schedule-card d-flex align-items-center justify-content-center grey">16.06.22 - 29.06.22 </div>
                    </div>
                    <div class="d-flex text-bold col-6">
                        <div class="schedule-card d-flex align-items-center justify-content-center grey">01.07.22 - 14.07.22 </div>
                    </div>
                </div>
            </div>

            <div class="d-block col-lg-6">
                <div class="w-100 schedule-photo">
                    <img src="/img/main/schedule/camp-georgia.jpg" alt="schedule-img">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pb-120">
    @include('sections.documents')
</div>

<section id="price" class="pb-120 price-georgia">
        <div class="container">
            <h2 class="accentColor mb-40">Наш прейскурант</h2>

            <div class="row">
                <div class="col-lg-6">
                    <img src="/img/main/price/georgia.jpg" alt="georgia-img" class="border-20 img-fluid mb-20">
                </div>

                <div class="col-lg-6">

                <div class="row mb-40">
                        <div class="col-xl-8 mb-4 mb-xl-0 ">
                            <div class="price--card price--card-camp">
                                <div class="d-flex align-items-start mb-3">
                                    <img src="/svg/time.svg" alt="" class="me-2">
                                    <span>Пребывание в лагере: круглосуточное;</span>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <img src="/svg/food.svg" alt="" class="me-2">
                                    <span>Питание: шестиразовое;</span>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="/svg/people.svg" alt="" class="me-2">
                                    <span>Лагерь: до 35 человек.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="price--card d-flex flex-column justify-content-center h-100">
                                <div class="h3 accentColor text-md-end">@if(!empty($price)){{$price}} @else 325 USD @endif</div>
                                <div class="text-md-end grey">за 14 дней пребывания</div>
                            </div>
                        </div>
                </div>

                    <ul class="custom-ul-2 d-lg-block d-none">
                        <li>проживание 13 ночей/14 дней в комфортных номерах по 3-5 человек (письменный стол, телевизор с плоским экраном, собственная ванная комната);</li>
                        <li>шестиразовое сбалансированное питание с учетом индивидуальных запросов родителей и детей (домашняя кухня от профессиональных поваров: завтрак, второй завтрак, обед, полдник, ужин, второй ужин); </li>
                        <li>круглосуточное обеспечение питьевой водой;</li>
                        <li>круглосуточное квалифицированное педагогическое, психологическое сопровождение детей (с детьми работают опытные педагоги); </li>
                        <li>ежедневные анимационные программы согласно сюжетно-сценарной идее;</li>
                        <li>ежедневные групповые и общие развлекательно-познавательные мероприятия лагеря;</li>
                        <li>обеспечение безопасности и медицинского обслуживания.</li>
                    </ul>

                    <!-- MOBILE -->

                    <div class="swiper-box d-lg-none d-block">
                        <div class="swiper swiper-1 d-lg-none d-block">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <ul class="custom-ul-2">
                                        <li>проживание 13 ночей/14 дней в комфортных номерах по 3-5 человек (письменный стол, телевизор с плоским экраном, собственная ванная комната);</li>
                                        <li>шестиразовое сбалансированное питание с учетом индивидуальных запросов родителей и детей (домашняя кухня от профессиональных поваров: завтрак, второй завтрак, обед, полдник, ужин, второй ужин); </li>
                                    </ul>
                            </div>
                                <div class="swiper-slide">
                                    <ul class="custom-ul-2">
                                        <li>круглосуточное обеспечение питьевой водой;</li>
                                        <li>круглосуточное квалифицированное педагогическое, психологическое сопровождение детей (с детьми работают опытные педагоги); </li>
                                        <li>ежедневные анимационные программы согласно сюжетно-сценарной идее;</li>
                                    </ul>
                            </div>
                            <div class="swiper-slide">
                                <ul class="custom-ul-2">
                                    <li>ежедневные групповые и общие развлекательно-познавательные мероприятия лагеря;</li>
                                    <li>обеспечение безопасности и медицинского обслуживания.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-1"></div>
                    </div>
                    </div>



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
                        <a class="linkBox" href="/camp/jukov-lug">
                            <div class="img-box">
                                <img src="/img/main/campLinks/jukov.jpg" alt="jukov-img">
                            </div>
                            <div class="box-inner d-flex flex-column">
                                    <div>
                                        <h3 class="accentColor">Лагерь Беларусь Жуков Луг </h3>
                                    </div>
                                    <button class="button_2 text">Подробнее</button>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a class="linkBox" href="/camp/dreamland">
                            <div class="img-box">
                                <img src="/img/main/campLinks/dreamland2.jpg" alt="dreamland-img">
                            </div>
                            <div class="box-inner d-flex flex-column">
                                    <div>
                                        <h3 class="accentColor">Лагерь Беларусь Dreamland</h3>
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
