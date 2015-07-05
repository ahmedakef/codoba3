<?php get_header(); ?>


<!--<div class="row" style="padding:4px; margin-top:10px;"></div> -->



<div class="row">


<div class="col-md-9" style="padding:60px;">


<?php if(have_posts()) : ?>
   <?php while(have_posts()) : the_post(); ?>


    <div class="col-md-4">
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
<h1 style="padding-bottom:60px;">المعذرة, ما تبحث عته غير متوفر هنا</h1>
<?php endif; ?>



 </div>


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