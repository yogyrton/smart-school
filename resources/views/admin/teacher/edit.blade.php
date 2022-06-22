@extends('admin.layouts.layout')

@section('title', 'Изменить данные педагога')

@section('content')
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
                                    <label for="exampleInputEmail1">ФИО</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $teacher->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Должность (необязательно)</label>
                                    <input type="text" name="position" class="form-control" id="exampleInputPassword1" value="{{ $teacher->position }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Категория (необязательно)</label>
                                    <input type="text" name="category" class="form-control" id="exampleInputPassword1" value="{{ $teacher->category }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Стаж (необязательно)</label>
                                    <input type="text" name="experience" class="form-control" id="exampleInputPassword1" value="{{ $teacher->experience }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Фото</label>
                                    <input type="file" name="thumbnail" class="form-control-file" id="exampleInputPassword1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Позиция показа (уникальна)</label>
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



