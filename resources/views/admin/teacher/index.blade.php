@extends('admin.layouts.layout')

@section('title', 'Список педагогов')

@section('content')
    <a href="{{ route('teacher.create') }}">Добавить педагога</a>

    <table class="table table-striped projects">

        <thead>
        <tr>

            <th style="width: 5%">
                Позиция показа
            </th>

            <th style="width: 20%">
                Фото
            </th>

            <th style="width: 25%">
                ФИО
            </th>


            <th style="width: 20%">
                Должность
            </th>

            <th style="width: 20%">
                Категория
            </th>

            <th style="width: 10%">
                Стаж
            </th>

        </tr>
        </thead>

        <tbody>
        @foreach($teachers as $teacher)
            <tr>
                <td>
                    {{ $teacher->point }}
                </td>

                <td>
                    <img src="{{ asset('storage/' . $teacher->thumbnail) }}" alt="{{ $teacher->name }}" width="60px" height="60px">
                </td>

                <td>
                    {{ $teacher->name }}
                </td>

                <td>
                    {{ $teacher->position }}
                </td>

                <td>
                    {{ $teacher->category }}
                </td>

                <td>
                    {{ $teacher->experience }}
                </td>

                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="{{ route('teacher.edit', $teacher->id) }}">Редактировать</a>

                    <form action="{{ route('teacher.destroy', $teacher->id) }}" method="post">
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
