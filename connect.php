<?php

$dbhost="localhost";
$dbuser="root";
$dbpassword="tiger";

$dbc=mysqli_connect($dbhost,$dbuser,$dbpassword,"voting") or die ("error connecting to database");

$query="select *from voter;"
?>
