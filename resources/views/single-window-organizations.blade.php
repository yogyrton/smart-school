@extends('layouts.app')

@section('content')
<section class="pb-120 pt-120 window-section" id="window-organizations">
        <div class="container">
            <h1 class="text-bold mb-32 d-lg-block d-none">Вышестоящие организации</h1>
            <div class="row">
                <div class="col-lg-8">
                    <div class="organization-box mb-32 d-flex flex-column">
                        <h6 class="mb-20">Министерство образования Республики Беларусь</h6>
                        <p class="text mb-20">ул. Советская, 9, г. Минск, 220010 </p>
                        <p class="text mb-20">+375 (17) 327-47-36 , Факс: +375-17-200-84-83</p>
                        <a href="https://edu.gov.by/" target="_blank">edu.gov.by</a>
                    </div>
                    <div class="organization-box mb-32 d-flex flex-column">
                        <h6 class="mb-20">Минский областной исполнительный комитет</h6>
                        <p class="text mb-20">220030, г. Минск, ул. Энгельса, 4</p>
                        <p class="text mb-20">8-017-500-42-07</p>
                        <a href="mailto:pisma@minsk-region.gov.by" class="text mb-20">pisma@minsk-region.gov.by</a>
                        <a href="https://www.minsk-region.gov.by/" target="_blank">minsk-region.gov.by</a>
                    </div>
                    <div class="organization-box mb-32 d-flex flex-column">
                        <h6 class="mb-20">Минский районный исполнительный комитет</h6>
                        <p class="mb-20">220073, г. Минск, ул. Ольшевского,8</p>
                        <p class="text mb-20">+375-17-204-40-24</p>
                        <p class="text mb-20">Факс: 8-017-204-40-19</p>
                        <p class="text mb-20">"Горячая линия": 8-017-204-70-35</p>
                        <a href="mailto:info@mrik.gov.by" class="text mb-20">info@mrik.gov.by (для деловой переписки)</a>
                        <a href="https://www.mrik.gov.by/" target="_blank">mrik.gov.by</a>
                    </div>
                    <div class="organization-box mb-32 d-flex flex-column">
                        <h6 class="mb-20">Главное управление по образованию Минского областного исполнительного комитета</h6>
                        <p class="text mb-20">220030 г. Минск , ул. Энгельса д. 4 </p>
                        <p class="text mb-20">+375-17-500-42-26</p>
                        <p class="text mb-20">Факс: (017) 517 34 82</p>
                        <a href="mailto:info@uomoik.gov.by" class="text mb-20">info@uomoik.gov.by</a>
                        <a href="https://uomoik.gov.by/" class="text mb-20" target="_blank">uomoik.gov.by</a>
                        <p class="text">Режим работы: 8.00 – 13.00 / 14.00 – 17.00</p>
                    </div>
                    <div class="organization-box mb-32 d-flex flex-column">
                        <h6 class="mb-20">Управление по образованию Минского районного исполнительного комитета</h6>
                        <p class="text mb-20">220073 г.Минск ул.Ольшевского 8, кб. 204</p>
                        <p class="text mb-20">+375-17-378-40-72</p>
                        <p class="text mb-20">Приёмные дни: понедельник 14:00-17:30,  четверг 8:00-13:00 </p>
                        <a href="mailto:roo@minsk-roo.gov.by" class="text mb-20">roo@minsk-roo.gov.by</a>
                        <a href="https://minsk-roo.gov.by/" target="_blank">minsk-roo.gov.by</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('partials.single-window-sidebar')
                </div>
            </div>
        </div>
</section>
    
@stop