var location_latlng =  [49.1349861 , 8.1425575];
$('#map').initMap({ 
    // Set the center of the map to Paris
    center: location_latlng,
    markers : {
        paris_marker: { position: location_latlng }
    },
    options: {        
        zoom: 15,
        scrollwheel: false
    },
    type: 'roadmap'
});