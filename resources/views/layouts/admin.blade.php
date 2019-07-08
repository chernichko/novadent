<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SB Admin - Dashboard</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


    <!-- Custom styles for this template-->
    <link href="{{ asset('css/admin/sb-admin.css') }}" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="/">Стоматология НоваДент</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">

        </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        <!--- <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <span class="badge badge-danger">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>--->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <!---<a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div> -->
                <!--- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a> --->
                <a class="dropdown-item" href="{{ route('logout') }}">Выход</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.info')}}">
                <i class="fas fa-fw fa-info"></i>
                <span>Данные компании</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.services')}}">
                <i class="fas fa-fw fa-rocket"></i>
                <span>Услуги</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.prices')}}">
                <i class="fas fa-fw fa-rub"></i>
                <span>Цены</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.news')}}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Новости</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Страницы</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Основные страницы</h6>
                @foreach($pages['main'] as $page)
                    <a class="dropdown-item" href="/admin/pages/edit/{{$page['id']}}">{{$page['name']}}</a>
                @endforeach
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Другие страницы</h6>
                @foreach($pages['other'] as $page)
                    <a class="dropdown-item" href="/admin/pages/edit/{{$page['id']}}">{{$page['name']}}</a>
                @endforeach

                <a class="dropdown-item" href="{{route('admin.pages.create')}}">Добавить</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.doctors')}}">
                <i class="fas fa-fw fa-user-md"></i>
                <span>Сотрудники</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.gallery')}}">
                <i class="fas fa-fw fa-picture-o"></i>
                <span>Галлерея</span></a>
        </li>
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="{{route('admin.licenses')}}">--}}
{{--                <i class="fas fa-fw fa-file-text-o"></i>--}}
{{--                <span>Лицензии</span></a>--}}
{{--        </li>--}}
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.reviews')}}">
                <i class="fas fa-fw fa-comment-o"></i>
                <span>Отзывы</span></a>
        </li>
    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    Администратор
                </li>
                @yield('title')
            </ol>

            @yield('content')


        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <!--footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2018</span>
                </div>
            </div>
        </footer -->

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

{{--<script src="../vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>--}}
{{--<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>--}}
{{--<script>--}}
{{--    $('textarea').ckeditor();--}}
{{--</script>--}}

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
    };

    CKEDITOR.replace( 'textarea' , options );
</script>

<!-- Core plugin JavaScript-->
{{--<script src="vendor/jquery-easing/jquery.easing.min.js"></script>--}}

<!-- Page level plugin JavaScript-->
{{--<script src="{{ asset('./node_modules/chart.js/dist/Chart.min.js') }}"></script>--}}
{{--<script src="vendor/datatables/jquery.dataTables.js"></script>--}}
{{--<script src="vendor/datatables/dataTables.bootstrap4.js"></script>--}}

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/admin/sb-admin.js') }}"></script>

{{--<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>--}}

@yield('scripts')

<!-- Demo scripts for this page
<script src="js/demo/datatables-demo.js"></script>
<script src="js/demo/chart-area-demo.js"></script>-->

</body>

</html>
