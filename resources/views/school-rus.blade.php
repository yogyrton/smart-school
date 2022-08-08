@extends('layouts.app')
@section('title', 'Школа в России Онлайн  - Школьная программа дистанционно')
@section('description', 'Дистанционное обучение для 1-11 классов в школе Smart School в России. Современное онлайн-образование, занятия с репетитором, факультативы, курсы, лагеря.')
@section('content')
@php($routeName = Route::current()->getName())
    @php($activeNav = 'school')

    <section id="head" class="head mb-120 position-relative @if(!empty($mainNews)  && count($mainNews) > 0) notification-size @endif">
        <div class="container">

            <div class="head--container centered-mobile">
                <div>
                    <img src="/img/main/banners/school-russia.webp" alt="" class="d-none d-md-block banner-image">
                    <img src="/img/main/banners/school-russia-mob.webp" alt="" class="banner-image d-block d-md-none">
                </div>

                <div>
                    <h1 class="h1 pb-48">
                        Частная школа <br> в России (дистанционно)
                    </h1>
                    <div class="btn-group btn-group-1">
                        <button class="button_1 btn-pink text-bold" data-bs-toggle="modal" data-bs-target="#requestModal">Оставить заявку</button>
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

    <section id="history" class="history pb-120 scrollreveal">
        <div class="container">
            <h2 class="accentColor mb-40">О нас</h2>
            <div class="row justify-content-between container-mob">
                <div class=" col-lg-7 text order-2 order-lg-7">
                    <div class="history-text-box">
                        <p class="pb-10">
                            «Смарт Скул» — это официальное частное учреждение образования в Беларуси, России, Грузии,
                            Польше.
                        </p>

                        <p class="pb-10">
                            Частная школа “Смарт Скул” имеет официальную лицензию Департамента образования и науки Российской Федерации на право осуществления обучения в формате онлайн для учеников 1-11 классов.
                        </p>

                        <div id="hidden-text-box">
                            <p class="pb-10">
                                Технологии развиваются как никогда быстро. Не осталась без внимания и система образования. Благодаря Интернету мы можем получать знания, используя удаленный доступ. Международная сеть частных школ «Смарт Скул» предоставляет новые удобства и широкие возможности. Достойное образование для наших детей!
                            </p>
                            <p class="pb-10">
                            Более подробную информацию по программам и условиям обучения в нашей школе можно узнать у менеджеров или оставив заявку на сайте.
                            </p>
                        </div>

                        <button class="accentColor" id="btnMore">Подробнее</button>
                    </div>

                </div>
                <div
                    class="col-lg-5 col-md-12 col-sm-12 text position-relative swiper-box align-items-center order-1 order-lg-2">
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
                                    <img src="/img/main/history/online-1.jpg" alt="history-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="d-flex h-100 justify-content-center">
                                    <img src="/img/main/history/online-2.jpg" alt="history-img">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ng-Lu08nDUY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

    @include('sections.advantagies-online')
    @include('address.zoom')

    <section id="price" class="pb-120 price-online scrollreveal">
        <div class="container">
            <h2 class="accentColor mb-40">Наш прейскурант</h2>

            <div class="row">
                <div class="col-lg-6">
                    <img src="/img/main/price/online.jpg" alt="" class="border-20 img-fluid mb-20">

                    {{-- MOBILE --}}
                    <div class="swiper-box d-block d-lg-none">
                        <div class="swiper swiper-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="price--card">
                                        <div class="d-flex align-items-start mb-3">
                                            <img src="/svg/time.svg" alt="" class="me-2">
                                            <span>Пребывание в школе: <br>
                                            Онлайн с 9:00 <br>
                                            (1-4 классы есть возможность выбора смены обучения<br>
                                            (утренняя с 09:00, дневная с 12:00)</span>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <img src="/svg/people.svg" alt="" class="me-2">
                                            <span>Наполняемость классов: до 12 человек.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="price--card d-flex align-items-center">
                                        <img src="/svg/twemoji_books.svg" alt="" class="me-3">
                                        <p class="mb-0">
                                            Учебные занятия согласно образовательным программам общего среднего
                                            образования Российской Федерации.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="price--card">
                                        <p class="mb-0">
                                            <span class="d-block text-bold">Психолого-педагогическое сопровождение детей и родителей.</span>
                                            Занятия с детьми по авторской программе «Секрет успешного обучения»
                                            (нейробика, кинезиология, тренировка мозга, развитие эмоционального
                                            интеллекта и скорочтение).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-1"></div>
                    </div>

                    <div class="price--card d-none d-lg-block">
                        <div class="d-flex align-items-start mb-3">
                            <img src="/svg/time.svg" alt="" class="me-2">
                            <span>Пребывание в школе: <br>
                                Онлайн с 9:00 <br>
                                (1-4 классы есть возможность выбора смены обучения<br>
                                (утренняя с 09:00, дневная с 12:00)</span>
                        </div>
                        <div class="d-flex align-items-start">
                            <img src="/svg/people.svg" alt="" class="me-2">
                            <span>Наполняемость классов: до 12 человек.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row mb-20">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="price--card d-flex flex-column justify-content-center h-100">
                                <div class="h3 accentColor text-md-end mb-2">1-4 классы</div>
                                <div class="text-md-end ">@if(!empty($price_1_4)){{$price_1_4}} @else 12000 @endif рос.руб.</div>
                                
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="price--card d-flex flex-column justify-content-center h-100">
                                <div class="h3 accentColor text-md-end mb-2">5-8 классы</div>
                                <div class=" text-md-end">@if(!empty($price_5_8)){{$price_5_8}} @else 13000 @endif рос.руб.</div>
                                
                            </div>
                        </div>
                        <div class="col-md-4 mb-3 mb-md-0">
                            <div class="price--card d-flex flex-column justify-content-center h-100">
                                <div class="h3 accentColor text-md-end mb-2">9-11 классы</div>
                                <div class=" text-md-end">@if(!empty($price_9_11)){{$price_9_11}} @else 15000 @endif рос.руб.</div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="price--card align-items-center mb-20 d-none d-lg-flex">
                        <img src="/svg/twemoji_books.svg" alt="" class="me-3">
                        <p class="mb-0">
                            Учебные занятия согласно образовательным программам общего среднего образования Российской Федерации.
                        </p>
                    </div>

                    <div class="price--card mb-20 d-none d-lg-block">
                        <p class="mb-0">
                            <span
                                class="d-block text-bold">Психолого-педагогическое сопровождение детей и родителей.</span>
                            Занятия с детьми по авторской программе «Секрет успешного обучения» (нейробика,
                            кинезиология, тренировка мозга, развитие эмоционального интеллекта и скорочтение).
                        </p>
                    </div>

                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        По желанию с дополнительной оплатой:
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="custom-ul">
                                        <li>Школьные предметы (стимулирующие и поддерживающие занятия)</li>
                                        <li>Основы MBA</li>
                                        <li>Программирование</li>
                                        <li>Углубленное изучение иностранных языков: уровень B1 B2 и другие</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="faq" class="scrollreveal pb-120">
    <div class="container">
        <h2 class="accentColor mb-40">Часто задаваемые вопросы</h2>

        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="accordion accordion-faq" id="accordionFaq">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOneFaq">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneFaq" aria-expanded="false" aria-controls="collapseTwo">
                                <span>Является ли школа официальной? Есть ли у школы лицензия? </span>
                            </button>
                        </h2>
                        <div id="collapseOneFaq" class="accordion-collapse collapse" aria-labelledby="headingOneFaq" data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                Частная школа «Смарт Скул» является официальным учреждением образования, имеет официальную лицензию Департамента образования и науки Российской Федерации на право осуществления обучения в формате онлайн для учеников по всему миру.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2Faq">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2Faq" aria-expanded="false" aria-controls="collapseTwo">
                                <span>Как происходит перевод документов в школу и сколько это занимает времени?</span>
                            </button>
                        </h2>
                        <div id="collapse2Faq" class="accordion-collapse collapse" aria-labelledby="heading2Faq" data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                Достаточно связаться с менеджерами по контактам, указанным на сайте. Срок изготовления договора – сутки.
                                После заключения договора вам будет предоставлена справка о согласии на перевод учащегося, которую вы должны предоставить в действующую школу вашего ребенка для выдачи ими всех документов, которые вы передадите в нашу школу. Ребенок может приступать к занятиям сразу после заключения договора, т.е., через сутки.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading3Faq">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3Faq" aria-expanded="false" aria-controls="collapseTwo">
                                <span>Каким образом ребенок получает домашние задания?</span>
                            </button>
                        </h2>
                        <div id="collapse3Faq" class="accordion-collapse collapse" aria-labelledby="heading3Faq" data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                Вся информация есть в электронном дневнике, предоставляется отдельный доступ как ученику, так и родителям. Также на уроке учитель озвучивает Д/З.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading4Faq">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4Faq" aria-expanded="false" aria-controls="collapseTwo">
                                <span>Какими учебниками пользуются дети?</span>
                            </button>
                        </h2>
                        <div id="collapse4Faq" class="accordion-collapse collapse" aria-labelledby="heading4Faq" data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                Дети пользуются учебниками в электронном варианте. Их можно найти в свободном доступе или приобрести самостоятельно в магазине после согласования списка необходимых материалов с вашим классным руководителем.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                <img src="/img/main/faq/online.jpg" alt="" class="w-100 border-20">
            </div>
        </div>
    </div>
</section>

    <div class="pb-120">
        @include('sections.news')
    </div>
    
    <div class="pb-120">
        @include('sections.documents')
    </div>

    <div class="pb-120">
        @include('sections.contacts')
    </div>
    
    <div class="pb-120">
        @include('sections.schools-common')
    </div>
@stop

