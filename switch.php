<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Switch</title>
</head>
<body>
<form action="" method="POST">
	Enter The  Number of Month To Display <input type="text" name="num" value="<?php echo isset ($_POST['num'])? $_POST['num']: '';?>"><br>
	<input type="submit" name="submit">
</form>

<?php
 if (isset($_POST['submit'])){
 	$num=$_POST['num'];

if (($num<13)&&($num>0)){


 switch ($num) {

 
 	case 1:
 	echo "January<br>";
 	break;
 	case 2:
 	echo "Febuary<br>";
 		break;
 	case 3:
 	echo "March<br>";
 		break;
 	case 4:
 	echo "April";
 		break;
 	case 5:
 	echo "May";
 		break;
 	case 6:
 	echo "June";	
 		break;
 	case 7:
 	echo "July";	# code...
 		break;
 	case 8:
 	echo "August";	# code...
 		break;
 	case 9:
 	echo "September";
 		break;
 	case 10:
 	echo "October";	# code...
 		break;
 	case 11:
 	echo "November";
 		break;
 	case 12:
 	echo "December";	# code...
 		break;
 	default:
 	echo "This Month Is Not Exists";	# code...
 		break;
 }
}else{
	echo "Invalid month please enter number inbetween 1-12";
}

}
?>
</body>
</html>
