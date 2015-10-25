@forelse( $properties as $post )
<?php 
$title = _postTitle( $post );
$address = _postMeta( $post->id, 'address' );
$area = _postMeta($post->id, 'area');
$garage = _postMeta($post->id, ['meta_key'=>'amenities', 'meta_value' => 'Garage']);
$beds = _postMeta($post->id, ['meta_key'=>'amenities', 'meta_value' => 'Beds']);
$baths = _postMeta($post->id, ['meta_key'=>'amenities', 'meta_value' => 'Baths']);
$price = _money( _postMeta( $post->id, 'price' ) );
$url = _postPermaLink( $post );
?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="boxes first" data-effect="slide-bottom">
        <div class="ImageWrapper boxes_img">
            <img class="img-responsive" src="{{ asset('realestate/demos/01_home.jpg') }}" alt="">
            <div class="ImageOverlayH"></div>
            <div class="Buttons StyleSc">
                <span class="WhiteSquare"><a class="fancybox" href="{{ asset('realestate/demos/01_home.jpg') }}"><i class="fa fa-search"></i></a>
                </span>
                <span class="WhiteSquare"><a href="{{ $url }}"><i class="fa fa-link"></i></a>
                </span>
            </div>
            <div class="box_type">{{ $price }}</div>
            <div class="status_type">For Sale</div>
        </div>
        <h2 class="title"><a href="{{ $url }}"> {{ $title }}</a> <small class="small_title">{{ $address }}</small></h2>
       
        <div class="boxed_mini_details1 clearfix">
            <span class="garage first"><strong>Garage</strong><i class="icon-garage"></i> {{ $garage }}</span>
            <span class="bedrooms"><strong>Beds</strong><i class="icon-bed"></i> {{ $beds }}</span>
            <span class="status"><strong>Baths</strong><i class="icon-bath"></i> {{ $baths }}</span>
            <span class="sqft last"><strong>Area</strong><i class="icon-sqft"></i> {{ $area }}</span>
        </div>
    </div><!-- end boxes -->
</div>
@empty

@endforelse



