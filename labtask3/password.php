<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>

<?php
// define variables and set to empty values
$passwordErr=$rpasswordErr=$npasswordErr = "";
$password =$npassword= $rpassword="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        $specialChars = preg_match('(\S*[\W])', $password);
        if (!$specialChars) {
            $passwordErr = "At least One special character ";

            if (strlen($password) > 8) {
                $passwordErr = 'Password should be less than 8 character';

            }


        }
    }

    if (empty($_POST["npassword"])) {
        $npasswordErr = "New Password is required";
    } else {
        $password = test_input($_POST["npassword"]);
        $specialChars = preg_match('(\S*[\W])', $npassword);
        if (!$specialChars) {
            $npasswordErr = "At least One special character ";

            if (strlen($npassword) > 8) {
                $npasswordErr = 'Password should be less than 8 character';

            }


        }
    }
    if (empty($_POST["rpassword"])) {
        $rpasswordErr = "Retype Password is required";
    } else {
        $rpassword = test_input($_POST["rpassword"]);
        $specialChars = preg_match('(\S*[\W])', $rpassword);
        if (!$specialChars) {
            $rpasswordErr = "At least One special character ";

            if (strlen($rpassword) > 8) {
                $rpasswordErr = 'Password should be less than 8 character';

            }


        }
    }


}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<h2>PHP Login Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

 Current Password: <input type="password" name="password" value="<?php echo $password; ?>">
    <span class="error">* <?php echo $passwordErr; ?></span>
    <br><br>

  New Password: <input type="password" name="password" value="<?php echo $npassword; ?>">
    <span class="error">* <?php echo $npasswordErr; ?></span>
    <br><br>

    Retype Password: <input type="password" name="password" value="<?php echo $rpassword; ?>">
    <span class="error">* <?php echo $rpasswordErr; ?></span>
    <br><br>


    <input type="submit" name="submit" value="Submit">

</form>

<?php
echo "<h2>Your Input:</h2>";

echo $password;
echo "<br>";
echo $npassword;
echo "<br>";
echo $rpassword;
echo "<br>";

?>

</body>
</html>