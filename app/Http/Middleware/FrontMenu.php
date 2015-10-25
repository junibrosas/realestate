<?php

namespace App\Http\Middleware;

use Closure;
use Menu;

class FrontMenu
{
    public function handle($request, Closure $next)
    {
        Menu::make('menu-front', function($menu) {
            $home = $menu->add('Home', route('front.index') )
                ->icon('fa fa-home', 'fa')
                ->prependIcon();

            $properties = $menu->add( trans( 'front.properties' ) , route('front.properties') )
                ->prependIcon();
        });

        return $next($request);
    }
}
