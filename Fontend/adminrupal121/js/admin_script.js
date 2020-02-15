function adminlogin_err()
{
	var a = document.admin_logfrm.uid.value;
	var b = document.admin_logfrm.ps.value;
	
	if(a=="" && b=="")
	{
		alert("Please enter User ID & Password.");
		return false;
	}
	
	if(a=="")
	{
		alert("Please enter User ID.");
		return false;
	}
	
	if(b=="")
	{
		alert("Please enter Password.");
		return false;
	}

}

function chngpschkval()
{
	var a = document.changepsfrm.crps.value;
	var b = document.changepsfrm.nps.value;
	var c = document.changepsfrm.cnps.value;
	
	if(a=="" && b=="" && c=="")
	{
		alert("Please enter Current Password, New Password & Confirm Password.");
		return false;
	}
	
	if(a=="" && b=="")
	{
		alert("Please enter Current Password & New Password.");
		return false;
	}
	
	if(a=="" & c=="")
	{
		alert("Please enter Current Password & Confirm Password.");
		return false;
	}
	
	if(b=="" && c=="")
	{
		alert("Please enter New Password & Confirm Password.");
		return false;
	}
	
	if(a=="")
	{
		alert("Please enter Current Password.");
		return false;
	}
	
	if(b=="")
	{
		alert("Please enter New Password.");
		return false;
	}
	
	if(c=="")
	{
		alert("Please enter Confirm Password.");
		return false;
	}
	
	if(b.length<8)
	{
		alert("Please enter Password minimum 8 characters.");
		return false;
	}
}

function chk()
{
	if(document.changepsfrm.nps.value.length<8)
	{
		document.getElementById("x").innerHTML="<font color='red'><br>New Password must be minmum 8 charecters.</font>";
		cansubmit = false;
	}
	else
	{
		document.getElementById("x").innerHTML="";
	}
}

function ld()
{
	document.changepsfrm.crps.focus();
}


function myfrmforgot()
{
	var a=document.forgotpsfrm.em.value;
	var b=document.forgotpsfrm.day.value;
	var c=document.forgotpsfrm.month.value;
	var d=document.forgotpsfrm.year.value;
	
	if(a=="" || b=="" || c=="" || d=="")
	{
		if(a=="")
		{
			document.getElementById("iem")
			.innerHTML+=
			"<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-top:5px;'></span>";
		}
		
		if(b=="")
		{
			document.getElementById("iday")
			.innerHTML+=
			"<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:30px;'></span>";
		}
		
		if(c=="")
		{
			document.getElementById("imonth")
			.innerHTML+=
			"<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:30px;'></span>";
		}
		if(d=="")
		{
			document.getElementById("iyear")
			.innerHTML+=
			"<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:30px;'></span>";
		}
		
		return false;
	}
	
}


function varifycode()
{
	var a=document.varifyform.vc.value;
	
	if(a=="")
	{
		document.getElementById("ivc")
		.innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a;'></span>";
		return false;
	}
}
