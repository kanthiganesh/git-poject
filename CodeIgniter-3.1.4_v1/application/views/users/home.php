<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css", rel="stylesheet", integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u", crossorigin="anonymous">
<link href="<?php echo base_url('bootstrap/css/style.css'); ?>" rel="stylesheet" >

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
   margin-top:10px;
  
}

nav
{
    top:40px;
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
.cart
{
	color:white;
	

}
.space
{
	margin-left: 6cm;
}
</style>
<script type="text/javascript">
$.ajax({
  url: 'https://randomuser.me/api/?results=5000',
  dataType: 'json',
  success: function(data) {
    console.log(data);
  }
});
</script>

</head>
<body>
<div class="right">
<i class="fa fa-lock" style="font-size:12px"></i><a href="#" style="margin:30px 20px 10px 0px">&nbsp;Login</a>
<i class="fa fa-sign-in" style="font-size:12px"></i><a  href="#" style="margin:10px 60px 10px 0px">&nbsp;Register</a>
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
      <li><a href="second.html">Store</a></li>
	  <li><a href="#">Contact us</a></li>
	   <li class="space"><a href="<?php echo base_url('users/Select_product/cart_details');?>" class="cart"><span class="fa fa-shopping-cart " style="font-size:12px">&nbsp;</span>Cart&nbsp;<span class="badge white" id="cartno"><?php echo $no_products;?></span></a></li>
	  </ul>
	 </div>
	
  
	
  </div>
 </nav>
<h4 style="margin:50px 0px 0px 110px">HOME/STORE</h4>
	 	

<div class="col-md-offset-1 col-sm-offset-1 col-md-9 col-sm-8" style="margin-top:10px">
	

	<?php foreach($product as $key):?>
	 		<div class="col-sm-6 col-md-3 "><figure><a href="<?php echo base_url('users/user_control/store/'.$key->p_name);?>"><img style="width:200px; height:200px" class="img-responsive" src="<?php echo base_url('uploads/'.$key->img);?>"> </a><figcaption><?php echo $key->p_name;?><br/><strong>Rs.<?php echo $key->r_price;?></strong></figcaption></figure></div>
	<?php endforeach; ?>

  
   <div class=" col-sm-6 col-md-3 "><figure><a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:200px" class="img-responsive" src="<?php echo base_url('uploads/1.jpg');?>"></a> <figcaption>Standard Student Kit<br/><strong>Rs.1499</strong></figcaption></figure></div>
	<div class="col-sm-6 col-md-3 "> <figure><a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px;height:200px" class="img-responsive" src="<?php echo base_url('uploads/2.jpg');?>"> </a><figcaption> Standard Student Kit<br/><strong>Rs.1499</strong></figcaption></figure>
	</div>
<div class="col-sm-6 col-md-3 "><figure><a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:200px" class="img-responsive" src="<?php echo base_url('uploads/6.jpg');?>"></figure></a><figcaption>Standard Student Kit<br/><strong>Rs.1499</strong></figcaption></figure></div>
	<div class="col-sm-6 col-md-3 > <figure><a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:200px" class="img-responsive" src="<?php echo base_url('uploads/5.jpg');?>"></a> <figcaption>Standard Student Kit<br/><strong>Rs.1499</strong></figcaption></figure></div>

	
	
	    
   <div class="col-sm-6 col-md-3  "><figure><a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:200px" class="img-responsive" src="<?php echo base_url('uploads/1.jpg');?>"></a> <figcaption>Standard Student Kit<br/><strong>Rs.1499</strong></figcaption></figure></div>
	<div class="col-sm-6 col-md-3 "> <figure><a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px;height:200px" class="img-responsive" src="<?php echo base_url('uploads/6.jpg');?>"> </a><figcaption>Standard Student Kit<br/><strong>Rs.1499</strong></figcaption></figure></div>
<div class="col-sm-6 col-md-3 "><figure><a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:200px" class="img-responsive" src="<?php echo base_url('uploads/5.jpg');?>"></a><figcaption>Standard Student Kit<br/><strong>Rs.1499</strong></figcaption></figure></div>
	<div class="col-sm-6 col-md-3 "> <figure><a href="<?php echo base_url('users/user_control/store');?>"><img style="width:200px; height:200px" class="img-responsive" src="<?php echo base_url('uploads/5.jpg');?>"></a> <figcaption>Standard Student Kit<br/><strong>Rs.1499</strong></figcaption></figure></div>
</div> 
	  
	<div class="col-md-2 col-sm-3">
	 <div ><table>
			<tr> <td style="background-color:#707070;height:180px;width:200px;font-size:11px;" class="table-responsive" >
			<p class="rg"style="margin-left:20px">STANDARD PRODUCTS</p> <p class="rg" style="margin-left:20px">INDIVIDUAL PRODUCTS</p>
			<p class="rg"style="margin-left:25px" >Students</p><p class="rg"style="margin-left:25px">Alumni</p>
			<p class="rg"style="margin-left:25px">Faculty</p><p class="rg"style="margin-left:25px">Sports</p><p class="rg"style="margin-left:25px">Merchandise</p>
			<p class="rg"style="margin-left:25px">Accessories</p></td></tr></table>
	</div>
</div>
</body>
</html>
	 
	 

