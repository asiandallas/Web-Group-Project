<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href ="/css/login.css">
    <link rel="icon" href="https://cdn.discordapp.com/attachments/1081329569258287296/1086137061750353971/image.png">

</head>
<body>

    <?php
        session_start();
        // Check if the user is logged in
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
            header("Location: /php/user_page.php");
        } 
    ?>

    <div class="center">
        <h1>Login
            <a href="index.html">
            <img src="https://cdn.discordapp.com/attachments/1081329569258287296/1086137061750353971/image.png" width="50px" height="50px">
        </a></h1>
        <form action = "/php/validateUser.php" method="get">
            <div class="txt_field">
                <p>Username:</p>
                <input type="text" name="username" required placeholder="type here">
                <span></span>
            </div>
            <div class="txt_field">
                <p>Password:</p>
                <input type="password" name="password" required placeholder="type here">
                <span></span>
            </div>
            <div class="pass">Forgot Password?</div>
                <input type="submit" name="submit" value="Login">
            <div class="signup_link">Not a member?<a href="register.html"> Register here</a></div>
        </form>
    </div>

</body>
</html>