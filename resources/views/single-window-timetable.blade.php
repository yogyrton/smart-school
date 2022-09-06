@extends('layouts.app')

@section('content')
<section class="pb-120 pt-120 window-section" id="window-timetable">
        <div class="container">
            <h1 class="text-bold mb-32 d-lg-block d-none">График приема</h1>
            <div class="row">
                <div class="col-lg-8">
                    <div class="d-flex gap-12 mb-32">
                        <div>
                            <img src="/svg/doc.svg" alt="doc-img">
                        </div>
                        <a class="window-doc-link text" href="/docs/grafic_priema.docx">График приема</a>
                    </div>
                    <h6 class="mb-24">Порядок личного приема</h6>
                    <p class="text mb-24">Личный прием граждан, в том числе индивидуальных предпринимателей, и юридических лиц, их представителей, представителей юридических лиц (далее – личный прием) в школе проводится директором школы и иными должностными лицами в установленные дни и часы по утвержденному графику.</p>
                    <p class="text mb-24">Личный прием осуществляется по предварительной записи по телефону +37525-512-60-09, а также при личном обращении в школу в установленные дни и часы личного приема граждан в порядке очередности. </p>
                    <p class="text mb-24">При временном отсутствии в день личного приема директора личный прием проводит лицо, исполняющее его обязанности.</p>

                    <div id="hidden-text-box">
                    <p class="text mb-24">При устном обращении заявитель обязан предъявить документ, удостоверяющий его личность (представитель заявителя должен предъявить также документ, подтверждающий его полномочия) и изложить суть обращения. </p>
                        <p class="text mb-24">Работник школы, уполномоченный осуществлять предварительную запись на личный прием, не вправе отказать в личном приеме, записи на личный прием, за исключением случаев:</p>
                        <ul class="text mb-24 text">
                            <li>обращения по вопросам, не относящимся к компетенции школы;</li>
                            <li>обращения в неустановленные дни и часы;</li>
                            <li>когда заявителю в ходе личного приема уже был дан исчерпывающий ответ на интересующие его вопросы;</li>
                            <li>когда с заявителем прекращена переписка по изложенным в обращении вопросам.</li>
                        </ul>

                        <p class="text mb-24">Во время личного приема для обеспечения квалифицированного решения поставленных заявителям вопросов могут привлекаться сотрудники соответствующих структурных подразделений школы.</p>
                        <p class="text mb-24">В случае если обращение заявителя не может быть решено непосредственно во время приема, оно излагается им в письменной форме. </p>
                        <p class="text mb-24">При проведении личного приема по решению директора школы могут применяться технические средства (аудио – и видеозапись, кино – и фотосъемка), о чем заявитель должен быть уведомлен до начала личного приема.</p>
                    </div>

                    <button class="accentColor" id="btnMore">Подробнее</button>

                </div>
                <div class="col-lg-4">
                    @include('partials.single-window-sidebar')
                </div>
            </div>
        </div>
</section>
    
@stop