<?php get_header(); ?>

<div class="row sss">
  <h1 class="text-center"><ul> <?php wp_get_archives(); ?> </ul></h1>
</div>

  <?php get_sidebar(); ?>


<div class="row" style="padding:60px;">




<?php if(have_posts()) : ?>
   <?php while(have_posts()) : the_post(); ?>


    <div class="col-md-3">
    <div class="thumbnail">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(array()); ?></a>
      <div class="caption">
        <a href="<?php the_permalink(); ?>"><h3 class="text-center"><?php the_title(); ?></h3></a>
        <p><?php the_content(); ?></p>
        <p><?php the_category(', ') ?></p>
      </div>
    </div>
    </div>



   <?php endwhile; ?>
<?php else : ?>
<p>المعذرة, ما تبحث عته غير متوفر هنا</p>
<?php endif; ?>



</div>








<div class="row">
      <div class="col-md-6 col-md-push-2">
       <ul class="pagination pagination-lg">
          <li><a href="#">&raquo;</a></li>
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&laquo;</a></li>
        </ul>
      </div>
</div>

<?php get_footer(); ?>


<!-- <img data-src="holder.js/300x200" alt="قوانين كبلر" src="http://i.imgur.com/FzGC0ezl.jpg"> -->