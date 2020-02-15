<?php
	
	if(move_uploaded_file($_FILES["ff"]["tmp_name"], "uploadfolder/".$_FILES["ff"]["name"]))
	{
		echo "successfull";
	}
	
	else
	{
		echo "upload failed.";
	}

?>