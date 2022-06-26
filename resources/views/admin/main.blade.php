@extends('admin.layouts.layout')

@section('title', 'Главная')

@section('content')
    <div class="row">

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
                <div class="inner">

                    <h3>На стайт</h3>
                    <p>Главная страница</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('home') }}" class="small-box-footer" target="_blank">Подробнее</a>
            </div>
        </div>


        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $news }}</h3>
                    <p>Главные новости</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ route('main_news.index') }}" class="small-box-footer">Подробнее</a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">

                    <h3>{{ $new }}</h3>
                    <p>Блок новостей</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('news.index') }}" class="small-box-footer">Подробнее</a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">

                    <h3>{{ $teachers }}</h3>
                    <p>Педагоги</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="{{ route('teacher.index') }}" class="small-box-footer">Подробнее</a>
            </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
    </div>



    <div class="row">

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">

                    <h3>{{ $counselors }}</h3>
                    <p>Вожатые</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ route('counselor.index') }}" class="small-box-footer">Подробнее</a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>{{ $doc }}</h3>
                    <p>Блок документов</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ route('documents.index') }}" class="small-box-footer">Подробнее</a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
                <div class="inner">

                    <h3>{{ $price }}</h3>
                    <p>Прейскурант цен</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ route('prices.index') }}" class="small-box-footer">Подробнее</a>
            </div>
        </div>
        <!-- ./col -->

        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dark">
                <div class="inner">

                    <h3>Фото</h3>
                    <p>Предыдущие смены</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{ route('photos.index') }}" class="small-box-footer">Подробнее</a>
            </div>
        </div>
        <!-- ./col -->
    </div>
@endsection
