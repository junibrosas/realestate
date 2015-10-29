<div id="tabbed_widget" class="tabbable clearfix" data-effect="slide-bottom"> 
    <ul class="nav nav-tabs">
        @forelse($categories as $i => $category)
            <li class="{{ $i == 0 ? 'active' : '' }}"><a href="#{{ $category->slug }}" data-toggle="tab">{{ $category->name }}</a></li>    
        @empty

        @endforelse
    </ul>
    <div class="tab-content tabbed_widget clearfix">
        {{-- Iterate each category --}}
        @forelse($categories as $i => $category)
            <div class="tab-pane {{ $i == 0 ? 'active' : '' }}" id="{{ $category->slug }}">
                {{-- Iterate each posts of a single category --}}
                <?php $j = 0; ?>
                @forelse($category->posts()->take(9)->get() as $post)
                    {{-- Traditionally include the variable file so that it could be shared to this view --}}
                    <?php include base_path() .'/resources/views/snippets/variables-property.blade.php'; ?>

                    <div class="col-lg-4 col-md-4 col-sm-4 {{ $j == 0 ? 'first' : '' }} {{ $j == 2 ? 'last' : '' }}">
                        <div class="boxes">
                            <div class="boxes_img ImageWrapper">
                                <a href="{{ $url }}">
                                    {!! $featureImage !!}
                                    <div class="PStyleNe"></div>
                                </a>
                                <div class="box_type">{{ $price }}</div>
                            </div>
                            <h2 class="title"><a href="single-property.html"> {{ substr($title, 0, 24) }}</a></h2>
                            <div class="boxed_mini_details clearfix">
                                <span class="area first"><strong>Garage</strong><i class="icon-garage"></i> {{ $garage }}</span>
                                <span class="status"><strong>Baths</strong><i class="icon-bath"></i> {{ $baths }}</span>
                                <span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> {{ $beds }}</span>
                            </div>
                        </div><!-- end boxes -->
                    </div>

                    <?php 
                    if( $j == 2 ) $j = 0; // restarts if counter is greater than 3 items.
                    $j++ ?>
                @empty
                    <div class="text-center"><b>No available properties</b></div>
                    <br/>
                @endforelse
            </div>
        @empty

        @endforelse
    </div>
</div>
