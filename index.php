<?php
	$url = esc_url_raw( trailingslashit( home_url() ) );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns:fb='http://ogp.me/ns/fb#'>
    <head>
        <meta charset='<?php bloginfo('charset'); ?>'>
				<meta name='viewport' content='minimum-scale=1, width=device-width, initial-scale=1, shrink-to-fit=no' />
				<meta name='author' content='Đorđe G.' />
        <?php wp_head(); ?>
        <!--<meta property='og:type' content='website'>
        <meta property='og:description' content='Wordpress and React.js Boilerplate' />
        <meta property='og:image' content='CHANGE_ME' />
        <meta property='og:image:width' content='CHANGE_ME' />
        <meta property='og:image:height' content='CHANGE_ME' />-->
        <meta property='og:url' content='<?php echo($url); ?>'>
        <meta property='og:title' content='Example theme'>
				<link href='https://fonts.googleapis.com/css?family=Roboto&display=swap' rel='stylesheet' />
				<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
		<body <?php body_class(); ?>>
			<?php wp_footer(); ?>
    </body>
</html>
