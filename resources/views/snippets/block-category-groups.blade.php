<?php
use Xadmin\Repositories\TagRepo;
$tagRepo = new TagRepo();
$parentCategories = $tagRepo->parentCategories();
?>

<div class="widget cats_widget clearfix">
	{{-- <div class="title"><h3><i class="icon-sale"></i> For Sale</h3></div> --}}
    <div class="title"><h3>Categories</h3></div>
	<ul class="real-estate-cats-widget" data-effect="slide-left">
        @forelse($parentCategories as $parentCat)
            <?php $subCats = $parentCat->subCategories; ?>
            @if(count($subCats) > 0)
                <li><a href="{{ route('front.category') .'/'. $parentCat->slug }}"> <b>{{ $parentCat->name }}</b> </a>
                    <ul>
                        @forelse( $subCats as $subCat )
                            <?php $totalPosts = $tagRepo->getTotalCategoryPosts( $subCat->id ) ?>
                            <li><a href="{{ route('front.category') .'/'. $parentCat->slug .'/'. $subCat->slug }}">{{ $subCat->name }} ({{ $totalPosts }})</a></li>
                        @empty 

                        @endforelse
                    </ul>
                </li>
            @endif
        @empty

        @endforelse
    </ul>
</div><!-- end widget -->
