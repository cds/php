<!DOCTYPE HTML>
<html>  
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
		<br>
Country:<select name="Country">
  <option value="India">India</option>
  <option value="US">US</option>
  <option value="UK">UK</option>
  <option value="London">London</option>
</select><br>
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
if(isset($_POST['submit']))
	echo "Name :".$_POST["f_name"]."<br>";
	echo "Last Name:".$_POST["l_name"]."<br>"; 
	echo "Your E-mail Address is: ".$_POST["e_mail"]."<br>"; 
	echo "Password: ".$_POST["pass"]."<br>"; 
	echo "Address: ".$_POST["address"]."<br>";
	echo "Gender: ".$_POST["gender"]."<br>";
	echo "Country: ".$_POST["Country"]."<br>";
  $sub = $_POST['check_list'];
    if(empty($sub)){
      echo("You didn't select any subject.");
      }
    else
      {
    $N = count($sub);
    echo("You selected $N subject(s): ");
    
    for($i=0; $i<$N; $i++){
$j=($i+1);
      echo "<br>".("Subject is: ".$j.") ".$sub[$i]." ");
      }

    }
?>
</body>
</html>