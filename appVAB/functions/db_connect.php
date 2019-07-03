<?php
header('Access-Control-Allow-Origin: *');

$db_host = "db5000114394.hosting-data.io";
$db_name = "dbs108962";
$db_user = "dbu184636";
$db_password = "Lecielestbleu!02";

// Connect to database
$database = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);