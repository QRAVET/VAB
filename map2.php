<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon compte</title>
    <?php include 'include/header.php'; ?>
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.53.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="css/loader.css">
</head>
<body>
<div class="fixed-top container-fluid">
    <div class="subheader row bg-dpink">
        <span class="col-6">Orange</span>
    </div>
    <header class="row bg-mpink">
        <div class="col-4 align-mid">
            <a href="login.php" class="dblue"><i class="fas fa-angle-left"></i> retour</a>
        </div>
        <div class="col-4 align-mid">
            <div class="logo-vab-sm"></div>
        </div>
        <div class="col-4">
        </div>
    </header>
</div>
<div class="container box-app">
    <h1>mon compte</h1>
    <span class="">
        <i class="fas fa-user-edit"></i>
        <h2>mes informations</h2>
    </span>
</div>

</body>
<?php include 'include/script.php'; ?>
<script src="js/map.js"></script> 
</html>