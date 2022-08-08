
@extends('layouts.app')
@section('title', 'Начальная частная школа Смарт Скул в Минске 1-4 классы')
@section('description', 'Оффлайн и онлайн обучение для 1-4 классов в Беларуси, России, Грузии, Польше. Начальная школа Smart School ведет набор на подготовку к школе в Минске.')
@section('content')

@php($routeName = Route::current()->getName())

    @php($activeNav = 'school')

    <section id="head" class="head pb-80 mt-80 position-relative @if(!empty($mainNews)  && count($mainNews) > 0) notification-size @endif">
        <div class="container">

            <div class="head--container centered-mobile">
                <div>
                    <img src="/img/main/banners/New2.webp" alt="" class="d-none d-md-block banner-image">
                    <img src="/img/main/banners/school-belarus-junior-mob.webp" alt="" class="banner-image d-block d-md-none">
                </div>

                <div>
                    <h1 class="h1 pb-48">
                        Частная школа <br> в  Республике Беларусь  <span class="nowrap">1-4 классы</span>
                    </h1>
                    <div class="btn-group btn-group-3">
                        <a href="/school-belarus/junior#address " class="button_1 btn-purple text-bold">Жуков Луг</a>
                        <a href="/school-belarus/junior#dreamland" class="button_1 btn-purple text-bold">Dreamland</a>
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
            <div class="row align-items-center justify-content-between container-mob">
                <div class=" col-lg-7 text order-2 order-lg-7">
                    <div class="history-text-box">
                        <p class="pb-10">
                            «Смарт Скул» — это официальное частное учреждение образования в Беларуси, России, Грузии, Польше.
                        </p>
                        <p class="pb-10">
                            Ученики с 1 по 11 класс обучаются официально с выдачей аттестата государственного образца. Обучение проводится как очно, так и онлайн. Во всех наших школах подобран лучший педагогический коллектив, имеющий большой опыт и авторские методики.
                        </p>

                        <div id="hidden-text-box">
                            <p class="pb-10">
                                Родители наших учеников отмечают повышение уровня успеваемости детей, увеличение концентрации внимания на уроках, возникновение интереса к предметам и рост мотивации к учебе. Это оказалось возможным благодаря авторской методологии, увлекательной подаче учебного материала, вовлечению детей в учебный процесс на протяжении всего периода обучения.
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
            <div class="row align-items-center mb-160">
                <div class="col-md-6 mb-5 mb-md-0">
                    <a href="https://goo.gl/maps/efPppZVbbreqtA369" target="_blank" rel="noopener" class="d-inline-flex align-items-center font-weight-bold mb-40">
                        <img src="/svg/location.svg" alt="" class="me-3">
                        <span class="text-start h4">д. Жуков Луг, ул. Дорожная, 14А, 5 км от ст.м.Уручье </span>
                    </a>

                    <ul class="mb-10 custom-ul">
                        <li>находится в 5 км от ст. м. Уручье, охраняемая территория, двухэтажное здание, удобные помещения, большая пришкольная территория;</li>
                        <li>трехразовое питание с учетом индивидуальных запросов родителей, собственный шеф-повар;</li>
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

            <div class="row align-items-center" id="dreamland">
                <div class="col-md-6 mb-5 mb-md-0">
                    <a href="https://goo.gl/maps/1DqaKy5WPwUwZm2UA" target="_blank" rel="noopener" class="d-inline-flex align-items-start align-items-sm-center font-weight-bold mb-24">
                        <img src="/svg/location.svg" alt="" class="me-3">
                        <span class="text-start text-md-center h4">г.Минск, ул. Орловская, 80 (Dreamland)</span>
                    </a>

                    <ul class="mb-10 custom-ul">
                        <li>находится в центре города на территории парка Dreamland, охраняемая территория, двухэтажное здание, удобное транспортное сообщение, большая пришкольная территория;</li>
                        <li>трехразовое питание с учетом индивидуальных запросов родителей, собственный шеф-повар;</li>
                        <li>условия соответствуют санитарным и противопожарным нормам Республики Беларусь.</li>
                    </ul>

                    <div class="row">
                        <div class="col-md-4"><button class="button_1 btn-pink w-100" data-bs-toggle="modal" data-bs-target="#requestModal">Оставить заявку</button></div>
                    </div>

                </div>
                <div class="col-md-6">
                    @include('address.dreamland-slider')
                </div>
            </div>
        </div>
    </section>

    <section id="price" class="pb-120 scrollreveal">
        <div class="container">
            <h2 class="accentColor mb-40">Наш прейскурант</h2>

            <div class="row">
                <div class="col-lg-6">
                    <img src="/img/main/price/junior.jpg" alt="" class="border-20 img-fluid mb-20">

                    {{-- MOBILE --}}
                    <div class="swiper-box d-block d-lg-none">
                        <div class="swiper swiper-0">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="price--card">
                                        <div class="d-flex align-items-start mb-3">
                                            <img src="/svg/time.svg" alt="" class="me-2">
                                            <span>Пребывание в школе: <br>8:00-18:00 (начало уроков в 9:00);</span>
                                        </div>
                                        <div class="d-flex align-items-start mb-3">
                                            <img src="/svg/food.svg" alt="" class="me-2">
                                            <span>Питание: завтрак, обед, полдник;</span>
                                        </div>
                                        <div class="d-flex align-items-start">
                                            <img src="/svg/people.svg" alt="" class="me-2">
                                            <span>Наполняемость классов: до 15 человек.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="price--card d-flex align-items-center">
                                        <img src="/svg/twemoji_books.svg" alt="" class="me-3">
                                        <p class="mb-0">
                                            Учебные занятия согласно образовательным программам общего среднего образования Республики Беларусь.
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="price--card">
                                        <p class="mb-0">
                                            <span class="d-block text-bold">Психолого-педагогическое сопровождение детей и родителей.</span>
                                            Занятия с детьми по авторской программе «Секрет успешного обучения» (нейробика, кинезиология, тренировка мозга, развитие эмоционального интеллекта и скорочтение).
                                        </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="price--card d-flex align-items-center h-100 mb-20">
                                        Ежедневная подготовка в школе домашних заданий (2-4 классы).
                                    </div>
                                    <div class="price--card d-flex align-items-center h-100 mb-20">
                                        Для 1-го класса предусмотрен дневной сон.
                                    </div>
                                    <div class="price--card d-flex align-items-center">
                                        Английский язык (по уровню): <br>
                                        1-2 классы - 3 раза в неделю;  <br>
                                        3-4 классы - 5 раз в неделю.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-0"></div>
                    </div>

                    <div class="row">
                        <div class="col-xl-8 mb-4 mb-xl-0 d-none d-lg-block">
                            <div class="price--card">
                                <div class="d-flex align-items-start mb-3">
                                    <img src="/svg/time.svg" alt="" class="me-2">
                                    <span>Пребывание в школе: <br>8:00-18:00 (начало уроков в 9:00);</span>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <img src="/svg/food.svg" alt="" class="me-2">
                                    <span>Питание: завтрак, обед, полдник;</span>
                                </div>
                                <div class="d-flex align-items-start">
                                    <img src="/svg/people.svg" alt="" class="me-2">
                                    <span>Наполняемость классов: до 15 человек.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="price--card d-flex flex-column justify-content-center h-100">
                                <div class="h3 accentColor text-md-end">@if(!empty($price)){{$price}} @else 1200 @endif руб.</div>
                                <div class="text-md-end">в месяц</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="price--card align-items-center mb-20 d-none d-lg-flex">
                        <img src="/svg/twemoji_books.svg" alt="" class="me-3">
                        <p class="mb-0">
                            Учебные занятия согласно образовательным программам общего среднего образования Республики Беларусь.
                        </p>
                    </div>

                    <div class="price--card mb-20 d-none d-lg-block">
                        <p class="mb-0">
                            <span class="d-block text-bold">Психолого-педагогическое сопровождение детей и родителей.</span>
                            Занятия с детьми по авторской программе «Секрет успешного обучения» (нейробика, кинезиология, тренировка мозга, развитие эмоционального интеллекта и скорочтение).
                        </p>
                    </div>

                    <div class="row mb-20 d-none d-lg-flex">
                        <div class="col-xl-4 mb-4 mb-xl-0">
                            <div class="price--card d-flex align-items-center h-100">
                                Ежедневная подготовка в школе домашних заданий (2-4 классы).
                            </div>
                        </div>

                        <div class="col-xl-4 mb-4 mb-xl-0">
                            <div class="price--card d-flex align-items-center h-100">
                                Для 1-го класса предусмотрен дневной сон.
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="price--card d-flex align-items-center">
                                Английский язык (по уровню): <br>
                                1-2 классы - 3 раза в неделю;  <br>
                                3-4 классы - 5 раз в неделю.
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="accordionExample">

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>Дополнительные занятия (на выбор):</span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="custom-ul">
                                        <li>Английский язык</li>
                                        <li>Шахматы</li>
                                        <li>Основы визуального программирования</li>
                                        <li>Театральная мастерская «Сказкин Дом»</li>
                                        <li>Айкидо</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>По желанию с дополнительной оплатой:</span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="accordion-body">
                                        <ul class="custom-ul">
                                            <li>Художественная мастерская</li>
                                            <li>Музыкальная школа (игра на инструменте по выбору фортепиано или гитара, музыкальная грамотность, сольфеджио)</li>
                                            <li>Хореография, студия актёрского мастерства</li>
                                            <li>Робототехника</li>
                                            <li>БИЗНЕС-ШКОЛА ДЛЯ ДЕТЕЙ KIDS MBA
                                                (основы бизнеса, права, маркетинга, тайм менеджмент, креативное мышление и предприимчивость)</li>
                                            <li>Литературная мастерская</li>
                                        </ul>
                                    </div>
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
                                    <span>Является ли школа официальной? Есть ли у школы лицензия? Выдает ли школа аттестаты государственного образца?</span>
                                </button>
                            </h2>
                            <div id="collapseOneFaq" class="accordion-collapse collapse" aria-labelledby="headingOneFaq" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    Школа является официальным учреждением образования наравне с государственными школами. <br>
                                    В Республике Беларусь для работы частных общеобразовательных школ лицензия не требуется.
                                    <button data-bs-toggle="modal" data-bs-target="#faq-1">Подробнее</button>
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
                                    Достаточно связаться с менеджерами по контактам, указанным на сайте. Срок подготовки договора – сутки.
                                    После заключения договора вам будет предоставлена справка о согласии на перевод учащегося, которую вы должны предоставить в действующую школу вашего ребенка для выдачи школой всех документов, которые вы передадите в нашу школу. Ребенок может приступать к занятиям сразу после заключения договора, т.е., через сутки.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3Faq">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3Faq" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>Если у ребенка аллергия на пищевые продукты, можно ли предусмотреть это в питании?</span>
                                </button>
                            </h2>
                            <div id="collapse3Faq" class="accordion-collapse collapse" aria-labelledby="heading3Faq" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    Да, конечно. Наш шеф-повар готовит с учетом индивидуальных запросов и особенностей детей.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4Faq">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4Faq" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>Можно ли рассмотреть сокращенный день?</span>
                                </button>
                            </h2>
                            <div id="collapse4Faq" class="accordion-collapse collapse" aria-labelledby="heading4Faq" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    Да, такая возможность есть. Обратитесь к менеджеру по телефонам, указанным на сайте.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5Faq">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5Faq" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>Какой режим дня у детей 1-4 класса?</span>
                                </button>
                            </h2>
                            <div id="collapse5Faq" class="accordion-collapse collapse" aria-labelledby="heading5Faq" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    Режим дня у учеников 1-4 класса разработан в соответствии с рекомендациями Санитарных правил и норм Республики Беларусь.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
                    <img src="/img/main/faq/junior.jpg" alt="" class="w-100 border-20">
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

    
    @include('sections.schools-without-bel')


    <!-- Modals FAQ -->
    <div class="modal fade" id="faq-1" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><img src="/svg/close.svg" alt=""></button>
                <div class="h6 mb-20 text-bold title-faq">Является ли школа официальной? Есть ли у школы лицензия? Выдает ли школа аттестаты государственного образца?</div>
                <p class="mb-20">
                    Школа является официальным учреждением образования наравне с государственными школами.
                    В Республике Беларусь для работы частных общеобразовательных школ лицензия не требуется.
                    Для приема экзаменов и выдачи аттестатов у 9-х и 11-х классов необходима государственная аккредитация учреждения образования — это, в первую очередь, подтверждение соответствия преподавания заявленной программе. Министерство образования проверяет, насколько выполняется заявленная программа на практике.
                    Мы подаем заявку на аккредитацию и получаем в 2022-23 учебном году.
                </p>
                <p class="mb-20">
                    Учреждение образования, не прошедшее государственную аккредитацию, не может выдавать аттестаты государственного образца (9 и 11 классы). Однако для того, чтобы учащиеся получили их, законодательно предусмотрена возможность сдачи государственного экзамена на базе ГУО.
                </p>
                <p class="mb-0">
                    В настоящее время аккредитация учреждений начального и среднего образования производится по заявительному принципу. Это означает, что каждое УО самостоятельно принимает решение о прохождении государственной аккредитации.
                </p>
            </div>
        </div>
    </div>
@stop

