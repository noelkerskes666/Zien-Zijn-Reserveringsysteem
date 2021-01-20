
<?php
if(isset($_POST['submit'])){
    $data_missing = array();

    if (empty($_POST['input_first_name'])) $data_missing[] = 'First Name';
    else $f_name = trim($_POST['input_first_name']);

    if (empty($_POST['input_last_name'])) $data_missing[] = 'Last Name';
    else $l_name = trim($_POST['input_last_name']);

    if (empty($_POST['input_phone'])) $data_missing[] = 'Phone';
    else $phone = trim($_POST['input_phone']);

    if (empty($_POST['input_email'])) $data_missing[] = 'Email';
    else $email = trim($_POST['input_email']);

    if (empty($_POST['input_type_appointment'])) $data_missing[] = 'Type Appointment';
    else $type_appointment = trim($_POST['input_type_appointment']);

    if (empty($_POST['input_date_appointment'])) $data_missing[] = 'Date Appointment';
    else $date_appointment = trim($_POST['input_date_appointment']);

    if (empty($_POST['input_time_appointment'])) $data_missing[] = 'Time Appointment';
    else $time_appointment = trim($_POST['input_time_appointment']);


    if (empty($data_missing)){
        require_once('mysqli_connect.php');

        $query = "INSERT INTO afspraken (voornaam, achternaam, telefoon, email, type_afspraak, datum, tijdstip) VALUES(?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($dbc, $query);

        if ( !$stmt ) {
            die('mysqli error: ' . mysqli_error($dbc));
        }

        mysqli_stmt_bind_param($stmt, "sssssss",$f_name, $l_name, $phone, $email, $type_appointment, $date_appointment, $time_appointment);
        if ( !$stmt ) {
            die('mysqli error: ' . mysqli_error($dbc));
        }
        mysqli_stmt_execute($stmt);
        if ( !$stmt ) {
            die('mysqli error: ' . mysqli_error($dbc));
        }
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        if ( !$stmt ) {
            die('mysqli error: ' . mysqli_error($dbc));
        }
        if ($affected_rows == 1) {
            #echo 'Afspraak is gemaakt';

            mysqli_stmt_close($stmt);
            mysqli_close($dbc);

        } else {

            #echo 'Error Occurred<br>';
            #echo mysqli_error();

            mysqli_stmt_close($stmt);
            mysqli_close($dbc);

        }

    } else {

        echo 'You need to enter the following data<br>';

        foreach($data_missing as $missing){

            echo "$missing<br>";

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
    <title>Afspraak added</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <script src="java.js"> </script>
</head>
<body>
    <div class="topnav" id="myTopnav">
        <a href="index.php"class="active">Home</a>
        <a href="mindfulness.php" class="active">Mindfulness</a>
        <a href="yinyoga.php"class="active">Yin yoga</a>
        <a href="add_afspraak.php" class="active">Reserveren</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="content">
        <h1>  Afspraak is gemaakt!!! </h1>
        <img src='pandarijst.JPG' class="img3"/>
    </div>
    <footer>
        <div class="footer3">
            <p1> ZIEN & ZIJN MINDFULNESS </p1>
            <p1> locatie:  Praktijk Centrum Carnisse </p1>
            <p1> Middeldijkerplein 3A, Barendrecht </p1>
            <p1> E-mail: info@mindfulness-barendrecht.nl </p1>
            <p1> Tel: 06-11073140 (Monica) </p1>
            <p1> KvK: 53674480, Vestigingsnummer: 000023538023 </p1>
            <p1> BTWnr: 850971287B01 </p1>
            <p1> Bank: NL10 INGB 0758 0216 66 </p1>
        </div>
        <div class="footer2">
            <p1> Designed door Ramon Grava en Noël Kerskes | Copyright 2015-2021 Zien en Zijn | Alle rechten voorbehouden | Privacyverklaring </p1>
        </div>
    </footer>
</body>
</html>
