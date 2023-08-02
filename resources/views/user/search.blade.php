@extends('user.layout')
@section('search')
    <div id="search-results">
        <h1>Kết quả tìm kiếm</h1>
{{--        {{dd($films)}}--}}
        @if (count($films) > 0)
            <ul>
                @foreach ($films as $film)
                    <li>{{ $film->name }}</li>
{{--                    <li><img src={{asset('../storage/app/public/image'.$film->image)}} alt="result"></li>--}}
                @endforeach
            </ul>
        @else
            <p>Không tìm thấy kết quả nào.</p>
        @endif
    </div>

@endsection
