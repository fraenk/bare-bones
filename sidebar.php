				<div role="complementary" itemscope itemtype="http://schema.org/WPSideBar">

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar1' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<div>
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'barebonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>
