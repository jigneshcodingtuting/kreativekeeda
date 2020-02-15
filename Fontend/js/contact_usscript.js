function contact_err()
{
	var a = document.contact_form.name.value;
	var b = document.contact_form.email.value;
	var c = document.contact_form.comments.value;
	
	if(a=="" && b=="" && c=="")
	{
		alert("Please enter Name, E-Mail and Message.");
		return false;
	}
	
	if(a=="" && b=="")
	{
		alert("Please enter Name and E-Mail.");
		return false;
	}
	
	if(a=="" && c=="")
	{
		alert("Please enter Name and Message.");
		return false;
	}
	
	if(b=="" && c=="")
	{
		alert("Please enter E-Mail and Message.");
		return false;
	}
	
	if(a=="")
	{
		alert("Please enter Name.");
		return false;
	}
	
	else if(b=="")
	{
		alert("Please enter E-Mail.");
		return false;
	}
	
	if(c=="")
	{
		alert("Please enter Message.");
		return false;
	}
	
}