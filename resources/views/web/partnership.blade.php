@extends('layouts.web')

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
@endsection

@section('title')
    Partnership
@endsection

@section('content')
    <section class="page-title ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>RandSoft Partnership Program</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ route('web.index') }}">Home</a></li>
                        <li class="active">Partnership</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <h2 class="font-30 text-medium mb-30">Welcome to RandSoft Partnership</h2>
            <div class="row">
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
                <div class="col-md-7">
                    <p>Are you an ad agency, marketing firm, PR company, or other professional services firm looking for a reliable partner in the highly technical and always-evolving web space? Becoming a <strong class="text-info">RandSoft</strong> Partner might be perfect for you</p>

                    <p><strong class="text-info">RandSoft</strong> is providing an exclusive partnership offer to individuals and companies. If you are an individual like student, professional from different tracks have a lead to a project or if you are a company and looking for outsourcing services that suit your web development, mobile application and digital marketing partner needs then we are here for you. <strong class="text-info">RandSoft</strong> is the right place to end your searching for outsourcing partners.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Become our partner today!</h2>
                <p class="section-sub">Let partner with us & improve your business today</p>
            </div>
            <div class="vertical-tab">
                <div class="row">
                    <div class="col-sm-3">

                        <ul class="nav nav-tabs nav-stacked" role="tablist">
                            <li role="presentation" class="active"><a href="#tab-5" class="waves-effect waves-light" role="tab" data-toggle="tab">About us</a></li>
                            <li role="presentation"><a href="#tab-6" class="waves-effect waves-light" role="tab" data-toggle="tab">What We Do</a></li>
                            <li role="presentation"><a href="#tab-7" class="waves-effect waves-light" role="tab" data-toggle="tab">Our Mission</a></li>
                            <li role="presentation"><a href="#tab-8" class="waves-effect waves-light" role="tab" data-toggle="tab">Our Team</a></li>
                            <li role="presentation"><a href="#tab-9" class="waves-effect waves-light" role="tab" data-toggle="tab">Our Skills</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-9">

                        <div class="panel-body">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="tab-5">
                                    <h2>About Us</h2>
                                    <img class="alignright" src="{{ asset('web') }}/img/working_man.png" alt="">
                                    <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient.</p>
                                    <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab-6">
                                    <h2>What We Do</h2>
                                    <img class="alignright" src="{{ asset('web') }}/img/busy_man.png" alt="">
                                    <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient.</p>
                                    <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab-7">
                                    <h2>Our Mission</h2>
                                    <img class="alignright" src="{{ asset('web') }}/img/mission.png" alt="">
                                    <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient.</p>
                                    <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab-8">
                                    <h2>Our Team</h2>
                                    <img class="alignright" src="{{ asset('web') }}/img/business.png" alt="">
                                    <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient.</p>
                                    <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab-9">
                                    <h2>Our Skills</h2>
                                    <img class="alignright mt-20" src="{{ asset('web') }}/img/data.png" alt="">
                                    <p>Duis senectus mus condimentum nunc ac habitasse duis consectetur a arcu a accumsan cras et metus ultricies justo cum a bibendum. <a href="#">Egestas vestibulum blandit sem vestibulum curabitur</a> a vel aliquet gravida ullamcorper amet dictumst vestibulum a elementum proin id volutpat magna parturient.</p>
                                    <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="promo-box gray-bg border-box mt-80">
                <div class="promo-info">
                    <h2 class="text-extrabold text-uppercase">The best solution for your business</h2>
                    <p>It can be used on larger scale projects as well as small scale projects without any problems.</p>
                </div>
                <div class="promo-btn">
                    <a href="#" class="btn btn-lg text-medium pink waves-effect waves-light">Buy now</a>
                </div>
            </div>
        </div>
    </section>
@endsection
