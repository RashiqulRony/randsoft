@extends('layouts.web')

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
@endsection

@section('title')
    Services
@endsection

@section('content')
    <section class="page-title ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>What we do</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('web.index') }}">Home</a></li>
                        <li class="active">Services</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-top-110">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">What We Do</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
            </div>
            <div class="row no-gutter">
                <div class="col-md-3 col-sm-6">
                    <div class="featured-box brand-bg text-center z-depth-1">
                        <div class="featured-wrapper">
                            <div class="intro-header">
                                <i class="material-icons white-text">&#xE53B;</i>
                                <h2 class="white-text">Creative Artist</h2>
                            </div>
                            <div class="content white-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="featured-box pink text-center z-depth-1">
                        <div class="featured-wrapper">
                            <div class="intro-header">
                                <i class="material-icons white-text">&#xE051;</i>
                                <h2 class="white-text">Web Design</h2>
                            </div>
                            <div class="content white-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="featured-box brand-bg text-center z-depth-1">
                        <div class="featured-wrapper">
                            <div class="intro-header">
                                <i class="material-icons white-text">&#xE60E;</i>
                                <h2 class="white-text">App Design</h2>
                            </div>
                            <div class="content white-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="featured-box pink text-center z-depth-1">
                        <div class="featured-wrapper">
                            <div class="intro-header">
                                <i class="material-icons white-text">&#xE0B9;</i>
                                <h2 class="white-text">Product Research</h2>
                            </div>
                            <div class="content white-text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis repellat quo vitae tempora.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row padding-top-100">
                <div class="col-md-7">
                    <h2 class="text-bold mb-30">Creative Artist</h2>
                    <p>Quickly procrastinate functionalized human capital with equity invested experiences. Rapidiously provide access to extensible solutions after pandemic supply chains. Credibly supply resource sucking channels before areas Dynamically harness cooperative partnerships rather than just in time total linkage. Dramatically syndicate plug and play <a href="#">professional with focused</a>. Credibly supply resource sucking channels before areas.</p>
                    <p>Lorem ipsum dolor sit amet cr adipiscing elit. In maximus ligula semper <a href="#">metus pellentesque</a> mattis.</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('web') }}/img/mockup/ipad-2.png" class="img-responsive " alt="Image">
                </div>
            </div>
        </div>
        <div class="mocup-wrapper text-center">
            <img src="{{ asset('web') }}/img/mockup/landscap-mockup.jpg" alt="image">
        </div>
    </section>
    <section class="section-padding banner-10 bg-fixed parallax-bg overlay light-9" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Techonologis we use</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
            </div>
            <div class="featured-carousel brand-dot">
                <div class="featured-item border-box radius-4 hover brand-hover">
                    <div class="icon mb-30">
                        <img src="{{ asset('web') }}/img/anguler-logo.png" alt="">
                    </div>
                    <div class="desc">
                        <h2>Angular JS</h2>
                        <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                    </div>
                </div>
                <div class="featured-item border-box radius-4 hover brand-hover">
                    <div class="icon mb-30">
                        <img src="{{ asset('web') }}/img/node-logo.png" alt="">
                    </div>
                    <div class="desc">
                        <h2>Node JS</h2>
                        <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                    </div>
                </div>
                <div class="featured-item border-box radius-4 hover brand-hover">
                    <div class="icon mb-30">
                        <img src="{{ asset('web') }}/img/material-logo.png" alt="">
                    </div>
                    <div class="desc">
                        <h2>materialize CSS</h2>
                        <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                    </div>
                </div>
                <div class="featured-item border-box radius-4 hover brand-hover">
                    <div class="icon mb-30">
                        <img src="{{ asset('web') }}/img/node-logo.png" alt="">
                    </div>
                    <div class="desc">
                        <h2>We are creative</h2>
                        <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                    </div>
                </div>
                <div class="featured-item border-box radius-4 hover brand-hover">
                    <div class="icon mb-30">
                        <img src="{{ asset('web') }}/img/anguler-logo.png" alt="">
                    </div>
                    <div class="desc">
                        <h2>We are creative</h2>
                        <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                    </div>
                </div>
                <div class="featured-item border-box radius-4 hover brand-hover">
                    <div class="icon mb-30">
                        <img src="{{ asset('web') }}/img/material-logo.png" alt="">
                    </div>
                    <div class="desc">
                        <h2>We are creative</h2>
                        <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                    </div>
                </div>
                <div class="featured-item border-box radius-4 hover brand-hover">
                    <div class="icon mb-30">
                        <img src="{{ asset('web') }}/img/node-logo.png" alt="">
                    </div>
                    <div class="desc">
                        <h2>We are creative</h2>
                        <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                    </div>
                </div>
                <div class="featured-item border-box radius-4 hover brand-hover">
                    <div class="icon mb-30">
                        <img src="{{ asset('web') }}/img/material-logo.png" alt="">
                    </div>
                    <div class="desc">
                        <h2>We are creative</h2>
                        <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="thumb-carousel circle-thumb text-center">
                        <ul class="slides">
                            <li data-thumb="{{ asset('web') }}/img/client-thumb/5.png">
                                <div class="icon">
                                    <img src="{{ asset('web') }}/img/quote-dark.png" alt="Customer Thumb">
                                </div>
                                <div class="content">
                                    <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>
                                    <div class="testimonial-meta brand-color">
                                        Jhon Doe,
                                        <span>User Interface Designer</span>
                                    </div>
                                </div>
                            </li>
                            <li data-thumb="{{ asset('web') }}/img/client-thumb/2.png">
                                <div class="icon">
                                    <img src="{{ asset('web') }}/img/quote-dark.png" alt="Customer Thumb">
                                </div>
                                <div class="content">
                                    <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>
                                    <div class="testimonial-meta brand-color">
                                        Elita Karim,
                                        <span>User Interface Designer</span>
                                    </div>
                                </div>
                            </li>
                            <li data-thumb="{{ asset('web') }}/img/client-thumb/3.png">
                                <div class="icon">
                                    <img src="{{ asset('web') }}/img/quote-dark.png" alt="Customer Thumb">
                                </div>
                                <div class="content">
                                    <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>
                                    <div class="testimonial-meta brand-color">
                                        Tomas Udoy,
                                        <span>User Interface Designer</span>
                                    </div>
                                </div>
                            </li>
                            <li data-thumb="{{ asset('web') }}/img/client-thumb/4.png">
                                <div class="icon">
                                    <img src="{{ asset('web') }}/img/quote-dark.png" alt="Customer Thumb">
                                </div>
                                <div class="content">
                                    <p>Quam adipiscing vestibulum feugiat lacus leo a eget leo convallis sagittis nisi varius eros a imperdiet.Dui elementum ut a vestibulum eu fames hendrerit class conubia consequat curae.</p>
                                    <div class="testimonial-meta brand-color">
                                        Jonathon Bin,
                                        <span>User Interface Designer</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
