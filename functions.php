<?php

// featured photo

if ( function_exists('add_theme_support') )
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 150, 150, true );


//remove_admin_login_header

add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}


//pagenation

function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo '<div class="row">
      <div class="col-md-4 col-md-push-5">
       <ul class="pagination pagination-lg">';
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link(1)."'>&laquo;</a></li>";
         if($paged > 1 && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a></li>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? '<li class="active"><a href="">'.$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a></li>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a></li>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>&raquo;</a></li>";
         echo '</ul>
      </div>

</br></div>';
     }
}


/*
register_sidebars(array(
    'name'          => __('Single Post sidebar'),
        'id'            => 'sidebar',          
    'description'   => 'any thing',
    'class'         => '',
    'before_widget' => '<div class="panel-body">',
    'after_widget'  => '</div></div></div>
',
    'before_title'  => '<div class="tagcloudmy">
      <div class="panel panel-default">
        <div class="panel-heading"><h4>',
    'after_title'   => '</h4></div>' ));
*/
// dinamic side bar 

/*
        if(function_exists('register_sidebar'))
    register_sidebar(array('name' => 'sidebar',
        'class'         => '',
        'before_widget' => '<div class="panel panel-default">',
        'after_widget'  => '</div>',    
        'before_title' => '<div class="panel-heading"><h4>',
        'after_title' => '</h4></div>'
    ));

		if(function_exists('register_sidebar'))
	register_sidebar(array('name' => 'sidebar2',
        'class'         => '',
        'before_widget' => '<div class="panel panel-default">',
        'after_widget'  => '</div>',    
        'before_title' => '<div class="panel-heading"><h4>',
        'after_title' => '</h4></div>'
    ));

*/
// whare are you ?? 
/*
  function the_breadcrumb() {
    if (!is_home()) {
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo "</a> » ";
        if (is_category() || is_single()) {
            the_category('title_li=');
            if (is_single()) {
                echo " » ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    }
}
*/
?>