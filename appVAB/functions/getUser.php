<?php

require 'db_connect.php';
// Prepare request SELECT
$request = $database->prepare("SELECT * FROM users WHERE pseudo = :pseudo AND password = :password");
// bindParam
$request->bindParam(":pseudo", $_POST["pseudo"]);
$request->bindParam(":password", $_POST["password"]);
// Execute
$request->execute();

$user = $request->fetch(PDO::FETCH_ASSOC);

if($user){
    echo json_encode($user);
}else{
    echo json_encode([]);
}