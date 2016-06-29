@extends('layouts.app')

@section("nav", "nav-simple")
@section("logo", asset('img/laraadmin-256.png'))

@section('content')
<header class="bg-inverse text-xs-center" role="banner" style="background: #663fb5 url(img/bg-header-5.jpg) no-repeat center bottom;background-size:cover;">
    <div class="jumbotron" style="padding:3rem;">
        <div class="container">
            <h1 class="display-3">Features</h1>
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
                    <h1 id="feature-gallery" class="page-header">Feature Gallery</h1>
                    
                    @include('fancy-gallery')
                    
					<h1 id="install-basics" class="page-header">Feature Listing</h1>
                    <ol class="featuresl">
                        <li>Custom <a href="{{ url('documentation#generate-migration') }}">Migration file</a> generation <i class='fa fa-check'></i></li>
                        <li id="crud-generation"><b>CRUD Generation</b> <i class="fa fa-check"></i>
                            <ul>
                                <li>Generate Controller <i class="fa fa-check"></i></li>
                                <li>Generate Model <i class="fa fa-check"></i></li>
                                <li>Append Routes for resources + server side <a target="_blank" href="http://datatables.net">datatables</a> <i class="fa fa-check"></i></li>
                                <li>Add to Menu <i class="fa fa-check"></i> - Currently by appending <code>layouts/partials/sidebar.blade.php</code></li>
                                <li>Generate Views. <i class='fa fa-check'></i>
                                    <ul>
                                        <li>index.blade.php - Listing via Datatables + Contains Add Form in Modal</li>
                                        <li>edit.blade.php</li>
                                        <li>show.blade.php - Customizable <a class="fblink" href="{{ url('img/laraadmin/laraadmin-employee-view.jpg') }}">show view</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="module-manager"><b>Module Manager</b> <i class="fa fa-check"></i><br>
                            Module is a database table itself with more meta information about fields.<br>
                            Module Manager can create new Module as well as allow us to edit Module/Table Schema fields.
                            <ul>
                                <li>Module Generation via <a href="{{ url('documentation#generate-migration') }}">custom migrations</a> <i class='fa fa-check'></i></li>
                                <li>Create Module Field <i class='fa fa-times'></i> - To be done</li>
                                <li>Edit Module Field <i class='fa fa-times'></i> - To be done</li>
                                <li>Generate CRUD from existing schema <i class='fa fa-check'></i></li>
                                <li>Generate Migration file from existing schema <i class='fa fa-check'></i></li>
                            </ul>
                        </li>
                        <li>Module Field Metadata <i class='fa fa-check'></i><br>
                            <ul>
                                <li>colname - db table column name</li>
                                <li>label - Field label</li>
                                <li>module - Module ID</li>
                                <li>field_type - Field / UI Types (As listed below.)</li>
                                <li>readonly - Is field Readonly</li>
                                <li>defaultvalue - Default value of Field</li>
                                <li>minlength - Minimum Length or Value depends on Field Type</li>
                                <li>maxlength - Maximum Length or Value depends on Field Type</li>
                                <li>required - Is it necessary field</li>
                                <li>popup_vals - Popup values for Radio, Multiselect, Taginput
                                    <ul>
                                        <li>Can be given as array or linked to another Module or Table <i class='fa fa-times'></i></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>Module Field Types <i class="fa fa-check"></i>
                            <ol>
                                <li>Address <i class="fa fa-check"></i></li>
                                <li>Checkbox <i class="fa fa-check"></i></li>
                                <li>Currency <i class="fa fa-check"></i></li>
                                <li>Date <i class="fa fa-check"></i></li>
                                <li>Datetime <i class="fa fa-check"></i></li>
                                <li>Decimal <i class="fa fa-check"></i></li>
                                <li>Dropdown <i class="fa fa-check"></i></li>
                                <li>Email <i class="fa fa-check"></i></li>
                                <li>File <i class="fa fa-check"></i> - Upload File via Media Manager</li>
                                <li>Files <i class="fa fa-times"></i> - to be done via json</li>
                                <li>Float <i class="fa fa-check"></i></li>
                                <li>HTML <i class="fa fa-check"></i></li>
                                <li>Image <i class="fa fa-check"></i> - Upload Image via Media Manager</li>
                                <li>Gallery <i class="fa fa-times"></i> - to be done via json</li>
                                <li>Integer <i class="fa fa-check"></i></li>
                                <li>Mobile / Phone <i class="fa fa-check"></i></li>
                                <li>Multiselect <i class="fa fa-check"></i></li>
                                <li>Name <i class="fa fa-check"></i></li>
                                <li>Password <i class="fa fa-check"></i></li>
                                <li>Radio <i class="fa fa-check"></i></li>
                                <li>String <i class="fa fa-check"></i></li>
                                <li>Taginput <i class="fa fa-check"></i></li>
                                <li>Textarea <i class="fa fa-check"></i></li>
                                <li>TextField <i class="fa fa-check"></i></li>
                                <li>URL <i class="fa fa-check"></i></li>
                            </ol>
                        </li>
                        <li id="workflows"><b>Workflows</b> <i class="fa fa-times"></i> - To be done.<br>
                            Development will starts once Module Manager thorouly tested.
                            <ul>
                                <li>Cron based event handling <i class='fa fa-times'></i></li>
                                <li>Event when Module record added <i class='fa fa-times'></i></li>
                                <li>Event when Module record updated <i class='fa fa-times'></i></li>
                                <li>Detect event when external API's changes data. <i class='fa fa-times'></i></li>
                            </ul>
                        </li>
                        
                        <li>Role Management <i class='fa fa-times'></i><br>
                            To be done.
                            <ul>
                                <li>Role CRUD <i class='fa fa-times'></i></li>
                                <li>Role Hierarchy <i class='fa fa-times'></i></li>
                            </ul>
                        </li>
                        <li>Department Management <i class='fa fa-times'></i> - To be done.</li>
                        <li>Access Control <i class='fa fa-times'></i><br>
                            To be done
                            <ul>
                                <li>for Roles <i class='fa fa-times'></i></li>
                                <li>for Individual User <i class='fa fa-times'></i></li>
                            </ul>
                        </li>
                        <li id="media-manager"><b>Media Manager</b> <i class='fa fa-check'></i>  - Basic functionalities ready.
                            <ul>
                                <li>Add Files & Images <i class='fa fa-check'></i></li>
                                <li>Single File selection for Image & File Fields <i class='fa fa-check'></i></li>
                                <li>Create Multiple Upload Folder configuration in <code>config/laraadmin.php</code> <i class='fa fa-times'></i></li>
                                <li>File Type(MIME) selection in File Field Types <i class='fa fa-times'></i></li>
                            </ul>
                        </li>
                        <li><b>Module File Editor</b> <i class='fa fa-check'></i><br>
                            Integration of <a href="https://ace.c9.io/#nav=embedding">Ace Code Editor</a> for online code editing.<br>
                            <ul>
                                <li>This will help customising views generated by CRUD. <i class='fa fa-check'></i></li>
                                <li>Create new files <i class='fa fa-times'></i></li>
                            </ul>
                        </li>
                        
                        <li>Standard <b>REST API</b> creations for Mobile Apps <i class='fa fa-times'></i><br>
                            This will also process the Module Metadata for Fields.
                            <ul>
                                <li>Needs generated tokens for security. <i class='fa fa-times'></i></li>
                            </ul>
                        </li>
                        
                        <li>Tool to Modularise existing Tables/Entities <i class='fa fa-times'></i></li>
                        <li id="menu-manager"><b>Menu Manager</b> <i class='fa fa-times'></i>
                            <ul>
                                <li>Add Modules <i class='fa fa-times'></i></li>
                                <li>Add Custom Menus <i class='fa fa-times'></i></li>
                                <li>Add Custom Controllers <i class='fa fa-times'></i></li>
                                <li>Manage Hierarchy <i class='fa fa-times'></i> - Use <a href="https://johnny.github.io/jquery-sortable/">jQuery Sortable</a></li>
                            </ul>
                        </li>
                    </ol>
                    
				</div>
			</div>
			
			
			
			
			<div class="col-md-3" role="complementary">
				<nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix-top">
					<ul class="nav bs-docs-sidenav">
                        <li><h1 style="font-size:30px;margin-left:20px;">Features</h1></li>
						<li><a href="#crud-generation"><i class="fa fa-cogs"></i> Crud Generation</a></li>
						<li><a href="#module-manager"><i class="fa fa-cube"></i> Module Manager</a></li>
                        <li><a href="#workflows"><i class="fa fa-toggle-on"></i> Workflows</a></li>
                        <li><a href="#media-manager"><i class="fa fa-folder-open-o"></i> Media Manager</a></li>
                        <li><a href="#menu-manager"><i class="fa fa-bars"></i> Menu Manager</a></li>
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