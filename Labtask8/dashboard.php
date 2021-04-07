<?php

session_start();
$username=$_SESSION['username'] =$_POST['username'];
$address=$_SESSION['address'] =$_POST['address'];
$country=$_SESSION['country'] = $_POST['country'];
$email=$_SESSION['email'] = $_POST['email'];
$gender=$_SESSION['gender'] =$_POST['gender'];

echo " Name:" .$username;
echo "<br>";
echo "Email:" .$email;
echo "<br>";

echo "Address:" .$address;
echo "<br>";
echo "Country:" .$country;
echo "<br>";
echo "Gender:" .$gender;
echo "<br>";


?>

<a href="Logut.php"> Logout</a>
<a href="Add-Product.php"> Add Product</a>