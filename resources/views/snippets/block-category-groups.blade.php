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

{{-- <div class="widget clearfix">
	<div class="title"><h3><i class="icon-rent"></i> For Rent</h3></div>
	<ul class="real-estate-cats-widget" data-effect="slide-left">
        <li><a href="#">Housing (15)</a>
            <ul>
                <li><a href="#">Apartment</a></li>
                <li><a href="#">Villa</a></li>
                <li><a href="#">Summerhouse</a></li>
                <li><a href="#">Family House</a></li>
            </ul>
        </li>
        <li><a href="#">Workplace (65)</a>
            <ul>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Apartment</a></li>
                <li><a href="#">Resort</a></li>
                <li><a href="#">Emporium</a></li>
                <li><a href="#">Arable Field</a></li>
                <li><a href="#">Land</a></li>
            </ul>
        </li>
    </ul>
</div> --}}<!-- end widget -->
