<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
	<link href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('bootstrap/css/style.css');?>" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="col-sm-offset-3 col-sm-5 login_form">

	<h3 align="center">Login</h3><br>
	 <form action="<?php echo site_url('sign_control/verify_login');?>" method="post" class="form-horizontal">
	  <div class="form-group">
	    <label class="control-label col-sm-4">Email address:</label>
	    <div class="col-sm-8">
		    <input type="text" class="form-control" size=50 name="username" id="username" ><br>
	    </div>
	   <label class=" col-sm-offset-4 col-sm-8"><?php echo form_error('username');?></label>
	  </div>
	  
	  <div class="form-group">
	    <label  class="control-label col-sm-4">Password:</label>
	    <div class="col-sm-8">
		    <input class="form-control" type="password" name="pwd" id="pwd"><br>
		 </div>
		 <label class="col-sm-offset-4 col-sm-8"><?php echo form_error('pwd');?></label>
	  </div>
	  
	  <div class="form-group">
	    <div class="col-sm-offset-4 col-sm-10">
	      <div class="checkbox">
	    <label><input type="checkbox"> Remember me</label>
	 		 </div>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-4 col-sm-8">
			  <button type="submit" class="btn btn-success">Submit</button>
		</div>
	 
	  	<label class="col-sm-offset-4 col-sm-4 invalid"> <?php echo $this->session->flashdata("error");?></label>
	  </div>
	</form> 
</div>

<div class="col-sm-offset-2 col-sm-4 ">
<br>
<?php echo '<a href="'.$AuthUrl.'"><img src="'.base_url().'glogin.png" alt=""  width="280" heigth="24"/></a>'; ?>
</div>
<div class="col-sm-4">
<br>
<?php
	echo '<a href="'.$authUrl.'" id="fb"><img src="'.base_url().'flogin.png"  width="300" heigth="35" alt=""/></a>';
?>
</div>
</body>
</html>
