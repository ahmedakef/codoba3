<?php if($comments) : ?>
	<ul class="list-unstyled" id="comments-list">
	  		<?php comments_number('كن أنت أول من يعلق', 'تعليق واحد', 'عدد التعليقات : % '); ?>  <hr>

  		<?php foreach($comments as $comment) : ?>
			<?php $i++; ?>
			<li id="comment-<?php comment_ID(); ?>">
				<div class="row">
					<?php if ($comment->comment_approved == '0') : ?>
					<p>Your comment is awaiting approval</p>			
					<?php endif; ?>

					<div class="col-md-3" style="border-left: 3px rgba(141,141,141,.2) solid;">
						<?php echo get_avatar(get_comment_author_email(), 80); ?>

						<div class="commentauthor">
							<?php if(!get_comment_author_url()) : ?>
							<?php comment_author_link(); ?>
							<?php else : ?>
							<a href="<?php comment_author_url(); ?>" target="_blank"><?php comment_author(); ?></a>
							<?php endif; ?> 
						</div>
						<cite>
						   on <?php comment_date('j-n-Y'); ?>
						   at <?php comment_time(); ?>
						</cite>
					</div>

					<div class="col-md-9">
						<?php comment_text(); ?>
						 <?php echo comment_reply_link(array('depth' => $depth, 'max_depth' => $args['max_depth'])); ?> 
					</div>
				</div>
		</li>
		<?php endforeach; ?>
	</ul>
<?php else : ?>
	<p>كن أنت أول من يعلق :) </p>
<?php endif; ?>


<?php if(comments_open()) : ?>
	<?php if(get_option('comment_registration') && !$user_ID) : ?>
		<p>You must be
			<a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.
		</p><?php else : ?>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		 <?php comment_id_fields(); ?>
			<?php if($user_ID) : ?>
				<p class="text-left">أنت مسجل كـ 
				  <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> , 
				  <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">تسجيل الخروج  </a>
				</p>
			<?php endif; ?>
				<hr/>	
			<div class="form-horizontal">
				<?php if(!$user_ID) : ?>
				<p>
					<div class="form-group">
					    <label for="author" class="col-md-2 control-label input-lg">
					    	<small>اسمك : <?php if($req) echo "*"; ?></small>
					    </label>
					    <div class="col-md-10">
					      <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" class="form-control input-lg"  placeholder="ادخل اسمك :)">
					    </div>
					</div>
				</p>
				<p>
					<div class="form-group">
					    <label for="email" class="col-md-2 control-label input-lg">
					    	<small>البريد الإلكتروني : <?php if($req) echo "*"; ?></small>
					    </label>
					    <div class="col-md-10">
					      <input type="email" name="email" id="email" value="<?php echo $comment_author_email; ?>"  class="form-control input-lg" placeholder="عنوان البريد الإلكتروني :)">
					    </div>
					</div>
				</p>
				<p>
					<div class="form-group">
					    <label for="url" class="col-md-2 control-label input-lg"><small>الموقع : </small></label>
					    <div class="col-md-10">
					      <input type="url" name="url" id="url" value="<?php echo $comment_author_url; ?>" class="form-control input-lg" id="website1" placeholder="ادخل موقعك :)">
					    </div>
					</div>
				</p>
				<?php endif; ?>
				<p>
				 	<div class="form-group">
				   		<label for="inputPassword3" class="col-md-2 control-label input-lg">التعليق :</label>
				   		<div class="col-md-10">
				  			<textarea class="form-control input-lg" rows="3" name="comment" placeholder="التعليق" tabindex="4"></textarea>
				    	</div>
				    </div>
				</p>

				<p>
				 	<div class="form-group">
				  	 	<div class="col-md-3">
							<input name="submit" class="btn btn-info btn-lg btn-block"
								 type="submit" id="submit" tabindex="5" value="إرسال" />
				  		</div>
				  		<div class="col-md-3 col-md-push-1">
    						<button type="reset" class="btn btn-default btn-lg btn-block" value="reset">تفريغ</button>
    					</div>
						<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
					</div>
				</p>
			</div>
			<?php do_action('comment_form', $post->ID); ?>
		</form>
	<?php endif; ?>
<?php else : ?>
	<p>The comments are closed.</p>
<?php endif; ?>






