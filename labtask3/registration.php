
<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr =$emailErr=$unameErr=$genderErr=$dateErr = $passwordErr  = "";
$name=$email=$uname=$gender=$date = $password  = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";

    } else {
        $name = test_input($_POST["name"]);

        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";

            if (strlen($name)<2){
                $nameErr= 'name should be more than 2 character';
            }
        }
    }
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["uname"])) {
        $unameErr = "Name is required";

    } else {
        $uname = test_input($_POST["uname"]);

        if (!preg_match("/^[a-zA-Z-' ]*$/",$uname)) {
            $unameErr = "Only letters and white space allowed";

            if (strlen($uname)<2){
                $unameErr= 'name should be more than 2 character';
            }
        }
    }
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["date"])) {
        $dateErr = "Date is required";
    } else {
        $date = test_input($_POST["date"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        $specialChars = preg_match('(\S*[\W])', $password);
        if ( !$specialChars) {
            $passwordErr = "At least One special character ";

            if (strlen($password)>8){
                $passwordErr= 'Password should be less than 8 character';

            }


        }
    }





}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Registration Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
   User Name: <input type="text" name="uname" value="<?php echo $uname;?>">
    <span class="error">* <?php echo $unameErr;?></span>
    <br><br>

    Password: <input type="password" name="password" value="<?php echo $password;?>">
    <span class="error">* <?php echo $passwordErr;?></span>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
        Date Of Birth:
        <input type="date" name="date"
               placeholder="dd-mm-yyyy" value="<?php echo $date;?>"
               min="1995-01-01" max="2030-12-31">
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" value="Reset">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $uname;
echo "<br>";
echo $gender;
echo "<br>";
echo $date;
echo "<br>";
echo $password;
echo "<br>";

?>

</body>
</html>