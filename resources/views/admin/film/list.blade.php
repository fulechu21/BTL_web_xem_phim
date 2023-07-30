@extends('admin.layout')
@section('main-content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.film.create')}}" class="btn btn-info">Thêm mới</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr class="text-center">
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Path</th>
                    <th>Views</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $item)
                    <tr class="align-items-center">
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->image}}</td>
                        <td>{{$item->path}}</td>
                        <td>{{$item->views}}</td>
                        <td>{{$item->duration}}</td>


                        <td class="d-flex  justify-content-around">
                            <a type="button" class="btn btn-info text-center col-4 mr-2" data-toggle="modal" data-target="#modal-info"
                               data-film={{$item->id}} >
                                Chi tiết
                            </a>
                            <a href="{{route('admin.film.edit',['id'=>$item->id])}}" class="btn btn-warning text-center col-4 mr-2" >Sửa</a>
                            <a onclick="return confirm('Bạn có chắc muốn xóa ?')"
                               href="{{route('admin.film.delete',['id'=>$item->id])}}"
                               class="btn btn-danger text-center col-4">Xoá</a>

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                {{$list->links()}}

            </ul>
        </div>
    </div>
    <div class="modal fade" id="modal-info" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-info">
                <div class="modal-header">
                    <h4 class="modal-title" id="film-name">Tên Phim</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-info">
                        <div class="card-body">
                            <div class="text-warning">
                                <p class="fw-bold">Actor: <span class="text-dark" id="film-actor"></span></p>
                            </div>
                            <div class="text-warning">
                                <p class="fw-bold">Category: <span class="text-dark" id="film-category"></span></p>
                            </div>
                            <div class="text-warning">
                                <p class="fw-bold">Country: <span class="text-dark" id="film-country"></span></p>
                            </div>
                            <div class="text-warning">
                                <p class="fw-bold">Director: <span class="text-dark" id="film-director"></span></p>
                            </div>
                            <div class="text-warning">
                                <p class="fw-bold">Description: <span class="text-dark" id="film-description"></span></p>
                            </div>
                            <div class="text-warning">
                                <p class="fw-bold">Year: <span class="text-dark" id="film-year"></span></p>
                            </div>
                            <div class="text-warning">
                                <p class="fw-bold">Is Hot: <span class="text-dark" id="film-hot"></span></p>
                            </div>
                            <div class="text-warning">
                                <p class="fw-bold">Is Oscar: <span class="text-dark" id="film-oscar"></span></p>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item">
            Film
        </li>

    </ol>
@endsection

@section('title')
    List Film
@endsection
