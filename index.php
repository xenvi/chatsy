<?php
include('connection.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chat Site</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">

    <script src="https://kit.fontawesome.com/51eaabbc5c.js"></script>

</head>

<body>
    <header id="title">Chatsy</header>

    <div class="login-signup-title"><span class="login-title">Log In</span> <span class="signup-title translucent">Sign Up</span></div>
    <div id="loginContainer">
        <form action="" id="loginForm">
            <span class="labels">username</span>
            <input type="text" name="username" class="input">
            <br><br>
            <span class="labels">password</span>
            <input type="text" name="password" class="input">
            <br><br>
            <input type="submit" value="Log In" class="submit">
        </form>

        <form action="" id="signupForm">
            <span class="labels">display name</span>
            <input type="text" name="username" class="input">
            <br><br>
            <span class="labels">username</span>
            <input type="text" name="username" class="input">
            <br><br>
            <span class="labels">password</span>
            <input type="text" name="password" class="input">
            <br><br>
            <input type="submit" value="Sign Up" class="submit">
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>