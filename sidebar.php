<!-- left side bar -->
			<div class="col-3 col-m-3 leftmenu">
				
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
					<!-- <aside class="sidebar col-md-4" role="complementary"> -->
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					<!-- </aside> end sidebar -->
				<?php endif; ?>
				
			</div>
<!-- end of left sidebar -->