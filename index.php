<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="row" style="padding:80px; padding-top:50px;">

  <?php if(have_posts()) : ?>
     <?php while(have_posts()) : the_post(); ?>


      <div class="col-md-3 col-sm-4 col-xs-6">
      <div class="thumbnail">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(array()); ?></a>
        <div class="caption">
          <h3><?php the_title(); ?></h3>
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