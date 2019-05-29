<?php
header('Access-Control-Allow-Origin: *');

$db_host = "localhost";
$db_name = "partiel3";
$db_user = "root";
$db_password = "";

// Connect to database
$database = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);