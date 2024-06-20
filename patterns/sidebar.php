<?php
/**
 * Title: Sidebar
 * Slug: kauri/sidebar
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"backgroundColor":"background-secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-secondary-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /-->

<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php esc_html_e( 'Recent Posts', 'kauri' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:latest-posts /-->

<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php esc_html_e( 'Recent Comments', 'kauri' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:latest-comments {"displayAvatar":false,"displayDate":false,"displayExcerpt":false} /-->

<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php esc_html_e( 'Categories', 'kauri' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:categories /-->

<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php esc_html_e( 'Archives', 'kauri' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:archives /--></div>
<!-- /wp:group -->