
<?php



$userReg = $_REQUEST['username'];
$UserPassword = $_REQUEST['password'];
$passconf = $_REQUEST['passconf'];


registerUser($userReg, $UserPassword);


/*
if ($password === $passconf){

registerUser($tryusername, $userpass);

	}else{
		echo "Your passwords do not match!";
}

*/







function registerUser($inUser, $inPass){

// Create connection

require_once('dbloginfo.php');	
	
$sql = "INSERT INTO user (username, password)
		VALUES ('$inUser', '$inPass')";

	if ($conn->query($sql) === TRUE) {
   	 echo "New record created successfully";
   	 header("location: front.php");
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

}


?>