<?php get_header(); ?>



<?php 
$curauth = (isset($_GET['author_name'])) ?
 get_user_by('slug', $author_name)
  : get_userdata(intval($author));
?>



<div class="row authorinfo">
  <div class="col-md-6 col-md-offset-3"><br/>
    <h2><?php echo $curauth->nickname; ?></h2>
    <p><?php echo $curauth->description; ?></p>
  </div>
  <div class="col-md-2 authourright"><br/>
    <p>
      <img src="<?php bloginfo('template_url'); ?>/images/log2.png" class="img-circle img-thumbnail authorimg" alt="<?php echo $curauth->nickname; ?>" title="<?php echo $curauth->nickname; ?>">
    </p>
    <p class="links">
      <a href="<?php echo $curauth->user_url; ?>"><span class="glyphicon glyphicon-envelope"></span></a>
      <a href=""><span class="glyphicon glyphicon-home"></span></a>
      <a href=""><span class="glyphicon glyphicon-thumbs-up"></span></a>
    </p>
  </div>
</div>

<?php get_sidebar(); ?>

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
<p>المعذرة, ما تبحث عته غير متوفر هنا</p>
<?php endif; ?>



</div>







  <?php kriesi_pagination();?>

<?php get_footer(); ?>


<!-- <img data-src="holder.js/300x200" alt="قوانين كبلر" src="http://i.imgur.com/FzGC0ezl.jpg"> -->