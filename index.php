<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>
  " />
  <title><?php wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo( 'description' ); ?>
  ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Le styles -->
  <link href="<?php echo get_template_directory_uri(); ?>
  /css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>
  /css/bootstrap-responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>
  " type="text/css" media="screen" />
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <![endif]-->

</head>

<body>

  <div class="container">

    <div class="row">
      <div class="span12">
        <h1>

          <!-- Name of Blog and Link to Homepage from Dashboard > Settings > General -->
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>

        </h1>

        <h4>

          <!-- Shows blog description from Dashboard > Settings > General -->
          <?php bloginfo( 'description' ); ?>

        </h4>
      </div>
    </div>

    <div class="row">
      <div class="span12">

        <!-- Shows a custom menu made in Dashboard > Appearance > Menu  -->
        <?php wp_nav_menu( array( 'menu_class' =>'nav nav-pills')); ?>

      </div>
    </div>

    <div class="row">
      <div class="span8">

        <!-- Shows the title and content from posts and pages depending on which was requested. Dashbord > Posts / Pages -->
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>

      </div>

      <div class="span4">
        <div class="well">

          <!-- Shows what you you have in the 'right sidebar' widget. Dashboard > Appearance > Widgets -->
          <?php if ( dynamic_sidebar('home_right_1') ) : else : endif; ?>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="span12">
        <div class="well">

          <!-- Shows what you you have in the 'footer' widget. Dashboard > Appearance > Widgets -->
          <?php if ( dynamic_sidebar('footer_1') ) : else : endif; ?>

        </div>
      </div>
    </div>

  </div>
  <!-- /container -->

  <!-- Le javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>

</body>
</html>