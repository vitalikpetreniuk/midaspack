<?php
add_filter('navigation_markup_template', function ($template) {
    return '
	<nav class="mt-[30px] pagination %1$s">
		<div class="nav-links  flex justify-center items-center">%3$s</div>
	</nav>';

});

add_filter('bcn_breadcrumb_title', 'my_breadcrumb_title_swapper', 3, 10);
function my_breadcrumb_title_swapper($title, $type, $id)
{
    if (in_array('home', $type)) {
        $title = __('Home', 'midas');
    }
    return $title;
}