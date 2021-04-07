<?php
    session_start();
$pid=$_SESSION['pid'] =$_POST['pid'];
$pcode=$_SESSION['pcode'] =$_POST['pcode'];
$name=$_SESSION['name'] =$_POST['name'];
$quantity=$_SESSION['quantity'] =$_POST['quantity'];
$price=$_SESSION['price'] = $_POST['price'];

echo " Product Id:" .$pid;
echo "<br>";
echo "Product Code:" .$pcode;
echo "<br>";

echo "Product Name:" .$name;
echo "<br>";
echo "Quantity:" .$quantity;
echo "<br>";
echo "Price:" .$price;
echo "<br>";


?>

<a href="Logut.php"> Logout</a>

