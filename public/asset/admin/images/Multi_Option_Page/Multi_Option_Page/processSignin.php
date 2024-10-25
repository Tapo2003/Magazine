<?php		
	require_once('dbconn.php');
	
	extract($_POST);
	$username   = trim($username);
    $homeoption = trim($homeoption);
	$password   = md5(trim($password));
	$sql = "SELECT * FROM regtable WHERE users_name='$username'";//we would select from the table where there is a particular username and then the username is dynamic.
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result) == 1){///if there is such username in the table then we would fetch the 		password, the username, and the homeoptions 
		$fetchRow    	= mysqli_fetch_array($result);
		$getUsername 	= $fetchRow['users_name'];
		$getPassword 	= $fetchRow['reg_password'];
        $getHomeoption 	= $fetchRow['home_option'];
		if($getUsername == $username && $getPassword == $password && $homeoption == $getHomeoption){
			
			echo 1;
			
		}		
	}else{
		echo 0;
	}
	
?>
 