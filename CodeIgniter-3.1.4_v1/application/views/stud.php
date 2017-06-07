<html>
<head>
	<title>Example</title>
</head>
<body>
<!--<?php
	foreach($user_details as $key => $value) {
		echo $value->id."  ".$value->password;
	}
?>-->
<table border='2' cellpadding="20px" align="center">
<tr>
<?php foreach ($user_details as $key => $value): ?>
	<td><?php echo "$value->id" ?></td><td><?php echo "$value->password" ?></td><td><a href="<?php echo site_url('stud_control/delete/'.$value->id); ?>">delete</a> </td><td><a href="<?php echo site_url('stud_control/update/'.$value->id); ?>">update</a> </td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
