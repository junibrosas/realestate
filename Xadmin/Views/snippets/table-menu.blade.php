<div class="block">
    <div class="block-header">
        <div class="block-options">
            <a href="#" class="btn btn-square btn-default btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit Links</a>
        </div>
        <h3 class="block-title">{{ $menu->name }}</h3>
    </div>
    <div class="block-content">
        <div id="expList">
            {{ _buildMenu( $menu->subMenus() ) }}
        </div>
    </div>
</div>
