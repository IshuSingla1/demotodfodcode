<?php
session_start() ;
	$config['host'] = "localhost" ;
	$config['user'] = "root" ;
	$config['password'] = "redhat@11111p" ;
	$config['database'] = "todfodcode" ;
	$db_handle = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);
if($_POST['id']){
	$project = $_POST['id'];
	$time = date("Y-m-d H:i:s") ;
	$myquery = mysqli_query($db_handle, "INSERT INTO targets (email) VALUES ('$project') ;") ;
	if(mysqli_error($db_handle)) { echo "Failed to Post!"; }
	else { echo "Subscribed succesfully!"; }
}
else {echo "Invalid";}
mysqli_close($db_handle);	
?>
