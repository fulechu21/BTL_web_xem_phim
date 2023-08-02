@extends('admin.layout')
@section('main-content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('admin.country.create')}}" class="btn btn-info">Thêm mới</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th style="width: 150px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <a href="{{route('admin.country.edit',['id'=>$item->id])}}" class="btn btn-warning">Sửa</a>
                            <a onclick="return confirm('Bạn có chắc muốn xóa ?')"
                               href="{{route('admin.country.delete',['id'=>$item->id])}}"
                               class="btn btn-danger">Xoá</a>
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
@endsection

@section('breadcrumb')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item">
            country
        </li>

    </ol>
@endsection

@section('title')
    List Country
@endsection
