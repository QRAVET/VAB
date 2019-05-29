<?php

require 'db_connect.php';

// ETAPE 2 : Prepare request 

$request = $database->prepare("INSERT INTO users (pseudo, password) VALUES (:pseudo, :password)");

// ETAPE 3 : bindParam (remplir les variables)

$request->bindParam(":pseudo", $_POST["pseudo"]);
$request->bindParam(":password", $_POST["password"]);

// ETAPE 4 : execute request
$request->execute();

// Je renvois une donnée
$tab = json_encode( ['success' => true] );
echo $tab;

