<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Connexion</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <div class="subheader bg-dgreen fixed-top">
            <!-- <span>Orange</span> -->
        </div>

        <div class="container-fluid screen">

            <div class="logo-vab-md"></div>

            <div class="fb">
                <div class="fb-login-button" data-width="345px" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="false"></div>
            </div>

            <div class="separator">ou</div>

            <section id="connexion">
                <form id="formLogin" action="/functions/getUser.php" method="post">
                    <div class="col-12 form-group">
                        <i class="fas fa-user"></i>
                        <input class="input" type="text" name="pseudo" placeholder="Identifiant">
                    </div>
                    <div class="col-12 form-group">
                        <i class="fas fa-unlock-alt"></i>
                        <input class="input" type="password" name="password" placeholder="Mot de passe">
                    </div>
                    <div class="col-12 form-flex">
                        <div>
                            <input class="inp-cbx" id="cbx" type="checkbox" style="display: none;"/>
                            <label class="cbx flex-center" for="cbx">
                                <span>
                                    <svg width="12px" height="10px" viewbox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></svg>
                                </span>
                                <span>Se souvenir de moi</span>
                            </label>
                        </div>
                        <a class="sub-text" href="#">Mot de passe oublié ?</a>
                    </div>
                    <div class="align-mid">
                        <button type="submit" value="login" class="mr-auto mg-auto text-uppercase lg-btn bg-mgreen dblue text-white" onclick="location.href='map'">Connexion</button>
                    </div>
                </form>

                <p class="sub-text no-account text-center">Vous n'avez pas de compte ?</p>
                <div class="align-mid">
                    <button type="button" class="col-5 mg-auto text-uppercase sm-btn bg-lgreen dblue" onclick="location.href='register'">Inscription</button>
                </div>
            </section>
        </div>
    </body>
    <?php include 'include/script.php';?>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.3"></script>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId            : '2378009042262025',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v3.3'
            });
        };
    </script>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
</html>