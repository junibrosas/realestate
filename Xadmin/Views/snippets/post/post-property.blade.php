<!-- Property Details -->
<div class="block">
    <div class="block-header bg-gray-lighter">
        <h3 class="block-title">{{ trans('admin.property_details') }}</h3>
    </div>
    <div class="block-content">
        <div class="form-group">
            <div class="col-xs-12">
                <div class="form-material">
                    <label for="blog-title">{{ trans('admin.property_address') }}</label>
                    <input class="form-control" type="text" name="meta[address]">
                </div>
                <br/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="form-material">
                    <label for="blog-title">{{ trans('admin.property_price') }}</label>
                    <input class="form-control" type="text" name="meta[price]">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="form-material">
                    <label for="blog-title">{{ trans('admin.property_area') }}</label>
                    <input class="form-control" type="text" name="meta[area]">
                </div>
            </div>
        </div>
        {{-- Type --}}
        <div class="form-group">
            <label class="col-xs-12" for="example-select">{{ trans('admin.property_type') }}</label>
            <div class="col-sm-12">
                <select class="form-control" id="example-select" name="meta[property_type]" size="1">
                    <option value="0">Please select</option>
                    <option value="1">Option #1</option>
                    <option value="2">Option #2</option>
                    <option value="3">Option #3</option>
                </select>
            </div>
        </div>
        {{-- Status --}}
        <div class="form-group">
            <label class="col-xs-12" for="example-select">{{ trans('admin.property_status') }}</label>
            <div class="col-sm-12">
                <select class="form-control" id="example-select" name="meta[property_status]" size="1">
                    <option value="0">Please select</option>
                    <option value="1">Option #1</option>
                    <option value="2">Option #2</option>
                    <option value="3">Option #3</option>
                </select>
            </div>
        </div>
        {{-- Country --}}
        <div class="form-group">
            <label class="col-xs-12" for="example-select">{{ trans('admin.property_country') }}</label>
            <div class="col-sm-12">
                <select class="form-control" id="example-select" name="meta[country]" size="1">
                    <option value="0">Please select</option>
                    <option value="1">Option #1</option>
                    <option value="2">Option #2</option>
                    <option value="3">Option #3</option>
                </select>
            </div>
        </div>

        {{-- Amenities --}}
        <div class="form-group">
            <div class="col-md-12">
                <label>Amenities</label><br>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <label class="checkbox"><input id="conditioning" value="option1" type="checkbox"> Air conditioning</label>
                    <label class="checkbox"><input id="Bedding" value="option2" type="checkbox"> Bedding</label>
                    <label class="checkbox"><input id="Heating" value="option3" type="checkbox"> Heating</label>   
                    <label class="checkbox"><input id="Internet" value="option4" type="checkbox"> Internet</label>   
                    <label class="checkbox"><input id="Microwave" value="option5" type="checkbox"> Microwave</label>   
                    <label class="checkbox"><input id="Smooking" value="option6" type="checkbox"> Smoking allowed</label>   
                    <label class="checkbox"><input id="Pool" value="option7" type="checkbox"> Use of pool</label>   
                    <label class="checkbox"><input id="Toaster" value="option8" type="checkbox"> Toaster</label> 
                </div> 
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <label class="checkbox"><input id="Cofee" value="option9" type="checkbox"> Cofee pot</label>
                    <label class="checkbox"><input id="Cable" value="option10" type="checkbox"> Cable TV</label>
                    <label class="checkbox"><input id="Parquet" value="option11" type="checkbox"> Parquet</label>   
                    <label class="checkbox"><input id="terrace" value="option12" type="checkbox"> Roof terrace</label>   
                    <label class="checkbox"><input id="Terrace" value="option13" type="checkbox"> Terrace</label>   
                    <label class="checkbox"><input id="Towelwes" value="option14" type="checkbox"> Towelwes</label>   
                    <label class="checkbox"><input id="iron" value="option15" type="checkbox"> Iron</label>   
                    <label class="checkbox"><input id="hifi" value="option16" type="checkbox"> Hi-Fi</label> 
                </div> 
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <label class="checkbox"><input id="Beach" value="option17" type="checkbox"> Beach</label>
                    <label class="checkbox"><input id="Garage" value="option18" type="checkbox"> Garage</label>
                    <label class="checkbox"><input id="Child" value="option19" type="checkbox"> Child Room</label>   
                    <label class="checkbox"><input id="Drawing" value="option20" type="checkbox"> Drawing room</label>   
                    <label class="checkbox"><input id="Security" value="option21" type="checkbox"> Security</label>   
                    <label class="checkbox"><input id="Surveillance" value="option22" type="checkbox"> Camera Surveillance</label>   
                    <label class="checkbox"><input id="Nature" value="option23" type="checkbox"> Nature</label>   
                    <label class="checkbox"><input id="Route" value="option24" type="checkbox"> Route path</label> 
                </div> 
            </div>
        </div>

    </div>
</div>
<!-- Property Details End