<?php session_start(); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = 'admin';
    $pass = '123456@Abc';
    if ($_POST['user'] == $user && $_POST['pass'] == $pass) {
        $_SESSION['user'] = $_POST['user'];
        header('location:index.php');
    } else {
        echo "user or password is incorrect";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/admin.css">
</head>

<!------ Include the above in your HEAD tag ---------->

<!------ Include the above in your HEAD tag ---------->
</head>
<body id="LoginForm">
<div class="container">
    <h1 class="form-heading">login Form</h1>
    <div class="login-form">
        <div class="main-div">
            <div class="panel">
                <h2>Admin Login</h2>
                <p>Please enter your email and password</p>
            </div>
            <form id="Login" method="post">

                <div class="form-group">


                    <input type="text" name="user" class="form-control" id="inputEmail" placeholder="Email Address">

                </div>

                <div class="form-group">

                    <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password">

                </div>
                <div class="forgot">
                    <a href="reset.html">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary" >Login</button>

            </form>
        </div>
    </div>


</body>
</html>