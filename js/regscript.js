
function usernamecheck(str) {
	if (str == "") {
		document.getElementById("txtname").innerHTML = "";
		return;
	} else { 
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			document.getElementById("txtname").innerHTML = this.responseText;
		}
		};
		xmlhttp.open("GET","getuser.php?q="+str,true);
		xmlhttp.send();
	}
}
function emailcheck(str) {
	if (str == "") {
		document.getElementById("txtemail").innerHTML = "";
		return false;
	} else { 
		if (window.XMLHttpRequest) {
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp = new XMLHttpRequest();
		} else {
			// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			document.getElementById("txtemail").innerHTML = this.responseText;
		}
		};
		xmlhttp.open("GET","getemail.php?q="+str,true);
		xmlhttp.send();
	}
}
function passwordcheck(str){
	if(document.getElementById("psw").value != str){
		document.getElementById("textpwd").innerHTML = "Loznike se ne podudaraju";
		return false;
	}
	else{
		document.getElementById("textpwd").innerHTML = "";
		return true;
	}
}