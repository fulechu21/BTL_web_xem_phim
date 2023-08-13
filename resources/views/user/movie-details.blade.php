@extends('user.layout')
@section('content')

    <div class="container">
        <div class="row container" id="wrapper">
            <div class="halim-panel-filter">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="yoast_breadcrumb hidden-xs"><span><span><a
                                            href="{{route('user.index')}}">Trang chủ</a> » <span><a
                                                href="{{route('user.newFilms')}}">Phim mới</a> » <span
                                                class="breadcrumb_last"
                                                aria-current="page">{{$film->name}}</span></span></span></span></div>
                        </div>
                    </div>
                </div>
                <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
                    <div class="ajax"></div>
                </div>
            </div>
            <main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
                <section id="content" class="test">
                    <div class="clearfix wrap-content">

                        <div class="halim-movie-wrapper">
                            <div class="title-block">
                                <!-- // bredcrumb -->
                            </div>
                            <div class="movie_info col-xs-12">
                                <div class="movie-poster col-md-3">
                                    <img class="movie-thumb"
                                         src="{{ asset('storage/image/'.$film->image)}}"
                                         alt="{{$film->name}}">
                                    <div class="bwa-content">
                                        <div class="loader"></div>
                                        <a href={{route('user.play-movie',['id'=>$film->id])}} class="bwac-btn">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="film-poster col-md-9">
                                    <h1 class="movie-title title-1"
                                        style="display:block;line-height:35px;margin-bottom: -14px;color: #ffed4d;text-transform: uppercase;font-size: 18px;">
                                        {{$film->name}}</h1>
                                    {{--                                    <h2 class="movie-title title-2" style="font-size: 12px;">Black Widow (2021)</h2>--}}
                                    <ul class="list-info-group">
                                        <li class="list-info-group-item"><span>Trạng Thái</span> : <span
                                                class="quality">HD</span><span class="episode">Vietsub</span></li>
                                        <li class="list-info-group-item"><span>Điểm IMDb</span> : <span
                                                class="imdb">7.2</span></li>
                                        <li class="list-info-group-item"><span>Thời lượng</span> : {{$film->duration}}
                                        </li>
                                        <li class="list-info-group-item"><span>Thể loại</span> :
                                            <a href=""
                                               rel="category tag">{{$film->categories()->pluck('name')->implode(', ')}}</a>,

                                        </li>
                                        <li class="list-info-group-item"><span>Quốc gia</span> :
                                            <a href=""
                                               rel="tag">
                                                {{$film->countries()->pluck('name')->implode(',')}}
                                            </a>
                                        </li>
                                        <li class="list-info-group-item"><span>Đạo diễn</span> :
                                            <a class="director"
                                               rel="nofollow"
                                               href=""
                                               title="{{$film->directors()->pluck(('name'))->implode(',')}}">{{$film->directors()->pluck(('name'))->implode(',')}}</a>
                                        </li>
                                        <li class="list-info-group-item last-item"
                                            style="-overflow: hidden;-display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-flex: 1;-webkit-box-orient: vertical;">
                                            <span>Diễn viên</span> :
                                            <a href="" rel="nofollow"
                                               title="C.C. Smiff">{{$film->actors()->pluck('name')->implode(',')}}</a>

                                        </li>
                                    </ul>
                                    <div class="movie-trailer hidden"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div id="halim_trailer"></div>
                        <div class="clearfix"></div>
                        <form method="POST" action="{{ route('addFavorite') }}">
                            @csrf
                            <input type="hidden" name="film_id" value="{{ $film->id }}">
                            @if(auth()->check() && auth()->user()->films()->wherePivot('film_id', $film->id)->exists())
                                <button class="favorite-btn" disabled>Đã thêm phim yêu thích</button>

                            @else
                                <button class="favorite-btn btn-info" data-film-id="{{ $film->id }}">Thêm vào yêu
                                    thích
                                </button>
                            @endif
                        </form>


                        <div class="section-bar clearfix">
                            <h2 class="section-title"><span style="color:#ffed4d">Nội dung phim</span></h2>
                        </div>
                        <div class="entry-content htmlwrap clearfix">
                            <div class="video-item halim-entry-box">
                                <article id="post-38424" class="item-content">
                                    Phim <a href="https://phimhay.co/goa-phu-den-38424/">{{$film->name}}</a>
                                    <p>{{$film->description}}</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="related-movies">
                    <div id="halim_related_movies-2xx" class="wrap-slider">
                        <div class="section-bar clearfix">
                            <h3 class="section-title"><span>CÓ THỂ BẠN MUỐN XEM</span></h3>
                        </div>

                        <div id="halim_related_movies-2" class="owl-carousel owl-theme related-film ">


                        </div>
                        <div class="image-slider filtering">
                            @foreach($filmsHot as $film)
                                <div class="image-item">
                                    <div class="image">
                                        <a href={{route('user.movie-details',['id'=>$film->id])}}> <img
                                                src="{{ asset('storage/image/'.$film->image) }}" alt="{{$film->name}}">
                                        </a>
                                        <p class="entry-title">{{$film->name}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <script>
                            jQuery(document).ready(function ($) {
                                var owl = $('#halim_related_movies-2');
                                owl.owlCarousel({
                                    loop: true,
                                    margin: 4,
                                    autoplay: true,
                                    autoplayTimeout: 4000,
                                    autoplayHoverPause: true,
                                    nav: true,
                                    navText: ['<i class="hl-down-open rotate-left"></i>', '<i class="hl-down-open rotate-right"></i>'],
                                    responsiveClass: true,
                                    responsive: {
                                        0: {
                                            items: 2
                                        },
                                        480: {
                                            items: 3
                                        },
                                        600: {
                                            items: 4
                                        },
                                        1000: {
                                            items: 4
                                        }
                                    }
                                })
                            });

                            $('.click-load').slick({
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                autoplay: true,
                                autoplaySpeed: 2000,
                                pauseOnHover: true,

                            });
                        </script>
                    </div>
                </section>
            </main>
            <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
                <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
                    <div class="section-bar clearfix">
                        <div class="section-title">
                            <span>Top Views</span>
                            {{--                            <ul class="halim-popular-tab" role="tablist">--}}
                            {{--                                <li role="presentation" class="active">--}}
                            {{--                                    <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"--}}
                            {{--                                       data-type="today">Day</a>--}}
                            {{--                                </li>--}}
                            {{--                                <li role="presentation">--}}
                            {{--                                    <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"--}}
                            {{--                                       data-type="week">Week</a>--}}
                            {{--                                </li>--}}
                            {{--                                <li role="presentation">--}}
                            {{--                                    <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10"--}}
                            {{--                                       data-type="month">Month</a>--}}
                            {{--                                </li>--}}
                            {{--                                <li role="presentation">--}}
                            {{--                                    <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="all">All</a>--}}
                            {{--                                </li>--}}
                            {{--                            </ul>--}}
                        </div>
                    </div>
                    <section class="tab-content">
                        <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
                            <div class="halim-ajax-popular-post-loading hidden"></div>
                            <div id="halim-ajax-popular-post" class="popular-post">
                                @foreach($filmsViews as $film)
                                    <div class="item post-37176">
                                        <a href="{{route('user.movie-details',['id'=>$film->id])}}"
                                           title="{{$film->name}}">
                                            <div class="item-link">
                                                <img
                                                    src="{{asset('storage/image/'.$film->image)}}"
                                                    class="lazy post-thumb" alt="{{$film->name}}"
                                                    title="{{$film->name}}"/>
                                            </div>
                                            <p class="title">{{$film->name}}</p>
                                        </a>
                                        <div class="viewsCount" style="color: #9d9d9d;">{{$film->views}} lượt xem</div>
                                        <div style="float: left;">
                                 <span class="user-rate-image post-large-rate stars-large-vang"
                                       style="display: block;/* width: 100%; */">
                                 <span style="width: 0%"></span>
                                 </span>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>

                    </section>
                    <div class="clearfix"></div>
                </div>
            </aside>
        </div>
    </div>

@endsection
