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
	      <li class="active"><a href="" class="dropdown-toggle" data-toggle="dropdown">SERVICES<span class="caret"></span></a>
              			  <ul class="dropdown-menu">
              			    <li><a href="AI.php">Machine Learning</a></li> 
                        <li><a href="RT.php">AR VR</a></li>    
                       <li><a href="FSD.php">Full Stack Developement</a></li>
                       <li><a href="mobileapp.php">Mobile applications</a></li>
              			  </ul>
	                  </li>
		 <li > <a href="careers.php">Careers</a></li>

					            <li ><a href="about_us.php">About Us</a></li>
					        </ul>
  						</div>
  						<!-- /.navbar-collapse --> 
  					</div>
  					<!-- /.container-fluid --> 
  				</nav>
  			</div>
  		</div>
<div class="inner-head">
 <div class="container">
  <div class="col-lg-12">
   <h4 class="pull-left">services</h4>
   <p class="pull-right pagination" ><a href="index.php">home</a><span>></span><a href="services.php">services</a><span>></span><a href="FSD.php">Mobile Applications</a></p>
 </div>
</div>
</div>
<!-- inner-head end -->
<div class="inner-page services back" >
 <div class="container  ">
  <div id="total">
                <br/>
                <div class="col-md-6" id="left">
                 
               <center><a  onclick="result_A()" style="cursor:pointer;color"> <img src="img/android.png" style="height:6cm;width:6cm;"></img></a></center><br/>
                <center><h2><a>Android Applications</a></h2></center>
                 </div>
                <div class="col-md-6">
                   <center><a onclick="result_I()" style="cursor:pointer;color"> <img src="img/ios.png" style="height:6cm;width:6cm;"></img></a></center><br/>

                 <center> <h2 id="service"><a>Ios Applications</a></h2></center>

               </div>
              <div class="clearfix"></div>
               <div class="col-md-3"></div>
               <div class="col-md-6">
               <center><a onclick="result_D()" style="cursor:pointer;color"> <img src="img/desktop.png" style="height:6cm;width:6cm;"></img></a></center><br/>
               <center>  
               <h2 id="service"><a>Desktop Applications</a></h2></center>
                </div>



               <div class="col-md-1"></div>
         </div>

   
  </div>
</div>
 <div class="clearfix"></div>
</div>
</div>
<div class="our-services solid">


     <a href="AI.php"><div class="col-md-3">
     <i class="service-icon service-four"></i>
     <h3>Machine Learning</h3>

    </div></a>


  <a href="RT.php"><div class="col-md-3">
     <i class="service-icon service-two"></i>
     <h3>AR VR</h3>

    </div></a>


  <a href="FSD.php"><div class="col-md-3">
    <i class="service-icon service-one"></i>
    <h3>Full stack development</h3>

    
    </div></a>
     
    
     <a href="mobileapp.php"><div class="col-md-3">
     <i class="service-icon service-three"></i>
     <h3>Mobile Applications</h3>

    </div></a>
    
            <div class="clearfix"></div>
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
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.mixitup.js"></script> 
<script>
  $('.collapse').on('shown.bs.collapse', function(){
   $(this).parent().find(".down-icon").removeClass("down-icon").addClass("up-icon");
 }).on('hidden.bs.collapse', function(){
   $(this).parent().find(".up-icon").removeClass("up-icon").addClass("down-icon");
 });
</script>
<script>

  $('.cd-testimonials-wrapper').flexslider({
  //declare the slider items
  selector: ".cd-testimonials > li",
  animation: "slide",
  //do not add navigation for paging control of each slide
  controlNav: false,
  slideshow: false,
  //Allow height of the slider to animate smoothly in horizontal mode
  smoothHeight: true,
  start: function(){
    $('.cd-testimonials').children('li').css({
      'opacity': 1,
      'position': 'relative'
    });
  }
});
</script>
<script>
  $(function(){

  // Instantiate MixItUp:

  $('#Container').mixItUp();

});
</script>
<script>

function result_A()
{
	document.getElementById("total").innerHTML="<center><a> <img src='img/android.png' style='height:6cm;width:6cm;'></img></a><h2 id='service'><a>Android Applications</a></h2></center><p id='paragraph' style='color:black; font-size:15px;'>The official language for Android development is Java.Large parts of Android are written in Java and its APIs are designed to be called primarily from Java. That said, it is possible to develop C and C++ apps using the Android Native Development Kit (NDK), however it isn't something that Google promotes</p>";
}
function result_I()
{
	document.getElementById("total").innerHTML="<center><a> <img src='img/ios.png' style='height:6cm;width:6cm;'></img></a><h2><a>Ios Applications</a></h2></center> "+"<p id='paragraph' style='color:black; font-size:15px;'>Linux is the best-known and most-used open source operating system. As an operating system, Linux is software that sits underneath all of the other software on a computer, receiving requests from those programs and relaying these requests to the computer's hardware.<br /><br /> Linux. (Pronounced lee-nucks or lih-nucks). A freely distributable open source operating system that runs on a number of hardware platforms. The Linux kernel was developed mainly by Linus Torvalds.</p>";
}
function result_D()
{
  document.getElementById("total").innerHTML="<center><a> <img src='img/desktop.png' style='height:6cm;width:6cm;'></img></a><h2><a>Desktop Applications</a></h2></center> "+"<p id='paragraph' style='color:black; font-size:15px;'>Linux is the best-known and most-used open source operating system. As an operating system, Linux is software that sits underneath all of the other software on a computer, receiving requests from those programs and relaying these requests to the computer's hardware.<br /><br /> Linux. (Pronounced lee-nucks or lih-nucks). A freely distributable open source operating system that runs on a number of hardware platforms. The Linux kernel was developed mainly by Linus Torvalds.</p>";
}
</script>
</body>
</html>
