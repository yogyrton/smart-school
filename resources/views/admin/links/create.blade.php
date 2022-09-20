@extends('admin.layouts.layout')

@section('title', 'Добавление ссылки')

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
                        <h3 class="card-title">Добавление ссылки</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" novalidate="novalidate" action="{{ route('links.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ссылка на внешний ресурс</label>
                                <input type="text" name="links" class="form-control" id="exampleInputEmail1" placeholder="Ссылка">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Выбрать страницу (обязательно для заполнения)</label>

                                <div class="form-group">
                                    <select class="custom-select" name="camp">
                                        <option value="Школа Беларусь">Школа Беларусь</option>
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
