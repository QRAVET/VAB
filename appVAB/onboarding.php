<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Mon compte</title>
        <?php include 'include/header.php';?>
    </head>

    <body>
        <div class="subheader bg-dgreen fixed-top">
                <!-- <span>Orange</span> -->
        </div>

        <div id="onboarding" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#onboarding" data-slide-to="0" class="active"></li>
                <li data-target="#onboarding" data-slide-to="1"></li>
                <li data-target="#onboarding" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item bg-yellow-vab active">
                    <p>Réserver mon trajet devient <span class="font-weight-bold">simple et rapide</span> grâce à l’application VAB</p>
                    <video controls width="100%">

                        <source src="img/video-tuto-1080.mp4"
                            type="video/mp4">

                        Sorry, your browser doesn't support embedded videos.
                    </video>
                    <div class="align-mid carousel-btn">
                        <button class="col-5 text-uppercase sm-btn bg-mpink text-white" onclick="location.href='login'">Passer</button>
                    </div>
                </div>
                <div class="carousel-item bg-yellow-vab">
                    <p>Un accès <span class="font-weight-bold">personnalisé</span> pour mes trajets préférés</p>
                    <img src="img/mockup-favoris.png" alt="Second slide">
                    <div class="align-mid carousel-btn">
                        <button class="col-5 text-uppercase sm-btn bg-mpink text-white" onclick="location.href='login'">Passer</button>
                    </div>
                </div>
                <div class="carousel-item bg-yellow-vab">
                    <p>Une solution de <span class="font-weight-bold">gardiennage</span> pour mon véhicule privé</p>
                    <img src="img/mockup-parking.png" alt="Third slide">
                    <div class="align-mid carousel-btn">
                        <button class="mr-auto sm-text mg-auto text-uppercase lg-btn bg-mgreen text-white" onclick="location.href='login'">Commencer</button>
                    </div>    
                </div>
            </div>
            <a class="carousel-control-prev" href="#onboarding" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#onboarding" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </body>
    <!-- <script src="js/onboarding.js"></script> -->
    <?php include 'include/script.php'; ?>
    <script>

    </script>
</html>