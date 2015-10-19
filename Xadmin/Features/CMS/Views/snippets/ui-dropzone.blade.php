<!-- DropzoneJS and Tags Input -->
<div class="row">
    <div class="col-lg-12">
        <!-- DropzoneJS -->
        <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
        <div class="block">
            <div class="block-content block-content-full">
                <!-- DropzoneJS Container -->
                <form id="file-media-uploader" class="dropzone" action="{{ route('admin.files.store') }}" method="POST">
                	{{ csrf_field() }}
                </form>
            </div>
        </div>
        <!-- END DropzoneJS -->
    </div>
</div>
<!-- END DropzoneJS and Tags Input -->