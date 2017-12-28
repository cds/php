<!DOCTYPE html>
<html>
<head>
	<title>In Array Search</title>
</head>
<body>
<?php 
	$Search =array("1,",1,23,"ram");

	if (in_array("rasd",$Search,TRUE)) 
	{
		echo "found<br>";
	}
	else
	{
		echo "not Found<br>";
	}
   if (in_array("raj",$Search,TRUE)) 
	{
			echo "found<br>";
	}
	else
	{
		echo "not Found<br>";
	}
	if (in_array(23,$Search,TRUE)) 
	{
		echo "found<br>";
	}
	else
	{
		echo "not Found<br>";
	}

	if (in_array("23",$Search,TRUE)) 
	{
		echo "found<br>";
	}
	else
	{
		echo "not Found<br>";
	}

?>
</body>
</html>