var alpha = "[ A-Za-z]";
var alphadott = "[ A-Za-z.]";
var numeric = "[0-9]"; 
var alphanumeric = "[ A-Za-z0-9]"; 

function onKeyValidate(e,charVal)
{
	var keynum;
	var keyChars = /[\x00\x08]/;
	var validChars = new RegExp(charVal);
	if(window.event)
	{
		keynum = e.keyCode;
	}
	else if(e.which)
	{
		keynum = e.which;
	}
	var keychar = String.fromCharCode(keynum);
	if (!validChars.test(keychar) && !keyChars.test(keychar))
	{
		return false
	} else
	{
		return keychar;
	}
}

function ld()
{
	document.myfrmaddp.pnm.focus();
}