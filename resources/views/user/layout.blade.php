
<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="utf-8"/>
    <meta content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta name="theme-color" content="#234556">
    <meta http-equiv="Content-Language" content="vi"/>
    <meta content="VN" name="geo.region"/>
    <meta name="DC.language" scheme="utf-8" content="vi"/>
    <meta name="language" content="Việt Nam">


    <link rel="shortcut icon"
          href="https://www.pngkey.com/png/detail/360-3601772_your-logo-here-your-company-logo-here-png.png"
          type="image/x-icon"/>
    <meta name="revisit-after" content="1 days"/>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
    <title>CineCast</title>
    <meta name="description"
          content="Phim hay 2021 - Xem phim hay nhất, xem phim online miễn phí, phim hot , phim nhanh"/>
    <link rel="canonical" href="">
    <link rel="next" href=""/>
    <meta property="og:locale" content="vi_VN"/>
    <meta property="og:title" content="Phim hay 2020 - Xem phim hay nhất"/>
    <meta property="og:description"
          content="Phim hay 2023 - Xem phim hay nhất, phim hay trung quốc, hàn quốc, việt nam, mỹ, hong kong , chiếu rạp"/>
    <meta property="og:url" content=""/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
          integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
          integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel='dns-prefetch' href='//s.w.org'/>

    <link rel='stylesheet' id='bootstrap-css' href={{asset('user/css/bootstrap.min.css?ver=5.7.2')}} media='all'/>
    <link rel='stylesheet' id='style-css' href="{{asset('user/css/style.css?ver=5.7.2')}}" media='all'/>
    <link rel='stylesheet' id='wp-block-library-css' href={{asset('user/css/style.min.css?ver=5.7.2')}} media='all'/>
    <script type='text/javascript' src={{asset('user/js/jquery.min.js?ver=5.7.2')}} id='halim-jquery-js'></script>
    <link rel="stylesheet" type="text/css" href="node_modules/slick-carousel/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="node_modules/slick-carousel/slick/slick-theme.css"/>
    <script type="text/javascript" src="node_modules/slick-carousel/slick/slick.min.js"></script>
    <link rel="stylesheet" href="{{asset("user/css/app.css")}}">

    <style type="text/css" id="wp-custom-css">
        .textwidget p a img {
            width: 100%;
        }
    </style>
    <style>#header .site-title {
            background: url(http://localhost:8000/user/img/logo.png) no-repeat top left;
            background-size: contain;
            text-indent: -9999px;
        }</style>
</head>
<body class="home blog halimthemes halimmovies" data-masonry="">

<!--start header-->
<header id="header">
    <div class="container">
        <div class="row" id="headwrap">
            <div class="col-md-3 col-sm-6 slogan" style="margin: auto">
                <p class="site-title"><a class="logo" href="{{route('user.index')}}" title="phim hay ">Logo
                    </a></p>
            </div>
            <div class="col-md-5 col-sm-6 halim-search-form hidden-xs">
                <div class="header-nav">
                    <div class="col-xs-12">
                        <form id="search-form-pc" name="halimForm" role="search">
                            <div class="form-group">
                                <div class="input-group col-xs-12">
                                    <input id="search" type="text" name="s" class="form-control"
                                           placeholder="Tìm kiếm..." autocomplete="off" required>
                                    <i class="animate-spin hl-spin4 hidden"></i>
                                </div>
                            </div>
                        </form>
                        <ul class="ui-autocomplete ">
                            <div id="search-results" class="">

                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hidden-xs">
                <ul>
                    @auth
                        <li class="btn">
                            <div style="position: relative">
                                <a id="dropdown-toggle" href="#" class="btn btn-warning dropdown-toggle"
                                   data-toggle="dropdown">{{ auth()->user()->name }}</a>
                                <ul class="dropdown-menu" style="width: 100px;position: absolute">
                                    <li><a id="password-reset"
                                           href="{{route("show-change-password")}}">
                                            Đổi mật khẩu</a>
                                    </li>

                                    <li><a href="{{route('user.showFilmFavorite',['id'=>auth()->user()->id])}}">Phim yêu thích</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="btn"><a href="{{ route('logout') }}" class="btn btn-info"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng
                                xuất</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <li class="btn"><a href="{{ route('login') }}" class="btn btn-warning">Đăng nhập</a></li>
                        <li class="btn "><a href="{{ route('register') }}" class="btn btn-info">Đăng ký</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</header>
<div class="navbar-container">
    <div class="container">
        <nav class="navbar halim-navbar main-navigation" role="navigation" data-dropdown-hover="1">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse"
                        data-target="#halim" aria-expanded="true">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="halim" aria-expanded="true">
                <div class="menu-menu_1-container">
                    <ul id="menu-menu_1" class="nav navbar-nav navbar-left">
                        <li class="current-menu-item active"><a title="Trang Chủ" href={{route('user.index')}}>Trang
                                Chủ</a></li>
                        <li class="mega"><a title="Phim Mới"
                                            href={{route('user.newFilms')}}>Phim Mới</a></li>
                        <li class="mega dropdown">
                            <a title="Thể Loại" href="#" data-toggle="dropdown" class="dropdown-toggle"
                               aria-haspopup="true">Thể Loại <span class="caret"></span></a>
                            <ul role="menu" class=" dropdown-menu">
                                <?php $categories = \App\Models\Category::all(); ?>
                                @foreach ($categories as $category)
                                    <li>
                                        <a href={{route('user.filmsCategory',['option'=>$category->id])}}>{{$category->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="mega dropdown">
                            <a title="Quốc Gia" href="#" data-toggle="dropdown" class="dropdown-toggle"
                               aria-haspopup="true">Quốc Gia <span class="caret"></span></a>
                            <ul role="menu" class=" dropdown-menu">
                                <?php $countries = \App\Models\Country::all(); ?>
                                @foreach ($countries as $country)
                                    <li>
                                        <a href={{route('user.filmsCountry',['option'=>$country->id])}}>{{$country->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>
        <div class="collapse navbar-collapse" id="user-info">
            <div id="mobile-user-login"></div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row fullwith-slider"></div>
</div>
<!--end header-->

@section('content')
@show

<style>
    #overlay_mb {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 99999;
        cursor: pointer
    }

    #overlay_mb .overlay_mb_content {
        position: relative;
        height: 100%
    }

    .overlay_mb_block {
        display: inline-block;
        position: relative
    }

    #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
        width: 600px;
        height: auto;
        position: relative;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        text-align: center
    }

    #overlay_mb .overlay_mb_content .cls_ov {
        color: #fff;
        text-align: center;
        cursor: pointer;
        position: absolute;
        top: 5px;
        right: 5px;
        z-index: 999999;
        font-size: 14px;
        padding: 4px 10px;
        border: 1px solid #aeaeae;
        background-color: rgba(0, 0, 0, 0.7)
    }

    #overlay_mb img {
        position: relative;
        z-index: 999
    }

    @media only screen and (max-width: 768px) {
        #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
            width: 400px;
            top: 3%;
            transform: translate(-50%, 3%)
        }
    }

    @media only screen and (max-width: 400px) {
        #overlay_mb .overlay_mb_content .overlay_mb_wrapper {
            width: 310px;
            top: 3%;
            transform: translate(-50%, 3%)
        }
    }</style>

<style>
    #overlay_pc {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 99999;
        cursor: pointer;
    }

    #overlay_pc .overlay_pc_content {
        position: relative;
        height: 100%;
    }

    .overlay_pc_block {
        display: inline-block;
        position: relative;
    }

    #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
        width: 600px;
        height: auto;
        position: relative;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
    }

    #overlay_pc .overlay_pc_content .cls_ov {
        color: #fff;
        text-align: center;
        cursor: pointer;
        position: absolute;
        top: 5px;
        right: 5px;
        z-index: 999999;
        font-size: 14px;
        padding: 4px 10px;
        border: 1px solid #aeaeae;
        background-color: rgba(0, 0, 0, 0.7);
    }

    #overlay_pc img {
        position: relative;
        z-index: 999;
    }

    #search-results {
        position: absolute;
        z-index: 999;
        width: 100%;
        background-color: #1b2d3c;
    }

    @media only screen and (max-width: 768px) {
        #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
            width: 400px;
            top: 3%;
            transform: translate(-50%, 3%);
        }
    }

    @media only screen and (max-width: 400px) {
        #overlay_pc .overlay_pc_content .overlay_pc_wrapper {
            width: 310px;
            top: 3%;
            transform: translate(-50%, 3%);
        }
    }
</style>

<style>
    .float-ck {
        position: fixed;
        bottom: 0px;
        z-index: 9
    }

    /** html .float-ck !* IE6 position fixed Bottom *!*/
    /*{*/
    /*    position: absolute;*/
    /*    bottom: auto;*/
    /*    to: expression(eval (document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)));*/
    /*}*/

    #hide_float_left a {
        background: #0098D2;
        padding: 5px 15px 5px 15px;
        color: #FFF;
        font-weight: 700;
        float: left;
    }

    #hide_float_left_m a {
        background: #0098D2;
        padding: 5px 15px 5px 15px;
        color: #FFF;
        font-weight: 700;
    }

    span.bannermobi2 img {
        height: 70px;
        width: 300px;
    }

    #hide_float_right a {
        background: #01AEF0;
        padding: 5px 5px 1px 5px;
        color: #FFF;
        float: left;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script type='text/javascript' src={{asset('user/js/bootstrap.min.js?ver=5.7.2')}} id='bootstrap-js'></script>
<script type='text/javascript' src={{asset('user/js/owl.carousel.min.js?ver=5.7.2')}} id='carousel-js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
        integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"
        integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type='text/javascript'
        src={{asset('user/js/halimtheme-core.min.js?ver=1626273138')}} id='halim-init-js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>


    $('.filtering').slick({
        slidesToShow: 6,
        slidesToScroll: 4

    });

    var filtered = false;

    $('.js-filter').on('click', function () {
        if (filtered === false) {
            $('.filtering').slick('slickFilter', ':even');
            $(this).text('Unfilter Slides');
            filtered = true;
        } else {
            $('.filtering').slick('slickUnfilter');
            $(this).text('Filter Slides');
            filtered = false;
        }
    });

    $(document).ready(function () {
        $("#search-form-pc").keyup(function (e) {
            e.preventDefault(); // ngăn chặn chuyển hướng đến trang khác khi submit form
            var formData = $('#search').val(); // lấy dữ liệu từ form
            $.ajax({
                type: "GET",
                url: 'http://127.0.0.1:8000/api/do-search',
                data: {s: formData},
                success: function (data) {
                    console.log(data);
                    const nameList = data?.map(function (item) {

                        return `<li style="display: flex;align-items: center;gap: 1rem">
                                    <img src="http://127.0.0.1:8000/storage/image/${item.image}" alt="${item.name}">
                                    <a href="http://127.0.0.1:8000/movie-details/${item.id}">${item.name}</a>
                                </li>`;
                    }).join('');
                    $("#search-results").html(`
                            <h3 style="padding-left: 20px">Kết quả tìm kiếm</h3>
                <ul class="name-list">
                    ${nameList}
                 </ul>
`)
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });
    });
    $('body').on('click', function (e) {
        // Nếu click vào nơi ngoài vùng chứa kết quả
        if (!$(e.target).closest('#search-results').length) {
            // Ẩn kết quả render bằng cách xóa nội dung của thẻ có id là "search-results"
            $('#search-results').html('')
        }
    });

</script>

</body>
</html>
