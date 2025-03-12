<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700"
        rel="stylesheet">
    <link href="/template-free-user/css/bootstrap.css" rel="stylesheet" />
    <link href="/template-free-user/css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/template-free-user/css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="/template-free-user/css/jcarousel.css" rel="stylesheet" />
    <link href="/template-free-user/css/flexslider.css" rel="stylesheet" />
    <link href="/template-free-user/css/style.css" rel="stylesheet" />
    <!-- Theme skin -->
    <link href="template-free-user/skins/default.css" rel="stylesheet" />
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="ico/favicon.png" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
    <div id="wrapper">
        <!-- toggle top area -->
        <div class="hidden-top">
            <div class="hidden-top-inner container">
                <div class="row">
                    <div class="span12">
                        <ul>
                            <li>Alamat Kantor: Kantor</li>
                            <li>Call us <i class="icon-phone"></i> {{$dataUsaha->nomer_telepon}} </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end toggle top area -->
        <!-- start header -->
        <header>
            <div class="container ">
                <!-- hidden top area toggle link -->
                <div id="header-hidden-link">
                    <a href="#" class="toggle-link" title="Click me you'll get a surprise"
                        data-target=".hidden-top"><i></i>Open</a>
                </div>
                <!-- end toggle link -->
                <div class="row nomargin">
                    <div class="span12">
                        <div class="headnav">
                            {{-- <ul>
                                <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
                                <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
                            </ul> --}}
                        </div>
                        <!-- Signup Modal -->
                        <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog"
                            aria-labelledby="mySignupModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label" for="inputEmail">Email</label>
                                        <div class="controls">
                                            <input type="text" id="inputEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputSignupPassword">Password</label>
                                        <div class="controls">
                                            <input type="password" id="inputSignupPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                                        <div class="controls">
                                            <input type="password" id="inputSignupPassword2" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" class="btn">Sign up</button>
                                        </div>
                                        <p class="aligncenter margintop20">
                                            Already have an account? <a href="#mySignin" data-dismiss="modal"
                                                aria-hidden="true" data-toggle="modal">Sign in</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end signup modal -->
                        <!-- Sign in Modal -->
                        <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog"
                            aria-labelledby="mySigninModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">×</button>
                                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label" for="inputText">Username</label>
                                        <div class="controls">
                                            <input type="text" id="inputText" placeholder="Username">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="inputSigninPassword">Password</label>
                                        <div class="controls">
                                            <input type="password" id="inputSigninPassword" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" class="btn">Sign in</button>
                                        </div>
                                        <p class="aligncenter margintop20">
                                            Forgot password? <a href="#myReset" data-dismiss="modal"
                                                aria-hidden="true" data-toggle="modal">Reset</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end signin modal -->
                        <!-- Reset Modal -->
                        <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog"
                            aria-labelledby="myResetModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                    aria-hidden="true">×</button>
                                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label" for="inputResetEmail">Email</label>
                                        <div class="controls">
                                            <input type="text" id="inputResetEmail" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" class="btn">Reset password</button>
                                        </div>
                                        <p class="aligncenter margintop20">
                                            We will send instructions on how to reset your password to your inbox
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end reset modal -->
                    </div>
                </div>
                <div class="row">
                    <div class="span4">
                        <div class="logo">
                            {{-- <a href="index.html"><img src="/template-free-user/img/logo.png" alt=""
                                    class="logo" /></a> --}}
                            <h1>Ratna Education</h1>
                        </div>
                    </div>
                    <div class="span8">
                        <div class="navbar navbar-static-top">
                            <div class="navigation">
                                <nav>
                                    <ul class="nav topnav">
                                        <li class="{{ Request::is('/beranda') ? 'active' : '' }} ">
                                            <a href="{{ url('/beranda') }}">Beranda </a>
                                        </li>
                                        <li class="{{ Request::is('tentang-perusahaan') ? 'active' : '' }}">
                                            <a href="{{ url('/tentang-perusahaan') }}">Tentang Perusahaan </a>
                                        </li>
                                        <li class="{{ Request::is('layanan') ? 'active' : '' }}">
                                            <a href="{{ url('/layanan') }}">Layanan </a>
                                        </li>
                                        <li class="{{ Request::is('berita') ? 'active' : '' }}">
                                            <a href="{{ url('/berita') }}">Berita </a>
                                        </li>
                                        <li class="{{ Request::is('kritik-saran') ? 'active' : '' }}">
                                            <a href="{{ url('/kritik-saran') }}">Kritik/Saran </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- end navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->
        {{-- Start Content --}}
        @yield('content')
        {{-- End Content --}}
        <footer>
            <div class="container">
                <div class="row">
                    <!-- Tentang Perusahaan -->
                    <div class="span4">
                        <div class="widget">
                            <h5 class="widgetheading">Tentang Perusahaan</h5>
                            <p>{!! $dataUsaha->tentang_usaha !!}</p>

                            {{-- <p>
                                Ratna Education adalah platform yang menyediakan berbagai layanan pendidikan seperti bimbingan mahasiswa, bimbingan umum, penyusunan artikel ilmiah, pengolahan data, dan layanan percetakan. Kami berkomitmen untuk membantu meningkatkan kualitas pendidikan dan memberikan solusi terbaik bagi kebutuhan akademik Anda.
                            </p> --}}
                        </div>
                    </div>

                    <!-- Maps Perusahaan dengan Marker -->
                    <div class="span8">
                        <div class="widget">
                            <h5 class="widgetheading">Lokasi Kami</h5>
                            <!-- Embed Google Maps dengan Marker -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11014.670797295702!2d114.80554134826764!3d-3.7918038319992613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708d8d48a58299%3A0xd3dbb47a5e34d5fe!2sSpringville%20Center!5e0!3m2!1sen!2sid!4v1649350148363!5m2!1sen!2sid&markers=-3.7918038319992613,114.80554134826764"
                                width="100%" height="400" style="border:0;" allowfullscreen=""
                                loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div id="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <div class="copyright">
                                <p><span>&copy; Ratna Education</span></p>
                                <div class="credits">
                                    Designed by <a href="https://bootstrapmade.com/">Batuah Talenta Semesta</a>
                                </div>
                            </div>
                        </div>
                        <div class="span6">
                            <ul class="social-network">
                                <li><a href="#" data-placement="bottom" title="Facebook"><i
                                            class="icon-facebook icon-square"></i></a></li>
                                <li><a href="#" data-placement="bottom" title="Twitter"><i
                                            class="icon-twitter icon-square"></i></a></li>
                                <li><a href="#" data-placement="bottom" title="Linkedin"><i
                                            class="icon-linkedin icon-square"></i></a></li>
                                <li><a href="#" data-placement="bottom" title="Pinterest"><i
                                            class="icon-pinterest icon-square"></i></a></li>
                                <li><a href="#" data-placement="bottom" title="Google Plus"><i
                                            class="icon-google-plus icon-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/template-free-user/js/jquery.js"></script>
    <script src="/template-free-user/js/jquery.easing.1.3.js"></script>
    <script src="/template-free-user/js/bootstrap.js"></script>
    <script src="/template-free-user/js/jcarousel/jquery.jcarousel.min.js"></script>
    <script src="/template-free-user/js/jquery.fancybox.pack.js"></script>
    <script src="/template-free-user/js/jquery.fancybox-media.js"></script>
    <script src="/template-free-user/js/google-code-prettify/prettify.js"></script>
    <script src="/template-free-user/js/portfolio/jquery.quicksand.js"></script>
    <script src="/template-free-user/js/portfolio/setting.js"></script>
    <script src="/template-free-user/js/jquery.flexslider.js"></script>
    <script src="/template-free-user/js/jquery.nivo.slider.js"></script>
    <script src="/template-free-user/js/modernizr.custom.js"></script>
    <script src="/template-free-user/js/jquery.ba-cond.min.js"></script>
    <script src="/template-free-user/js/jquery.slitslider.js"></script>
    <script src="/template-free-user/js/animate.js"></script>

    <!-- Template Custom JavaScript File -->
    <script src="/template-free-user/js/custom.js"></script>

</body>

</html>
