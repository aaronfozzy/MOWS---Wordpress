<?php
  $blog_id = get_current_blog_id();
  $templateDirectory = get_template_directory();
  $childTemplateDirectory = get_stylesheet_directory_uri();
  $siteBaseUrl = get_bloginfo('url');
  if(have_rows('page_title')){
    $finalTitle = get_the_field('page_title');
  }else{
    $finalTitle = get_the_title();
  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo( 'charset' );?>">
		<title><?php echo $finalTitle; ?></title>
		<meta name="description" content="">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" media="screen" href="<?php bloginfo('template_directory');?>/build/css/styles.css">
    <link rel="stylesheet" media="screen" href="<?php echo get_stylesheet_directory_uri(); ?>/build/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js" defer></script>
    <!--Start of Zendesk Chat Script-->
    <script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
    $.src="https://v2.zopim.com/?5k1Qu29R0YY3tDNoiNF7xNlteYJnIJFT";z.t=+new Date;$.
    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    </script>
    <!--End of Zendesk Chat Script-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class="mainholder current-site-<?php echo $blog_id; ?>">
			<header>
				<?php
          include $templateDirectory . '/includes/panels/header/navigation-menus/menu-7.php';
        ?>
			</header>
