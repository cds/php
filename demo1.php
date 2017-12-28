<!DOCTYPE html>
<html>
<body>
<form action="" method="post">
First Number  <input type="text" name="a" value="<?php echo isset($_POST['a']) ? $_POST['a'] : ''; ?>"><br>
Second Number  <input type="text" name="b" value="<?php echo isset($_POST['b']) ? $_POST['b'] :'';?>"><br> <!--tyrnary_operator-->
Third Number <input type="text" name="c" value="<?php echo isset($_POST['c']) ? $_POST['c']:'';?>"><br> <br>
<input type="submit" name="submit">
</form> 
<?php
if (isset($_POST['submit'])) {
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$big;

	$big = $a > $b ? ($a > $c ? $a : $c) : ($b > $c ? $b : $c) ;
echo ($big)
;}
?>


</body>
</html>