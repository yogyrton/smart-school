<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/css/admin.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Введите логин и пароль</p>

            <form action="{{ route('admin.login_process') }}" method="post">
                @csrf

                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Логин">
                    <div class="input-group-append">
                        <div class="input-group-text"></div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Пароль">
                    <div class="input-group-append">
                        <div class="input-group-text"></div>
                    </div>
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Войти</button>
                </div>
            </form>

        </div>
    </div>
</div>


<script src="/admin/js/admin.js"></script>

</body>
</html>
