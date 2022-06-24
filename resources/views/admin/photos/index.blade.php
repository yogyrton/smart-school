@extends('admin.layouts.layout')

@section('title', 'Фото предыдущих смен')

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


    <a href="{{ route('photos.create') }}">Добавить фото</a>

    <table class="table table-striped projects">

        <thead>
        <tr>

            <th style="width: 20%">
                Лагерь
            </th>

            <th style="width: 20%">
                Фото
            </th>

        </tr>
        </thead>

        <tbody>
        @foreach($photos as $photo)
            <tr>

                <td>
                    {{ $photo->camp }}
                </td>

                <td>
                    <img src="{{ asset('storage/' . $photo->thumbnail) }}" alt="{{ $photo->camp }}" width="60px" height="60px">
                </td>

                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="{{ route('photos.edit', $photo->id) }}">Редактировать</a>

                    <form action="{{ route('photos.destroy', $photo->id) }}" method="post">
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
