@extends('admin.layouts.layout')

@section('title', 'Список документов')

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


    <a href="{{ route('documents.create') }}">Добавить документ</a>

    <table class="table table-striped projects">

        <thead>
        <tr>

            <th style="width: 20%">
                Название
            </th>

            <th style="width: 5%">
                Скачать
            </th>

        </tr>
        </thead>

        <tbody>
        @foreach($documents as $document)
            <tr>

                <td>
                    {{ $document->title }}
                </td>

                <td>
                    <a href="{{ route('download', $document->id) }}">Скачать</a>
                </td>

                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="{{ route('documents.edit', $document->id) }}">Редактировать</a>

                    <form action="{{ route('documents.destroy', $document->id) }}" method="post">
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
