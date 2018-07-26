@extends('landing.layouts.master')

@section('additional_css')
    <link rel="stylesheet" href="{{ asset('assets/css/Features-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Testimonials.css') }}">
@endsection

@section('content')
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img class="w-100 d-block"
                                                   src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600"
                                                   alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block"
                                            src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600"
                                            alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block"
                                            src="http://placeholdit.imgix.net/~text?txtsize=42&amp;txt=Carousel+Image&amp;w=1400&amp;h=600"
                                            alt="Slide Image"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span
                        class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a
                    class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span
                        class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol
                class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
        </ol>
    </div>
    <div class="features-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Services</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh
                    erat,
                    pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-map-marker icon"></i>
                    <h3 class="name">Works everywhere</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent
                        aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name">Always available</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent
                        aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-list-alt icon"></i>
                    <h3 class="name">Customizable</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent
                        aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-leaf icon"></i>
                    <h3 class="name">Organic</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent
                        aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-plane icon"></i>
                    <h3 class="name">Fast</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent
                        aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-phone icon"></i>
                    <h3 class="name">Mobile-first</h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent
                        aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="highlight-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Join the Family</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh
                    erat,
                    pellentesque ut laoreet vitae. </p>
            </div>
            <div class="buttons"><a class="btn btn-primary" role="button" href="#">BeCome Member</a>
                <button class="btn btn-primary" type="button">Become Borrower</button>
            </div>
        </div>
    </div>
    <div class="testimonials-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Testimonials </h2>
                <p class="text-center">Our customers love us! Read what they have to say below. Aliquam sed justo
                    ligula.
                    Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
            </div>
            <div class="row people">
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus.
                            Praesent
                            aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/1.jpg">
                        <h5 class="name">Ben Johnson</h5>
                        <p class="title">CEO of Company Inc.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et
                            interdum justo suscipit id.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/3.jpg">
                        <h5 class="name">Carl Kent</h5>
                        <p class="title">Founder of Style Co.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 item">
                    <div class="box">
                        <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate quis
                            leo
                            in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                    </div>
                    <div class="author"><img class="rounded-circle" src="assets/img/2.jpg">
                        <h5 class="name">Emily Clark</h5>
                        <p class="title">Owner of Creative Ltd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
