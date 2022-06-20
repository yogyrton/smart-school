@extends('admin.layouts.layout')

@section('title', 'Список главных новостей')

@section('content')
    <a href="{{ route('teacher.create') }}">Добавить</a>

    <table class="table table-striped projects">

        <thead>
        <tr>
            <th style="width: 20%">
                Место
            </th>
            <th style="width: 50%">
                Текст
            </th>
        </tr>
        </thead>

        <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td>
                    {{ $teacher->name }}
                </td>
                <td>
                    <a>
                        {{ $teacher->position }}
                    </a>
                    <br>
                </td>

                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="{{ route('main_news.edit', $teacher->id) }}">Редактировать</a>

                    <form action="{{ route('main_news.destroy', $teacher->id) }}" method="post">
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
