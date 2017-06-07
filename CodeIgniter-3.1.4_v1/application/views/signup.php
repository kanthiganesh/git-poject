<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('bootstrap/css/style.css');?>" rel="stylesheet">
</head>
<body>
<!--
<div align="center">
<form action="insertdata" method="post">
<table>
<tr>
	<td>Username</td><td><input type="text" name="username" id="username"></td>
</tr>
<tr>
	<td>Email</td><td><input type="text" name="email" id="email"></td>
</tr>
<tr>
	<td>Country</td><td><input type="text" name="country" id="country"></td>
</tr>
<tr>
<td>Password</td><td><input type="password" name="pwd" id="pwd"></td>
</tr>
<tr>
<td>Confirm Password</td><td><input type="password" name="cpwd" name="cpwd"></td>
</tr>
<tr>
<td></td><td><input type="submit" value="Submit" name="Submit" ></td>
</tr>
</table>
</form>
</div>-->
<div class="col-sm-offset-3 col-sm-5 login_form">
	<h3 align="center">Signup</h3><br>
	 <form action="insertdata" method="post" class="form-horizontal">
	  <div class="form-group">
	    <label class="control-label col-sm-4">Username</label>
	    <div class="col-sm-8">
		    <input type="text" class="form-control" size=50 name="username" id="username" >
	    </div>
	  </div>
	  <div class="form-group">
	    <label  class="control-label col-sm-4">Email</label>
	    <div class="col-sm-8">
		    <input class="form-control" type="email" name="email" id="email">
		 </div>
	  </div>
	   <div class="form-group">
	    <label  class="control-label col-sm-4">Country</label>
	    <div class="col-sm-8">
		    <input class="form-control" type="text" name="country" id="country">
		 </div>
	  </div>
	   <div class="form-group">
	    <label  class="control-label col-sm-4">Password</label>
	    <div class="col-sm-8">
		    <input class="form-control" type="password" name="pwd" id="pwd">
		 </div>
	  </div>
	   <div class="form-group">
	    <label  class="control-label col-sm-4">Password:</label>
	    <div class="col-sm-8">
		    <input class="form-control" type="password" name="cpwd" id="cpwd">
		 </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-4 col-sm-8">
			  <button type="submit" class="btn btn-success">Submit</button>
		</div>
	  </div>
	</form> 
</div>

</body>
</html>
