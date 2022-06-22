@extends('admin.layouts.layout')

@section('title', 'Добавление педагога')

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
                        <h3 class="card-title">Добавление педагога</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" novalidate="novalidate" action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ФИО (обязательно)</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="ФИО">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Должность (необязательно)</label>
                                <input type="text" name="position" class="form-control" id="exampleInputPassword1" placeholder="Должность">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Категория (необязательно)</label>
                                <input type="text" name="category" class="form-control" id="exampleInputPassword1" placeholder="Категория">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Стаж (необязательно)</label>
                                <input type="text" name="experience" class="form-control" id="exampleInputPassword1" placeholder="Стаж">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Фото (обязательно)</label>
                                <input type="file" name="thumbnail" class="form-control-file" id="exampleInputPassword1" placeholder="Текст новости">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Позиция показа (обязательно, уникальна)</label>
                                <input type="text" name="point" class="form-control" id="exampleInputPassword1" placeholder="Текст новости">
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
