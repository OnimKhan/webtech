
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
$nameErr = $passwordErr  = "";
$name = $password  = "";

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

<h2>PHP Login Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 User Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Password: <input type="password" name="password" value="<?php echo $password;?>">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
    <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

  <input type="submit" name="submit" value="Submit">
    <span class="psw"> <a href="#"> Forgot password?</a></span>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $password;
echo "<br>";

?>

</body>
</html>