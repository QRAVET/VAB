<?php 
// var_dump($_POST);
// INSCRIPTION
if(isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['confirm_password'])){
    if($_POST['password'] === $_POST['confirm_password']){
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        var_dump($password);
    }
    else{
        echo "pas ok";
    }
}

// CONNEXION
$hash_key = '$2y$10$kh0ICQdKVmabNYSyUuaUl.TzTN.Tg.sSRJfMKktk.7q2rmG8IW8ly';
if($_POST['login']){
    if( password_verify($_POST['password'], $hash_key) ){
        echo "JE PEUX ME CONNECTER";
    }
}