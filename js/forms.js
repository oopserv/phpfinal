var regBtn = document.getElementById('regBtn');






function validateReg(){


	
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var passconf = document.getElementById('passconf').value;
	

	

	// the values of each varible in array is checked to see if it is empty-- if so, display alert.  
	if (username == ""){
		alert('Please enter your username');
		event.preventDefault();
	}else if (password == ""){
		alert('Please enter a password');	
		event.preventDefault();
	}else if (passconf == ""){
		alert('Please confirm your password');
		event.preventDefault();
	}else if (passconf != password){
		alert('Your passwords dont match');
		event.preventDefault();
	 }else {
		alert('Thank you for your submission!');
	}	

}




regBtn.addEventListener("click", validateReg);
