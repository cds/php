
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="" method="post">
		Name: <input type="text" name="f_name"  placeholder="Enter First Name" value="<?php echo(isset($_POST['f_name']))? $_POST['f_name'] :'';?>" ><br/>
		Last Name: <input type="text" name="l_name"  placeholder="Enter Last Name" value="<?php echo(isset($_POST['l_name']))? $_POST['l_name'] :'';?>" ><br/>
		E-mail: <input type="text" name="e_mail"  placeholder="Enter Email" value="<?php echo(isset($_POST['e_mail']))? $_POST['e_mail'] :'';?>" ><br/>
		Password: <input type="password" name="pass"  placeholder="Enter Password" value="<?php echo(isset($_POST['pass']))? $_POST['pass'] :'';?>"  ><br/>
		Address: <br><textarea
		name="address" row="5" cols="40"><?php echo (isset($_POST['address']))?$_POST['address']:''; ?></textarea><br>
		Gender:
		<input <?php echo (isset($_POST['gender'])&&($_POST['gender']=='Male'))? "checked='checked'":'';?> type ="radio"
		name = "gender"
		value="Male">Male
		<input <?php echo(isset($_POST['gender'])&&($_POST['gender']=='Female'))? "checked='checked'":''; ?>type ="radio"
		name="gender" value="Female">Female
		<br/>
		Country:<select name="Country" >
			<option value="India">India</option>
			<option value="US">US</option>
			<option value="UK">UK</option>
			<option value="London">London</option>
		</select><br/>

		City<br/><select name="City[]" multiple="multiple" >
			<option value="Pune" <?php echo(isset($_POST['City']) && (in_array('Pune',$_POST['City']) )) ? "selected='selected'" : '';?> >Pune</option>
			<option value="Nashik"<?php echo(isset($_POST['City']) && (in_array('Nashik',$_POST['City']) )) ? "selected='selected'" : '';?> >Nashik</option>
			<option value="Shahada"<?php echo(isset($_POST['City']) && (in_array('Shahada',$_POST['City']) )) ? "selected='selected'" : '';?> >Shahada</option>
			<option value="Mumbai"<<?php echo(isset($_POST['City']) && (in_array('Mumbai',$_POST['City']) )) ? "selected='selected'" : '';?> >Mumbai</option>
		</select><br/>
		Subject:
		<input type="checkbox" name="check_list[]" value="Math" <?php echo(isset($_POST['check_list'])&&($_POST['check_list']) &&(in_array('Math',$_POST['check_list']) ))? "checked='checked'":'';?> >Math
		<input type="checkbox" name="check_list[]"  value="Physic" <?php echo(isset($_POST['check_list'])&&($_POST['check_list']) &&(in_array('Physic',$_POST['check_list']) ))? "checked='checked'":'';?> >Physic
		<input type="checkbox" name="check_list[]" value="Biology"<?php echo(isset($_POST['check_list'])&&($_POST['check_list'])&&(in_array('Biology',$_POST['check_list']) ))? "checked='checked'":'';?> >Biology
		<input type="checkbox" name="check_list[]" value="English" value="English" <?php echo(isset($_POST['check_list'])&&($_POST['check_list']) &&(in_array('English',$_POST['check_list']) ))? "checked='checked'":'';?>>English
		<input type="checkbox" name="check_list[]" value="Chemistry" value="Chemistry" <?php echo(isset($_POST['check_list'])&&($_POST['check_list']) &&(in_array('Chemistry',$_POST['check_list']) ))? "checked='checked'":'';?>>Chemistry

		<br>
		<input type="submit" name="submit" value="submit">
	</form>

	<?php 
	if(isset($_POST['submit'])){
		echo "Name :".$_POST["f_name"]."<br/>";
		echo "Last Name:".$_POST["l_name"]."<br/>"; 
		echo "Your E-mail Address is: ".$_POST["e_mail"]."<br/>"; 
		echo "Password: ".$_POST["pass"]."<br/>"; 
		echo "Address: ".$_POST["address"]."<br/>";

		echo "Gender: ".$_POST["gender"]."<br/>";
		echo "Country: ".$_POST["Country"]."<br/>";
	//echo "City: ".$_POST["City"]."<br/>";
		$City =$_POST['City'];
		if($City){
			echo (count($City)>1) ? 'Cities are': 'City is';
			foreach ($City as $key => $c) {
				echo " <br/>".($key+1).')'.$c; 
			}
			echo " <br/>";
			echo	"Total City:" . count($City)."<br/>";
		}
		$sub = $_POST['check_list'];
		if($sub){
			echo (count($sub)>1) ? "Subject's are": "Subject is"."<br/>";
			foreach($sub AS $key => $s){
				echo($key + 1).') '.$s."<br/>";
			} echo " <br/>";
			echo	"Total Subject:" . count($sub);
		}
	}
	?>
</body>
</html>