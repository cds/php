<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>

<form action="" method="post">
	Enter the Number to Calculate <input type="text" name="a"><br/>
	Enter the Number to Calculate <input type="text" name="b"><br/>
	Enter the Number to Calculate <input type="text" name="c">
	<br/>
	<input type="submit" name="submit" value = "add"> <br/>
	<input type="submit" name="1" value = "1"> <br/>

</form>

<?php
 if (!function_exists("addition")){
 	function addition ($a=0,$b=0){
 		return $a+$b;
 	}
 }
if (isset($_POST['submit'])) {

$a=$_POST['a'];
$b=$_POST['b'];
$operation = $_POST['submit'];
$operation = $_POST['1'];
if ($operation == 'add') {
	$result = addition ($a,$b);
	$done_operation ='Addition';
	}
	if ($operation=='1'){
		$result ='1';
		$done_operation='1';
	}
echo "Result is ".$result;
}
?>
</body>
</html>