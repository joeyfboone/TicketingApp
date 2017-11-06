<?php
require_once('mysqli_connect.php');

$query = "select status from ticket_barcode where id ={barcode_id}";

$response = @mysqli_query($dbc, $query);
?>
