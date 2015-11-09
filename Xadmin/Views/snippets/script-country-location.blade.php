<?php 
$countriesJson = json_encode( _dataCountriesAndLocation() );
?>
<script type="text/javascript">
$(function(){

	// Synchorizing cities from selected country.
	var countries = JSON.parse( '{!! $countriesJson !!}' );
	var elemLocation = $('#location');
	var elemCountry = $('#country');

	populateCities( elemCountry.val() );

	elemCountry.change(function(){
		populateCities( this.value );
	});

	// Populating new cities from specific country.
	function populateCities( selectedCountryName ){
		var selectedCountryName = selectedCountryName;
		var options = ''; var selectedCity = elemLocation.data('selected-location');
		
		for (var i = 0; i < countries.length; i++) {
			if(countries[i]['name'] == selectedCountryName){
				var cities = countries[i]['cities'];

				for (var i = 0; i < cities.length; i++) {
					var isSelected = '';
					if(selectedCity == cities[i]){
						isSelected = 'selected="selected"';
					}
					options += '<option value="'+cities[i]+'" '+isSelected+' >'+cities[i]+'</option>';
				};
			}

			elemLocation.html(options); // insert new cities
		}
	}
});
</script>