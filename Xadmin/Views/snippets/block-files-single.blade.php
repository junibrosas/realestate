<div class="block">
	<div class="block-header bg-gray-lighter">
        <h3 class="block-title">Files Gallery</h3>
    </div>
	<div class="block-content">
		@if(count($files) > 0)
			<table class="table js-table-checkable">
                <thead>
                    <tr>
                    	<th>Preview</th>
                        <th>Filename</th>
                        <th class="hidden-xs" style="width: 15%;">Size</th>
                        <th class="text-center" style="width: 100px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($files as $key => $file)
                    	<tr>
                    		<td>{!! _fileMediaPreview($file) !!}</td>
                            <td><b>{{ $file->filename }}</b></td>
                            <td>{{ $file->size }}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                     {!! Form::open([ 'method' => 'post', 'route' => 'admin.post-media.store']) !!}
                                        <input type="hidden" name="post" value="{{ $postId }}">
                                        <input type="hidden" name="file" value="{{ $file->id }}">
                                        <button class="btn btn-sm btn-default" type="submit">Add File</button>
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
		@else
			<div class="not-available text-center">
				No files available
			</div> 
		@endif
	</div>
</div>