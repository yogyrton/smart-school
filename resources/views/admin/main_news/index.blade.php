@extends('admin.layouts.layout')

@section('title', 'Список главных новостей')

@section('content')
    <a href="{{ route('main_news.create') }}">Добавить</a>
    @if (session('error'))
        Уже 3 главные новости
    @endif
    <table class="table table-striped projects">

        <thead>
        <tr>
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
