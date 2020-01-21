<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="sunny.png">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Open+Sans&display=swap" rel="stylesheet">
    <title>Login</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <script src="java.js"> </script>
</head>
<body onload=tick()>
<FORM name=animation><TEXTAREA name=cheerleader rows=5 cols="20"></TEXTAREA> <BR><INPUT onclick=javascript:tick() type=button value="Redo">
</FORM>
    <div class="loginbox">
        <form action="http://localhost:1234/zienzijn/admin_login.php" method="post">
            <img src="avatar.png" class="avatar">
            <h1>Hier Inloggen</h1>
            <p>Gebruikersnaam</p>
            <input type="text" name="input_username" placeholder="Voer Gebruikersnaam in">
            <p>Wachtwoord</p>
            <input type="password" name="input_password" placeholder="Voer Wachtwoord in">
            <input type="submit" name="submit_login" value="Inloggen">
            <br>
        </form>
    </div>



</body>
</html>

