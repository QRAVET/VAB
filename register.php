<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Inscription</title>
    <?php include 'include/header.php'; ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 bg-dgreen fixed-top">
                <span>Orange</span>
            </div>
        </div>
    </div>

    <section id="register">
            <h2>Inscription</h2>
        <form id="formSignin">
            <p>Saisissez votre pseudo : </p><input type="text" name="pseudo"><br>
            <p>Saisissez votre mot de passe : </p><input type="password" name="password"><br><br>
            <p>Confirmer votre mot de passe : </p><input type="password" name="confirm_password"><br><br>
            <input  type="submit" value="inscription">            
        </form>
        <button onclick="location.href='login'">Connexion</button>
    </section>    
</body>
<?php include 'include/script.php'; ?>
</html>