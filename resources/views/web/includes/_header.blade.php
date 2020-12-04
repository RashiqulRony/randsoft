@if(!Request::routeIs('web.index'))
<div class="top-bar light-blue visible-md visible-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="list-inline social-top tt-animate btt">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6 text-right">
                <ul class="topbar-cta no-margin">
                    <li class="mr-20">
                        <a><i class="material-icons mr-10">&#xE0B9;</i>info@materialize.com</a>
                    </li>
                    <li>
                        <a><i class="material-icons mr-10">&#xE0CD;</i> +01 123 456 78</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endif

<header id="header" class="tt-nav {{ Request::routeIs('web.index') ? 'transparent-header': 'nav-border-bottom' }}">
    <div class="header-sticky light-header">
        <div class="container">
            <div id="materialize-menu" class="menuzord">
                <a href="{{ route('web.index') }}" class="logo-brand">
                    <img src="{{ asset('web') }}/img/logo.png" alt="" />
                </a>
                <ul class="menuzord-menu pull-right">
                    <li class="{{ Request::routeIs('web.index') ? 'active': ''}}">
                        <a href="{{ route('web.index') }}">Home</a>
                    </li>
                    <li class="{{ Request::routeIs('web.about') ? 'active': ''}}">
                        <a href="{{ route('web.about') }}">About</a>
                    </li>
                    <li class="{{ Request::routeIs('web.services') ? 'active': ''}}">
                        <a href="{{ route('web.services') }}">Services</a>
                    </li>
                    {{--<li class="{{ Request::routeIs('web.features') ? 'active': ''}}">
                        <a href="{{ route('web.features') }}">Features</a>
                    </li>--}}
                    <li class="{{ Request::routeIs('web.portfolios') ? 'active': ''}}">
                        <a href="{{ route('web.portfolios') }}">Portfolio</a>
                    </li>
                    <li class="{{ Request::routeIs('web.partnership') ? 'active': ''}}">
                        <a href="{{ route('web.partnership') }}">Partnership</a>
                    </li>
                    <li class="{{ Request::routeIs('web.contact') ? 'active': ''}}">
                        <a href="{{ route('web.contact') }}">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</header>
