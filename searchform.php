<form  role="search" method="get" action="<?php bloginfo('url'); ?>/">
    <div class="input-group">
      <input type="search" class="form-control"   placeholder="عن ماذا تبحث ؟" name="s"  <?php the_search_query(); ?> />
      <span class="input-group-btn">
        <button class="btn btn-info" type="button"><span class="glyphicon glyphicon-search"></span></button>
      </span>
    </div>
</form>


