@extends('layouts.app')

@section('content')
<section class="pb-120 pt-120 window-section">
        <div class="container">
            <h1 class="text-bold mb-32 d-lg-block d-none">Нормативные документы</h1>
            <div class="row">
                <div class="col-lg-8">
                    <div class="d-flex gap-12 mb-24">
                        <div>
                            <img src="/svg/doc.svg" alt="doc-img">
                        </div>
                        <div>
                            <a class="window-doc-link text" href="http://www.pravo.by/pdf/2011-83/2011-83(016-045).pdf" target="_blank">ЗАКОН РЕСПУБЛИКИ БЕЛАРУСЬ 18 июля 2011 г. № 300-З "Об обращениях граждан и юридических лиц"</a>
                        </div>
                    </div>
                    <div class="d-flex gap-12 mb-24">
                        <div>
                            <img src="/svg/doc.svg" alt="doc-img">
                        </div>
                        
                        <a class="window-doc-link text" href="http://www.pravo.by/main.aspx?guid=3871&p0=U010e0008" target="_blank">Рекомендации по размещению в государственных органах и иных организациях информации для граждан о работе на основе заявительного принципа «одно окно» (РЕКОМЕНДАЦИИ МИНИСТЕРСТВА ЮСТИЦИИ РЕСПУБЛИКИ БЕЛАРУСЬ 19 июля 2010 г.)</a>
                    </div>

                    <div class="d-flex gap-12 mb-24">
                        <div>
                            <img src="/svg/doc.svg" alt="doc-img">
                        </div>
                        <a class="window-doc-link text" href="http://base.spinform.ru/show_doc.fwx?rgn=25017" target="_blank">ЗАКОН РЕСПУБЛИКИ БЕЛАРУСЬ от 28 октября 2008 г. №433-З "Об основах административных процедур"</a>
                    </div>
                    <div class="d-flex gap-12 mb-24">
                        <div>
                            <img src="/svg/doc.svg" alt="doc-img">
                        </div>
                        <a class="window-doc-link text" href="http://www.pravo.by/main.aspx?guid=3871&p0=P31000200&p2={NRPA}" target="_blank">Указ Президента Республики Беларусь от 26 апреля 2010 г. №200 "Об административных процедурах, осуществляемых государственными органами и иными организациями по заявлениям граждан". С изменениями и дополнениями</a>
                    </div>
                    <div class="d-flex gap-12 mb-24">
                        <div>
                            <img src="/svg/doc.svg" alt="doc-img">
                        </div>
                        <a class="window-doc-link text" href="http://www.government.by/upload/docs/u498_20071015.pdf" target="_blank">УКАЗ ПРЕЗИДЕНТА РЕСПУБЛИКИ БЕЛАРУСЬ от 15 октября 2007 г. № 498 «О дополнительных мерах по работе с обращениями граждан и юридических лиц». С изменениями и дополнениями</a>
                    </div>
                    <div class="d-flex gap-12 mb-24">
                        <div>
                            <img src="/svg/doc.svg" alt="doc-img">
                        </div>
                        <a class="window-doc-link text" href="http://president.gov.by/ru/official_documents_ru/view/direktiva-1-ot-11-marta-2004-g-1397/" target="_blank">ДИРЕКТИВА ПРЕЗИДЕНТА РЕСПУБЛИКИ БЕЛАРУСЬ 11 марта 2004г. № 1</a>
                    </div>
                    <div class="d-flex gap-12 mb-24">
                        <div>
                            <img src="/svg/doc.svg" alt="doc-img">
                        </div>
                        <a class="window-doc-link text" href="http://president.gov.by/ru/official_documents_ru/view/direktiva-2-ot-27-dekabrja-2006-g-1398/" target="_blank">ДИРЕКТИВА ПРЕЗИДЕНТА РЕСПУБЛИКИ БЕЛАРУСЬ 27 декабря 2006г. № 2</a>
                    </div>
                    <div class="d-flex gap-12 mb-24">
                        <div>
                            <img src="/svg/doc.svg" alt="doc-img">
                        </div>
                        <a class="window-doc-link text" href="http://president.gov.by/ru/official_documents_ru/view/direktiva-3-ot-14-ijunja-2007-g-1399" target="_blank">ДИРЕКТИВА ПРЕЗИДЕНТА РЕСПУБЛИКИ БЕЛАРУСЬ 14 июня 2007г. № 3</a>
                    </div>
                    <div class="d-flex gap-12 mb-24">
                        <div>
                            <img src="/svg/doc.svg" alt="doc-img">
                        </div>
                        
                        <a class="window-doc-link text" href="http://www.pravo.by/main.aspx?guid=12551&p0=D916n0078545&p1=1&p5=0" target="_blank">РЕШЕНИЕ МИНСКОГО ОБЛАСТНОГО СОВЕТА ДЕПУТАТОВ 15 сентября 2016 г. № 152</a>
                    </div>
                    <div class="d-flex gap-12 mb-24">
                        <div>
                            <img src="/svg/doc.svg" alt="doc-img">
                        </div>
                        <a class="window-doc-link text" href="http://www.pravo.by/main.aspx?guid=12551&p0=D916n0078545&p1=1&p5=0" target="_blank">(О внесении изменений в решение Минского областного Совета депутатов от 24 декабря 2011 г. № 132)</a>
                    </div>

                </div>
                <div class="col-lg-4">
                    @include('partials.single-window-sidebar')
                </div>
            </div>
        </div>
</section>
    
@stop