<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <?php include 'include/header.php'; ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="subheader col-12 bg-dpink fixed-top">
                <span>Orange</span>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dgreen screen">
        <div class="row">
            <div class="col-12 d-flex flex-column">
                <div class="logo-vab-xl"></div>
                <p class="text-uppercase text-center font-weight-bolder">véhicule autonome bordelais</p>
                <p class="text-center text-white">un moyen de transport <b>éco-responsable, rapide et durable</b> pour la métropole bordelaise</p>
                <button type="button" class="text-uppercase lg-btn bg-white mpink" onclick="location.href='onboarding'">faire un tour rapide</button>
                <div class="col">
                    <div class="row">
                        <button type="button" class="col-5 mr-auto text-uppercase sm-btn bg-lgreen dblue" onclick="location.href='register'">inscription</button>
                        <button type="button" class="col-5 text-uppercase sm-btn bg-mgreen text-white" onclick="location.href='login'">connexion</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'include/script.php'; ?>
</body>
</html>