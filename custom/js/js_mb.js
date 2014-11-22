var location =  [49.13354 , 8.14299];
$('#map').initMap({ 
    // Set the center of the map to Paris
    center: location,
    markers : {
        paris_marker: { position: location }
    },
    options: {        
        zoom: 15,
        scrollwheel: false
    },
    type: 'roadmap'
});