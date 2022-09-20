@extends('layouts.app')
@section('title', 'Частная школа Smart School')
@section('description', 'Оффлайн и онлайн обучение для 1-11 классов в Беларуси и России в школе Смарт Скул. Театральная студия, занятия с репетитором, подготовка к школе, факультативы, курсы, лагеря.')
@section('content')
    <section id="head" class="head mb-160 position-relative @if(!empty($mainNews)  && count($mainNews) > 0) notification-size @endif">
        <div class="container container-mob">

            <div class="head--container">
                <div>
                    <img src="/img/main/banners/home.webp" alt="main-banner" class="banner-image d-none d-md-block">
                    <img src="/img/main/banners/home-mob.webp" alt="main-banner-mob" class="banner-image d-block d-md-none">
                </div>

                <div>
                    <h1 class="h1 pb-48">
                        Международная сеть частных школ <span class="accentColor nowrap">Smart School</span>
                    </h1>
                    <div class="btn-group">
                        <a href="#school" class="button_1 btn-purple text-bold">Выбрать страну</a>
                        <button class="button_1 btn-pink text-bold" data-bs-toggle="modal" data-bs-target="#requestModal">Оставить заявку</button>
                    </div>

                    <div class="notification--head">
                        @if(!empty($mainNews)  && count($mainNews) > 0)
                            @include('sections.main-news')
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history pb-120 scrollreveal">
        <div class="container">
            <h2 class="accentColor mb-40">История</h2>
            <div class="row align-items-center justify-content-between container-mob">
                <div class=" col-lg-7 text order-2 order-lg-7">
                    <div class="history-text-box">
                        <p class="pb-10">
                            В 2015 году при содействии лучших методистов
                            Беларуси и Европы был открыт Инновационный Детский
                            Образовательный Центр "Фабрика Звезд", на базе которого мы
                            разработали уникальную программу для школьников по нейробике,
                            кинезиологии и эмоциональному интеллекту «Секрет успешного обучения».
                            <span class="text-bold">Наша методика позволяет эффективно, легко и быстро усваивать школьную программу, повышает успеваемость на 2-3 балла!</span>
                        </p>

                        <div id="hidden-text-box">
                            <p class="pb-10">Опыт профессиональной команды методистов и психологов в создании данной программы,
                                а также организация огромного количества смен детских лагерей под брендом «Фабрика звезд»,
                                знание лучших методик обучения, длительная коммуникация с родителями о действующей системе
                                образования, ее достоинствах и недостатках, стали толчком для открытия в 2020 году частной школы
                                "Смарт Скул", учредитель которой - детский писатель, юрист и медиатор Елена Пушкина. И именно
                                программа "Секрет успешного обучения" легла в основу методологии "Смарт образования", которая
                                используется в нашей школе.</p>
                            <p class="pb-10">С 2022 года мы учим детей не только в Беларуси, но и в России.</p>
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

    <div class="pb-120">
        @include('sections.schools-common')
    </div>

    <section id="advantages" class="advantages pb-120 scrollreveal">
        <div class="container">
            <h2 class="accentColor mb-40">Почему мы?</h2>

            <div class="advantages row justify-content-between align-items-center flex-wrap-reverse">
                <div class="col-lg-6 flex-column">
                    <ul class="advantages-list-1">
                        <li class="text mb-20 li"><span class="text-bold ">«Смарт Скул» </span> — это официальное
                            частное учреждение образования в Беларуси и России.
                        </li>
                        <li class="text mb-20"><span class="text-bold ">Наша миссия</span> - система образования,
                            достойная наших детей.
                        </li>
                        <li class="text mb-20"><span class="text-bold ">Наша цель</span> - воспитание счастливых,
                            здоровых, мыслящих и социально-адаптированных детей СЕГОДНЯ. Воспитание умеющих
                            сотрудничать, заботливых, творческих, компетентных, ответственных взрослых ЗАВТРА. <span
                                id="dots2">...</span></li>
                    </ul>

                    <div id="more2">
                        <ul class="advantages-list-1">
                            <li class="text mb-20"><span class="text-bold ">Педагогическая стратегия</span> - развитие
                                потенциала каждого учащегося, эффективное устранение трудностей в обучении.
                            </li>
                            <li class="text mb-20"><span class="text-bold ">Наши учащиеся</span> знают и ценят свои
                                права, национальные и общемировые ценности и культуру, осознают себя гражданами своей
                                страны и всего мира.
                            </li>
                        </ul>
                        <p class="text mb-12"><span
                                class="text-bold">Ученик Смарт Скул - разносторонняя личность.</span> </br>
                            Кроме качественного академического образования нам важно, чтобы ученики получали развитие в
                            различных областях:</p>
                        <ul class="advantages-list-2 text mb-20">

                            <li>языки и эффективная коммуникация;</li>
                            <li>критическое и креативное мышление;</li>
                            <li>самообразование и личностное развитие;</li>
                            <li>здоровый образ жизни и окружающая среда;</li>
                            <li>эстетическая и художественная чувствительность;</li>
                            <li>научные, технические и технологические знания.</li>
                        </ul>
                        <p class="text-bold mb-20">Смарт Скул – выбор заботливых родителей!</p>
                        <p class="text-bold">Растем, развиваемся, взрослеем вместе со Смарт Скул!</p>

                    </div>
                    <button class="accentColor" id="btnMore2">Подробнее</button>


                </div>
                <div class="col-lg-6">
                    <div class="grid-wrapper">
                        <div class="grid-box" >
                            <img src="/img/main/advantages/img1.png" alt="image-1">
                            <div class="overlay-title">
                                <h3>Первоклассник</h3>
                            </div>
                        </div>
                        <div class="grid-box"><img src="/img/main/advantages/img2.png" alt="image-2">
                            <div class="overlay-title">
                                <h3>Обучение</h3>
                            </div>
                        </div>
                        <div class="grid-box" ><img src="/img/main/advantages/img3.png" alt="image-3">
                            <div class="overlay-title">
                                <h3>Старшеклассник</h3>
                            </div>
                        </div>
                        <div class="grid-box"><img src="/img/main/advantages/img4.png" alt="image-4">
                            <div class="overlay-title">
                                <h3>Достижения</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="info" class="info pb-120 scrollreveal">
        <div class="container">
            <div class="swiper-box">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">
                                <div class="d-flex flex-column align-items-center info-box">
                                    <img class="mb-20" src="/svg/calendar.webp" alt="calendar" width="100">
                                    <h4 class="text-bold mb-16 text-center">5 лет</h4>
                                    <p class="text grey text-center">обучаем детей по нашим</br> авторским
                                        программам</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">
                                <div class="d-flex flex-column align-items-center info-box">
                                    <img class="mb-20" src="/svg/group.webp" alt="group" width="100">
                                    <h4 class="text-bold mb-16 text-center">453+ детей</h4>
                                    <p class="text grey text-center">прошли обучение и выпустились из нашей
                                        школы</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">
                                <div class="d-flex flex-column align-items-center info-box">
                                    <img class="mb-20" src="/svg/place.webp" alt="place" width="100">
                                    <h4 class="text-bold mb-16 text-center">7 локаций</h4>
                                    <p class="text grey text-center">предлагает наша школа для </br>обучения из
                                        разных точек мира</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="d-flex justify-content-center">
                                <div class="d-flex flex-column align-items-center info-box">
                                    <img class="mb-20" src="/svg/study.webp" alt="study" width="100">
                                    <h4 class="text-bold mb-16 text-center">73 преподавателя</h4>
                                    <p class="text grey text-center">ведут обучение на профессиональном уровне</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <div class="mb-120">
        @include('sections.advantagies')
    </div>

    <section id="teachers" class="scrollreveal pb-120 teachers">
        <div class="container">
            <h2 class="accentColor mb-40">Команда профессиональных педагогов</h2>
            <p class="text mb-60 teachers-info">Наши учителя создают мотивацию к обучению, учат ребят быстро запоминать
                информацию и любить сам процесс обучения.</p>
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
                        @foreach($teachers as $teacher)
                            <div class="swiper-slide">
                                <div class="teacher-box d-flex flex-column">
                                    <div class="teacher__image-ibg mb-20"><img
                                            src="{{ '/storage/' . $teacher->thumbnail }}"
                                            alt="{{ $teacher->name }}">
                                    </div>
                                    <div class="teacher-description">
                                        <span class="teacher-post text grey mb-8">{{ $teacher->position }}</span>
                                        <h5 class="accentColor teacher-name mb-8">{{ $teacher->name }}</h5>
                                        <p class="teacher-description text mb-8">{{ $teacher->category }}</p>
                                        <p class="teacher-experience text grey">{{ $teacher->experience }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="swiper-pagination text teachers-pagination"></div>
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
        @include('sections.reviews')
    </div>

    <div class="pb-120">
        @include('sections.news')
    </div>

    <div class="pb-120">
        @include('sections.documents')
    </div>

    <div class="pb-120">
    @include('sections.partners')
    </div>

    <div class="pb-120">
        @include('sections.contacts')
    </div>




@stop

