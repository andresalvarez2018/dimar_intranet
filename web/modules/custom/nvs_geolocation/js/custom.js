jQuery(document).ready(function($){
 
    (function ($, drupalSettings) {
        if($('#map-custom').length){
        var nvs_geolocation_url = drupalSettings.path.nvs_geolocation_url;
        var data_lat = $('#map').data('lat');
        var data_lang = $('#map').data('lang');
        var myLatlng = new google.maps.LatLng(data_lat,data_lang);
        var mapOptions = {
            zoom: 16,
            center: myLatlng,
            styles: [{
                featureType: "landscape",
                stylers: [{
                    saturation: -100
                }, {
                    lightness: 65
                }, {
                    visibility: "on"
                }]
            }, {
                featureType: "poi",
                stylers: [{
                    saturation: -100
                }, {
                    lightness: 51
                }, {
                    visibility: "simplified"
                }]
            }, {
                featureType: "road.highway",
                stylers: [{
                    saturation: -100
                }, {
                    visibility: "simplified"
                }]
            }, {
                featureType: "road.arterial",
                stylers: [{
                    saturation: -100
                }, {
                    lightness: 30
                }, {
                    visibility: "on"
                }]
            }, {
                featureType: "road.local",
                stylers: [{
                    saturation: -100
                }, {
                    lightness: 40
                }, {
                    visibility: "on"
                }]
            }, {
                featureType: "transit",
                stylers: [{
                    saturation: -100
                }, {
                    visibility: "simplified"
                }]
            }, {
                featureType: "administrative.province",
                stylers: [{
                    visibility: "off"
                }] /**/
            }, {
                featureType: "administrative.locality",
                stylers: [{
                    visibility: "off"
                }]
            }, {
                featureType: "administrative.neighborhood",
                stylers: [{
                    visibility: "on"
                }] /**/
            }, {
                featureType: "water",
                elementType: "labels",
                stylers: [{
                    visibility: "on"
                }, {
                    lightness: -25
                }, {
                    saturation: -100
                }]
            }, {
                featureType: "water",
                elementType: "geometry",
                stylers: [{
                    hue: "#ffff00"
                }, {
                    lightness: -25
                }, {
                    saturation: -97
                }]
            }]
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        /////
        var image = new google.maps.MarkerImage(nvs_geolocation_url+'/images/pin.png', null, null, null, new google.maps.Size(50, 71))
        // Place a draggable marker on the map
        var marker1 = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: image,
            draggable:true,
            title:"Drag me!",
            //animation: google.maps.Animation.DROP
        });

        var infoWindow = new google.maps.InfoWindow();
        var latlngbounds = new google.maps.LatLngBounds();
        var geocoder = geocoder = new google.maps.Geocoder();
        //var map = new google.maps.Map(document.getElementById("map"), mapOptions);

        var data = marker1;
        var myLatlng = new google.maps.LatLng(data.lat, data.lng);
        
        (function (marker1, data) {
            google.maps.event.addListener(marker1, "click", function (e) {
                infoWindow.setContent(data.description);
                infoWindow.open(map, marker1);
            });
            google.maps.event.addListener(marker1, "dragend", function (e) {
                var lat, lng, address;
                geocoder.geocode({ 'latLng': marker1.getPosition() }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        lat = marker1.getPosition().lat();
                        lng = marker1.getPosition().lng();
                        address = results[0].formatted_address;
                        alert("Latitude: " + lat + "\nLongitude: " + lng + "\nAddress: " + address);
                    }
                });
            });
        })(marker1, data);
        latlngbounds.extend(marker1.position);

        var bounds = new google.maps.LatLngBounds();
        map.setCenter(latlngbounds.getCenter());
        //map.fitBounds(latlngbounds);
      }
    })(jQuery, drupalSettings);
});