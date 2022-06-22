@extends('admin.layouts.layout')

@section('title', 'Изменить вожатого')

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
                            <h3 class="card-title">Изменить вожатого</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" novalidate="novalidate" action="{{ route('counselor.update', $id) }}"
                              method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ФИО (обязательно)</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                           value="{{ $counselor->name }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Фото (необязательно)</label>
                                    <input type="file" name="thumbnail" class="form-control-file"
                                           id="exampleInputPassword1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Выбрать лагерь (обязательно)</label>

                                    <div class="form-group">

                                        <div class="form-group">
                                            <label>Custom Select</label>
                                            <select class="custom-select" name="camp">
                                                <option value="{{ $counselor->camp }}">{{ $counselor->camp }}</option>
                                                <option value="Жуков луг">Жуков луг</option>
                                                <option value="Дримленд">Дримленд</option>
                                                <option value="Грузия">Грузия</option>
                                            </select>
                                        </div>
                                    </div>

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





