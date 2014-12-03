<?php
/**
 * Team template
 *
 * @package Celtics Brasil
 * @since 0.1.0
 */

get_header();
include_once (TEMPLATEPATH . '/sportspress/classes/player.php');
?>
<section id="players">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
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
				</div>
			</div>
			<div class="col-md-4">
				<div class="player-description">
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
			<div class="col-md-12">
				<ul id="playersContent">
					<?php
                    $player = new Player(1);
                    $args = array('post_type' => 'sp_player', 'posts_per_page' => -1);
                    $featured = new WP_Query($args);
                    $i = 1;
                    if ($featured -> have_posts()) :
                        while ($featured -> have_posts()) : $featured -> the_post();
                            if (has_post_thumbnail()) {

                                $player -> setId($post -> ID);
                                $position = $player -> getPosition();

                                $dataNumber = $player -> getNumber() ? ' data-number="' . $player -> getNumber() . '"' : 'data-number=""';
                                $dataName = $player -> getName() ? ' data-name="' . $player -> getName() . '"' : 'data-name=""';
                                $dataPositionName = $position['name'] ? ' data-position="' . $position['name'] . '"' : ' data-position=""';
                                $dataPositionAbbr = $position['description'] ? ' data-position-abbr="' . $position['description'] . '"' : ' data-position-abbr=""';

                                echo '<li class="player"', $dataNumber, $dataName, $dataPositionName, $dataPositionAbbr, '>';
                                the_post_thumbnail();
                                echo '</li>';

                            }
                            $i++;
                        endwhile;
                    endif;
					?>
				</ul>
				<div class="carousel-container">
					<ul id="playersCarousel"></ul>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div id="statistics">
		<div class="content">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<?php 						
						echo do_shortcode( '[player_details 16712]' );
						echo do_shortcode( '[player_statistics 16712]' );
						
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="see-statistics">
			<a href="#">Ver estastísticas</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>