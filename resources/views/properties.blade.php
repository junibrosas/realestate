@extends('layouts.property')

@section('content')
<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
                        
    @forelse($properties as $post)

        {{-- Traditionally include the variable file so that it could be shared to this view --}}
        <?php include base_path() .'/resources/views/snippets/variables-property.blade.php'; ?>

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
                <span class="type first"><strong>Type</strong><a href="#">Villa</a></span>
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
    @empty
        <div class="text-center">
            <h2><b>No available properties</b></h2>
        </div>
    @endforelse

    <div class="pagination_wrapper clearfix">
        <!-- Pagination Normal -->
        {!! $properties->render() !!}

    </div>

    </div><!-- end content -->
@stop