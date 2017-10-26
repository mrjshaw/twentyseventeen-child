<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo twentyseventeen_get_svg( array( 'icon' => 'bars' ) );
		echo twentyseventeen_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'twentyseventeen' );
		?>
	</button>


	<?php 
		/*
		wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) );
	*/
	 ?>

<ul id="top-menu" class="menu">					
<li id="menu-item-logo" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-875"><a href="/blog/"><img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/twentyseventeen-child/img/logo-secondary-red.svg" width="25" height="35"></a></li>
<li id="menu-item-services" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-services"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#services">Services</a></li>
<li id="menu-item-about" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-about"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#about">About</a></li>
<li id="menu-item-blog" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-blog"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/#blog">Blog</a></li>
<li id="menu-item-login" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-demo float-right"><a href="/?lms=1" class="btn btn-outline-primary">Demo Site</a></li>
<li id="menu-item-contact" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-contact float-right"><a href="mailto:contact@learningsystems.ca" style="font-weight: 100;">Contact</a></li>
</ul>

	<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
