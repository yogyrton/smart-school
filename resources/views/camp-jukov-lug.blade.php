@extends('layouts.app')
@section('title', 'Детские лагеря Фабрика Звезд на каникулах за городом')
@section('description', 'Фабрика звезд - детский отдых в Беларуси в Минске. Детские образовательные лагеря круглосуточного и дневного пребывания за городом в д.Жуков Луг.')
@section('content')

<section id="head"
            class="head mb-120 position-relative @if(!empty($mainNews)  && count($mainNews) > 0) notification-size @endif">
        <div class="container">

            <div class="head--container centered-mobile">
                <div>
                    <img src="/img/main/banners/camp-jukov-lug.png" alt="" class="d-none d-md-block banner-image">
                    <img src="/img/main/banners/camp-jukov-lug-mob.png" alt="" class="banner-image d-block d-md-none">
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
                    <a href="https://goo.gl/maps/1DqaKy5WPwUwZm2UA" target="_blank" rel="noopener" class="d-inline-flex align-items-start align-items-sm-center font-weight-bold mb-24">
                        <img src="/svg/location.svg" alt="" class="me-2">
                        <span class="text-start h4 camp-address">д. Жуков Луг, ул. Дорожная, 14А, 5 км от ст. м.Уручье </span>
                    </a>

                    <ul class="mb-10 custom-ul">
                        <li>находится в 5 км от ст. м. Уручье, охраняемая территория, двухэтажное здание, удобные помещения, большая территория;</li>
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
                <div class="w-100 schedule-photo">
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
                            <img src="/svg/time.svg" alt="" class="me-2">
                            <span>Пребывание в лагере: круглосуточное / дневное;</span>
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

                    <div class="row mb-40 ">
                        <div class="col-lg-6 col-md-4 mb-3 mb-md-0">
                            <div class="price--card-2 d-flex flex-column h-100">
                                <div class="h3 accentColor text-md-end mb-2">1200 BYN</div>
                                <div class="text-md-end grey">за 14 дней пребывания</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 mb-3 mb-md-0">
                            <div class="price--card-2 d-flex flex-column justify-content-center h-100">
                                <div class="h3 accentColor text-md-end mb-2">1000 BYN</div>
                                <div class="mb-2 text-md-end">на смены августа</div>
                                <div class="text-md-end grey">за 14 дней пребывания</div>
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

<section id="guides" class="scrollreveal pb-120">
        <div class="container">
            <h2 class="accentColor mb-40">Вожатые</h2>
                <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="slider-button-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.003 11.9901C9.00261 11.7902 9.07233 11.5964 9.20004 11.4425L13.4835 6.30862C13.629 6.13388 13.8379 6.02399 14.0645 6.00313C14.291 5.98227 14.5165 6.05215 14.6915 6.19738C14.8664 6.34262 14.9765 6.55132 14.9974 6.77757C15.0182 7.00383 14.9483 7.2291 14.8029 7.40384L10.9648 11.9901L14.6658 16.5764C14.737 16.6639 14.7901 16.7646 14.8222 16.8727C14.8542 16.9808 14.8646 17.0942 14.8527 17.2063C14.8407 17.3184 14.8067 17.427 14.7526 17.526C14.6985 17.6249 14.6253 17.7122 14.5373 17.7828C14.4492 17.8612 14.3459 17.9205 14.2337 17.9571C14.1216 17.9938 14.0031 18.0069 13.8857 17.9956C13.7683 17.9844 13.6545 17.949 13.5514 17.8918C13.4482 17.8346 13.3581 17.7567 13.2865 17.663L9.14864 12.5292C9.04111 12.3708 8.98983 12.181 9.003 11.9901V11.9901Z"
                                fill="#8041FF"/>
                        </svg>
                    </div>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="guide-box">
                                    <div class="img-box">
                                        <img src="/img/main/history/camp-1.jpg" alt="guide-1">
                                    </div>                  
                                    <div class="d-flex flex-column box-inner justify-content-center">
                                        <h3 class="mb-24">Дерех Василий</h3>
                                    </div>
                                </div>
                            </div>                
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                <div class="slider-button-next">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                        d="M14.998 12.0094C14.9984 12.2093 14.9287 12.4031 14.8009 12.557L10.5174 17.6909C10.372 17.8656 10.1631 17.9755 9.93652 17.9964C9.70999 18.0172 9.48444 17.9474 9.30948 17.8021C9.13453 17.6569 9.02451 17.4482 9.00363 17.2219C8.98274 16.9957 9.0527 16.7704 9.19811 16.5957L13.0361 12.0094L9.33519 7.42315C9.26402 7.33563 9.21088 7.23492 9.17881 7.12682C9.14674 7.01872 9.13638 6.90536 9.14833 6.79324C9.16027 6.68113 9.19428 6.57248 9.2484 6.47353C9.30252 6.37459 9.37568 6.2873 9.46369 6.21669C9.55178 6.13833 9.65512 6.07899 9.76724 6.04237C9.87936 6.00576 9.99784 5.99266 10.1153 6.00391C10.2327 6.01515 10.3465 6.0505 10.4496 6.10772C10.5527 6.16495 10.6429 6.24283 10.7145 6.33648L14.8523 11.4704C14.9599 11.6287 15.0111 11.8185 14.998 12.0094Z"
                        fill="#8041FF"/>
                    </svg>
                </div>
                </div>
                
        </div>
            
</section>

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
                                <img src="/img/main/campLinks/dreamland.jpg" alt="dreamlang-img">
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
                                <img src="/img/main/campLinks/gruzia.jpg" alt="gruzia-img">
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