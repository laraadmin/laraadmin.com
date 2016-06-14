@extends('layouts.app')

@section("nav", "nav-simple")

@section('content')
<header class="bg-inverse text-xs-center" role="banner" style="background: #663fb5 url(img/bg-header-5.jpg) no-repeat center bottom;background-size:cover;">
    <div class="jumbotron" style="padding:3rem;">
        <div class="container">
            <h1 class="display-3">Documentation</h1>
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
					<h1 id="" class="page-header">Installation</h1>
					<h3 id="install-composer-laravel">Install Composer & Laravel</h3>
					
                    <b class="mb-5">Install Composer:</b>
					<pre><code>sudo apt-get update
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer</code></pre>
					
					<b class="mb-5">Install Laravel Installer for Composer:</b><br>
                    <b>For Linux:</b>
					<pre><code>composer global require "laravel/installer"
export PATH="~/.composer/vendor/bin:$PATH"</code></pre>
                    <b>For MacOSX</b>
                    <pre><code>composer global require "laravel/installer"
sudo nano /etc/paths</code></pre>
                    <p>Add this path: <code>/Users/me/.composer/vendor/bin</code></p>
                    
					<h3 id="clone-laraadmin-project">Clone LaraAdmin Project</h3>
                    <pre><code>git clone https://github.com/gdbhosale/laraadmin.git
cd laraadmin
composer install
cp .env.example .env
nano .env</code></pre>
                    <p>Configure your environment file <code>.env</code> for database.</p>
                    <b class="mb-5">Generate application key:</b>
                    <pre><code>php artisan key:generate</code></pre>
                    
                    <b class="mb-5">Migrate:</b>
                    <pre><code>php artisan migrate</code></pre>
                    
                    <h3 id="enable-less">Enable Less to CSS <small>(Optional)</small></h3>
                    <p>To generate CSS files from Less</p>
                    <pre>npm install
npm install forever -g
forever node_modules/gulp/bin/gulp.js watch</pre><br>
                    
                    <p>Your Application is ready to serve you. Default Super Admin <span class="text-danger">login credentials</span> are as below:<br>
                        <b>Username:</b> laraadmin@gmail.com<br>
                        <b>Passowrd:</b> 12345678
                    </p>
                    
                    <h1 id="make-migration" class="page-header">Make Migration</h1>
                    <h3 id="generate-migration">Generate migration file</h3>
                    <p>Take example that you want to generate CRUD for <span class="text-danger">Course</span>.</p>
                    <pre><code>php artisan la:migration Course</code></pre>
                    <h3 id="edit-migration">Edit Migration</h3>
                    <p>Command <code>la:migration</code> generate the migration file which contains one method call <code>Module::generate</code>:</p>
                    <pre><code>Module::generate("Courses", 'courses', 'name', [
            
        ]);</code></pre>
                    
                    
                    <h1 id="crud-generation" class="page-header">Generate CRUD</h1>
					<p>Once Schema in Migration ready and executed. There remains only one command to generate the CRUDs.</p>
                    
                    <br><br><br>
				</div>
			</div>
			
			
			
			
			<div class="col-md-3" role="complementary">
				<nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top">
					<ul class="nav bs-docs-sidenav">
						<li class=""> <a href="#install-composer-laravel">Installation</a>
							<ul class="nav">
								<li class=""><a href="#install-composer">Install Composer &amp; Laravel</a></li>
								<li class=""><a href="#clone-laraadmin-project">Clone Project</a></li>
                                <li class=""><a href="#enable-less">Enable Less</a></li>
							</ul>
						</li>
						<li class=""><a href="#make-migration">Make Migration</a>
                            <ul class="nav">
								<li class=""><a href="#generate-migration">Generate migration</a></li>
								<li class=""><a href="#edit-migration">Edit Migration</a></li>
							</ul>
                        </li>
                        
						<li><a href="#crud-generation">Generate CRUD</a></li>
					</ul>
                 </nav>
			</div>
		</div>
    </div>
</section>

@endsection
