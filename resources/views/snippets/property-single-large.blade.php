<div class="property_wrapper boxes clearfix">
    <div class="ImageWrapper boxes_img">
        {!! $featureImage !!}
        <div class="ImageOverlayH"></div>
        <div class="Buttons StyleMg">
            <span class="WhiteSquare"><a class="fancybox" href="{{ $featureImageSource }}"><i class="fa fa-search"></i></a></span>
            <span class="WhiteSquare"><a href="{{ $url }}"><i class="fa fa-link"></i></a></span>
        </div><!-- end Buttons -->
        <div class="box_type">{{ $price }}</div>
        <div class="status_type">For Sale</div>
    </div><!-- ImageWrapper -->
    
    <div class="title clearfix">
        <h3><a href="{{ $url }}"> {{ $title }}</a> 
        <small class="small_title">{{ $address }}</small>
        </h3>
    </div><!-- end title -->

    <div class="boxed_mini_details1 clearfix">
        <span class="type first"><strong>Country</strong>{{ $country }}</span>
        <span class="sqft"><strong>Area</strong><i class="icon-sqft"></i> {{ $area }}</span>
        <span class="garage"><strong>Garage</strong><i class="icon-garage"></i> {{ $garage }}</span>
        <span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> {{ $beds }}</span>
        <span class="status"><strong>Baths</strong><i class="icon-bath"></i> {{ $baths }}</span>
        <span class="furnished"><strong>Furnish</strong><i class="icon-furnished"></i> Yes</span>
        <span class="pool last"><strong>Pool</strong><i class="icon-pool"></i> Yes</span>
    </div><!-- end boxed_mini_details1 -->
    
    <div class="property_desc clearfix">
        {!! $excerpt !!}<br/><br/>
        <a class="btn btn-primary btn-xs" href="{{ $url }}" title="">read more</a>
    </div>
</div><!-- end property_wrapper -->