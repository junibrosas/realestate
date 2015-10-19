<table class="table table-striped table-vcenter">
    <thead>
        <tr>
        	<th>
        		<label class="css-input css-checkbox css-checkbox-default">
                    <input type="checkbox" checked=""><span></span> 
                </label>
        	</th>
            <th>Title</th>
            <th >Status</th>
            <th class="text-center" style="width: 100px;">Date</th>
            <th class="text-right" style="padding-right: 35px;">Action</th>
        </tr>
    </thead>
    <tbody>
    	@foreach ($posts as $key => $post)
    		<tr>
	            <td>
	        		<label class="css-input css-checkbox css-checkbox-default">
	                    <input type="checkbox" checked=""><span></span> 
	                </label>
	        	</td>
	        	<td class="font-w600"><a href="{{ _postEditLink($post) }}" class="post-link">{{ _postTitle($post) }}</a></td>
	            <td>
	                <span class="label {{ $post->is_visible ? 'label-primary' : 'label-danger' }}">{{ ucwords(_postStatus($post->is_visible))  }}</span>
	            </td>
                <td class="text-center">
                    {{ date('Y-m-d', strtotime( $post->published_at )) }} <br/> {{ date('H:i:s', strtotime( $post->published_at )) }}
                </td>
                <td class="text-right action-buttons">
                    <a href="{{ _postEditLink($post) }}" class="btn btn-success push-5-r push-10" type="button"><i class="fa fa-edit"></i></a>
                    {!! Form::model($post, ['route' => ['admin.posts.destroy', $post->id], 'method' => 'DELETE', 'class' => 'delete-form']) !!}
                        <button type="submit" class="btn btn-danger push-5-r push-10" type="button"><i class="fa fa-trash-o"></i></button>
                    {!! Form::close() !!}
                </td>
	        </tr>
		@endforeach
    </tbody>
</table>