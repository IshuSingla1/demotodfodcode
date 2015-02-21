<?php
	$config['host'] = "localhost" ;
	$config['user'] = "root" ;
	$config['password'] = "redhat@11111p" ;
	$config['database'] = "todfodcode" ;
	$db_handle = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);
	$email=$_REQUEST['email'];
	$sql="SELECT * FROM user_info where email='$email'";
	$data=mysqli_query($db_handle,$sql);
	if(mysqli_num_rows($data)>0) {
		print "<span style=\"color:red;\">Email already exists</span>";
		return true ;
	}
	else 	{
		print "<span style=\"color:green;\"><i class='icon-ok'> </i>Ok</span>";
		return false;
	}
	mysqli_close($db_handle);
?>
