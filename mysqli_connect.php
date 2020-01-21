<?php
    DEFINE ('DB_USER', 'afspraakweb');
    DEFINE ('DB_PASSWORD', 'kerskes666');
    DEFINE ('DB_HOST', 'localhost');
    DEFINE ('DB_NAME', 'zienzijn');

    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR die('Could not connect to MySQL: ' . mysqli_connect_error());
?>
