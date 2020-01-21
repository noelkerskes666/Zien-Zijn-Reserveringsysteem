
<?php
if(isset($_POST['submit'])){

    $data_missing = array();

    if (empty($_POST['input_first_name'])) $data_missing[] = 'First Name';
    else $f_name = trim($_POST['input_first_name']);

    if (empty($_POST['input_last_name'])) $data_missing[] = 'Last Name';
    else $l_name = trim($_POST['input_last_name']);

    if (empty($_POST['input_adult'])) $data_missing[] = 'Adult';
    else $adult = trim($_POST['input_adult']);

    if (empty($_POST['input_email'])) $data_missing[] = 'Email';
    else $email = trim($_POST['input_email']);

    if (empty($_POST['input_phone'])) $data_missing[] = 'Phone';
    else $phone = trim($_POST['input_phone']);

    if (empty($_POST['input_type_appointment'])) $data_missing[] = 'Type Appointment';
    else $type_appointment = trim($_POST['input_type_appointment']);

    if (empty($_POST['input_msg'])) $data_missing[] = 'Message';
    else $msg = trim($_POST['input_msg']);

    if (empty($_POST['input_date_appointment'])) $data_missing[] = 'Date Appointment';
    else $date_appointment = trim($_POST['input_date_appointment']);

    if (empty($_POST['input_time_appointment'])) $data_missing[] = 'Time Appointment';
    else $time_appointment = trim($_POST['input_time_appointment']);


    if (empty($data_missing)){
        require_once('mysqli_connect.php');

        $query = "INSERT INTO afspraken (voornaam, achternaam, persoon, email, telefoon, type_afspraak, opmerking, datum, tijdstip) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($dbc, $query);

        if ( !$stmt ) {
            die('mysqli error: ' . mysqli_error($dbc));
        }

        mysqli_stmt_bind_param($stmt, "sssssssss",$f_name, $l_name, $adult,
            $email, $phone, $type_appointment, $msg, $date_appointment, $time_appointment);
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
            echo 'Afspraak is gemaakt';

            mysqli_stmt_close($stmt);
            mysqli_close($dbc);

        } else {

            echo 'Error Occurred<br>';
            echo mysqli_error();

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
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Open+Sans&display=swap" rel="stylesheet">
    <title>Afspraak added</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="loginbox3">
        <h1>Afspraak is Gemaakt!!!</h1>
        <img style='height: 100%; width: 100%; object-fit: contain' src='superpanda.png'class="panda"/>
    </div>
</body>
</html>
