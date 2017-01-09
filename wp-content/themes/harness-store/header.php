<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'haste-store' ); ?></span>
		</div>
	</a>

	<header id="header" role="banner">
		<?php
			$header_image = get_header_image();
			if ( ! empty( $header_image ) ) :
		?>
			<div class="page-header">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url( $header_image ); ?>" height="<?php esc_attr_e( $header_image->height ); ?>" width="<?php esc_attr_e( $header_image->width ); ?>" alt="" />
				</a>
			</div><!-- .site-header-->
		<?php endif; ?>
		<div id="main-navigation" class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
					<span class="sr-only"><?php _e( 'Toggle navigation', 'haste-store' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-brand">
						<?php echo is_home() ? '<h1 class="site-title">' : '<span class="h1 site-title">' ; ?>
							<?php odin_the_custom_logo(); ?>
						<?php echo is_home() ? '</h1>' : '</span>' ; ?>
					</div>
				</div>
				<nav class="collapse navbar-collapse navbar-main-navigation navbar-left" role="navigation">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>
				</nav><!-- .navbar-collapse -->

                <?php if( is_woocommerce_activated() ) : ?>
                        <?php if ( get_option( 'users_can_register' ) ) : ?>
                            <nav class="navbar-right">
                                <?php if ( is_user_logged_in() ) : ?>

								<p class="navbar-text">
									<?php
										$user = wp_get_current_user();
										$username = $user->user_firstname;
									    printf( esc_html__( 'Hello, %s.', 'my-text-domain' ), $username );
									?>
								</p>

								<div class="btn-group" role="group" aria-label="login">
									<a class="btn btn-default navbar-btn" href="<?php echo wp_logout_url( get_permalink() ); ?>"><?php _e('Logout', 'haste-store'); ?></a>

									<div class="btn-group" role="group">
										<button class="btn btn-default navbar-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<?php _e('My details', 'haste-store'); ?> <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li>
												<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php _e('My account', 'haste-store'); ?></a>
											</li>
											<li>
												<a href="<?php echo wc_get_endpoint_url( 'orders', '', get_permalink( get_option('woocommerce_myaccount_page_id') ) );?>"><?php _e('My orders', 'haste-store'); ?></a>
											</li>
										</ul>
									</div>
								</div>

			                    <?php else : ?>

								<p class="navbar-text">
									<?php
								    	_e('Hello, guest user.', 'haste-store');
									?>
								</p>
								<div class="btn-group" role="group" aria-label="login">
									<a class="btn btn-outline navbar-btn" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
										<?php _e('Login', 'haste-store')?></a>
									<a class="btn btn-outline navbar-btn" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
										<?php _e('Register', 'haste-store')?></a>
								</div>

            					<button type="button" class="btn btn-primary navbar-btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            						<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                                    <span class="badge"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
            						<span class="sr-only"><?php _e('Cart', 'haste-store')?></span>
            						<span class="caret"></span>
            					</button>
            					<?php odin_header_cart() ?>

                                <?php endif; ?>
                            </nav><!-- .navbar-right -->
                        <?php endif; ?>
                    <?php endif; ?>
			</div><!-- .container-->
		</div><!-- #main-navigation-->
	</header><!-- #header -->

	<div id="wrapper">
		<div class="wrapper-row">

			<?php if( !is_front_page() || !is_home() ) : ?>
				<div class="col-md-12">
			<?php endif; ?>

					<?php do_action( 'odin_content_top' ); ?>

			<?php if( !is_front_page() || !is_home() ) : ?>
				</div>
			<?php endif; ?>
