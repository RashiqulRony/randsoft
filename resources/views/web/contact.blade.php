@extends('layouts.web')

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
@endsection

@section('title')
    Contact
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
            <div class="text-center mb-80">
                <h2 class="section-title text-uppercase">Drop us a line</h2>
                <p class="section-sub">Quisque non erat mi. Etiam congue et augue sed tempus. Aenean sed ipsum luctus, scelerisque ipsum nec, iaculis justo. Sed at vestibulum purus, sit amet viverra diam nulla ac nisi rhoncus.</p>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <form name="contact-form" id="contactForm" action="http://trendytheme.net/demo/matrox/sendemail.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <input type="text" name="name" class="validate" id="name">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-field">
                                    <label class="sr-only" for="email">Email</label>
                                    <input id="email" type="email" name="email" class="validate">
                                    <label for="email" data-error="wrong" data-success="right">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-field">
                                    <input id="phone" type="tel" name="phone" class="validate">
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-field">
                                    <input id="website" type="text" name="website" class="validate">
                                    <label for="website">Your Website</label>
                                </div>
                            </div>
                        </div>
                        <div class="input-field">
                            <textarea name="message" id="message" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30">Send Message</button>
                    </form>
                </div>
                <div class="col-md-4 contact-info">
                    <address>
                        <i class="material-icons brand-color">&#xE55F;</i>
                        <div class="address">
                            1355 Market Street, Suite 900<br>
                            San Francisco, CA 94103
                            <hr>
                            <p>Hoffman Parkway, P.O Box 154 Mountain View.<br>
                                United States of America.</p>
                        </div>
                        <i class="material-icons brand-color">&#xE61C;</i>
                        <div class="phone">
                            <p>Fax: (123) 456-7890<br>
                                Phone: (123) 456-7890</p>
                        </div>
                        <i class="material-icons brand-color">&#xE0E1;</i>
                        <div class="mail">
                            <p><a href="mailto:#">first.last@example.com</a><br>
                                <a href="#">www.yourdomain.com</a></p>
                        </div>
                    </address>
                </div>
            </div>
        </div>
    </section>
    <div class="height-350">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58409.82830301291!2d90.40650997161808!3d23.79674639867462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2z4Kai4Ka-4KaV4Ka-!5e0!3m2!1sbn!2sbd!4v1607114518427!5m2!1sbn!2sbd" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

@endsection

