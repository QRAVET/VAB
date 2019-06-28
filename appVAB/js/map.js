// Config
mapboxgl.accessToken = 'pk.eyJ1IjoicXVlbnRpbnJhdmV0IiwiYSI6ImNqdWxmYmY5bjBkejg0M284eG45b2d4cXAifQ.uZL1BgJDC2O0fBSyP74fqw';

var marker = [
    {
        name: "station 1",
        position: [-0.574153, 44.873464],
        id: 3,
        nbrPlace: 12
    },
    {
        name: "station 2",
        position: [-0.621494, 44.858555],
        id: 3,
        nbrPlace: 12
    },
    {
        name: "station 3",
        position: [-0.620462, 44.816451],
        id: 4,
        nbrPlace: 32
    },
    {
        name: "station 4",
        position: [-0.562572, 44.80803],
        id: 5,
        nbrPlace: 1
    },
    {
        name: "station 5",
        position: [-0.527192, 44.833184],
        id: 6,
        nbrPlace: 28
    },
    {
        name: "station 6",
        position: [-0.525462, 44.858883],
        id: 1,
        nbrPlace: 8
    },
    {
        name: "station 7",
        position: [-0.577832, 44.840853],
        id: 7,
        nbrPlace: 63
    },
];

// Initialiser la map
var map = new mapboxgl.Map({
    container: 'map', // container id
    style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
    center: [-0.5800364, 44.841225], // starting position [lng, lat]
    zoom: 11.5 // starting zoom
});

map.on('load', function () {

    map.addLayer({
        'id': 'zone1',
        'type': 'fill',
        'source': {
            'type': 'geojson',
            'data': {
                'type': 'Feature',
                'geometry': {
                    'type': 'Polygon',
                    'coordinates': [[[-0.592422, 44.855141],
                    [-0.577442, 44.855121],
                    [-0.565447, 44.851228],
                    [-0.546221, 44.861023],
                    [-0.54085, 44.868847],
                    [-0.537122, 44.879819],
                    [-0.556654, 44.883562],
                    [-0.56991, 44.886935],
                    [-0.611261, 44.88995]
                    ]]
                }
            }
        },
        'layout': {},
        'paint': {
            'fill-color': '#5df2d6',
            'fill-opacity': 0.8
        }
    });

    map.addLayer({
        'id': 'zone2',
        'type': 'fill',
        'source': {
            'type': 'geojson',
            'data': {
                'type': 'Feature',
                'geometry': {
                    'type': 'Polygon',
                    'coordinates': [[[-0.611261, 44.88995],
                    [-0.61542, 44.889899],
                    [-0.618199, 44.889056],
                    [-0.620313, 44.887513],
                    [-0.622169, 44.88428],
                    [-0.623574, 44.882277],
                    [-0.626332, 44.880399],
                    [-0.636616, 44.874514],
                    [-0.646867, 44.868591],
                    [-0.65735, 44.862226],
                    [-0.661116, 44.858812],
                    [-0.664237, 44.854852],
                    [-0.670617, 44.845974],
                    [-0.67346, 44.842087],
                    [-0.599528, 44.843279],
                    [-0.597634, 44.848212],
                    [-0.592422, 44.855141]
                    ]]
                }
            }
        },
        'layout': {},
        'paint': {
            'fill-color': '#2fa18b',
            'fill-opacity': 0.8
        }
    });

    map.addLayer({
        'id': 'zone3',
        'type': 'fill',
        'source': {
            'type': 'geojson',
            'data': {
                'type': 'Feature',
                'geometry': {
                    'type': 'Polygon',
                    'coordinates': [[[-0.67346, 44.842087],
                    [-0.675643, 44.838707],
                    [-0.676609, 44.835101],
                    [-0.675916, 44.83025],
                    [-0.672418, 44.813636],
                    [-0.671562, 44.811094],
                    [-0.670081, 44.809252],
                    [-0.667356, 44.807197],
                    [-0.658795, 44.802097],
                    [-0.654696, 44.799493],
                    [-0.650519, 44.794622],
                    [-0.646936, 44.790587],
                    [-0.644233, 44.789019],
                    [-0.641674, 44.788177],
                    [-0.638879, 44.787747],
                    [-0.635977, 44.787789],
                    [-0.626613, 44.788643],
                    [-0.612634, 44.78993],
                    [-0.608925, 44.790044],
                    [-0.60595, 44.78958],
                    [-0.582941, 44.821301],
                    [-0.598414, 44.831433],
                    [-0.599528, 44.843279]
                    ]]
                }
            }
        },
        'layout': {},
        'paint': {
            'fill-color': '#00352b',
            'fill-opacity': 0.8
        }
    });

    map.addLayer({
        'id': 'zone4',
        'type': 'fill',
        'source': {
            'type': 'geojson',
            'data': {
                'type': 'Feature',
                'geometry': {
                    'type': 'Polygon',
                    'coordinates': [[[-0.60595, 44.78958],
                    [-0.60065, 44.788377],
                    [-0.587668, 44.783235],
                    [-0.575823, 44.780036],
                    [-0.56235, 44.777583],
                    [-0.55808, 44.77775],
                    [-0.546386, 44.780416],
                    [-0.543416, 44.782045],
                    [-0.541852, 44.784321],
                    [-0.539899, 44.793194],
                    [-0.538032, 44.796833],
                    [-0.533333, 44.802482],
                    [-0.527561, 44.807566],
                    [-0.536897, 44.822475],
                    [-0.553902, 44.832557],
                    [-0.582941, 44.821301]
                    ]]
                }
            }
        },
        'layout': {},
        'paint': {
            'fill-color': '#5df2d6',
            'fill-opacity': 0.8
        }
    });

    map.addLayer({
        'id': 'zone5',
        'type': 'fill',
        'source': {
            'type': 'geojson',
            'data': {
                'type': 'Feature',
                'geometry': {
                    'type': 'Polygon',
                    'coordinates': [[[-0.527561, 44.807566],
                    [-0.536897, 44.822475],
                    [-0.553902, 44.832557],
                    [-0.565519, 44.840914],
                    [-0.567689, 44.846878],
                    [-0.565447, 44.851228],
                    [-0.529411, 44.844015],
                    [-0.50159, 44.843178],
                    [-0.501515, 44.839671],
                    [-0.500861, 44.837774],
                    [-0.500013, 44.835952],
                    [-0.499947, 44.834421],
                    [-0.500816, 44.8307],
                    [-0.502007, 44.829825],
                    [-0.50397, 44.828387],
                    [-0.50765, 44.82698],
                    [-0.509957, 44.82548],
                    [-0.511748, 44.823732],
                    [-0.515125, 44.821989],
                    [-0.51844, 44.820779],
                    [-0.520168, 44.819168],
                    [-0.520844, 44.817446],
                    [-0.520661, 44.815399],
                    [-0.520886, 44.813328],
                    [-0.521906, 44.811616],
                    [-0.523397, 44.810314]
                    ]]
                }
            }
        },
        'layout': {},
        'paint': {
            'fill-color': '#2fa18b',
            'fill-opacity': 0.8
        }
    });

    map.addLayer({
        'id': 'zone6',
        'type': 'fill',
        'source': {
            'type': 'geojson',
            'data': {
                'type': 'Feature',
                'geometry': {
                    'type': 'Polygon',
                    'coordinates': [[[-0.50159, 44.843178],
                    [-0.529411, 44.844015],
                    [-0.565447, 44.851228],
                    [-0.546221, 44.861023],
                    [-0.54085, 44.868847],
                    [-0.537122, 44.879819],
                    [-0.531258, 44.878765],
                    [-0.527986, 44.878909],
                    [-0.520443, 44.883433],
                    [-0.517814, 44.884414],
                    [-0.514134, 44.884665],
                    [-0.514134, 44.884665],
                    [-0.512114, 44.884035],
                    [-0.511345, 44.88246],
                    [-0.50539, 44.870805],
                    [-0.504512, 44.86818],
                    [-0.503847, 44.863024],
                    [-0.504855, 44.857305],
                    [-0.505091, 44.853426],
                    [-0.501986, 44.845121],
                    [-0.50159, 44.843178]
                    ]]
                }
            }
        },
        'layout': {},
        'paint': {
            'fill-color': '#00352b',
            'fill-opacity': 0.8
        }
    });

    map.addLayer({
        'id': 'zone7',
        'type': 'fill',
        'source': {
            'type': 'geojson',
            'data': {
                'type': 'Feature',
                'geometry': {
                    'type': 'Polygon',
                    'coordinates': [[[-0.565447, 44.851228],
                    [-0.577442, 44.855121],
                    [-0.592422, 44.855141],
                    [-0.597634, 44.848212],
                    [-0.599528, 44.843279],
                    [-0.598414, 44.831433],
                    [-0.582941, 44.821301],
                    [-0.553902, 44.832557],
                    [-0.565519, 44.840914],
                    [-0.567689, 44.846878],
                    ]]
                }
            }
        },
        'layout': {},
        'paint': {
            'fill-color': '#291e3a',
            'fill-opacity': 0.8
        }
    });
});

function initMap() {
    var mapCanvas = document.getElementsByClassName('mapboxgl-canvas')[0];
    mapCanvas.style.height = '100vh';
    mapCanvas.style.width = '100vw';
    map.resize();

    createMarkers(map, marker);
}

function createMarkers(map, markersObject) {
    markersObject.forEach(function (marker) {
        var markerHTML = document.createElement("div");
        markerHTML.style.display = "block";
        markerHTML.className = "marker";
        markerHTML.style.backgroundSize = "contain";
        markerHTML.style.background = "no-repeat";
        markerHTML.style.backgroundImage = "url(./img/map/pointeur-map.svg)";
        markerHTML.style.width = "70px";
        markerHTML.style.height = "70px";

        var popup = new mapboxgl.Popup({ offset: 25 })
            .setHTML('<form id="station-' + marker.id + '" action="" method="post"> ' +
                '<h2 id="stationName">' + marker.name + '</h2> ' +
                '<p>nombre de place disponible : <span id="stationNbrPlace-' + marker.id + '">' + marker.nbrPlace + '</span></p>' +
                '<button type="button" onclick= "decrement( ' + marker.id + ')" class="btn btn-success">Réserver</button>' +
                '</form>');

        new mapboxgl.Marker(markerHTML)
            .setLngLat(marker.position)
            .addTo(map)
            .setPopup(popup);


    })
}
setTimeout(function () {
    $(".loader").fadeOut("slow", function () {
        $("#map").fadeTo("slow", 1, function () {
            // Animation complete.
        });
    });
}, 4500);
initMap();