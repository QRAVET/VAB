<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Inscription</title>
        <?php include 'include/header.php';?>
    </head>
    <body>

        <div class="subheader bg-dgreen fixed-top">
            <span>Orange</span>
        </div>

        <div class="container-fluid screen">
            <div class="logo-vab-md"></div>

            <section id="register">
                <form id="formSignin">
                    <div class="col-12 form-group">
                        <input class="input" type="text" name="pseudo" placeholder="Choisir mon identifiant">
                    </div>
                    <div class="col-12 form-group">
                        <input class="input" type="email" name="email" placeholder="Saisir mon adresses email">
                    </div>
                    <div class="col-12 form-group">
                        <input class="input" type="password" name="password" placeholder="Choisir mon mot de passe">
                    </div>
                    <div class="col-12 form-group">
                        <input class="input" type="password" name="confirm_password" placeholder="Confirmer mon mot de passe">
                    </div>
                    <div>
                        <input type="checkbox"><span class="sub-text">Je souhaite m’abonner à la newsletter mensuelle.</span>
                    </div>
                    <div class="align-mid">
                        <button type="submit" value="login" class="mr-auto mg-auto text-uppercase lg-btn bg-lgreen dblue">Inscription</button>
                    </div>
                </form>
                <div class="align-mid">
                    <button class="col-5 text-uppercase sm-btn bg-mpink text-white" onclick="location.href='login'">Retour</button>
                </div>
            </section>
        </div>

        <?php include 'include/script.php';?>
    </body>
</html>