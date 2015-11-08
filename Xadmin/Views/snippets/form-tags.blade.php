@if($tag->id)
{!! Form::open(['route' => ['admin.tags.update', $tag->id], 'method' => 'POST', 'class' => 'form-horizontal push-10-t']) !!}
<input name="_method" type="hidden" value="PUT">
<input type="hidden" name="tagId" value="{{ $tag->id }}" />   
@else
{!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST', 'class' => 'form-horizontal push-10-t']) !!} 
@endif

	{{-- Name --}}
	<div class="form-group">
        <div class="col-lg-12">
            <div class="form-material">
                <label>Name</label>
                <input class="form-control" type="text" name="name" value="{{ $tag->name }}" required="required">
                <em>The name is how it appears on your site.</em>
            </div>
        </div>
    </div>
    {{-- Slug --}}
    <div class="form-group">
        <div class="col-lg-12">
            <div class="form-material">
                <label>Slug</label>
                <input class="form-control" type="text" name="slug" value="{{ $tag->slug }}">
                <em>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</em>
            </div>
        </div>
    </div>
    {{-- Description --}}
    <div class="form-group">
        <div class="col-lg-12">
            <div class="">
                <label>Description</label>
            	<textarea name="description" class="form-control">{{ $tag->description }}</textarea>
                <em>The description is not prominent by default; however, some themes may show it.</em>
            </div>
        </div>
    </div>
    {{-- Type --}}
    <div class="form-group">
        <label class="col-xs-12" for="example-select">Type</label>
        <div class="col-sm-12">
            <?php $tagTypes = _dataTagTypes(); $tagTypes[0] = 'Please select'; $tagTypes = array_reverse($tagTypes); $tagType = $tag->type ? $tag->type : 0 ?>
            
            {!! Form::select('type', $tagTypes ,$tagType, ['class' => 'form-control', 'size' => 1] ) !!}

            <em>Choose a specific type of tag, either it could be a category or a normal tag.</em>
        </div>
    </div>
    {{-- Parent --}}
    @if( !$tag->id || $tag->type == 'category')
        <div class="form-group">
            <label class="col-xs-12" for="example-select">Parent</label>
            <div class="col-sm-12">
                <?php 
                $tag->parent_id = $tag->parent_id ? $tag->parent_id : 0;  ?>

                {!! Form::select('parent_id', _tagCategoryList( $parentTags ), $tag->parent_id, ['class' => 'form-control', 'size' => 1] ) !!}

                <em>Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.</em>
            </div>
        </div>
    @endif
    {{-- Submit Button --}}
	<div class="form-group">
		<div class="col-sm-12">
			<button type="submit" class="btn btn-primary btn-square pull-right"><i class="fa fa-plus"></i> {{ trans('admin.tags.save') }}</button>
		</div>
    </div>
{!! Form::close() !!}