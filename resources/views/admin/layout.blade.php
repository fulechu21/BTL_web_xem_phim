<?php
$twoMonthsAgo = now()->subMonths(2);
$lastMonthsAgo = now()->subMonths(1);
//dd($lastMonthsAgo->startOfMonth()->format('Y-m-d'));
//Views Data
$views2MonthsAgo =(int) \App\Models\FilmView::whereBetween('date', [$twoMonthsAgo->startOfMonth()->format('Y-m-d'), $twoMonthsAgo->endOfMonth()->format('Y-m-d')])->sum('views');
$viewsLastMonth = (int) \App\Models\FilmView::whereBetween('date', [$lastMonthsAgo->startOfMonth()->format('Y-m-d'), $lastMonthsAgo->endOfMonth()->format('Y-m-d')])->sum('views');
$viewsThisMonth = (int)\App\Models\FilmView::whereYear('date', now()->year)->whereMonth('date', now()->month)->sum('views');
$views = [$views2MonthsAgo, $viewsLastMonth, $viewsThisMonth];
//dd($views2MonthsAgo);
$viewsUnique2MonthsAgo = (int)\App\Models\FilmView::whereBetween('date', [$twoMonthsAgo->startOfMonth()->format('Y-m-d'), $twoMonthsAgo->endOfMonth()->format('Y-m-d')])->sum('unique_views');
$viewsUniqueLastMonth = (int)\App\Models\FilmView::whereBetween('date', [$lastMonthsAgo->startOfMonth()->format('Y-m-d'), $lastMonthsAgo->endOfMonth()->format('Y-m-d')])->sum('unique_views');
$viewsUniqueThisMonth = (int)\App\Models\FilmView::whereYear('date', now()->year)->whereMonth('date', now()->month)->sum('unique_views');
$viewsUnique = [$viewsUnique2MonthsAgo, $viewsUniqueLastMonth, $viewsUniqueThisMonth];

//************************************************************************************************

//Visits Data
$visits2MonthsAgo = (int)\App\Models\WebsiteVisit::whereBetween('date', [$twoMonthsAgo->startOfMonth()->format('Y-m-d'), $twoMonthsAgo->endOfMonth()->format('Y-m-d')])->sum('visits');
$visitsLastMonth =(int) \App\Models\WebsiteVisit::whereBetween('date', [$lastMonthsAgo->startOfMonth()->format('Y-m-d'), $lastMonthsAgo->endOfMonth()->format('Y-m-d')])->sum('visits');
$visitsThisMonth = (int)\App\Models\WebsiteVisit::whereYear('date', now()->year)->whereMonth('date', now()->month)->sum('visits');
$visits = [$visits2MonthsAgo, $visitsLastMonth, $visitsThisMonth];
$visitsUnique2MonthsAgo =(int) \App\Models\WebsiteVisit::whereBetween('date', [$twoMonthsAgo->startOfMonth()->format('Y-m-d'), $twoMonthsAgo->endOfMonth()->format('Y-m-d')])->sum('unique_visits');
$visitsUniqueLastMonth = (int)\App\Models\WebsiteVisit::whereBetween('date', [$lastMonthsAgo->startOfMonth()->format('Y-m-d'), $lastMonthsAgo->endOfMonth()->format('Y-m-d')])->sum('unique_visits');
$visitsUniqueThisMonth = (int)\App\Models\WebsiteVisit::whereYear('date', now()->year)->whereMonth('date', now()->month)->sum('unique_visits');
$visitsUnique = [$visitsUnique2MonthsAgo, $visitsUniqueLastMonth, $visitsUniqueThisMonth];
?>

    <!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PhimCu</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/plugins/select2/css/select2.min.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/css/bootstrap-select.min.css"
          integrity="sha512-mR/b5Y7FRsKqrYZou7uysnOdCIJib/7r5QeJMFvLNHNhtye3xJp1TdJVPLtetkukFn227nKpXD9OjUc09lx97Q=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"/>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item dropdown">
                <ul>
                    @auth
                        <li class="btn btn-lg btn-primary">
                            <button href="#" class="btn">{{ auth()->user()->name }}</button>
                        </li>
                        <li class="btn btn-lg btn-outline-warning"><a href="{{ route('logout') }}" class="btn"
                                                                      onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng
                                xuất</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endauth
                </ul>

        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin.dashboard')}}" class="brand-link">
            <img src="{{asset('user/img/logo.png')}}" alt="PhimCu Logo" class="brand-image elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">PhimCu-Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    {{--Dashboard--}}
                    <li class="nav-item">
                        <a href="{{route('admin.dashboard')}}" class="nav-link">
                            <p>Dashboard</p>
                        </a>
                    </li>
                    {{--Actor--}}
                    <li class="nav-item">
                        <a href="{{route('admin.actor.list')}}" class="nav-link">
                            <p>Actor</p>
                        </a>
                    </li>

                    {{--Category--}}
                    <li class="nav-item">
                        <a href="{{route('admin.category.list')}}" class="nav-link">
                            <p>Category</p>
                        </a>
                    </li>
                    {{--Country--}}
                    <li class="nav-item">
                        <a href="{{route('admin.country.list')}}" class="nav-link">
                            <p>Country</p>
                        </a>
                    </li>
                    {{--Director--}}
                    <li class="nav-item">
                        <a href="{{route('admin.director.list')}}" class="nav-link">
                            <p>Director</p>
                        </a>
                    </li>
                    {{--User--}}
                    <li class="nav-item">
                        <a href="{{route('admin.user.list')}}" class="nav-link ">
                            <p>User</p>
                        </a>
                    </li>
                    {{--Film--}}
                    <li class="nav-item">
                        <a href="{{route('admin.film.list')}}" class="nav-link ">
                            <p>Film</p>
                        </a>
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
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">
                            @yield('title','Dashboard')
                        </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        @section('breadcrumb')
                        @show
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if(session()->has('error'))
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                {{ session()->get('error') }}
                            </div>
                        @endif

                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        @section('main-content')
                        @show

                        @section('charts')
                        @show

                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/select2/js/select2.full.js')}}" wfd-invisible="true"></script>
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta2/js/bootstrap-select.min.js"
        integrity="sha512-FHZVRMUW9FsXobt+ONiix6Z0tIkxvQfxtCSirkKc5Sb4TKHmqq1dZa8DphF0XqKb3ldLu/wgMa8mT6uXiLlRlw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(function () {
        $('.select2').select2()
    });
</script>

<script !src="">
    var filmSelected = [];
    $('a[data-target="#modal-info"]').on('click', function () {
        var filmId = $(this).data('film');
        $.ajax({
            url: `http://127.0.0.1:8000/api/getDetails/` + filmId,
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                $('#film-name').text(response.name);
                $('#film-actor').text(response.actors);
                $('#film-category').text(response.categories);
                $('#film-country').text(response.country_id);
                $('#film-director').text(response.director_id);
                $('#film-description').text(response.description);
                $('#film-year').text(response.year);
                $('#film-hot').text(response.is_hot);
                $('#film-oscar').text(response.is_oscar);
            },
            error: function () {
                alert('Có lỗi xảy ra!');
            }
        });
    });

</script>

<script !src="">
    //-------------
    //- VIEW CHART -
    //--------------

    var viewsChartCanvas = $('#viewChart').get(0).getContext('2d')

    var viewsChartData = {
        labels  : ['June', 'July', 'August'],
        datasets: [
            {
                label               : 'Unique Views',
                data                :  <?php echo  json_encode($viewsUnique)?>,

                pointRadius          : false,
                backgroundColor     : 'rgba(60,141,188,0.9)',
                borderColor         : 'rgba(60,141,188,0.8)',
                pointColor          : '#3b8bba',
                pointStrokeColor    : 'rgba(60,141,188,1)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
            },
            {
                label               : 'Views',
                data                : <?php echo  json_encode($views)?>,

                pointRadius         : false,
                backgroundColor     : 'rgba(210, 214, 222, 1)',
                borderColor         : 'rgba(210, 214, 222, 1)',
                pointColor          : 'rgba(210, 214, 222, 1)',
                pointStrokeColor    : '#c1c7d1',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
            },
        ]
    }

    var viewsChartOptions = {

        maintainAspectRatio : false,
        responsive : true,
        legend: {
            display: true
        },
        scales: {
            xAxes: [{
                gridLines : {
                    display : false,
                }
            }],
            yAxes: [{
                gridLines : {
                    display : false,
                }
            }]
        }
    }

    new Chart(viewsChartCanvas, {
        type: 'bar',
        data: viewsChartData,
        options: viewsChartOptions
    })


    //-------------
    //- VISIT CHART -
    //--------------
    var visitsChartCanvas = $('#visitChart').get(0).getContext('2d')

    var visitsChartData = {
        labels  : ['June', 'July', 'August'],
        datasets: [
            {
                label               : 'Unique Visits',
                data                :  <?php echo  json_encode($visitsUnique)?>,

                pointRadius          : false,
                backgroundColor     : 'rgba(220,53,69,0.9)',
                borderColor         : 'rgba(220,53,69,0.8)',
                pointColor          : '#3b8bba',
                pointStrokeColor    : 'rgba(220,53,69,1)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(220,53,69,1)',
            },
            {
                label               : 'Visits',
                data                : <?php echo  json_encode($visits)?>,

                pointRadius         : false,
                backgroundColor     : 'rgba(210, 214, 222, 1)',
                borderColor         : 'rgba(210, 214, 222, 1)',
                pointColor          : 'rgba(210, 214, 222, 1)',
                pointStrokeColor    : '#c1c7d1',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
            },
        ]
    }

    var visitsChartOptions = $.extend(true, {}, viewsChartOptions)


    var visitsChart = new Chart(visitsChartCanvas, {
        type: 'bar',
        data: visitsChartData,
        options: visitsChartOptions
    })

</script>
</body>
</html>
