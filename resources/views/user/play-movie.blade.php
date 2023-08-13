@extends('user.layout')
@section('content')
    <div class="container">
        <div class="row container" id="wrapper">
            <div class="halim-panel-filter">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="yoast_breadcrumb hidden-xs"><span><span><a href="">Phim hay</a> » <span><a
                                                href="{{route('user.newFilms')}}">Trung Quốc</a> » <span
                                                class="breadcrumb_last"
                                                aria-current="page">{{$filmPlay->name}}</span></span></span></span>
                            </div>
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

                        <iframe width="100%" height="500" src="https://www.youtube.com/embed/jwiYWq43FMs"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>

                        <div class="button-watch">
                            <ul class="halim-social-plugin col-xs-4 hidden-xs">
                                <li class="fb-like" data-href="" data-layout="button_count" data-action="like"
                                    data-size="small" data-show-faces="true" data-share="true"></li>
                            </ul>
                        </div>
                        <div class="collapse" id="moretool">
                            <ul class="nav nav-pills x-nav-justified">
                                <li class="fb-like" data-href="" data-layout="button_count" data-action="like"
                                    data-size="small" data-show-faces="true" data-share="true"></li>
                                <div class="fb-save" data-uri="" data-size="small"></div>
                            </ul>
                        </div>

                        <div class="clearfix"></div>
                        <div class="clearfix"></div>

                        <div class="entry-content htmlwrap clearfix collapse" id="expand-post-content">
                            <article id="post-37976" class="item-content post-37976"></article>
                        </div>
                        <div class="clearfix"></div>
                        <div class="text-center">
                            <div id="halim-ajax-list-server"></div>
                        </div>
                        <div id="halim-list-server">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active server-1">
                                    <a href="#server-0" aria-controls="server-0" role="tab"
                                       data-toggle="tab"><i class="hl-server"></i> Vietsub
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active server-1" id="server-0">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="htmlwrap clearfix">
                            <div id="lightout"></div>
                        </div>
                    </div>
                </section>


                <section class="related-movies">
                    <div id="halim_related_movies-2xx" class="wrap-slider">
                        <div class="section-bar clearfix">
                            <h3 class="section-title"><span>CÓ THỂ BẠN MUỐN XEM</span></h3>
                        </div>
                        <div id="halim_related_movies-2" class="owl-carousel owl-theme related-film">


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
                                    responsive: {0: {items: 2}, 480: {items: 3}, 600: {items: 4}, 1000: {items: 4}}
                                })
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
