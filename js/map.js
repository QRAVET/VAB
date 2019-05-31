// Config
mapboxgl.accessToken = 'pk.eyJ1IjoicXVlbnRpbnJhdmV0IiwiYSI6ImNqdWxmYmY5bjBkejg0M284eG45b2d4cXAifQ.uZL1BgJDC2O0fBSyP74fqw';

var marker = [
    {
        name: "station 1",
        position: [-0.525462, 44.858883],
        id: 1,
        nbrPlace : 8
    },
    {
        name: "station 2",
        position: [-0.574153, 44.873464],
        id: 3,
        nbrPlace : 12
    },
    {
        name: "station 3",
        position: [-0.635669, 44.851825],
        id: 3,
        nbrPlace : 12
    },
    {
        name: "station 4",
        position: [-0.620462, 44.816451],
        id: 4,
        nbrPlace : 32
    },
    {
        name: "station 5",
        position: [-0.571281, 44.807866],
        id: 5,
        nbrPlace : 1
    },
    {
        name: "station 6",
        position: [-0.527192, 44.833184],
        id: 6,
        nbrPlace : 28
    },
    {
        name: "station 7",
        position: [-0.577832, 44.840853],
        id: 7,
        nbrPlace : 63
    },
];

// Initialiser la map
var map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
    center: [-0.5800364, 44.841225], // starting position [lng, lat]
    zoom: 11.5 // starting zoom
});

function initMap(){
    
    //possibilité d'initialiser la map ici

    // document.getElementById("map").style.display = "block";

    var mapCanvas = document.getElementsByClassName('mapboxgl-canvas')[0];
    mapCanvas.style.height = '100vh';
    mapCanvas.style.width = '100vw';
    map.resize();

    createMarkers(map, marker);
}

function createMarkers(map, markersObject){
    markersObject.forEach(function(marker){
        var markerHTML = document.createElement("div");
        markerHTML.style.display = "block";
        markerHTML.className = "marker";
        markerHTML.style.backgroundSize = "contain";
        markerHTML.style.background = "no-repeat";
        markerHTML.style.backgroundImage = "url(./img/map/pointeur-map.svg)";
        markerHTML.style.width = "70px";
        markerHTML.style.height = "70px";

        var popup = new mapboxgl.Popup({ offset: 25})
        .setHTML('<form id="station-'+ marker.id +'" action="" method="post"> ' +
                   '<h2 id="stationName">'+ marker.name +'</h2> ' +
                   '<p>nombre de place disponible : <span id="stationNbrPlace-'+ marker.id +'">'+ marker.nbrPlace +'</span></p>' +
                   '<button type="button" onclick= "decrement( '+ marker.id + ')" class="btn btn-success">Réserver</button>' +
                 '</form>');

        new mapboxgl.Marker(markerHTML)
            .setLngLat(marker.position)
            .addTo(map)
            .setPopup(popup);

        
    })
}
setTimeout(function(){
$( ".loader" ).fadeOut( "slow", function() {
    $("#map").fadeTo( "slow" , 1, function() {
        // Animation complete.
    });
});}, 4500);
initMap();