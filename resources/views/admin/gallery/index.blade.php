@extends('admin.layouts.layout')

@section('title', 'Фотогалерея')

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


    <a href="{{ route('galleries.create') }}">Добавить фото (не более 10)</a>

    <table class="table table-striped projects">

        <thead>
        <tr>

            <th style="width: 20%">
                Фото
            </th>

        </tr>
        </thead>

        <tbody>
        @foreach($galleries as $gallery)
            <tr>

                <td>
                    <img src="{{ asset('storage/' . $gallery->thumbnail) }}" alt="{{ $gallery->thumbnail }}" width="60px" height="60px">
                </td>

                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="{{ route('galleries.edit', $gallery->id) }}">Редактировать</a>

                    <form action="{{ route('galleries.destroy', $gallery->id) }}" method="post">
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
