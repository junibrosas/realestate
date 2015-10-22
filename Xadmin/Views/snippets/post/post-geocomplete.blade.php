<!-- Geo Complete -->
<div class="block">
    <div class="block-header bg-gray-lighter">
        <h3 class="block-title">{{ trans('admin.geocomplete_title') }}</h3>
    </div>
    <div class="block-content">
        <div class="form-group">
            <div class="col-xs-12">
                <div class="form-material">
					<input id="geocomplete" type="text" class="form-control" name="meta[location]" placeholder="Type in an address"> <br>
					<button id="find" class="btn btn-primary btn-square"><i class="fa fa-map-marker"></i> Find Address</button>
					{{-- Shows the Map here --}}
					<div class="map_canvas"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Geo Complete End -->