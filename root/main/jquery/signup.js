function isDuplicate() {
  email= document.getElementById("usr-email").value;	
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	if(this.responseText == "*Email already in use"){

    		return true;}
    	else{

    		return false;
    	}	
		  
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
		var regex =  /^\s*([A-Z]\w*\s*)*$/;
		var fname = document.getElementById("usr-fname");
		return regex.test(fname.value);
}

function validateLastName(){
		var regex =  /^\s*([A-Z]\w*\s*)*$/;
		var lname = document.getElementById("usr-lname");
		return regex.test(lname.value);
}

function validatePassword(){
		var regex = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
		var pwd = document.getElementById("pwd");
		return regex.test(pwd.value);
}

function validateEmail(){
	var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var email = document.getElementById("usr-email");
	return regex.test(email.value);
}




$(document).ready(function(){
	$(".login-failed").slideUp(5000,"swing");
	
	$("#join").attr("disabled",true);
	$("#usr-fname").blur(function(){

		if($(this).val() == "" || $(this).val() == null ){
			generateError("div.fname","*This field is required");}

		else if(!validateFirstName()){
			generateError("div.fname","*Ensure proper capitalization For Example: Karl Marx");}

	});
	$("#usr-email").blur(function(){

		if($(this).val() == "" || $(this).val() == null ){
			generateError("div.email","*This field is required");}

		else if(!validateEmail()){
			generateError("div.email","*Your email format is invalid")
		}	

		else if(isDuplicate()){
				generateError("div.email","*Email already in use");}

	});

	
	$("#usr-lname").blur(function(){

		if($(this).val() == "" || $(this).val() == null ){
			generateError("div.lname","*This field is required");}

		else if(!validateLastName()){
			generateError("div.lname","*Ensure proper capitalization E.g: Karl Marx");}

	});
 	
	$("#pwd").blur(function(){

		if($(this).val() == "" || $(this).val() == null ){
			generateError("div.pwd","*This field is required");}

		else if(!validatePassword()){
			generateError("div.pwd","*Password should be at least 6 characters long with at least one number, one lowercase and one uppercase letter");
		}});
	/*
	$("#usr-email").blur(function(){
		checkEmail();});*/
		
	
		$("#pwd,#usr-lname,#usr-fname,#usr-email").focus(function(){
		$(this).find("+span").remove();
		$(this).css({ "border": '#e0e4e6 1px solid'});
	});

	function firstnamevalidation(){

		if($("div.fname input").val() == "" || $("div.fname input").val() == null ){
			
			return false;}

		else if(!validateFirstName()){
			
			return false;}
		else{
			return true;
		}	

	}

	function lastnamevalidation(){
		
		if($("div.lname input").val() == "" || $("div.lname input").val() == null ){
			return false;}

		else if(!validateLastName()){
			return false;}
		
		else{
			return true;
		}
}

	function passwordvalidation(){
		if($("div.pwd input").val() == "" || $("div.pwd input").val() == null ){
			return false;}

		else if(!validatePassword()){
			return false;
		}
		else{
			return true;
		}


	}
	
	function emailvalidation(){
		if($("div.email input").val() == "" || $("div.email input").val() == null ){
			return false;}

		else if(!validateEmail()){
			return false;
		}	

		else if(isDuplicate()){
				return false;}
		else{
			return true;
		}		
	}


	$("input").keyup(function(){
		enable = true;
		if(!firstnamevalidation()){
			$("#join").attr("disabled",true);
			enable= false;
		}
		if(!lastnamevalidation()){
			$("#join").attr("disabled",true);
			enable = false;
		}
		if(!passwordvalidation()){
			$("#join").attr("disabled",true);
			enable = false;
		}
		if(!emailvalidation()){
			$("#join").attr("disabled",true);
			enable = false;
		}
		if(enable){
			$("#join").attr("disabled",false);
		}

	});
	



});

