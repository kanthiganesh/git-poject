<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link id="bootstrap-style" href="<?php echo base_url('bootstrap/css/bootstrap-3.3.7-dist/css/bootstrap.min.css');?>" rel="stylesheet">
<link id="base-style" href="<?php echo base_url('bootstrap/css/bootstrap-3.3.7-dist/css/style.css');?>" rel="stylesheet">
<script src="<?php echo base_url('bootstrap/css/bootstrap-3.3.7-dist/js/bootstrap.min.js');?>"></script>
<style>
@font-face
{
	font-family:glyphicons-halflings-regular;
	src:url(glyphicons-halflings-regular.ttf);
}
a{
  text-decoration:none;
}
active a:hover{
color:red;
}
div a:hover
{
  color:#cc0000;
  
}
.rg{ 
  color:white;
}
a:visted{
color:#cc0000;
}

.right{
   float:right;
   margin-top:8px;
  
}

nav
{
    top:35px;
	position:fixed;
	
	
}
li:hover
{
	background:orange;
}
   
nav div div ul li a:hover{
    background-color:#cc0000;
	color:#FFFF00;
}
nav div div ul li a:visited{
    background-color:#cc0000;
	color:#FFFF00;
}
.id{
   background-color:black;
   text-color:white;
   right:200px;
}
 div p{
 align:100px 100px 100px 10px;
}	

</style>


</head>
<body>

<div class="right">
<i class="fa fa-lock" style="font-size:12px"></i><a href="#" style="margin:30px 20px 10px 0px">Login</a>
<i class="fa fa-sign-in" style="font-size:12px"></i><a href="#" style="margin:10px 60px 10px 0px">Register</a>
</div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <ul class="nav navbar-nav ">
	  
      <li style="margin-left:80px"><a href="#" >Home</a></li>
      <li ><a href="#">Activity</a></li>
      <li><a href="#">Network</a></li>
      <li><a href="#">News</a></li>
	  <li><a href="#">Events</a></li>
      <li><a href="#">Gallery</a></li>
      <li><a href="fom2.html">Store</a></li>
	  <li><a href="#">Contact us</a></li>
	  </ul>
	 
	<ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-cart"></span>Cart</a></li>
    </ul>
	 </div>
	
  
	
  </div>
 </nav>
<h4 style="margin:40px 0px 0px 110px">HOME/STORE</h4>
 
	 <div>
	
	 <table><tr>
	 <?php foreach($product as $key):?>
	 <th>

	<a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:190px; margin:15px 20px 20px 100px" class="img-responsive" src="<?php echo base_url('uploads/'.$key->img);?>"></a></th>
	<?php endforeach; ?>

	 <th>

	<a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:190px; margin:15px 20px 20px 100px" class="img-responsive" src="<?php echo base_url('uploads/1.jpg');?>"></a></th>
	 
	 <th><a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:190px; margin:15px 10px 20px 20px" class="img-responsive" src="<?php echo base_url('uploads/2.jpg');?>"></a></th>
	<th><a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:190px;margin:15px 10px 20px 20px" class="img-responsive" src="<?php echo base_url('uploads/6.jpg');?>"></a></th> <th>
	<a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:190px; margin:15px 10px 20px 20px" class="img-responsive" src="<?php echo base_url('uploads/5.jpg');?>"></a></th>
	
	<td style="background-color:#707070;height:220px;width:220px;font-size:11px;" class="table-responsive" >
	<p class="rg"style="margin-left:20px">STANDARD PRODUCTS</p> <p class="rg" style="margin-left:20px">INDIVIDUAL PRODUCTS</p>
	<p class="rg"style="margin-left:25px" >Students</p><p class="rg"style="margin-left:25px">Alumni</p>
	<p class="rg"style="margin-left:25px">Faculty</p><p class="rg"style="margin-left:25px">Sports</p><p class="rg"style="margin-left:25px">Merchandise</p>
	<p class="rg"style="margin-left:25px">Accessories</p></td></tr>
	<tr ><td ><p style="margin:-15px 0px 0px 100px">Standard Student kit</p>
	<p style="margin:-5px 0px 0px 100px"><strong>Rs 1499/</strong> </p>
 	</td><td><p style="margin:-15px 0px 0px 18px">Standard Student kit</p>
	<p style="margin:-5px 0px 0px 20px"><strong>Rs 1499/ <strong></p></td><td>
	<p style="margin:-10px 0px 0px 20px">Standard Student kit</p>
	<p style="margin:-5px 0px 0px 20px"><strong>Rs 1499/ <strong></p></td><td>
	<p style="margin:-15px 0px 0px 20px">Standard Student kit</p>
	<p style="margin:-5px 0px 0px 20px"><strong>Rs 1499/ </strong></p></td></tr>
	
	
	</table>
	
	</div>
	<table><tr><th>
	  <div><a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:190px;margin:15px 20px 20px 100px" class="img-responsive" src="<?php echo base_url('uploads/1.jpg');?>"></a></th>
	  <th><a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:190px;margin:15px 10px 20px 20px" class="img-responsive" src="<?php echo base_url('uploads/2.jpg');?>"></a></th>
	 <th><a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:190px;margin:15px 10px 20px 20px" class="img-responsive" src="<?php echo base_url('uploads/6.jpg');?>"></a></th>
	 <th><a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:190px;margin:15px 10px 20px 20px" class="img-responsive" src="<?php echo base_url('uploads/5.jpg');?>"></a></div></th>
	, <tr><td><p style="margin:-15px 0px 0px 100px">Standard Student kit</p>
	 <p style="margin:-5px 0px 0px 100px"><strong>Rs 1499/ </strong></p>
 	</td><td><p style="margin:0px 0px 0px 18px" >Standard Student kit</p>
	<p style="margin:-5px 0px 0px 20px"><strong>Rs 1499/</strong> </p></td><td>
	<p style="margin:0px 0px 0px 20px">Standard Student kit</p>
	<p style="margin:-5px 0px 0px 20px"><strong>Rs 1499/ </strong></p></td>
	<td><p style="margin:-15px 0px 0px 20px">Standard Student kit</p>
	<p style="margin:-5px 0px 0px 20px"><strong>Rs 1499/</strong></p></td></tr>
	
	
	</table>
	 
	 

