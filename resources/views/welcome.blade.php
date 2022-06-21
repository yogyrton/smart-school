@extends('layouts.app')

@section('content')


<section id="head" class="head mb-160 position-relative">
        <div class="container">
                <div class="row align-items-center">
                        <div class="col-6 imgHead-box">
                                <img src="/img/main/imgHead.png" alt="">
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
                                                                        <div class="head-advt">
                                                                                <svg  width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M24.9941 8.81249C24.9941 5.48905 27.6988 2.78436 31.0223 2.78436C34.3457 2.78436 37.0504 5.48905 37.0504 8.81249C37.0504 12.1359 34.3457 14.8406 31.0223 14.8406C27.6988 14.8406 24.9941 12.1406 24.9941 8.81249ZM28.5004 8.81249C28.5004 10.2047 29.6301 11.3344 31.0223 11.3344C32.4145 11.3344 33.5441 10.2047 33.5441 8.81249C33.5441 7.4203 32.4145 6.29061 31.0223 6.29061C29.6301 6.29061 28.5004 7.42499 28.5004 8.81249Z" fill="#E2A610"/>
                                                                                <path d="M36.2066 5.75626C36.2066 5.75626 36.4738 6.82032 35.241 7.40157C34.0082 7.97813 33.1926 7.55157 33.1926 7.55157C33.4129 7.92657 33.5441 8.35313 33.5441 8.81719C33.5441 10.2094 32.4145 11.3391 31.0223 11.3391C29.6301 11.3391 28.5004 10.2094 28.5004 8.81719C28.5004 8.67657 28.5332 8.14688 28.7582 7.70626C26.6676 8.70001 25.0785 7.85157 25.0785 7.85157C25.027 8.16563 24.9941 8.48907 24.9941 8.81719C24.9941 12.1406 27.6988 14.8453 31.0223 14.8453C34.3457 14.8453 37.0504 12.1406 37.0504 8.81251C37.0504 7.69688 36.741 6.65157 36.2066 5.75626Z" fill="#9E740B"/>
                                                                                <path d="M4.90315 45.8438C8.07659 42.7266 10.0547 41.6766 10.861 37.1578C11.6672 32.6391 11.0203 23.1188 14.5735 16.8844C17.8172 11.175 23.7703 8.8125 29.5781 8.8125C29.7188 8.8125 29.8594 8.82188 30 8.82188C30.1406 8.81719 30.2813 8.8125 30.4219 8.8125C36.2297 8.8125 42.1828 11.175 45.4266 16.8797C48.975 23.1187 48.3328 32.6391 49.1391 37.1531C49.9453 41.6719 51.9235 42.7219 55.0969 45.8391C56.4656 47.1844 58.1203 49.3266 58.125 50.7047C58.1297 52.0828 57.4266 52.5844 55.7532 53.2875C51.0188 55.2797 44.6906 57.2109 30 57.2109C15.3094 57.2109 8.98127 55.2797 4.2469 53.2875C2.57346 52.5844 1.87034 52.0875 1.87502 50.7047C1.87971 49.3312 3.5344 47.1891 4.90315 45.8438Z" fill="#FFCA28"/>
                                                                                <path d="M53.2969 50.8031C53.2969 48.7266 42.8672 47.0438 30 47.0438C17.1328 47.0438 6.70312 48.7266 6.70312 50.8031C6.70312 52.8797 17.1328 55.3594 30 55.3594C42.8672 55.3594 53.2969 52.8797 53.2969 50.8031Z" fill="#4E342E"/>
                                                                                <path d="M43.9875 20.9953C44.1609 21.6563 44.3062 22.3172 44.4234 22.9641C45.0187 26.2734 44.9109 29.6672 45.1781 33.0188C45.539 37.5047 46.3359 39.8672 48.15 41.9766C48.389 42.2531 48.1453 42.6797 47.7843 42.6234C45.3609 42.2531 43.4156 41.8828 41.1984 40.4203C37.889 38.2406 37.0734 34.1391 37.05 30.4547C37.0125 24.9703 37.1156 19.6594 36.6797 17.6438C36.075 14.8359 35.5125 13.3406 34.5937 11.9766C33.1922 9.89532 38.6343 12.7828 39.4875 13.425C41.864 15.2203 43.2281 18.1078 43.9875 20.9953Z" fill="#E2A610"/>
                                                                                <path d="M14.4794 28.275C14.4231 24.7219 14.4513 21.0469 15.8669 17.7844C16.7153 15.8344 18.1544 14.0766 19.9919 12.9844C21.4356 12.1266 24.37 11.1797 25.4247 13.125C25.6356 13.5141 25.72 13.9688 25.7341 14.4141C25.7716 15.9656 24.9653 17.4 24.1825 18.7406C21.8669 22.7156 20.9434 27.061 19.72 31.4672C19.2184 33.286 18.5809 35.1 17.4888 36.6375C16.7388 37.6922 12.5622 41.4422 13.5184 38.0531C14.4372 34.7766 14.5309 31.6875 14.4794 28.275Z" fill="#FFF59D"/>
                                                                                <path d="M34.261 50.0719C34.2563 49.2656 33.8204 48.8016 32.8172 48.4547C30.736 47.7375 28.1297 47.8688 26.611 48.6844C25.0172 49.5375 26.1235 54.2672 30.0001 54.2672C33.8766 54.2672 34.2657 50.686 34.261 50.0719Z" fill="#E2A610"/>
                                                                                <path d="M15.5862 43.0266C11.4706 43.7484 8.48932 45.3094 7.20026 46.575C6.17839 47.5734 6.17839 48.3609 7.97839 47.5406C9.33307 46.9219 13.6737 45.6656 17.4753 45.2859C24.0049 44.6297 28.0362 44.6156 28.7065 44.6297C30.2768 44.6625 30.4081 43.4531 27.2346 43.0266C24.0612 42.6047 19.7018 42.3094 15.5862 43.0266ZM28.3409 53.3531C28.8846 53.7281 29.6065 53.9109 30.2159 53.6578C30.8253 53.4047 31.219 52.6313 30.919 52.0453C30.8018 51.8156 30.6003 51.6422 30.3987 51.4828C29.8409 51.0469 29.2221 50.6906 28.5659 50.4281C28.3081 50.325 28.0362 50.2313 27.7549 50.25C27.4784 50.2641 27.1878 50.4094 27.0799 50.6672C26.6159 51.7219 27.544 52.8094 28.3409 53.3531Z" fill="#FFF59D"/>
                                                                        </svg>

                                                                                <div class="advt-box">
                                                                                        <h5 class="accentColor">Внимание!</h5>
                                                                                        <p class="head-text text">Приглашаем учеников <span class="text-bold">1-11 классов</span> в наш <span class="text-bold">НОВЫЙ ФИЛИАЛ</span> по адресу: Минск, ул. Орловская, 80 (Dreamland)</p>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                        <div class="head-advt">
                                                                                <svg  width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M24.9941 8.81249C24.9941 5.48905 27.6988 2.78436 31.0223 2.78436C34.3457 2.78436 37.0504 5.48905 37.0504 8.81249C37.0504 12.1359 34.3457 14.8406 31.0223 14.8406C27.6988 14.8406 24.9941 12.1406 24.9941 8.81249ZM28.5004 8.81249C28.5004 10.2047 29.6301 11.3344 31.0223 11.3344C32.4145 11.3344 33.5441 10.2047 33.5441 8.81249C33.5441 7.4203 32.4145 6.29061 31.0223 6.29061C29.6301 6.29061 28.5004 7.42499 28.5004 8.81249Z" fill="#E2A610"/>
                                                                                <path d="M36.2066 5.75626C36.2066 5.75626 36.4738 6.82032 35.241 7.40157C34.0082 7.97813 33.1926 7.55157 33.1926 7.55157C33.4129 7.92657 33.5441 8.35313 33.5441 8.81719C33.5441 10.2094 32.4145 11.3391 31.0223 11.3391C29.6301 11.3391 28.5004 10.2094 28.5004 8.81719C28.5004 8.67657 28.5332 8.14688 28.7582 7.70626C26.6676 8.70001 25.0785 7.85157 25.0785 7.85157C25.027 8.16563 24.9941 8.48907 24.9941 8.81719C24.9941 12.1406 27.6988 14.8453 31.0223 14.8453C34.3457 14.8453 37.0504 12.1406 37.0504 8.81251C37.0504 7.69688 36.741 6.65157 36.2066 5.75626Z" fill="#9E740B"/>
                                                                                <path d="M4.90315 45.8438C8.07659 42.7266 10.0547 41.6766 10.861 37.1578C11.6672 32.6391 11.0203 23.1188 14.5735 16.8844C17.8172 11.175 23.7703 8.8125 29.5781 8.8125C29.7188 8.8125 29.8594 8.82188 30 8.82188C30.1406 8.81719 30.2813 8.8125 30.4219 8.8125C36.2297 8.8125 42.1828 11.175 45.4266 16.8797C48.975 23.1187 48.3328 32.6391 49.1391 37.1531C49.9453 41.6719 51.9235 42.7219 55.0969 45.8391C56.4656 47.1844 58.1203 49.3266 58.125 50.7047C58.1297 52.0828 57.4266 52.5844 55.7532 53.2875C51.0188 55.2797 44.6906 57.2109 30 57.2109C15.3094 57.2109 8.98127 55.2797 4.2469 53.2875C2.57346 52.5844 1.87034 52.0875 1.87502 50.7047C1.87971 49.3312 3.5344 47.1891 4.90315 45.8438Z" fill="#FFCA28"/>
                                                                                <path d="M53.2969 50.8031C53.2969 48.7266 42.8672 47.0438 30 47.0438C17.1328 47.0438 6.70312 48.7266 6.70312 50.8031C6.70312 52.8797 17.1328 55.3594 30 55.3594C42.8672 55.3594 53.2969 52.8797 53.2969 50.8031Z" fill="#4E342E"/>
                                                                                <path d="M43.9875 20.9953C44.1609 21.6563 44.3062 22.3172 44.4234 22.9641C45.0187 26.2734 44.9109 29.6672 45.1781 33.0188C45.539 37.5047 46.3359 39.8672 48.15 41.9766C48.389 42.2531 48.1453 42.6797 47.7843 42.6234C45.3609 42.2531 43.4156 41.8828 41.1984 40.4203C37.889 38.2406 37.0734 34.1391 37.05 30.4547C37.0125 24.9703 37.1156 19.6594 36.6797 17.6438C36.075 14.8359 35.5125 13.3406 34.5937 11.9766C33.1922 9.89532 38.6343 12.7828 39.4875 13.425C41.864 15.2203 43.2281 18.1078 43.9875 20.9953Z" fill="#E2A610"/>
                                                                                <path d="M14.4794 28.275C14.4231 24.7219 14.4513 21.0469 15.8669 17.7844C16.7153 15.8344 18.1544 14.0766 19.9919 12.9844C21.4356 12.1266 24.37 11.1797 25.4247 13.125C25.6356 13.5141 25.72 13.9688 25.7341 14.4141C25.7716 15.9656 24.9653 17.4 24.1825 18.7406C21.8669 22.7156 20.9434 27.061 19.72 31.4672C19.2184 33.286 18.5809 35.1 17.4888 36.6375C16.7388 37.6922 12.5622 41.4422 13.5184 38.0531C14.4372 34.7766 14.5309 31.6875 14.4794 28.275Z" fill="#FFF59D"/>
                                                                                <path d="M34.261 50.0719C34.2563 49.2656 33.8204 48.8016 32.8172 48.4547C30.736 47.7375 28.1297 47.8688 26.611 48.6844C25.0172 49.5375 26.1235 54.2672 30.0001 54.2672C33.8766 54.2672 34.2657 50.686 34.261 50.0719Z" fill="#E2A610"/>
                                                                                <path d="M15.5862 43.0266C11.4706 43.7484 8.48932 45.3094 7.20026 46.575C6.17839 47.5734 6.17839 48.3609 7.97839 47.5406C9.33307 46.9219 13.6737 45.6656 17.4753 45.2859C24.0049 44.6297 28.0362 44.6156 28.7065 44.6297C30.2768 44.6625 30.4081 43.4531 27.2346 43.0266C24.0612 42.6047 19.7018 42.3094 15.5862 43.0266ZM28.3409 53.3531C28.8846 53.7281 29.6065 53.9109 30.2159 53.6578C30.8253 53.4047 31.219 52.6313 30.919 52.0453C30.8018 51.8156 30.6003 51.6422 30.3987 51.4828C29.8409 51.0469 29.2221 50.6906 28.5659 50.4281C28.3081 50.325 28.0362 50.2313 27.7549 50.25C27.4784 50.2641 27.1878 50.4094 27.0799 50.6672C26.6159 51.7219 27.544 52.8094 28.3409 53.3531Z" fill="#FFF59D"/>
                                                                        </svg>

                                                                                <div class="advt-box">
                                                                                        <h5 class="accentColor">Внимание!</h5>
                                                                                        <p class="head-text text">Приглашаем учеников <span class="text-bold">1-11 классов</span> в наш <span class="text-bold">НОВЫЙ ФИЛИАЛ</span> по адресу: Минск, ул. Орловская, 80 (Dreamland)</p>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                        <div class="head-advt">
                                                                                <svg  width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M24.9941 8.81249C24.9941 5.48905 27.6988 2.78436 31.0223 2.78436C34.3457 2.78436 37.0504 5.48905 37.0504 8.81249C37.0504 12.1359 34.3457 14.8406 31.0223 14.8406C27.6988 14.8406 24.9941 12.1406 24.9941 8.81249ZM28.5004 8.81249C28.5004 10.2047 29.6301 11.3344 31.0223 11.3344C32.4145 11.3344 33.5441 10.2047 33.5441 8.81249C33.5441 7.4203 32.4145 6.29061 31.0223 6.29061C29.6301 6.29061 28.5004 7.42499 28.5004 8.81249Z" fill="#E2A610"/>
                                                                                <path d="M36.2066 5.75626C36.2066 5.75626 36.4738 6.82032 35.241 7.40157C34.0082 7.97813 33.1926 7.55157 33.1926 7.55157C33.4129 7.92657 33.5441 8.35313 33.5441 8.81719C33.5441 10.2094 32.4145 11.3391 31.0223 11.3391C29.6301 11.3391 28.5004 10.2094 28.5004 8.81719C28.5004 8.67657 28.5332 8.14688 28.7582 7.70626C26.6676 8.70001 25.0785 7.85157 25.0785 7.85157C25.027 8.16563 24.9941 8.48907 24.9941 8.81719C24.9941 12.1406 27.6988 14.8453 31.0223 14.8453C34.3457 14.8453 37.0504 12.1406 37.0504 8.81251C37.0504 7.69688 36.741 6.65157 36.2066 5.75626Z" fill="#9E740B"/>
                                                                                <path d="M4.90315 45.8438C8.07659 42.7266 10.0547 41.6766 10.861 37.1578C11.6672 32.6391 11.0203 23.1188 14.5735 16.8844C17.8172 11.175 23.7703 8.8125 29.5781 8.8125C29.7188 8.8125 29.8594 8.82188 30 8.82188C30.1406 8.81719 30.2813 8.8125 30.4219 8.8125C36.2297 8.8125 42.1828 11.175 45.4266 16.8797C48.975 23.1187 48.3328 32.6391 49.1391 37.1531C49.9453 41.6719 51.9235 42.7219 55.0969 45.8391C56.4656 47.1844 58.1203 49.3266 58.125 50.7047C58.1297 52.0828 57.4266 52.5844 55.7532 53.2875C51.0188 55.2797 44.6906 57.2109 30 57.2109C15.3094 57.2109 8.98127 55.2797 4.2469 53.2875C2.57346 52.5844 1.87034 52.0875 1.87502 50.7047C1.87971 49.3312 3.5344 47.1891 4.90315 45.8438Z" fill="#FFCA28"/>
                                                                                <path d="M53.2969 50.8031C53.2969 48.7266 42.8672 47.0438 30 47.0438C17.1328 47.0438 6.70312 48.7266 6.70312 50.8031C6.70312 52.8797 17.1328 55.3594 30 55.3594C42.8672 55.3594 53.2969 52.8797 53.2969 50.8031Z" fill="#4E342E"/>
                                                                                <path d="M43.9875 20.9953C44.1609 21.6563 44.3062 22.3172 44.4234 22.9641C45.0187 26.2734 44.9109 29.6672 45.1781 33.0188C45.539 37.5047 46.3359 39.8672 48.15 41.9766C48.389 42.2531 48.1453 42.6797 47.7843 42.6234C45.3609 42.2531 43.4156 41.8828 41.1984 40.4203C37.889 38.2406 37.0734 34.1391 37.05 30.4547C37.0125 24.9703 37.1156 19.6594 36.6797 17.6438C36.075 14.8359 35.5125 13.3406 34.5937 11.9766C33.1922 9.89532 38.6343 12.7828 39.4875 13.425C41.864 15.2203 43.2281 18.1078 43.9875 20.9953Z" fill="#E2A610"/>
                                                                                <path d="M14.4794 28.275C14.4231 24.7219 14.4513 21.0469 15.8669 17.7844C16.7153 15.8344 18.1544 14.0766 19.9919 12.9844C21.4356 12.1266 24.37 11.1797 25.4247 13.125C25.6356 13.5141 25.72 13.9688 25.7341 14.4141C25.7716 15.9656 24.9653 17.4 24.1825 18.7406C21.8669 22.7156 20.9434 27.061 19.72 31.4672C19.2184 33.286 18.5809 35.1 17.4888 36.6375C16.7388 37.6922 12.5622 41.4422 13.5184 38.0531C14.4372 34.7766 14.5309 31.6875 14.4794 28.275Z" fill="#FFF59D"/>
                                                                                <path d="M34.261 50.0719C34.2563 49.2656 33.8204 48.8016 32.8172 48.4547C30.736 47.7375 28.1297 47.8688 26.611 48.6844C25.0172 49.5375 26.1235 54.2672 30.0001 54.2672C33.8766 54.2672 34.2657 50.686 34.261 50.0719Z" fill="#E2A610"/>
                                                                                <path d="M15.5862 43.0266C11.4706 43.7484 8.48932 45.3094 7.20026 46.575C6.17839 47.5734 6.17839 48.3609 7.97839 47.5406C9.33307 46.9219 13.6737 45.6656 17.4753 45.2859C24.0049 44.6297 28.0362 44.6156 28.7065 44.6297C30.2768 44.6625 30.4081 43.4531 27.2346 43.0266C24.0612 42.6047 19.7018 42.3094 15.5862 43.0266ZM28.3409 53.3531C28.8846 53.7281 29.6065 53.9109 30.2159 53.6578C30.8253 53.4047 31.219 52.6313 30.919 52.0453C30.8018 51.8156 30.6003 51.6422 30.3987 51.4828C29.8409 51.0469 29.2221 50.6906 28.5659 50.4281C28.3081 50.325 28.0362 50.2313 27.7549 50.25C27.4784 50.2641 27.1878 50.4094 27.0799 50.6672C26.6159 51.7219 27.544 52.8094 28.3409 53.3531Z" fill="#FFF59D"/>
                                                                        </svg>

                                                                                <div class="advt-box">
                                                                                        <h5 class="accentColor">Внимание!</h5>
                                                                                        <p class="head-text text">Приглашаем учеников <span class="text-bold">1-11 классов</span> в наш <span class="text-bold">НОВЫЙ ФИЛИАЛ</span> по адресу: Минск, ул. Орловская, 80 (Dreamland)</p>
                                                                                </div>
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
        <div class="pseudo"></div>
        <!-- <div class="pseudo2"></div> -->
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
                <div class="row justify-content-between">
                        <div class="col-6 school-box-wrapper">
                                <div class="school-box-inner">
                                        <div class="school-box">Беларусь</div>
                                        <div class="school-box">Онлайн</div>
                                        <div class="school-box d-flex flex-column text-left">
                                                        <h3 class="accentColor mb-24">Онлайн</h3>
                                                        <p class="text">обучение на платформе Zoom</p>
                                                        <a href="" class="button_2 text">Подробнее</a>
                                        </div>
                                        <div class="school-box d-flex flex-column text-left">
                                                        <h3 class="accentColor mb-24">Россия</h3>
                                                        <p class="text">обучение дистанционно на платформе Zoom</p>
                                                        <a href="" class="button_2 text">Подробнее</a>
                                        </div>
                                </div>
                        </div>

                        <div class="col-6 school-box-wrapper">
                                <div class="school-box-inner">
                                        <div class="school-box d-flex flex-column text-left">
                                                        <h3 class="accentColor mb-24">Грузия</h3>
                                                        <p class="text">обучение в Батуми</p>
                                                        <a href="" class="button_2 text">Подробнее</a>
                                        </div>
                                        <div class="school-box">Онлайн</div>
                                        <div class="school-box">Школа</div>
                                        <div class="school-box">Привет</div>
                                </div>
                        </div>
                </div>
        </div>
</section>


<section class="advantages mb-160">
        <div class="container">
                <h2 class="accentColor mb-40">Почему мы?</h2>
                <div class="advantages row justify-content-between">
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
                                <div class="grid-box">
                                        <div><img src="/img/main/advantages/img1.png" alt="image-1"></div>
                                        <div><img src="/img/main/advantages/img2.png" alt="image-2"></div>
                                        <div><img src="/img/main/advantages/img3.png" alt="image-3"></div>
                                        <div><img src="/img/main/advantages/img4.png" alt="image-4"></div>
                                </div>
                        </div>
                </div>
        </div>
</section>

@stop

