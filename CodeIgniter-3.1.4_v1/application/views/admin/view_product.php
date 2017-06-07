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
	<link id="bootstrap-style" href="<?php echo base_url('bootstrap/css/font-awesome-4.7.0/css/font-awesome.css');?>" rel="stylesheet">
	<link id="bootstrap-style" href="<?php echo base_url('bootstrap/css/font-awesome-4.7.0/css/font-awesome.min.css');?>" rel="stylesheet">

	<link id="bootstrap-style" href="<?php echo base_url('bootstrap/css/font-awesome-ie7.min.css');?>" rel="stylesheet">
	
	<!-- end: CSS -->
	<!-- start: JavaScript-->
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
		
			background: grey;
		}

	</style>
	<script type="text/javascript">
	/*$(document).ready(function(){
        // When this particular form is submitted
        $('input').onkeyup(function(e){
            // Stop normal refresh of page
            e.preventDefault();
            // Use ajax
            alert('kjhjkh');
           var data = $('#search').value();
            $.ajax({
                // Send via post
                type: 'post',
                // This is your page that will process the update 
                // and return the errors/success messages
                url: "http://localhost/CodeIgniter-3.1.4/Signedin/search",
                // This is what compiles the form data
                data: data,
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

    });*/
    $(document).ready(function() {
    var search = $("#search");

        search.keyup(function() {

                $.post("http://localhost/CodeIgniter-3.1.4/Signedin/search", { search : search.val()}, function(data) {
                    $("#errors").html(data);
                });
                document.getElementById('prod_details').style.display = 'none';
			return true;
            
            
        });
});

	</script>	
		
		
</head>
<body>
		<!-- start: Header -->
	    <div class="navbar">
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
					 					 		<div class="col-md-6">
							
								  <input type="text" name="search" id="search" placeholder="Search Product" />&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<a name="addproduct"  class="btn btn-info" href="<?php echo base_url('signedin/addproduct');?>">Add Product</a>
															  
							 </div> 
							  <br>
							  <div id="errors"></div> 
							 <div id="prod_details">
							  <iframe id="SomeFrameName" style="display: none" name="SomeFrameName" src="about:blank"></iframe>
							 <div class="table-responsive">
							
							  <table class="table">
								    <thead>
								      <tr>
								        <th>S.No</th>
								        <th>Image</th>
								        <th>Product</th>
								        <th>SKU</th>
								        <th>Category</th>
								        <th>Price</th>
								        <th>Action</th>
								        
								     </tr>
								     </thead>
								    <tbody>
								   <?php $i=1;foreach($data as $key => $value):?>
								      <tr>
								        <td><?php echo $i;?></td>
								        <td><img style="width:50px;height:50px" class="img-responsive" src="<?php echo base_url('uploads/'.$value->img);?>"></td>
								        <td><?php echo $value->p_name;?></td>
								         <td><?php echo $value->srp;?></td>
								         <td>Null</td>
								          <td><?php echo $value->r_price;?></td>
								           <td><a href="<?php echo base_url('Signedin/delete/'.$value->p_name);?>"><i class="fa fa-trash-o fa-lg"></i></a>&emsp;<a href="<?php echo base_url('Signedin/edit/'.$value->p_name);?>"><i class="fa fa-pencil fa-fw"></i></a></td>
								      </tr>
								    <?php $i++; endforeach; ?>
								    </tbody>
								  </table>
								 </div>
							
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
