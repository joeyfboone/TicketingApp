<?php

DEFINE ('DB_USER', DB_USERNAME);
DEFINE ('DB_PASSWORD', DB_PASSWORD);
DEFINE ('DB_HOST', DB_HOST);
DEFINE ('DB_NAME', DB_DATABASE);

$dbc = @mysqli_connect(DB_HOSE, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL ' .
    mysqli_connect_error());
?>
