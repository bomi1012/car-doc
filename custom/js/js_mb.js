var paris_latlng =  [ 49.1349861 , 8.1425575];
$('#map').initMap({ 
    // Set the center of the map to Paris
    center: paris_latlng,
    markers : {
        paris_marker: { position: paris_latlng }
    },
    options: {        
        zoom: 15,
        scrollwheel: false
    },
    type: 'roadmap',
});