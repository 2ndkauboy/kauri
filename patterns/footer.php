<?php
/**
 * Title: footer
 * Slug: kauri/footer
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|80"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"30px"},"blockGap":"var:preset|spacing|20"},"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-grey-color has-text-color has-link-color" style="padding-top:80px;padding-bottom:30px"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
			<p>&copy; <?php echo date( 'Y' ); ?>&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:site-title {"style":{"typography":{"fontSize":"0.93rem"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontFamily":"pt-sans"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
		<p><?php echo wp_kses_post( __( 'Proudly powered by <a href="https://wordpress.org/">WordPress</a>', 'kauri' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">
			<?php echo wp_kses_post( __( 'Theme: Kauri by <a href="https://kau-boys.com">Bernhard Kau</a>, based on Waipoua by <a href="https://www.elmastudio.de/en/">Elmastudio</a>', 'kauri' ) ); ?>
		</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div id="to-top" class="wp-block-group"><!-- wp:navigation {"ref":2058,"textColor":"grey"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey"} -->
<p class="has-grey-color has-text-color has-link-color">
			<a href="#top"><?php echo esc_html__( 'Top', 'kauri' ); ?> ↑</a>
		</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->