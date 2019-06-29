<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon compte</title>
    <?php include 'include/header.php';?>
    <link rel="stylesheet" href="css/loader.css">
</head>
<body>
    <div class="fixed-top">
        <div class="subheader bg-dpink">
            <!-- <span>Orange</span> -->
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
        <h1>Mes informations</h1>
        <ul class="list">
            <li class="line" data-toggle="modal" data-target="#telephoneModal">
                <h2 class="rubrique"><i class="fas fa-mobile-alt" style="font-size:35px;"></i>Numéro de téléphone</h2>
                <div class="arrow arrow--right"></div>
            </li>
            <li class="line" data-toggle="modal" data-target="#adresseModal">
                <h2 class="rubrique"><i class="fas fa-map-marker-alt" style="font-size:31px;"></i>Adresse</h2>
                <div class="arrow arrow--right"></div>
            </li>
            <li class="line" data-toggle="modal" data-target="#emailModal">
                <h2 class="rubrique"><i class="fas fa-envelope-open"></i>Email</h2>
                <div class="arrow arrow--right"></div>
            </li>
            <li class="line" data-toggle="modal" data-target="#passwordModal">
                <h2 class="rubrique"><i class="fas fa-lock"></i>Mot de passe</h2>
                <div class="arrow arrow--right"></div>
            </li>
        </ul>
        <div class="confirm">
            <span>Je souhaite recevoir un e-mail de confirmation pour chaque transaction.
            </span>
            <div>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
    </div>

    <!-- Modal Téléphone -->
    <div class="modal fade" id="telephoneModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <p>Modifier mon numéro de téléphone :</p>
                    <div class="col-12 form-group">
                        <input class="input" type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" name="telephone" placeholder="Votre numéro de téléphone">
                    </div>
                    <div class="align-mid">
                        <button class="sm-text mr-auto mg-auto text-uppercase lg-btn bg-mgreen text-white" data-dismiss="modal">Valider</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Adresse -->
    <div class="modal fade" id="adresseModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <p>Modifier mon adresse :</p>
                    <div class="col-12 form-group">
                        <input class="input" type="text" name="adresse" placeholder="Votre adresse">
                    </div>
                    <div class="col-12 form-group">
                        <input class="input" type="text" name="code-postal" placeholder="Votre code postal">
                    </div>
                    <div class="col-12 form-group">
                        <input class="input" type="text" name="ville" placeholder="Votre ville">
                    </div>
                    <div class="align-mid">
                        <button class="sm-text mr-auto mg-auto text-uppercase lg-btn bg-mgreen text-white" data-dismiss="modal">Valider</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Email -->
    <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <p>Modifier mon email :</p>
                    <div class="col-12 form-group">
                        <input class="input" type="email" name="email" placeholder="Votre email">
                    </div>
                    <div class="align-mid">
                        <button class="sm-text mr-auto mg-auto text-uppercase lg-btn bg-mgreen text-white" data-dismiss="modal">Valider</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Mot de passe -->
    <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <p>Modifier mon mot de passe:</p>
                    <div class="col-12 form-group">
                        <input class="input" type="password" name="old-password" placeholder="Saisir le mot de passe actuel">
                    </div>
                    <div class="col-12 form-group">
                        <input class="input" type="password" name="password" placeholder="Saisir le nouveau mot de passe">
                    </div>
                    <div class="col-12 form-group">
                        <input class="input" type="password" name="confirm-password" placeholder="Confirmer le mot de passe">
                    </div>
                    <div class="align-mid">
                        <button class="sm-text mr-auto mg-auto text-uppercase lg-btn bg-mgreen text-white" data-dismiss="modal">Valider</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
    <?php include 'include/script.php';?>
</html>