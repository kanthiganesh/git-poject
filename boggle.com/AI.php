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
   <p class="pull-right pagination" ><a href="index.php">home</a><span>></span><a href="services.php">services</a><span>></span><a href="AI.php">Machine Learning</a></p>
 </div>
</div>
</div>
<!-- inner-head end -->
 <div class="inner-page services back" >
   <div class="container">
          <div id="total">
              	<br/>
                <div class="col-md-6" id="left">
                 
               <center><a  onclick="result_M()" style="cursor:pointer;color"> <img src="img/cv.png" style="height:6cm;width:6cm;"></img></a></center><br/>
                <center><h2><a>Computer vision</a></h2></center>
                 </div>
                <div class="col-md-6">
                	 <center><a onclick="result_A()" style="cursor:pointer;color"> <img src="img/dp.png" style="height:6cm;width:6cm;"></img></a></center><br/>

                 <center> <h2 id="service"><a>Deep Learning</a></h2></center>

               </div>
              <div class="clearfix"></div>
               <div class="col-md-3"></div>
               <div class="col-md-6">
               <center><a onclick="result_C()" style="cursor:pointer;color"> <img src="img/cht.png" style="height:6cm;width:6cm;"></img></a></center><br/>
               <center>  
               <h2 id="service"><a>Chatbot</a></h2></center>
                </div>



               <div class="col-md-1"></div>
         </div>

   
  </div>
</div>


<div class="our-services solid">


     <a href="AI.php"><div class="col-md-3">
     <i class="service-icon service-four"></i>
     <h3>Machine Learning</h3>

    </div></a>


  <a href="RT.php"><div class="col-md-3">
     <i class="service-icon service-two"></i>
     <h3>AR  VR</h3>

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


function result_M()
{
  document.getElementById("total").innerHTML="<center><a> <img src='img/cv.png' style='height:6cm;width:6cm;'></img><h2 id='service'><a>Computer Vision</a></h2></a></center><p id='paragraph' style='color:black; font-size:15px;'>Computer vision is an interdisciplinary field that deals with how computers can be made for gaining high-level understanding from digital images or videos. From the perspective of engineering, it seeks to automate tasks that the human visual system can do.<br/>Computer vision tasks include methods for acquiring, processing, analyzing and understanding digital images, and extraction of high-dimensional data from the real world in order to produce numerical or symbolic information, e.g., in the forms of decisions.</p>";
}
function result_A()
{
  document.getElementById("total").innerHTML="<center><a> <img src='img/dp.png' style='height:6cm;width:6cm;'></img><h2 id='service'><a>Deep Learning</a></h2></a></center><p id='paragraph' style='color:black; font-size:15px;'>Deep Learning is a subfield of machine learning concerned with algorithms inspired by the structure and function of the brain called artificial neural networks <br /><br /> machine learning algorithms that are: use a cascade of many layers of nonlinear processing units for feature extraction and transformation. Each successive layer uses the output from the previous layer as input. The algorithms may be supervised or unsupervised and applications include pattern analysis (unsupervised) and classification (supervised). are based on the (unsupervised) learning of multiple levels of features or representations of the data. Higher level features are derived from lower level features to form a hierarchical representation. are part of the broader machine learning field of learning representations of data. </p>";
}
function result_C()
{
  document.getElementById("total").innerHTML="<center><a> <img src='img/cht.png' style='height:6cm;width:6cm;'></img><h2 id='service'><a>Chatbot</a></h2></a></center><p  id='paragraph2' style='color:black;'>Chatbots, also called Conversational Agents or Dialog Systems, are a hot topic.Many companies are hoping to develop bots to have natural conversations indistinguishable from human ones, and many are claiming to be using NLP and Deep Learning techniques to make this possible. But with all the hype around AI its sometimes difficult to tell fact from fiction. </p>"
}
  </script>
</body>
</html>
