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
                    
                    <!-- ================ Install Composer & Laravel ================ -->
                    
					<h1 id="install-basics" class="page-header">Installation</h1>
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
                    <p>Add this path: <code>/Users/me/.composer/vendor/bin</code></p><br>
                    
                    <!-- ================ Install LaraAdmin Package ================ -->
                    
					<h3 id="install">Install LaraAdmin Package</h3>
                    <p>1. Install Package using <code>composer</code> command.</p>
                    <pre class="mb-15"><code>composer require dwij/laraadmin</code></pre>
                    
                    <p class="mb-15">2. Configure your environment file <code>.env</code> for <b>database</b>. Also make sure about file writable permissions for <code>bootstrap/</code> & <code>storage/</code>.</p>
                    
                    <p class="mb-15">3. Add LaraAdmin Service provider in <code>config/app.php</code> :</p>
                    <pre class="mb-15"><code>Dwij\Laraadmin\LAProvider::class</code></pre>
                    
                    <p class="mb-15">4. Take file <b>backup</b> or use <b>git</b> as installation may append or change some of your files. :</p>
                    
                    <p class="mb-10">5. Run installer command :</p>
                    <pre class="mb-15"><code>php artisan la:install</code></pre>
                    
                    <p class="mb-15">6. Provide Super Admin Information like Name, Email & Password. Your account will be ready to login.</p>
                    
                    <p class="mb-15"><span class="cl-green">Your setup is completed.</span> Check your admin portal on <span class="text-danger">your-app.com/admin</span>. If any problem don't hesitate to write me on <a href="mailto:hello@laraadmin.com">hello@laraadmin.com</a> (Please provide error log).</p>
                    
                    <!-- ================ Enable Less to CSS ================ -->
                    <br>
                    
                    <h3 id="enable-less">Enable Less to CSS <small>(Optional)</small></h3>
                    <p>To generate CSS files from Less</p>
                    <pre>npm install
npm install forever -g
forever start node_modules/gulp/bin/gulp.js watch</pre><br>
                    
                    <!-- ================ Make Migration ================ -->
                    
                    <h1 id="make-migration" class="page-header">Make Migration</h1>
                    
                    <h3 id="generate-migration">Generate migration file</h3>
                    <p>Take example that you want to generate CRUD for <span class="text-danger">Course</span>.</p>
                    <pre><code>php artisan la:migration Course</code></pre>
                    <p><span class="text-danger">OR</span> you can also use syntax like below:</p>
                    <pre><code>php artisan la:migration create_course_table</code></pre><br>
                    
                    <h3 id="edit-migration">Edit Migration</h3>
                    <p>Command <code>la:migration</code> generate the migration file which contains one method call <code>Module::generate</code>:</p>
                    <pre><code>Module::generate("Courses", 'courses', '<span class="text-success">write_view_column_name_here e.g. name</span>', [
    <span class="text-success">// Write your columns here</span>
]);</code></pre>
                    <p>You need to configure your schema within given array from examples given below:</p>
                    <b class="mb-5">Row format:</b>
                    <pre><code>["col_name_db", "Label", "UI_Type", "Readonly", "Default_Value", "min_length", "max_length", "Required", "values"]</code></pre>
                    <table class="table table-bordered">
                        <tr><th>Field</th><th>Description</th></tr>
                        <tr><td>col_name_db</td><td>Database column name</td></tr>
                        <tr><td>Label</td><td>Label of Column e.g. Name / Total Audience</td></tr>
                        <tr><td>UI_Type</td><td>It defines type of Column in more General way. Please see table for <a href="#ui-types">UI Types</a>.</td></tr>
                        <tr><td>Readonly</td><td>Whether the data is readonly. Value in <code>TRUE / FALSE</code> or <code>1 / 0</code></td></tr>
                        <tr><td>Default_Value</td><td>Default value for column.</td></tr>
                        <tr><td>min_length</td><td>Minimum Length of value in integer.</td></tr>
                        <tr><td>max_length</td><td>Maximum Length of value in integer.</td></tr>
                        <tr><td>Required</td><td>Is this mandatory field in Add/Edit forms.</td></tr>
                        <tr><td>values</td><td>This is for MultiSelect / TagInput and Radio Columns.</td></tr>
                    </table>
                    
                    <b class="mb-5">Create Name / Title Column:</b>
                    <pre><code>["name", 'Name', 'Name', false, '', 5, 256, true],</code></pre>
                    <p>You also need to define the title / view column name in generate method <code>write_view_column_name_here</code> in lowercase only. </p><br>
                    
                    <h3 id="schema-ui-types">UI Types</h3>
                    
                    <table class="table table-bordered">
                        
                        <tr><th>UI Type (3)</th><th>Min Length (6)</th><th>Max Length (6)</th><th>Default Value (5)</th><th>Values (9)</th></tr>
                        <tr><td class="bold" rowspan="2">Address</td><td class="tac">Integer</td><td class="tac">Integer</td><td class="tac">In String</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["address", "Address", "Address", false, "", 0, 1000, true],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Checkbox</td><td class="tac">0</td><td class="tac">0</td><td class="tac">true / false</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["restricted", "Restricted", "Checkbox", false, false, 0, 0, false],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Currency</td><td class="tac">Minimum Value</td><td class="tac">Maximum Value</td><td class="tac">In Decimal</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["price", "Price", "Currency", false, 0.0, 0, 0, true],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Date</td><td class="tac">0</td><td class="tac">0</td><td class="tac">date("Y-m-d")<br>2016-06-23</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["date_release", "Date of Release", "Date", false, date("Y-m-d"), 0, 0, false],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Datetime</td><td class="tac">0</td><td class="tac">0</td><td class="tac">date("Y-m-d H:i:s")<br>2016-06-23 14:20:90</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["time_started", "Start Time", "Datetime", false, date("Y-m-d H:i:s"), 0, 0, false],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Decimal</td><td class="tac">Minimum Value</td><td class="tac">Maximum Value</td><td class="tac">In Decimal</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["weight", "Weight", "Decimal", false, 0.0, 0, 20, true],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Dropdown</td><td class="tac">0</td><td class="tac">0</td><td class="tac">In String / Integer</td><td>Array / @table_name</td></tr>
                        <tr><td colspan=4 class="example"><textarea rows=2 wrap='off' readonly onfocus="this.select();">["publisher", "Publisher", "Dropdown", false, "Marvel", 0, 0, false, ["Bloomsbury","Marvel","Universal"]],
["publisher", "Publisher", "Dropdown", false, 3, 0, 0, false, "@publishers"],</textarea></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Email</td><td class="tac">Integer</td><td class="tac">Integer</td><td class="tac">In String</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["email", "Email", "Email", false, "", 0, 0, false],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">File</td><td class="tac">0</td><td class="tac">256</td><td class="tac">File Path (String)</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["project_file", "Project File", "File", false, "project_file.pdf", 0, 256, false],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Float</td><td class="tac">Minimum Value</td><td class="tac">Maximum Value</td><td class="tac">In Float</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["weight", "Weight", "Float", false, 0.0, 0, 20.00, true],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">HTML</td><td class="tac">0</td><td class="tac">0</td><td class="tac">In String</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["biography", "Biography", "HTML", false, "<p>This is description</p>", 0, 0, true],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Image</td><td class="tac">0</td><td class="tac">256</td><td class="tac">Image Path (String)</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["profile_image", "Profile Image", "Image", false, "img_path.jpg", 0, 256, false],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Integer</td><td class="tac">Minimum Value</td><td class="tac">Maximum Value</td><td class="tac">In Integer</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["pages", "Pages", "Integer", false, 0, 0, 5000, false],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Mobile</td><td class="tac">0</td><td class="tac">20</td><td class="tac">In String</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["mobile", "Mobile", "Mobile", false, "+91 8888888888", 0, 20, false],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Multiselect</td><td class="tac">0</td><td class="tac">Max Selections</td><td class="tac">In String / Integer</td><td>Array / @table_name</td></tr>
                        <tr><td colspan=4 class="example"><textarea rows=2 wrap='off' readonly onfocus="this.select();">["media_type", "Media Type", "Multiselect", false, ["Audiobook"], 0, 0, false, ["Print","Audiobook","E-book"]],
["media_type", "Media Type", "Multiselect", false, [2,3], 0, 0, false, @media_types],</textarea></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Name</td><td class="tac">5</td><td class="tac">256</td><td class="tac">In String</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["name", "Name", "Name", false, "John Doe", 5, 256, true],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Password</td><td class="tac">6</td><td class="tac">256</td><td class="tac">In String</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["password", "Password", "Password", false, "", 6, 256, true],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Radio</td><td class="tac">0</td><td class="tac">0</td><td class="tac">Array</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["status", "Status", "Radio", false, "Published", 0, 0, false, ["Draft","Published","Unpublished"]],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">String</td><td class="tac">0 Integer</td><td class="tac">256 Integer</td><td class="tac">In String</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["author", "Author", "String", false, "JRR Tolkien", 0, 256, true],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Taginput</td><td class="tac">0</td><td class="tac">0</td><td class="tac">Array</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["genre", "Genre", "Taginput", false, ["Fantacy","Adventure"], 0, 0, false],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">Textarea</td><td class="tac">0 Integer</td><td class="tac">1000 Integer</td><td class="tac">In String</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["description", "Description", "Textarea", false, "", 0, 1000, false],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">TextField</td><td class="tac">5 Integer</td><td class="tac">256 Integer</td><td class="tac">In String</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["short_intro", "Short Introduction", "TextField", false, "", 5, 256, true],' readonly onfocus="this.select();"></td></tr>
                        
                        <tr><td class="bold" rowspan="2">URL</td><td class="tac">0</td><td class="tac">Default 256</td><td class="tac">In String</td><td></td></tr>
                        <tr><td colspan=4 class="example"><input value='["website", "Website", "URL", false, "http://dwij.in", 0, 0, false],' readonly onfocus="this.select();"></td></tr>
                    </table>
                    
                    <p>Once you are done with creating Schema your generate call will look like this:</p>
                    <pre><code>Module::generate("Courses", 'courses', '<span class="text-success">name</span>', [
    ["name", 'Name', 'Name', false, '', 5, 256, true],
    ["teacher", 'Teacher', 'String', false, '', 0, 256, true],
    ["fees", 'Fees', 'Currency', false, 0.0, 0, 2, true],
    ["description", 'Description', 'Textarea', false, '', 0, 1000, false]
]);</code></pre>
                    <p>Now run migrate command to create database table.</p>
                    <pre><code>php artisan migrate</code></pre>
                    <p>Once the table is successfully generated, you can genrate CRUD.</p>
                    <h1 id="crud-generation" class="page-header">Generate CRUD</h1>
					<p>Once Schema in Migration ready and migrated successfully, it takes only one command to generate CRUDs.</p>
                    <pre><code>php artisan la:crud courses</code></pre>
                    <p>Voila... This will generate following things:</p>
                    <ul>
                        <li>Controller</li>
                        <li>Model</li>
                        <li>Views: Index, Edit, Show</li>
                        <li>Append Route Resources</li>
                        <li>Add Menu</li>
                    </ul>
                    <p>Enjoy the adventure !!! All queries will be welcomed on <a href="mailto:hello@laraadmin.com">hello@laraadmin.com</a>. Follow me on: </p>
				</div>
			</div>
			
			
			
			
			<div class="col-md-3" role="complementary">
				<nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top">
					<ul class="nav bs-docs-sidenav">
						<li class=""> <a href="#install-basics">Installation</a>
							<ul class="nav">
								<li class=""><a href="#install-composer">Install Composer &amp; Laravel</a></li>
								<li class=""><a href="#install">Install LaraAdmin Package</a></li>
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
