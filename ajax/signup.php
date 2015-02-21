<?php
	$config['host'] = "localhost" ;
	$config['user'] = "root" ;
	$config['password'] = "redhat@11111p" ;
	$config['database'] = "todfodcode" ;
	$db_handle = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);	
if($_POST['firstname']){	
	$firstname = mysqli_real_escape_string($db_handle, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($db_handle, $_POST['lastname']);
	$email = mysqli_real_escape_string($db_handle, $_POST['email']);
	$phone = mysqli_real_escape_string($db_handle, $_POST['phone']);
	$username = mysqli_real_escape_string($db_handle, $_POST['username']);
	$pass = mysqli_real_escape_string($db_handle, $_POST['password']) ;
	$pass2 = mysqli_real_escape_string($db_handle, $_POST['password2']) ;
	if ( $pass == $pass2 ) {
		$email_already_registered = mysqli_query($db_handle, "SELECT email FROM user_info WHERE email = '$email';");
		$email_exists = mysqli_num_rows($email_already_registered) ;
		$username_already_registered = mysqli_query($db_handle, "SELECT username FROM user_info WHERE username = '$username';");
		$username_registered = mysqli_num_rows($username_already_registered);
		if ($email_exists != 0) {
			echo "User is reistered with this Email,<br>  Try different email or Please Sign In";
		}
		elseif ($username_registered != 0) {
			echo "User is registered with this username,<br> Try different username or Please Sign In";
		}
		else {
			$pass = md5($pass);
			$logintime = date("y-m-d H:i:s") ;
			mysqli_query($db_handle,"INSERT INTO user_info(first_name, last_name, email, contact_no, username, password, last_login_time) 
										VALUES ('$firstname', '$lastname', '$email', '$phone', '$username', '$pass', '$logintime') ; ") ;		
			$user_create_id = mysqli_insert_id($db_handle);
			if(mysqli_error($db_handle)){ echo "Please Try Again"; } 
			else { echo "Registered Succcessfully"."+".$user_create_id ; }
		}
	}
	else {  echo "Password do not match, Try again";     }
}
mysqli_close($db_handle);
?>
