<!DOCTYPE html>

<?php
session_start();
$_SESSION['userid'] =$_POST['userid'];
$_SESSION['passid'] =$_POST['passid'];
$_SESSION['username'] =$_POST['username'];
$_SESSION['address'] =$_POST['address'];
$_SESSION['country'] = $_POST['country'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['gender'] =$_POST['gender'];

if (isset($_POST['submit'])){

    $user=$_POST['username'];
    $pass=$_POST['password'];

    if ($user=="admin" && $pass=="admin"){
        header("Location: dashboard.php");
        exit();
    }else{
        echo "error! please enter correct data";
    }
}
?>

<html lang="">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row" align="center">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong class="">Login</strong>

                </div>
                <div class="panel-body" >

                    <form class="form-horizontal" action="dashboard.php" role="form" method="POST" style="color: white">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">UserName</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="username" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>

                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" name="submit" class="btn btn-success btn-sm" value="submit">Sign in</button>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
</body>
</html>