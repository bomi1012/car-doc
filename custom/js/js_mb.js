/**
 * @description Documentation: http://wakooka.github.io/initmapjs/documentation.html
 */
var location_latlng = [49.13354 , 8.14299];
var address = "Große Ahlmühle 11, 76865 Rohrbach";
 
$('#map').initMap({     
    // Set the center of the map to Paris
    center: location_latlng,
    markers : {
        paris_marker: { 
            position: location_latlng ,
            info_window : { 
                content : address,
                showOn: 'mouseover',
                hideOn: 'mouseout',
                maxWidth: 150,
                zIndex: 2
            } }
    },
    options: {        
        zoom: 15,
        scrollwheel: false
    },
    type: 'roadmap'
});