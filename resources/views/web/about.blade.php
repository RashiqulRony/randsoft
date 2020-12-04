@extends('layouts.web')

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
@endsection

@section('title')
    About
@endsection

@section('content')
    <section class="page-title ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>About Us</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('web.index') }}">Home</a></li>
                        <li class="active">About</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <h2 class="font-30 text-medium mb-30">Welcome to Materialize</h2>
            <div class="row">
                <div class="col-md-7">
                    <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <strong><a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a></strong> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient. Id ac dui libero a ullamcorper euismod himenaeos a nam condimentum a adipiscing dapibus lobortis iaculis morbi.</p>
                    <p>Himenaeos a vestibulum morbi. <strong><a href="#">Ullamcorper cras scelerisque</a></strong> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor tempus a mi ad parturient ad nulla mus amet in penatibus nascetur at vulputate euismod a est tristique scelerisque. Aliquet facilisis nisl vel vestibulum dignissim gravida ullamcorper.</p>
                </div>
                <div class="col-md-5">
                    <div class="gallery-thumb">
                        <ul class="slides">
                            <li data-thumb="{{ asset('web') }}/img/blog/blog-18.jpg">
                                <img src="{{ asset('web') }}/img/blog/blog-18.jpg" alt="image">
                            </li>
                            <li data-thumb="{{ asset('web') }}/img/blog/blog-15.jpg">
                                <img src="{{ asset('web') }}/img/blog/blog-15.jpg" alt="image">
                            </li>
                            <li data-thumb="{{ asset('web') }}/img/blog/blog-10.jpg">
                                <img src="{{ asset('web') }}/img/blog/blog-10.jpg" alt="image">
                            </li>
                            <li data-thumb="{{ asset('web') }}/img/blog/blog-19.jpg">
                                <img src="{{ asset('web') }}/img/blog/blog-19.jpg" alt="image">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-10 bg-fixed parallax-bg ptb-110 overlay light-9" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Awesome skills</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="progress-section">
                        <span class="progress-title">Web Design</span>
                        <div class="progress">
                            <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-section">
                        <span class="progress-title">Mobile Interface</span>
                        <div class="progress">
                            <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                <span>86%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-section">
                        <span class="progress-title">Mobile Interface</span>
                        <div class="progress">
                            <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                <span>86%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="progress-section">
                        <span class="progress-title">Web Design</span>
                        <div class="progress">
                            <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-section">
                        <span class="progress-title">Mobile Interface</span>
                        <div class="progress">
                            <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                <span>86%</span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-section">
                        <span class="progress-title">Mobile Interface</span>
                        <div class="progress">
                            <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                <span>86%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding-top-120 padding-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-medium mb-30">Why Choose Materialize?</h2>
                    <div class="panel-group feature-accordion brand-accordion icon angle-icon" id="accordion-one">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-one" href="#collapse-one">
                                        materialize Mission
                                    </a>
                                </h3>
                            </div>
                            <div id="collapse-one" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed veritatis?
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapse-two">
                                        Super Creative
                                    </a>
                                </h3>
                            </div>
                            <div id="collapse-two" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat obcaecati, beatae. Facilis dolore ipsam facere perferendis deserunt commodi blanditiis nisi accusamus omnis, animi vel tenetur cumque, sed veritatis?
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapse-three">
                                        Awesome Customer Servicers
                                    </a>
                                </h3>
                            </div>
                            <div id="collapse-three" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapse-four">
                                        Hard Working Team
                                    </a>
                                </h3>
                            </div>
                            <div id="collapse-four" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="text-medium mb-30">What People Say</h2>
                    <div id="client-testimonial" class="carousel slide carousel-testimonial text-center gray-bg" data-ride="carousel">

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="avatar">
                                    <img src="{{ asset('web') }}/img/quote-dark.png" alt="Customer Thumb">
                                </div>
                                <div class="content">
                                    <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>
                                    <div class="testimonial-meta brand-color">
                                        Jhon Doe,
                                        <span>User Interface Designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="avatar">
                                    <img src="{{ asset('web') }}/img/quote-dark.png" alt="Customer Thumb">
                                </div>
                                <div class="content">
                                    <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>
                                    <div class="testimonial-meta brand-color">
                                        Elita Chow,
                                        <span>User Interface Designer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="avatar">
                                    <img src="{{ asset('web') }}/img/quote-dark.png" alt="Customer Thumb">
                                </div>
                                <div class="content">
                                    <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>
                                    <div class="testimonial-meta brand-color">
                                        Tomas Hody,
                                        <span>User Interface Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="left carousel-control" href="#client-testimonial" role="button" data-slide="prev">
                            <span class="material-icons" aria-hidden="true">&#xE5C4;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#client-testimonial" role="button" data-slide="next">
                            <span class="material-icons" aria-hidden="true">&#xE5C8;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Creative Team</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
            </div>
            <div class="team-tab" role="tabpanel">

                <ul class="nav nav-tabs nav-justified" role="tablist">
                    <li class="active">
                        <a href="#team-1" data-toggle="tab">
                            <img src="{{ asset('web') }}/img/team/team-1.jpg" class="img-responsive" alt="Image">
                        </a>
                    </li>
                    <li>
                        <a href="#team-2" data-toggle="tab">
                            <img src="{{ asset('web') }}/img/team/team-2.jpg" class="img-responsive" alt="Image">
                        </a>
                    </li>
                    <li>
                        <a href="#team-3" data-toggle="tab">
                            <img src="{{ asset('web') }}/img/team/team-3.jpg" class="img-responsive" alt="Image">
                        </a>
                    </li>
                    <li>
                        <a href="#team-4" data-toggle="tab">
                            <img src="{{ asset('web') }}/img/team/team-4.jpg" class="img-responsive" alt="Image">
                        </a>
                    </li>
                </ul>

                <div class="panel-body">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="team-1">
                            <div class="row">
                                <div class="col-md-4 col-sm-3">
                                    <figure class="team-img text-center">
                                        <img src="{{ asset('web') }}/img/team/team-large-1.png" class="img-responsive" alt="Image">
                                        <ul class="team-social-links list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                        </ul>
                                    </figure>
                                </div>
                                <div class="col-md-8 col-sm-9">
                                    <div class="team-intro">
                                        <h3>Elita Chow <small>Product Designer</small></h3>
                                        <p>A id a torquent tortor at lacus et donec platea eu scelerisque maecenas ac eros a adipiscing id lobortis cum lacus erat. Parturient eleifend adipiscing ultrices a cursus est feugiat porta a at condimentum fames adipiscing odio in nisi venenatis suspendisse suspendisse parturient. Leo congue sociosqu maecenas ligula eu penatibus at suscipit mus scelerisque.</p>
                                    </div>
                                    <div class="team-skill">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="progress-section">
                                                    <span class="progress-title">Web Design</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <span>90%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="progress-section">
                                                    <span class="progress-title">Web Design</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <span>90%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="team-2">
                            <div class="row">
                                <div class="col-md-4 col-sm-3">
                                    <figure class="team-img text-center">
                                        <img src="{{ asset('web') }}/img/team/team-large-2.png" class="img-responsive" alt="Image">
                                        <ul class="team-social-links list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                        </ul>
                                    </figure>
                                </div>
                                <div class="col-md-8 col-sm-9">
                                    <div class="team-intro">
                                        <h3>Jhon Doe <small>Product Developer</small></h3>
                                        <p>A id a torquent tortor at lacus et donec platea eu scelerisque maecenas ac eros a adipiscing id lobortis cum lacus erat. Parturient eleifend adipiscing ultrices a cursus est feugiat porta a at condimentum fames adipiscing odio in nisi venenatis suspendisse suspendisse parturient. Leo congue sociosqu maecenas ligula eu penatibus at suscipit mus scelerisque.</p>
                                    </div>
                                    <div class="team-skill">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="progress-section">
                                                    <span class="progress-title">Web Design</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <span>90%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="progress-section">
                                                    <span class="progress-title">Web Design</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <span>90%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="team-3">
                            <div class="row">
                                <div class="col-md-4 col-sm-3">
                                    <figure class="team-img text-center">
                                        <img src="{{ asset('web') }}/img/team/team-large-3.png" class="img-responsive" alt="Image">
                                        <ul class="team-social-links list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                        </ul>
                                    </figure>
                                </div>
                                <div class="col-md-8 col-sm-9">
                                    <div class="team-intro">
                                        <h3>Tomas Udoya <small>Product Designer</small></h3>
                                        <p>A id a torquent tortor at lacus et donec platea eu scelerisque maecenas ac eros a adipiscing id lobortis cum lacus erat. Parturient eleifend adipiscing ultrices a cursus est feugiat porta a at condimentum fames adipiscing odio in nisi venenatis suspendisse suspendisse parturient. Leo congue sociosqu maecenas ligula eu penatibus at suscipit mus scelerisque.</p>
                                    </div>
                                    <div class="team-skill">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="progress-section">
                                                    <span class="progress-title">Web Design</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <span>90%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="progress-section">
                                                    <span class="progress-title">Web Design</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <span>90%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="team-4">
                            <div class="row">
                                <div class="col-md-4 col-sm-3">
                                    <figure class="team-img text-center">
                                        <img src="{{ asset('web') }}/img/team/team-large-4.png" class="img-responsive" alt="Image">
                                        <ul class="team-social-links list-inline">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                                        </ul>
                                    </figure>
                                </div>
                                <div class="col-md-8 col-sm-9">
                                    <div class="team-intro">
                                        <h3>Jonathon Bin <small>Product Developer</small></h3>
                                        <p>A id a torquent tortor at lacus et donec platea eu scelerisque maecenas ac eros a adipiscing id lobortis cum lacus erat. Parturient eleifend adipiscing ultrices a cursus est feugiat porta a at condimentum fames adipiscing odio in nisi venenatis suspendisse suspendisse parturient. Leo congue sociosqu maecenas ligula eu penatibus at suscipit mus scelerisque.</p>
                                    </div>
                                    <div class="team-skill">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="progress-section">
                                                    <span class="progress-title">Web Design</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <span>90%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="progress-section">
                                                    <span class="progress-title">Web Design</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                            <span>90%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="progress-section">
                                                    <span class="progress-title">Mobile Interface</span>
                                                    <div class="progress">
                                                        <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100">
                                                            <span>86%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Happy Clients</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
            </div>
            <div class="clients-grid gutter">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                                <img src="{{ asset('web') }}/img/client-logo/envato.png" alt="clients">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                                <img src="{{ asset('web') }}/img/client-logo/fb.png" alt="clients">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                                <img src="{{ asset('web') }}/img/client-logo/studio.png" alt="clients">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                                <img src="{{ asset('web') }}/img/client-logo/google.png" alt="clients">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
