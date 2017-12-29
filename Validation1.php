<!DOCTYPE html>
<html>
    <head>
        <style >.error {color:#FF0000 ;}
        </style>
        <title></title>
    </head>
    <body>



        <?php
        $errorFirstname = $errorLastname = $errorEmail = $errorPassword = $errorAddress = $errorGender = $errorCity = $errorSub = $errorCountry = '';
        $error = 0;
        if (isset($_POST['submit'])) {
            if (empty($_POST['Firstname'])) {
                $error = 1;
                $errorFirstname = "Please Enter First Name ";
            } else {
                $errorFirstname = '';
            }

            if (empty($_POST['Lastname'])) {
                $error = 1;
                $errorLastname = "Please Enter Last Name ";
            } else {
                $errorLastname = '';
            }
            if (empty($_POST['Email'])) {
                $error = 1;
                $errorEmail = "Please Enter Email  ";
            } else {
                $errorEmail = '';
            }
            if (empty($_POST['pass'])) {
                $error = 1;
                $errorPassword = "Please Enter password  ";
            } else {
                $errorPassword = '';
            }
            if (empty($_POST['address'])) {
                $error = 1;
                $errorAddress = "Please Enter Address  ";
            } else {
                $errorAddress = '';
            }
            if (empty($_POST['gender'])) {
                $error = 1;
                $errorGender = "Please select gender  ";
            } else {
                $errorGender = '';
            }
            if (empty($_POST['City'])) {
                $error = 1;
                $errorCity = "Please select City  ";
            } else {
                $errorCity = '';
            }
            if (empty($_POST['check_list'])) {
                $error = 1;
                $errorSub = "Please select Atlest One Subject  ";
            } else {
                $errorSub = '';
            }
            if (empty($_POST['Country'])) {
                $error = 1;
                $errorCountry = "Please select Country  ";
            } else {
                $errorSub = '';
            }
        }
        ?>

        <form action= ""  method ="POST">
            First Name: 
            <input type = "text" placeholder = "Enter First Name" name ="Firstname" value="<?php echo isset($_POST['Firstname']) ? $_POST['Firstname'] : ''; ?>">
            <p class="error"><?php echo $errorFirstname; ?></p> <br/>
            Last Name: <input type = "text" placeholder = "Enter Last Name" name ="Lastname" value="<?php echo isset($_POST['Lastname']) ? $_POST['Lastname'] : ''; ?>">
            <p class="error"><?php echo $errorLastname; ?></p> <br/>
            E-Mail :   <input type="text" name="Email"  placeholder="Enter Email" value="<?php echo(isset($_POST['Email'])) ? $_POST['Email'] : ''; ?>" >
            <p class="error"><?php echo $errorEmail; ?></p> <br/>
            Password: <input type="password" name="pass"  placeholder="Enter Password" value="<?php echo(isset($_POST['pass'])) ? $_POST['pass'] : ''; ?>"  >
            <p class="error"><?php echo $errorPassword; ?></p> <br/>
            Address: 
            <br>
            <textarea name="address" row="5" cols="40"><?php echo (isset($_POST['address'])) ? $_POST['address'] : ''; ?></textarea><br>
            <p class="error"><?php echo $errorAddress; ?></p> <br/>
            Gender:
            <input <?php echo (isset($_POST['gender']) && ($_POST['gender'] == 'Male')) ? "checked='checked'" : ''; ?> type ="radio"
                                                                                                                       name = "gender"
                                                                                                                       value="Male">Male
            <input <?php echo(isset($_POST['gender']) && ($_POST['gender'] == 'Female')) ? "checked='checked'" : ''; ?>type ="radio"
                                                                                                                       name="gender" value="Female">Female

            <p class="error"><?php echo $errorGender; ?></p> <br/>
            Country:
            <select name="Country" >
                <option value="">Select Country</option>
                <option <?php echo (isset($_POST['Country']) && ($_POST['Country'] == "India")) ? "selected='selected'" : ""; ?>  value="India">India</option>
                <option <?php echo (isset($_POST['Country']) && ($_POST['Country'] == "US")) ? "selected='selected'" : ""; ?>  value="US">US</option>
                <option <?php echo (isset($_POST['Country']) && ($_POST['Country'] == "UK")) ? "selected='selected'" : ""; ?>  value="UK">UK</option>
            </select><br/>
            <p class="error"><?php echo $errorCountry; ?></p> <br/>

            City:       <p class="error"><?php echo $errorCity; ?></p> <br/><select name="City[]" multiple="multiple" >
                <option value="Pune" <?php echo(isset($_POST['City']) && (in_array('Pune', $_POST['City']) )) ? "selected='selected'" : ''; ?> >Pune</option>
                <option value="Nashik"<?php echo(isset($_POST['City']) && (in_array('Nashik', $_POST['City']) )) ? "selected='selected'" : ''; ?> >Nashik</option>
                <option value="Shahada"<?php echo(isset($_POST['City']) && (in_array('Shahada', $_POST['City']) )) ? "selected='selected'" : ''; ?> >Shahada</option>
                <option value="Mumbai"<<?php echo(isset($_POST['City']) && (in_array('Mumbai', $_POST['City']) )) ? "selected='selected'" : ''; ?> >Mumbai</option>
            </select>
            <br/>
            Subject:
            <input type="checkbox" name="check_list[]" value="Math" <?php echo(isset($_POST['check_list']) && ($_POST['check_list']) && (in_array('Math', $_POST['check_list']) )) ? "checked='checked'" : ''; ?> >Math
            <input type="checkbox" name="check_list[]"  value="Physic" <?php echo(isset($_POST['check_list']) && ($_POST['check_list']) && (in_array('Physic', $_POST['check_list']) )) ? "checked='checked'" : ''; ?> >Physic
            <input type="checkbox" name="check_list[]" value="Biology"<?php echo(isset($_POST['check_list']) && ($_POST['check_list']) && (in_array('Biology', $_POST['check_list']) )) ? "checked='checked'" : ''; ?> >Biology
            <input type="checkbox" name="check_list[]" value="English" value="English" <?php echo(isset($_POST['check_list']) && ($_POST['check_list']) && (in_array('English', $_POST['check_list']) )) ? "checked='checked'" : ''; ?>>English
            <input type="checkbox" name="check_list[]" value="Chemistry" value="Chemistry" <?php echo(isset($_POST['check_list']) && ($_POST['check_list']) && (in_array('Chemistry', $_POST['check_list']) )) ? "checked='checked'" : ''; ?>>Chemistry

            <br>
            <p class="error"><?php echo $errorSub; ?></p> <br/>
            <input type="submit" name="submit" value="submit">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            if ($error == 0) {
                echo "<br>" . "Form is submitted" . "<br/>";
                echo "Entered Firstname is: " . $_POST['Firstname'] . "<br/>";
                echo "Entered  Lastname is: " . $_POST['Lastname'] . "<br/>";
                echo "Your E-mail Address is: " . $_POST["Email"] . "<br/>";
                echo "Password: " . $_POST["pass"] . "<br/>";
                echo "Address: " . $_POST["address"] . "<br/>";
                echo "Gender: " . $_POST["gender"] . "<br/>";
                echo "Country: " . $_POST["Country"] . "<br/>";
                $City = $_POST['City'];
                if ($City) {
                    echo (count($City) > 1) ? 'Cities are' : 'City is';
                    foreach ($City as $key => $c) {
                        echo " <br/>" . ($key + 1) . ')' . $c;
                    }
                    echo " <br/>";
                    echo "Total City:" . count($City) . "<br/>";
                }
                $sub = $_POST['check_list'];
                if ($sub) {
                    echo (count($sub) > 1) ? "Subject's are" : "Subject is" . "<br/>";
                    foreach ($sub AS $key => $s) {
                        echo($key + 1) . ') ' . $s . "<br/>";
                    }
                    echo " <br/>";
                    echo "Total Subject:" . count($sub);
                }
            }
        }
        ?>
    </body>
</html>