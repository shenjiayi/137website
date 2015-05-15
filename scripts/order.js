function processOrder()
{
	var contactFormObj = document.getElementById("orderForm");
	var lastname =  contactFormObj.lastName.value;
	var firstname = contactFormObj.firstName.value;
	var phone = contactFormObj.phone.value;
	var email = contactFormObj.email.value;
	var order1 = contactFormObj.order1.value;
	var count1 = contactFormObj.count1.value;

	var order2 = contactFormObj.order2.value;
	var count2 = contactFormObj.count2.value;

	var order3 = contactFormObj.order3.value;
	var count3 = contactFormObj.count3.value;

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

	if(!validItemNummber(order1)){
		alert("Invalid Item Number  "+order1);
		return false;
	}

	if(notEmpty(order2)){
		if(!validItemNummber(order2)){
			alert("Invalid Item Number  "+order2);
			return false;
		}
	}


	if(notEmpty(order3)){
		if(!validItemNummber(order3)){
			alert("Invalid Item Number  "+order3);
			return false;
		}
	}


	alert("Order receieved.\n An email will send to you about order information and payment informtion.");
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

function validItemNummber(orderNumber){
	if(orderNumber>111110 && orderNumber<111119 )
		return true;
	if(orderNumber>222220 && orderNumber<222229 )
		return true;
	if(orderNumber>333330 && orderNumber<333339 )
		return true;
	return false;
}