@extends('admin.layouts.layout')

@section('title', 'Изменить главную новости')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Изменить главную новости</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" novalidate="novalidate" action="{{ route('main_news.update', $id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Заголовок (обязательно)</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{ $news->title }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Текст новости (обязательно)</label>
                                    <input type="text" name="text" class="form-control" id="exampleInputPassword1" value="{{ $news->title }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Выбрать страницу (обязательно)</label>

                                <div class="form-group">
                                    <select class="custom-select" name="page">
                                        <option value="{{ $news->page }}">{{ $news->page }}</option>
                                        <option value="Главная">Главная</option>
                                        <option value="Школа Беларусь">Школа Беларусь</option>
                                        <option value="Школа Беларусь 1-4">Школа Беларусь 1-4</option>
                                        <option value="Школа Беларусь 5-11">Школа Беларусь 5-11</option>
                                        <option value="Онлайн школа">Онлайн школа</option>
                                        <option value="Школа Россия">Школа Россия</option>
                                        <option value="Лагерь">Лагерь</option>
                                        <option value="Лагерь Жуков Луг">Лагерь Жуков Луг</option>
                                        <option value="Лагерь Дримленд">Лагерь Дримленд</option>
                                        <option value="Лагерь в Грузии">Лагерь в Грузии</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Изменить</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
