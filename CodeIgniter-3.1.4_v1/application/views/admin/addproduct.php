<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('bootstrap/css/bootstrap-responsive.min.css');?>" rel="stylesheet">
	<link id="base-style" href="<?php echo base_url('bootstrap/css/style.css');?>" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo base_url('bootstrap/css/style-responsive.css');?>" rel="stylesheet">
	<link id="bootstrap-style" href="<?php echo base_url('bootstrap/css/halflings.css');?>" rel="stylesheet">
	<link id="bootstrap-style" href="<?php echo base_url('bootstrap/css/glyphicons.css');?>" rel="stylesheet">
	<link id="bootstrap-style" href="<?php echo base_url('bootstrap/css/fullcalendar.css');?>" rel="stylesheet">
	<link id="bootstrap-style" href="<?php echo base_url('bootstrap/css/font-awesome.min.css');?>" rel="stylesheet">

	<link id="bootstrap-style" href="<?php echo base_url('bootstrap/css/font-awesome-ie7.min.css');?>" rel="stylesheet">

	<!-- end: CSS -->
	<!-- start: JavaScript-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url('bootstrap/js/jquery-1.9.1.min.js');?>"></script>
	<script src="<?php echo base_url('bootstrap/js/jquery-migrate-1.0.0.min.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery-ui-1.10.0.custom.min.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery.ui.touch-punch.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/modernizr.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery.cookie.js');?>"></script>
	
		<script src='<?php echo base_url('bootstrap/js/fullcalendar.min.js');?>'></script>
	
		<script src='<?php echo base_url('bootstrap/js/jquery.dataTables.min.js');?>'></script>

		<script src="<?php echo base_url('bootstrap/js/excanvas.js');?>"></script>
	<script src="<?php echo base_url('bootstrap/js/jquery.flot.js');?>"></script>
	<script src="<?php echo base_url('bootstrap/js/jquery.flot.pie.js');?>"></script>
	<script src="<?php echo base_url('bootstrap/js/jquery.flot.stack.js');?>"></script>
	<script src="<?php echo base_url('bootstrap/js/jquery.flot.resize.min.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery.chosen.min.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery.uniform.min.js');?>"></script>
		
		<script src="<?php echo base_url('bootstrap/js/jquery.cleditor.min.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery.noty.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery.elfinder.min.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery.raty.min.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery.iphone.toggle.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery.uploadify-3.1.min.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery.gritter.min.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery.imagesloaded.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery.masonry.min.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery.knob.modified.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/jquery.sparkline.min.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/counter.js');?>"></script>
	
		<script src="<?php echo base_url('bootstrap/js/retina.js');?>"></script>

		<script src="<?php echo base_url('bootstrap/js/custom.js');?>"></script>
	<!-- end: JavaScript-->	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url('bootstrap/img/favicon.ico');?>" >
	<!-- end: Favicon -->
	<style type="text/css">
		.viewproduct_div
		{
			float:left;
		}
		.addproduct_btn
		{
			float:left;
		}
		.d
		{
			background: red;
		}
		#prod_details
		{
		
			background: white;
		}
		.righticon
		{
			color:green;
		}

	</style>
	 <script>
    // When page is done loading
    $(document).ready(function(){
        // When this particular form is submitted
        $('#product_form').submit(function(e){
            // Stop normal refresh of page
            e.preventDefault();
            // Use ajax
            var formData = new FormData($(this)[0]);
            $.ajax({
                // Send via post
                type: 'post',
                // This is your page that will process the update 
                // and return the errors/success messages
                url: "http://localhost/CodeIgniter-3.1.4/addproduct/do_upload",
                // This is what compiles the form data
                data: formData,
                // This is what the ajax will do if successfully executed
                success: function(response){
                    $('#errors').html(response);
                },
                cache: false,
	            contentType: false,
	            processData: false,
                //  If the ajax is a failure, this will pop up in the console.
                error: function(response){
                    console.log(response);
                }
            });
            document.getElementById('prod_details').style.display = 'none';
			document.getElementById('after').style.display = 'block';
			return true;
        });

    });

    </script>
		
		
</head>

<body>
 <!--<div id="errors"></div>-->
		<!-- start: Header -->
	    <div class="navbar" style="margin-bottom:0px;">
      <div class="navbar-inner">
        
     
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!-- Be sure to leave the brand out there if you want it shown -->
          <a class="brand" href="#">Rightlink cms</a>
     
          
        
          <div class="nav-no-collapse header-nav">
						<ul class="nav pull-right">
				          <li class="dropdown">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
										<i class="halflings-icon white user"></i> Dennis Ji
										<span class="caret"></span>
									</a>
									<ul class="dropdown-menu">
										<li class="dropdown-menu-title">
		 									<span>Account Settings</span>
										</li>
										<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
										<li><a href="<?php echo base_url('Sign_control/logout');?>"><i class="halflings-icon off"></i> Logout</a></li>
									</ul>
								</li>
								<!-- end: User Dropdown -->
							</ul>
				</div>
				<!-- end: Header Menu -->
     
        </div>
      </div>
    </div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.html"><i class="icon-bar-chart"></i><span> Home</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span>Orders</span><span style="color:white;" class="caret"></span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span> Sub Menu 1</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
							</ul>	
						</li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Products</span><span class="caret"></span></a>
							<ul>
								<li><a class="submenu" href="<?php echo base_url().'Signedin/view_product'; ?>"><i class="icon-file-alt"></i><span class="hidden-tablet"> View Products</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								
							</ul>	
						</li>
						<li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> Costomers</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Reports</span><span class="caret"></span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
							</ul>	
						</li>
						<li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Apps</span></a></li>
						<li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> Sales Chanel</span></a></li>
						<li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Discounts</span></a></li>
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
						<li>
							<a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet">Reports</span><span class="caret"></span></a>
							<ul>
								<li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
								<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
							</ul>	
						</li>
					</ul>
				</div>
			</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10 content">
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Dashboard</a></li>
						</ul>
					 <!-- content starts here-->
					 				<div id="after" style="display:none">
 										 <div id="errors"></div> 
 									</div> 
	 
							 <div id="prod_details"> 
	<iframe id="SomeFrameName" style="display: none" name="SomeFrameName" src="about:blank"></iframe>
							 
								<div style="margin-left: 5px" class="table-responsive">
								 <form method="post" id="product_form" action="<?php echo base_url('addproduct/do_upload');?>" enctype="multipart/form-data">
								  	<table class="table" >
								  		 <tbody>
									      <tr>
												 <td><div class="form-group">
													  <label >Product Name:</label>
													  <input type="text" class="form-control" id="p_name" name="p_name">
													</div></td>
											 	 <td>
												 	  <div class="form-group">
														  <label >status</label>
														  <select class="form-control" name="status" id="status">
														    <option>Draft</option>
														    <option>Published</option>
														    <option>Deactivated</option>
														    
														  </select>
													</div>
												</td>
										  </tr>
										  <tr>
										    <td colspan="20">Discription<br>
										    <textarea cols="5" id="discription" name="discription"> </textarea>
										    </td>
										  </tr>
										  <tr>
										  <th>Pricing</th>
										  </tr>
										  <tr>
												 <td>
												 	<div class="form-group">
													  <label >Offer Pricec:</label>
													  <input type="text" class="form-control" name="o_price" id="o_price">
													</div>
													<div class="form-group">
													  <label >Retails price:</label>
													  <input type="text" class="form-control" name="r_price" id="r_price">
													</div>
													<div class="form-group">
													  <label >Sale Price:</label>
													  <input type="text" class="form-control" id="s_price" name="s_price">
													</div>
													<div class="form-group">
													  <label >Cost Price:</label>
													  <input type="text" class="form-control" id="c_price" name="c_price">
													</div>
													<div class="form-group">
													  <label >SRP:</label>
													  <input type="text" class="form-control" id="srp" name="srp">
													</div>
												 </td>
											 	 <td>
												 	 <input type="file" name="img"  size="20" id="img">
												 	Upload a JPG,GIF or PNG
												</td>
												<td>
												 	  <div class="form-group">
														  <label >Categories</label>
														  <a href="" style="color:blue;">click here to add categoris</a>
													</div>
												</td>
										  </tr>
										  <tr>
										  <td></td>
										  <td><center>
										  <input type='submit' id="submit" name="submit" value="submit"  class="btn btn-info">
										  <input type="reset" value="Cancel" class="btn btn-info">
										  </td>
										  </tr></center>
										  

									    </tbody>
									</table>
									</form>
								</div>
								
							
							
							 		  
					<!-- content ends here-->
					
			
			 </div>	
			


			
			
	   </div><!--/#content.span10-->
 
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>


	</div>
	
	<div class="clearfix"></div>


	
	
	
</body>
</html>
