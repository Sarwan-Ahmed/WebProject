function checkEmail() {
  email= document.getElementById("usr-email").value;	

  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	
    	generateError("div.email",this.responseText);
		  
    }

    
  };
  xhttp.open("GET", "./script/duplicatemail.php?q="+email, true);
  xhttp.send();
}

function generateError(selector,message){
	$(selector).append('<span class="error">'+message+'</span>');
	$(selector+" input").css({ "border": '#FF0000 1px solid'});
	//$("#join").attr("disabled",true);
}

function validateFirstName(){
		var regex = /[A-Z][a-zA-Z]*/;
		var fname = document.getElementById("usr-fname");
		return regex.test(fname.value);
}

function validateLastName(){
		var regex = /[A-Z][a-zA-Z]*/;
		var lname = document.getElementById("usr-lname");
		return regex.test(lname.value);
}

function validatePassword(){
		var regex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
		var pwd = document.getElementById("pwd");
		return regex.test(pwd.value);
}




$(document).ready(function(){
	
	$("#usr-fname").blur(function(){

		if($(this).val() == "" || $(this).val() == null ){
			generateError("div.fname","*This field is required");}

		else if(!validateFirstName()){
			generateError("div.fname","*Ensure proper capitalization");}

	});


	$("#usr-lname").blur(function(){

		if($(this).val() == "" || $(this).val() == null ){
			generateError("div.lname","*This field is required");}

		else if(!validateLastName()){
			generateError("div.lname","*Ensure proper capitalization");}

	});
 
	$("#pwd").blur(function(){

		if($(this).val() == "" || $(this).val() == null ){
			generateError("div.pwd","*This field is required");}

		else if(!validatePassword()){
			generateError("div.pwd","*Password should be at least 6 characters long with at least one number, one lowercase and one uppercase letter");
		}


	

	});

	$("#pwd,#usr-lname,#usr-fname,#usr-email").focus(function(){
		$(this).find("+span").remove();
		$(this).css({ "border": '#e0e4e6 1px solid'});
	});


	$("#usr-email").blur(function(){
		checkEmail();
	});

});

