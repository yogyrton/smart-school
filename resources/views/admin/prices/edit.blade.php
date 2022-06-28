@extends('admin.layouts.layout')

@section('title', 'Изменить прайс')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Добавить прайс (только числа, без отрицательных и десятичных)</h3>
                        </div>
                        <form id="quickForm" novalidate="novalidate" action="{{ route('prices.update', $id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <label>Беларусь</label>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">1-4 класс</label>
                                    <input type="text" name="blr_1_4" value="{{ $price->blr_1_4 }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">5-11 класс</label>
                                    <input type="text" name="blr_5_11" value="{{ $price->blr_5_11 }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Лагерь Жуков Луг</label>
                                    <input type="text" name="blr_gl" value="{{ $price->blr_gl }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Лагерь Жуков Луг</label>
                                    <input type="text" name="blr_dr" value="{{ $price->blr_dr }}">
                                </div>

                                <label>Россия</label>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">1-4 класс</label>
                                    <input type="text" name="rus_1_4_rus" value="{{ $price->rus_1_4_rus }}">
                                    <input type="text" name="rus_1_4_blr" value="{{ $price->rus_1_4_blr }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">5-8 класс</label>
                                    <input type="text" name="rus_5_8_rus" value="{{ $price->rus_5_8_rus }}">
                                    <input type="text" name="rus_5_8_blr" value="{{ $price->rus_5_8_blr }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">9-11 класс</label>
                                    <input type="text" name="rus_9_11_rus" value="{{ $price->rus_9_11_rus }}">
                                    <input type="text" name="rus_9_11_blr" value="{{ $price->rus_9_11_blr }}">
                                </div>

                                <label>Онлайн</label>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">1-4 класс</label>
                                    <input type="text" name="onl_1_4_rus" value="{{ $price->onl_1_4_rus }}">
                                    <input type="text" name="onl_1_4_blr" value="{{ $price->onl_1_4_blr }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">5-8 класс</label>
                                    <input type="text" name="onl_5_8_rus" value="{{ $price->onl_5_8_rus }}">
                                    <input type="text" name="onl_5_8_blr" value="{{ $price->onl_5_8_blr }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">9-11 класс</label>
                                    <input type="text" name="onl_9_11_rus" value="{{ $price->onl_9_11_rus }}">
                                    <input type="text" name="onl_9_11_blr" value="{{ $price->onl_9_11_blr }}">
                                </div>

                                <label>Грузия</label>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">1-4 класс</label>
                                    <input type="text" name="geo" value="{{ $price->geo }}">
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
