<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//DE" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="de">
<head profile="http://gmpg.org/xfn/11">
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
   	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 
	<title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/media/favicon.png" type="image/png" />
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/media/favicon.png" type="image/png" />


	<?php wp_head(); ?>
	
</head>
<body>
 
<div id="header" class="margin-bottom-xlarge">

	<div id="header-fixed">

		<div class="wrapper">

			<div id="logo">
				<a href="<?php bloginfo('url'); ?>" title="Jugendrotkreuz">
					<img class="img-responsive" title="Jugendrotkreuz" src="<?php echo get_stylesheet_directory_uri(); ?>/media/jrk-logo-rgb.png">
				</a>
			</div>

			<div id="call2action">

				<div id="menu">
					<div class="c2a-menu">
						<span class="c2a-menu-title">Menü</span>
						<span class="c2a-icon-con">
							<svg role="img" class="sprite show sprite-menu" aria-labelledby="sprite-menu">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/media/spritemap.svg#sprite-menu"></use>
							</svg>
							<svg role="img" class="sprite sprite-close" aria-labelledby="sprite-close">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/media/spritemap.svg#sprite-close"></use>
							</svg>
						</span>
					</div>
					<div class="c2a-menu-sub">
						<?php if ( is_active_sidebar( 'jrk-menu' ) ) : dynamic_sidebar( 'jrk-menu' ); endif; ?>
					</div>
				</div>

				<div id="social">
					<a href="https://de-de.facebook.com/jrkbaden/" target="_blank" class="c2a-icon-con">
						<svg role="img" class="c2a-icon" aria-label="zum Facebook-Profil">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/media/spritemap.svg#sprite-facebook"></use>
						</svg>
					</a>
					<a href="https://www.instagram.com/jrkbaden/" target="_blank" class="c2a-icon-con">
						<svg role="img" class="c2a-icon" aria-label="zum Instagram-Profil">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/media/spritemap.svg#sprite-instagram"></use>
						</svg>
					</a>
				</div>

				<div class="suche">
					<form role="search" method="get" id="searchform" class="searchform" action="" _lpchecked="1">
						<input type="text" value="" name="s" id="s" placeholder="Suche...">
						<input type="submit" id="searchsubmit" value="Los">
					</form>
				</div>

			</div>
			
			<div id="minibanner"><?php if ( is_front_page() && is_active_sidebar( 'jrk-minibanner' ) ) : dynamic_sidebar( 'jrk-minibanner' ); endif; ?></div>

		</div>
	
	</div>
	
	<div id="banner"><?php if ( is_front_page() && is_active_sidebar( 'jrk-banner' ) ) : dynamic_sidebar( 'jrk-banner' ); endif; ?></div>

</div>

<!-- Start of Rocket.Chat Livechat Script -->
	<script type="text/javascript">
	(function(w, d, s, u) {
		w.RocketChat = function(c) { w.RocketChat._.push(c) }; w.RocketChat._ = []; w.RocketChat.url = u;
		var h = d.getElementsByTagName(s)[0], j = d.createElement(s);
		j.async = true; j.src = 'https://chat.jrk-baden.de/livechat/rocketchat-livechat.min.js?_=201903270000';
		h.parentNode.insertBefore(j, h);
	})(window, document, 'script', 'https://chat.jrk-baden.de/livechat');
	</script>
<!-- End of Rocket.Chat Livechat Script -->

<div class="wrapper">	
