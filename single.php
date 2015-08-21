<?php get_header(); ?>




<?php if(have_posts()) : ?>
   <?php while(have_posts()) : the_post(); ?>




<div class="row" style="background-color: #E8F0F5;">
  


<div class="col-md-9 the-post">

    <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h3><?php the_title(); ?></h3>

        </div>
        <div class="panel-body"><p><?php the_content(); ?></p></div>

        <div class="panel panel-default singpanbotton">
          <div class="panel-body">
            <span>هذا الموضوع يتعلق بــ :  </span><span><?php the_tags(''); ?></span>
          </div>
        </div>
    </div>

        <div class="panel panel-default">
        <div class="panel-heading"><h4>التعليقات : </h4></div>
        <div class="panel-body">
             <?php comments_template(); ?> 
        </div>  
      </div>



</div>

  <div class="col-md-3 text-center leftsidebar">
      <div class="panel panel-default">
        <div class="panel-heading"><h4>ابحث  </h4></div>
        <div class="panel-body">
              <?php include TEMPLATEPATH . '/searchform.php'; ?>
        </div>
      </div>



      <div class="panel panel-default">
        <div class="panel-heading"><h4>معلومات عن الإنفوجرافيك</h4></div>
        <div class="panel-body text-right">
            <ul class="postifooo">
              <li><span class="glyphicon glyphicon-user"></span>المشارك : <?php the_author_posts_link(); ?></li>
              <li><span class="glyphicon glyphicon-time"></span>  <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></li>
              <li><span class="glyphicon glyphicon-tasks"></span><?php the_category(', ') ?></li>
              <li><span class="glyphicon glyphicon-comment"></span>  <?php comments_number('0', '1', '%'); ?> ترك تعليقا   </li>
              <li><span class="glyphicon glyphicon-tree-deciduous"></span>المصمم :
                  <a href="<?php echo get_post_meta($post->ID, 'رابط المصمم', true);?>">
                    <?php echo get_post_meta($post->ID, 'اسم المصمم', true);?>
                  </a>
              </li>
              <li><span class="glyphicon glyphicon-grain"></span>الجهة الراعية :
                  <a href="<?php echo get_post_meta($post->ID, 'رابط الجهة الراعية', true);?>">
                    <?php echo get_post_meta($post->ID, 'اسم الجهة الراعية', true);?>
                  </a>
              </li>
            </ul>
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




  </div>



</div>



   <?php endwhile; ?>
<?php else : ?>
<p>المعذرة, ما تبحث عته غير متوفر هنا</p>
<?php endif; ?>




<?php get_footer(); ?>
