<?php
/**
 * single.php
 *
 * The template for  single post.
 */
?>
echo
<?php get_header(); ?>
<?php get_sidebar();?>

	<div class="col-6 col-m-9 maincontent" >
		<?php while( have_posts() ) : the_post(); ?>
			
			<?php get_template_part( 'content', get_post_format() ); ?>

			<?php //comments_template(); ?>
		<?php endwhile; ?>
	</div> <!-- end main-content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>