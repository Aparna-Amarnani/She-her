var map;
        var x=document.getElementById("print");
        var pyrmont = {
                lat: 23.8701334,
                lng: 90.2713944
            };
        function initMap() {
            // Create the map.
           
       
            if (navigator.geolocation) {
                try {
                    navigator.geolocation.getCurrentPosition(gps);
                } catch (err) {
       
                }
            }
        }
            function gps(position)
            {
           
            pyrmont = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };
                        //x.innerHTML=pyrmont.lat;
            map = new google.maps.Map(document.getElementById('map'), {
                center: pyrmont,
                zoom: 20
            });
       
            // Create the places service.
            var service = new google.maps.places.PlacesService(map);
       
            // Perform a nearby search.
            service.nearbySearch({
                    location: pyrmont,
                    radius: 2500,
                    //rankby: disatance,
                    type: 'pharmacy'
                },
                function(results, status, pagination) {
                    if (status !== 'OK') return;
       
                    createMarkers(results);
                    getNextPage = pagination.hasNextPage && function() {
                        pagination.nextPage();
                    };
                });
            }
       
        function createMarkers(places) {
            var bounds = new google.maps.LatLngBounds();
            for (var i = 0, place; place = places[i]; i++) {
                var image = {
                    url: places[0].icon,
                    size: new google.maps.Size(100, 100),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };
       
                var marker = new google.maps.Marker({
                    map: map,
                    icon: image,
                    title: place.name,
                    position: place.geometry.location
                });
                bounds.extend(place.geometry.location);
            }
            map.fitBounds(bounds);
        }