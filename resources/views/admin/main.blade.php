@extends('admin.layouts.layout')

@section('title', 'Главная')

@section('content')
    <div class="row">
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
        <!-- ./col -->
    </div>
@endsection
