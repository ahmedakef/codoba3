<?php get_header(); ?>

<style type="text/css">
  .row{
  background-color: #E8F0F5;
}
</style>



<?php if(have_posts()) : ?>
   <?php while(have_posts()) : the_post(); ?>




<div class="row">
  


<div class="col-md-9 the-post">

    <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3><?php the_title(); ?></h3>
         <!-- small information
             <small>
              <span class="glyphicon glyphicon-user"></span>
              <?php /* the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>
             </small>
  
             <small>
              <span class="glyphicon glyphicon-time"></span>
              <?php the_author_posts_link(); ?>
             </small>
  
  
             <small>
              <span class="glyphicon glyphicon-tasks"></span>
              <?php the_category(', ') ?>
              </small>
  
             <small>
              <span class="glyphicon glyphicon-comment"></span>
              <?php comments_number('0', '1', '%'); */?> ترك تعليقا
             </small>

              <br/>

              <span> <?php the_meta(); ?> </span>
-->

        </div>
        <div class="panel-body"><p><?php the_content(); ?></p></div>

        <div class="panel panel-default singpanbotton">
          <div class="panel-body">
            <span>هذا الموضوع يتعلق بــ :  </span><span><?php the_tags(''); ?></span>
          </div>
        </div>
    </div>

</div>

  <div class="col-md-3 text-center leftsidebar">

      <div class="panel panel-default">
        <div class="panel-heading"><h4>ابحث  </h4></div>
        <div class="panel-body">
          <div id="search" >
              <?php include TEMPLATEPATH . '/searchform.php'; ?>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading"><h4>تابعنا علي : </h4></div>
        <div class="panel-body">
            <ul class="share-buttons">
              <li><a href="https://www.facebook.com/cordobaig" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/Facebook.png"></a></li>
              <li><a href="https://twitter.com/cordobaig" target="_blank" title="Tweet"><img src="<?php bloginfo('template_directory'); ?>/images/Twitter.png"></a></li>
              <li><a href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+"><img src="<?php bloginfo('template_directory'); ?>/images/Google+.png"></a></li>
            </ul>
        </div>
      </div>


      <div class="panel panel-default">
        <div class="panel-heading"><h4>معلومات عن الإنفوجرافيك</h4></div>
        <div class="panel-body text-right">
            <ul class="postifooo">
              <li><span class="glyphicon glyphicon-user"></span><?php the_author_posts_link(); ?></li>
              <li><span class="glyphicon glyphicon-time"></span>  <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></li>
              <li><span class="glyphicon glyphicon-tasks"></span><?php the_category(', ') ?></li>
              <li><span class="glyphicon glyphicon-comment"></span>  <?php comments_number('0', '1', '%'); ?> ترك تعليقا   </li>
            </ul>
            <?php the_meta(); ?>
        </div>
      </div>

<?php dynamic_sidebar(); ?> 
<?php dynamic_sidebar('Sidebar2'); ?> 

  </div>



</div>



   <?php endwhile; ?>
<?php else : ?>
<p>المعذرة, ما تبحث عته غير متوفر هنا</p>
<?php endif; ?>








<?php get_footer(); ?>


<!-- <img data-src="holder.js/300x200" alt="قوانين كبلر" src="http://i.imgur.com/FzGC0ezl.jpg"> -->