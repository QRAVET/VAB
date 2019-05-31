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
    <div id='map'></div>
</body>
<?php include 'include/script.php'; ?>
<script src="js/map.js"></script> 
</html>