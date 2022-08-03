@section('header')
    @php($routeName = Route::current()->getName())
    <header class="">
        <nav class="navbar navbar-expand-xl navbar-light">
            <div class="container container-md">

                <a href="/" class="logo">
                    <img src="/img/main/logo-header.webp" class="d-none d-xl-block"
                         alt="Логотип международной сети частных школ Smart School" width="229">
                    <img src="/img/main/logo-header-mobile.webp" class="d-xl-none d-block"
                         alt="Логотип международной сети частных школ Smart School" width="84">
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="header-list">
                        <div class="dropdown">
                            <button class="dropdown-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                О нас
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#history">История</a></li>
                                <li><a class="dropdown-item" href="@if($routeName === 'home')#advantages @else /#advantages @endif">Почему мы</a></li>
                                <li><a class="dropdown-item" href="#priority">Преимущества</a></li>
                                <li><a class="dropdown-item" href="@if($routeName === 'home')#teachers @else /#teachers @endif">Преподаватели</a></li>
                                <li><a class="dropdown-item" href="@if($routeName === 'home')#replies @else /#replies @endif">Отзывы</a></li>
                                <li><a class="dropdown-item" href="#news">Новости</a></li>
                                <li><a class="dropdown-item" href="#documents">Документы</a></li>
                            </ul>
                        </div>

                        <div class="dropdown">
                            <button class="dropdown-btn @if(!empty($activeNav) && $activeNav === 'school') active @endif" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Школа
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="@if($routeName === 'belarus')# @else /school-belarus @endif">Беларусь</a></li>
                                <li><a class="dropdown-item" href="@if($routeName === 'russia')# @else /school-russia @endif">Россия</a></li>
                                <li><a class="dropdown-item" href="@if($routeName === 'poland')# @else /dev @endif">Польша</a></li>
                                <li><a class="dropdown-item" href="@if($routeName === 'moldova')# @else /dev @endif">Молдавия</a></li>
                                <li><a class="dropdown-item" href="@if($routeName === 'georgia')# @else /dev @endif">Грузия</a></li>
                                <li><a class="dropdown-item" href="@if($routeName === 'germany')# @else /dev @endif">Германия</a></li>
                                <li><a class="dropdown-item" href="@if($routeName === 'online')# @else /school-online @endif">Онлайн</a></li>
                            </ul>
                        </div>

                        <div class="dropdown">
                            <button class="dropdown-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Доп.услуги
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/dev">Репетиторы</a></li>
                                <li><a class="dropdown-item" href="/dev">Факультативы</a></li>
                                <li><a class="dropdown-item" href="/dev">Логопеды</a></li>
                                <li><a class="dropdown-item" href="/dev">Психологи</a></li>
                                <li><a class="dropdown-item" href="/dev">Подготовка к ЦТ</a></li>
                            </ul>
                        </div>

                        <ul class="d-flex ">

                        <div class="dropdown">
                            <button class="dropdown-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Детский лагерь
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/dev">Беларусь</a></li>
                                <li><a class="dropdown-item" href="/dev">Грузия</a></li>
                                <li><a class="dropdown-item" href="/dev">Польша</a></li>
                                <li><a class="dropdown-item" href="/dev">Онлайн</a></li>
                            </ul>
                        </div>
                        
                            <li class="header-item">
                                <a class="h5 menu-link" href="@if($routeName === 'home')#replies @else /#replies @endif">Отзывы</a>
                            </li>
                            <li class="header-item">
                                <a class="h5" href="/dev">Одно окно</a>
                            </li>
                            <li class="header-item">
                                <a  class="h5 menu-link" href="#order-section">Контакты</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <div class="d-none d-xl-flex header-contacts-messengers">
                    @include('partials.social_navigation')
                </div>
                <div class="d-block d-xl-none button-burger btn" data-bs-toggle="modal" data-bs-target="#burgerModal">
                    <img src="/svg/burger.svg" alt="burger-icon">
                </div>
            </div>
        </nav>
    </header>

    <div class="modal fade" id="burgerModal" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-flex justify-content-between container">
                        <div class="logo">
                            <a href="/">
                                <img src="/img/main/logo-accent-mobile.webp" width="84" alt="logo-img">
                            </a>
                        </div>
                        <div class="button-burger" data-bs-toggle="modal" data-bs-target="#burgerModal">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.30856 18.4843C1.11329 18.6796 1.11329 18.9962 1.30856 19.1914C1.50382 19.3867 1.8204 19.3867 2.01566 19.1914L1.30856 18.4843ZM19.6933 1.51377C19.8886 1.31851 19.8886 1.00193 19.6933 0.806668C19.4981 0.611406 19.1815 0.611406 18.9862 0.806668L19.6933 1.51377ZM2.01566 19.1914L19.6933 1.51377L18.9862 0.806668L1.30856 18.4843L2.01566 19.1914Z"
                                    fill="#0D0D0D"/>
                                <path
                                    d="M1.35355 0.646447C1.15829 0.451184 0.841709 0.451184 0.646447 0.646447C0.451184 0.841709 0.451184 1.15829 0.646447 1.35355L1.35355 0.646447ZM18.3241 19.0312C18.5194 19.2265 18.836 19.2265 19.0312 19.0312C19.2265 18.836 19.2265 18.5194 19.0312 18.3241L18.3241 19.0312ZM0.646447 1.35355L18.3241 19.0312L19.0312 18.3241L1.35355 0.646447L0.646447 1.35355Z"
                                    fill="#0D0D0D"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <nav>
                            <ul>
                                <li class="d-block" data-bs-toggle="modal" data-bs-target="#burgerModal">
                                    <a href="#history" class="h5 mobile-link">О нас</a>
                                </li>
                                <li class="d-block" data-bs-toggle="modal" data-bs-target="#burgerModal">
                                    <a class="h5 mobile-link" href="/#school">Школа</a>
                                </li>
                                <li class="d-block" data-bs-toggle="modal" data-bs-target="#burgerModal">
                                    <a class="h5 mobile-link" href="/dev">Доп.услуги</a>
                                </li>
                                <li class="d-block" data-bs-toggle="modal" data-bs-target="#burgerModal">
                                    <a class="h5 mobile-link" href="/camp">Детский лагерь</a>
                                </li>
                                <li class="d-block" data-bs-toggle="modal" data-bs-target="#burgerModal">
                                    <a class="h5 mobile-link" href="/#replies">Отзывы</a>
                                </li>
                                <li class="d-block" data-bs-toggle="modal" data-bs-target="#burgerModal">
                                    <a class="h5 mobile-link" href="/dev">Одно окно</a>
                                </li>
                                <li class="d-block" data-bs-toggle="modal" data-bs-target="#burgerModal">
                                    <a class="h5 mobile-link" href="#order-section">Контакты</a>
                                </li>
                            </ul>
                            <div class="d-flex flex-column header-contacts-messengers">
                                <a target="_blank" href="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_182_1856)">
                                            <path
                                                d="M8.97778 24V12.7385H6V8.68382H8.97778V5.2206C8.97778 2.49917 10.7368 0 14.7898 0C16.4309 0 17.6443 0.15732 17.6443 0.15732L17.5487 3.9437C17.5487 3.9437 16.3112 3.93166 14.9607 3.93166C13.4991 3.93166 13.2649 4.60522 13.2649 5.72316V8.68382H17.6649L17.4734 12.7385H13.2649V24H8.97778Z"
                                                fill="#8041FF"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_182_1856">
                                                <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a target="_blank" href="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M7.465 1.066C8.638 1.012 9.012 1 12 1C14.988 1 15.362 1.013 16.534 1.066C17.706 1.119 18.506 1.306 19.206 1.577C19.939 1.854 20.604 2.287 21.154 2.847C21.714 3.396 22.146 4.06 22.422 4.794C22.694 5.494 22.88 6.294 22.934 7.464C22.988 8.639 23 9.013 23 12C23 14.988 22.987 15.362 22.934 16.535C22.881 17.705 22.694 18.505 22.422 19.205C22.146 19.9391 21.7133 20.6042 21.154 21.154C20.604 21.714 19.939 22.146 19.206 22.422C18.506 22.694 17.706 22.88 16.536 22.934C15.362 22.988 14.988 23 12 23C9.012 23 8.638 22.987 7.465 22.934C6.295 22.881 5.495 22.694 4.795 22.422C4.06092 22.146 3.39582 21.7133 2.846 21.154C2.28638 20.6047 1.85331 19.9399 1.577 19.206C1.306 18.506 1.12 17.706 1.066 16.536C1.012 15.361 1 14.987 1 12C1 9.012 1.013 8.638 1.066 7.466C1.119 6.294 1.306 5.494 1.577 4.794C1.85372 4.06008 2.28712 3.39531 2.847 2.846C3.39604 2.2865 4.06047 1.85344 4.794 1.577C5.494 1.306 6.294 1.12 7.464 1.066H7.465ZM16.445 3.046C15.285 2.993 14.937 2.982 12 2.982C9.063 2.982 8.715 2.993 7.555 3.046C6.482 3.095 5.9 3.274 5.512 3.425C4.999 3.625 4.632 3.862 4.247 4.247C3.88205 4.60205 3.60118 5.03428 3.425 5.512C3.274 5.9 3.095 6.482 3.046 7.555C2.993 8.715 2.982 9.063 2.982 12C2.982 14.937 2.993 15.285 3.046 16.445C3.095 17.518 3.274 18.1 3.425 18.488C3.601 18.965 3.882 19.398 4.247 19.753C4.602 20.118 5.035 20.399 5.512 20.575C5.9 20.726 6.482 20.905 7.555 20.954C8.715 21.007 9.062 21.018 12 21.018C14.938 21.018 15.285 21.007 16.445 20.954C17.518 20.905 18.1 20.726 18.488 20.575C19.001 20.375 19.368 20.138 19.753 19.753C20.118 19.398 20.399 18.965 20.575 18.488C20.726 18.1 20.905 17.518 20.954 16.445C21.007 15.285 21.018 14.937 21.018 12C21.018 9.063 21.007 8.715 20.954 7.555C20.905 6.482 20.726 5.9 20.575 5.512C20.375 4.999 20.138 4.632 19.753 4.247C19.3979 3.88207 18.9657 3.60121 18.488 3.425C18.1 3.274 17.518 3.095 16.445 3.046ZM10.595 15.391C11.3797 15.7176 12.2534 15.7617 13.0669 15.5157C13.8805 15.2697 14.5834 14.7489 15.0556 14.0422C15.5278 13.3356 15.7401 12.4869 15.656 11.6411C15.572 10.7953 15.197 10.005 14.595 9.405C14.2112 9.02148 13.7472 8.72781 13.2363 8.54515C12.7255 8.36248 12.1804 8.29536 11.6405 8.34862C11.1006 8.40187 10.5792 8.57418 10.1138 8.85313C9.64845 9.13208 9.25074 9.51074 8.9493 9.96185C8.64786 10.413 8.45019 10.9253 8.37052 11.462C8.29084 11.9986 8.33115 12.5463 8.48854 13.0655C8.64593 13.5847 8.91648 14.0626 9.28072 14.4647C9.64496 14.8668 10.0938 15.1832 10.595 15.391ZM8.002 8.002C8.52702 7.47697 9.15032 7.0605 9.8363 6.77636C10.5223 6.49222 11.2575 6.34597 12 6.34597C12.7425 6.34597 13.4777 6.49222 14.1637 6.77636C14.8497 7.0605 15.473 7.47697 15.998 8.002C16.523 8.52702 16.9395 9.15032 17.2236 9.8363C17.5078 10.5223 17.654 11.2575 17.654 12C17.654 12.7425 17.5078 13.4777 17.2236 14.1637C16.9395 14.8497 16.523 15.473 15.998 15.998C14.9377 17.0583 13.4995 17.654 12 17.654C10.5005 17.654 9.06234 17.0583 8.002 15.998C6.94166 14.9377 6.34597 13.4995 6.34597 12C6.34597 10.5005 6.94166 9.06234 8.002 8.002ZM18.908 7.188C19.0381 7.06527 19.1423 6.91768 19.2143 6.75397C19.2863 6.59027 19.3248 6.41377 19.3274 6.23493C19.33 6.05609 19.2967 5.87855 19.2295 5.71281C19.1622 5.54707 19.0624 5.39651 18.936 5.27004C18.8095 5.14357 18.6589 5.04376 18.4932 4.97652C18.3275 4.90928 18.1499 4.87598 17.9711 4.87858C17.7922 4.88119 17.6157 4.91965 17.452 4.9917C17.2883 5.06374 17.1407 5.1679 17.018 5.298C16.7793 5.55103 16.6486 5.88712 16.6537 6.23493C16.6588 6.58274 16.7992 6.91488 17.0452 7.16084C17.2911 7.40681 17.6233 7.54723 17.9711 7.5523C18.3189 7.55737 18.655 7.42669 18.908 7.188Z"
                                              fill="#8041FF"/>
                                    </svg>
                                </a>
                                <a target="_blank" href="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_182_1860)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M23.45 5.948C23.616 5.402 23.45 5 22.655 5H20.03C19.362 5 19.054 5.347 18.887 5.73C18.887 5.73 17.552 8.926 15.661 11.002C15.049 11.604 14.771 11.795 14.437 11.795C14.27 11.795 14.019 11.604 14.019 11.057V5.948C14.019 5.292 13.835 5 13.279 5H9.151C8.734 5 8.483 5.304 8.483 5.593C8.483 6.214 9.429 6.358 9.526 8.106V11.904C9.526 12.737 9.373 12.888 9.039 12.888C8.149 12.888 5.984 9.677 4.699 6.003C4.45 5.288 4.198 5 3.527 5H0.9C0.15 5 0 5.347 0 5.73C0 6.412 0.89 9.8 4.145 14.281C6.315 17.341 9.37 19 12.153 19C13.822 19 14.028 18.632 14.028 17.997V15.684C14.028 14.947 14.186 14.8 14.715 14.8C15.105 14.8 15.772 14.992 17.33 16.467C19.11 18.216 19.403 19 20.405 19H23.03C23.78 19 24.156 18.632 23.94 17.904C23.702 17.18 22.852 16.129 21.725 14.882C21.113 14.172 20.195 13.407 19.916 13.024C19.527 12.533 19.638 12.314 19.916 11.877C19.916 11.877 23.116 7.451 23.449 5.948H23.45Z"
                                                  fill="#8041FF"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_182_1860">
                                                <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a target="_blank" href="">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M20.6651 3.717L2.93509 10.554C1.72509 11.04 1.73209 11.715 2.71309 12.016L7.26509 13.436L17.7971 6.791C18.2951 6.488 18.7501 6.651 18.3761 6.983L9.8431 14.684H9.84109L9.8431 14.685L9.5291 19.377C9.9891 19.377 10.1921 19.166 10.4501 18.917L12.6611 16.767L17.2601 20.164C18.1081 20.631 18.7171 20.391 18.9281 19.379L21.9471 5.151C22.2561 3.912 21.4741 3.351 20.6651 3.717Z"
                                            fill="#8041FF"/>
                                    </svg>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


@show
