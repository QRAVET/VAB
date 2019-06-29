<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Carte</title>
        <?php include 'include/header.php';?>
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

            <!-- Modal Add -->
            <div class="modal fade" id="trajetModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body container-fluid">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>
                            <p>Réserver un trajet :</p>
                            <div class="form-group">
                                <select class="input minimal">
                                    <option value="" disabled selected>Mon adresse</option>
                                    <option value="Adresse n°1">Adresse n°1</option>
                                    <option value="Adresse n°2">Adresse n°2</option>
                                    <option value="Adresse n°3">Adresse n°3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="input minimal">
                                    <option value="" disabled selected>Ma destination</option>
                                    <option value="Adresse n°1">Adresse n°1</option>
                                    <option value="Adresse n°2">Adresse n°2</option>
                                    <option value="Adresse n°3">Adresse n°3</option>
                                </select>
                            </div>
                            <div class="flex-center form-row">
                                <div class="col-8">Heure de départ</div>
                                <div class="col-4 form-group"><input class="input" type="text" name="heure" placeholder="12:00"></div>
                            </div>
                            <div class="confirm form-row">
                                <div class="col-8">Départ dès que possible</div>
                                <div class="col-4 flex-end">
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="flex-center form-row">
                                <div class="col-8">Nombre de places</div>
                                <div class="col-4 form-group"><input class="input" type="integer" name="place" placeholder="2 places"></div>
                            </div>
                            <div class="align-mid">
                                <button id="book" class="sm-text mr-auto mg-auto text-uppercase lg-btn bg-mgreen text-white">Réserver</button>
                            </div>
                            <div id="booking">
                                <div class="formule"><h2>Réservation prise en compte</h2></div>
                                <div class="qrcode">
                                    <img src="img/qr-code.svg" height="100px" width="100px">
                                    <span>Merci de conserver ce QR code<br>il sera à présenter lors de l'embarquement</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Parking -->
            <div class="modal fade" id="parkingModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body container-fluid">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="fas fa-times"></i>
                            </button>
                            <p>Réserver un parking :</p>
                            <h3>Parking la gardette</h3>
                            <div class="flex-center form-row">
                                <div class="col-8">Places disponibles :</div>
                                <div class="col-4 form-group"><input class="input" type="text" name="place" placeholder="25 places"></div>
                            </div>

                            <h3>Arrivée</h3>
                            <div class="flex-center form-row">
                                <div class="col-8">Date :</div>
                                <div class="col-4 form-group"><input class="input" type="text" name="arrivee_date" placeholder="01/05/30"></div>
                            </div>
                            <div class="flex-center form-row">
                                <div class="col-8">Heure :</div>
                                <div class="col-4 form-group"><input class="input" type="text" name="arrivee_heure" placeholder="12:00"></div>
                            </div>

                            <h3>Départ</h3>
                            <div class="flex-center form-row">
                                <div class="col-8">Date :</div>
                                <div class="col-4 form-group"><input class="input" type="text" name="depart_date" placeholder="01/05/30"></div>
                            </div>
                            <div class="flex-center form-row">
                                <div class="col-8">Heure :</div>
                                <div class="col-4 form-group"><input class="input" type="text" name="depart_heure" placeholder="12:00"></div>
                            </div>

                            <div class="align-mid">
                                <button class="sm-text mr-auto mg-auto text-uppercase lg-btn bg-mgreen text-white" data-dismiss="modal">Réserver</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <a href="favoris" class="footer__item" >
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
    <?php include 'include/script.php';?>
    <script src="js/map.js"></script>
</html>