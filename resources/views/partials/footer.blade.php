@section('footer')
    @php($routeName = Route::current()->getName())
    @php($advantages = '/#advantages') 
    @if($routeName === 'home') @php($advantages = '#advantages') @endif
    @php($replies = '/#replies') 
    @if($routeName === 'camp'|| $routeName === 'dreamland' || $routeName === 'jukov-lug' || $routeName === 'georgia')  @php($replies = '/camp/#replies') @else @php($replies = '/#replies')  @endif
    @php($history = '/#history')
    @if ($routeName === 'dreamland' || $routeName === 'jukov-lug' || $routeName === 'georgia') @php($history = '/camp#history') @elseif  ($routeName === 'home' || $routeName === 'belarus' || $routeName === 'russia' ||  $routeName === 'senior' || $routeName === 'online' || $routeName === 'junior' || $routeName === 'camp' )@php($history = '#history') @else @php($history = '/#history') @endif
    @php($priority = '/#priority')
    @if($routeName === 'home' || $routeName === 'belarus' ||   $routeName === 'senior'  || $routeName === 'junior' ) @php($priority = '#priority') @elseif ($routeName === 'russia' || $routeName === 'online') @php($priority = '#priority-online')  @else @php($priority = '/#priority') @endif
    @php($news = '/#news')
    @if($routeName === 'home' || $routeName === 'junior' ||  $routeName === 'senior' || $routeName === 'online' || $routeName === 'russia' )@php($news = '#news') @else @php($news = '/#news') @endif
    @php($documents = '/#documents')
    @if($routeName === 'home' || $routeName === 'belarus' || $routeName === 'russia' ||  $routeName === 'senior' || $routeName === 'online' || $routeName === 'junior' || $routeName === 'dreamland' || $routeName === 'jukov-lug' || $routeName === 'georgia' ) @php($documents = '#documents') @else @php($documents = '/#documents') @endif
    @php($teachers = '/#teachers')
    @if($routeName === 'home')@php($teachers = '#teachers') @else @php($teachers = '/#teachers') @endif
    @php($orderSection = '/#order-section')
    @if($routeName === 'home' || $routeName === 'belarus' || $routeName === 'russia' ||  $routeName === 'senior' || $routeName === 'online' || $routeName === 'junior' || $routeName === 'camp' || $routeName === 'dreamland' || $routeName === 'jukov-lug' || $routeName === 'georgia')@php($orderSection = '#order-section') @else @php($orderSection = '/#order-section') @endif

    <footer class="footer">
        <div class="container">
            <div class="d-xl-flex align-items-start footer-wrapper">
                <div class="logo mb-4 mb-xl-0">
                    <a href="/">
                        <img src="/svg/logoAccent.svg" class="logo-img d-none d-xl-block">
                        <img src="/svg/logoAccentRow.svg" class="logo-img d-block d-xl-none">
                    </a>
                </div>

                <div>
                    <div class="footer-inner">
                        <div class="footer-box">
                            <h5 class="text-bold mb-16">О нас</h5>
                            <ul class="footer-list">
                                <li class="footer-list-item"><a href="{{$history}}">История</a></li>
                                <li class="footer-list-item "><a href="{{$advantages}}">Почему мы</a></li>
                                <li class="footer-list-item "><a href="{{$priority}}">Преимущества</a></li>
                                <li class="footer-list-item "><a href="{{$teachers}}">Преподаватели</a></li>
                                <li class="footer-list-item "><a href="{{$replies}}">Отзывы</a></li>
                                <li class="footer-list-item "><a href="{{$news}}">Новости</a></li>
                                <li class="footer-list-item "><a href="{{$documents}}">Документы</a></li>
                            </ul>
                        </div>
                        <div class="footer-box">
                            <h5 class="text-bold mb-16">Школы</h5>
                            <ul class="footer-list">
                                <li class="footer-list-item"><a href="@if($routeName === 'belarus')# @else /school-belarus @endif">Беларусь</a></li>
                                <li class="footer-list-item "><a href="@if($routeName === 'russia')# @else /school-russia @endif">Россия</a></li>
                                <li class="footer-list-item "><a href="@if($routeName === 'online')# @else /school-online @endif">Онлайн</a></li>
                                <li class="footer-list-item "><a href="@if($routeName === 'poland')# @else /dev @endif">Польша</a></li>
                                <li class="footer-list-item "><a href="@if($routeName === 'georgia')# @else /dev @endif">Грузия</a></li>
                                <li class="footer-list-item "><a href="@if($routeName === 'moldova')# @else /dev @endif">Молдова</a></li>
                                <li class="footer-list-item "><a href="@if($routeName === 'germany')# @else /dev @endif">Германия</a></li>
                                
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
                                <li class="footer-list-item "><a href="/camp/jukov-lug">Беларусь Жуков луг</a></li>
                                <li class="footer-list-item "><a href="/camp/dreamland">Беларусь Dreamland</a></li>
                                <li class="footer-list-item "><a href="/camp/georgia">Грузия</a></li>
                                <li class="footer-list-item "><a href="/dev">Польша</a></li>
                                <li class="footer-list-item "><a href="/dev">Онлайн</a></li>
                            </ul>
                        </div>
                        <div class="footer-box">
                            <ul class="footer-list mb-40">
                                <li class="text-bold mb-12"><a href="{{$replies}}">Отзывы</a></li>
                                <li class="text-bold mb-12"><a href="{{ route('single-window') }}">Одно окно</a></li>
                                <li class="text-bold"><a href="{{$orderSection}}">Контакты</a></li>
                            </ul>
                            <div class="d-lg-flex d-none footer-socials">
                                @include('partials.social_navigation')
                            </div>
                        </div>
                        <div class="d-lg-none footer-socials">
                            @include('partials.social_navigation')
                        </div>
                    </div>
                    <address><a target="_blank" rel="noopener" href="https://ilavista.by/">Разработка и дизайн Ilavista Technologies</a></address>
                </div>
            </div>


        </div>
    </footer>

@show
