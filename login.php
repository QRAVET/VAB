<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-dgreen fixed-top">
                <span>Orange</span>
            </div>
        </div>
    </div>
    <section id="connexion" style="display:block;">
        <h2>Connexion</h2>
        <form id="formLogin" action="/functions/getUser.php" method="post">
            <div class="col-12">
                <i class="fas fa-user"></i><input type="text" name="pseudo">
            </div>
            <div class="col-12">
                <i class="fas fa-unlock-alt"></i><input type="password" name="password">
            </div>
            <div class="col-12">
                <input type="checkbox"><span>Se souvenir de moi</span> 
                <a href="">Mot de passe oublié ?</a>
            </div>
            
            <input type="submit" value="login">
        </form>
        <div id="msg"></div>
        <br>
        <p>Vous n'avez pas de compte ?</p>    
        <button onclick="location.href='register'">Inscription</button>
    </section>
   
</body>
<?php include 'include/script.php'; ?> 
</html>