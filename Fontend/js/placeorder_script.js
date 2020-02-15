function err()
{
	var a = document.order_form.name.value;
	var b = document.order_form.email.value;
	var c = document.order_form.add.value;
	var d = document.order_form.country.value;
	var e = document.order_form.ct.value;
	var f = document.order_form.st.value;
	var g = document.order_form.pc.value;
	var h = document.order_form.mbl.value;
	var i = document.order_form.price.value;
	
	if(a=="" || b=="" || c=="" || d=="" || e=="" || f=="" || g=="" || h=="" || i=="")
	{
		if(a=="")
		{
			document.getElementById("iname").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:10px;'></span>";
		}
		
		if(b=="")
		{
			document.getElementById("iemail").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:10px;'></span>";
		}
		
		if(c=="")
		{
			document.getElementById("iadd").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:10px;'></span>";
		}
		
		if(d=="")
		{
			document.getElementById("icountry").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:30px;'></span>";
		}
		
		if(e=="")
		{
			document.getElementById("ict").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:10px;'></span>";
		}
		
		if(f=="")
		{
			document.getElementById("ist").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:10px;'></span>";
		}
		
		if(g=="")
		{
			document.getElementById("ipc").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:10px;'></span>";
		}
		
		if(h=="")
		{
			document.getElementById("imbl").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:10px;'></span>";
		}
		
		if(i=="")
		{
			document.getElementById("iprice").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:30px;'></span>";
		}
		
		return false;
	}

}