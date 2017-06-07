<?php

$note1="";
$note2="";
$note3="";
$nameErr1="";
$emailErr1="";
$messErr1="";
$nameErr2="";
$emailErr2="";
$messErr2="";
$flag1=0;
$flag2=0;
$flag3=0;
$nameErr3="";
$emailErr3="";
$idErr3="";
$topicErr3="";
$dobErr3="";
$branchErr3="";



$cn = mysqli_connect("localhost","root","","test");
if(isset($_POST['send1']))
{

	$n=$_POST["name"];
	$e=$_POST["email"];
	$m=$_POST["message"];
  	if ($n=="") 
	{
	
		  $nameErr1 = "Invalid input";
			$flag1=1;
		
	}
   
	if (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
	 $emailErr1 = "Invalid email format";
	  $flag1=1;
	}
	if($m=="")
	{
		$messErr1="Message field should not be empty";
		$flag1=1;
	}

	if($flag1===0)
	{
		$q="insert into contactus values('$n','$e','$m')";
		mysqli_query($cn,$q);
		$note1="Submited successfully"."<br>";
	}
}
if(isset($_POST['send2']))
{
	$n=$_POST["name"];
	$e=$_POST["email"];
	$m=$_POST["message"];
	$m=$_POST["message"];
  	if ($n=="") 
	{
	
		  $nameErr2 = "Invalid input";
			$flag2=1;
		
	}
   
	if (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
	  $emailErr2 = "Invalid email format";
	  $flag2=1;
	}
	if($m=="")
	{
		$messErr2="Message field should not be empty";
		$flag2=1;
	}

	if($flag2===0)
	{
		$q="insert into contactus values('$n','$e','$m')";
		mysqli_query($cn,$q);
		$note2="Submited successfully"."<br>";
	}
}

if(isset($_POST['submit']))
{
	$name=$_POST["name"];
	$id=$_POST["id"];
	$branch=$_POST["branch"];
	$topic=$_POST["topic"];
	$campus=$_POST["campus"];
	$email=$_POST["email"];
	
	if ($name=="") 
	{
	
		  $nameErr3 = "Invalid name";
			$flag3=1;
		
	}
   
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	 $emailErr3 = "Invalid email format";
	  $flag3=1;
	}
	if(!preg_match("/^[BbrRNn]\d{6}$/", $id))
	{
		$idErr3="invalid Id";
		$flag3=1;
	}
	if($branch=="Select Branch")
	{
		$branchErr3="choose branch";
		$flag3=1;
	}
	if($topic=="Interested Stream")
	{
		$topicErr3="choose interested topic";
		$flag3=1;
	}
	if($campus=="Select campus")
	{
		$dobErr3="invalid details";
		$flag3=1;
	}
	if($flag3==0)
	{
		$q="insert into recruite values('$name','$id','$branch','$topic','$campus','$email')";
		mysqli_query($cn,$q);

		echo "<script type='text/javascript'>alert('Submitted successfully');</script>";

		/*echo "<script type='text/javascript'>
		$(#btnShowSimple).trigger('click');
   
      

      
         ShowDialog(true);
         e.preventDefault();
      


      $('#btnSubmit').click(function (e)
      {
       
         HideDialog();
         e.preventDefault();
      });


   function ShowDialog(modal)
   {
      $('#overlay').show();
      $('#dialog').fadeIn(300);

      if (modal)
      {
         $('#overlay').unbind('click');
      }
      else
      {
         $('#overlay').click(function (e)
         {
            HideDialog();
         });
      }
   }

   function HideDialog()
   {
      $('#overlay').hide();
      $('#dialog').fadeOut(300);
   }
       
</script>";
		//$note3="Submited successfully"."<br>";
	}*/
}
}
?>
