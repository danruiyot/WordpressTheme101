<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/plugins/Ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/plugins/animate-css/animate.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/plugins/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/popper.min.js"></script>
	<script src="https://code.jquery.com/jquery-git.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/plugins/mixitup/dist/mixitup.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/plugins/SyoTimer/build/jquery.syotimer.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/pjs/script.js"></script>
	
	<?php wp_head() ?>
</head>
 
<body <?php body_class(); ?> id="body">
<header class="navigation">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- header Nav Start -->
				<nav class="navbar">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a class="" href="<?php echo home_url(); ?>">
							<?php if ( has_custom_logo() ) : ?>
								<div class="img-responsive"><?php the_custom_logo(); ?></div>
								<?php else : ?>
									<a class="navbar-brand "  href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
								<?php endif; ?>
							</a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
							<?php wp_list_pages( '&title_li=' ); ?>

							</ul>
							
							</div><!-- /.navbar-collapse -->
							</div><!-- /.container-fluid -->
						</nav>
					</div>
				</div>
			</div>
			</header><!-- header close -->


<?php if (  is_front_page() && ! is_home() ) : ?>
			<h1 class="site-title">
			<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php

if ( is_active_sidebar( 'custom_header_position' ) ) : ?>
<div id="header-widget-area" class="animated fadeInUp block" role="complementary">
<?php dynamic_sidebar( 'custom_header_position' ); ?>
</div>
<?php endif; ?>

			</div>
		</div>
	</div>
</section>
			</h1>
		<?php else : ?>
<section class="page-title bg-2">
  <div class="container">
  	<?php #the_post_thumbnail(); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="block">
		<h1><?php the_title() ?></h1>

        </div>
      </div>
    </div>
  </div>
</section>
		<?php endif; ?>
<br>
<br>
<br>
<br>

<div class="container">
<?php //nugen_post_thumbnail(); ?>