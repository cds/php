<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>

<form action="" method="post">
	Enter the Number to Calculate <input type="text" name="a"><br/>
	Enter the Number to Calculate <input type="text" name="b"><br/>
	<input type="submit" name="submit" value = "add"><br>
	<input type="submit" name="submit" value = "sub"><br>
	<input type="submit" name="submit" value = "mult"><br>
	<input type="submit" name="submit" value = "div"><br>


</form>

<?php
 if (!function_exists("addition")){
 	function addition ($a=0,$b=0){
 		return $a+$b;
 	}
 }
 if (!function_exists("sub")){
 	function sub ($a=0,$b=0){
 		return $a-$b;
 	}
 }
 if (!function_exists("mult")){
 	function mult ($a=1,$b=1){
 		return $a*$b;
 	}
 }
 if (!function_exists("div")){
 	function div ($a=1,$b=1){
 		return $a/$b;
 	}
 		
}
if (isset($_POST['submit'])) {

$a=$_POST['a'];
$b=$_POST['b'];
$operation = $_POST['submit'];

switch ('add'){
	case 1:
	echo"addition";
	break;
}
}
echo "Result is ".$result;

?>
</body>
</html>