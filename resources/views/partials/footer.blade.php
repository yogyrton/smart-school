@section('footer')
    @php($routeName = Route::current()->getName())
    <footer class="footer">
        <div class="container">
            <div class="d-flex align-items-start footer-wrapper">
                <div class="logo">
                    <a href="/">
                        <img src="/svg/logoAccent.svg" alt="logo-img">
                    </a>
                </div>

                <div class="footer-inner">
                    <div class="footer-box">
                        <h5 class="text-bold mb-16">О нас</h5>
                        <ul class="footer-list">
                            <li class="footer-list-item"><a href="@if($routeName === 'home')#history @else /#history @endif">История</a></li>
                            <li class="footer-list-item "><a href="@if($routeName === 'home')#advantages @else /#advantages @endif">Почему мы</a></li>
                            <li class="footer-list-item "><a href="@if($routeName === 'home')#priority @else /#priority @endif">Преимущества</a></li>
                            <li class="footer-list-item "><a href="@if($routeName === 'home')#teachers @else /#teachers @endif">Преподаватели</a></li>
                            <li class="footer-list-item "><a href="@if($routeName === 'home')#replies @else /#replies @endif">Отзывы</a></li>
                            <li class="footer-list-item "><a href="@if($routeName === 'home')#news @else /#news @endif">Новости</a></li>
                            <li class="footer-list-item "><a href="@if($routeName === 'home')#documents @else /#documents @endif">Документы</a></li>
                        </ul>
                    </div>
                    <div class="footer-box">
                        <h5 class="text-bold mb-16">Школа</h5>
                        <ul class="footer-list">
                            <li class="footer-list-item"><a href="@if($routeName === 'belarus')# @else /school-belarus @endif">Беларусь</a></li>
                            <li class="footer-list-item "><a href="@if($routeName === 'russia')# @else /school-russia @endif">Россия</a></li>
                            <li class="footer-list-item "><a href="@if($routeName === 'poland')# @else /dev @endif">Польша</a></li>
                            <li class="footer-list-item "><a href="@if($routeName === 'moldova')# @else /dev @endif">Молдавия</a></li>
                            <li class="footer-list-item "><a href="@if($routeName === 'georgia')# @else /dev @endif">Грузия</a></li>
                            <li class="footer-list-item "><a href="@if($routeName === 'germany')# @else /dev @endif">Германия</a></li>
                            <li class="footer-list-item "><a href="@if($routeName === 'online')# @else /school-online @endif">Онлайн</a></li>
                        </ul>
                    </div>
                    <div class="footer-box">
                        <h5 class="text-bold mb-16">Доп. услуги</h5>
                        <ul class="footer-list">
                            <li class="footer-list-item"><a href="/dev">Репетиторы</a></li>
                            <li class="footer-list-item "><a href="/dev">Факультативы</a></li>
                            <li class="footer-list-item "><a href="/dev">Логопеды</a></li>
                            <li class="footer-list-item "><a href="/dev">Психологи</a></li>
                            <li class="footer-list-item "><a href="/dev">Подготовка к ЦТ</a></li>
                        </ul>
                    </div>
                    <div class="footer-box">
                        <h5 class="text-bold mb-16">Детский лагерь</h5>
                        <ul class="footer-list">
                            <li class="footer-list-item"><a href="/dev">Беларусь</a></li>
                            <li class="footer-list-item "><a href="/dev">Грузия</a></li>
                            <li class="footer-list-item "><a href="/dev">Польша</a></li>
                            <li class="footer-list-item "><a href="/dev">Онлайн</a></li>
                        </ul>
                    </div>
                    <div class="footer-box">
                        <ul class="footer-list mb-40">
                            <li class="text-bold mb-12"><a href="@if($routeName === 'home')#replies @else /#replies @endif">Отзывы</a></li>
                            <li class="text-bold mb-12"><a href="/dev">Одно окно</a></li>
                            <li class="text-bold"><a href="@if($routeName === 'home')#contacts @else /#contacts @endif">Контакты</a></li>
                        </ul>
                        <div class="d-lg-flex d-none footer-socials">
                            <a target="_blank" href="/"><img src="/svg/facebook.svg" alt=""></a>
                            <a target="_blank" href="/"><img src="/svg/inst.svg" alt=""></a>
                            <a target="_blank" href="/"><img src="/svg/vk.svg" alt=""></a>
                            <a target="_blank" href="/"><img src="/svg/telegram.svg" alt=""></a>
                        </div>
                    </div>
                    <div class="d-lg-none footer-socials">
                        <a target="_blank" href="/"><img src="/svg/facebook.svg" alt=""></a>
                        <a target="_blank" href="/"><img src="/svg/inst.svg" alt=""></a>
                        <a target="_blank" href="/"><img src="/svg/vk.svg" alt=""></a>
                        <a target="_blank" href="/"><img src="/svg/telegram.svg" alt=""></a>
                    </div>
                    <address>Разработка и дизайн Ilavista Technologies</address>
                </div>
            </div>


        </div>

        </div>
    </footer>

@show
