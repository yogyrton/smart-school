@extends('layouts.app')

@section('content')


<section id="head" class="head mb-160 position-relative">
        <div class="container container-mob">
                <div class="head-wrapper">
                        <div class="imgHead-box">
                                <img src="/img/main/imgHead.png" alt="">
                                <div class="pseudo"></div>
                        </div>

                        <div class="head-info">
                                <div class="head-inner">
                                        <h1 class="h1 pb-48">
                                                Международная сеть частных школ <span class="accentColor">Smart School</span>
                                        </h1>
                                        <div class="btn-group">
                                                <button class="button_1 btn-purple">Выбрать страну</button>
                                                <button class="button_1 btn-pink">Оставить заявку</button>
                                        </div>

                                        
                                </div>
                        </div>

                        <div class="position-relative swiper-box head-swiper">
                                                <div class="position-relative container-slider-pagination">
                                                <div class="swiper">
                                                        <div class="swiper-wrapper">
                                                        @foreach($mainNews as $mainNew)
                                                                <div class="swiper-slide">
                                                                <h5 class="accentColor">{{ $mainNew->title }}</h5>
                                                                <p class="head-text text">{{ $mainNew->text }}</p>
                                                                </div>
                                                        @endforeach
                                                        </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                                </div>
                                </div>
                        
            </div>
        </div>
        <div class="pseudo2"></div>
</section>

<section id="history">
        <div class="container">
                <h2 class="accentColor mb-40">История</h2>

                        <div class="row align-items-start justify-content-between container-mob">
                                <div class=" col-lg-7 text history-text-box">
                                        <p class="pb-10">
                                        В 2015 году при содействии лучших методистов
                                        Беларуси и Европы был открыт Инновационный Детский
                                        Образовательный Центр "Фабрика Звезд", на базе которого мы
                                        разработали уникальную программу для школьников по нейробике,
                                        кинезиологии и эмоциональному интеллекту «Секрет успешного обучения».
                                        <span class="text-bold">Наша методика позволяет эффективно, легко
                                        и быстро усваивать школьную программу, повышает успеваемость на 2-3 балла!</span>
                                        </p>
                                        <p class="pb-10">Опыт профессиональной команды методистов и психологов в создании данной программы,
                                        а также организация огромного количества смен детских лагерей под брендом «Фабрика звезд»,
                                        знание лучших методик обучения, длительная коммуникация с родителями о действующей системе
                                        образования, ее достоинствах и недостатках, стали толчком для открытия в 2020 году частной школы
                                        "Смарт Скул", учредитель которой - детский писатель, юрист и медиатор Елена Пушкина. И именно
                                        программа "Секрет успешного обучения" легла в основу методологии "Смарт образования", которая
                                        используется в нашей школе.</p>
                                <p>С 2022 года мы учим детей не только в Беларуси, но и в России, Грузии и Польше.</p>
                        </div>
                        <div class="col-5 text box-img">
                                <img src="/img/main/history.png" alt="history-img">
                                <div class="history-pseudo"></div>
                        </div>
                </div>
        </div>
        
</section>

<section id="school" class="mb-160">
        <div class="container">
                <h2 class="accentColor mb-40">Школа</h2>
                <div class="row">
                        <div class="col">
                                <div class="grid-box">

                                        <a class="school-box d-flex school-box-photo-1" href="/">
                                                        <div class="img-box">
                                                                <img src="/img/school/photo1.png" alt="children-with-map">
                                                        </div>
                                                        <div class="d-flex flex-column box-inner">
                                                                <h3 class="accentColor mb-24">Беларусь</h3>
                                                                <div class="box-description">
                                                                        <p class="text flex-grow-1 mb-12">Минск, ул. Орловская, 80 (Dreamland)</p>
                                                                        <p class="text flex-grow-1 mb-20">д. Жуков Луг (5 км от ст.м.Уручье)</p>
                                                                </div> 
                                                                <button class="button_2 text">Подробнее</button>
                                                        </div>
                                                        
                                                        
                                        </a>

                                        <a class="school-box d-flex school-box-photo-2" href="/">
                                                        <div class="img-box block-mob">
                                                                <img src="/img/school/photo2.png" alt="children-img">
                                                        </div>
                                                        <div class="box-inner">
                                                                <h3 class="accentColor mb-24">Грузия</h3>
                                                                <div class="box-description">
                                                                                <p class="text flex-grow-1 mb-12">обучение в Батуми</p>
                                                                </div>
                                                                <button class="button_2 text">Подробнее</button>
                                                        </div>
                                        </a>

                                        <div class="school-box block-desktop">
                                                <img class="w-100" src="/img/school/photo2.png" alt="children-img">
                                        </div>

                                        <a class="school-box d-flex flex-column" href="/">
                                                <div class="img-box block-mob">
                                                                <img src="/img/school/photo4.png" alt="children-img">
                                                </div>
                                                <div class="box-inner">
                                                        <h3 class="accentColor mb-24">Онлайн</h3>
                                                        <div class="box-description">
                                                                <p class="text flex-grow-1 mb-12">обучение на платформе Zoom</p>   
                                                        </div>
                                                        <button class="button_2 text">Подробнее</button>
                                                </div>
                                        </a>

                                        <a class="school-box d-flex flex-column" href="/">
                                                        <div class="img-box block-mob">
                                                                <img src="/img/school/photo5.png" alt="children-img">
                                                        </div>
                                                        <div class="box-inner">
                                                                <h3 class="accentColor mb-24">Россия</h3>
                                                                <div class="box-description">
                                                                        <p class="text flex-grow-1 mb-12">обучение дистанционно на платформе Zoom</p>
                                                                </div>
                                                                <button class="button_2 text">Подробнее</button>
                                                        </div>  
                                        </a>

                                        <a class="school-box d-flex school-box-photo-3" href="/">
                                                        <div class="img-box">
                                                                <img src="/img/school/photo3.png" alt="children-with-map">
                                                        </div>

                                                        <div class="d-flex flex-column box-inner">
                                                        <h3 class="accentColor mb-24">Польша</h3>
                                                                <div class="box-description">
                                                                        <p class="text flex-grow-1 mb-12">обучение по адресу: ul.Ksieskiej, Wroclaw</p>
                                                                </div>
                                                                <button class="button_2 text">Подробнее</button>
                                                        </div> 
                                        </a>

                                </div>
                        </div>
                </div>
        </div>
</section> 

<section class="advantages mb-160">
        <div class="container">
                <h2 class="accentColor mb-40">Почему мы?</h2>
                <div class="advantages row justify-content-between align-items-center flex-wrap-reverse">
                        <div class="col-lg-6 flex-column">
                                <ul class="advantages-list-1">
                                        <li class="text mb-20 li"> <span class="text-bold ">«Смарт Скул» </span> — это официальное частное учреждение образования в Беларуси, России, Грузии, Польше.</li>
                                        <li class="text mb-20"><span class="text-bold ">Наша миссия</span>  - система образования, достойная наших детей.</li>
                                        <li class="text mb-20"> <span class="text-bold ">Наша цель</span>  - воспитание счастливых, здоровых, мыслящих и социально-адаптированных детей СЕГОДНЯ. Воспитание умеющих сотрудничать, заботливых, творческих, компетентных, ответственных взрослых ЗАВТРА.</li>
                                        <li class="text mb-20"><span class="text-bold ">Педагогическая стратегия</span>  - развитие потенциала каждого учащегося, эффективное устранение трудностей в обучении.</li>
                                        <li class="text mb-20"><span class="text-bold ">Наши учащиеся</span>  знают и ценят свои права, национальные и общемировые ценности и культуру, осознают себя гражданами своей страны и всего мира.</li>
                                </ul>
                                <p class="text mb-12"><span class="text-bold">Ученик Смарт Скул - разносторонняя личность.</span> </br>
                                Кроме качественного академического образования нам важно, чтобы ученики получали развитие в  различных областях:</p>
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
                        <div class="col-lg-6">
                                <div class="grid-wrapper">
                                        <a class="grid-box" href="/">
                                                <img src="/img/main/advantages/img1.png" alt="image-1">
                                                <div class="overlay-title">
                                                        <h3>Первоклассник</h3>
                                                </div>
                                        </a>
                                        <a class="grid-box"  href="/"><img src="/img/main/advantages/img2.png" alt="image-2">
                                                <div class="overlay-title">
                                                        <h3>Обучение</h3>
                                                </div></a>
                                        <a class="grid-box"  href="/"><img src="/img/main/advantages/img3.png" alt="image-3">
                                                <div class="overlay-title">
                                                        <h3>Старшеклассник</h3>
                                                </div></a>
                                        <a class="grid-box"  href="/"><img src="/img/main/advantages/img4.png" alt="image-4">
                                                <div class="overlay-title">
                                                        <h3>Достижения</h3>
                                                </div></a>
                                </div>
                        </div>
                </div>
        </div>
</section>

<section class="info mb-160">
        <div class="container">
                <div class="row d-flex">
                        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                                <div class="d-flex flex-column align-items-center info-box">
                                        <img class="mb-20" src="/svg/calendar.svg" alt="calendar">
                                        <h4 class="text-bold mb-16 text-center">5 лет</h4>
                                        <p class="text grey text-center">обучаем детей по нашим</br> авторским программам</p>
                                </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                                <div class="d-flex flex-column align-items-center info-box">
                                        <img class="mb-20" src="/svg/group.svg" alt="calendar">
                                        <h4 class="text-bold mb-16 text-center">453+ детей</h4>
                                        <p class="text grey text-center">прошли обучение и выпустились из нашей школы</p>
                                </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                                <div class="d-flex flex-column align-items-center info-box">
                                        <img class="mb-20" src="/svg/place.svg" alt="calendar">
                                        <h4 class="text-bold mb-16 text-center">7 локаций</h4>
                                        <p class="text grey text-center">предлагает наша школа для </br>обучения из разных точек мира</p>
                                </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                                <div class="d-flex flex-column align-items-center info-box">
                                        <img class="mb-20" src="/svg/study.svg" alt="calendar">
                                        <h4 class="text-bold mb-16 text-center">73 преподавателя</h4>
                                        <p class="text grey text-center">ведут обучение на профессиональном уровне</p>
                                </div>
                        </div>
                </div>
        </div>
</section>

<section class="priority mb-160">
        <div class="container">
                <h2 class="accentColor mb-60 pt-120">Вам точно к нам, если для вас важны</h2>
                <div class="row d-flex priority-wrapper pb-100">
                        <div class="col-lg-5">
                                <div class="priority-inner">
                                        <div class="priority-box d-flex mb-40">
                                                <img src="/svg/bag.svg" alt="bag-img">
                                                <div class="d-flex flex-column">
                                                        <h5 class="text-bold">УЧЕБНЫЙ ПРОЦЕСС</h5>
                                                        <p class="text">Гибкая интерактивная среда обучения, где учащиеся активно и уверенно участвуют в собственном образовании.</p>
                                                </div>
                                        </div>
                                        <div class="priority-box d-flex mb-40">
                                                <img src="/svg/hands.svg" alt="hands-img">
                                                <div class="d-flex flex-column">
                                                                <h5 class="text-bold">КАЧЕСТВО ОБРАЗОВАНИЯ</h5>
                                                                <p class="text">У нас подобрана лучшая команда профессиональных педагогов.</p>
                                                </div>
                                        </div>
                                        <div class="priority-box d-flex">
                                                <img src="/svg/prize.svg" alt="prize-img">
                                                <div class="d-flex flex-column">
                                                                <h5 class="text-bold">СПРАВЕДЛИВАЯ ОЦЕНКА ЗНАНИЙ</h5>
                                                                <p class="text">Продуманные экологичные методы оценивания учащихся.</p>
                                                </div>
                                        </div>
                                </div>

                        </div>
                        <div class="col-lg-5">
                                <div class="priority-inner">
                                        <div class="priority-box d-flex mb-40">
                                                <img src="/svg/bottle.svg" alt="bottle-img">
                                                <div class="d-flex flex-column">
                                                        <h5 class="text-bold">ФИЗИКО-МАТЕМАТИЧЕСКИЙ УКЛОН</h5>
                                                        <p class="text">Упор на решение задач, приближенных к реальной жизни и позволяющих мыслить нестандартно.</p>
                                                </div>
                                        </div>
                                        <div class="priority-box d-flex mb-40">
                                                <img src="/svg/plant.svg" alt="plant-img">
                                                <div class="d-flex flex-column">
                                                                <h5 class="text-bold">ИСТОЧНИК ЗНАНИЙ</h5>
                                                                <p class="text">Урок - практический эксперимент, где учитель приветствует сотрудничество и уважительное общение.</p>
                                                </div>
                                        </div>
                                        <div class="priority-box d-flex">
                                                <img src="/svg/hand.svg" alt="hand-svg">
                                                <div class="d-flex flex-column">
                                                        <h5 class="text-bold">БЛАГОПОЛУЧИЕ И ЗДОРОВЬЕ</h5>
                                                        <p class="text">Психологическое сопровождение и тренинги по авторской программе “Секрет успешного обучения”.</p>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>

<section id="teachers" class="mb-160 teachers">
        <div class="container">
        <h2 class="accentColor mb-40">Команда профессиональных педагогов</h2>
        <p class="text mb-60 teachers-info">Наши учителя создают мотивацию к обучению, учат ребят быстро запоминать
                информацию и любить сам процесс обучения.</p>
        <div class="d-flex align-items-center justify-content-between position-relative ">
                <div class="slider-button-prev">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.003 11.9901C9.00261 11.7902 9.07233 11.5964 9.20004 11.4425L13.4835 6.30862C13.629 6.13388 13.8379 6.02399 14.0645 6.00313C14.291 5.98227 14.5165 6.05215 14.6915 6.19738C14.8664 6.34262 14.9765 6.55132 14.9974 6.77757C15.0182 7.00383 14.9483 7.2291 14.8029 7.40384L10.9648 11.9901L14.6658 16.5764C14.737 16.6639 14.7901 16.7646 14.8222 16.8727C14.8542 16.9808 14.8646 17.0942 14.8527 17.2063C14.8407 17.3184 14.8067 17.427 14.7526 17.526C14.6985 17.6249 14.6253 17.7122 14.5373 17.7828C14.4492 17.8612 14.3459 17.9205 14.2337 17.9571C14.1216 17.9938 14.0031 18.0069 13.8857 17.9956C13.7683 17.9844 13.6545 17.949 13.5514 17.8918C13.4482 17.8346 13.3581 17.7567 13.2865 17.663L9.14864 12.5292C9.04111 12.3708 8.98983 12.181 9.003 11.9901V11.9901Z" fill="#8041FF"/>
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
                        <div class="swiper-pagination text"></div>
                        <div class="slider-button-next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.998 12.0094C14.9984 12.2093 14.9287 12.4031 14.8009 12.557L10.5174 17.6909C10.372 17.8656 10.1631 17.9755 9.93652 17.9964C9.70999 18.0172 9.48444 17.9474 9.30948 17.8021C9.13453 17.6569 9.02451 17.4482 9.00363 17.2219C8.98274 16.9957 9.0527 16.7704 9.19811 16.5957L13.0361 12.0094L9.33519 7.42315C9.26402 7.33563 9.21088 7.23492 9.17881 7.12682C9.14674 7.01872 9.13638 6.90536 9.14833 6.79324C9.16027 6.68113 9.19428 6.57248 9.2484 6.47353C9.30252 6.37459 9.37568 6.2873 9.46369 6.21669C9.55178 6.13833 9.65512 6.07899 9.76724 6.04237C9.87936 6.00576 9.99784 5.99266 10.1153 6.00391C10.2327 6.01515 10.3465 6.0505 10.4496 6.10772C10.5527 6.16495 10.6429 6.24283 10.7145 6.33648L14.8523 11.4704C14.9599 11.6287 15.0111 11.8185 14.998 12.0094Z" fill="#8041FF"/>
                                </svg>
                        </div>
                </div>
                
        </div>
</section>

<section id="replies" class="mb-160 replies">
        <div class="container">
                <h2 class="accentColor mb-40">Отзывы</h2>
                <div class="d-flex align-items-center justify-content-between replies-wrapper">
                <div class="slider-button-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.003 11.9901C9.00261 11.7902 9.07233 11.5964 9.20004 11.4425L13.4835 6.30862C13.629 6.13388 13.8379 6.02399 14.0645 6.00313C14.291 5.98227 14.5165 6.05215 14.6915 6.19738C14.8664 6.34262 14.9765 6.55132 14.9974 6.77757C15.0182 7.00383 14.9483 7.2291 14.8029 7.40384L10.9648 11.9901L14.6658 16.5764C14.737 16.6639 14.7901 16.7646 14.8222 16.8727C14.8542 16.9808 14.8646 17.0942 14.8527 17.2063C14.8407 17.3184 14.8067 17.427 14.7526 17.526C14.6985 17.6249 14.6253 17.7122 14.5373 17.7828C14.4492 17.8612 14.3459 17.9205 14.2337 17.9571C14.1216 17.9938 14.0031 18.0069 13.8857 17.9956C13.7683 17.9844 13.6545 17.949 13.5514 17.8918C13.4482 17.8346 13.3581 17.7567 13.2865 17.663L9.14864 12.5292C9.04111 12.3708 8.98983 12.181 9.003 11.9901V11.9901Z" fill="#8041FF"/>
                        </svg>
                </div>
                        <div class="swiper replies-swiper">
                                <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/img/replies/reply1.png" alt="reply-1"></div>
                                        <div class="swiper-slide"><img src="/img/replies/reply2.png" alt="reply-2"></div>
                                        <div class="swiper-slide"><img src="/img/replies/reply3.png" alt="reply-3"></div>
                                        <div class="swiper-slide"><img src="/img/replies/reply3.png" alt="reply-3"></div>
                                </div>
                        </div>
                        <div class="slider-button-next">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.998 12.0094C14.9984 12.2093 14.9287 12.4031 14.8009 12.557L10.5174 17.6909C10.372 17.8656 10.1631 17.9755 9.93652 17.9964C9.70999 18.0172 9.48444 17.9474 9.30948 17.8021C9.13453 17.6569 9.02451 17.4482 9.00363 17.2219C8.98274 16.9957 9.0527 16.7704 9.19811 16.5957L13.0361 12.0094L9.33519 7.42315C9.26402 7.33563 9.21088 7.23492 9.17881 7.12682C9.14674 7.01872 9.13638 6.90536 9.14833 6.79324C9.16027 6.68113 9.19428 6.57248 9.2484 6.47353C9.30252 6.37459 9.37568 6.2873 9.46369 6.21669C9.55178 6.13833 9.65512 6.07899 9.76724 6.04237C9.87936 6.00576 9.99784 5.99266 10.1153 6.00391C10.2327 6.01515 10.3465 6.0505 10.4496 6.10772C10.5527 6.16495 10.6429 6.24283 10.7145 6.33648L14.8523 11.4704C14.9599 11.6287 15.0111 11.8185 14.998 12.0094Z" fill="#8041FF"/>
                                </svg>
                        </div>
                </div>
                        
        </div>
</section>

<section id="news" class="mb-160 news">
        <div class="container">
                <h2 class="accentColor mb-40">Новости</h2>
                <div class="wrapper">
                <div class="d-flex align-items-center justify-content-between">
                        <div class="slider-button-prev">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.003 11.9901C9.00261 11.7902 9.07233 11.5964 9.20004 11.4425L13.4835 6.30862C13.629 6.13388 13.8379 6.02399 14.0645 6.00313C14.291 5.98227 14.5165 6.05215 14.6915 6.19738C14.8664 6.34262 14.9765 6.55132 14.9974 6.77757C15.0182 7.00383 14.9483 7.2291 14.8029 7.40384L10.9648 11.9901L14.6658 16.5764C14.737 16.6639 14.7901 16.7646 14.8222 16.8727C14.8542 16.9808 14.8646 17.0942 14.8527 17.2063C14.8407 17.3184 14.8067 17.427 14.7526 17.526C14.6985 17.6249 14.6253 17.7122 14.5373 17.7828C14.4492 17.8612 14.3459 17.9205 14.2337 17.9571C14.1216 17.9938 14.0031 18.0069 13.8857 17.9956C13.7683 17.9844 13.6545 17.949 13.5514 17.8918C13.4482 17.8346 13.3581 17.7567 13.2865 17.663L9.14864 12.5292C9.04111 12.3708 8.98983 12.181 9.003 11.9901V11.9901Z" fill="#8041FF"/>
                                </svg>
                        </div>
                        <div class="swiper">
                                <div class="swiper-wrapper">
                                        @foreach($news as $new)
                                        <div class="swiper-slide">
                                        <div class="news-box d-flex flex-column">
                                                <div class="news__image-ibg mb-20">
                                                        <img src="{{ '/storage/' . $new->thumbnail }}" alt="news-1">
                                                </div>
                                                <div class="news-description">
                                                        <span class="news-date grey mb-12">{{ $new->updated_at->format('d-m-Y') }}</span>
                                                        <h5 class="accentColor news-title text-bold mb-12">{{ $new->title }}</h5>
                                                        <p class="news-text text mb-12">{{ $new->text }}</p>
                                                        <a class="news-btn text-bold" href="/">Подробнее</a>
                                                </div>
                                                </div>
                                        </div>
                                        @endforeach
                                
                                </div>
                                <div class="slider-button-next">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.998 12.0094C14.9984 12.2093 14.9287 12.4031 14.8009 12.557L10.5174 17.6909C10.372 17.8656 10.1631 17.9755 9.93652 17.9964C9.70999 18.0172 9.48444 17.9474 9.30948 17.8021C9.13453 17.6569 9.02451 17.4482 9.00363 17.2219C8.98274 16.9957 9.0527 16.7704 9.19811 16.5957L13.0361 12.0094L9.33519 7.42315C9.26402 7.33563 9.21088 7.23492 9.17881 7.12682C9.14674 7.01872 9.13638 6.90536 9.14833 6.79324C9.16027 6.68113 9.19428 6.57248 9.2484 6.47353C9.30252 6.37459 9.37568 6.2873 9.46369 6.21669C9.55178 6.13833 9.65512 6.07899 9.76724 6.04237C9.87936 6.00576 9.99784 5.99266 10.1153 6.00391C10.2327 6.01515 10.3465 6.0505 10.4496 6.10772C10.5527 6.16495 10.6429 6.24283 10.7145 6.33648L14.8523 11.4704C14.9599 11.6287 15.0111 11.8185 14.998 12.0094Z" fill="#8041FF"/>
                                        </svg>
                                </div>
                        </div>
                </div>
                </div>
        </div>
</section>

<section id="documents" class="mb-160">
        <div class="container">
                <h2 class="accentColor mb-40">Документы</h2>
                <div class="wrapper">
                <a target="_blank" href="/">
                                <button class="document-button btn-doc text-bold">Электронный журнал</button>
                </a>
                @foreach($documents as $document)
                        <a target="_blank" href="{{ route('download', $document->id) }}">
                                <button class="document-button btn-doc text-bold">{{ $document->title }}</button></a>
                @endforeach
                </div>
        </div>
</section>

<section class="partners mb-160">
        <div class="container">
        <h2 class="accentColor mb-40">Наши партнеры</h2>
                <div class="row">
                        <div class="col">
                        <div class="partners-wrapper d-flex align-items-center">
                                <img src="/img/partners/1.png" alt="partner-1">
                                <img src="/img/partners/2.png" alt="partner-2">
                                <img src="/img/partners/3.png" alt="partner-3">
                        </div>
                        </div>
                </div>
        </div>
</section>

<section id="order-section" class="mb-160">
        <div class="container">
                <div class="row container-mob justify-content-between">
                        <div class="col-lg-4 d-flex flex-column contacts-wrapper">
                                <h2 class="accentColor contacts-title">Контакты</h2>
                                <div class="mb-40">
                                        <p class="grey subtitle">Звоните по телефонам:</br> Отдел маркетинга и продаж (консультация, заключение договора, оплаты)</p>
                                        <div class="contacts-info d-flex mb-20">
                                                <img src="/svg/telephone.svg" alt="phone-logo">
                                                <img src="/svg/viber.svg" alt="viber-logo">
                                                <img src="/svg/telegram.svg" alt="telegram-logo">
                                                <a href="tel:+37525506-65-88" >+375 (25) 506-65-88</a>
                                        </div>
                                        <div class="contacts-info d-flex mb-20">
                                                <img src="/svg/telephone.svg" alt="phone-logo">
                                                <img src="/svg/viber.svg" alt="viber-logo">
                                                <img src="/svg/telegram.svg" alt="telegram-logo">
                                                <a href="tel:+37525506-60-09" >+375 (25) 506-60-09</a>
                                        </div>

                                        <div class="contacts-mail">
                                                <a  href="mailto:Smartminsk2020@gmail.com">Smartminsk2020@gmail.com</a>
                                        </div>


                                        <div class="contacts-socials d-flex">
                                                <a class="contacts-socials-link" href="/">
                                                        <img class="contacts-socials-img" src="/svg/inst.svg" alt="inst">
                                                </a>
                                                <a class="contacts-socials-link" href="/">
                                                        <img class="contacts-socials-img" src="/svg/facebook.svg" alt="facebook">
                                                </a>
                                                <a class="contacts-socials-link" href="/">
                                                        <img class="contacts-socials-img" src="/svg/vk.svg" alt="vk">
                                                </a>
                                                <a class="contacts-socials-link" href="/">
                                                        <img class="contacts-socials-img" src="/svg/ok.svg" alt="ok">
                                                </a>
                                                <a class="contacts-socials-link" href="/">
                                                        <img class="contacts-socials-img" src="/svg/telegram.svg" alt="telegram">
                                                </a>
                                        </div>
                                </div>
                                <div class="mb-40">
                                        <p class="grey mb-20">По вопросам сотрудничества и рекламы:</p>
                                        <div class="contacts-info d-flex">
                                                <img src="/svg/telephone.svg" alt="phone-logo">
                                                <img src="/svg/viber.svg" alt="viber-logo">
                                                <img src="/svg/whatsapp.svg" alt="whatsapp-logo">
                                                <img src="/svg/telegram.svg" alt="telegram-logo">
                                                <a href="tel:+37525601-65-00" >+375 (25) 601-65-00</a>
                                        </div>
                                </div>
                                <div>
                                        <p class="grey mb-20">Администрация:</p>
                                        <p class="contacts-location mb-12">г. Минск, ул. Орловская, 80</p>
                                        <p class="contacts-timetable">Пн.-пт. 09:00-18:00</p>
                                </div>


                        </div>
                        <div class="col-lg-6 position-relative order-box">
                                <h2 class="accentColor order-title">Запишите ребенка на обучение в Smart School!</h2>
                                <p class="order-box-description mb-40">Заполните данные ниже, и мы свяжемся с вами, предоставив все необходимые документы для записи, и обговорим все детали. </p>
                                <app-form></app-form>
                        </div>
                </div>
        </div>

</section>

@stop

