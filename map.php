<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Carte</title>
        <?php include 'include/header.php'; ?>
        <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
        <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet' />
        <link rel="stylesheet" href="css/loader.css">
    </head>
    <body>
        <div class="loader">
                <div class="blobs">
                <div class="blob-center"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                <feBlend in="SourceGraphic" in2="goo" />
                </filter>
            </defs>
            </svg>
        </div>

        <div id='map'>
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

            <!-- Modal Add -->
            <div class="modal fade" id="trajetModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>
                            <p>Réserver un trajet :</p>
                            <div class="form-group">
                                <select class="input minimal">
                                    <option value="" disabled selected>Mon adresse</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="input minimal">
                                    <option value="" disabled selected>Ma destination</option>
                                </select>
                            </div>
                            <div class="row form-group">
                                <div class="col-8">Heure de départ</div>
                                <div class="col-4"><input class="input" type="text" name="heure" placeholder="12:00"></div>
                            </div>
                            <div class="row confirm">
                                <div class="col-8">Départ dès que possible</div>
                                <div class="col-4">
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-8">Nombre de places</div>
                                <div class="col-4"><input class="input" type="integer" name="place" placeholder="2 places"></div>
                            </div>
                            <div class="align-mid">
                                <button class="sm-text mr-auto mg-auto text-uppercase lg-btn bg-mgreen text-white" data-dismiss="modal">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <a href="favori" class="footer__item" >
                    <i class="fas fa-star"></i>
                    <div class="footer__text">favoris</div>
                </a>
                <a href="account" class="footer__item">
                    <i class="fas fa-user"></i>
                    <div class="footer__text">mon compte</div>
                </a>
                <a href="#" class="footer__item active" data-toggle="modal" data-target="#trajetModal">
                    <i class="fas fa-route"></i>
                    <div class="footer__text">se déplacer</div>
                </a>
                <a href="#" class="footer__item" data-toggle="modal" data-target="#parkingModal">
                    <i class="fas fa-parking" style="font-size:34px;"></i>
                    <div class="footer__text">parking</div>
                </a>
            </footer>

        </div>
    </body>
    <?php include 'include/script.php'; ?>
    <script src="js/map.js"></script> 
</html>