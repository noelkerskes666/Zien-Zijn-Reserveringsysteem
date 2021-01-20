<?php
$websites = [];
if(isset($_POST['submit_login'])) {
    // Check passed variables
    $data_missing = array();

    if (empty($_POST['input_username'])) $data_missing[] = 'Uname';
    else $uname = trim($_POST['input_username']);

    if (empty($_POST['input_password'])) $data_missing[] = 'Pass';
    else $pass = trim($_POST['input_password']);

    // Defined as constants so that they can't be changed

    DEFINE('DB_USER', $uname);
    DEFINE('DB_PASSWORD', $pass);
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_NAME', 'zienzijn');

    // $dbc will contain a resource link to the database
    // @ keeps the error from showing in the browser


    $dbc_admin = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    or die('Invalid username or password: ' . mysqli_connect_error());


    if (empty($data_missing)) {

        // Create a query for the database
        $query = "SELECT id, voornaam, achternaam, email, telefoon, type_afspraak, datum, tijdstip FROM afspraken WHERE datum >= CURRENT_DATE ";

        // Get a response from the database by sending the connection and the query
        $response = @mysqli_query($dbc_admin, $query);

        // If the query executed properly proceed
        if (!$response) {
            echo "Couldn't issue database query<br />";
            echo mysqli_error($dbc_admin);
        } else {


            // Close connection to the database
            mysqli_close($dbc_admin);
        }
    }
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="sunny.png">
    <title>Zien & Zijn</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <script src="java.js"> </script>
</head>
<body>
<form action="http://localhost:63342/reserveringssysteem/zienzijn/afspraak_added.php" method="post">
    <div class="loginbox2">
        <table>
            <tr>
                <td> <b>Voornaam</b></td>
                <td> <b>Achternaam</b></td>
                <td> <b>Email</b></td>
                <td> <b>Telefoon</b></td>
                <td> <b>Type afspraak</b></td>
                <td> <b>Datum</b></td>
                <td> <b>Tijdstip</b></td>

            </tr>

            <!-- mysqli_fetch_array will return a row of data from the query until no further data is available -->
            <?php foreach ($response as $row): ?>

                <tr><td align="center"> <?php echo $row['voornaam'] ?>
                    </td><td align="center"> <?php echo $row['achternaam'] ?>
                    </td><td align="center"> <?php echo $row['email'] ?>
                    </td><td align="center"> <?php echo $row['telefoon'] ?>
                    </td><td align="center"> <?php echo $row['type_afspraak'] ?>
                    </td><td align="center"> <?php echo $row['datum'] ?>
                    </td><td align="center"> <?php echo $row['tijdstip']?></td>
                    <td><a href="#" onclick="deleteRow(<?php echo $row['id'] ?>)">verwijderen</a></td>
                </tr>

            <?php endforeach; ?>

        </table>
    </div>
</form>
</body>
</html>
