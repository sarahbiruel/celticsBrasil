<?php
/**
 * The main template file
 *
 * @package Celtics Brasil
 * @since 0.1.0
 */

get_header();
?>
<div class="main">
    <div class="container">
    	<div class="row">
    		<div class="col-sm-12">
    			<section id="home-slide">
    			    <?php 
    			         $args = array(
                             'post_type' => 'post',
                             'posts_per_page' => 5
                         );
                         $featured = new WP_Query($args);
                         if ($featured->have_posts()) : 
    			    ?>
    				<ul class="big-featured">
    				    <?php
    				        while ($featured -> have_posts()) : $featured -> the_post();
    				    ?>
    					<li>
    						<a href="<?php the_permalink(); ?>">
    						    <?php
                                if (has_post_thumbnail())
                                    the_post_thumbnail('featured', array('class' => 'img-responsive'));
                                ?>
        						<div class="featured-capition">
        							<div class="title">
        								<?php the_title(); ?>
        							</div>
        							<time datetime="2014-02-01 14:00" class="date-time hidden-xs">
        								<span class="date"> <?php echo get_the_date(); ?> </span>
        								-
        								<span class="time"> <?php echo get_the_time(); ?>h </span>
        							</time>
        						</div> 
    						</a>
    					</li>
    					<?php endwhile; ?>
    				</ul>
                    <ul class="featured-nav">
                        <li><a href="#" class="prev"> <i class="icon sprite-featured-arrow-left"></i> </a></li>
                        <li><a href="#" class="next"> <i class="icon sprite-featured-arrow-right"></i> </a></li>
                    </ul>
                    <div class="sprite-feature-capition-shadow visible-md visible-lg"></div>
                    <?php endif; ?>
    			</section>
    		</div>
    	</div>
    </div>
    <section id="next-match">
    	<div class="match-container">
    		<div class="next-match">
    			<header>
    				<h1 class="title"> Próxima partida </h1>
    				<div class="info">
    					<div class="teams">
    						<span class="home-team"> Celtics </span><span class="at"> X </span><span class="away-team"> Bulls </span>
    					</div>
    					<div class="stadium">
    						TD. GARDEN - BOS
    					</div>
    					<time datetime="2014-02-01 14:00" class="date-time">
    						<span class="date"> 01/02/2014 </span>
    						-
    						<span class="time"> 14:00h </span>
    					</time>
    				</div>
    			</header>
    			<div class="teams-logo hidden-xs">
    				<ul>
    					<li>
    						<img src="<?php echo get_stylesheet_directory_uri() . '/images/teams-logo.png'; ?>" alt="" />
    					</li>
    					<li>
    						<img src="<?php echo get_stylesheet_directory_uri() . '/images/teams-logo.png'; ?>" alt="" />
    					</li>
    				</ul>
    			</div>
    			<div class="sprite-match-timer-shadow  hidden-xs"></div>
    		</div>
    		<div class="match-timer">
    			<div class="match-timer-days">
    				<div class="dozens">
    					0
    				</div>
    				<div class="units">
    					1
    				</div>
    				<span>DIAS</span>
    			</div>
    			<div class="match-timer-hours">
    				<div class="dozens">
    					1
    				</div>
    				<div class="units">
    					2
    				</div>
    				<span>HORAS</span>
    			</div>
    			<div class="match-timer-minutes">
    				<div class="dozens">
    					5
    				</div>
    				<div class="units">
    					3
    				</div>
    				<span>MINUTOS</span>
    			</div>
    			<div class="match-timer-seconds hidden-xs hidden-sm">
    				<div class="dozens">
    					2
    				</div>
    				<div class="units">
    					4
    				</div>
    				<span>SEGUNDOS</span>
    			</div>
    		</div>
    	</div>
    </section>
    <div class="container hidden-xs hidden-sm">
    	<div class="row">
    		<div class="col-sm-3 col-sm-offset-9">
    			<section class="home-social text-center">
    				<ul class="row">
    				    <?php    				    
    				    if (!$data['twitter-page'] || !$data['facebook-page']){	            
                            if(!$data['twitter-page'] && !$data['facebook-page']){
    				            $offset = 'col-sm-offset-8';
    				        }else{
    				            $offset = 'col-sm-offset-4';
                            }
                        }
                        ?>
    					<li class="col-sm-4 <?php echo $offset;?>">
    						<a href="<?php bloginfo('rss_url'); ?>" target="_blank"> <i class="icon sprite-rss"></i> <span class="alias">ARTIGOS</span> <span class="number">1952</span> </a>
    					</li>
    					<?php if($data['twitter-page']){ ?>
    					<li class="col-sm-4">
    						<a href="<?php echo $data['twitter-page']?>" target="_blank"><i class="icon sprite-twitter"></i><span class="alias">SEGUIDORES</span> <span class="number">2763</span></a>
    					</li>
    					<?php } ?>
    					<?php if($data['facebook-page']){ ?>
    					<li class="col-sm-4">
    						<a href="<?php echo $data['facebook-page']?>" target="_blank"><i class="icon sprite-facebook"></i><span class="alias">CURTIDAS</span> <span class="number">1963</span></a>
    					</li>
                        <?php } ?>
    				</ul>
    			</section>
    		</div>
    	</div>
    </div>
    <section id="home-news" class="container">
    	<div class="row">
    		<div class="news">
    			<div class="col-sm-12">
                    <?php 
                         $args = array(
                             'post_type' => 'post',
                             'posts_per_page' => 5
                         );
                         $news = new WP_Query($args);
                         if ($news->have_posts()) : 
                    ?>
    				<h2 class="title"><span>Últimas notícias</span></h2>
    				<ul>
                        <?php
                            while ($news -> have_posts()) : $news -> the_post();
                        ?>
    					<li>
                            <?php
                              if (has_post_thumbnail()){
                            ?>
    						<div class="thumb">    						    
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news', array('class' => 'img-responsive')); ?></a>
    						</div>
    						<?php } ?>
    						<div class="text">
    							<header>
    								<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    								<time datetime="2014-02-01 14:00" class="date-time">
    									<span class="date"> 01/02/2014 </span>
    									-
    									<span class="time"> 14:00h </span>
    								</time>
    							</header>
    							<div class="excerpt hidden-xs">
    								<a href="<?php the_permalink(); ?>"><?php echo excerpt(35); ?></a>
    							</div>
    						</div>
    						<div class="comments">
    							<a href="<?php the_permalink(); ?>"> <span class="comments-number"> 49 </span> <span>comentários</span> </a>
    						</div>
    					</li>
    					<?php endwhile; ?>
    				</ul>
    				<div class="see-more">
    					<span class="before"></span><a href="#" class="gray-link">Clique e veja mais notícias<i class="icon sprite-see-more-gray"></i></a><span class="after"></span>
    				</div>
                    <?php endif; ?>
    			</div>
    		</div>
    	</div>
    </section>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-8">
    			<section id="home-category">
    				<h2 class="title"><span>Colunas</span></h2>
    				<div class="row">
    					<div class="col-sm-5">
    						<ul class="categories">
    							<li>
    								<a href="#tab1" role="tab" data-toggle="tab">Aprenda sem Berro<i class="icon sprite-category-arraw"></i></a>
    							</li>
    							<li>
    								<a href="#tab2" role="tab" data-toggle="tab">Craques do passado<i class="icon sprite-category-arraw"></i></a>
    							</li>
    							<li>
    								<a href="#tab3" role="tab" data-toggle="tab">Glauco Cemia<i class="icon sprite-category-arraw"></i></a>
    							</li>
    							<li>
    								<a href="#tab4" role="tab" data-toggle="tab">Rivalidades<i class="icon sprite-category-arraw"></i></a>
    							</li>
    							<li>
    								<a href="#tab5" role="tab" data-toggle="tab">Sinal Verde<i class="icon sprite-category-arraw"></i></a>
    							</li>
    							<li>
    								<a href="#tab6" role="tab" data-toggle="tab">Títulos<i class="icon sprite-category-arraw"></i></a>
    							</li>
    							<li>
    								<a href="#tab7" role="tab" data-toggle="tab">Túnel do Tempo<i class="icon sprite-category-arraw"></i></a>
    							</li>
    						</ul>
    					</div>
    					<div class="col-sm-7">
    						<div class="tab-content categories-news">
    							<div class="tab-pane fade in active" id="tab1">
    								<ul>
    									<li>
    										<div class="mini-thumb">
    											<a href="#"><img width="150" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" class="img-responsive" /></a>
    										</div>
    										<h4><a href="#">Evan Turner fecha contrato com o Celtics</a></h4>
    									</li>
    									<li>
    										<div class="mini-thumb">
    											<a href="#"><img width="150" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" class="img-responsive" /></a>
    										</div>
    										<h4><a href="#">Evan Turner fecha contrato com o Celtics</a></h4>
    									</li>
    									<li>
    										<div class="mini-thumb">
    											<a href="#"><img width="150" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" class="img-responsive" /></a>
    										</div>
    										<h4><a href="#">Evan Turner fecha contrato com o Celtics</a></h4>
    									</li>
    								</ul>
    							</div>
    							<div class="tab-pane fade" id="tab2">
    								<ul>
    									<li>
    										<div class="mini-thumb">
    											<a href="#"><img width="150" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" class="img-responsive" /></a>
    										</div>
    										<h4><a href="#">Celtics vem oferecendo Bass a outras equipes</a></h4>
    									</li>
    									<li>
    										<div class="mini-thumb">
    											<a href="#"><img width="150" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" class="img-responsive" /></a>
    										</div>
    										<h4><a href="#">Celtics vem oferecendo Bass a outras equipes</a></h4>
    									</li>
    									<li>
    										<div class="mini-thumb">
    											<a href="#"><img width="150" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" class="img-responsive" /></a>
    										</div>
    										<h4><a href="#">Celtics vem oferecendo Bass a outras equipes</a></h4>
    									</li>
    								</ul>
    							</div>
    							<div class="tab-pane fade" id="tab3">
    								<ul>
    									<li>
    										<div class="mini-thumb">
    											<a href="#"><img width="150" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" class="img-responsive" /></a>
    										</div>
    										<h4><a href="#">Marcus Smart é ovacionado no Fenway Park</a></h4>
    									</li>
    									<li>
    										<div class="mini-thumb">
    											<a href="#"><img width="150" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" class="img-responsive" /></a>
    										</div>
    										<h4><a href="#">Marcus Smart é ovacionado no Fenway Park</a></h4>
    									</li>
    									<li>
    										<div class="mini-thumb">
    											<a href="#"><img width="150" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" class="img-responsive" /></a>
    										</div>
    										<h4><a href="#">Marcus Smart é ovacionado no Fenway Park</a></h4>
    									</li>
    								</ul>
    							</div>							
                                <div class="tab-pane fade" id="tab5">
                                    <ul>
                                        <li>
                                            <div class="mini-thumb">
                                                <a href="#"><img width="150" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" class="img-responsive" /></a>
                                            </div>
                                            <h4><a href="#">Marcus Smart é ovacionado no Fenway Park</a></h4>
                                        </li>
                                        <li>
                                            <div class="mini-thumb">
                                                <a href="#"><img width="150" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" class="img-responsive" /></a>
                                            </div>
                                            <h4><a href="#">Marcus Smart é ovacionado no Fenway Park</a></h4>
                                        </li>
                                        <li>
                                            <div class="mini-thumb">
                                                <a href="#"><img width="150" src="<?php echo get_stylesheet_directory_uri() . '/images/big-featured.jpg'; ?>" alt="" class="img-responsive" /></a>
                                            </div>
                                            <h4><a href="#">Marcus Smart é ovacionado no Fenway Park</a></h4>
                                        </li>
                                    </ul>
                                </div>
    						</div>
                            <div class="see-more">
                                <span class="before"></span><a href="#" class="gray-link">Clique e veja mais notícias<i class="icon sprite-see-more-gray"></i></a><span class="after"></span>
                            </div>
    					</div>
    				</div>
    			</section>
    		</div>
    		<div class="col-sm-4">
    			<section id="home-widget">
    				<?php dynamic_sidebar('home-widget'); ?>
    			</section>
    		</div>
    	</div>
    </div>
</div>
<?php get_footer(); ?>