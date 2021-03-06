@extends('layouts.web')

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
@endsection

@section('title')
    Home
@endsection

@section('content')
    <section class="rev_slider_wrapper">
        <div class="rev_slider materialize-slider">
            <ul>
                <li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{ asset('web') }}/img/banner/b1.png" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="materialize Material" data-description="">
                    <img src="{{ asset('web') }}/img/banner/b1.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption rev-heading text-extrabold dark-text tp-resizeme" data-x="center" data-y="center" data-voffset="-50" data-fontsize="['60','60','60','45']" data-lineheight="['60','60','60','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;"><span style="color: #fff!important;">WEB DESIGN</span></div>
                    <div class="tp-caption tp-resizeme rev-subheading  dark-text text-center" data-x="center" data-y="center" data-voffset="30" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;"><span style="color: #fff">We Create Responsive Websites <br> That Look Stunning in Every Device</span></div>
                    <div class="tp-caption tp-resizeme rev-btn" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['130','130','130','130']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1200" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                        <a href="#" class="btn btn-lg  waves-effect waves-light">Explore More</a>
                    </div>
                </li>

                <li data-transition="fade" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{ asset('web') }}/img/banner/b2.png" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="materialize Material" data-description="">
                    <img src="{{ asset('web') }}/img/banner/b2.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption rev-heading text-extrabold dark-text tp-resizeme" data-x="center" data-y="center" data-voffset="-50" data-fontsize="['60','60','60','45']" data-lineheight="['60','60','60','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;"><span style="color: #fff!important;">MOBILE APP<br><span style="font-weight:300;">DEVELOPMENT</span></span></div>
                    <div class="tp-caption tp-resizeme rev-subheading  dark-text text-center" data-x="center" data-y="center" data-voffset="30" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;"><span style="color: #fff">Get mobile app developed <br>to promote your <span style="font-weight:bold">Business</span> or <span style="font-weight:bold">Product.</span></span></div>
                    <div class="tp-caption tp-resizeme rev-btn" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['130','130','130','130']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1200" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                        <a href="#" class="btn btn-lg  waves-effect waves-light">Explore More</a>
                    </div>
                </li>

                <li data-transition="fade" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{ asset('web') }}/img/banner/b3.png" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="materialize Material" data-description="">
                    <img src="{{ asset('web') }}/img/banner/b3.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption rev-heading text-extrabold dark-text tp-resizeme" data-x="center" data-y="center" data-voffset="-50" data-fontsize="['60','60','60','45']" data-lineheight="['60','60','60','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;"><span style="color: #fff!important;">DIGITAL MARKETING</span></div>
                    <div class="tp-caption tp-resizeme rev-subheading  dark-text text-center" data-x="center" data-y="center" data-voffset="30" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;"><span style="color: #fff">We are experts in<br> <span style="font-weight:bold">custom </span>Social Networking Development.</span></div>
                    <div class="tp-caption tp-resizeme rev-btn" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['130','130','130','130']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1200" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                        <a href="#" class="btn btn-lg  waves-effect waves-light">Explore More</a>
                    </div>
                </li>

                <li data-transition="fade" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{ asset('web') }}/img/banner/b4.png" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="materialize Material" data-description="">
                    <img src="{{ asset('web') }}/img/banner/b4.png" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                    <div class="tp-caption rev-heading text-extrabold dark-text tp-resizeme" data-x="center" data-y="center" data-voffset="-50" data-fontsize="['60','60','60','45']" data-lineheight="['60','60','60','50']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="800" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 5; white-space: nowrap;"><span style="color: #fff!important;">Thinking to Outsource?<br><span style="font-weight:300; font-size:40px">Think RandSoft !</span></span></div>
                    <div class="tp-caption tp-resizeme rev-subheading  dark-text text-center" data-x="center" data-y="center" data-voffset="30" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 6; white-space: nowrap;"><span style="color: #fff">We Create Responsive Websites <br> That Look Stunning in Every Device</span></div>
                    <div class="tp-caption tp-resizeme rev-btn" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['130','130','130','130']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-style_hover="cursor:default;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1200" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; white-space: nowrap;">
                        <a href="#" class="btn btn-lg  waves-effect waves-light">Explore More</a>
                    </div>
                </li>



            </ul>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Who we are</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam. Nulla ac nisi rhoncus,</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="icon-tab">

                        <div class="text-center">
                            <ul class="nav nav-pills" role="tablist">
                                <li role="presentation"><a href="#icontab-1" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">&#xE7FD;</i></a></li>
                                <li role="presentation" class="active"><a href="#icontab-2" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">&#xE3B7;</i></a></li>
                                <li role="presentation"><a href="#icontab-3" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">&#xE53B;</i></a></li>
                                <li role="presentation"><a href="#icontab-4" class="waves-effect waves-light" role="tab" data-toggle="tab"> <i class="material-icons">&#xE859;</i></a></li>
                            </ul>
                        </div>

                        <div class="panel-body mt-40">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade" id="icontab-1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2 class="text-bold mb-40">About us</h2>
                                            <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor tempus a mi ad parturient ad nulla mus amet in penatibus nascetur at vulputate euismod a est tristique scelerisque. Aliquet facilisis nisl vel vestibulum dignissim gravida ullamcorper hac quisque ad at nisl egestas adipiscing vel blandit.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ asset('web') }}/img/workstation.jpg" alt="image" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade in active" id="icontab-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2 class="text-bold mb-40">Our Mission</h2>
                                            <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor tempus a mi ad parturient ad nulla mus amet in penatibus nascetur at vulputate euismod a est tristique scelerisque. Aliquet facilisis nisl vel vestibulum dignissim gravida ullamcorper hac quisque ad at nisl egestas adipiscing vel blandit.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ asset('web') }}/img/mission.jpg" alt="image" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="icontab-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2 class="text-bold mb-40">What We Do</h2>
                                            <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor tempus a mi ad parturient ad nulla mus amet in penatibus nascetur at vulputate euismod a est tristique scelerisque. Aliquet facilisis nisl vel vestibulum dignissim gravida ullamcorper hac quisque ad at nisl egestas adipiscing vel blandit.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ asset('web') }}/img/idea.jpg" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="icontab-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h2 class="text-bold mb-40">Our Setps</h2>
                                            <p>Himenaeos a vestibulum morbi. <a href="#">Ullamcorper cras scelerisque</a> taciti lorem metus feugiat est lacinia facilisis id nam leo condimentum praesent id diam. Vestibulum amet porta odio elementum convallis parturient tempor tortor tempus a mi ad parturient ad nulla mus amet in penatibus nascetur at vulputate euismod a est tristique scelerisque. Aliquet facilisis nisl vel vestibulum dignissim gravida ullamcorper hac quisque ad at nisl egestas adipiscing vel blandit.</p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ asset('web') }}/img/workstation2.jpg" alt="image" class="img-responsive">
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

    <section class="section-padding gray-bg">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">What we do</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam. Nulla ac nisi rhoncus,</p>
            </div>
            <div class="row equal-height-row">
                <div class="col-md-4 mb-30">
                    <div class="featured-item border-box radius-4 hover brand-hover equal-height-column">
                        <div class="icon mb-30">
                            <i class="material-icons brand-icon">&#xE32A;</i>
                        </div>
                        <div class="desc">
                            <h2>We are creative</h2>
                            <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-30">
                    <div class="featured-item border-box radius-4 hover brand-hover equal-height-column">
                        <div class="icon mb-30">
                            <i class="material-icons brand-icon">&#xE0BF;</i>
                        </div>
                        <div class="desc">
                            <h2>We are awesome</h2>
                            <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-30">
                    <div class="featured-item border-box radius-4 hover brand-hover equal-height-column">
                        <div class="icon mb-30">
                            <i class="material-icons brand-icon">&#xE323;</i>
                        </div>
                        <div class="desc">
                            <h2>We are Taltented</h2>
                            <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-item border-box radius-4 hover brand-hover equal-height-column">
                        <div class="icon mb-30">
                            <i class="material-icons brand-icon">&#xE32A;</i>
                        </div>
                        <div class="desc">
                            <h2>We are secured</h2>
                            <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-item border-box radius-4 hover brand-hover equal-height-column">
                        <div class="icon mb-30">
                            <i class="material-icons brand-icon">&#xE149;</i>
                        </div>
                        <div class="desc">
                            <h2>We are awesome</h2>
                            <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="featured-item border-box radius-4 hover brand-hover equal-height-column">
                        <div class="icon mb-30">
                            <i class="material-icons brand-icon">&#xE0C9;</i>
                        </div>
                        <div class="desc">
                            <h2>We are Taltented</h2>
                            <p>Porttitor communicate pandemic data rather than enabled niche pandemic data rather markets neque pulvinar vitae.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="parallax-bg banner-5 bg-fixed overlay dark-5 padding-top-100" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="mb-80 text-center">
                <h2 class="font-30 white-text text-extrabold text-uppercase">Huge Demo With Unlimited Features</h2>
                <p class="white-text width-60 mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                <a href="#" class="btn btn-lg pink waves-effect waves-light text-medium">Buy Now</a>
            </div>
        </div>
        <div class="mocup-wrapper text-center">
            <img src="{{ asset('web') }}/img/mockup/mockup.png" alt="image">
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-50">
                <h2 class="section-title text-uppercase">Works</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam. Nulla ac nisi rhoncus,</p>
            </div>
            <div class="portfolio-container text-center">
                <ul class="portfolio-filter brand-filter">
                    <li class="active waves-effect waves-light" data-group="all">All</li>
                    <li class="waves-effect waves-light" data-group="websites">Websites</li>
                    <li class="waves-effect waves-light" data-group="branding">Branding</li>
                    <li class="waves-effect waves-light" data-group="marketing">Marketing</li>
                    <li class="waves-effect waves-light" data-group="photography">Photography</li>
                </ul>
                <div class="portfolio portfolio-with-title col-3 gutter mt-50">
                    <div class="portfolio-item" data-groups='["all", "branding", "photography"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-1.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="{{ asset('web') }}/img/portfolio/portfolio-1.jpg" class="tt-lightbox" title="iOS Game Design"> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title">
                                <h2><a href="#">Portfolio Title</a></h2>
                                <p><a href="#">iOS Design</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "marketing", "websites"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-2.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="{{ asset('web') }}/img/portfolio/portfolio-2.jpg" class="tt-lightbox" title=""> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title">
                                <h2><a href="#">Portfolio Title</a></h2>
                                <p><a href="#">Branding</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "photography", "branding"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-3.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="{{ asset('web') }}/img/portfolio/portfolio-3.jpg" class="tt-lightbox" title=""> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title">
                                <h2><a href="#">Portfolio Title</a></h2>
                                <p><a href="#">Branding</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "websites", "branding"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-4.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="{{ asset('web') }}/img/portfolio/portfolio-4.jpg" class="tt-lightbox" title=""> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title">
                                <h2><a href="#">Portfolio Title</a></h2>
                                <p><a href="#">Branding</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "photography", "marketing"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-5.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="{{ asset('web') }}/img/portfolio/portfolio-5.jpg" class="tt-lightbox" title=""> <i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title">
                                <h2><a href="#">Portfolio Title</a></h2>
                                <p><a href="#">Branding</a> </p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item" data-groups='["all", "websites",  "marketing"]'>
                        <div class="portfolio-wrapper">
                            <div class="thumb">
                                <div class="bg-overlay brand-overlay"></div>
                                <img src="{{ asset('web') }}/img/portfolio/portfolio-6.jpg" alt="">
                                <div class="portfolio-intro">
                                    <div class="action-btn">
                                        <a href="#."> <i class="fa fa-link"></i> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio-title">
                                <h2><a href="#">Portfolio Title</a></h2>
                                <p><a href="#">Branding</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="padding-top-110 padding-bottom-70 brand-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="quote-carousel text-center">
                        <div class="carousel-item">
                            <div class="content">
                                <h2 class="white-text line-height-40">"My favorite things in life don't cost any money. It's really clear that the most precious resource we all have is time."</h2>
                                <div class="testimonial-meta font-20 text-extrabold white-text">
                                    Steve Jobes
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="content">
                                <h2 class="white-text line-height-40">"My favorite things in life don't cost any money. It's really clear that the most precious resource we all have is time."</h2>
                                <div class="testimonial-meta font-20 text-extrabold white-text">
                                    Steve Jobes
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="content">
                                <h2 class="white-text line-height-40">"My favorite things in life don't cost any money. It's really clear that the most precious resource we all have is time."</h2>
                                <div class="testimonial-meta font-20 text-extrabold white-text">
                                    Steve Jobes
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Awesome clients</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam. Nulla ac nisi rhoncus,</p>
            </div>
            <div class="clients-grid gutter">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                                <img src="{{ asset('web') }}/img/client-logo/1.png" alt="clients">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                                <img src="{{ asset('web') }}/img/client-logo/2.png" alt="clients">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                                <img src="{{ asset('web') }}/img/client-logo/4.png" alt="clients">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="border-box">
                            <a href="#">
                                <img src="{{ asset('web') }}/img/client-logo/5.png" alt="clients">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding latest-news-card gray-bg">
        <div class="container">
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Blog</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam. Nulla ac nisi rhoncus,</p>
            </div>
            <div class="blog-carousel">
                <article class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{ asset('web') }}/img/blog/1.jpg" alt="image">
                    </div>
                    <div class="card-content">
                        <h2 class="entry-title activator">The Future of Web Design is Hidden in the History of Architecture..</h2>
                    </div>
                    <div class="card-reveal overlay-blue">
                        <span class="card-title close-button"><i class="fa fa-times"></i></span>
                        <a class="posted-on" href="#">Branding</a>
                        <h2 class="entry-title"><a href="#">The Future of Web Design</a></h2>
                        <p>Authoritatively grow quality technologies for strategic sources. Dramatically evolve front-end services.</p>
                        <a href="#" class="readmore">Read Full Post <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </article>
                <article class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{ asset('web') }}/img/blog/2.jpg" alt="image">
                    </div>
                    <div class="card-content">
                        <h2 class="entry-title activator">7 Things Every Designer Needs to Know about Accessibility..</h2>
                    </div>
                    <div class="card-reveal overlay-blue">
                        <span class="card-title close-button"><i class="fa fa-times"></i></span>
                        <a class="posted-on" href="#">Branding</a>
                        <h2 class="entry-title"><a href="#">7 Things Every Designer Needs</a></h2>
                        <p>Authoritatively grow quality technologies for strategic sources. Dramatically evolve front-end services.</p>
                        <a href="#" class="readmore">Read Full Post <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </article>
                <article class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{ asset('web') }}/img/blog/3.jpg" alt="image">
                    </div>
                    <div class="card-content">
                        <h2 class="entry-title activator">16 Web & Graphic Design Trends To Watch In 2016...</h2>
                    </div>
                    <div class="card-reveal overlay-blue">
                        <span class="card-title close-button"><i class="fa fa-times"></i></span>
                        <a class="posted-on" href="#">Branding</a>
                        <h2 class="entry-title"><a href="#">16 Web & Graphic Design Trends</a></h2>
                        <p>Authoritatively grow quality technologies for strategic sources. Dramatically evolve front-end services.</p>
                        <a href="#" class="readmore">Read Full Post <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </article>
                <article class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{{ asset('web') }}/img/blog/4.jpg" alt="image">
                    </div>
                    <div class="card-content">
                        <h2 class="entry-title activator">The rise of the “Full Stack” Designer and the tools they use..</h2>
                    </div>
                    <div class="card-reveal overlay-blue">
                        <span class="card-title close-button"><i class="fa fa-times"></i></span>
                        <a class="posted-on" href="#">Branding</a>
                        <h2 class="entry-title"><a href="#">The rise of the Designer</a></h2>
                        <p>Authoritatively grow quality technologies for strategic sources. Dramatically evolve front-end services.</p>
                        <a href="#" class="readmore">Read Full Post <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>
@endsection
