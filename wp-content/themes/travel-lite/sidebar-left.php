<?php
/* 	Travel Theme's Right Sidebar Area
	Copyright: 2012-2016, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since Travel 1.0
*/
?>
<div id="left-sidebar">
<?php if ( ! dynamic_sidebar( 'sidebar-7' ) ) : ?>
				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e('Meta', 'travel-lite'); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

<?php endif; // end sidebar widget area ?>
</div>