<?php
	$config['host'] = "localhost" ;
	$config['user'] = "root" ;
	$config['password'] = "redhat111111" ;
	$config['database'] = "todfodcode" ;
	$db_handle = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);
	$username=$_REQUEST['username'];
	$sql="SELECT * FROM user_info where username='$username'";
	$data=mysqli_query($db_handle,$sql);
	if(mysqli_num_rows($data)>0) 	{
		print "<span style=\"color:red;\">Username already exists</span>";
	}
	else {
		print "<span style=\"color:green;\"><i class='icon-ok'> </i>Ok</span>";
	}
	mysqli_close($db_handle);
?>
