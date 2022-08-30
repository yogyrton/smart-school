@extends('layouts.app')

@section('content')
<section class="pb-120 pt-120 window-section" id="window-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contacts d-flex flex-column mb-40">
                        <h6 class="mb-24">Частное учреждение образования <br>
                        «Средняя школа «Смарт Скул»
                        </h6>
                        <div>
                            <a class="contacts-tel mb-12 d-inline-block tel-number" href="tel:375255126009">+375 (25) 512-60-09</a>
                        </div>
                        <div>
                            <a class="contacts-tel mb-12 d-inline-block tel-number" href="tel:375255156009">+375 (25) 515-60-09</a>
                        </div>
                        <p class="contacts-timetable">Пн.-пт. 09:00-13:00, 14.00 - 18.00</p>
                    </div>

                    <div class="text-info">
                        <p class="mb-24 text">Основными принципами осуществления административных процедур являются: законность, равенство заинтересованных лиц перед законом, приоритет интересов заинтересованных лиц, открытость административной процедуры, оперативность и доступность административной процедуры, заявительный принцип одного окна, сотрудничество при осуществлении административных процедур.</p>
                        <p class="mb-24 text">Заявительный принцип одного окна – обращение заинтересованного лица с заявлением в один уполномоченный орган с приложением документов и (или) сведений, необходимых для осуществления административной процедуры, которые могут быть представлены только заинтересованным лицом.</p>
                        <p class="mb-24 text">При обращении гражданину необходимо предоставить только минимальный пакет документов для осуществления административной процедуры. Остальные документы, необходимые для осуществления соответствующей административной процедуры запрашиваются специалистом исполняющей организации, а также могут быть представлены гражданином самостоятельно.</p>
                        <p class="mb-24 text">К сведению граждан:</p>
                        <p class="mb-24 text">Книга замечаний и предложений находится в кабинете директора школы, телефон +375-25-515-60-09.</p>
                        <p class="mb-24 text">Ответственный за ведение книги замечаний и предложений –  Базанова Наталья Георгиевна, директор частного учреждения образования «Средняя школа «Смарт Скул».</p>
                        <p class="mb-24 text">Предварительное консультирование граждан и (или) предварительная запись на прием к директору частного учреждения образования «Средняя школа «Смарт Скул» осуществляется секретарем:</p>
                        <ul class="text mb-24 text">
                            <li>по телефону: +375-25-512-60-09</li>
                            <li>по электронной почте: smartminsk2020@gmail.com</li>
                        </ul>
                        <p class="mb-24 text">Для того, чтобы воспользоваться возможностью записаться на прием через Интернет, необходимо сообщить следующее:</p>
                        <ul class="mb-24 text">
                            <li>фамилию, имя, отчество;</li>       
                            <li>адрес;</li>
                            <li>телефон;</li>
                            <li>адрес электронной почты;</li>
                            <li>краткое содержание заявления;</li>
                            <li>куда ранее обращались по теме заявления;</li>
                            <li>имеется ли переписка, какие требования заявления не выполнены.</li>
                        </ul>
                        <p class="mb-24 text">Просим обратить внимание на полноту представляемых сведений, которые необходимы для подготовки к приему.</p>
                        <p class="mb-24 text">Анонимные обращения, если в них нет сведений о преступлении, рассмотрению не подлежат.</p>
                        <p class="text">Письменный запрос при посещении частного учреждения образования «Средняя школа «Смарт Скул» можно оставить у секретаря в приемной.</p>
                    </div>

                </div>
                <div class="col-lg-4">
                    @include('partials.single-window-sidebar')
                </div>
            </div>
        </div>
</section>
    
@stop