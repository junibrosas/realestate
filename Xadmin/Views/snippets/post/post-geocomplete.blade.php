<!-- Geo Complete -->
<div class="block">
    <div class="block-header bg-gray-lighter">
        <h3 class="block-title">{{ trans('admin.geocomplete_title') }}</h3>
    </div>
    <div class="block-content">
        <div class="form-group">
            <div class="col-xs-12">
                <div class="form-material">
        	<input id="geocomplete" type="text" class="form-control"  placeholder="Type in an address" name="meta[geo_location]" value="{{ _postMeta($post->id, 'geo_location') }}"> <br>
        	<a id="find" class="btn btn-primary btn-square"><i class="fa fa-map-marker"></i> Find Address</a>
        	{{-- Shows the Map here --}}
        	<div class="map_canvas"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Geo Complete End -->