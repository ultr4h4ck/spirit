<?php get_header(); ?>

	<div id="primary">

		<?php while ( have_posts() ) : the_post(); ?>

			<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

			<?php the_content(); ?>

		<?php endwhile; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
