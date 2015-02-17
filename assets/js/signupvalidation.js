function bootstrap_alert(elem, message, timeout,type) {
  $(elem).show().html('<div class="alert '+type+'" role="alert" style="overflow: hidden; position: fixed; right: 20%;transition: transform 0.3s ease-out 0s; width: auto;  z-index: 1050; top: 50px;  transition: left 0.6s ease-out 0s;"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><span>'+message+'</span></div>');

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
	else if(replaceAll('\\s', '',username).length < '6'){
		bootstrap_alert(".alert-placeholder", "Username length should be atleast 6", 5000,"alert-warning");
		return false;
	}
	else if(replaceAll('\\s', '',email) == ""){
		bootstrap_alert(".alert_placeholder", "Email can not be empty", 5000,"alert-success");
		return false;
	}
	else if(replaceAll('\\s', '',phone) == ""){
		bootstrap_alert(".alert_placeholder", "Phone number can not be empty", 5000,"alert-success");
		return false;
	}
	else if(replaceAll('\\s', '',pass) == ""){
		bootstrap_alert(".alert_placeholder", "Password can not be empty", 5000,"alert-success");
		return false;
	}
	else if(replaceAll('\\s', '',pass).length < '6'){
		bootstrap_alert(".alert-placeholder", "Password length should be atleast 6", 5000,"alert-warning");
		return false;
	}
	else if(replaceAll('\\s', '',phone).length > '12'){
		bootstrap_alert(".alert-placeholder", "Enter valid phone number", 5000,"alert-warning");
		return false;
	}
	else if(replaceAll('\\s', '',phone).length < '10'){
		bootstrap_alert(".alert-placeholder", "Enter valid phone number", 5000,"alert-warning");
		return false;
	} 
	else if(replaceAll('\\s', '',pass2)==''){
		bootstrap_alert(".alert-placeholder", "password can not be empty", 5000,"alert-warning");
		return false;
	}
	else if(validatePath(firstname) !== 'true'){
		bootstrap_alert(".alert-placeholder", "Special Characters are not allowed <br/> Only Alphabets and Numbers are allowed", 5000,"alert-warning");
		return false;
	}
	else if(validatePath(username) !== 'true'){
		bootstrap_alert(".alert-placeholder", "Special Characters are not allowed <br/> Only Alphabets and Numbers are allowed", 5000,"alert-warning");
		return false;
	}
	else if(validatePath(lastname) !== 'true'){
		bootstrap_alert(".alert-placeholder", "Special Characters are not allowed <br/> Only Alphabets and Numbers are allowed", 5000,"alert-warning");
		return false;
	}
	else if (validateEmail(email)==false) {
        bootstrap_alert(".alert-placeholder", "Enter a valid email id", 5000,"alert-warning");       
    }
    else {
		var dataString = 'firstname='+ firstname + '&lastname='+ lastname + '&email='+ email  + '&username='+ username + '&password='+ pass + 
							'&password2='+ pass2 ;
		$.ajax({
			type: "POST",
			url: "ajax/signup.php",
			async: false ,
			data: dataString,
			cache: false,
			success: function(result){
				var notice = result.split("+") ;
				if(notice['0'] == 'Registered Succcessfully'){
					bootstrap_alert(".alert-placeholder", notice['0'], 5000,"alert-warning");
				} 
				else {
					bootstrap_alert(".alert-placeholder", notice['0'], 5000,"alert-warning");
				}		
			} 
		});
	}		 
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

function validatePath(path) {
	if (path.match("^[a-zA-Z0-9.]*$")) {
		return "true" ;
	}
	else {
		return false;
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
	if (username.value != ""){
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
	if (email_forget.value != ""){
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();

		} else {
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
