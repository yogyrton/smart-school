@extends('admin.layouts.layout')

@section('title', 'Список вожатых')

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


    <a href="{{ route('counselor.create') }}">Добавить вожатого</a>

    <table class="table table-striped projects">

        <thead>
        <tr>

            <th style="width: 20%">
                Фото
            </th>

            <th style="width: 25%">
                ФИО
            </th>

            <th style="width: 20%">
                Лагерь
            </th>

        </tr>
        </thead>

        <tbody>
        @foreach($counselors as $counselor)
            <tr>

                <td>
                    <img src="{{ asset('storage/' . $counselor->thumbnail) }}" alt="{{ $counselor->name }}" width="60px" height="60px">
                </td>

                <td>
                    {{ $counselor->name }}
                </td>

                <td>
                    {{ $counselor->camp }}
                </td>

                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="{{ route('counselor.edit', $counselor->id) }}">Редактировать</a>

                    <form action="{{ route('counselor.destroy', $counselor->id) }}" method="post">
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
