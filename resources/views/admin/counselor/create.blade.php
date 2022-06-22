@extends('admin.layouts.layout')

@section('title', 'Добавление вожатого')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Добавление вожатого</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" novalidate="novalidate" action="{{ route('counselor.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ФИО (обязательно)</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Заголовок">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Фото (необязательно)</label>
                                <input type="file" name="thumbnail" class="form-control-file" id="exampleInputPassword1">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Выбрать лагерь (обязательно)</label>

                                <div class="form-group">
                                    <select class="custom-select" name="camp">
                                        <option value="Жуков луг">Лагерь жуков луг</option>
                                        <option value="Дримленд">Лагерь дримленд</option>
                                        <option value="Грузия">Лагерь в грузии</option>
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
