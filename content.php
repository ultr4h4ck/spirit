<div class="item group">

	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<div class="meta"><?php echo get_the_date(); ?></div>
	<div class="excerpt"><?php the_excerpt(); /* the_content(); */?></div>

</div>