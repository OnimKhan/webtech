<php

    <?php
    session_start();
    if (isset($_POST['submit'])){
        $_SESSION['userid'] =$_POST['userid'];
        $_SESSION['passid'] =$_POST['passid'];
        $_SESSION['username'] =$_POST['username'];
        $_SESSION['address'] =$_POST['address'];
        $_SESSION['country'] = $_POST['country'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['gender'] =$_POST['gender'];
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
<body onload="document.registration.userid.focus();">
<h1>Registration Form</h1>
<form action="Login.php" method="post">
    <ul>
        <li><label for="userid">User id:</label></li>
        <li><input type="text" name="userid" size="12" required/></li>
        <li><label for="passid">Password:</label></li>
        <li><input type="password" name="passid" size="12" required /></li>
        <li><label for="username">Name:</label></li>
        <li><input type="text" name="username" size="50" required/></li>
        <li><label for="address">Address:</label></li>
        <li><input type="text" name="address" size="50" required/></li>
        <li><label for="country">Country:</label></li>
        <li><select name="country" required>
                <option selected="" value="Default">(Please select a country)</option>
                <option value="BN">Bangladesh</option>
                <option value="AL">Canada</option>
                <option value="DZ">India</option>
                <option value="AS">Russia</option>
                <option value="AD">USA</option>
            </select></li>

        <li><label for="email">Email:</label></li>
        <li><input type="text" name="email" size="50" required/></li>
        <li><label id="gender">Gender:</label></li>
        <li><input type="radio" name="msex" value="Male" /><span>Male</span></li>
        <li><input type="radio" name="fsex" value="Female" /><span>Female</span></li>
        <li><input type="submit" name="submit" value="Submit" /></li>
    </ul>
</form>
</body>
</html>