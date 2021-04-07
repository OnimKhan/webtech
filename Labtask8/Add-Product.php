<?php
session_start();
if (isset($_POST['submit'])){
    $_SESSION['pid'] =$_POST['pid'];
    $_SESSION['pcode'] =$_POST['pcode'];
    $_SESSION['name'] =$_POST['name'];
    $_SESSION['quantity'] =$_POST['quantity'];
    $_SESSION['price'] = $_POST['price'];
}
?>
?>
<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title> Registration form</title>
    <meta name="keywords" content="example, JavaScript Form Validation, Sample registration form" />
    <meta name="description" content="This document is an example of JavaScript Form Validation using a sample registration form. " />
    <link rel='stylesheet' href='style.css' type='text/css' />
    <script src="Registration.js"></script>
</head>
<body>
<h1>Add Product</h1>
<form action="View.php" method="post">
    <ul>
        <li><label for="userid">Product id:</label></li>
        <li><input type="text" name="pid" size="12" required/></li>
        <li><label for="passid">Product Code:</label></li>
        <li><input type="password" name="pcode" size="12" required /></li>
        <li><label for="username">Name:</label></li>
        <li><input type="text" name="name" size="50" required/></li>
        <li><label for="address">Quantity:</label></li>
        <li><input type="text" name="quantity" size="50" required/></li>
        <li><label for="email">Price:</label></li>
        <li><input type="text" name="price" size="50" required/></li>
        <li><input type="submit" name="submit" value="Submit" /></li>
    </ul>
</form>
</body>
</html>