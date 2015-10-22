
<!-- Sidebar -->
<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="side-header side-content bg-white-op">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times"></i>
                </button>
                <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                <a class="h5 text-white" href="{{ route('admin.root') }}">
                    <span class="h4 font-w600 sidebar-mini-hide"> Xadmin</span>
                </a>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content">

                {{-- Display Admin Main Menu --}}
                <?php $menuItems = Menu::get('menu-admin')->roots(); ?>
                <ul class="nav-main">
                    @foreach($menuItems as $item)
                        <?php $subMenuClass = $item->hasChildren() ? 'nav-submenu' : ''; ?>
                        <li>
                            <a href="{{ $item->url() }}" class="{{ $item->attributes() != "" ? 'active' : '' }} {{ $subMenuClass }}" data-toggle="{{ $subMenuClass }}">
                            {!! $item->title !!}
                        </a>
                            @if($item->hasChildren())
                                <ul>
                                    @foreach($item->children() as $child)
                                        <li><a href="{{ $child->url() }}">{!! $child->title !!}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->
