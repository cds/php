<!DOCTYPE html >
<!DOCTYPE html>
<html>
<head>
	<title>Pointer</title>
</head>
<body>

<?php
	$ages = array(1,2,9,4,8,5);
	

	//echo"1: ".current($ages)."<br>";
	
//	next($ages);
//	echo "2: ". current($ages)."<br>";

	 while($age = current($ages)){
	 	echo($age).",";
	 	next($ages);
	 }
	?>

</body>
</html>