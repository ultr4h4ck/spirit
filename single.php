<?php get_header(); ?>

	<div id="primary" class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

			<p class="meta">วันที่: <?php the_date(); ?> หมวดหมู่: <?php the_category(', ') ?> <?php the_tags( 'คำสำคัญ: ', ', ', ''); ?></p>

			<?php the_content(); ?>

			<?php comments_template(); ?>

		<?php endwhile; ?>

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
