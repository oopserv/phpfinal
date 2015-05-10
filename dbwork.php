








<?php






$email = $_REQUEST['email'];
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$message = $_REQUEST['message'];



storeMessage($email, $firstname, $lastname, $message);







function storeMessage($emailPass, $firstPass, $lastPass, $messPass){


	require_once('dbloginfo.php');

	$sql = "INSERT INTO contactmessage (emailaddress, firstname, lastname, message)
	VALUES ('$emailPass', '$firstPass', '$lastPass', '$messPass')";


	if ($conn->query($sql) === TRUE) {
   	 echo "New record created successfully";
	} else {
    	echo "Error: " . $conn->error;
	}

	

	$conn->close();


}







?>

















