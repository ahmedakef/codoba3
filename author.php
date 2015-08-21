<?php get_header(); ?>



<?php 
$curauth = (isset($_GET['author_name'])) ?
 get_user_by('slug', $author_name)
  : get_userdata(intval($author));
?>



<?php get_sidebar(); ?>

<div class="row"  style="padding-top:80px;">
  <div class="col-md-3 authorinfo">
    <p>
      <?php echo get_avatar( get_the_author_email(), '80' ); ?>
    </p>
    <h2 class="text-center"><?php echo $curauth->nickname; ?></h2>
    <p class="links">
      <a href="<?php echo $curauth->user_url; ?>"><span class="glyphicon glyphicon-envelope"></span></a>
      <a href=""><span class="glyphicon glyphicon-home"></span></a>
      <a href=""><span class="glyphicon glyphicon-thumbs-up"></span></a>
    </p>
    <p><?php echo $curauth->description; ?></p>
  </div>



<div class="col-md-9">


<?php if(have_posts()) : ?>
   <?php while(have_posts()) : the_post(); ?>


    <div class="col-md-3 col-sm-4 col-xs-6">
    <div class="thumbnail">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(array()); ?></a>
      <div class="caption">
        <a href="<?php the_permalink(); ?>"><h3 class="text-center"><?php the_title(); ?></h3></a>
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

</div>




  <?php kriesi_pagination();?>

<?php get_footer(); ?>


<!-- <img data-src="holder.js/300x200" alt="قوانين كبلر" src="http://i.imgur.com/FzGC0ezl.jpg"> -->