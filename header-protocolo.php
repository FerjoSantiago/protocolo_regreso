<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/images/logos/favicon_iuv.png" />
	<title><?php the_title(); ?></title>

	<?php wp_head(); ?>

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/css/masterclass.css">

	<script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId            : '267745534224504',
				autoLogAppEvents : true,
				xfbml            : true,
				version          : 'v6.0'
			});
		};
	</script>
	<script async defer src="https://connect.facebook.net/es_LA/sdk.js"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-75162789-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-75162789-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments)};
	  gtag('js', new Date());

	  gtag('config', 'UA-75162789-1');
	</script>
</head>
<body>
	<nav class="navbar is-iuv" role="navigation" aria-label="main navigation">
		<div class="navbar-end">
			<div class="navbar-item">
				<div class="level">
					<div class="level-right">
						<div class="level-item">
							<div class="columns is-mobile">
								<div class="column">
									<a href="<?= ot_get_option('facebook'); ?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/icons/facebook_menu.png" alt = "Facebook IUV"></a>
								</div>
								<div class="column">
									<a href="<?= ot_get_option('twitter'); ?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/icons/twitter_menu.png" alt = "Twitter IUV"></a>
								</div>
								<div class="column">
									<a href="<?= ot_get_option('instagram'); ?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/icons/instagram_icon.png" alt = "Instagram IUV"></a>
								</div>
								<div class="column">
									<a href="<?= ot_get_option('youtube'); ?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/icons/youtube_icon.png" alt = "Youtube IUV"></a>
								</div>
								<div class="column">
									<a href="<?= ot_get_option('linkedin'); ?>" target="_blank"><img src="<?= get_template_directory_uri(); ?>/images/icons/linkedin_menu.png" alt = "Linkedin IUV"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>