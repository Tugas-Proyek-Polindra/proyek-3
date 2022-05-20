<!DOCTYPE html>
<html lang="en">
<head>

    <title>E-Rapot</title>
    
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Landing PAGE Html5 Template">

    <meta name="keywords" content="landing,startup,flat">

    <meta name="author" content="Made By GN DESIGNS">



    <!-- // PLUGINS (css files) // -->

    <link href="{{asset('assets')}}/js/plugins/bootsnav_files/skins/color.css" rel="stylesheet">

    <link href="{{asset('assets')}}/js/plugins/bootsnav_files/css/animate.css" rel="stylesheet">

    <link href="{{asset('assets')}}/js/plugins/bootsnav_files/css/bootsnav.css" rel="stylesheet">

    <link href="{{asset('assets')}}/js/plugins/bootsnav_files/css/overwrite.css" rel="stylesheet">

    <link href="{{asset('assets')}}/js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

    <link href="{{asset('assets')}}/js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

    <link href="{{asset('assets')}}/js/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">

    <link href="{{asset('assets')}}/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

    <!--// ICONS //-->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--// BOOTSTRAP & Main //-->

    <link href="{{asset('assets')}}/bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{asset('assets')}}/css/main.css" rel="stylesheet">

</head>



<body>



    <!--======================================== 

           Preloader

    ========================================-->

    {{-- <div class="page-preloader">

        <div class="spinner">

            <div class="rect1"></div>

            <div class="rect2"></div>

            <div class="rect3"></div>

            <div class="rect4"></div>

            <div class="rect5"></div>

        </div>

    </div> --}}



    <!--======================================== 

           Header

    ========================================-->



    <!--//** Navigation**//-->

    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">



        <div class="container">

            <!-- Start Header Navigation -->

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">

                    <i class="fa fa-bars"></i>

                </button>

                <a class="navbar-brand" href="#brand">

                    <img src="{{asset('assets')}}/img/logo.png" class="logo" alt="logo">

                </a>

            </div>

            <!-- End Header Navigation -->



            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse" id="navbar-menu">

                <ul class="nav navbar-nav navbar-right">

                    <li class="active scroll"><a href="#home">Home</a></li>
                    
                    <li class="scroll"><a href="#services">Fasilitas</a></li>
    
                    <li>
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                    </li>


                </ul>

            </div>

        </div>

    </nav>



    <!--//** Banner**//-->

    <section id="home">

        <div class="container">

            <div class="row">

                <div id="particles-js"></div>

                <!-- Introduction -->


                <!-- Sign Up -->

               <!-- <div class="col-md-5 col-md-offset-1">

                    <form class="signup-form">

                        <h2 class="text-center">Signup Now</h2>

                        <hr>

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Full Name" required="required">

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control" placeholder="Email Address" required="required">

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="User Name" required="required">

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Password" required="required">

                        </div>

                        <div class="form-group text-center">

                            <button type="submit" class="btn btn-blue btn-block">Start Now</button>

                        </div>

                    </form>

                </div>

            </div>-->

        </div>



    </section>


    <!--======================================== 

           Story

    ========================================-->



    <section id="story">

        <div class="container-fluid">

            <div class="row">

                <!-- Img -->

                <div class="col-md-6 story-bg">

                </div>

    <!-- Story Caption -->

    <div class="col-md-6">

                    <div class="story-content">

                        <h2>Pentingnya Pendidikan</h2>

                        <p class="story-quote">

                            " Pendidikan melahirkan kepercayaan. Keyakinan melahirkan harapan. Harapan melahirkan perdamaian."

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!--======================================== 

           Services

    ========================================-->



    <section id="services" class="section-padding">

        <div class="container">

            <h2>Madrasah Al-Barokah</h2>

            <p>Madrasah yang diperuntukkan untuk anak-anak usia 5-12 Tahun.</p>

            <div class="row">

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="material-icons">apartment</i>

                        <h4>Mudah Diakses</h4>

                        <p>Terletak diwilayah yang mudah diakses.</p>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="material-icons">school</i>

                        <h4>Berafiliasi dengan Kementrian Agama</h4>

                        <p>Memiliki keterkaitan dengan Kementrian Agama.</p>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="material-icons">mosque</i>

                        <h4>Memiliki fasilitas yang lengkap.</h4>

                        <p>Banyak fasilitas yang tersedia untuk menunjang kebutuhan madrasah.</p>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="icon-box">

                        <i class="material-icons">books</i>

                        <h4>Materi pelajaran yang menarik.</h4>

                        <p>Materi pelajaran disesuaikan dengan kebutuhan sosial masyarakat..</p>

                    </div>

                </div>

            </div>

        </div>

    </section>





    <!--======================================== 

           Footer

    ========================================-->



    <footer>

        <div class="container">

            <div class="row">

                <div class="footer-caption">

                    <img src="{{asset('assets')}}/img/logo.png" class="img-responsive center-block" alt="logo">

                    <hr>

                    <h5 class="pull-left">Kelompok 4, &copy;2021 All rights reserved</h5>


                </div>

            </div>

        </div>

    </footer>



    <!--======================================== 

           Modal

    ========================================-->

    <!-- Modal -->



    <div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h4 class="modal-title text-center" id="myModalLabel">Sign In</h4>
                    @if (Route::has('login'))
                
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                          

                </div>

                <div class="modal-body">

                    <form class="signup-form">

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="User Name" required="required">

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" placeholder="Password" required="required">

                        </div>

                        <div class="form-group text-center">

                            <button type="submit" class="btn btn-blue btn-block">Log In</button>

                        </div>

                    </form>

                </div>

                <div class="modal-footer text-center">

                    <a href="#">Forgot your password /</a>

                    <a href="#">Signup</a>

                </div>

            </div>

        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <script src="{{asset('assets')}}/bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <script src="{{asset('assets')}}/js/plugins/owl-carousel/owl.carousel.min.js"></script>

    <script src="{{asset('assets')}}/js/plugins/bootsnav_files/js/bootsnav.js"></script>

    <script src="{{asset('assets')}}/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <script src="{{asset('assets')}}/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>

    <script src="{{asset('assets')}}/js/plugins/particles.js-master/particles.js-master/particles.min.js"></script>

    <script src="{{asset('assets')}}/js/particales-script.js"></script>

    <script src="{{asset('assets')}}/js/main.js"></script>

</body>



</html>