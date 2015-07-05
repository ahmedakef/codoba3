<?php get_header(); ?>



<div class="row sss">
     <div class="col-md-12" role="alert"> 
        <span class="sworrd" >أنت تبحث عن  :   " <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1");
         $key = wp_specialchars($s, 1);
          $count = $allsearch->post_count; _e(''); 
          _e('<span class="search-terms">'); echo $key;
           _e('</span>'); _e(' " <span class="results" style="float:left;"> ');
             _e('عدد النتائج : '); echo $count . ' </span>'; wp_reset_query();
             ?> </span>
    </div>
</div>


<div class="row" style="padding:80px;">




<?php if(have_posts()) : ?>
   <?php while(have_posts()) : the_post(); ?>


    <div class="col-md-3">
    <div class="thumbnail">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(array()); ?></a>
      <div class="caption">
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
        <p><a href="#" class="btn btn-primary" role="button">أعجبني</a>
        <span class="glyphicon glyphicon-eye-open pull-left"> 35</span>
        </p>
        <p style="margin-bottom:-5px;"><?php the_category(', ') ?></p>
      </div>
    </div>
    </div>



   <?php endwhile; ?>
<?php else : ?>
<p style="font-size:35px;">المعذرة, ما تبحث عته غير متوفر هنا.</p>
<?php endif; ?>



</div>
  

  <?php kriesi_pagination();?>


<?php get_footer(); ?>


