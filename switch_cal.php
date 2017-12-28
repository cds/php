<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>

<form action="" method="post">
	<lable>Enter the Number to Calculate </lable>
	<input type="text" name="a" required="required" placeholder="Enter First Number" value="<?php echo(isset($_POST['a']))? $_POST['a'] :'';?>" ><br/>
	<lable>Enter the Number to Calculate </lable>
	<input type="text" name="b" required="required" placeholder="Enter the Second Number" value="<?php echo(isset($_POST['b']))?$_POST['b']:'';?>"><br/>
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

switch ($operation){

 case  'add':
	$result = addition ($a,$b);
	$done_operation ='Addition';
	break;
	case 'sub':
	$result = sub($a,$b);
	$done_operation ='Substraction';
	break;
	case 'mult':
	$result = mult($a,$b);
	$done_operation ='Multiplication';
	break;

	case 'div';
	$result = div($a,$b);
	$done_operation ='division';
	break;
	}
	echo "First Number is ".$a."<br>";
echo "Second Number is ".$b."<br>";

	echo " Perform Operation ".$done_operation."<br>";
echo "Result is ".$result."<br>";

}
?>
</body>
</html>