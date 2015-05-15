function processcontactForm()
{
	var contactFormObj = document.getElementById("contactForm");
	var lastname =  contactFormObj.lastName.value;
	var firstname = contactFormObj.firstName.value;
	var phone = contactFormObj.phone.value;
	var email = contactFormObj.email.value;
	var subject = contactFormObj.subject.value;
	var message = contactFormObj.message.value;



	if (!validname(lastname)){
		alert("Invalid lastname!");
		return false;
	}
	if(!validname(firstname)){
		alert("Invalid firstname!");
		return false;
	}
	if(!validPhone(phone)){
		alert("Invalid phone!");
		return false;
	}
	if(!validEmail(email)){
		alert("Invalid email!");
		return false;
	}
	if (!notEmpty(subject)){
		alert("Subject cannot be empty!");
		return false;
	}
	if (!notEmpty(message)){
		alert("Message cannot be empty!");
		return false;
	}
	alert("Information receieved.\nOur customer service will contact you soon.");
	return true;
}



function validname(name){
	if (name=='')
	{
		return false;
	}
	var p1= name.search(/^[A-Za-z]+$/);
	if(p1!=0){
		return false;
	}
	return true;
}


function validPhone(phone){
	if(phone!='')
	{
		var p1= phone.search(/^\d{3}[-\s]?\d{3}[-\s]?\d{4}$/);
		if(p1!=0){
			return false;
		}
	}
	return true;
}

function validEmail(email){
	if(email=='')
	{
		alert("Email cannot be empty!");
		return false;
	}
	else
	{
		var temp = email.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
		if(temp!=0){
			return false;
		}
		return true;
	}
}

function notEmpty(subject){
	if (subject=='')
	{
		return false;
	}
	return true;
}