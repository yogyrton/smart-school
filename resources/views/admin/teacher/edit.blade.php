@extends('admin.layouts.layout')

@section('title', 'Изменить данные педагога')

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
                            <h3 class="card-title">Изменить данные педагога</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" novalidate="novalidate" action="{{ route('teacher.update', $id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ФИО (необязательно, сохранится старое, не более 200 символов)</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $teacher->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Должность (необязательно, сохранится старое, при отсутствии отображаться не будет, не более 200 символов)</label>
                                    <input type="text" name="position" class="form-control" id="exampleInputPassword1" value="{{ $teacher->position }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Категория (необязательно, сохранится старое, при отсутствии отображаться не будет, не более 200 символов)</label>
                                    <input type="text" name="category" class="form-control" id="exampleInputPassword1" value="{{ $teacher->category }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Стаж (необязательно, сохранится старое, при отсутствии отображаться не будет, например "Стаж: 5 лет", не более 200 символов)</label>
                                    <input type="text" name="experience" class="form-control" id="exampleInputPassword1" value="{{ $teacher->experience }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Фото (необязательно, сохранится старое, размер 312х312, форматы: jpg, jpeg, png, bmp, gif, svg или webp, не более 8 мб)</label>
                                    <input type="file" name="thumbnail" class="form-control-file" id="exampleInputPassword1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Позиция показа (необязательно изменять, сохранится старое, целое число, уникальное, не более 200, чем ниже число, тем раньше в слайдере отображается, для удобства в режиме редактирования есть возможность указывать одинаковую позицию с другим педагогом, далее не забыть изменить позицию у другого педагога)</label>
                                    <input type="text" name="point" class="form-control" id="exampleInputPassword1" value="{{ $teacher->point }}">
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



