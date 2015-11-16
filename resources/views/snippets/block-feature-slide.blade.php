<ul class="slides">
	@forelse( $slidePosts as $post )
		{{-- Traditionally include the variable file so that it could be shared to this view --}}
		<?php include base_path() .'/resources/views/snippets/variables-property.blade.php'; ?>
		<li>
			<div class="desc">
				<div class="ps-desc">
					<h3><a href="{{ $url }}">{{ $title }}</a></h3>
					<p>{{ $excerpt }} <a href="{{ $url }}">read more</a></p>
					<span class="price">{{ $price }}</span>
					@if( $propertyType )
						<a href="#" class="status">{{ $propertyType }}</a>
					@endif
				</div>
			</div>
			<a href="{{ $url }}">{!! $featureImage !!}</a>
		</li>
	@empty
	@endforelse
</ul><!-- end slides -->