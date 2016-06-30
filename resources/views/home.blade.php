@extends('layouts.app')

@section("nav", "navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top")
@section("logo", asset('img/laraadmin-white-256.png'))

@section('content')
<header class="bg-inverse text-xs-center center-vertically" role="banner" style="background: #663fb5 url(img/bg-header-5.jpg) no-repeat center bottom;background-size:cover;">
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">LaraAdmin</h1>
            <h2 class="m-b-3"> LaraAdmin is a <b>Open source CRM</b> for quick-start Admin based applications.</h2>
            <a class="btn btn-secondary-outline m-b-1" href="{{ url('/documentation') }}" role="button"><span class="icon-rocket"></span>See Installation</a>
            <ul class="nav nav-inline social-share">
                <a class="github-button" href="https://github.com/dwijitsolutions/laraadmin" data-icon="octicon-star" data-count-href="/dwijitsolutions/laraadmin/stargazers" data-count-api="/repos/dwijitsolutions/laraadmin#stargazers_count" data-count-aria-label="# stargazers on GitHub" aria-label="Star dwijitsolutions/laraadmin on GitHub">Star</a>&nbsp;
                
                <a class="github-button" href="https://github.com/gdbhosale" data-count-href="/gdbhosale/followers" data-count-api="/users/gdbhosale#followers" data-count-aria-label="# followers on GitHub" aria-label="Follow @gdbhosale on GitHub">Follow @gdbhosale</a>&nbsp;
                
                <a class="github-button" href="https://github.com/dwijitsolutions/laraadmin" data-icon="octicon-eye" data-count-href="/dwijitsolutions/laraadmin/watchers" data-count-api="/repos/dwijitsolutions/laraadmin#subscribers_count" data-count-aria-label="# watchers on GitHub" aria-label="Watch dwijitsolutions/laraadmin on GitHub">Watch</a>&nbsp;
                
                <a class="github-button" href="https://github.com/dwijitsolutions/laraadmin/fork" data-icon="octicon-repo-forked" data-count-href="/dwijitsolutions/laraadmin/network" data-count-api="/repos/dwijitsolutions/laraadmin#forks_count" data-count-aria-label="# forks on GitHub" aria-label="Fork dwijitsolutions/laraadmin on GitHub">Fork</a>&nbsp;
                
                
                <!--<li class="nav-item"><a class="nav-link" href="https://github.com/dwijitsolutions/laraadmin" target="_blank"><span class="fa fa-github"></span> 5</a></li>
                <li class="nav-item"><a class="nav-link" href="https://twitter.com/laraadmn" target="_blank"><span class="icon-twitter"></span> 5</a></li>
                <li class="nav-item"><a class="nav-link" href="https://facebook.com/laraadmin" target="_blank"><span class="icon-facebook"></span> 4</a></li>
                <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/company/dwij-it-solutions" target="_blank"><span class="icon-linkedin"></span> 53</a></li>-->
            </ul>
        </div>
    </div>
</header>

<!-- Intro
================================================== -->

<section class="section-intro bg-faded text-xs-center">
    <div class="container">
        <h3 class="wp wp-1">CRM that gives you full flexibility in code and work-flows.</h3>
        <p class="lead wp wp-2">Baked in <b><a href="http://laravel.com">Laravel</a></b> and customized for flowless performance.</p>
        <img src="img/laraadmin/laraadmin-dashboard.jpg" alt="LaraAdmin Dashboard" class="img-fluid wp wp-3">
    </div>
</section>

<!-- Features
================================================== -->

<section class="section-features text-xs-center">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-block">
                        <span class="fa fa-rocket display-1"></span>
                        <h4 class="card-title">Easy Installation</h4>
                        <h6 class="card-subtitle text-muted"></h6>
                        <p class="card-text">Single command installation for quick up and running. Check <a href="{{ url('/documentation#install') }}">installation</a> now.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-block">
                        <span class="fa fa-clone display-1"></span>
                        <h4 class="card-title">Module Manager</h4>
                        <h6 class="card-subtitle text-muted"></h6>
                        <p class="card-text">You can create and edit Modules without touching code. It <b>generate CRUD</b> methods and views on the go from your schema, which can be customized.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-block">
                        <span class="fa fa-files-o display-1"></span>
                        <h4 class="card-title">Media Manager</h4>
                        <h6 class="card-subtitle text-muted"></h6>
                        <p class="card-text">Manage files & images and upload them with ease.</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="card m-b-0">
                    <div class="card-block">
                        <span class="fa fa-group display-1"></span>
                        <h4 class="card-title" title="Under Development">User Management *</h4>
                        <h6 class="card-subtitle text-muted"></h6>
                        <p class="card-text">Easy user Management with features like Employees, Roles, Groups, Departments and <b>Access Control</b>.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-block">
                        <span class="fa fa-tasks display-1"></span>
                        <h4 class="card-title" title="Under Development">Workflows *</h4>
                        <h6 class="card-subtitle text-muted"></h6>
                        <p class="card-text">Workflows governs the automation of <b>business processes</b> like Tasks, Events and many others according to set of procedural rules. (<b>Cron Events</b>)</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <a href="{{ url('/features') }}" class="btn btn-primary">Check full feature list !!!</a>
    </div>
</section>

<section class="section-intro bg-faded text-xs-center">
    <div class="container">
        <h1>Snapshots</h1><br>
        @include('fancy-gallery')
        <br><br>
    </div>
</section>

<!--
<section class="section-video bg-inverse text-xs-center wp wp-4">
    <h3 class="sr-only">Video</h3>
    <video id="demo_video" class="video-js vjs-default-skin vjs-big-play-centered" controls poster="img/video-poster.jpg" data-setup='{}'>
    <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
    <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm'>
    </video>
</section>
-->

<section class="section-video bg-inverse text-xs-center wp wp-4">
    <h3 class="sr-only">Video</h3>
    <a href="https://www.youtube.com/watch?v=emo9qmS_Q3s" target="_blank" class="playlink">
        <img src="img/video-poster.jpg" style="width:100%;height:500px;">
        <div>
            <i class="fa fa-play"></i>
        </div>
    </a>
    <!--<object data="http://www.youtube.com/embed/emo9qmS_Q3s" width="100%" height="500"></object>-->
    <!--<iframe id="videoIframe" width="100%" height="500" src="http://www.youtube.com/embed/emo9qmS_Q3s"></iframe>-->
</section>

<!--
<section class="section-pricing bg-faded text-xs-center">
    <div class="container">
        <h3>Manage your subscriptions</h3>
        <div class="row p-y-3">
            <div class="col-md-4 p-t-md wp wp-5">
                <div class="card pricing-box">
                    <div class="card-header text-uppercase">
                        Personal
                    </div>
                    <div class="card-block">
                        <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                        <h4 class="card-text">
                <sup class="pricing-box-currency">$</sup>
                <span class="pricing-box-price">19</span>
                <small class="text-muted text-uppercase">/month</small>
            </h4>
                    </div>
                    <ul class="list-group list-group-flush p-x">
                        <li class="list-group-item">Sed risus feugiat</li>
                        <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                        <li class="list-group-item">Sed risus feugiat fusce</li>
                    </ul>
                    <a href="#" class="btn btn-primary-outline">Get Started</a>
                </div>
            </div>
            <div class="col-md-4 stacking-top">
                <div class="card pricing-box pricing-best p-x-0">
                    <div class="card-header text-uppercase">
                        Professional
                    </div>
                    <div class="card-block">
                        <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                        <h4 class="card-text">
                <sup class="pricing-box-currency">$</sup>
                <span class="pricing-box-price">49</span>
                <small class="text-muted text-uppercase">/month</small>
            </h4>
                    </div>
                    <ul class="list-group list-group-flush p-x">
                        <li class="list-group-item">Sed risus feugiat</li>
                        <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                        <li class="list-group-item">Sed risus feugiat fusce</li>
                        <li class="list-group-item">Sed risus feugiat</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>
            </div>
            <div class="col-md-4 p-t-md wp wp-6">
                <div class="card pricing-box">
                    <div class="card-header text-uppercase">
                        Enterprise
                    </div>
                    <div class="card-block">
                        <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                        <h4 class="card-text">
                <sup class="pricing-box-currency">$</sup>
                <span class="pricing-box-price">99</span>
                <small class="text-muted text-uppercase">/month</small>
            </h4>
                    </div>
                    <ul class="list-group list-group-flush p-x">
                        <li class="list-group-item">Sed risus feugiat</li>
                        <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                        <li class="list-group-item">Sed risus feugiat fusce</li>
                    </ul>
                    <a href="#" class="btn btn-primary-outline">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<!--
<section class="section-testimonials text-xs-center bg-inverse">
    <div class="container">
        <h3 class="sr-only">Testimonials</h3>
        <div id="carousel-testimonials" class="carousel slide" data-ride="carousel" data-interval="0">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <blockquote class="blockquote">
                        <img src="img/face1.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                        <p class="h3">Good design at the front-end suggests that everything is in order at the back-end, whether or not that is the case.</p>
                        <footer>Dmitry Fadeyev</footer>
                    </blockquote>
                </div>
                <div class="carousel-item">
                    <blockquote class="blockquote">
                        <img src="img/face2.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                        <p class="h3">It’s not about knowing all the gimmicks and photo tricks. If you haven’t got the eye, no program will give it to you.</p>
                        <footer>David Carson</footer>
                    </blockquote>
                </div>
                <div class="carousel-item">
                    <blockquote class="blockquote">
                        <img src="img/face3.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                        <p class="h3">There’s a point when you’re done simplifying. Otherwise, things get really complicated.</p>
                        <footer>Frank Chimero</footer>
                    </blockquote>
                </div>
                <div class="carousel-item">
                    <blockquote class="blockquote">
                        <img src="img/face4.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                        <p class="h3">Designing for clients that don’t appreciate the value of design is like buying new tires for a rental car.</p>
                        <footer>Joel Fisher</footer>
                    </blockquote>
                </div>
                <div class="carousel-item">
                    <blockquote class="blockquote">
                        <img src="img/face5.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                        <p class="h3">Every picture owes more to other pictures painted before than it owes to nature.</p>
                        <footer>E.H. Gombrich</footer>
                    </blockquote>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li class="active"><img src="img/face1.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="0" class="img-fluid img-circle"></li>
                <li><img src="img/face2.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="1" class="img-fluid img-circle"></li>
                <li><img src="img/face3.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="2" class="img-fluid img-circle"></li>
                <li><img src="img/face4.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="3" class="img-fluid img-circle"></li>
                <li><img src="img/face5.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="4" class="img-fluid img-circle"></li>
            </ol>
        </div>
    </div>
</section>
-->

<!--
<section class="section-text">
    <div class="container">
        <h3 class="text-xs-center">Make your mark on the product industry</h3>
        <div class="row p-y-3">
            <div class="col-md-5">
                <p class="wp wp-7">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
            </div>
            <div class="col-md-5 col-md-offset-2 separator-x">
                <p class="wp wp-8">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
            </div>
        </div>
    </div>
</section>
-->

<!--
<section class="section-news">
    <div class="container">
        <h3 class="sr-only">News</h3>
        <div class="bg-inverse">
            <div class="row">
                <div class="col-md-6 p-r-0">
                    <figure class="has-light-mask m-b-0 image-effect">
                        <img src="https://images.unsplash.com/photo-1442328166075-47fe7153c128?q=80&fm=jpg&w=1080&fit=max" alt="Article thumbnail" class="img-fluid">
                    </figure>
                </div>
                <div class="col-md-6 p-l-0">
                    <article class="center-block">
                        <span class="label label-info">Featured article</span>
                        <br>
                        <h5><a href="#">Design studio with product designer Peter Finlan <span class="icon-arrow-right"></span></a></h5>
                        <p class="m-b-0">
                            <a href="#"><span class="label label-default text-uppercase"><span class="icon-tag"></span> Design Studio</span></a>
                            <a href="#"><span class="label label-default text-uppercase"><span class="icon-time"></span> 1 Hour Ago</span></a>
                        </p>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-push-6 p-l-0">
                    <figure class="has-light-mask m-b-0 image-effect">
                        <img src="https://images.unsplash.com/photo-1434394673726-e8232a5903b4?q=80&fm=jpg&w=1080&fit=max" alt="Article thumbnail" class="img-fluid">
                    </figure>
                </div>
                <div class="col-md-6 col-md-pull-6 p-r-0">
                    <article class="center-block">
                        <span class="label label-info">Featured article</span>
                        <br>
                        <h5><a href="#">How bold, emotive imagery can connect with your audience <span class="icon-arrow-right"></span></a></h5>
                        <p class="m-b-0">
                            <a href="#"><span class="label label-default text-uppercase"><span class="icon-tag"></span> Design Studio</span></a>
                            <a href="#"><span class="label label-default text-uppercase"><span class="icon-time"></span> 1 Hour Ago</span></a>
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
-->

<!--
<section class="section-signup bg-faded">
    <div class="container">
        <h3 class="text-xs-center m-b-3">Sign up to receive free updates as soon as they hit!</h3>
        <form>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="form-group has-icon-left form-control-name">
                        <label class="sr-only" for="inputName">Your name</label>
                        <input type="text" class="form-control form-control-lg" id="inputName" placeholder="Your name">
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="form-group has-icon-left form-control-email">
                        <label class="sr-only" for="inputEmail">Email address</label>
                        <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="Email address" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="form-group has-icon-left form-control-password">
                        <label class="sr-only" for="inputPassword">Enter a password</label>
                        <input type="password" class="form-control form-control-lg" id="inputPassword" placeholder="Enter a password" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Sign up for free!</button>
                    </div>
                </div>
            </div>
            <label class="c-input c-checkbox">
        <input type="checkbox" checked>
        <span class="c-indicator"></span> I agree to Land.io’s <a href="#">terms of service</a>
        </label>
        </form>
    </div>
</section>
-->


<section class="section-signup text-center" style="padding-top:40px;padding-bottom:40px;">
    <a href="{{ url('/documentation') }}" class="btn btn-primary">Check out documentation !!!</a>
</section>

@endsection

@push('scripts')
<script>
$(function () {
    $(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none',
        helpers: {
            overlay: {
                locked: false
            }
        }
	});
});
</script>
@endpush