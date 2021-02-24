<!DOCTYPE HTML>
<html lang="">
<head>
    <title>Lab Task 2</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<?php

$nameErr = $emailErr = $genderErr = $degreeErr= "";
$name = $email = $gender = $degree= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }


    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    if (empty($_POST["degree"])) {
        $degreeErr = "Degree is required";
    } else {
        $degree = test_input($_POST["degree"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>Form Validation</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
   
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    Degree:
   <span> SSC<input type="checkbox" name="degree" value="SSC"> </span>
   <span> HSC<input type="checkbox" name="degree" value="HSC"> </span>
   <span> BSc<input type="checkbox" name="degree" value="BSc"> </span>
   <span> MSc<input type="checkbox" name="degree" value="MSc"> </span>

    <span class="error">* <?php echo $degreeErr; ?> </span>
    <br><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input Is:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";

echo $gender;
echo "<br>";
echo $degree;

?>

</body>
</html>