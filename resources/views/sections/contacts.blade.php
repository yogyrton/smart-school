@php($routeName = Route::current()->getName())
@php($regionNumber = null)
@if($routeName === 'russia') @php($regionNumber = 79680710905)
@else @php($regionNumber = 375256016500)
@endif
<section id="order-section" class="order-section scrollreveal">
    <div class="container">
        <div class="row container-mob justify-content-between">
            <div class="col-lg-5 mb-5 mb-lg-0 d-flex flex-column contacts-wrapper">
                <h2 class="accentColor contacts-title">Контакты</h2>
                <div class="mb-24">
                    <p class="grey subtitle">Звоните по телефонам:</br> Отдел маркетинга и продаж (консультация,
                        заключение договора, оплаты)</p>
                        <div class="contacts-info d-flex mb-20">
{{--                        <img src="/svg/telephone.svg" alt="phone-logo">--}}
{{--                        <img src="/svg/viber.svg" alt="viber-logo">--}}
{{--                        <img src="/svg/telegram.svg" alt="telegram-logo">--}}
                        <a class="tel-number" href="tel:+375255066009">+375 (25) 506-60-09</a>
                        </div>
                    <div class="contacts-info d-flex mb-20">
{{--                        <img src="/svg/telephone.svg" alt="phone-logo">--}}
{{--                        <img src="/svg/viber.svg" alt="viber-logo">--}}
{{--                        <img src="/svg/telegram.svg" alt="telegram-logo">--}}
                        @if($routeName === 'russia' || $routeName === 'online')
                            <a class="tel-number" href="tel:+79680710905">+7 (968) 071-09-05</a>
                        @else
                        <a class="tel-number" href="tel:+375255066588">+375 (25) 506-65-88</a>
                        @endif
                    </div>
                    

                    <div class="contacts-mail">
                        <a href="mailto:smartminsk2020@gmail.com">smartminsk2020@gmail.com</a>
                    </div>
                </div>
                <div class="mb-24">
                    <p class="grey mb-16">По вопросам сотрудничества и рекламы:</p>
                    <div class="contacts-info d-flex">
{{--                        <img src="/svg/telephone.svg" alt="phone-logo">--}}
{{--                        <img src="/svg/viber.svg" alt="viber-logo">--}}
{{--                        <img src="/svg/whatsapp.svg" alt="whatsapp-logo">--}}
{{--                        <img src="/svg/telegram.svg" alt="telegram-logo">--}}
                        <a class="tel-number" href="tel:+375256016500">+375 (25) 601-65-00</a>
                    </div>
                </div>
                <div class="mb-24">
                    <p class="grey mb-16">Администрация:</p>
                    <div>
                        @if($routeName === 'russia' || $routeName === 'online')
                            <a class="contacts-tel mb-12 d-inline-block tel-number" href="tel:+79680710905">+7 (968) 071-09-05</a>
                        @else
                            <a class="contacts-tel mb-12 d-inline-block tel-number" href="tel:+375255156009">+375 (25) 515-60-09</a>
                        @endif
                    </div>

                    <div>
                        @if($routeName === 'russia' || $routeName === 'online')
                            <a class="contacts-location d-inline-block mb-12" href="https://goo.gl/maps/6ubYWPAp4Bxy32mC7" target="_blank" rel="noopener">г. Смоленск, ул. Большая Советская, д. 16/17</a>
                        @else
                            <a class="contacts-location d-inline-block mb-12" href="https://goo.gl/maps/1DqaKy5WPwUwZm2UA" target="_blank" rel="noopener">г. Минск, ул. Орловская, 80</a>
                        @endif
                    </div>

                    <p class="contacts-timetable">Пн.-пт. 09:00-18:00</p>
                </div>

                <div class="mb-24">
                    <p  class="grey mb-16">Пишите в мессенджеры:</p>
                    <div class="contacts-socials d-flex">
                        <a class="contacts-socials-link viber" target="_blank" rel="noopener" href="viber://chat?number=%2B{{$regionNumber}}">
                            <img class="contacts-socials-img" src="/svg/viber.svg" alt="viber">
                        </a>
                        <a class="contacts-socials-link whatsapp" target="_blank" rel="noopener" href="https://api.whatsapp.com/send?phone={{$regionNumber}}">
                            <img class="contacts-socials-img" src="/svg/whatsapp.svg" alt="whatsapp">
                        </a>
                        <a class="contacts-socials-link telegram" target="_blank" rel="noopener" href="tg://resolve?domain=sm_education_bot&start=ml15">
                            <img class="contacts-socials-img" src="/svg/telegram.svg" alt="telegram">
                        </a>
                    </div>
                </div>

                <p class="grey mb-16">Подписывайтесь на наши соц. сети:</p>
                <div class="contacts-socials contacts-2 d-flex">
                    @if($routeName === 'camp')
                    <a class="contacts-socials-link instagram" target="_blank" rel="noopener" href="https://www.instagram.com/fabrikazvezdminsk/">
                        <img class="contacts-socials-img" src="/svg/inst.svg" alt="inst">
                    </a>
                    @else
                    <a class="contacts-socials-link instagram" target="_blank" rel="noopener" href="https://www.instagram.com/smartschool_minsk/">
                        <img class="contacts-socials-img" src="/svg/inst.svg" alt="inst">
                    </a>
                    @endif

                    @if($routeName === 'camp')
                    <a class="contacts-socials-link facebook" target="_blank" rel="noopener" href="https://ru-ru.facebook.com/obrazovatelnycentrfabrikazvezd/">
                        <img class="contacts-socials-img" src="/svg/facebook.svg" alt="facebook">
                    </a>
                    @else
                    <a class="contacts-socials-link facebook" target="_blank" rel="noopener" href="https://www.facebook.com/people/Smart-School-%25D1%2587%25D0%25B0%25D1%2581%25D1%2582%25D0%25BD%25D0%25B0%25D1%258F-%25D1%2588%25D0%25BA%25D0%25BE%25D0%25BB%25D0%25B0/100039861583458/">
                        <img class="contacts-socials-img" src="/svg/facebook.svg" alt="facebook">
                    </a>
                    @endif

                    @if($routeName === 'camp')
                    <a class="contacts-socials-link vk" target="_blank" rel="noopener" href=" https://vk.com/centr_fabrika_zvezd">
                        <img class="contacts-socials-img" src="/svg/vk.svg" alt="vk">
                    </a>
                    @else
                    <a class="contacts-socials-link vk" target="_blank" rel="noopener" href="https://vk.com/smartschool_minsk">
                        <img class="contacts-socials-img" src="/svg/vk.svg" alt="vk">
                    </a>
                    @endif

                    @if($routeName === 'camp')
                    <a class="contacts-socials-link ok" target="_blank" rel="noopener" href="https://ok.ru/fabrika.zvezd.minsk">
                        <img class="contacts-socials-img" src="/svg/ok.svg" alt="ok">
                    </a>
                    @else
                    <a class="contacts-socials-link ok" target="_blank" rel="noopener" href="https://ok.ru/group/58476618186850">
                        <img class="contacts-socials-img" src="/svg/ok.svg" alt="ok">
                    </a>
                    @endif

                    @if($routeName === 'camp' || $routeName === 'jukov-lug' || $routeName === 'georgia' || $routeName === 'dreamland')
                    <a class="contacts-socials-link" target="_blank" rel="noopener" href="https://www.youtube.com/channel/UCWB5hzQchCK7zorsIyvDzpg">
                        <img class="contacts-socials-img" src="/svg/youtube.svg" alt="youtube">
                    </a>
                    @else
                    <a class="contacts-socials-link" target="_blank" rel="noopener" href="https://www.youtube.com/channel/UCz0Rk1OJ9ImphZhh9eWsIMQ">
                        <img class="contacts-socials-img" src="/svg/youtube.svg" alt="youtube">
                    </a>
                    @endif


                    @if($routeName === 'camp' || $routeName === 'jukov-lug' || $routeName === 'georgia' || $routeName === 'dreamland')
                    <a class="contacts-socials-link" target="_blank" rel="noopener" href="https://www.tiktok.com/@fabrika_zvezd">
                        <img class="contacts-socials-img" src="/svg/tiktok.svg" alt="tiktok">
                    </a>
                    @else
                    <a class="contacts-socials-link" target="_blank" rel="noopener" href="https://www.tiktok.com/@smartschoolminsk">
                        <img class="contacts-socials-img" src="/svg/tiktok.svg" alt="tiktok">
                    </a>
                    @endif
                    
                </div>

            </div>
            <div class="col-lg-6 position-relative order-box">
                <h2 class="accentColor order-title">Запишите ребенка на обучение в Smart School!</h2>
                <p class="order-box-description mb-40">Заполните данные ниже, и мы свяжемся с вами, предоставив все
                    необходимые документы для записи, и обговорим все детали. </p>
                <app-form page="{{$routeName}}"></app-form>
            </div>
        </div>
    </div>

</section>
