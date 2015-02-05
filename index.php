<?php get_header(); ?>

<div id="primary">

	<?php if ( have_posts() ) : ?>

		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="item group">

				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<div class="meta"><?php echo get_the_date(); ?></div>
				<div class="excerpt"><?php the_excerpt(); /* the_content(); */?></div>

			</div>

		<?php endwhile; ?>

		<div class="pagination">
			<?php global $wp_query; $big = 99999999; echo paginate_links( array('base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),'format' => '?paged=%#%','current' => max( 1, get_query_var('paged') ),'total' => $wp_query->max_num_pages) ); ?>
		</div>

	<?php else : ?>

		<h1>Nothing Found</h1>

	<?php endif; ?>

</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
