@extends('cms::layouts.default')

@section('content')
    @if($post->id)
        <form class="form-horizontal push-10-t" action="{{ route('admin.posts.update', $post->id) }}" method="POST">
        <input name="_method" type="hidden" value="PUT">
    @else 
        <form class="form-horizontal push-10-t" action="{{ route('admin.posts.store') }}" method="POST">
    @endif
    
        {!! csrf_field() !!}
        <div class="pull-left page-block-btns"> 
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary btn-square"><i class="fa fa-list"></i> {{ trans('admin.posts.all') }}</a>
        </div>
        <div class="pull-right page-block-btns"> 
            <button type="submit" class="btn btn-primary btn-square"><i class="fa fa-floppy-o"></i> {{ trans('admin.posts.store') }}</a>
        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-lg-8">
               
                @include('cms::snippets.post.post-title-content')

                @include('cms::snippets.post.post-property')

                

                @include('cms::snippets.post.post-geocomplete')
                
            </div>
            <div class="col-lg-4">
                @include('cms::snippets.post.post-category')

                @include('cms::snippets.post.post-tags')

                @if($post->id)
                    @include('cms::snippets.post.post-feature-image')    
                @endif

                @include('cms::snippets.post.post-settings')

                <div class="text-right page-block-btns"> 
                    <button type="submit" class="btn btn-primary btn-square"><i class="fa fa-floppy-o"></i> {{ trans('admin.posts.store') }}</button>
                </div>

            </div>
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
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <script src="{{ asset('xadmin/js/plugins/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('xadmin/js/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('xadmin/js/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('xadmin/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('xadmin/js/plugins/masked-inputs/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('xadmin/js/plugins/geocomplete/jquery.geocomplete.js') }}"></script>
    <script src="{{ asset('xadmin/js/plugins/geocomplete/logger.js') }}"></script>
    <script>
      $(function(){
        
        var options = {
          map: ".map_canvas"
        };
        
        $("#geocomplete").geocomplete(options)
          .bind("geocode:result", function(event, result){
            $.log("Result: " + result.formatted_address);
          })
          .bind("geocode:error", function(event, status){
            $.log("ERROR: " + status);
          })
          .bind("geocode:multiple", function(event, results){
            $.log("Multiple: " + results.length + " results found");
          });
        
        $("#find").click(function(){
          $("#geocomplete").trigger("geocode");
        });
        
        $("#examples a").click(function(){
          $("#geocomplete").val($(this).text()).trigger("geocode");
          return false;
        });
        
      });
    </script>
    <!-- Page JS Code -->
    <script>
        $(function () {
            // Init page helpers (Summernote + CKEditor plugins)
            App.initHelpers(['summernote', 'select2', 'tags-inputs', 'datepicker', 'masked-inputs']);
        });
    </script>
@stop