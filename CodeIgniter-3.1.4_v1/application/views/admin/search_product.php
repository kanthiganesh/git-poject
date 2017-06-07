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
		
</head>
<body>
<div id="prod_details">
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
</body>
</html>
