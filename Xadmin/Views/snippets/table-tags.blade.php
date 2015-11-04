<table class="table table-striped table-vcenter">
    <thead>
        <tr>
        	<th>
        		<label class="css-input css-checkbox css-checkbox-default">
                    <input type="checkbox" ><span></span> 
                </label>
        	</th>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Parent ID</th>
            <th class="text-right" style="padding-right: 35px;">Action</th>
        </tr>
    </thead>
    <tbody>
    @forelse( $tags as $tag )
        <tr>
            <td>
                <label class="css-input css-checkbox css-checkbox-default">
                    <input type="checkbox"><span></span> 
                </label>
            </td>
            <td>{{ $tag->id }}</td>
            <td>{{ $tag->name }}<br/><em style="font-size: 11px;">{{ $tag->slug }}</em> </td>
            <td>
                {{ strtoupper($tag->type) }}
            </td>
            <td class="text-center">{{ $tag->parent_id }}</td>
            <td class="text-right action-buttons">
                <a href="{{ route('admin.tags.index', ['tag' => $tag->id]) }}" class="btn btn-success push-5-r push-10" type="button"><i class="fa fa-edit"></i></a>
                {!! Form::model($tag, ['route' => ['admin.tags.destroy', $tag->id], 'method' => 'DELETE', 'class' => 'delete-form']) !!}
                    <button type="submit" class="btn btn-danger push-5-r push-10" type="button"><i class="fa fa-trash-o"></i></button>
                {!! Form::close() !!}
            </td>
        </tr>
    @empty
    
    @endforelse
    </tbody>
</table>