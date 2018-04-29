<!-- site_banner.php -->

<div id="site_banner" class="clearfix">
<div id="site_banner_inner">



<?php include( get_template_directory() . '/assets/includes/network.php' ); ?>



<div id="splash">

<a href="/2002/files/2005/06/china_wall_kick.jpg"><img src="/2002/files/2005/06/china_wall_kick-200x150.jpg" alt="The Ball 2002 is kicked over the Great Wall of China on its way to Korea &amp; Japan" title="The Ball 2002 is kicked over the Great Wall of China on its way to Korea &amp; Japan" width="200" height="150" class="size-thumbnail-200 wp-image-482" /></a>

</div><!-- /splash -->



<div id="banner_copy">

<h2>Welcome to <?php bloginfo( 'title' ); if ( is_home() ) { echo ' blog'; } ?></h2>

<p>The Ball 2002 set off across Europe &amp; Asia to uncover the spirit of football and established the legend of The Ball as a powerful symbol for the football community. It is not just any ball, it is <em>The Ball</em>, the star of the beautiful game.</p>

<?php if ( ! is_home() ) { ?>
	<p id="gotoblog"><a href="/2002/blog/">Read the blog &rarr;</a></p>
<?php } ?>

</div><!-- /banner_copy -->



</div><!-- /site_banner_inner -->
</div><!-- /site_banner -->



<div id="cols" class="clearfix">



<?php

// get page list, blank by default
$pagelist = apply_filters( 'theball_pagelist', '' );

// did we get a page list?
if ( $pagelist != '' ) {

	// include it
	include( $pagelist );

}

?>



