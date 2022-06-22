@extends('admin.layouts.layout')

@section('title', 'Список новостей')

@section('content')
    <a href="{{ route('news.create') }}">Добавить новость</a>

    <table class="table table-striped projects">

        <thead>
        <tr>

            <th style="width: 20%">
                Фото
            </th>

            <th style="width: 5%">
                Заголовок
            </th>

            <th style="width: 25%">
                Текст
            </th>

            <th style="width: 20%">
                Дата публикации
            </th>

        </tr>
        </thead>

        <tbody>
        @foreach($news as $new)
            <tr>

                <td>
                    <img src="{{ asset('storage/' . $new->thumbnail) }}" alt="{{ $new->title }}" width="60px" height="60px">
                </td>

                <td>
                    {{ $new->title }}
                </td>

                <td>
                    {{ $new->text }}
                </td>

                <td>
                    {{ $new->created_at->format('d-m-Y') }}
                </td>

                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="{{ route('news.edit', $new->id) }}">Редактировать</a>

                    <form action="{{ route('news.destroy', $new->id) }}" method="post">
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