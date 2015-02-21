<?php
	$config['host'] = "localhost" ;
	$config['user'] = "root" ;
	$config['password'] = "redhat@11111p" ;
	$config['database'] = "todfodcode" ;
	$db_handle = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);
	$batch = $_REQUEST['batch'];
	$data = "" ;
	$sql= "SELECT * FROM available_batches WHERE course_id = '$batch' and batch_time > now()";
	$data=mysqli_query($db_handle,$sql);
	if(mysqli_num_rows($data) == 0) {
		print "<span>No batches Available</span>";
		return true ;
	}
	else {
		$data .= "<label>Select Batch Time</label>
				  <select class='form-control' id = 'batchTime'>
					<option value='0' selected>Default (none)</option>" ;
		while ($batchesRow = mysqli_fetch_array($data)) {
			$time = $batchesRow['batch_time'] ;
			$timecomm = date("j F, g:i a", strtotime($time));
			$data = $data. "<option value='".$time."' >".$timecomm."</option>"; 
		}
		$data = $data. "</select>" ;
		print $data ;
		return false;
	}
	mysqli_close($db_handle);
?>
