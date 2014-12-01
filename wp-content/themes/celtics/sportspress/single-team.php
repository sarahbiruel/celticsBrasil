<?php
/**
 * Team template
 *
 * @package Celtics Brasil
 * @since 0.1.0
 */

get_header();
?>
<section id="players">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<h2 class="title"><span>Elenco</span></h2>
				<div class="row">
					<div class="category col-sm-6">
						<p>
							Selecione uma opção abaixo para exibir os jogadores apenas da posição desejada.
						</p>
						<?php
                        $sp_position = get_terms('sp_position');
                        listPositionsDescription($sp_position, 'todas');
						?>
					</div>
					<div class="category col-sm-6"></div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="player-description">
                <?php
                    echo '<script>';
                    echo 'var playersUrl = "' . get_stylesheet_directory_uri() . '/sportspress/player-description.php"';
                    echo '</script>';
                ?>
					<div class="number"></div>
					<div class="info">
						<div class="name"></div>
						<div class="position"></div>
						<div class="see-statistics">
							<a href="#">Ver estastísticas</a>
						</div>
					</div>
					<nav class="featured-nav">
						<li>
							<a href="#" class="prev"> <i class="icon sprite-featured-arrow-left"></i> </a>
						</li>
						<li>
							<a href="#" class="next"> <i class="icon sprite-featured-arrow-right"></i> </a>
						</li>
					</nav>
					<div class="sprite-feature-capition-shadow visible-md visible-lg"></div>
				</div>
			</div>
            <div class="col-sm-12">
                <div class="carousel-container">
                    <ul id="playersCarousel">
        				<?php
                        $args = array('post_type' => 'sp_player', 'posts_per_page' => -1);
                        $featured = new WP_Query($args);
                        $i = 1;
                        if ($featured -> have_posts()) :
                            while ($featured -> have_posts()) : $featured -> the_post();
                                if(has_post_thumbnail()) {
                                    
                                   /* set class */
                                   if($i == 2 || $i == 4) 
                                       $class = 'scale1';
                                   else if ($i == 3 )
                                       $class = 'scale2'; 
                                   else
                                       $class = '';
                                   
                                   /* get position */
                                   
                                    $term_list = wp_get_post_terms($post->ID, 'sp_position');
                                    $position = $term_list[0] -> slug;
                        
                                    echo '<li class="player" data-id="' . get_the_ID() . '" data-position="' . $position . '">';
                                    the_post_thumbnail();
                                    echo '</li>';
                        
                                }
                                $i++;
                            endwhile;
                        endif;
        				?>
        			</ul>
    			</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div id="statistics" class="container">
		<div class="row">
			<div class="news">
				<div class="col-sm-12">
					<h2 class="title"><span>Ver estatísticas</span></h2>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>