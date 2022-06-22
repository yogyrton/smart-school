<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin_assets/css/admin.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info d-block">
                    <a href="{{ route('main') }}" class="d-block">Главная</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <p>
                                Главные новости
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('main_news.index') }}" class="nav-link">
                                    <p>Список новостей</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('main_news.create') }}" class="nav-link">
                                    <p>Добавить новость</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <p>
                                Блок новостей
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('news.index') }}" class="nav-link">
                                    <p>Список новостей</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('news.create') }}" class="nav-link">
                                    <p>Добавить новость</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <p>
                                Педагоги
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('teacher.index') }}" class="nav-link">
                                    <p>Список педагогов</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('teacher.create') }}" class="nav-link">
                                    <p>Добавить педагога</p>
                                </a>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <p>
                                Вожатые
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('counselor.index') }}" class="nav-link">
                                    <p>Список вожатых</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('counselor.create') }}" class="nav-link">
                                    <p>Добавить вожатого</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <p>
                                Блок документов
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../../index.html" class="nav-link">
                                    <p>Список документов</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../../index2.html" class="nav-link">
                                    <p>Добавить документ</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <p>
                                Прейскурант цен
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('prices.index') }}" class="nav-link">
                                    <p>Список прейскурантов</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('prices.create') }}" class="nav-link">
                                    <p>Добавить прейскурант</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Админ-панель: @yield('title')</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>



        <section class="content-header">
            <div class="container-fluid">
                @yield('content')
            </div><!-- /.container-fluid -->
        </section>

    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>

<script src="/admin_assets/js/admin.js"></script>

</body>
</html>
