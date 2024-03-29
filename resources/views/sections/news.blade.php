@if(!empty($news)  && count($news) > 0)
    <section id="news" class=" news scrollreveal">
        <div class="container">
            <h2 class="accentColor mb-40">Новости</h2>
            <div class="wrapper">
                <div class="d-flex align-items-center justify-content-between position-relative">
                    <div class="slider-button-prev">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.003 11.9901C9.00261 11.7902 9.07233 11.5964 9.20004 11.4425L13.4835 6.30862C13.629 6.13388 13.8379 6.02399 14.0645 6.00313C14.291 5.98227 14.5165 6.05215 14.6915 6.19738C14.8664 6.34262 14.9765 6.55132 14.9974 6.77757C15.0182 7.00383 14.9483 7.2291 14.8029 7.40384L10.9648 11.9901L14.6658 16.5764C14.737 16.6639 14.7901 16.7646 14.8222 16.8727C14.8542 16.9808 14.8646 17.0942 14.8527 17.2063C14.8407 17.3184 14.8067 17.427 14.7526 17.526C14.6985 17.6249 14.6253 17.7122 14.5373 17.7828C14.4492 17.8612 14.3459 17.9205 14.2337 17.9571C14.1216 17.9938 14.0031 18.0069 13.8857 17.9956C13.7683 17.9844 13.6545 17.949 13.5514 17.8918C13.4482 17.8346 13.3581 17.7567 13.2865 17.663L9.14864 12.5292C9.04111 12.3708 8.98983 12.181 9.003 11.9901V11.9901Z"
                                fill="#8041FF"/>
                        </svg>
                    </div>
                    <div class="swiper" id="swiper">
                        <div class="swiper-wrapper">
                            @foreach($news as $new)
                                <div class="swiper-slide">
                                    <div class="news-box d-flex flex-column">
                                        <div class="news__image-ibg mb-20">
                                            <img src="{{ '/storage/' . $new->thumbnail }}" alt="news-1">
                                        </div>
                                        <div class="news-description">
                                            <span
                                                class="news-date grey mb-12">{{ $new->updated_at->format('d.m.Y') }}</span>
                                            <h5 class="accentColor news-title text-bold mb-12">{{ $new->title }}</h5>
                                            <div class="news-text text mb-12">{!! $new->text !!}</div>

                                            <div class="full-text">{!! $new->text !!}</div>
                                            <div class="news-btn text-bold">Подробнее</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-pagination text news-pagination"></div>
                    <div class="slider-button-next">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.998 12.0094C14.9984 12.2093 14.9287 12.4031 14.8009 12.557L10.5174 17.6909C10.372 17.8656 10.1631 17.9755 9.93652 17.9964C9.70999 18.0172 9.48444 17.9474 9.30948 17.8021C9.13453 17.6569 9.02451 17.4482 9.00363 17.2219C8.98274 16.9957 9.0527 16.7704 9.19811 16.5957L13.0361 12.0094L9.33519 7.42315C9.26402 7.33563 9.21088 7.23492 9.17881 7.12682C9.14674 7.01872 9.13638 6.90536 9.14833 6.79324C9.16027 6.68113 9.19428 6.57248 9.2484 6.47353C9.30252 6.37459 9.37568 6.2873 9.46369 6.21669C9.55178 6.13833 9.65512 6.07899 9.76724 6.04237C9.87936 6.00576 9.99784 5.99266 10.1153 6.00391C10.2327 6.01515 10.3465 6.0505 10.4496 6.10772C10.5527 6.16495 10.6429 6.24283 10.7145 6.33648L14.8523 11.4704C14.9599 11.6287 15.0111 11.8185 14.998 12.0094Z"
                                fill="#8041FF"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="full_news_modal" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal--image"></div>
                <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><img
                        src="/svg/close.svg" alt="close-img"></button>
                <div class="info-content">
                    <div class="h6 mb-20 text-bold modal--title"></div>
                    <div class="modal--description"></div>
                </div>
            </div>
        </div>
    </div>
@endif
