@extends('admin.layout')
@section('title')
    Dashboard
@endsection

@section('main-content')
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$films->sum('views')}}</h3>

                            <p>Views</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-eye"></i>
                        </div>
                        <a type="button" class="small-box-footer" data-toggle="modal" data-target="#modal-info-views">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                        {{--                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>--}}
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{count($films)}}</h3>

                            <p>Films</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-android-film"></i>
                        </div>
                        <a type="button" class="small-box-footer" data-toggle="modal" data-target="#modal-info-films">
                            More info <i class="fas fa-arrow-circle-right"></i></a>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{count($users)}}</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a type="button" class="small-box-footer" data-toggle="modal" data-target="#modal-info-users">
                            More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$visitsToday->unique_visits}}</h3>


                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a type="button" class="small-box-footer" data-toggle="modal" data-target="#modal-info-visits">
                            More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->

        <div class="modal fade" id="modal-info-views" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-info">
                    <div class="modal-header">
                        <h4 class="modal-title" id="film-name">Statistics of views</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card card-info">
                            <div class="card-body">
                                <table class="table table-striped align-middle mb-0 bg-white">
                                    <thead>
                                    <tr>
                                        <th>Views Today</th>
                                        <th>Views This Week</th>
                                        <th>Views This Month</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$viewsToday}}</td>
                                        <td>{{$viewsThisWeek}}</td>
                                        <td>{{$viewsThisMonth}}</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="modal-info-films" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-success">
                    <div class="modal-header">
                        <h4 class="modal-title" id="film-name">Statistics of films</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card card-info">
                            <div class="card-body">
                                <h3 class="text-dark">The highest viewed films</h3>
                                <table class="table table-striped align-middle mb-0 bg-white">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Views</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($filmsViews as $film)
                                        <tr>
                                            <td>{{$film->name}}</td>
                                            <td>{{$film->views}}</td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="modal-info-users" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-warning">
                    <div class="modal-header">
                        <h4 class="modal-title" id="film-name">Statistics of users</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card card-info">
                            <div class="card-body">
                                <h3 class="text-dark">Users registry today</h3>
                                <table class="table table-striped align-middle mb-0 bg-white">
                                    <tr>
                                        <th>Email</th>
                                        <th>Name</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($usersRegisToday as $user)
                                        <tr>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->name}}</td>
                                        </tr>
                                    @endforeach
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="modal fade" id="modal-info-visits" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-danger">
                    <div class="modal-header">
                        <h4 class="modal-title" id="film-name">Statistics of visits</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card card-info">
                            <div class="card-body">
                                <h3 class="text-dark">Users visit today</h3>
                                <table class="table table-striped align-middle mb-0 bg-white">
                                    <tr>
                                        <th>Visits</th>
                                        <th>Users visit</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$visitsToday->visits}}</td>
                                        <td>{{$visitsToday->unique_visits}}</td>

                                    </tr>
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    </section>
@endsection

@section('charts')
    <div class="row">
        <div class="col-md-6">
            <!-- BAR CHART -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Views Chart</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="viewChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-6">
            <!-- LINE CHART -->
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Unique Visitors Chart</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="visitChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>

        </div>

    </div>


@endsection
