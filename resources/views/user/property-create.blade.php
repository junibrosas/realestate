@extends('layouts.property')

@section('content')
<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">

    <div class="property_wrapper boxes clearfix">

        {{-- User Header --}}
        @include('user.snippets.user-header')

        <h3 class="big_title">List Property Form<small>You can submit your property</small></h3>
            <form action="#" id="property_submit_form">
                <label for="title">Title</label>
                <input type="text" id="title" class="form-control" placeholder="Title">    
                <label for="address">Address</label>
                <input id="address" type="text" class="form-control" placeholder="Address">     
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="6" placeholder="Add property details goes here"></textarea>
                <label for="type">Type</label>
                    <select id="type" class="show-menu-arrow selectpicker">
                        <option value="apertment">Apertment</option>
                        <option value="condo">Condo</option>
                        <option value="villa">Villa</option>
                        <option value="cottage">Cottage</option>
                        <option value="house">House</option>
                    </select>        
                <label for="status">Status</label>
                    <select id="status" class="show-menu-arrow selectpicker">
                        <option value="rent">For Rent</option>
                        <option value="sale">For Sale</option>
                        <option value="sold">Sold Out</option>
                    </select>

                <label for="country">Country</label>
                    <select id="country" class="show-menu-arrow selectpicker">
                        <option value="usa">United States</option>
                        <option value="turkei">Turkei</option>
                        <option value="germany">Germany</option>
                        <option value="israel">Israel</option>
                        <option value="holland">Holland</option>
                    </select>
                <label for="location">Location</label>
                    <select id="location" class="show-menu-arrow selectpicker">
                        <option value="miami">Miami</option>
                        <option value="antalya">Antalya</option>
                        <option value="bodrum">Bodrum</option>
                        <option value="hanue">Hanue</option>
                        <option value="aksa">Aksa</option>
                        <option value="amsterdam">Amsterdam</option>
                    </select>
                     <hr>   
                    <div class="clearfix">
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
                    </div><!-- end row --> 
                    <hr>   
                    <div class="row clearfix">  
                        <div class="col-lg-6 col-md-6 col-sm-12">                                   
                            <label>Price</label><br>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" class="form-control">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">                                   
                            <label>Area</label><br>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-addon">m<sup>2</sup></span>
                            </div>
                        </div>                                        
                    </div><!-- end row -->
                    
                    <hr>
                    <label>Submit Screenshot</label>
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-preview thumbnail"></div>
                    <div>
                    <span class="btn btn-primary btn-file">
                        <span class="fileupload-new">Select image</span>
                        <span class="fileupload-exists">Change</span>
                        <input type="file">
                    </span>
                    <a href="#" class="btn btn-primary fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <hr>
                    
                    <label for="geocomplete">Location Search</label>
                        <input id="geocomplete" type="text" class="form-control" placeholder="Type in an address">
                        <input id="find" type="button" class="btn btn-primary" value="Find Address" />    
                    
                    <div class="map_canvas"></div>
                    <hr>
                <button type="submit" class="btn btn-primary">SEND DETAILS</button>                   
            </form><!-- end search form -->
    </div><!-- end property_wrapper -->                
</div><!-- end content -->
@stop

@section('footer')
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script src="{{ asset('xadmin/js/plugins/geocomplete/jquery.geocomplete.js') }}"></script>
<script src="{{ asset('xadmin/js/plugins/geocomplete/logger.js') }}"></script>
<script>
  $(function(){
    
    var options = {
      map: ".map_canvas"
    };
    
    $("#geocomplete").geocomplete(options)
      .bind("geocode:result", function(event, result){
        $.log("Result: " + result.formatted_address);
      })
      .bind("geocode:error", function(event, status){
        $.log("ERROR: " + status);
      })
      .bind("geocode:multiple", function(event, results){
        $.log("Multiple: " + results.length + " results found");
      });
    
    $("#find").click(function(){
        $("#geocomplete").trigger("geocode");
    });
    
    $("#examples a").click(function(){
        $("#geocomplete").val($(this).text()).trigger("geocode");
        return false;
    });
    
  });
</script>
@stop