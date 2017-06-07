<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Boggle Pvt Ltd</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/responsiveslides.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link rel="icon" type="image/gif" href="img/B_Column.svg" sizes="16*16">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

  </head>
  
  
 <?php include 'validate.php';?>

  <body data-responsejs='{ "create": [ { "prop": "width", "breakpoints": [0, 320, 481, 641, 961, 1025, 1281, 1400] }]}'>
  	<div class="wrapper">
  		<div class="container">
  			<nav class="navbar navbar-default navbar-fixed-top" style="background-color:#31383d"">
  				<div class="container-fluid"> 
  					<!-- Brand and toggle get grouped for better mobile display -->
  					<div class="navbar-header">
  						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
  						<a class="navbar-brand" href="index.php">Boggle<span> Pvt Ltd.</span></a> </div>

  						<!-- Collect the nav links, forms, and other content for toggling -->
  						<div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
  							<ul class="nav navbar-nav">
					            <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
					             <li ><a href="" class="dropdown-toggle" data-toggle="dropdown">SERVICES<span class="caret"></span></a>
              			  <ul class="dropdown-menu">
              			     <li><a href="AI.php">Machine Learning</a></li> 
                        <li><a href="RT.php">Reality Techinologies</a></li>    
                       <li><a href="FSD.php">Full Stack Developement</a></li>
                       <li><a href="mobileapp.php">Mobile applications</a></li>
              			  </ul>
	                  </li>
					            <li > <a href="careers.php">Careers</a></li>
					            <li ><a href="about_us.php">About Us</a></li>
					            
					            
					            <li class="active"><a href="contact.php" class="last">Contact Us</a></li>
					        </ul>
  						</div>
  						<!-- /.navbar-collapse --> 
  					</div>
  					<!-- /.container-fluid --> 
  				</nav>
  			</div>
  		</div>
<div class="inner-head ">
 <div class="container">
  <div class="col-lg-12">
   <h4 class="pull-left">Cantact Us</h4>
    <p class="pull-right pagination" ><a href="index.php">home</a><span>></span><a href="contact.php">Contact Us</a></p>
 </div>
</div>
</div>
<!-- inner-head end -->
<div class="inner-page contact-us">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3786.4864249981456!2d78.29821131489054!3d18.370699987496454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcc4a0cf51be68f%3A0x57e61f13af67e811!2sHamari+Mitti+Vidyalaya!5e0!3m2!1sen!2sin!4v1490421297387" width="100%" height="355" frameborder="0" style="border:0" ></iframe>
<div class="contact1">
    <h2><br/>Contact Us</h2>
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.
	<br/><br/>
  </div>
<div class="back">
<div class="container">
<br/>
  <div class="col-lg-12 contact content-header" id="pricing">
    <div class="col-md-6 no-padding-left">
    
      <h5><br/>Contact Us:</h5>
      <p><i class="fa fa-map-marker"></i>hamari mitti vidyalaya</p>
      <p><i class="fa fa-envelope"></i>email@domain.com</p>
      <p><i class="fa fa-phone"></i>9491486951</p>
      <div class="contact-detail">
      <h5>Timing:</h5>
      <p>Monday - Saturday : <span>10 AM to 6 PM</span></p>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
      </div>
    </div>
    <div class="col-md-6">
    <form  method='post' action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    	<font color="red"><?php echo $nameErr1; ?></font>
	<input type="text" placeholder="Name" name="name">
	<font color="red"><?php echo $emailErr1; ?></font>
    <input type="text" placeholder="E-Mail" name="email">
	<font color="red"><?php echo $messErr1; ?></font>
    <textarea id="" cols="30" rows="10" placeholder="Message" name="message"></textarea>
	<br/>
    <input type="submit" class="submit-bt" value="Send" name="send1">
   <span style="font-color:red;"><?php echo $note1; ?></span>
    </form>
    <br/>
   </div>
  </div> 

</div>
</div>


  <div class="copyright">
    <div class="container">
       <p>All Rights Reserved. Boggle Pvt Ltd@2017</p>
   </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script> 
<script src="js/responsiveslides.min.js"></script> 
<script src="js/response.min.js"></script> 
<script>
  $('.collapse').on('shown.bs.collapse', function(){
   $(this).parent().find(".down-icon").removeClass("down-icon").addClass("up-icon");
 }).on('hidden.bs.collapse', function(){
   $(this).parent().find(".up-icon").removeClass("up-icon").addClass("down-icon");
 });
</script>
<script>

</script>
</body>
</html>
