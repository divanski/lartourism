<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Home Sidebar | Unify - Responsive Website Template</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="{{ asset('assets/css/headers/header-default.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/footers/footer-v1.css')}}">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/line-icons/line-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">



    @yield('style')

    <!-- CSS Customization -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css')}}">
</head>

<body>
<div class="wrapper">
    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="/">
                <img src="{{url('assets/img/logo1-default.png')}}" alt="Logo">
            </a>
            <!-- End Logo -->

            <!-- Topbar -->
            <div class="topbar">
                <ul class="loginbar pull-right">
                    {{--<li class="hoverSelector">--}}
                        {{--<i class="fa fa-globe"></i>--}}
                        {{--<a>Languages</a>--}}
                        {{--<ul class="languages hoverSelectorBlock">--}}
                            {{--<li class="active">--}}
                                {{--<a href="#">English <i class="fa fa-check"></i></a>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Spanish</a></li>--}}
                            {{--<li><a href="#">Russian</a></li>--}}
                            {{--<li><a href="#">German</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li class="topbar-devider"></li>--}}
                    <li><a href="page_faq.html">Help</a></li>
                    <li class="topbar-devider"></li>
                    <li><a data-toggle="modal" href="#" data-target="#responsive">Login</a></li>
                        {{--<a href="page_login.html">Login</a></li>--}}
                </ul>
            </div>



            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <!-- Home -->
                    <li class="active">
                        <a href="/">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
        <!--=== End Header ===-->

	@yield('content')
    {{--<li><a data-toggle="modal" href="#" data-target="#responsive">Login</a></li>--}}
    <!-- Bootstrap Modals With Forms -->
    <div class="margin-bottom-40">
        <div class="modal fade" id="responsive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel4">Responsive Modal</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Some Input</h4>
                                <p><input class="form-control" type="text" /></p>
                                <p><input class="form-control" type="text" /></p>
                                <p><input class="form-control" type="text" /></p>
                                <p><input class="form-control" type="text" /></p>
                                <p><input class="form-control" type="text" /></p>
                                <p><input class="form-control" type="text" /></p>
                                <p><input class="form-control" type="text" /></p>
                            </div>
                            <div class="col-md-6">
                                <h4>Some More Input</h4>
                                <p><input class="form-control" type="text" /></p>
                                <p><input class="form-control" type="text" /></p>
                                <p><input class="form-control" type="text" /></p>
                                <p><input class="form-control" type="text" /></p>
                                <p><input class="form-control" type="text" /></p>
                                <p><input class="form-control" type="text" /></p>
                                <p><input class="form-control" type="text" /></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-u btn-u-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn-u btn-u-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bootstrap Modals With Forms -->
	<!--=== Footer Version 1 ===-->
        <div class="footer-v1">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <!-- About -->
                        <div class="col-md-3 md-margin-bottom-40">
                            <a href="/"><img id="logo-footer" class="footer-logo" src="{{ url('assets/img/logo2-default.png') }}" alt=""></a>
                            <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
                            <p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>
                        </div><!--/col-md-3-->
                        <!-- End About -->

                        <!-- Latest -->
                        <div class="col-md-3 md-margin-bottom-40">
                            <div class="posts">
                                <div class="headline"><h2>Latest Posts</h2></div>
                                <ul class="list-unstyled latest-list">
                                    <li>
                                        <a href="#">Incredible content</a>
                                        <small>May 8, 2014</small>
                                    </li>
                                    <li>
                                        <a href="#">Best shoots</a>
                                        <small>June 23, 2014</small>
                                    </li>
                                    <li>
                                        <a href="#">New Terms and Conditions</a>
                                        <small>September 15, 2014</small>
                                    </li>
                                </ul>
                            </div>
                        </div><!--/col-md-3-->
                        <!-- End Latest -->

                        <!-- Link List -->
                        <div class="col-md-3 md-margin-bottom-40">
                            <div class="headline"><h2>Useful Links</h2></div>
                            <ul class="list-unstyled link-list">
                                <li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
                            </ul>
                        </div><!--/col-md-3-->
                        <!-- End Link List -->

                        <!-- Address -->
                        <div class="col-md-3 map-img md-margin-bottom-40">
                            <div class="headline"><h2>Contact Us</h2></div>
                            <address class="md-margin-bottom-40">
                                25, Lorem Lis Street, Orange <br />
                                California, US <br />
                                Phone: 800 123 3456 <br />
                                Fax: 800 123 3456 <br />
                                Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
                            </address>
                        </div><!--/col-md-3-->
                        <!-- End Address -->
                    </div>
                </div>
            </div><!--/footer-->

            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                2015 &copy; All Rights Reserved.
                               <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                            </p>
                        </div>

                        <!-- Social Links -->
                        <div class="col-md-6">
                            <ul class="footer-socials list-inline">
                                <li>
                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                        <i class="fa fa-skype"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social Links -->
                    </div>
                </div>
            </div><!--/copyright-->
        </div>
        <!--=== End Footer Version 1 ===-->
    </div><!--/wrapper-->

    <!-- JS Global Compulsory -->
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="{{ asset('assets/plugins/back-to-top.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/smoothScroll.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>

    @yield('script')

    <!-- JS Customization -->
    <script type="text/javascript" src="{{ asset('assets/js/custom.js')}}"></script>
    <!-- JS Page Level -->
    <script type="text/javascript" src="{{ asset('assets/js/app.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugins/owl-recent-works.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();
            OwlRecentWorks.initOwlRecentWorksV2();

            $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').focus()
            })
        });
    </script>
    <!--[if lt IE 9]>
        <script src="{{ asset('assets/plugins/respond.js')}}"></script>
        <script src="{{ asset('assets/plugins/html5shiv.js')}}"></script>
        <script src="{{ asset('assets/plugins/placeholder-IE-fixes.js')}}"></script>
    <![endif]-->

    </body>
    </html>

