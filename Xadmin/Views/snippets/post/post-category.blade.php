{{-- Post Category --}}
<div class="block">
    <div class="block-header bg-gray-lighter">
        <h3 class="block-title">{{ trans('admin.post_category') }}</h3>
    </div>
    <div class="block-content">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
		            <label class="col-xs-12" for="example-select">Select appropriate category for your post.</label>
		        </div>
		        <div class="col-sm-12 category-list">
		        	<div class="">
		        		<?php
			        		$categoryList = _categoryList();
			        		unset($categoryList[0]);
			        	?>
			        	@forelse( $categoryList as $categoryId => $categoryName)
			        		<div class="form-group">
			        			<label class="css-input css-checkbox css-checkbox-default">
				                    <input type="checkbox" name="category[]"  {{ _tagExistInPost( $post->id, $categoryId ) ? 'checked' : '' }} value="{{ $categoryId }}" ><span></span>
				                    {{ $categoryName }} 
				                </label>
			                </div>
			        	@empty
			        		<div class="text-center">No available category</div>
			        	@endforelse
			        	<br/>
		        	</div>
	            </div>
            </div>
        </div>
    </div>
</div>

{{-- Post Category --}}