<?php
/**
 * The template for displaying the header.
 *
 * @package Celtics Brasil
 * @since 0.1.0
 */
 ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="revisit-after" content="10 days">
        <meta name="robots" content="all">
        <meta name="author" content="MAMWEB - Soluções criativas (Diego Incerti)">
        <meta name="keywords" content="">
        

        
        <title><?php bloginfo('name'); ?></title>
        
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/logo.ico">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/logo-apple.png">
        
        <!--[if lt IE 9]>
            <meta http-equiv="refresh" content="0; url=<?php bloginfo('url'); ?>/wp-content/themes/campanela/erroIE/erroIE.htm">
        <![endif]-->
        
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php
        if (is_singular() && get_option('thread_comments'))
            wp_enqueue_script('comment-reply');

        wp_head();
        ?>
    </head>
    <body>
        <header id="header">
           <div class="header-bar text-right">
				<div class="container">
					<div class="row">
					    <div class="col-sm-12">
    						<form action="" method="get" class="header-search-form">
    							<span>Pesquisar<i class="icon sprite-search"></i></span>
    							<input type="search" name="search" class="header-search-input" required />
    						</form>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
			    <div class="row">
			        <div class="col-sm-4">
			            <a class="header-logo" href="<?php bloginfo('url') ?>"><i class="icon sprite-celtics-brasil-logo hide-text">Celtics Brasil</i></a>
			        </div>
			        <div class="col-sm-6">
			            <div style="width: 100%;max-width: 468px;float:right;height: 60px;border:1px solid #fff;background: #BFBFBF;margin:20px 0;"></div>                        
                    </div>
                    <div class="col-sm-2">
                        <div class="header-menu text-right">
                            <span>menu</span>
                            <div class="icon-padding">
                                <i class="icon sprite-menu"></i>
                            </div>
                        </div>
                    </div>
			    </div>
			</div>
        </header>