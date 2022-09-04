/*dropdown - list of resources */
function myButton() {
	document.getElementById("myDropdown").classList.toggle("show");
  }
 
/*register - Password check*/
function checkPassword(){
	
	if (document.getElementById("pwd").value !=document.getElementById("confirmpw").value)
	{
		alert("Password Mismatch!");
		return false;
	}else{
		alert("Registration is successful!");
		return true;
	}
}

//register - checkbox 
function enableButton(){
	if ( document.getElementById("checkbox").checked)
	{
		document.getElementById("submitBtn").disabled = false;
	}
	else{
		document.getElementById("submitBtn").disabled= true;
	}
}

/*Savindhya*/
function validateForm() {
    let x = document.forms["myForm"]["fname"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }

  function AcceptTerms(){
    var chk = document.getElementById("chkTerms");
    var sub = document.getElementById("subReg");
    
    if(chk.checked){
      sub.disabled = false;
    }
    else{
      sub.disabled = true;
    }
  }
 /*end of Savindhya*/ 