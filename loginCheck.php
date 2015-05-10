<?php

	
	$userCheck = $_REQUEST['userLog'];
	$passCheck = $_REQUEST['passLog'];
	
	require_once('dbloginfo.php');	

	$loginQuery = ("SELECT * FROM user WHERE username = '$userCheck' AND password ='$passCheck'"); 

	$result = mysqli_query($conn, $loginQuery);
	$row = mysqli_fetch_array($result);



	if(!$row){
		echo "faulty";
	}else{


	echo "Loogged in as ".$userCheck;
	$_SESSION["loggedin"] = $userCheck;




	echo "<br>session variable: ". $_SESSION[loggedin];
}

	$conn->close();



?>