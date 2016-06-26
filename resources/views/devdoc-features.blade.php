@extends('layouts.app')

@section("nav", "nav-simple")

@section('content')
<header class="bg-inverse text-xs-center" role="banner" style="background: #663fb5 url(img/bg-header-5.jpg) no-repeat center bottom;background-size:cover;">
    <div class="jumbotron" style="padding:3rem;">
        <div class="container">
            <h1 class="display-3">Development Doc</h1>
            <h4>Features Listing</h4>
        </div>
    </div>
</header>

<!-- Intro
================================================== -->

<section class="section-intro bg-faded">
    <div class="container bs-docs-container">
        <div class="row">
			<div class="col-md-9" role="main">
				<div class="bs-docs-section">
                    
					<h1 id="install-basics" class="page-header">Feature Listing</h1>
					
				</div>
			</div>
			
			
			
			
			<div class="col-md-3" role="complementary">
				<nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top">
					<ul class="nav bs-docs-sidenav">
                        <li><h1 style="font-size:30px;margin-left:20px;">Features</h1></li>
						<!--<li class=""> <a href="#install-basics">Installation</a>
							<ul class="nav">
								<li class=""><a href="#install-composer-laravel">Install Composer &amp; Laravel</a></li>
								<li class=""><a href="#install">Install LaraAdmin Package</a></li>
                                <li class=""><a href="#enable-less">Enable Less</a></li>
							</ul>
						</li>
						-->
					</ul>
                 </nav>
			</div>
		</div>
    </div>
</section>

@endsection

@push('scripts')
<script>
$(function () {
    $(window).scroll(function() {
        var top = $(this).scrollTop();
        var bottom = ($(document).height() - top);
        var str = top+" - "+$(document).height()+" - " + bottom;
        // console.log(str);
        
        if(bottom < 470) {
            // console.log("bottom "+str);
            
            $(".bs-docs-sidebar").addClass("affix-bottom");
            $(".bs-docs-sidebar").removeClass("affix-top");
            $(".bs-docs-sidebar").removeClass("affix");
            $(".bs-docs-sidebar").css("top", ""+($(document).height() - 970)+"px");
        } else if(top > 400) {
            // console.log("middle "+str);
            
            $(".bs-docs-sidebar").addClass("affix");
            $(".bs-docs-sidebar").removeClass("affix-top");
            $(".bs-docs-sidebar").removeClass("affix-bottom");
            $(".bs-docs-sidebar").css("top", "");
        } else {
            // console.log("top "+str);
            
            $(".bs-docs-sidebar").removeClass("affix");
            $(".bs-docs-sidebar").removeClass("affix-bottom");
            $(".bs-docs-sidebar").addClass("affix-top");
            $(".bs-docs-sidebar").css("top", "");
        }
    });
});
</script>
@endpush