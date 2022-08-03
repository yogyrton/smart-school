@php($routeName = Route::current()->getName())
<section id="school" class="@if($routeName === 'home') pt-120 @endif scrollreveal">
    <div class="container">
        <h2 class="accentColor mb-40">Школа</h2>
        <div class="swiper-box">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="school-box" href="/school-belarus">
                            <div class="img-box">
                                <img src="/img/main/school/belarus.jpg" alt="children-with-map">
                            </div>
                            <div class="d-flex flex-column box-inner">
                                <div>
                                    <h3 class="accentColor mb-24">Беларусь</h3>
                                    <div class="box-description">
                                        <p class="text flex-grow-1 mb-12">Минск, ул. Орловская, 80 (Dreamland)</p>
                                        <p class="text flex-grow-1 mb-20">д. Жуков Луг (5 км от ст.м.Уручье)</p>
                                    </div>
                                </div>
                                <button class="button_2 text">Подробнее</button>
                            </div>
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a class="school-box school-box-short" href="/dev">
                            <div class="img-box block-mob">
                                <img src="/img/main/school/gruziya.jpg" alt="children-img">
                            </div>
                            <div class="box-inner">
                                <div>
                                    <h3 class="accentColor mb-24">Грузия</h3>
                                    <div class="box-description">
                                        <p class="text flex-grow-1 mb-12">обучение в Батуми</p>
                                    </div>
                                </div>
                                <button class="button_2 text">Подробнее</button>
                            </div>
                        </a>
                    </div>

                    <div class="school-box school-box-desktop">
                        <img class="w-100" src="/img/main/school/gruziya.jpg" alt="children-img">
                    </div>

                    @if($routeName !== 'online')
                    <div class="swiper-slide">
                        <a class="school-box school-box-short" href="/school-online">
                            <div class="img-box block-mob">
                                <img src="/img/main/school/online.jpg" alt="children-img">
                            </div>
                            <div class="box-inner">
                                <div>
                                    <h3 class="accentColor mb-24">Онлайн</h3>
                                    <div class="box-description">
                                        <p class="text flex-grow-1 mb-12">обучение на платформе Zoom</p>
                                    </div>
                                </div>
                                <button class="button_2 text">Подробнее</button>
                            </div>
                        </a>
                    </div>
                    @endif

                    @if($routeName !== 'russia')
                    <div class="swiper-slide">
                        <a class="school-box school-box-short" href="/school-russia">
                            <div class="img-box block-mob">
                                <img src="/img/main/school/russia.jpg" alt="children-img">
                            </div>
                            <div class="box-inner">
                                <div>
                                    <h3 class="accentColor mb-24">Россия</h3>
                                    <div class="box-description">
                                        <p class="text flex-grow-1 mb-12">обучение дистанционно на платформе Zoom</p>
                                    </div>
                                </div>
                                <button class="button_2 text">Подробнее</button>
                            </div>
                        </a>
                    </div>
                    @endif

                    @if($routeName === 'online' || $routeName === 'russia')
                        <div class="school-box school-box-desktop">
                            <img class="w-100" src="/img/main/school/photo5.png" alt="children-img">
                        </div>
                    @endif

                    <div class="swiper-slide">
                        <a class="school-box" href="/dev">
                            <div class="img-box">
                                <img src="/img/main/school/poland.jpg" alt="children-with-map">
                            </div>

                            <div class="d-flex flex-column box-inner">
                                <div>
                                    <h3 class="accentColor mb-24">Польша</h3>
                                    <div class="box-description">
                                        <p class="text flex-grow-1 mb-12">обучение по адресу: ul.Ksieskiej, Wroclaw</p>
                                    </div>
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
