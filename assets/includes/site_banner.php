<?php
/**
 * Site Banner Template.
 *
 * @since 1.0.0
 * @package The_Ball_2002
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<!-- assets/includes/site_banner.php -->
<div id="site_banner" class="clearfix">

	<div id="site_banner_inner">

		<?php $network_black = locate_template( 'assets/includes/network.php' ); ?>
		<?php if ( $network_black ) : ?>
			<?php load_template( $network_black ); ?>
		<?php endif; ?>

		<div id="splash">

			<a href="/2002/files/2005/06/china_wall_kick.jpg"><img src="/2002/files/2005/06/china_wall_kick.jpg" alt="The Ball 2002 is kicked over the Great Wall of China on its way to Korea &amp; Japan" title="The Ball 2002 is kicked over the Great Wall of China on its way to Korea &amp; Japan" width="200" height="150" class="size-thumbnail-200 wp-image-482" /></a>

		</div><!-- /splash -->

		<div id="banner_copy">

			<h2><?php echo sprintf( __( 'Welcome to %s', 'theball2002' ), get_bloginfo( 'title' ) ); ?></h2>

			<p>The Ball 2002 set off across Europe &amp; Asia to uncover the spirit of football and established the legend of The Ball as a powerful symbol for the football community. It is not just any ball, it is <em>The Ball</em>, the star of the beautiful game.</p>

			<?php if ( ! is_home() ) { ?>
				<p id="gotoblog"><a href="/2002/blog/"><?php echo sprintf( __( 'Read the blog %s', 'theball2002' ), '&rarr;' ); ?></a></p>
			<?php } ?>

		</div><!-- /banner_copy -->

	</div><!-- /site_banner_inner -->

</div><!-- /site_banner -->

<div id="cols" class="clearfix">
<div class="cols_inner">

	<?php $page_list = locate_template( 'assets/includes/page_list.php' ); ?>
	<?php if ( $page_list ) : ?>
		<?php load_template( $page_list ); ?>
	<?php endif; ?>
