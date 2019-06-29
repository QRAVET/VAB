<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Inscription</title>
        <?php include 'include/header.php';?>
    </head>
    <body>

        <div class="subheader bg-dgreen fixed-top">
            <!-- <span>Orange</span> -->
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
                        <input class="inp-cbx" id="cbx" type="checkbox" style="display: none;"/>
                        <label class="cbx flex-center" for="cbx">
                            <span>
                                <svg width="12px" height="10px" viewbox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg>
                            </span>
                            <span>Je souhaite m’abonner à la newsletter mensuelle.</span>
                        </label>
                    </div>
                    <div class="align-mid">
                        <button type="submit" class="mr-auto mg-auto text-uppercase lg-btn bg-lgreen dblue">Inscription</button>
                    </div>
                </form>
                <div class="align-mid">
                    <button class="col-5 text-uppercase sm-btn bg-mpink text-white" onclick="location.href='login'">Retour</button>
                </div>
            </section>
        </div>
    </body>
    <?php include 'include/script.php';?>
</html>