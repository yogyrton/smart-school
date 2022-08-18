@if(!empty($mainNews)  && count($mainNews) > 0)
    <div class="position-relative swiper-box head-swiper">
        <div class="position-relative container-slider-pagination">
            <div class="swiper" >
                <div class="swiper-wrapper">
                    @foreach($mainNews as $mainNew)
                        <div class="swiper-slide">
                            <div class="advt-box w-100">
                                <h5 class="accentColor">{{ $mainNew->title }}</h5>
                                <p class="head-text text">{!! $mainNew->text !!}</p>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
@endif
