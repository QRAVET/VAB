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
<header class="fixed-top container-fluid">
    <div class="row bg-dpink">
        <span class="col-6">Orange</span>
    </div>
    <div class="row bg-mpink">
        <div class="col-4 align-mid">
            <a href="login.php" class="dblue"><i class="fas fa-angle-left"></i> retour</a>
        </div>
        <div class="col-4">
            <div class="logo-vab-sm"></div>
        </div>
        <div class="col-4">
        </div>
    </div>
</header>
<div class="container-fluid">
    <h1>mon compte</h1>
</div>

</body>
<?php include 'include/script.php'; ?>
<script src="js/map.js"></script> 
</html>