@extends('cms::layouts.default')

@section('content')
	<div class="block">
		<div class="block-header bg-gray-lighter">
			<h3 class="block-title">Upload Files</h3>
		</div>
		<div class="block-content">
			
			@include('cms::snippets.ui-dropzone')

		</div>
	</div>
	@include('cms::snippets.block-files')

@stop

@section('header')
	<link rel="stylesheet" href="{{ asset('xadmin/js/plugins/dropzonejs/dropzone.min.css') }}">
@stop


@section('footer')
	<script src="{{ asset('xadmin/js/plugins/dropzonejs/dropzone.min.js') }}"></script>
	<script type="text/javascript">
		$(function () {
			// Init page helpers (Table Tools helper)
			App.initHelpers('table-tools');
		});
		Dropzone.options.fileMediaUploader = {
			init: function() {
				this.on("queuecomplete", function(file) { 
					location.reload();
				});
			}
		};
	</script>
@stop