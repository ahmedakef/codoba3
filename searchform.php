     <form class="navbar-form navbar-left" role="search" method="get" action="<?php bloginfo('url'); ?>/">
  <div class="form-group">
    <input type="text" class="form-control todosearch" placeholder="عن ماذا تبحث ؟" name="s"  <?php the_search_query(); ?> />
  </div>
  <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-search"></span></button>
</form>