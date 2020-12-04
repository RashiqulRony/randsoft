@extends('layouts.web')

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
@endsection

@section('title')
    Portfolios
@endsection

@section('content')
    <section class="page-title ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>RandSoft Showcase</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('web.index') }}">Home</a></li>
                        <li class="active">Portfolios</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-50">
                <h2 class="section-title">Works</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, ipsum nec iaculis justo.</p>
            </div>
            <div class="portfolio-container text-center">
                <ul class="portfolio-filter brand-filter">
                    <li class="active waves-effect waves-light" data-group="all">All</li>
                    <li class=" waves-effect waves-light" data-group="websites">Websites</li>
                    <li class=" waves-effect waves-light" data-group="branding">Branding</li>
                    <li class=" waves-effect waves-light" data-group="marketing">Marketing</li>
                    <li class=" waves-effect waves-light" data-group="photography">Photography</li>
                </ul>
                <div class="portfolio portfolio-masonry col-3 gutter mtb-50">

                    <div class="portfolio-item" data-groups='["all", "branding", "photography"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-mas-1.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="{{ asset('web') }}/img/portfolio/portfolio-mas-1.jpg" class="tt-lightbox" title=""><i class="fa fa-search"></i></a>
                                    </div>
                                    <h2><a href="#">Portfolio Title</a></h2>
                                    <p><a href="#">Branding</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "marketing", "websites"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-mas-2.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="#"> <i class="fa fa-link"></i> </a>
                                    </div>
                                    <h2><a href="#">Portfolio Title</a></h2>
                                    <p><a href="#">Marketing</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "photography", "branding"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <div class="portfolio-slider" data-direction="vertical">
                                    <ul class="slides">
                                        <li>
                                            <a href="{{ asset('web') }}/img/portfolio/portfolio-mas-8.jpg" title="materialize Unique Design">
                                                <img src="{{ asset('web') }}/img/portfolio/portfolio-mas-8.jpg" alt="">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ asset('web') }}/img/portfolio/portfolio-mas-10.jpg" title="materialize Clean and Elegant">
                                                <img src="{{ asset('web') }}/img/portfolio/portfolio-mas-10.jpg" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="#"> <i class="fa fa-search"></i> </a>
                                    </div>
                                    <h2><a href="#">Portfolio Title</a></h2>
                                    <p><a href="#">Gallery</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "websites", "branding"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-mas-3.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a class="popup-video" href="https://www.youtube.com/watch?v=XVfOe5mFbAE"> <i class="fa fa-play"></i> </a>
                                    </div>
                                    <h2><a href="#">Portfolio Title</a></h2>
                                    <p><a href="#">Video</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "photography", "marketing"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-mas-4.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="{{ asset('web') }}/img/portfolio/portfolio-mas-4.jpg" class="tt-lightbox" title=""> <i class="fa fa-search"></i> </a>
                                    </div>
                                    <h2><a href="#">Portfolio Title</a></h2>
                                    <p><a href="#">Branding</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "websites",  "marketing"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-mas-5.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    </div>
                                    <h2><a href="#">Portfolio Title</a></h2>
                                    <p><a href="#">Marketing</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "websites", "photography"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-mas-6.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="{{ asset('web') }}/img/portfolio/portfolio-mas-6.jpg" class="tt-lightbox" title=""><i class="fa fa-search"></i></a>
                                    </div>
                                    <h2><a href="#">Portfolio Title</a></h2>
                                    <p><a href="#">photography</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "branding", "marketing"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-mas-7.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="{{ asset('web') }}/img/portfolio/portfolio-mas-7.jpg" class="tt-lightbox" title=""><i class="fa fa-search"></i></a>
                                    </div>
                                    <h2><a href="#">Portfolio Title</a></h2>
                                    <p><a href="#">branding</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "websites", "branding"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-mas-8.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="{{ asset('web') }}/img/portfolio/portfolio-mas-8.jpg" class="tt-lightbox" title=""><i class="fa fa-search"></i></a>
                                    </div>
                                    <h2><a href="#">Portfolio Title</a></h2>
                                    <p><a href="#">Branding</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "marketing", "photography"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-mas-9.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="{{ asset('web') }}/img/portfolio/portfolio-mas-9.jpg" class="tt-lightbox" title=""><i class="fa fa-search"></i></a>
                                    </div>
                                    <h2><a href="#">Portfolio Title</a></h2>
                                    <p><a href="#">Branding</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "websites", "photography"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-mas-12.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="{{ asset('web') }}/img/portfolio/portfolio-mas-12.jpg" class="tt-lightbox" title=""><i class="fa fa-search"></i></a>
                                    </div>
                                    <h2><a href="#">Portfolio Title</a></h2>
                                    <p><a href="#">Branding</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "branding", "marketing"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-mas-11.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="{{ asset('web') }}/img/portfolio/portfolio-mas-11.jpg" class="tt-lightbox" title=""><i class="fa fa-search"></i></a>
                                    </div>
                                    <h2><a href="#">Portfolio Title</a></h2>
                                    <p><a href="#">Branding</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="load-more-button text-center">
                    <a class="waves-effect waves-light btn btn-large pink"> <i class="fa fa-spinner left"></i> Load More</a>
                </div>
            </div>
        </div>
    </section>
@endsection
