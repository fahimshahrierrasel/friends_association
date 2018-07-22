<!DOCTYPE html>

<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Be</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet'
          href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic'>
    <link rel='stylesheet'
          href='http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic,700,700italic'>

    <!-- CSS -->
    <link rel='stylesheet' href='{{ asset('css/global.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/structure.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/finance.css') }}'>
    <link rel='stylesheet' href='{{ asset('css/custom.css') }}'>

    @yield('additional_css')

</head>

<body class="home page layout-boxed header-classic minimalist-header header-menu-right sticky-header sticky-white hide-title-area subheader-title-left button-stroke no-content-padding">
<!-- Main Theme Wrapper -->
<div id="Wrapper">
    <!-- Header Wrapper -->
    <div id="Header_wrapper">
        <!-- Header -->
        <header id="Header">

            <!-- Header -  Logo and Menu area -->
            <div id="Top_bar">
                <div class="container">
                    <div class="column one">
                        <div class="top_bar_left clearfix">
                            <!-- Logo-->
                            <div class="logo">
                                <h1><a id="logo" href="{{ url('/') }}" title="BeFinance - BeTheme"><img
                                                class="scale-with-grid" src="{{ asset('images/finance.png') }}"
                                                alt="BeFinance - BeTheme"/></a></h1>
                            </div>
                            <!-- Main menu-->
                            <div class="menu_wrapper">
                                <nav id="menu">
                                    <ul id="menu-main-menu" class="menu">
                                        <li class="{{ Request::is("/") ? "current_page_item" : "" }}">
                                            <a href="{{ url('/') }}"><span>Home</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/') }}"><span>About us</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/') }}"><span>Offer</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/') }}"><span>Testimonials</span></a>
                                        </li>
                                        <li class="{{ Request::is("contact-us") ? "current_page_item" : "" }}">
                                            <a href="{{ url('/contact-us') }}"><span>Contact us</span></a>
                                        </li>
                                        <li class="{{ Request::is("become-member") ? "hidden-lg hidden-md hidden-sm hidden-xs" : "" }}">
                                            <a href="{{ url('/become-member') }}"><span>Become Member</span></a>
                                        </li>
                                    </ul>
                                </nav>
                                <a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                            </div>
                            <!-- Header Searchform area-->
                            <div class="search_wrapper">
                                <form method="get" action="#">
                                    <i class="icon_search icon-search"></i><a href="#" class="icon_close"><i
                                                class="icon-cancel"></i></a>
                                    <input type="text" class="field" name="s" placeholder="Enter your search"/>
                                    <input type="submit" class="submit flv_disp_none" value=""/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- Main Content -->
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer id="Footer" class="clearfix">
        <div class="widgets_wrapper">
            <div class="container">
                <div class="one-third column">
                    <!-- Text Area -->
                    <aside class="widget widget_text">
                        <h4>Bibendum auctor</h4>
                        <div class="textwidget">
                            Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum
                            feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.
                        </div>
                    </aside>
                </div>
                <div class="one-third column">
                    <!-- Text Area -->
                    <aside class="widget widget_text">
                        <h4>Aliquam erat</h4>
                        <div class="textwidget">
                            Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum
                            auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet.
                        </div>
                    </aside>
                </div>
                <div class="one-third column">
                    <!-- Text Area -->
                    <aside class="widget widget_text">
                        <h4> Nullam wisi</h4>
                        <div class="textwidget">
                            Nullam viverra consectetuer. Quisque cursus et, porttitor risus. Aliquam sem. In hendrerit
                            nulla quam nunc, accumsan congue. Lorem ipsum primis in nibh vel risus. Sed vel lectus.
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <!-- Footer copyright-->
        <div class="footer_copy">
            <div class="container">
                <div class="column one">
                    <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i
                                    class="icon-up-open-big"></i></span></a>
                    <div class="copyright">
                        &copy; 2017 BeFinance - BeTheme. Muffin group - HTML by <a target="_blank" rel="nofollow"
                                                                                   href="http://bit.ly/1M6lijQ">BeantownThemes</a>
                    </div>
                    <!--Social info area-->
                    <ul class="social"></ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- JS -->
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>

<script src="{{ asset('js/mfn.menu.js') }}"></script>
<script src="{{ asset('js/jquery.plugins.js') }}"></script>
<script src="{{ asset('js/jquery.jplayer.min.js') }}"></script>
<script src="{{ asset('js/animations/animations.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>

<script>
    jQuery(window).load(function () {
        var retina = window.devicePixelRatio > 1 ? true : false;
        if (retina) {
            var retinaEl = jQuery("#logo img");
            var retinaLogoW = retinaEl.width();
            var retinaLogoH = retinaEl.height();
            retinaEl.attr("src", "images/retina-finance.png").width(retinaLogoW).height(retinaLogoH)
        }
    });
</script>

@yield('additional_js')

</body>

</html>