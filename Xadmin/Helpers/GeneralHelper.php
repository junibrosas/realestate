<?php

if ( ! function_exists('_trace'))
{
    /**
     * Display Arrays/Objects Properly
     *
     * @return string
     */

    function _trace($ar, $color = "F00"){
        echo '<pre style="z-index:9999;color:#'.$color.'">';
        print_r($ar);
        echo '</pre><br style="clear:both;" /><br />';
    }
}



if ( ! function_exists('_breadcrumbs'))
{
    /**
     * Return breadcrumbs for each resource methods
     *
     * @return string
     */
    function _breadcrumbs()
    {
        $route = Route::currentRouteName();
        // get after last dot
        $index = substr($route, 0, strrpos($route, '.') + 1) . 'index';
        $breadcrumbs  = '<ol class="breadcrumb push-10-t">';
        $breadcrumbs .= '<li><a href="'.route('admin.root').'"><i class="fa fa-dashboard"></i> '.trans('admin.root').'</a></li>';
        
        // 'root' is route name used to make the application index url separate from the rest of the pages and routes.

        // if not admin root
        if(strpos($route, 'root')  === false)
        {
            $breadcrumbs  .= strpos($route, 'index')  !== false ? '<li class="active">' : '<li>';
            $parent_text   = strpos($route, 'index')  !== false ? trans($route) : trans($index);
            $breadcrumbs  .= strpos($route, 'index')  !== false ? $parent_text : '<a href="'.route($index).'">'.$parent_text.'</a>';
            $breadcrumbs  .= '</li>';
            if(strpos($route, 'index')  === false)
            {
                $breadcrumbs  .= '<li class="active">'.trans($route).'</li>';
            }
        }
        $breadcrumbs .= '</ol>';
        return $breadcrumbs;
    }
}




if ( ! function_exists('_headerTitle'))
{
    /**
     * Return the header title for each page
     *
     * @return string
     */
    function _headerTitle()
    {
        $route = Route::currentRouteName();
        $title = '<h1 class="page-heading">';
        $title .= trans(Route::getCurrentRoute()->getName());
        $title .= '</h1>';
        return $title;
    }
}
if ( ! function_exists('instaFlash')){
    function instaFlash( $title = null, $message = null ){

        $flash = app('App\Acme\InstaFlash');

        if(func_num_args() == 0){
            return $flash;
        }

        $flash->info( $title, $message );
    }
}

if ( ! function_exists('_buildMenu')){
    function _buildMenu( $menu ){
        echo '<ol class="list-nested">';
        foreach ($menu as $submenu) {
            echo '<li>'.$submenu->name.'</li>';
            if($submenu->hasChildren()){
                _buildMenu($submenu->subMenus());
            }
        }
        echo '</ol>';
    }
}