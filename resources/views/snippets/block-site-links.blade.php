<div class="widget clearfix">
	<div class="title"><h3>Site Links</h3></div>
	{{-- Display Front Menu --}}
	<?php $menuItems = Menu::get('menu-front')->roots(); ?>
	<ul class="list">
		@forelse($menuItems as $item)
			<?php $subMenuClass = $item->hasChildren() ? 'nav-submenu' : ''; ?>
			<li class="{{ $item->attributes() != "" ? 'active' : '' }} {{ $subMenuClass }}">
				<a href="{{ $item->url() }}">
					{!! $item->title !!}
				</a>
			</li>
		@empty
			<div class="text-center">No Available Links</div>
		@endforelse
	</ul>
</div>