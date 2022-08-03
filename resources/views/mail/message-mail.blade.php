<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Данные об отправителе: </h1>
    <p>Имя: {{ $data['name'] }}</p>
    <p>Телефон: {{ $data['phone'] }}</p>
@if ($data['country'])
    <p>Страна: {{ $data['country']}}</p>
@endif

@if ($data['grade'])
    <p>Класс: {{ $data['grade'] }}</p></p>
@endif

@if ($data['format'])
    <p>Формат: {{ $data['format'] }}</p>
@endif

@if ($data['email'])
    <p>Email: {{ $data['email'] }}</p>
@endif

@if ($data['contact_msg'])
    <p>Текст сообщения:</p>
    {!! nl2br($data['contact_msg']) !!}
@endif

</body>
</html>
