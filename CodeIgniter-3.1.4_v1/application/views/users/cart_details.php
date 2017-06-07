
<?php include 'navbar.php';?>




					
                      <div class="col-sm-9 col-md-9 col-md-offset-1" style="margin-top:50px; ">
                      <?php $p=0; foreach($data as $value => $key):?>
                      <div class="row" style="margin-top:10px;background-color:#FFDAB9;border-radius: 20px;" >
                      <br>
                              <div class="col-sm-4 col-md-4" ><img src="<?php echo base_url('uploads/'.$key->img);?>" class="img-responsive" style="height: 200px;width: 200px">
                              <br>
                              </div>
                      

                          <div class="col-sm-4 col-md-4">
                             <table>
                          	<tr>
                          		<td><p>ProductName:<?php echo $key->p_name;?></p></td>
                          	</tr>
                          	<tr>
                          		<td><p>Description:<?php echo $key->discription;?></p></td>
                          	</tr>
                          	<tr>
                          		<td><p>price:<?php echo $key->r_price; $p.=$key->r_price;?></p></td>
                          	</tr>
                            </table>
                         </div>
                         <div class=" col-md-4"><a name="addproduct"  class="btn btn-info" href="<?php echo base_url('users/Select_product/remove_from_cart/'.$key->p_name);?>">Remove</a></div>
                         <br>
                      </div>
                        <?php endforeach; ?> 
                    </div>
        <div class="col-md-2 col-sm-3" style="margin-top:2cm">
   <div ><table>
      <tr> <td style="background-color:#707070;height:180px;width:200px;font-size:11px;" class="table-responsive" >
      <p class="rg"style="margin-left:20px">STANDARD PRODUCTS</p> <p class="rg" style="margin-left:20px">INDIVIDUAL PRODUCTS</p>
      <p class="rg"style="margin-left:25px" >Students</p><p class="rg"style="margin-left:25px">Alumni</p>
      <p class="rg"style="margin-left:25px">Faculty</p><p class="rg"style="margin-left:25px">Sports</p><p class="rg"style="margin-left:25px">Merchandise</p>
      <p class="rg"style="margin-left:25px">Accessories</p></td></tr></table>
  </div>
</div>
         
               <div class="row">

                    <div class="col-md-9 col-md-offset-1" style="margin-top:10px;background-color:#FFDAB9;border-radius: 20px;">

                              <p><strong>Total Amount:<?php echo $p;?></strong></p>
                    </div>
               </div>
	 
	 
</body>
</html>
</body>
</html>




