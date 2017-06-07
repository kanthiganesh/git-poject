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
        <nav class="navbar  navbar-default navbar-fixed-top" style="background-color:#31383d">
          <div class="container-fluid"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle  collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" >Boggle<span> Pvt Ltd.</span></a> </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav list-over-slide">
                    <li class="active"><a href="index.php"> Home <span class="sr-only">(current)</span></a></li>
                    <li ><a href="" class="dropdown-toggle" data-toggle="dropdown"> SERVICES<span class="caret"></span></a>
              			  <ul class="dropdown-menu">
                           
                      <li><a href="AI.php">Machine Learning</a></li> 
                        <li><a href="RT.php">AR  VR</a></li>    
                       <li><a href="FSD.php">Full Stack Developement</a></li>
                       <li><a href="mobileapp.php">Mobile applications</a></li>
              			 
              			    
              			   
              			  </ul>
	                  </li>
                    <li ><a href="careers.php"> Careers</a></li>
                    <li ><a href="about_us.php">About Us</a></li>
                  </ul>
            </div>
            <!-- /.navbar-collapse --> 
        </div>
        <!-- /.container-fluid --> 
    </nav>
</div>
</div>
<div class="slideback">
<div class="sliderdiv">
<div class="slider">
  <div class="rslides_container">
    <ul class="rslides">
     <!-- <li> <img src="img/slider_medium.jpg" data-min-width-1100="img/slider.jpg" alt="">
</li>-->
<li><img src="img/slider1_medium.jpg" data-min-width-1100="img/slider1.jpg" alt="" ><h2><span id="slidetext">Machine Learning</span></h2>
</li>
 <li> <img src="img/slider6_medium.jpg" data-min-width-1100="img/slider6.jpg" alt=""><span id="slidetext">Virtual Reality</span>
</li>
<li> <img src="img/slider5_medium.png" data-min-width-1100="img/slider5.png" alt=""><span id="slidetext">Augmented Reality</span>
</li>
 <li> <img src="img/slider4_medium.png" data-min-width-1100="img/slider4.png" alt=""><span id="slidetext">Full Stack Development</span>
</li>
 <li> <img src="img/slider8_medium.jpg" data-min-width-1100="img/slider8.jpg" alt=""><span id="slidetext">Full Stack Development</span>
</li>
 <li> <img src="img/slider7_medium.jpg" data-min-width-1100="img/slider7.jpg" alt=""><span id="slidetext">Mobile Application Development</span><!--<center><h2 style="color:black;">App development</h2></center>-->
</li>

</ul>
</div>
</div>
</div>
</div>
<!--
<div class="promo">
  <div class="container">
       <p>Lorem ipsum dolor sit amet, <span>consectetuer adipiscing elit</span></p>
       <a href="" class="line-btn">Get Started</a>
   </div>
</div> -->
<!-- works end -->



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
  $(function() {
    $(".rslides").responsiveSlides();
});
</script>
</body>
</html>
