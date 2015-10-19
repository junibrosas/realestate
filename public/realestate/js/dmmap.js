
 $(document).ready(function() {
	InitOffCanvasNavigation();
	InitMap();
});

function LoadMapProperty() {
    var locations = new Array(
        [34.01312,-118.496808]
    );
    var markers = new Array();
    var mapOptions = {
        center: new google.maps.LatLng(34.012044, -118.494458),
        zoom: 14,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false
    };

    var map = new google.maps.Map(document.getElementById('property-map'), mapOptions);

    $.each(locations, function(index, location) {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(location[0], location[1]),
            map: map,
            icon: 'images/marker-transparent.png'
        });

        var myOptions = {
            content: '<div class="infobox"><div class="image"><img src="assets/img/tmp/property-tiny-1.png" alt=""></div><div class="title"><a href="detail.html">1041 Fife Ave</a></div><div class="area"><span class="key">Area:</span><span class="value">200m<sup>2</sup></span></div><div class="price">€450 000.00</div><div class="link"><a href="detail.html">View more</a></div></div>',
            disableAutoPan: false,
            maxWidth: 0,
            pixelOffset: new google.maps.Size(-146, -190),
            zIndex: null,
            closeBoxURL: "",
            infoBoxClearance: new google.maps.Size(1, 1),
            position: new google.maps.LatLng(location[0], location[1]),
            isHidden: false,
            pane: "floatPane",
            enableEventPropagation: false
        };
        marker.infobox = new InfoBox(myOptions);
        marker.infobox.isOpen = false;

        var myOptions = {
            draggable: true,
            content: '<div class="marker"><div class="marker-inner"></div></div>',
            disableAutoPan: true,
            pixelOffset: new google.maps.Size(-21, -58),
            position: new google.maps.LatLng(location[0], location[1]),
            closeBoxURL: "",
            isHidden: false,
            // pane: "mapPane",
            enableEventPropagation: true
        };
        marker.marker = new InfoBox(myOptions);
        marker.marker.open(map, marker);
        markers.push(marker);

        google.maps.event.addListener(marker, "click", function (e) {
            var curMarker = this;

            $.each(markers, function (index, marker) {
                // if marker is not the clicked marker, close the marker
                if (marker !== curMarker) {
                    marker.infobox.close();
                    marker.infobox.isOpen = false;
                }
            });


            if(curMarker.infobox.isOpen === false) {
                curMarker.infobox.open(map, this);
                curMarker.infobox.isOpen = true;
                map.panTo(curMarker.getPosition());
            } else {
                curMarker.infobox.close();
                curMarker.infobox.isOpen = false;
            }

        });
    });
}

function LoadMap() {
	var locations = new Array(
        [34.01843,-118.491046], [34.006673,-118.486562], [34.009714,-118.480296], [34.010408,-118.473215], [34.01521,-118.474889], [34.022502,-118.480124],
        [34.024423,-118.459868], [34.024885,-118.44871], [34.002368,-118.482828], [34.003791,-118.473001], [34.015922,-118.457422], [34.022147,-118.457894],
        [34.028904,-118.46725], [34.030114,-118.481326], [34.03143,-118.494029], [34.031643,-118.504758], [34.029616,-118.515058], [34.001834,-118.451414]
	);
	var markers = new Array();
	var mapOptions = {
		center: new google.maps.LatLng(34.019000, -118.455458),
		zoom: 14,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
    };
[ { "featureType": "water", "elementType": "geometry", "stylers": [ { "saturation": 68 }, { "weight": 0.7 }, { "hue": "#ff0000" } ] } ]
    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    $.each(locations, function(index, location) {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(location[0], location[1]),
            map: map,
            icon: 'images/marker-transparent.png'
        });

	    var myOptions = {
	        content: '<div class="infobox"><div class="image"><img src="assets/img/tmp/property-tiny-1.png" alt=""></div><div class="title"><a href="detail.html">1041 Fife Ave</a></div><div class="area"><span class="key">Area:</span><span class="value">200m<sup>2</sup></span></div><div class="price">€450 000.00</div><div class="link"><a href="detail.html">View more</a></div></div>',
	        disableAutoPan: false,
	        maxWidth: 0,
	        pixelOffset: new google.maps.Size(-146, -190),
	        zIndex: null,
	        closeBoxURL: "",
			styles: [ { "stylers": [ { "hue": "#007ACC" }, { "gamma": 0 } ] } ], 
	        infoBoxClearance: new google.maps.Size(1, 1),
	        position: new google.maps.LatLng(location[0], location[1]),
	        isHidden: false,
	        pane: "floatPane",
	        enableEventPropagation: false
	    };
	    marker.infobox = new InfoBox(myOptions);
		marker.infobox.isOpen = false;

	    var myOptions = {
	        draggable: true,
			content: '<div class="marker"><div class="marker-inner"></div></div>',
			disableAutoPan: true,
			pixelOffset: new google.maps.Size(-21, -58),
			position: new google.maps.LatLng(location[0], location[1]),
			closeBoxURL: "",
			isHidden: false,
			// pane: "mapPane",
			enableEventPropagation: true
	    };
	    marker.marker = new InfoBox(myOptions);
		marker.marker.open(map, marker);
		markers.push(marker);

        google.maps.event.addListener(marker, "click", function (e) {
            var curMarker = this;

            $.each(markers, function (index, marker) {
                // if marker is not the clicked marker, close the marker
                if (marker !== curMarker) {
                    marker.infobox.close();
                    marker.infobox.isOpen = false;
                }
            });


            if(curMarker.infobox.isOpen === false) {
                curMarker.infobox.open(map, this);
                curMarker.infobox.isOpen = true;
                map.panTo(curMarker.getPosition());
            } else {
                curMarker.infobox.close();
                curMarker.infobox.isOpen = false;
            }

        });
    });
}

function InitMap() {
	google.maps.event.addDomListener(window, 'load', LoadMap);
    google.maps.event.addDomListener(window, 'load', LoadMapProperty);
}