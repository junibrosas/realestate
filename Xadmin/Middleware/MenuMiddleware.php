<?php

namespace Xadmin\Middleware;

use Closure;
use Menu;
use Hash;

class MenuMiddleware
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure                  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        Menu::make('menu-admin', function($menu) {
            $dashboard = $menu->add('Dashboard', route('admin.root') )
                ->icon('si si-speedometer', 'si')
                ->prependIcon();

            $posts = $menu->add( trans( 'admin.posts.index' ) , route('admin.posts.index') )
                ->icon('si si-note', 'si')
                ->prependIcon();

            $pages = $menu->add( trans('admin.pages.index') , route('admin.pages.index') )
                ->icon('si si-docs', 'si')
                ->prependIcon();

            $Tags = $menu->add( trans( 'admin.tags.index' ) , route('admin.tags.index') )
                ->icon('si si-tag', 'si')
                ->prependIcon();

            $files = $menu->add( trans('admin.files.index') , route('admin.files.index') )
                ->icon('si si-puzzle', 'si')
                ->prependIcon();

            $files = $menu->add( trans('admin.users.index') , route('admin.users.index') )
                ->icon('si si-user', 'si')
                ->prependIcon();

            
        });

        return $next($request);
    }
}