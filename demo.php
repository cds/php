<!DOCTYPE html>
<html>
<body>
<form action="" method="post">
First Number  <input type="text" name="a1" value="<?php echo isset($_POST['a1']) ? $_POST['a1'] : ''; ?>"><br>
Second Number  <input type="text" name="a2" value="<?php echo isset($_POST['a2']) ? $_POST['a2'] :'';?>"><br> <!--tyrnary_operator-->
Third Number <input type="text" name="a3" value="<?php echo isset($_POST['a3']) ? $_POST['a3']:'';?>"><br> <br>
<input type="submit" name="submit">
</form> 
<?php
if (isset($_POST['submit'])) {
$a1=$_POST['a1'];
$a2=$_POST['a2'];
$a3=$_POST['a3'];

echo "<br>";
echo  "First Number is ".$a1."<br>";
echo "Second Number is ".$a2."<br>";
echo "Third Number is ".$a3. "<br>";
if (($a1>$a2)&&($a1>$a3)) {
	echo "First Number Is Greater"; 
} else if (($a2>$a1)&&($a2>$a3)) {
	echo "Second Number Is Greater";# code...
} else if (($a3>$a2)&&($a3>$a1)) {
	echo "Third Number is Greater";

}else{ 
	echo "All Number Are Equal";
}


}
?>


</body>
</html>