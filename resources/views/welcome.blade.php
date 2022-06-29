@extends('layouts.app')

@section('content')


<section id="head" class="head mb-160 position-relative">
        <div class="container">
                <div class="row">
                        <div class="col-6 imgHead-box"> 
                                <img src="/img/main/imgHead.png" alt="">
                                <div class="pseudo"></div>
                        </div>
                
                        <div class="col-6">
                                <div class="head-inner mb-80">
                                        <h1 class="h1 pb-48">
                                                Международная сеть частных школ <span class="accentColor">Smart School</span>
                                        </h1>
                                        <div class="btn-group">
                                                <button class="button_1 btn-purple">Выбрать страну</button>
                                                <button class="button_1 btn-pink">Оставить заявку</button>
                                        </div>
                                </div>

                                <div class="position-relative swiper-box">
                                        <div class="position-relative container-slider-pagination">
                                                <div class="swiper">
                                                        <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                        <div class="advt-box">
                                                                                <h5 class="accentColor">Внимание!</h5>
                                                                                <p class="head-text text">Приглашаем учеников <span class="text-bold">1-11 классов</span> в наш <span class="text-bold">НОВЫЙ ФИЛИАЛ</span> по адресу: Минск, ул. Орловская, 80 (Dreamland)</p>
                                                                        </div>
                                                                </div>
                                                        
                                                        </div>
                                                </div>
                                                <div class="swiper-pagination"></div>
                                        </div>
                                        
                                </div>
                        
                                
                        </div>

                </div>
        </div>
        
</section>

<section class="history mb-160">
        <div class="container">
                <h2 class="accentColor mb-40">История</h2>
                
                        <div class="row align-items-center justify-content-between">
                                <div class=" col-7 text history-text-box">
                                        <p class="pb-10">
                                        В 2015 году при содействии лучших методистов Беларуси и Европы был открыт Инновационный Детский Образовательный Центр "Фабрика Звезд", на базе которого мы разработали уникальную программу для школьников по нейробике, кинезиологии и эмоциональному интеллекту «Секрет успешного обучения». <span class="text-bold">Наша методика позволяет эффективно, легко и быстро усваивать школьную программу, повышает успеваемость на 2-3 балла!</span> </p>

                                        <p class="pb-10">Опыт профессиональной команды методистов и психологов в создании данной программы, а также организация огромного количества смен детских лагерей под брендом «Фабрика звезд», знание лучших методик обучения, длительная коммуникация с родителями о действующей системе образования, ее достоинствах и недостатках, стали толчком для открытия в 2020 году частной школы "Смарт Скул", учредитель которой - детский писатель, юрист и медиатор Елена Пушкина. И именно программа "Секрет успешного обучения" легла в основу методологии "Смарт образования", которая используется в нашей школе.</p>

                                        <p>С 2022 года мы учим детей не только в Беларуси, но и в России, Грузии и Польше. 
                                        </p>
                                </div>
                                <div class="col-5 text">
                                        <img src="/img/main/history.png" alt="history-img">
                                </div>
                        </div>
                
                
                
        </div>
</section>

<section class="school mb-160">
        <div class="container">
                <h2 class="accentColor mb-40">Школа</h2>
                <div class="row">
                        <div class="col">
                                <div class="grid-box">
                                
                                        <!-- <div class="school-box">Беларусь</div>
                                        <div class="school-box">Онлайн</div> -->

                                        <div class="school-box-photo-1 d-flex">
                                                
                                                <img src="/img/school/photo1.png" alt="children-with-map">
                                                
                                                <div class="school-box d-flex flex-column text-left ">
                                                        <h3 class="accentColor mb-24">Беларусь</h3>
                                                        <p class="text flex-grow-1 mb-12">Минск, ул. Орловская, 80 (Dreamland)</p>
                                                        <p class="text flex-grow-1 mb-12">д. Жуков Луг (5 км от ст.м.Уручье)</p>
                                                        <a href="" class="button_2 text">Подробнее</a>
                                                </div>
                                        </div>

                                        <div class="school-box d-flex flex-column text-left">
                                                <h3 class="accentColor mb-24">Грузия</h3>
                                                <p class="text flex-grow-1 mb-12">обучение в Батуми</p>
                                                <a href="" class="button_2 text">Подробнее</a>
                                        </div>
                                        <div class="school-box not-padding">
                                                <img src="/img/school/photo2.png" alt="children-img">
                                        </div>

                                        <div class="school-box d-flex flex-column text-left">
                                                <h3 class="accentColor mb-24">Онлайн</h3>
                                                <p class="text flex-grow-1 mb-12">обучение на платформе Zoom</p>
                                                <a href="" class="button_2 text">Подробнее</a>
                                        </div>
                                        
                                        <div class="school-box d-flex flex-column text-left">
                                                <h3 class="accentColor mb-24">Россия</h3>
                                                <p class="text flex-grow-1 mb-12">обучение дистанционно на платформе Zoom</p>
                                                <a href="" class="button_2 text">Подробнее</a>
                                        </div>

                                        <div class="school-box-photo-2 d-flex">
                                                <img src="/img/school/photo3.png" alt="children-with-map">
                                                <div class="school-box d-flex flex-column text-left ">
                                                        <h3 class="accentColor mb-24">Польша</h3>
                                                        <p class="text flex-grow-1 mb-12">обучение по адресу:</br>ul.Ksieskiej, Wroclaw</p>
                                                        <a href="" class="button_2 text">Подробнее</a>
                                                </div>
                                        </div>
                                        
                                        
                                </div>
                                
                        </div>
                </div>
        </div>
</section>

<section class="advantages mb-160">
        <div class="container">
                <h2 class="accentColor mb-40">Почему мы?</h2>
                <div class="advantages row justify-content-between align-items-center">
                        <div class="col-6 flex-column">
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
                        <div class="col-6">
                                <div class="grid-wrapper">
                                        <a class="grid-box"><img src="/img/main/advantages/img1.png" alt="image-1">
                                                <div class="overlay-title">
                                                        <h3>Первоклассник</h3>
                                                </div>
                                        </a>
                                        <a class="grid-box"><img src="/img/main/advantages/img2.png" alt="image-2">
                                                <div class="overlay-title">
                                                        <h3>Обучение</h3>
                                                </div></a>
                                        <a class="grid-box"><img src="/img/main/advantages/img3.png" alt="image-3">
                                                <div class="overlay-title">
                                                        <h3>Старшеклассник</h3>
                                                </div></a>
                                        <a class="grid-box"><img src="/img/main/advantages/img4.png" alt="image-4">
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
                        <div class="col-3">
                                <div class="d-flex flex-column align-items-center  info-box">
                                        <img class="mb-20" src="/svg/calendar.svg" alt="calendar">
                                        <h4 class="text-bold mb-16">5 лет</h4>
                                        <p class="text grey text-center">обучаем детей по нашим</br> авторским программам</p>
                                </div>
                        </div>
                        <div class="col-3">
                                <div class="d-flex flex-column align-items-center  info-box">
                                        <img class="mb-20" src="/svg/group.svg" alt="calendar">
                                        <h4 class="text-bold mb-16">453+ детей</h4>
                                        <p class="text grey text-center">прошли обучение и выпустились из нашей школы</p>
                                </div>
                        </div>
                        <div class="col-3">
                                <div class="d-flex flex-column align-items-center  info-box">
                                        <img class="mb-20" src="/svg/place.svg" alt="calendar">
                                        <h4 class="text-bold mb-16">7 локаций</h4>
                                        <p class="text grey text-center">предлагает наша школа для </br>обучения из разных точек мира</p>
                                </div>
                        </div>
                        <div class="col-3">
                                <div class="d-flex flex-column align-items-center info-box">
                                        <img class="mb-20" src="/svg/study.svg" alt="calendar">
                                        <h4 class="text-bold mb-16">73 преподавателя</h4>
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
                        <div class="col-5">
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
                        <div class="col-5">
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

<section id="teachers" class="mb-160">
        <div class="container">
                <h2 class="accentColor mb-40">Команда профессиональных педагогов</h2>
                <p class="text mb-60 teachers-info">Наши учителя создают мотивацию к обучению, учат ребят быстро запоминать информацию и любить сам процесс обучения.</p>
                <!-- <div class="d-flex align-items-center justify-content-between position-relative teacher-wrapper">
                        <div class="swiper">
                                <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                                <div class="teacher-box d-flex flex-column">
                                                        <img class="mb-20" src="/img/teachers/teacher1.png" alt="teacher-1">
                                                        <div class="teacher-description">
                                                                <span class="teacher-post text grey mb-8">Учредитель</span>
                                                                <h5 class="accentColor teacher-name mb-8">Островская Илона Анатольевна</h5>
                                                                <p  class="teacher-description text">Детский писатель, профессиональный медиатор, юрист</p>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="swiper-slide">
                                                <div class="teacher-box d-flex flex-column">
                                                        <img class="mb-20" src="/img/teachers/teacher1.png" alt="teacher-1">
                                                        <div class="teacher-description">
                                                                <span class="teacher-post text grey mb-8">Учредитель</span>
                                                                <h5 class="accentColor teacher-name mb-8">Островская Илона Анатольевна</h5>
                                                                <p  class="teacher-description text">Детский писатель, профессиональный медиатор, юрист</p>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="swiper-slide">
                                                <div class="teacher-box d-flex flex-column">
                                                        <img class="mb-20" src="/img/teachers/teacher1.png" alt="teacher-1">
                                                        <div class="teacher-description">
                                                                <span class="teacher-post text grey mb-8">Учредитель</span>
                                                                <h5 class="accentColor teacher-name mb-8">Островская Илона Анатольевна</h5>
                                                                <p  class="teacher-description text">Детский писатель, профессиональный медиатор, юрист</p>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="swiper-slide">
                                                <div class="teacher-box d-flex flex-column">
                                                        <img class="mb-20" src="/img/teachers/teacher1.png" alt="teacher-1">
                                                        <div class="teacher-description">
                                                                <span class="teacher-post text grey mb-8">Учредитель</span>
                                                                <h5 class="accentColor teacher-name mb-8">Островская Илона Анатольевна</h5>
                                                                <p  class="teacher-description text">Детский писатель, профессиональный медиатор, юрист</p>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="swiper-slide">
                                                <div class="teacher-box d-flex flex-column">
                                                        <img class="mb-20" src="/img/teachers/teacher1.png" alt="teacher-1">
                                                        <div class="teacher-description">
                                                                <span class="teacher-post text grey mb-8">Учредитель</span>
                                                                <h5 class="accentColor teacher-name mb-8">Островская Илона Анатольевна</h5>
                                                                <p  class="teacher-description text">Детский писатель, профессиональный медиатор, юрист</p>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="swiper-slide">
                                                <div class="teacher-box d-flex flex-column">
                                                        <img class="mb-20" src="/img/teachers/teacher1.png" alt="teacher-1">
                                                        <div class="teacher-description">
                                                                <span class="teacher-post text grey mb-8">Учредитель</span>
                                                                <h5 class="accentColor teacher-name mb-8">Островская Илона Анатольевна</h5>
                                                                <p  class="teacher-description text">Детский писатель, профессиональный медиатор, юрист</p>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="swiper-slide">
                                                <div class="teacher-box d-flex flex-column">
                                                        <img class="mb-20" src="/img/teachers/teacher1.png" alt="teacher-1">
                                                        <div class="teacher-description">
                                                                <span class="teacher-post text grey mb-8">Учредитель</span>
                                                                <h5 class="accentColor teacher-name mb-8">Островская Илона Анатольевна</h5>
                                                                <p  class="teacher-description text">Детский писатель, профессиональный медиатор, юрист</p>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div> -->
                <div class="d-flex align-items-center justify-content-between position-relative teacher-wrapper">
			<div class="swiper teacher-swiper">
				<div class="swiper-wrapper">
				        <div class="swiper-slide">
						<div class="teacher-box d-flex flex-column">
							<div class="teacher__image-ibg"><img class="mb-20 " src="/img/teachers/teacher1.png" alt="teacher-1"></div>
							<div class="teacher-description">
								<span class="teacher-post text grey mb-8">Учредитель</span>
								<h5 class="accentColor teacher-name mb-8">Островская Илона Анатольевна</h5>
								<p  class="teacher-description text mb-8">Детский писатель, профессиональный медиатор, юрист</p>
                                                                <p class="teacher-experience text grey">Стаж: 27 лет</p>
							</div>
						</div>
					</div>
			        </div>
                                <div class="teacher-swiper__next"></div>
                                <div class="teacher-swiper__prev"></div>
		        </div>
                </div>
</section>

<section id="replies" class="mb-160">
        <div class="container">
                <h2 class="accentColor mb-40">Отзывы</h2>
                <div class="d-flex align-items-center justify-content-between replies-wrapper">
                        <div class="swiper replies-swiper">
                                <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img src="/img/replies/reply1.png" alt="reply-1"></div>
                                        <div class="swiper-slide"><img src="/img/replies/reply2.png" alt="reply-2"></div>
                                        <div class="swiper-slide"><img src="/img/replies/reply3.png" alt="reply-3"></div>
                                        <div class="swiper-slide"><img src="/img/replies/reply3.png" alt="reply-3"></div>
                                </div>
                                <div class="replies-swiper__next"></div>
                                <div class="replies-swiper__prev"></div>
                        </div>
                </div> 
        </div>
</section>

<section id="news" class="mb-160">
        <div class="container">
                <h2 class="accentColor mb-40">Новости</h2>
                <div class="wrapper">
                <div class="d-flex align-items-center justify-content-between news-wrapper">
                        <div class="swiper news-swiper">
                                <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                                <div class="news-box d-flex flex-column">
                                                        <div class="news__image-ibg">
                                                                <img class="mb-20 " src="/img/news/news1.png" alt="news-1">
                                                        </div>
                                                        <div class="news-description">
                                                                        <span class="news-date grey mb-12">09.06.2022</span>
                                                                        <h5 class="accentColor news-title text-bold mb-12">Внимание!</h5>
                                                                        <p  class="news-text text mb-12">Открыт набор офлайн на 2022/2023 учебный год:Минск, ул. Орловская, 80 (Dreamland) – 1-11 классы.При бронировании до 1 июля 2022 года стоимость снижена и фиксируется на весь год!</p>
                                                                        <a class="news-btn accentColor text-bold" href="/">Подробнее</a>
                                                        </div>
                                                </div>
                                        </div> 
                                        <!-- <div class="swiper-slide">
                                                <div class="news-box d-flex flex-column">
                                                        <div class="news__image-ibg">
                                                                <img class="mb-20 " src="/img/news/news1.png" alt="news-1">
                                                        </div>
                                                        <div class="news-description">
                                                                        <span class="news-date grey mb-12">09.06.2022</span>
                                                                        <h5 class="accentColor news-title text-bold mb-12">Внимание!</h5>
                                                                        <p  class="news-text text mb-12">Открыт набор офлайн на 2022/2023 учебный год:Минск, ул. Орловская, 80 (Dreamland) – 1-11 классы.При бронировании до 1 июля 2022 года стоимость снижена и фиксируется на весь год!</p>
                                                                        <a class="news-btn accentColor text-bold" href="/">Подробнее</a>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="swiper-slide">
                                                <div class="news-box d-flex flex-column">
                                                        <div class="news__image-ibg">
                                                                <img class="mb-20 " src="/img/news/news1.png" alt="news-1">
                                                        </div>
                                                        <div class="news-description">
                                                                        <span class="news-date grey mb-12">09.06.2022</span>
                                                                        <h5 class="accentColor news-title text-bold mb-12">Внимание!</h5>
                                                                        <p  class="news-text text mb-12">Открыт набор офлайн на 2022/2023 учебный год:Минск, ул. Орловская, 80 (Dreamland) – 1-11 классы.При бронировании до 1 июля 2022 года стоимость снижена и фиксируется на весь год!</p>
                                                                        <a class="news-btn accentColor text-bold" href="/">Подробнее</a>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="swiper-slide">
                                                <div class="news-box d-flex flex-column">
                                                        <div class="news__image-ibg">
                                                                <img class="mb-20 " src="/img/news/news1.png" alt="news-1">
                                                        </div>
                                                        <div class="news-description">
                                                                        <span class="news-date grey mb-12">09.06.2022</span>
                                                                        <h5 class="accentColor news-title text-bold mb-12">Внимание!</h5>
                                                                        <p  class="news-text text mb-12">Открыт набор офлайн на 2022/2023 учебный год:Минск, ул. Орловская, 80 (Dreamland) – 1-11 классы.При бронировании до 1 июля 2022 года стоимость снижена и фиксируется на весь год!</p>
                                                                        <a class="news-btn accentColor text-bold" href="/">Подробнее</a>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="swiper-slide">
                                                <div class="news-box d-flex flex-column">
                                                        <div class="news__image-ibg">
                                                                <img class="mb-20 " src="/img/news/news1.png" alt="news-1">
                                                        </div>
                                                        <div class="news-description">
                                                                        <span class="news-date grey mb-12">09.06.2022</span>
                                                                        <h5 class="accentColor news-title text-bold mb-12">Внимание!</h5>
                                                                        <p  class="news-text text mb-12">Открыт набор офлайн на 2022/2023 учебный год:Минск, ул. Орловская, 80 (Dreamland) – 1-11 классы.При бронировании до 1 июля 2022 года стоимость снижена и фиксируется на весь год!</p>
                                                                        <a class="news-btn accentColor text-bold" href="/">Подробнее</a>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="swiper-slide">
                                                <div class="news-box d-flex flex-column">
                                                        <div class="news__image-ibg">
                                                                <img class="mb-20 " src="/img/news/news1.png" alt="news-1">
                                                        </div>
                                                        <div class="news-description">
                                                                        <span class="news-date grey mb-12">09.06.2022</span>
                                                                        <h5 class="accentColor news-title text-bold mb-12">Внимание!</h5>
                                                                        <p  class="news-text text mb-12">Открыт набор офлайн на 2022/2023 учебный год:Минск, ул. Орловская, 80 (Dreamland) – 1-11 классы.При бронировании до 1 июля 2022 года стоимость снижена и фиксируется на весь год!</p>
                                                                        <a class="news-btn accentColor text-bold" href="/">Подробнее</a>
                                                        </div>
                                                </div>
                                        </div> -->
                                        
                                </div> 
                                        
                                </div>
                                <div class="news-swiper__next"></div>
                                <div class="news-swiper__prev"></div>
                        </div>
                </div>
        </div>
</section>

<section id="documents" class="mb-160">
        <div class="container">
                <h2 class="accentColor mb-40">Документы</h2>
                <div class="wrapper row">
                        <div class="col d-flex justify-content-between">
                                <button class="document-button btn-doc text-bold">Документы для зачисления</button>
                                <button class="document-button btn-doc text-bold">Образцы заявлений</button>
                                <button class="document-button btn-doc text-bold">Свидетельство</button>
                                <button class="document-button btn-doc text-bold">Лицензия</button>
                                <button class="document-button btn-doc text-bold">Реквизиты</button>
                                <button class="document-button btn-doc text-bold">Электронный журнал</button>
                        </div>
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

<section class="contacts">
        <div class="container">
                <div class="row d-flex justify-between">
                        <div class="col-4 d-flex flex-column block1">
                                hi
                        </div>
                        <div class="col-6 block2">
                                hi
                        </div>
                </div>
                
        </div>
</section>
@stop

