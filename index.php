<?php get_header(); ?>

	<div id="primary">

		<?php if ( have_posts() ) : ?>

			<h1 class="page-title">
				<?php
					if ( is_category() ) : single_cat_title() ;
					elseif ( is_tag() ) : single_tag_title() ;
					elseif ( is_author() ) : printf('ผู้เขียน: ' . get_the_author());
					elseif ( is_day() ) : printf('วันที่: ' . get_the_date() );
					elseif ( is_month() ) : printf('เดือน: ' . get_the_date('F Y') );
					elseif ( is_year() ) : printf('ปี: ' . get_the_date('Y'));
					elseif ( is_search() ) : printf('คำค้นหา: ' . get_search_query());
					else : printf('ข่าวสาร');
					endif;
				?>
			</h1>

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content' ); ?>

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
