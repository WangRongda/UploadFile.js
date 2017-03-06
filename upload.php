<?php
//if ((($_FILES["fileToUpload"]["type"] == "image/gif")
//	|| ($_FILES["fileToUpload"]["type"] == "image/jpeg")
//	|| ($_FILES["fileToUpload"]["type"] == "image/pjpeg"))
//	&& ($_FILES["fileToUpload"]["size"] < 20000))
//{
	if ($_FILES["fileToUpload"]["error"] > 0)
	{
		echo "Return Code: " . $_FILES["fileToUpload"]["error"] . "\n";
	}
	else
	{
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],
			"upload/" . $_POST["filename"]);
	}
//}
//else
//{
//	echo "Invalid fileToUpload";
//}
?>
