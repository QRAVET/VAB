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
        <h1>Mes favoris</h1>
        <ul class="list">
            <li class="line" data-toggle="modal" data-target="#favoriModal">
                <h2 class="rubrique"><img src="img/fav-marker.svg">Adresse n°1</h2>
                <div class="arrow arrow--right"></div>
            </li>
            <li class="line" data-toggle="modal" data-target="#favoriModal">
                <h2 class="rubrique"><img src="img/fav-marker.svg">Adresse n°2</h2>
                <div class="arrow arrow--right"></div>
            </li>
            <li class="line" data-toggle="modal" data-target="#favoriModal">
                <h2 class="rubrique"><img src="img/fav-marker.svg">Adresse n°3</h2>
                <div class="arrow arrow--right"></div>
            </li>
            <li class="line" data-toggle="modal" data-target="#favoriModal">
                <h2 class="rubrique"><img src="img/fav-marker.svg">Adresse n°4</h2>
                <div class="arrow arrow--right"></div>
            </li>
        </ul>
        <div class="align-mid mg-btm">
            <button id="btn-add" class="sm-text mr-auto mg-auto text-uppercase lg-btn bg-mgreen text-white" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i>Ajouter un favoris</button>
        </div>
    </div>

    <!-- Modal Favori -->
    <div class="modal fade" id="favoriModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <p>Mes favoris</p>
                    <div class="col-12 form-group">
                        <textarea class="input" type="text" name="favori">1 rue du 19 mars 1962
33130 Bègles</textarea>
                    </div>
                    <div class="align-mid form-flex">
                        <button class="sm-text mg-auto text-uppercase lg-btn bg-mpink text-white" data-dismiss="modal">Supprimer</button>
                        <button class="sm-text mg-auto text-uppercase lg-btn bg-mgreen text-white" data-dismiss="modal">Réserver</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fas fa-times"></i>
                    </button>
                    <p>Ajout d'un favoris</p>
                    <div class="col-12 form-group">
                        <textarea class="input" type="text" name="add" placeholder="Saisir l'adresse favorite ..."></textarea>
                    </div>
                    <div class="align-mid">
                        <button class="sm-text mr-auto mg-auto text-uppercase lg-btn bg-mgreen text-white" data-dismiss="modal">Enregistrer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </body>
    <?php include 'include/script.php'; ?>

</html>