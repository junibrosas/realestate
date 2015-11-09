{{-- Feature Image--}}
<div class="block">
	<div class="block-header bg-gray-lighter">
		 <ul class="block-options">
			<li>
				<a href="{{ route('admin.post-media.index', ['post'=>$post->id]) }}"><i class="fa fa-plus"></i> Select Image</a>
			</li>
		</ul>
		<h3 class="block-title">{{ trans('admin.image.feature') }}</h3>
	</div>
	<div class="block-content" style="padding-bottom: 20px;">
		<div class="row">
			<div class="col-md-12">
				@if($post->featureImage())
					<div class="post-feature-image-container">
						<img src="{{ $post->featureImage() }}" alt="{{ $post->title }}" class="post-feature-image img-responsive">
						<div class="text-center">
							<button class="btn btn-danger btn-sm btn-block btn-square" name="remove_feature_image" value="1">Remove</button>
						</div>
					</div>
				@else 
					<div class="image-placeholder">&nbsp;</div>
				@endif
			</div>
		</div>
	</div>
</div>

{{-- Feature Image End --}}