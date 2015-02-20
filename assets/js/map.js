var map;
jQuery(document).ready(function(){

    map = new GMaps({
        div: '#map',
        lat: 12.925804,
        lng: 77.666856,
    });
    map.addMarker({
        lat: 12.925804,
        lng: 77.666856,
        title: 'Address',      
        infoWindow: {
            content: '<h5 class="title">College Green</h5><p><span class="region">Address line goes here</span><br><span class="postal-code">Postcode</span><br><span class="country-name">Country</span></p>'
        }
        
    });

});
