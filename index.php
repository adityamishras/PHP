<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form class="signup-form" id="signupForm" action="#" method="POST">
        <h2>Signup</h2>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <div class="error" id="usernameError"></div>
        </div>
        <div class="form-group">
            <label for="passowrd">Password</label>
            <input type="password" id="password" name="password" required>
            <div class="error" id="passwordError"></div>
        </div>
        <div class="form-group">
            <label for="conf_passowrd">Conform Password</label>
            <input type="password" id="conf_password" name="conf_password" required>
            <div class="error" id="conf_passwordError"></div>
        </div>
        <button type="submit" name="submit" id="submitBtn">Sign Up</button>
    </form>
    <script src="script.js"></script>
</body>

</html>