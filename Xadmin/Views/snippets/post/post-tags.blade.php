<!-- Tags -->
<div class="block">
    <div class="block-header bg-gray-lighter">
        <h3 class="block-title">{{ trans('admin.tags.title') }}</h3>
    </div>
    <div class="block-content">
        <div class="form-group">
            <div class="col-xs-12">
                <div class="form-material">
                    <label for="blog-tags">Tags can be used to categorize your blog posts. Separate tags by comma.</label><br/>
                    <input class="js-tags-input form-control" name="tags" value="{{ $post->id ? _postStickTags( $post ) : '' }}" type="text" id="blog-tags">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tags End -->