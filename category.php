<?php get_header(); ?>

<div class="row sss">
  <h1 class="text-center"><?php single_cat_title(); ?></h1>
</div>

  <?php get_sidebar(); ?>


<div class="row" style="padding:60px;">




<?php if(have_posts()) : ?>
   <?php while(have_posts()) : the_post(); ?>


    <div class="col-md-3 col-sm-4 col-xs-6">
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





  <?php kriesi_pagination();?>


<?php get_footer(); ?>


<!-- <img data-src="holder.js/300x200" alt="قوانين كبلر" src="http://i.imgur.com/FzGC0ezl.jpg"> -->