@extends('admin.layouts.layout')

@section('title', 'Ссылки на внешний ресурсы')

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


    <a href="{{ route('links.create') }}">Добавить ссылку (не более 1 на каждую страницу)</a>

    <table class="table table-striped projects">

        <thead>
        <tr>

            <th style="width: 40%">
                Лагерь
            </th>

            <th style="width: 15%">
                Ссылка
            </th>

        </tr>
        </thead>

        <tbody>
        @foreach($links as $link)
            <tr>

                <td>
                    {{ $link->camp }}
                </td>

                <td>
                    <a href="{{ $link->links }}" target="_blank">Ссылка</a>
                </td>

                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="{{ route('links.edit', $link->id) }}">Редактировать</a>

                    <form action="{{ route('links.destroy', $link->id) }}" method="post">
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
