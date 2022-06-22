@extends('admin.layouts.layout')

@section('title', 'Список прейскурантов')

@section('content')

    @if (session('error'))
        <div class="alert alert-danger">
            <li>{{ session('error') }}</li>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            <li>{{ session('success') }}</li>
        </div>
    @endif



    <a href="{{ route('prices.create') }}">Добавить прейскурант (не больше 1)</a>


    @foreach($prices as $price)
    <div class="project-actions text-left">
        <a class="btn btn-info btn-sm" href="{{ route('prices.edit', $price->id) }}">Редактировать</a>
    </div>

    <table class="table table-striped projects">

        <thead>
        <tr>
            <th style="width: 30%">
                Беларусь
            </th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>
                Услуги
            </td>
            <td>
                1 - 4 класс
            </td>
            <td>
                5 - 11 класс
            </td>
            <td>
                Лагерь Жуков Луг
            </td>
            <td>
                Лагерь Dreamland
            </td>
        </tr>

        <tr>
            <td>
                Цена
            </td>
            <td>
                {{ $price->blr_1_4 }} бел. руб.
            </td>
            <td>
                {{ $price->blr_5_11 }} бел. руб.
            </td>
            <td>
                {{ $price->blr_gl }} бел. руб.
            </td>
            <td>
                {{ $price->blr_dr }} бел. руб.
            </td>

        </tr>
        </tbody>
    </table>

    <table class="table table-striped projects">
        <thead>
        <tr>
            <th style="width: 30%">
                Россия
            </th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>
                Услуги
            </td>
            <td>
                1 - 4 класс
            </td>
            <td>
                5 - 8 класс
            </td>
            <td>
                9 - 11 класс
            </td>
        </tr>

        <tr>
            <td>
                Цена
            </td>
            <td>
                {{ $price->rus_1_4_rus }} рос. руб. | {{ $price->rus_1_4_blr }} бел. руб.
            </td>
            <td>
                {{ $price->rus_5_8_rus }} рос. руб. | {{ $price->rus_5_8_blr }} бел. руб.
            </td>
            <td>
                {{ $price->rus_9_11_rus }} рос. руб. | {{ $price->rus_9_11_blr }} бел. руб.
            </td>

        </tr>
        </tbody>
    </table>

    <table class="table table-striped projects">
        <thead>
        <tr>
            <th style="width: 30%">
                Онлайн
            </th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>
                Услуги
            </td>
            <td>
                1 - 4 класс
            </td>
            <td>
                5 - 8 класс
            </td>
            <td>
                9 - 11 класс
            </td>
        </tr>

        <tr>
            <td>
                Цена
            </td>
            <td>
                {{ $price->onl_1_4_rus }} рос. руб. | {{ $price->onl_1_4_blr }} бел. руб.
            </td>
            <td>
                {{ $price->onl_5_8_rus }} рос. руб. | {{ $price->onl_5_8_blr }} бел. руб.
            </td>
            <td>
                {{ $price->onl_9_11_rus }} рос. руб. | {{ $price->onl_9_11_blr }} бел. руб.
            </td>

        </tr>
        </tbody>
    </table>

    <table class="table table-striped projects">
        <thead>
        <tr>
            <th style="width: 30%">
                Грузия
            </th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>
                Услуги
            </td>
            <td>
                Лагерь
            </td>
        </tr>

        <tr>
            <td>
                Цена
            </td>
            <td>
                {{ $price->geo }} USD
            </td>
        </tr>
        </tbody>
    </table>
    @endforeach

@endsection
