@extends('layouts.app')

@include('partials.header')
@section('content')
    <section class="pt-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-sm-8 col-md-6 order-2 order-md-1">
                    <img src="/img/main/banners/home.png" alt="" class="w-100">
                </div>
                <div class="col-sm-8 col-md-6 order-1 order-md-2 text-center text-md-start mb-4 mb-md-0">
                    <h1 class="mb-60">Спасибо, Ваша заявка успешно отправлена!</h1>
                    <div class="d-flex justify-content-center justify-content-md-start">
                        <a class="button_1 btn-purple" href="/">На главную</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

