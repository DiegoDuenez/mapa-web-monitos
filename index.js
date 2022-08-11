
var map;

function initMap() {

    var styledMapType = new google.maps.StyledMapType(

        [

            {
                elementType: 'geometry',
                stylers: [{
                    color: '#ebe3cd'
                }]
            },

            {
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#523735'
                }]
            },

            {
                elementType: 'labels.text.stroke',
                stylers: [{
                    color: '#f5f1e6'
                }]
            },

            {

                featureType: 'administrative',

                elementType: 'geometry.stroke',

                stylers: [{
                    color: '#c9b2a6'
                }]

            },

            {

                featureType: 'administrative.land_parcel',

                elementType: 'geometry.stroke',

                stylers: [{
                    color: '#dcd2be'
                }]

            },

            {

                featureType: 'administrative.land_parcel',

                elementType: 'labels.text.fill',

                stylers: [{
                    color: '#ae9e90'
                }]

            },

            {

                featureType: 'landscape.natural',

                elementType: 'geometry',

                stylers: [{
                    color: '#dfd2ae'
                }]

            },

            {

                featureType: 'poi',

                elementType: 'geometry',

                stylers: [{
                    color: '#dfd2ae'
                }]

            },

            {

                featureType: 'poi',

                elementType: 'labels.text.fill',

                stylers: [{
                    color: '#93817c'
                }]

            },

            {

                featureType: 'poi.park',

                elementType: 'geometry.fill',

                stylers: [{
                    color: '#a5b076'
                }]

            },

            {

                featureType: 'poi.park',

                elementType: 'labels.text.fill',

                stylers: [{
                    color: '#447530'
                }]

            },

            {

                featureType: 'road',

                elementType: 'geometry',

                stylers: [{
                    color: '#f5f1e6'
                }]

            },

            {

                featureType: 'road.arterial',

                elementType: 'geometry',

                stylers: [{
                    color: '#fdfcf8'
                }]

            },

            {

                featureType: 'road.highway',

                elementType: 'geometry',

                stylers: [{
                    color: '#f8c967'
                }]

            },

            {

                featureType: 'road.highway',

                elementType: 'geometry.stroke',

                stylers: [{
                    color: '#e9bc62'
                }]

            },

            {

                featureType: 'road.highway.controlled_access',

                elementType: 'geometry',

                stylers: [{
                    color: '#e98d58'
                }]

            },

            {

                featureType: 'road.highway.controlled_access',

                elementType: 'geometry.stroke',

                stylers: [{
                    color: '#db8555'
                }]

            },

            {

                featureType: 'road.local',

                elementType: 'labels.text.fill',

                stylers: [{
                    color: '#806b63'
                }]

            },

            {

                featureType: 'transit.line',

                elementType: 'geometry',

                stylers: [{
                    color: '#dfd2ae'
                }]

            },

            {

                featureType: 'transit.line',

                elementType: 'labels.text.fill',

                stylers: [{
                    color: '#8f7d77'
                }]

            },

            {

                featureType: 'transit.line',

                elementType: 'labels.text.stroke',

                stylers: [{
                    color: '#ebe3cd'
                }]

            },

            {

                featureType: 'transit.station',

                elementType: 'geometry',

                stylers: [{
                    color: '#dfd2ae'
                }]

            },

            {

                featureType: 'water',

                elementType: 'geometry.fill',

                stylers: [{
                    color: '#b9d3c2'
                }]

            },

            {

                featureType: 'water',

                elementType: 'labels.text.fill',

                stylers: [{
                    color: '#92998d'
                }]

            }

        ], {
            name: 'Styled Map'
        });



    map = new google.maps.Map(document.getElementById('map'), {

        center: {
            lat: 25.565089,
            lng: -103.452291
        },

        zoom: 13

    });

   

    map.mapTypes.set('styled_map', styledMapType);

    map.setMapTypeId('styled_map');

    google.maps.event.addListenerOnce(map, 'idle', function() {

        getDirecciones();

    });
    
}


async function getDirecciones() {
 
    let response = await fetch('http://localhost/mapa-web-ramiro/direcciones.php?ciudad=todas')
        let data = await response.json()
        $.each(data, function (indice, unaCarburacion) {
            var posicionCarburacion = new google.maps.LatLng(unaCarburacion[1], unaCarburacion[2]);
            var icon;
            var iwcarburacion = new google.maps.InfoWindow();
            var nombreEstacion = "Estación " + unaCarburacion[3]

            icon = {
                url: 'img/mono.png',
                scaledSize: new google.maps.Size(50, 50),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(0, 0)
            };

            var marker = new google.maps.Marker({
                position: posicionCarburacion,
                icon: icon,
                clickable: true,
                map: map
            });

            google.maps.event.addListener(marker, 'click', function () {
                var url = "https://www.google.com/maps/dir/Current+location/"+ unaCarburacion[1] + "," + unaCarburacion[2]; 
                iwcarburacion.setContent('<p style="font-size: 1.2rem; font-weight: bold;">' + nombreEstacion + '</p> <br>' + unaCarburacion[0]  + ' <br> <a class="map__link" href="' + url +'" target="blank"> Como llegar</a>');
                marker.info = iwcarburacion;
                marker.info.open(map, marker);
            });

            

        })
}


function zoom(lat, long, zoom = 13){
    var coor = new google.maps.LatLng(lat, long);
    $("#map").fadeIn(100);
    map.setCenter(coor)
    map.setZoom(zoom)
   
}