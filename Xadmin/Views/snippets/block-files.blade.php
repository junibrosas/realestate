<div class="block">
	<div class="block-header bg-gray-lighter">
		<h3 class="block-title">Files Gallery</h3>
	</div>
	<div class="block-content">
		@if(count($files) > 0)
			<table class="table js-table-checkable">
				<thead>
					<tr>
						<th class="text-center" style="width: 70px;">
							<label class="css-input css-checkbox css-checkbox-primary remove-margin-t remove-margin-b">
								<input type="checkbox" id="check-all" name="check-all"><span></span>
							</label>
						</th>
						<th>Preview</th>
						<th>Filename</th>
						<th class="hidden-xs" style="width: 15%;">Size</th>
						<th class="text-center" style="width: 100px;">Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($files as $key => $file)
						<tr>
							<td class="text-center">
								<label class="css-input css-checkbox css-checkbox-primary">
									<input type="checkbox" id="row_1" name="row_1"><span></span>
								</label>
							</td>
							<td>{!! _fileMediaPreview($file) !!}</td>
							<td><b>{{ $file->filename }}</b></td>
							<td>{{ $file->size }}</td>
							<td class="text-center">
								<div class="btn-group">
									{!! Form::open([ 'method' => 'post', 'route' => ['admin.files.destroy', $file->id ] ]) !!}
										<input type="hidden" name="_method" value="DELETE">
										<button class="btn btn-xs btn-default" type="submit" data-toggle="tooltip" title="Remove File"><i class="fa fa-times"></i></button>
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