@extends('admin.layouts.layout')

@section('title', 'Добавление документа')

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
                        <h3 class="card-title">Добавление документа</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" novalidate="novalidate" action="{{ route('documents.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название (обязательно)</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Заголовок">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Загрузить документ (обязательно)</label>
                                <input type="file" name="path" class="form-control-file" id="exampleInputPassword1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Выбрать позицию показа(обязательно)</label>

                                <div class="form-group">
                                    <select class="custom-select" name="page">
                                        <option value="Главная">Общие</option>
                                        <option value="Лагерь Жуков Луг">Лагерь Жуков Луг</option>
                                        <option value="Лагерь Дримленд">Лагерь Дримленд</option>
                                        <option value="Лагерь в Грузии">Лагерь в Грузии</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Добавить</button>
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
