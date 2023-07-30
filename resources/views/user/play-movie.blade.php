@extends('user.layout')
@section('content')
    <div class="container">
        <div class="row container" id="wrapper">
            <div class="halim-panel-filter">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="yoast_breadcrumb hidden-xs"><span><span><a href="{{route('user.index')}}">Trang chủ</a> » <span
                                            class="breadcrumb_last" aria-current="page">Phim mới</span></span></span></div>
                        </div>
                    </div>
                </div>
                <div id="ajax-filter" class="panel-collapse collapse" aria-expanded="true" role="menu">
                    <div class="ajax"></div>
                </div>
            </div>
            <main id="main-contents" class="col-xs-12 col-sm-12 col-md-8">
                <section>
                    <div class="section-bar clearfix">
                        <h1 class="section-title"><span>Phim 2020</span></h1>
                    </div>
                    <div class="halim_box">

                        @foreach($films as $film)
                            <article class="col-md-3 col-sm-3 col-xs-6 thumb grid-item post-27021">
                                <div class="halim-item">
                                    <a class="halim-thumb" href="{{route('user.movie-details',['id'=>$film->id])}}"
                                       title="{{$film->name}}">
                                        <figure><img class="lazy img-responsive"
                                                     src="{{ asset('storage/image/'.$film->image) }}"
                                                     alt="{{$film->name}}" title="{{$film->name}}"></figure>
                                        <span class="status">5/5</span><span class="episode"><i class="fa fa-play"
                                                                                                aria-hidden="true"></i>Vietsub</span>
                                        <div class="icon_overlay"></div>
                                        <div class="halim-post-title-box">
                                            <div class="halim-post-title ">
                                                <p class="entry-title">{{$film->name}}</p>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </article>
                        @endforeach

                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        <ul class='page-numbers'>
                            {{$films->links()}}
                        </ul>
                    </div>
                </section>
            </main>
            <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
                <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
                    <div class="section-bar clearfix">
                        <div class="section-title">
                            <span>Top Views</span>
                            {{--                        <ul class="halim-popular-tab" role="tablist">--}}
                            {{--                           <li role="presentation" class="active">--}}
                            {{--                              <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="today">Day</a>--}}
                            {{--                           </li>--}}
                            {{--                           <li role="presentation">--}}
                            {{--                              <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="week">Week</a>--}}
                            {{--                           </li>--}}
                            {{--                           <li role="presentation">--}}
                            {{--                              <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="month">Month</a>--}}
                            {{--                           </li>--}}
                            {{--                           <li role="presentation">--}}
                            {{--                              <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="all">All</a>--}}
                            {{--                           </li>--}}
                            {{--                        </ul>--}}
                        </div>
                    </div>
                    <section class="tab-content">
                        <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
                            <div class="halim-ajax-popular-post-loading hidden"></div>
                            <div id="halim-ajax-popular-post" class="popular-post">

                                @foreach($filmsViews as $film)
                                    <div class="item post-37176">
                                        <a href="{{route('user.play-movie',['id'=>$film->id])}}"
                                           title="{{$film->name}}">
                                            <div class="item-link">
                                                <img src="{{ asset('storage/image/'.$film->image) }}"
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
