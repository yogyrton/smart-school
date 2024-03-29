@if(!empty($photos)  && count($photos) > 0)
<section id="album" class="scrollreveal">
   <div class="container">
       <h2 class="accentColor mb-40">Фотогалерея</h2>
       <div class="swiper-box mb-40">
           <div class="slider-button-prev">
               <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path
                       d="M21.0023 24.9992C21.0015 24.7993 21.0708 24.6054 21.1982 24.4511L25.4705 19.308C25.6156 19.1329 25.8243 19.0226 26.0508 19.0013C26.2773 18.9799 26.503 19.0493 26.6782 19.1941C26.8535 19.339 26.964 19.5475 26.9854 19.7737C27.0067 19.9999 26.9373 20.2253 26.7922 20.4004L22.9642 24.9949L26.675 29.5732C26.7464 29.6605 26.7998 29.7611 26.8321 29.8691C26.8644 29.9772 26.875 30.0905 26.8633 30.2027C26.8516 30.3148 26.8178 30.4235 26.7639 30.5226C26.71 30.6216 26.637 30.7091 26.5491 30.7799C26.4612 30.8584 26.358 30.918 26.246 30.9549C26.1339 30.9917 26.0155 31.0051 25.898 30.9941C25.7806 30.9831 25.6667 30.948 25.5635 30.891C25.4602 30.834 25.3699 30.7563 25.2981 30.6628L21.1491 25.5379C21.0413 25.3798 20.9896 25.1901 21.0023 24.9992V24.9992Z"
                       fill="#8041FF"/>
                   <rect x="48.5517" y="48.449" width="47" height="47" rx="23.5"
                         transform="rotate(179.876 48.5517 48.449)" stroke="#8041FF"/>
               </svg>
           </div>
           <div class="swiper">
               <div class="swiper-wrapper popup-gallery">
                   @foreach($photos as $image)
                       <a href="/storage/{{$image->thumbnail}}" class="swiper-slide">
                           <div class="image-container">
                               <img src="/storage/{{$image->thumbnail}}" width="75" height="75">
                           </div>
                       </a>
{{--                    <div class="swiper-slide">--}}
{{--                        <div class="image-container">--}}
{{--                            <img src="/storage/{{$image->thumbnail}}" alt="gallery-img">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                   @endforeach
               </div>
           </div>
           <div class="swiper-pagination"></div>
           <div class="slider-button-next">
               <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path
                       d="M27.998 24.0094C27.9984 24.2093 27.9287 24.4031 27.8009 24.557L23.5174 29.6909C23.372 29.8656 23.1631 29.9755 22.9365 29.9964C22.71 30.0172 22.4844 29.9474 22.3095 29.8021C22.1345 29.6569 22.0245 29.4482 22.0036 29.2219C21.9827 28.9957 22.0527 28.7704 22.1981 28.5957L26.0361 24.0094L22.3352 19.4232C22.264 19.3356 22.2109 19.2349 22.1788 19.1268C22.1467 19.0187 22.1364 18.9054 22.1483 18.7932C22.1603 18.6811 22.1943 18.5725 22.2484 18.4735C22.3025 18.3746 22.3757 18.2873 22.4637 18.2167C22.5518 18.1383 22.6551 18.079 22.7672 18.0424C22.8794 18.0058 22.9978 17.9927 23.1153 18.0039C23.2327 18.0152 23.3465 18.0505 23.4496 18.1077C23.5527 18.165 23.6429 18.2428 23.7145 18.3365L27.8523 23.4704C27.9599 23.6287 28.0111 23.8185 27.998 24.0094Z"
                       fill="#8041FF"/>
                   <rect x="0.5" y="0.5" width="47" height="47" rx="23.5" stroke="#8041FF"/>
               </svg>
           </div>
       </div>
       @if($links)
           <div class="d-flex justify-content-center">
               <a class="button_1 btn-pink text-bold" href="{{ $links->links }}" target="_blank">Смотреть все</a>
           </div>
       @endif
   </div>
</section>
@endif
