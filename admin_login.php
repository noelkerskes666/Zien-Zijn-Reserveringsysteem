<?php
$websites = [];
if(isset($_POST['submit_login'])){
    $data_missing = array();

    if (empty($_POST['input_username'])) $data_missing[] = 'Uname';
    else $uname = trim($_POST['input_username']);

    if (empty($_POST['input_password'])) $data_missing[] = 'Pass';
    else $pass = trim($_POST['input_password']);

    DEFINE ('DB_USER', $uname);
    DEFINE ('DB_PASSWORD', $pass);
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_NAME', 'zienzijn')


    $dbc_admin = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR die('Invalid username or password: ' . mysqli_connect_error());



    if (empty($data_missing)) {

        $query = "SELECT id, voornaam, achternaam, persoon, email, telefoon, type_afspraak, opmerking, datum, tijdstip FROM afspraken WHERE datum >= CURRENT_DATE ";

        $response = @mysqli_query($dbc_admin, $query);

        if (!$response) {
            echo "Couldn't issue database query<br />";
            echo mysqli_error($dbc_admin);
        }
        else {
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport"
                      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <link rel="icon" href="sunny.png">
                <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Open+Sans&display=swap" rel="stylesheet">
                <title>Afspraken worden hieronder getoond:</title>
                <link type="text/css" rel="stylesheet" href="style.css"/>
                <script src="java.js"> </script>
            </head>
            <body>
            <form action="http://localhost:1234/zienzijn/afspraak_added.php" method="post">
                <div class="loginbox4">
                    <table align="center" width="1000">
                        <tr>
                            <td align="center"><b>Voornaam</b></td>
                            <td align="center"><b>Achternaam</b></td>
                            <td align="center"><b>Persoon</b></td>
                            <td align="center"><b>Email</b></td>
                            <td align="center"><b>Telefoon</b></td>
                            <td align="center"><b>Type afspraak</b></td>
                            <td align="center"><b>Opmerking</b></td>
                            <td align="center"><b>Datum</b></td>
                            <td align="center"><b>Tijdstip</b></td>

                        </tr>

                        <?php foreach ($response as $row): ?>

                            <tr><td align="center"> <?php echo $row['voornaam'] ?>
                                </td><td align="center"> <?php echo $row['achternaam'] ?>
                                </td><td align="center"> <?php echo $row['persoon'] ?>
                                </td><td align="center"> <?php echo $row['email'] ?>
                                </td><td align="center"> <?php echo $row['telefoon'] ?>
                                </td><td align="center"> <?php echo $row['type_afspraak'] ?>
                                </td><td align="center"> <?php echo $row['opmerking'] ?>
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
            <?php
        }
        
        mysqli_close($dbc_admin);
    }
}
?>
