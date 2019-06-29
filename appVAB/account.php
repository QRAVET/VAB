<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon compte</title>
    <?php include 'include/header.php'; ?>
    <link rel="stylesheet" href="css/loader.css">
</head>
<body>
    <div class="fixed-top">
        <div class="subheader bg-dpink">
            <!-- <span>Orange</span> -->
        </div>

        <div class="row header bg-mpink">
            <!-- <a class="btn-back">
                <div class="arrow arrow--left"></div>
                <span class="dblue">retour</span>
            </a> -->
            <div class="align-mid">
                <div class="logo-vab-sm"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid screen screen-lg">
        <h1>mon compte</h1>
        <ul class="list">
            <li onclick="location.href='information'" class="line">
                <h2 class="rubrique"><i class="fas fa-user-edit"></i>Mes informations</h2>
                <div class="arrow arrow--right"></div>
            </li>
            <li onclick="location.href='formule'" class="line">
                <h2 class="rubrique"><i class="fas fa-wallet"></i>Ma formule</h2>
                <div class="arrow arrow--right"></div>
            </li>
            <li onclick="location.href='favoris'" class="line">
                <h2 class="rubrique"><i class="fas fa-star"></i>Mes favoris</h2>
                <div class="arrow arrow--right"></div>
            </li>
        </ul>
        <div class="align-mid mg-btm">
            <button class="mr-auto mg-auto text-uppercase lg-btn bg-mgreen text-white" onclick="location.href='map'">Réserver un vab</button>
        </div>

        <div class="align-mid">
            <button class="col-5 text-uppercase sm-btn bg-mpink text-white" onclick="location.href='index'">Déconnexion</button>
        </div>
                
    </div>
    </body>
    <?php include 'include/script.php'; ?>
</html>