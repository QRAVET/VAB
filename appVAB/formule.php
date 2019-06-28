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
            <span>Orange</span>
        </div>

        <div class="row header bg-mpink">
            <a href="account" class="btn-back">
                <div class="arrow arrow--left"></div>
                <span class="dblue">retour</span>
            </a>
            <div class="align-mid">
                <div class="logo-vab-sm"></div>
            </div>
        </div>
    </div>

    <div class="container-fluid screen screen-lg">
        <h1>Ma formule</h1>
        <div class="formule">
            <h2>Formule Mensuelle</h2>
            <span>renouvellement chaque 01/01/2019</span>
        </div>
        <ul>
            <li data-toggle="modal" data-target="#paiementModal">
                <h4 class="rubrique"><i class="fab fa-cc-mastercard"></i>Mastercard **** **** **** 4530</h4>
                <div class="arrow arrow--right"></div>
            </li>
        </ul>
        <div class="align-mid mg-btm">
            <button class="mr-auto sm-text mg-auto text-uppercase lg-btn bg-mgreen text-white">Modifier mon moyen de paiement</button>
        </div>
        <p class="mg-side text-uppercase font-weight-bold">Modifier ma formule</p>
        <div class="form-group">
            <select class="input minimal">
                <option value="" disabled selected>Choisir une formule ...</option>
                <option value="formule annuelle">Formule annuelle - soit 1€25 la journée</option>
                <option value="formule mensuelle">Formule mensuelle - soit 1€45 la journée</option>
                <option value="formule à la carte">Formule à la carte - soit 1€95 la journée</option>
            </select>
        </div>
    </div>

    <!-- Modal Paiement -->
    <div class="modal fade" id="paiementModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <p>Modifier mon moyen de paiement :</p>
                    <div class="col-12 form-group">
                        <input class="input" type="text" name="numero" placeholder="Numéro de carte bancaire">
                    </div>
                    <div class="col-12 form-group">
                        <input class="input" type="text" name="expiation" placeholder="Date d'expiation">
                    </div>
                    <div class="col-12 form-group">
                        <input class="input" type="text" name="cryptogramme" placeholder="Cryptogramme visuel">
                    </div>
                    <div class="align-mid">
                        <button class="sm-text mr-auto mg-auto text-uppercase lg-btn bg-mgreen text-white" data-dismiss="modal">Valider</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
    <?php include 'include/script.php'; ?>
</html>