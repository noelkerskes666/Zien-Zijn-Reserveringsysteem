
<?php

$data_missing = array();

if (empty($_GET['id'])) $data_missing[] = 'ID';
else $id = trim($_GET['id']);


if (empty($data_missing)){
    require_once('mysqli_connect.php');

    $query = "DELETE FROM afspraken WHERE id = ?; ";

    $stmt = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);

    if ( !$stmt ) {
        die('mysqli error: ' . mysqli_error($dbc));
    }

    mysqli_stmt_execute($stmt);

    $affected_rows = mysqli_stmt_affected_rows($stmt);

    if($affected_rows == 1) {
        echo 'Row succesvol verwijderd!';
    } else {
        echo 'Row kon niet verwijderd worden!';
    }

} else {

    echo 'You need to enter the following data<br>';

    foreach ($data_missing as $missing) {

        echo "$missing<br>";

    }

}
?>