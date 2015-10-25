<section class="post-wrapper-top dm-shadow clearfix">
    <div class="container">
        <div class="post-wrapper-top-shadow">
            <span class="s1"></span>
        </div>
        <div class="col-lg-12">
            {!! breadcrumbs() !!}
            <h2>
                @if(isset($pageTitle))
                    {{ $pageTitle }}
                @else
                    {{ trans(Route::getCurrentRoute()->getName()) }}
                @endif
            </h2>
        </div>
    </div>
</section><!-- end post-wrapper-top -->

<?php 
function breadcrumbs()
    {
        $route = Route::currentRouteName();
        // get after last dot
        $index = substr($route, 0, strrpos($route, '.') + 1) . 'index';
        $breadcrumbs  = '<ul class="breadcrumb">';
        //$breadcrumbs .= '<li><a href="'.route('front.index').'"><i class="fa fa-home"></i> '.trans('front.index').'</a></li>';
        
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
        $breadcrumbs .= '</ul>';
        return $breadcrumbs;
    }
?>