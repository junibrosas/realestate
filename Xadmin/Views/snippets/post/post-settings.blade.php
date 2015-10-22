<!-- Settings -->
    <div class="block">
        <div class="block-header bg-gray-lighter">
            <h3 class="block-title">Settings</h3>
        </div>
        <div class="block-content">
            <div class="form-horizontal" >
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="form-material">
                            <label for="blog-publishing-date">Publish Date</label>
                            <input class="js-datepicker form-control" type="text" id="blog-publishing-date" name="published_at" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{ $post->id ? date('Y-m-d', strtotime($post->published_at)) : '' }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="post-visibility">Post Visibility</label><br/>
                        <label class="css-input switch switch-sm switch-primary">
                            <?php 
                            $isVisible = true;
                            if($post->id && $post->is_visible == false){
                                $isVisible = false;
                            } ?>
                            <input id="post-visibility" type="checkbox" name="is_visible" {{ $isVisible ? 'checked' : ''  }}><span></span> Hidden/Visible
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Settings End -->