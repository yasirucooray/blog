<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>BLOG</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesoeet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="container-fluid header_main">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="logo" href="index.html"><img src="images/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/user-blog">MY Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/user-blog-add">Add Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">LogOut</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="images/serach-icon.png"></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- banner section start -->
        <div class="container-fluid">
            <div class="banner_section layout_padding">
                <h1 class="banner_taital">Welcome <br>blog</h1>
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="image_main">
                                <div class="container">
                                    <img src="../images/img-1.png" class="image_1">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="image_main">
                                <div class="container">
                                    <img src="images/img-1.png" class="image_1">

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="image_main">
                                <div class="container">
                                    <img src="images/img-1.png" class="image_1">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>

    <center>
        <div class="about_section " style="margin-bottom: 10%;">
            @foreach ($posts as $post)
                <div class="col-lg-8 col-sm-12" style=" border-radius: 10px; background-color: rgb(200, 204, 180);text-align:left;">


                    <p class="post_text">Post By : {{ $post->created_at->format('Y-m-d') }}</p>
                    <p class="post_text">Wrriten By : {{ $post->users->name }}</p>
                    <h2 class="most_text">{{ $post->title }}</h2>
                    <p class="lorem_text">{{ $post->content }}</p>
                    <div class="social_icon_main">
                        <div class="social_icon">

                        </div>
                        <form action="/edit" method="GET">
                            @csrf
                            <input name="id" value="{{ $post->id }}" hidden>
                            <div class="read_bt"><button class="btn btn-warning" type="submit">Edit</button></div>
                        </form>
                        <form action="/delete" method="DELETE">
                            @csrf
                            <input name="id" value="{{ $post->id }}" hidden>
                            <div class="read_bt"><button class="btn btn-danger" type="submit">Delete</button></div>
                        </form>
                    </div>

                </div><br>
            @endforeach
        </div>
    </center>
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">

    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">Copyright 2023 All Right Reserved By.</p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
