@extends('admin.layouts.layout')

@section('title', 'Список главных новостей')

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



    <a href="{{ route('main_news.create') }}">Добавить главную новость (не больше 3 на каждую страницу)</a>

    <table class="table table-striped projects">

        <thead>
        <tr>
            <th style="width: 20%">
                Лагерь
            </th>
            <th style="width: 20%">
                Заголовок
            </th>
            <th style="width: 50%">
                Текст
            </th>
        </tr>
        </thead>

        <tbody>
        @foreach($news as $new)
            <tr>
                <td>
                    {{ $new->page }}
                </td>
                <td>
                    {{ $new->title }}
                </td>
                <td>
                    <a>
                        {{ $new->text }}
                    </a>
                    <br>
                </td>

                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="{{ route('main_news.edit', $new->id) }}">Редактировать</a>

                    <form action="{{ route('main_news.destroy', $new->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                    </form>

                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
