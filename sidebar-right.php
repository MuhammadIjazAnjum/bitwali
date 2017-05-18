<?php 
/*
sidebar-right
template for widget

*/


?>
<!-- right side bar -->
			<div class="col-3 col-m-12">
				<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
					<!-- <aside class="sidebar col-md-4" role="complementary"> -->
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					<!-- </aside> end sidebar -->
				<?php endif; ?>

					<!-- <h2>Time Widget</h2>
					<p>the content of time widget.</p>
					<h2>Box Widget</h2>
					<p>Modal Box content.</p> -->
				
			</div> 
		<!-- right side bar -->	