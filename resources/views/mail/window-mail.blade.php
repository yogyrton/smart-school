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

@if (isset($data['organization']) && $data['organization'])
    <p>Наименование и (или) адрес организации либо должность лица, которым направляется обращение: {{ $data['organization'] }}</p>
@endif

@if (isset($data['organization_name']) && $data['organization_name'])
    <p>Наименование и (или) адрес организации либо должность лица, которым направляется обращение: {{ $data['organization_name'] }}</p>
@endif

@if (isset($data['name']) && $data['name'])
    <p>ФИО: {{ $data['name'] }}</p>
@endif

@if (isset($data['place']) && $data['place'])
    <p>Адрес: {{ $data['place']}}</p>
@endif

@if (isset($data['email']) && $data['email'])
    <p>Email: {{ $data['email'] }}</p></p>
@endif

@if (isset($data['appeal_question']) && $data['appeal_question'])
    <p>Вопрос: {{ $data['appeal_question'] }}</p>
@endif



</body>
</html>
