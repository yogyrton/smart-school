@extends('layouts.app')

@section('content')
<section class="pb-120 pt-120 window-section">
        <div class="container">
            <h1 class="text-bold mb-32">Полезные ссылки</h1>
            <div class="row">
                <div class="col-lg-8">
                    <div class="d-flex flex-wrap">
                        <a class="link-wrap" href="https://ndtp.by/" target="_blank">
                            <img src="/img/main/single-window/1.png" alt="link-1">
                        </a> 
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('partials.single-window-sidebar')
                </div>
            </div>
        </div>
</section>
    
@stop