<?php 
/**
 * page.php
 *
 * The template displays all pages.
 */
?>
<?php get_header();?>
<!-- content row-->
	<div class="row">
		<!-- left side bar -->
			<?php get_sidebar();?>
		<!-- end of left sidebar -->
		<!-- main content -->
			<div class="col-6 col-m-9 maincontent">
				<?php  while( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!-- Article header -->
						<header class="entry-header"> <?php
							// If the post has a thumbnail and it's not password protected
							// then display the thumbnail
							if ( has_post_thumbnail() && ! post_password_required() ) : ?>
								<figure class="entry-thumbnail"><?php the_post_thumbnail(); ?></figure>
							<?php endif; ?>
							<h1><?php the_title(); ?></h1>
						</header> <!-- end entry-header -->

						<!-- Article content -->
						<div class="entry-content">
							<?php the_content(); 


							// wp_link_pages(); ?>
						</div> <!-- end entry-content -->

						<!-- Article footer -->
						<footer class="entry-footer">
							<?php 
								//if ( is_user_logged_in() ) {
								//	echo '<p>';
								//	edit_post_link( __( 'Edit', 'bitwali' ), '<span class="meta-edit">', '</span>' );
								//	echo '</p>';
								//}
							?>
						</footer> <!-- end entry-footer -->
					</article>
					<?php //comments_template(); ?>
				<?php endwhile; ?>
	
				
					<?php //bitwali_paging_nav(); ?>
				
			</div><!-- </div> end main-content -->
		<!-- right side bar -->
			<?php get_sidebar('right')?>
		<!-- right side bar -->	
	</div>
<!-- end of content row -->
<?php get_footer();?>
