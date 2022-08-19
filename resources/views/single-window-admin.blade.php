@extends('layouts.app')

@section('content')
<section class="pb-120 pt-120 window-section">
        <div class="container">
            <h1 class="text-bold mb-32">Административные <br> процедуры</h1>
            <div class="row">
                <div class="col-lg-8">
                    <h6 class="mb-24">Административные процедуры по заявлениям граждан на основе заявительного принципа «одно окно».</h6>
                    <div class="align-content-center mb-24">
                        <img src="/svg/doc.svg" alt="doc-img">
                        <a class="window-doc-link text" href="/docs/administrativnie_proceduri.docx">Перечень административных процедур ЧУО “Средняя школа “Смарт Скул”</a>
                    </div>
                    <p class="text mb-40">Ответственный за обращения граждан на основе заявительного принципа «одно окно» – секретарь школы Антошина Инесса Викторовна.</p>
                    <p class="text-bold mb-24">Нормативные правовые акты:</p>
                    <div class="align-content-center mb-24">
                        <img src="/svg/doc.svg" alt="doc-img">
                        <a class="window-doc-link text" href="https://pravo.by/document/?guid=3871&p0=h10800433" target="_blank">Закон Республики Беларусь от 28 октября 2008 г. № 433-З «Об основах административных процедур»</a>
                    </div>
                    <div class="align-content-center mb-24">
                        <img src="/svg/doc.svg" alt="doc-img">
                        <a class="window-doc-link text" href="https://pravo.by/document/?guid=3871&p0=p31000200" target="_blank">Указ Президента Республики Беларусь от 26 апреля 2010 г. № 200 «Об административных процедурах, осуществляемых государственными органами и иными организациями по заявлению граждан»</a>
                    </div>
                    <p class="text-bold mb-24">Прием граждан с заявлениями, по которым требуется осуществление административных процедур, осуществляется:</p>
                    <div class="contacts d-flex flex-column mb-40">
                        <div>
                            <a class="contacts-tel mb-12 d-inline-block tel-number" href="tel:375255126009">+375 (25) 512-60-09</a>
                        </div>
                        <div>
                            <a class="contacts-tel mb-12 d-inline-block tel-number" href="tel:375255156009">+375 (25) 515-60-09</a>
                        </div>
                        <p class="contacts-timetable">Пн.-пт. 09:00-13:00, 14.00 - 18.00</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('partials.single-window-sidebar')
                </div>
            </div>
        </div>
</section>
    
@stop