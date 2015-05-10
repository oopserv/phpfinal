// global variables
var emailVal;
var btn = document.getElementById('subBtn');





//object named mouseFuncs that houses 2 functions
var mouseFuncs = {

// changes inner text of submit button to thanks when pointer enters button
 changeToThanks : function(){
		document.getElementById("subBtn").innerHTML = "Thanks";
	},
// changes inner text of submit button to submit when pointer exits button
 changeToNorm : function(){
		document.getElementById("subBtn").innerHTML = "Submit";
	}
};


// conditional statements and assignment operators
// the values of each input is placed into variables
function validateForms(){
	//array to hold form values
	var details;

	emailVal = document.getElementById('email').value;
	var firstVal = document.getElementById('firstName').value;
	var lastVal = document.getElementById('lastName').value;
	var message	 = document.getElementById('message').value;
	

	

	// boolean example
	if(emailVal.value !== false){

	// all 4(1global, 3local) variables are stored in array named details	
	details = [emailVal, firstVal, lastVal, message];
		};


	// the values of each varible in array is checked to see if it is empty-- if so, display alert.  
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










	//add eventlisteners to submit button on contact form 
btn.addEventListener("click", validateForms);
btn.addEventListener("mouseover", mouseFuncs.changeToThanks);
btn.addEventListener("mouseleave", mouseFuncs.changeToNorm);














