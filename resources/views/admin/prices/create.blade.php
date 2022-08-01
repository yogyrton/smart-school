@extends('admin.layouts.layout')

@section('title', 'Добавить прайс')

@section('content')



<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Добавить прайс (все поля обязательны для заполнения, только числа, без отрицательных и десятичных, минимальное число в поле: 0, максимальное число в поле: 10000)</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" novalidate="novalidate" action="{{ route('prices.store') }}" method="post">
                        @csrf
                        <div class="card-body mt-3">
                            <label class="mt-3">Беларусь</label>
                            <div class="form-group">
                                <label for="exampleInputEmail1">1-4 класс</label>
                                <input type="text" name="blr_1_4" placeholder="Цена в белорусских рублях">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">5-11 класс</label>
                                <input type="text" name="blr_5_11" placeholder="Цена в белорусских рублях">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Лагерь Жуков Луг</label>
                                <input type="text" name="blr_gl_sale" placeholder="Цена со скидкой">
                                <input type="text" name="blr_gl" placeholder="Цена без скидки">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Лагерь Дримленд</label>
                                <input type="text" name="blr_dr" placeholder="Цена в белорусских рублях">

                            </div>

                            <label class="mt-3">Россия</label>
                            <div class="form-group">
                                <label for="exampleInputEmail1">1-4 класс</label>
                                <input type="text" name="rus_1_4_rus" placeholder="Цена в российских рублях">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">5-8 класс</label>
                                <input type="text" name="rus_5_8_rus" placeholder="Цена в российских рублях">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">9-11 класс</label>
                                <input type="text" name="rus_9_11_rus" placeholder="Цена в российских рублях">
                            </div>

                            <label class="mt-3">Онлайн</label>
                            <div class="form-group">
                                <label for="exampleInputEmail1">1-4 класс</label>
                                <input type="text" name="onl_1_4_rus" placeholder="Цена в российских рублях">
                                <input type="text" name="onl_1_4_blr" placeholder="Цена в белорусских рублях">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">5-8 класс</label>
                                <input type="text" name="onl_5_8_rus" placeholder="Цена в российских рублях">
                                <input type="text" name="onl_5_8_blr" placeholder="Цена в белорусских рублях">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">9-11 класс</label>
                                <input type="text" name="onl_9_11_rus" placeholder="Цена в российских рублях">
                                <input type="text" name="onl_9_11_blr" placeholder="Цена в белорусских рублях">
                            </div>

                            <label class="mt-3">Грузия</label>
                            <div class="form-group">
                                <label for="exampleInputEmail1">1-4 класс</label>
                                <input type="text" name="geo" placeholder="Цена в долларах">
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
