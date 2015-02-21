<?php
session_start() ;
	$config['host'] = "localhost" ;
	$config['user'] = "root" ;
	$config['password'] = "redhat@11111p" ;
	$config['database'] = "todfodcode" ;
	$db_handle = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);
if($_POST['user_id']){	
	$degree = mysqli_real_escape_string($db_handle, $_POST['degree']);
	$user_id = mysqli_real_escape_string($db_handle, $_POST['user_id']);
	$collage = mysqli_real_escape_string($db_handle, $_POST['collage']);
	$batch = mysqli_real_escape_string($db_handle, $_POST['batch']);
	$time = mysqli_real_escape_string($db_handle, $_POST['time']);
	$logintime = date("y-m-d H:i:s") ;
	mysqli_query($db_handle, "INSERT INTO user_educations (user_id, degree_name, collage_name) VALUES ('$user_id', '$degree', '$collage' ) ;") ;
	mysqli_query($db_handle, "INSERT INTO user_courses (user_id, course_id, join_time, timestamp) VALUES ('$user_id', '$batch', '$time', '$logintime' ) ;") ;
	$info = mysqli_query($db_handle, "select * from user_info where user_id = '$user_id' ;") ;
	$infoRow = mysqli_fetch_array($info) ;
	$username = $infoRow['username'] ;
	if($time == ""){
		echo "Registered successfully \n Your account will be activated soon \n We will contact you soon and share information about new batches ";
		$_SESSION['username'] = $username ;
		$_SESSION['user_id'] = $user_id ;
	}
	else {
		if(mysqli_error($db_handle)){ echo "Please Try Again"; } 
		else { 
			$_SESSION['username'] = $username ;
			$_SESSION['user_id'] = $user_id ;
			echo "Registered Succcessfully \n Your account will be activated soon" ; 
		}
	}
}
	mysqli_close($db_handle);
?>
