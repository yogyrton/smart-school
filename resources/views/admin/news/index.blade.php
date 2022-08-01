@extends('admin.layouts.layout')

@section('title', 'Список новостей')

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


    <a href="{{ route('news.create') }}">Добавить новость</a>

    <table class="table table-striped projects">

        <thead>
        <tr>

            <th style="width: 10%">
                Фото
            </th>

            <th style="width: 15%">
                Заголовок
            </th>

            <th style="width: 35%">
                Текст
            </th>

            <th style="width: 15%">
                Дата публикации
            </th>


            <th style="width: 5%">
                Действия
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
                    {!! $new->text !!}
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
