@extends('cms::layouts.default')


@section('content')
    @if($post->id)
        <form class="form-horizontal push-10-t" action="{{ route('admin.pages.update', $post->id) }}" method="POST">
        <input name="_method" type="hidden" value="PUT">
    @else 
        <form class="form-horizontal push-10-t" action="{{ route('admin.pages.store') }}" method="POST">
    @endif
    
        {!! csrf_field() !!}
        <div class="pull-left page-block-btns"> 
            <a href="{{ route('admin.pages.index') }}" class="btn btn-primary btn-square"><i class="fa fa-list"></i> {{ trans('admin.pages.all') }}</a>
        </div>
        <div class="pull-right page-block-btns"> 
            <button type="submit" class="btn btn-primary btn-square"><i class="fa fa-floppy-o"></i> {{ trans('admin.pages.store') }}</a>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Summernote (.js-summernote + .js-summernote-air classes are initialized in App() -> uiHelperSummernote()) -->
                <!-- For more info and examples you can check out http://summernote.org/ -->
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <h3 class="block-title">{{ trans('admin.pages.blog_title') }}</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="form-material">
                                    <label for="blog-title">Give your blog post a title.</label><br/>
                                    <input class="form-control" type="text" id="blog-title" name="title" value="{{ $post->title }}" required="required">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        <h3 class="block-title">{{ trans('admin.pages.blog_content') }}</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="form-material"> 
                                    <div class="form-material">
                                        <!-- Summernote Container -->
                                        <label for="blog-content">Blog about anything and add your content.</label><br/>
                                        <textarea id="content-area" name="content" class="js-summernote" required="required">
                                            {!! $post->content !!}
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>                

                <!-- END Summernote -->
            </div>
            <div class="col-lg-12">
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

                <!-- Settings -->
                <div class="block">
                    <div class="block-header bg-gray-lighter">
                        
                        <h3 class="block-title">Settings</h3>
                    </div>
                    <div class="block-content">
                        <div class="form-horizontal push-10-t" >
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <div class="form-material">
                                        <label for="blog-publishing-date">Set a specific publish date. Leaving the field will automatically set the date now.</label>
                                        <input class="js-datepicker form-control" type="text" id="blog-publishing-date" name="published_at" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="{{ $post->id ? date('Y-m-d', strtotime($post->published_at)) : '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
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
            </div>
        </div>
        <div class="text-right page-block-btns"> 
            <button type="submit" class="btn btn-primary btn-square"><i class="fa fa-floppy-o"></i> {{ trans('admin.pages.store') }}</a>
        </div>
    </form>
@stop

@section('header')
    <link rel="stylesheet" id="css-main" href="{{ asset('xadmin/js/plugins/summernote/summernote.min.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('xadmin/js/plugins/summernote/summernote-bs3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xadmin/js/plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xadmin/js/plugins/select2/select2-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('xadmin/js/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xadmin/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css') }}">
@stop

@section('footer')
    <script src="{{ asset('xadmin/js/plugins/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('xadmin/js/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('xadmin/js/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('xadmin/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('xadmin/js/plugins/masked-inputs/jquery.maskedinput.min.js') }}"></script>


    <!-- Page JS Code -->
    <script>
        $(function () {
            // Init page helpers (Summernote + CKEditor plugins)
            App.initHelpers(['summernote', 'select2', 'tags-inputs', 'datepicker', 'masked-inputs']);
        });
    </script>
@stop