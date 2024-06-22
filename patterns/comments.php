<?php
/**
 * Title: comments
 * Slug: kauri/comments
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:comments-title {"showPostTitle":false} /-->

<!-- wp:paragraph {"className":"skip-to-reply","style":{"elements":{"link":{"color":{"text":"var:preset|color|grey"}}}},"textColor":"grey"} -->
<p class="skip-to-reply has-grey-color has-text-color has-link-color"><?php echo __('<a href="#reply-title" data-type="internal" data-id="#reply-title">» Write a comment</a>', 'kauri');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:comment-template -->
<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"20px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"60px"} -->
<div class="wp-block-column" style="flex-basis:60px"><!-- wp:avatar {"size":60,"style":{"border":{"radius":"30px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"className":"comment-meta","style":{"dimensions":{"minHeight":"60px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group comment-meta" style="min-height:60px"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|30"},"dimensions":{"minHeight":""}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center","orientation":"horizontal"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|red"},":hover":{"color":{"text":"var:preset|color|grey"}}}}}} /-->

<!-- wp:comment-date /-->

<!-- wp:comment-edit-link /--></div>
<!-- /wp:group -->

<!-- wp:comment-reply-link /--></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:separator {"className":"is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|30"}}}} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-default" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--30)"/>
<!-- /wp:separator --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments -->