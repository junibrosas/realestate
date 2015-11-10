<div class="boxes" style="margin-bottom: 0;">
	<div class="boxes_img ImageWrapper">
		<a href="{{ $url }}">
			{!! $featureImage !!}
			<div class="PStyleNe"></div>
		</a>
		<div class="box_type">{{ $price }}</div>
	</div>
	<h2 class="title"><a href="{{ $url }}"> {{ substr($title, 0, 24) }}</a></h2>
	<div class="boxed_mini_details clearfix">
		<span class="area first"><strong>Garage</strong><i class="icon-garage"></i> {{ $garage }}</span>
		<span class="status"><strong>Baths</strong><i class="icon-bath"></i> {{ $baths }}</span>
		<span class="bedrooms last"><strong>Beds</strong><i class="icon-bed"></i> {{ $beds }}</span>
	</div>
</div><!-- end boxes -->