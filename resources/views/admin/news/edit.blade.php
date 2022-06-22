@extends('admin.layouts.layout')

@section('title', 'Изменение новости')

@section('content')


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Изменение новости</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" novalidate="novalidate" action="{{ route('news.update', $id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Заголовок (необязательно)</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" value="{{ $news->title }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Текст новости (необязательно)</label>
                                    <input type="text" name="text" class="form-control" id="exampleInputPassword1" value="{{ $news->text }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Фото (необязательно)</label>
                                    <input type="file" name="thumbnail" class="form-control-file" id="exampleInputPassword1">
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




