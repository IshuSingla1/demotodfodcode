function bootstrap_alert(elem, message, timeout,type) {
  $(elem).show().html('<div class="alert '+type+'" role="alert" style="overflow: hidden; position: fixed; right: 40%;transition: transform 0.3s ease-out 0s; width: auto;  z-index: 1050; top: 80px;  transition: left 0.6s ease-out 0s;"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span>'+message+'</span></div>');

  if (timeout || timeout === 0) {
    setTimeout(function() { 
      $(elem).show().html('');
    }, timeout);    
  }
};

function trim(s){
	return s.replace(/^\s+|\s+$/, '');
}

function replaceAll(find, replace, str) {
	if(str == null)
		str = "";
	return str.replace(new RegExp(find, 'g'), replace);
}

function validatePath(path) {
	if (path.match("^[a-zA-Z0-9.]*$")) {
		return true ;
	}
	else {
		return false;
	}
 }

function signUp() {
	var firstname = $("#signup_firstname").val() ;
	var lastname = $("#signup_lastname").val() ;
	var username = $("#signup_username").val() ;
	var email = $("#signup_email").val() ;
	var phone = $("#signup_phone").val() ;
	var pass = $("#signup_password").val() ;
	var pass2 = $("#signup_passwordrepeat").val() ;	
	if(pass != pass2) {
		bootstrap_alert(".alert_placeholder", "Password do not match", 5000,"alert-success");
		return false;
	}
	else if(replaceAll('\\s', '',firstname) == ""){
		bootstrap_alert(".alert_placeholder", "First name can not be empty", 5000,"alert-success");
		return false;
	}
	else if(replaceAll('\\s', '',lastname) == ""){
		bootstrap_alert(".alert_placeholder", "Last name can not be empty", 5000,"alert-success");
		return false;
	}
	else if(replaceAll('\\s', '',username) == ""){
		bootstrap_alert(".alert_placeholder", "Username can not be empty", 5000,"alert-success");
		return false;
	}
	else if(username.length < 6 && username.length > 20){
		bootstrap_alert(".alert_placeholder", "Username length should be atleast 6 or atmost 20", 5000,"alert-warning");
		return false;
	}
	else if(replaceAll('\\s', '',email) == "" ){
		bootstrap_alert(".alert_placeholder", "Email can not be empty", 5000,"alert-success");
		return false;
	}
	else if(replaceAll('\\s', '',phone) == ""){
		bootstrap_alert(".alert_placeholder", "Phone number can not be empty", 5000,"alert-success");
		return false;
	}
	else if(pass == ""){
		bootstrap_alert(".alert_placeholder", "Password can not be empty", 5000,"alert-success");
		return false;
	}
	else if(pass.length < 6 && pass.length > 20){
		bootstrap_alert(".alert_placeholder", "Password length should be atleast 6 or atmost 20", 5000,"alert-warning");
		return false;
	}
	else if(phone.length > 12){
		bootstrap_alert(".alert_placeholder", "Enter valid phone number", 5000,"alert-warning");
		return false;
	}
	else if(phone.length < 10){
		bootstrap_alert(".alert_placeholder", "Enter valid phone number", 5000,"alert-warning");
		return false;
	} 
	else if(replaceAll('\\s', '',pass2)==''){
		bootstrap_alert(".alert_placeholder", "password can not be empty", 5000,"alert-warning");
		return false;
	}
	else if(validatePath(firstname) != true){
		bootstrap_alert(".alert_placeholder", "Special Characters are not allowed <br/> Only Alphabets and Numbers are allowed", 5000,"alert-warning");
		return false;
	}
	else if(validatePath(username) != true){
		bootstrap_alert(".alert_placeholder", "Special Characters are not allowed <br/> Only Alphabets and Numbers are allowed", 5000,"alert-warning");
		return false;
	}
	else if(validatePath(lastname) !== true){
		bootstrap_alert(".alert_placeholder", "Special Characters are not allowed <br/> Only Alphabets and Numbers are allowed", 5000,"alert-warning");
		return false;
	}
	else if (validateEmail(email)==false) {
        bootstrap_alert(".alert_placeholder", "Enter a valid email id", 5000,"alert-warning");       
    }
    else {
		var dataString = 'firstname='+ firstname + '&lastname='+ lastname + '&phone=' + phone + '&email='+ email  + '&username='+ username + '&password='+ pass + '&password2='+ pass2 ;
		$.ajax({
			type: "POST",
			url: "ajax/signup.php",
			async: false ,
			data: dataString,
			cache: false,
			success: function(result){
				var notice = result.split("+") ;
				if(notice['0'] == 'Registered Succcessfully'){
					bootstrap_alert(".alert_placeholder", "First step is completed", 5000,"alert-warning");
					var modal = "<label>Select Highest Qualification</label>" +
								"<select class='form-control' id = 'heightestEducation' onchange='insertEdu()'>" +
									"<option value='0' selected>Default (none)</option>" +
									"<option value='B.Tech'>B.Tech</option>" +
									"<option value='B.A' >B.A.</option>" +
									"<option value='B.Sc' >B.Sc.</option>" +
									"<option value='B.com' >B.com.</option>" +
									"<option value='M.Tech'>M.Tech</option>" +
									"<option value='M.A' >M.A.</option>" +
									"<option value='M.Sc' >M.Sc.</option>" +
									"<option value='M.com' >M.com.</option>" +
									"<option value='other' >Others</option>" +
								"</select><br/>" +
								"<div id='specificEdu'></div><br/>" +	
								"<div class='form-group email'>" +
                                     "<label class='sr-only' for='signup-email'>Collage Name</label>" +
                                     "<input id='collageName' type='text' class='form-control login-email' placeholder='Your collage name'>" +
                                "</div>" +
                                "<label>Select Batch & Type</label>" +
								"<select class='form-control' id = 'BatchName' onchange='checkBatch()' >" +
									"<option value='0' selected>Default (none)</option>" +
									"<option value='1'>Web Development (Regular)</option>" +
									"<option value='2' >Web Development (Weekend)</option>" +
								"</select><br/>" +
								"<div id='availbatch'></div><br/>" + 
								"<button type='submit' class='btn btn-cta-primary' id='batchInfo' onclick='batchInfo("+ parseInt(notice['1']) +");'>Save</button>" ;
					document.getElementById("furtherInfo").innerHTML = modal ;
					$("#batchInfo").attr('disabled','disabled');
				} 
				else {
					bootstrap_alert(".alert_placeholder", notice['0'], 5000,"alert-warning");
				}		
			} 
		});
	}		 
 }
 
function batchInfo(Id){
	var time = $("#batchTime").val() ;
	var degree = $("#heightestEducation").val() ;
	var collage = $("#collageName").val() ;
	var batch = $("#BatchName").val() ;
	var edu = $("#specificEducation").val() ;
	var data = document.getElementById("batchTime") ;
	if(data == null) {
		bootstrap_alert(".alert_placeholder", "Sorry, currently no batch available", 5000,"alert-warning");
		if(replaceAll('\\s', '',degree) == "0"){
			bootstrap_alert(".alert_placeholder", "Please select education ", 5000,"alert-success");
			return false;
		}
		else if(degree == "other" && replaceAll('\\s', '',edu) == ""){
			bootstrap_alert(".alert_placeholder", "Please specify your education", 5000,"alert-success");
			return false;
		}
		else if(replaceAll('\\s', '',collage) == ""){
			bootstrap_alert(".alert_placeholder", "Collage name can not be empty", 5000,"alert-success");
			return false;
		}
		else if(replaceAll('\\s', '',batch) == "0"){
			bootstrap_alert(".alert_placeholder", "Please select batch name", 5000,"alert-success");
			return false;
		}
		else {
			if(edu == ""){
				var dataString = 'user_id=' + Id + '&degree=' + degree + '&collage=' + collage + '&batch=' + batch + '&time=""' ;
			}
			else {
				var dataString = 'user_id=' + Id + '&degree=' + edu + '&collage=' + collage + '&batch=' + batch + '&time=""' ;
			}
			submitInfo(dataString);
		}
	}
	else { 
		if(replaceAll('\\s', '',time) == '0'){
			bootstrap_alert(".alert_placeholder", "Please select Time of batch", 5000,"alert-success");
			return false;
		}
		else if(replaceAll('\\s', '',degree) == "0"){
			bootstrap_alert(".alert_placeholder", "Please select education ", 5000,"alert-success");
			return false;
		}
		else if(replaceAll('\\s', '',collage) == ""){
			bootstrap_alert(".alert_placeholder", "Collage name can not be empty", 5000,"alert-success");
			return false;
		}
		else if(replaceAll('\\s', '',batch) == "0"){
			bootstrap_alert(".alert_placeholder", "Please select batch name", 5000,"alert-success");
			return false;
		}
		else {
			if(edu == ""){
				var dataString = 'user_id=' + Id + '&degree=' + degree + '&collage=' + collage + '&batch=' + batch + '&time=' + time  ;
			}
			else {
				var dataString = 'user_id=' + Id + '&degree=' + edu + '&collage=' + collage + '&batch=' + batch + '&time=' + time ;
			}
			submitInfo(dataString);
		}
	}	
}

function insertEdu(){
	var value = $("#heightestEducation").val() ;
	if(value == 'other'){
		var modal = "<div class='form-group email'>" +
					"<input id='specificEducation' type='text' class='form-control login-email' placeholder='Please specify your Education'>" +
					"</div>" ;
		document.getElementById("specificEdu").innerHTML = modal ;
	}
	else {
		document.getElementById("specificEdu").innerHTML = "";
	}
}

function submitInfo(dataString){
	$.ajax({
		type: "POST",
		url: "ajax/submit_batch.php",
		async: false ,
		data: dataString,
		cache: false,
		success: function(result){
			if (result == "Please Try Again") {
				bootstrap_alert(".alert_placeholder", result, 5000,"alert-warning");
			}
			else {
				bootstrap_alert(".alert_placeholder", result, 5000,"alert-success");
				setTimeout(function () { window.location ='courses.php' ; }, 10000);
			}
		}
	});
}

function IsNumeric(e) {
	var specialKeys = new Array();
	specialKeys.push(8); //Backspace
    var keyCode = e.which ? e.which : e.keyCode
    var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
    return ret;
}

function validateEmail(fld) {
	var error="";
	var tfld = trim(fld);                        // value of field with whitespace trimmed off
	var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;

	if (!emailFilter.test(tfld)) {              //test email for illegal characters
		//fld.style.background = 'Yellow';
		//error = "Please enter a valid email address.\n";
	} else {
		//fld.style.background = 'White';
		return true;
	}
	return false;
}

function login() {
	var email = $("#login_email").val() ;
	var pass = $("#login_password").val() ;
	if(replaceAll('\\s', '',email) == ""){
		bootstrap_alert(".alert_placeholder", "Email can not be empty", 5000,"alert-success");
		return false;
	}
	else if(replaceAll('\\s', '',pass) == ""){
		bootstrap_alert(".alert_placeholder", "Password can not be empty", 5000,"alert-success");
		return false;
	}
	else {
		var dataString = 'email=' + email + '&password=' + pass ;
		$.ajax({
			type: "POST",
			url: "ajax/login.php",
			async: false ,
			data: dataString,
			cache: false,
			success: function(result){
				if (result == "Successfully") {
					bootstrap_alert(".alert_placeholder", "Your account will be activated soon", 5000,"alert-success");
					window.location ='homepage.php' ;
				}
				else if (result == "complete profile") {
					bootstrap_alert(".alert_placeholder", "Please complete profile ", 5000,"alert-success");
					var modal = "<label>Select Highest Qualification</label>" +
								"<select class='form-control' id = 'heightestEducation' onchange='insertEdu()'>" +
									"<option value='0' selected>Default (none)</option>" +
									"<option value='B.Tech'>B.Tech</option>" +
									"<option value='B.A' >B.A.</option>" +
									"<option value='B.Sc' >B.Sc.</option>" +
									"<option value='B.com' >B.com.</option>" +
									"<option value='M.Tech'>M.Tech</option>" +
									"<option value='M.A' >M.A.</option>" +
									"<option value='M.Sc' >M.Sc.</option>" +
									"<option value='M.com' >M.com.</option>" +
									"<option value='other' >Others</option>" +
								"</select><br/>" +
								"<div class='form-group email' id='specificEdu'></div>" +	
								"<div class='form-group email'>" +
                                     "<label class='sr-only' for='signup-email'>Collage Name</label>" +
                                     "<input id='collageName' type='text' class='form-control login-email' placeholder='Your collage name'>" +
                                "</div>" +
                                "<label>Select Batch & Type</label>" +
								"<select class='form-control' id = 'BatchName' onchange='checkBatch()' >" +
									"<option value='0' selected>Default (none)</option>" +
									"<option value='1'>Web Development (Regular)</option>" +
									"<option value='2' >Web Development (Weekend)</option>" +
								"</select><br/>" +
								"<div id='availbatch'></div><br/>" + 
								"<button type='submit' class='btn btn-cta-primary' id='batchInfo' onclick='batchInfo("+ parseInt(notice['1']) +");'>Save</button>" ;
					document.getElementById("furtherInfo").innerHTML = modal ;
					$("#batchInfo").attr('disabled','disabled');
				}
				else {
					bootstrap_alert(".alert_placeholder", result, 5000,"alert-warning");
				}
			}
		});
	}
}
  
function nospaces(t){
	if(t.value.match(/\s/g)){
		bootstrap_alert(".alert_placeholder", 'Sorry, you are not allowed to enter any spaces', 5000,"alert-success");
		t.value=t.value.replace(/\s/g,'');
	}
}

function username_availability_check() {
	var xmlhttp;
	var username=document.getElementById("signup_username");
	if (username.value != "" && username.length > 6){
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		} 
		else {
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("status_username").innerHTML=xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET","ajax/uname_availability.php?username="+encodeURIComponent(username.value),true);
		xmlhttp.send();
	}
};

function email_availability_check() {
	var xmlhttp;
	var email_forget=document.getElementById("signup_email");
	if (email_forget.value != "" && validateEmail(email)!==false ){
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		} 
		else {
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("status_email").innerHTML=xmlhttp.responseText;
			}
		};
		xmlhttp.open("GET","ajax/email_check.php?email="+encodeURIComponent(email_forget.value),true);
		xmlhttp.send();
	}
};

function subscribe() {
	$("#subscribe").attr('disabled','disabled');
	var email = $("#subscribe_email").val() ;
	if(replaceAll('\\s', '',email) == ""){
		bootstrap_alert(".alert_placeholder", "Email can not be empty", 5000,"alert-success");
		$("#subscribe").removeAttr('disabled');
		return false;
	}
	else if (validateEmail(email)==false) {
        bootstrap_alert(".alert_placeholder", "Enter a valid email id", 5000,"alert-warning");
        $("#subscribe").removeAttr('disabled');       
    }
    else {
		var dataString = 'id=' + email ;
		$.ajax({
			type: "POST",
			url: "ajax/subscribe.php",
			async: false ,
			data: dataString,
			cache: false,
			success: function(result){
				if (result == 'Subscribed succesfully!'){
					bootstrap_alert(".alert_placeholder", 'Subscribed succesfully! <br/> We will contact you soon', 5000,"alert-success");
					$("#subscribe").removeAttr('disabled');
					$('#SubscribeForm').remove();
				}
				else {
					bootstrap_alert(".alert_placeholder", result, 5000,"alert-warning");
					$("#subscribe").removeAttr('disabled');
				}
			}
		});
	}
}

function csendmessage(){
	$("#csendmessage").attr('disabled','disabled');
	var name = $("#cname").val() ;
	var email = $("#cemail").val() ;
	var subject = $("#csubject").val() ;
	var message = $("#cmessage").val() ;
	if(replaceAll('\\s', '',email) == ""){
		bootstrap_alert(".alert_placeholder", "Email can not be empty", 5000,"alert-success");
		$("#csendmessage").removeAttr('disabled');
		return false;
	}
	else if (validateEmail(email)==false) {
        bootstrap_alert(".alert_placeholder", "Enter a valid email id", 5000,"alert-warning");
        $("#csendmessage").removeAttr('disabled');       
    }
    else if(replaceAll('\\s', '',name) == ""){
		bootstrap_alert(".alert_placeholder", "Name can not be empty", 5000,"alert-success");
		$("#csendmessage").removeAttr('disabled');
		return false;
	}
	else if(replaceAll('\\s', '',subject) == ""){
		bootstrap_alert(".alert_placeholder", "Subject can not be empty", 5000,"alert-success");
		$("#csendmessage").removeAttr('disabled');
		return false;
	}
	else if(replaceAll('\\s', '',message) == ""){
		bootstrap_alert(".alert_placeholder", "Message can not be empty", 5000,"alert-success");
		$("#csendmessage").removeAttr('disabled');
		return false;
	}
	else {
		var dataString = 'name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message ;
		$.ajax({
			type: "POST",
			url: "ajax/send_message.php",
			async: false ,
			data: dataString,
			cache: false,
			success: function(result){
				bootstrap_alert(".alert_placeholder", result, 5000,"alert-warning");
				$("#csendmessage").removeAttr('disabled');
			}
		});
	}
}

function checkBatch() {
	var xmlhttp;
	var batch = document.getElementById("BatchName");
	if (batch.value != "" || batch.value != '0'){
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		} 
		else {
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("availbatch").innerHTML=xmlhttp.responseText;
				$("#batchInfo").removeAttr('disabled');
			}
		};
		xmlhttp.open("GET","ajax/batch_check.php?batch="+encodeURIComponent(batch.value),true);
		xmlhttp.send();
	}
};
