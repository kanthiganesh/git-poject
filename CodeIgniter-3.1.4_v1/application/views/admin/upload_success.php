<html>
<head>
<title>Upload Form</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<div>
 <center><p style="color:green;font-size:50px" > <span class="glyphicon glyphicon-ok" style="height:100px; width:100px"></span></p></center>
<center><p style="color:green;font-size:20px" >you have submitted successfully </p> </center>
  
<table class="table">
<tbody>
<tr><td><?php echo 'Product Name'?>:</td><td> <?php echo $data['p_name']; ?></td></tr>
<tr><td><?php echo 'Status';?>: </td><td> <?php echo $data['status'];?></td></tr>
<tr><td><?php echo 'Discription';?>: </td><td> <?php echo $data['discription'];?></td></tr>
<tr><td><?php echo 'Offer Price';?>: </td><td> <?php echo $data['o_price'];?></td></tr>
<tr><td><?php echo 'Retails Price';?>:</td><td> <?php echo $data['r_price'];?></td></tr>
<tr><td><?php echo 'Sales Price'?>: </td><td> <?php echo $data['s_price'];?></td></tr>
<tr><td><?php echo 'Cost Price'?>:</td><td>  <?php echo $data['c_price'];?></td></tr>
<tr><td><?php echo 'SRP'?>:</td><td>  <?php echo $data['srp'];?></td></tr>
<tr><td><?php echo 'img'?>:</td><td>  <?php echo $data['img'];?></td></tr>

</tbody>
</table>
</div> 

</body>
</html>