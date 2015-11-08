<?php 
$countries = _dataCountriesAndLocation();
$countriesJson = json_encode($countries);
?>

<div class="col-lg-4 col-md-4 col-sm-12">
    <div class="searchmodule clearfix" data-effect="slide-right">

    {!! Form::open(['route' => 'front.search.advance', 'id'=>'advance_search', 'class' => 'clearfix', 'name' => 'advance_search', 'method' => 'GET']) !!}
        <div class="col-lg-12">
            <label for="country">Country</label>
			<select id="country" class="show-menu-arrow form-control selectpoint" name="country">
                
                @forelse($countries as $country)
				<option value="{{ $country['name'] }}">{{ $country['name'] }}</option>
                @empty
                @endforelse

			</select>                                     
        </div>
        <div class="col-lg-12">
            <label for="location">Location</label>
            
            @forelse($countries as $i => $country)
                <select id="location-{{ $i }}" class="show-menu-arrow form-control selectpoint" name="{{ $i == 0 ? 'location' : '' }}" style="{{ $i != 0 ? 'display:none' : '' }}">
                    @forelse($country['cities'] as $city)
                    <option value="{{ $city }}">{{ $city }}</option>
                    @empty
                    @endforelse
                </select>
            @empty
            @endforelse

        </div>                                               
        <div class="col-lg-12">
            <label for="status">Status</label>
            <?php
                $statuses = _propertyStatuses();
                //$statuses[0] = 'Please Select';
                $statuses = array_reverse($statuses);
            ?>
            {!! Form::select('status', $statuses, \Request::get('status'), ['class' => 'show-menu-arrow selectpoint form-control', 'id' => 'status']) !!}

        </div>
        <div class="col-lg-12">
            <label for="type">Type</label>
            <?php
                $categories = _tagCategoryParentList();
                /*$categories[0] = 'Please Select';
                $categories = array_reverse($categories);*/
            ?>
            {!! Form::select('type', $categories, \Request::get('type'), ['class' => 'show-menu-arrow selectpoint form-control', 'id' => 'status']) !!}

        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <label for="min_price">Min Price</label>
            <select id="min_price" name="min_price" class="show-menu-arrow selectpoint form-control">
                <option value="0">$0</option>
                <option value="1000">$1000</option>
                <option value="5000">$5000</option>
                <option value="10000">$10000</option>
                <option value="25000">$25000</option>
                <option value="50000+">$50000+</option>
            </select>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <label for="max_price">Max Price</label>
            <select id="max_price" name="max_price" class="show-menu-arrow selectpoint form-control">
                <option value="1000">$1000</option>
                <option value="5000">$5000</option>
                <option value="15000">$15000</option>
                <option value="25000">$25000</option>
                <option value="50000">$50000</option>
                <option value="100000+">$100000+</option>
            </select>
        </div>
        
        <div class="clearfix"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <button type="submit" class="btn btn-inverse btn-block"><i class="fa fa-search"></i> SEARCH PROPERTY</button>
        </div>
	{!! Form::close() !!}
    </div><!-- end search module -->
</div><!-- end col-lg-4 --> 
<script type="text/javascript">
    $(function(){
        var countries = JSON.parse( '{!! $countriesJson !!}' );
        var cities = [];

        $('#country').change(function(){
            var selectedCountryName = this.value;
            for (var i = countries.length - 1; i >= 0; i--) {
                var location = $('#location-' + i);
                location.hide(); // initially hide all dropdowns
                location.attr('name', '');

                if(countries[i]['name'] == selectedCountryName){
                    location.attr('name', 'location');
                    location.show(); // show dropdown
                
                }
            }
        });
    });
</script>