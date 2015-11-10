@extends('layouts.property')

@section('content')
<div id="content" class="col-lg-7 col-md-6 col-sm-6 col-xs-12 clearfix">
                        
    @forelse($properties as $post)

        {{-- Traditionally include the variable file so that it could be shared to this view --}}
        <?php include base_path() .'/resources/views/snippets/variables-property.blade.php'; ?>

        @include('snippets.property-single-large')

    @empty
        <div class="text-center">
            <h2><b>No available properties</b></h2>
        </div>
    @endforelse

    <div class="pagination_wrapper clearfix">
        <!-- Pagination Normal -->
        {!! $properties->render() !!}

    </div>

    </div><!-- end content -->
@stop