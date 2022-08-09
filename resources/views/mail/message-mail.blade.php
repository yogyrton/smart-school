<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Письмо</title>
</head>
<body>
<h1>Данные об отправителе: </h1>

@if (isset($page) && $page)
    <h3>С какой страницы: {{ $page }}</h3>
@endif

@if (isset($data['name']) && $data['name'])
    <p>Имя: {{ $data['name'] }}</p>
@endif

@if (isset($data['phone']) && $data['phone'])
    <p>Телефон: {{ $data['phone'] }}</p>
@endif

@if (isset($data['country']) && $data['country'])
    <p>Страна: {{ $data['country']}}</p>
@endif

@if (isset($data['grade']) && $data['grade'])
    <p>Класс: {{ $data['grade'] }}</p></p>
@endif

@if (isset($data['format']) && $data['format'])
    <p>Формат: {{ $data['format'] }}</p>
@endif

@if (isset($data['visit']) && $data['visit'])
    <p>Формат пребывания: {{ $data['visit'] }}</p>
@endif

@if (isset($data['month']) && $data['month'])
    <p>Месяц: {{ $data['month'] }}</p>
@endif

@if (isset($data['email']) && $data['email'])
    <p>Email: {{ $data['email'] }}</p>
@endif

@if (isset($data['contact_msg']) && $data['contact_msg'])
    <p>Текст сообщения:</p>
    {!! nl2br($data['contact_msg']) !!}
@endif


</body>
</html>
