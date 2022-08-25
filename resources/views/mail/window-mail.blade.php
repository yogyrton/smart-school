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
    <p><i><b>Наименование и (или) адрес организации либо должность лица, которым направляется обращение:</b></i> {{ $data['organization'] }}</p>
@endif

@if (isset($data['name']) && $data['name'])
    <p><i><b>Фамилия, собственное имя, отчество либо инициалы:</b></i> {{ $data['name'] }}</p>
@endif

@if (isset($data['organization_name']) && $data['organization_name'])
    <p><i><b>Полное наименование юридического лица:</b></i> {{ $data['organization_name'] }}</p>
@endif

@if (isset($data['place']) && $data['place'])
    <p><i><b>Адрес места жительства (места пребывания):</b></i> {{ $data['place']}}</p>
@endif

@if (isset($data['place_organization']) && $data['place_organization'])
    <p><i><b>Место нахождения юридического лица:</b></i> {{ $data['place_organization'] }}</p>
@endif

@if (isset($data['email']) && $data['email'])
    <p><i><b>Адрес электронной почты:</b></i> {{ $data['email'] }}</p>
@endif

@if (isset($data['email_organization']) && $data['email_organization'])
    <p><i><b>Адрес электронной почты юридического лица:</b></i> {{ $data['email_organization'] }}</p>
@endif

@if (isset($data['appeal_question']) && $data['appeal_question'])
    <p><i><b>Суть обращения:</b></i> {{ $data['appeal_question'] }}</p>
@endif



</body>
</html>
