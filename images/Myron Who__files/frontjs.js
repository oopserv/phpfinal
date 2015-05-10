//initialize particular events
//onload event
window.onload = init;

// my init function that will set my listeners
function init(){
	
	//adde eventlistener to submit button on contact form
	document.getElementById("subBtn").addEventListener("click", validateForms);
	document.getElementById("subBtn").addEventListener("mouseover", changeToThanks);
	document.getElementById("subBtn").addEventListener("mouseleave", changeToNorm);

}	




// changes inner text to submit button to thanks when pointer enters button
function changeToThanks(){
		document.getElementById("subBtn").innerHTML = "Thanks";


	}
// changes inner text to submit button to submit when pointer exits button
function changeToNorm(){
		document.getElementById("subBtn").innerHTML = "Submit";


	}




// conditional statements and assignment operators
// the values of each input is placed into variables
function validateForms(){

	var details;

	var emailVal = document.getElementById('email').value;
	var firstVal = document.getElementById('firstName').value;
	var lastVal = document.getElementById('lastName').value;
	var message	 = document.getElementById('message').value;

	details = [emailVal, firstVal, lastVal, message];

	// the values of each varible is checked to see if it is empty-- if so, display alert
	if (details[0] == ""){
		alert('Please enter your email address');
		event.preventDefault();
	}else if (details[1] == ""){
		alert('Please enter your first name');	
		event.preventDefault();
	}else if (details[2] == ""){
		alert('Please enter your last name');
		event.preventDefault();
	}else if (details[3] == ""){
		alert('Please say something!');
		event.preventDefault();
	}else {
		alert('Thank you for your submission!');
	}	

	}



















