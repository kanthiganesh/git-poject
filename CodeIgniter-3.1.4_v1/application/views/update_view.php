<!DOCTYPE html>
<html>
<head>
	<title>Signin</title>
</head>
<body>
<div align="center">
<?php $value=$r[0]; ?>
<form action="<?php echo site_url('stud_control/update_record/'.$value->id) ?>" method="post">
<table border='2' cellpadding="20px" align="center">
<tr>
	<td>Id</td><td><input type="text" name="id" value="<?php echo $value->id ?>" id="id"></td>
</tr>
<tr>
	<td>Password</td><td><input type="password" value="<?php echo  $value->password ?>" name="pwd" id="pwd"></td>
</tr>
<tr>
	
	<td></td><td><input type="submit" value="Submit" name="Submit" id="Submit"></td>
</tr>
</table>
</form>
</div>

</body>
</html>
