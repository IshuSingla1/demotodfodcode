<?php
session_start() ;
	$config['host'] = "localhost" ;
	$config['user'] = "root" ;
	$config['password'] = "redhat@11111p" ;
	$config['database'] = "todfodcode" ;
	$db_handle = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);
if(isset($_POST['email'])) {
	$email = mysqli_real_escape_string($db_handle, $_POST['email']); 
	$password = md5(mysqli_real_escape_string($db_handle, $_POST['password']));
	$response = mysqli_query($db_handle,"select * from user_info where (username = '$email' OR email = '$email') AND password = '$password';") ;
	if (mysqli_num_rows($response) > 0 ){
		$responseRow = mysqli_fetch_array($response);
		$id = $responseRow['user_id'];
		$info = mysqli_query($db_handle, "SELECT * FROM user_educations WHERE user_id = '$id' ;") ;
		if (mysqli_num_rows($info) > 0 ){
			if(mysqli_error($db_handle)){ echo "Please Try Again"; } 
			else {
				$_SESSION['user_id'] = $id ;
				$_SESSION['username'] = $responseRow['username'] ;
				echo "Successfully" ;
			}
		}
		else { echo "complete profile" ; }
	}
	else {  echo "Username or Password is wrong, Try again";  }
}
else { echo "hf"; }  
mysqli_close($db_handle);
?>
