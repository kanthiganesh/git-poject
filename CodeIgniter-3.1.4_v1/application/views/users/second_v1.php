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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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


</head>
<body>
<div id="errors"></div>
<?php $data=$data[0];?>
<div class="right">
<i class="fa fa-lock" style="font-size:12px"></i><a href="#" style="margin:30px 20px 10px 0px">&nbsp;Login</a>
<i class="fa fa-sign-in" style="font-size:12px"></i><a  href="#" style="margin:10px 60px 10px 0px">&nbsp;Register</a>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <ul class="nav navbar-nav ">
    
      <li style="margin-left:80px"><a href="<?php echo base_url('users/User_control');?>" >Home</a></li>
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

<h4 style="margin:50px 0px 0px 110px"; text-decoration:none">HOME/STORE/PRODUCT STORE</h4>

 <div class="container" style="margin-top:10px ">
        <div class="row">
             <div class="col-md-4" >
                    	
                            <div class="col-md-3">
                               <div class="row">

                                  <div class="col-md-12">
                                       <div class="imgwrapper"><img src="<?php echo base_url('uploads/index1.jpg');?>"  style="height:75px;width:75px" class="img-responsive"></div>
                                   
                                  </div>
                               </div>
                               
                               <div class="row">
                                  <div class="col-md-12">
                                      <div class="imgwrapper"> <img src="<?php echo base_url('uploads/img4.jpg');?>" style="margin-top:10px;height:75px;width:75px" class="img-responsive"></div>
                                      
                                 </div>
                                
                               </div>
                               <div class="row">
                                  <div class="col-md-12">
                                       <div class="imgwrapper"><img src="<?php echo base_url('uploads/index6.jpg');?>" style="margin-top:10px;height:75px;width:75px" class="img-responsive"></div>
                                   
                                  </div>
                               </div>
                              
                               <div class="row">
                                  <div class="col-md-12">
                                      <div class="imgwrapper"> <img src="<?php echo base_url('uploads/img1.jpg');?>" style="margin-top:10px;height:75px;width:75px" class="img-responsive"></div>
                                      
                                 </div>
                               </div>
                              

                            </div>

                            <div class="col-md-1">
                                 
                                       <div class="img-responsive"><img src="<?php echo base_url('uploads/'.$data->img);?>" style="height:350px;width:200px"alt="Fjords"></div>
                                 
                            </div>
                   

             </div>
     <div class="col-md-5">

       
        <table class="table-responsive">
        <tbody>

	           <tr><td style="font-size:20px;text-decoration:none; margin:10px 0px 0px 0px"><strong><?php echo $data->p_name; ?></strong></td></tr> 
	           <tr><td> Student134 | <span style="color:green">In Stock</span></td></tr>
	           <tr><td style="font-size:9px"> 10 Reviews | Share | Add your review</td></tr>
	           <tr><td> Total Items-6</td></tr>
	          <tr><td style="font-size:9px">1)School Bag   2)Apsara Scholar Kit   3)Exam Clipboard </td></tr>
	          <tr><td style="font-size:9px"> 4)Notebook Single Line 5)Water Color Cake With Brush     6)Pencil Box</td></tr>
	         <tr><td style="font-size:9px"><?php echo $data->discription;?>  Lorem Ipsum is simply dummy text of the printing and type setting Industry.Lorem Ipsum has been the</td></tr>
	          <tr><td style="font-size:9px;">industry's standard dummy text ever since the 1500s,when an unknown printer took a galley of type</td></tr>
	          <tr><td style="font-size:9px">scrambled it to make a type specimen book.It has survived not only five countries but also the leap.</td></tr>
	           <tr><td style="font-size:15px">COST</td></tr>
	           <tr><td style="word-spacing:10px"><strong>₹<?php echo $data->o_price; ?>/-</strong><strong><strike>₹<?php echo $data->r_price; ?>/-</strike></strong>    QUANTITY     <select>
               <option value=50>50</option>
                <option value="saab">40</option>
               <option value="mercedes">30</option>
              <option value="audi">20</option>
              </select>  </td></tr></tbody> </table>
	           <p> <button type="button" name="addtocart" id="addtocart" style="background-color:#2F4F4F" class="btn btn-primary "><strong>ADD TO CART</strong></button>
	           <a href="third.html"> <button type="button" style="background-color:#FF4500" class="btn btn-primary disabled"><strong>CUSTOMIZE</strong></button>
	           </p></a></div>
             
             <div class="col-md-3">

             <table class="table-responsive"><tr>
		<td style="background-color:#707070;font-size:11px;text-color:white;height:250px;width:250px" >
	<p class="rg"style="margin-left:20px">STANDARD PRODUCTS</p> <p class="rg" style="margin-left:20px">INDIVIDUAL PRODUCTS</p>
	<p class="rg"style="margin-left:25px" >Students</p><p class="rg"style="margin-left:25px">Alumni</p>
	<p class="rg"style="margin-left:25px">Faculty</p><p class="rg"style="margin-left:25px">Sports</p><p class="rg"style="margin-left:25px">Merchandise</p>
	<p class="rg"style="margin-left:25px">Accessories</p></td></tr>
		</tr></table>

             </div>

        </div>
     </div>


        <div class="container">
          <div class="row">
               <div class="col-md-3">
                   <p style="margin-top:10px">Related Products</p>
               	
               </div>
          	
          </div>
        	
        </div>
         <div class="container">
          <div class="row">
               <div class="col-sm-9 col-md-9 col-md-offset-1">

                <div class="col-sm-6 col-md-3">
                   <img style="width:200px; height:200px" class="img-responsive" src="<?php echo base_url('uploads/pen.jpeg');?>">
                   
               </div>
               <div class="col-sm-6 col-md-3">
                   <img style="width:200px; height:200px" class="img-responsive" src="<?php echo base_url('uploads/pen.jpeg');?>">
                   
               </div>
               <div class="col-sm-6 col-md-3">
                   <img style="width:200px; height:200px" class="img-responsive" src="<?php echo base_url('uploads/pen.jpeg');?>">
                   
               </div>
               <div class="col-sm-6 col-md-3">
                   <img style="width:200px; height:200px" class="img-responsive" src="<?php echo base_url('uploads/pen.jpeg');?>">
                   
               </div>
          	
          </div>
        	
        </div>
       
</div>

</body>
</html>

  
 <script type="text/javascript">

  /*$(document).ready(function() {

        $('#addtocart').click(function() {
              
                $.post("http://localhost/CodeIgniter-3.1.4/Select_product/add_to_cart", { p_name : $data->p_name}, function(data) {
                    $("#errors").html(data);
                });
        document.getElementById('cartno').innerHTML=++i;
      return true;
    });
    });
    $(document).ready(function() {
    $("#addtocart").click(function(){
        alert("button");
    }); 
});*/
$(document).ready(function() {
  var p_name='<?php echo $data->p_name; ?>';
$("#addtocart").click(function(){
  
       
      $.post("http://localhost/CodeIgniter-3.1.4/users/Select_product/add_to_cart", { p_name : p_name}, function(data) {
                    $("#cartno").html(data);
                });
         document.getElementById("addtocart").innerHTML="ADDED TO CART";
        document.getElementById("addtocart").disabled=true;
               
    }); 
      });         
</script>
  



