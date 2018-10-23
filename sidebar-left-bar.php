<form role="search" method="get" id="searchform" class="searchform" action="<?php echo get_bloginfo( 'wpurl' );?>">
				<div>
					<label class="screen-reader-text" for="s">Search for:</label><br />
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="Search" />
				</div>
</form>
<ul>
  <?php dynamic_sidebar( 'leftbar' ); ?>
</ul>
