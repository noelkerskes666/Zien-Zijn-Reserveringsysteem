<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="sunny.png">
    <title>Login</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <script src="java.js"> </script>
</head>
<body>
    <div class="loginbox">
        <form action="http://localhost/zienzijn/admin_login.php" method="post">
            <img src="avatar.png" class="avatar">
            <h1> Inloggen </h1>
            <p> Gebruikersnaam </p>
            <input type="text" name="input_username" placeholder="Voer Gebruikersnaam in">
            <p> Wachtwoord </p>
            <input type="password" name="input_password" placeholder="Voer Wachtwoord in">
            <input type="submit" name="submit_login" value="Inloggen"></form>
    </div>
</body>
</html>

