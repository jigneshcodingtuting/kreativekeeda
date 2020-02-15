function cross()
{
	var a = document.uploadfrm.title.value;
	var b = document.uploadfrm.category.value;
	var c = document.uploadfrm.lenght.value;
	var d = document.uploadfrm.width.value;
	var e = document.uploadfrm.mat.value;
	var f = document.uploadfrm.des.value;
	var g = document.uploadfrm.inr.value;
	var h = document.uploadfrm.usd.value;
	var i = document.uploadfrm.gbp.value;
	var j = document.uploadfrm.eur.value;
	var k = document.uploadfrm.ff.value;

	if(a=="" || b=="" || c=="" || d=="" || e=="" || f=="" || g=="" || h=="" || i=="" || j=="" || k=="")
	{
		if(a=="")
		{
			document.getElementById("ititle").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:0px;'></span>";
		}
		
		if(b=="")
		{
			document.getElementById("icategory").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:15px;'></span>";
		}
		
		if(c=="")
		{
			document.getElementById("ilenght").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:0px;'></span>";
		}
		
		if(d=="")
		{
			document.getElementById("iwidth").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:0px;'></span>";
		}
		
		if(e=="")
		{
			document.getElementById("imat").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:0px;'></span>";
		}
		
		if(f=="")
		{
			document.getElementById("ides").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:0px;'></span>";
		}
		
		if(g=="")
		{
			document.getElementById("iinr").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:5px; margin-top:7px;'></span>";
		}
		
		if(h=="")
		{
			document.getElementById("iusd").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:5px; margin-top:7px;'></span>";
		}
		
		if(i=="")
		{
			document.getElementById("igbp").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:5px; margin-top:7px;'></span>";
		}
		
		if(j=="")
		{
			document.getElementById("ieur").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:5px; margin-top:7px;'></span>";
		}
		
		if(k=="")
		{
			document.getElementById("iff").innerHTML+="<span class='glyphicon glyphicon-remove form-control-feedback' style='color:#c22a2a; margin-right:15%; margin-top:-3px;'></span>";
		}
		
		return false;
	}
	
}