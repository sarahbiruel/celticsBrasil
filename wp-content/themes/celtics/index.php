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
    			<section id="home-slide" class="fxSoftPulse">
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
    						    <div class="img-container">
    						    <?php
                                if (has_post_thumbnail())
                                    the_post_thumbnail('featured', array('class' => 'img-responsive'));
                                ?>
                                </div>
    						</a>
    					</li>
    					<?php endwhile; ?>
    				</ul>
    				
                    <div class="featured-capition-list">
                        <?php
                            wp_reset_query();
                            $i = 1;
                            while ($featured -> have_posts()) : $featured -> the_post();
                        ?>
                        <div class="featured-capition" data-index="<?php echo $i; ?>">
                            <div class="title">
                                <?php the_title(); ?>
                            </div>
                            <time datetime="<?php echo get_the_date();
                                echo ' ' . get_the_time();
 ?>" class="date-time hidden-xs">
                                <span class="date"> <?php echo get_the_date('d-m-Y'); ?> </span>
                                -
                                <span class="time"> <?php echo get_the_time(); ?>h </span>
                            </time>
                        </div>
                    <?php $i++;
                            endwhile;
 ?>
                    </div>
                    <nav class="featured-nav">
                        <li><a href="#" class="prev"> <i class="icon sprite-featured-arrow-left"></i> </a></li>
                        <li><a href="#" class="next"> <i class="icon sprite-featured-arrow-right"></i> </a></li>
                    </nav>
                    <div class="sprite-feature-capition-shadow visible-md visible-lg"></div>
                    <?php endif; ?>
    			</section>
    		</div>
    	</div>
    </div>
    <section id="next-match">
    	<div class="match-container">    		
            <?php
            if (shortcode_exists('countdown'))
                echo do_shortcode('[countdown show_venue="1" show_league="0"]');
            ?>    		
    	</div>
    </section>
    <div class="container hidden-xs hidden-sm">
    	<div class="row">
    		<div class="col-sm-3 col-sm-offset-9">
    			<section class="home-social text-center">
    				<ul class="row">
    				    <?php
                        if (!$data['twitter-page'] || !$data['facebook-page']) {
                            if (!$data['twitter-page'] && !$data['facebook-page']) {
                                $offset = 'col-sm-offset-8';
                            } else {
                                $offset = 'col-sm-offset-4';
                            }
                        }
                        ?>
    					<li class="col-sm-4 <?php echo $offset; ?>">
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
    				<h2 class="title"><span>Últimas notícias</span></h2>
    				<ul>
    				    <!-- Ajax Post Loader -->
    				</ul>
    				<div class="see-more">
    					<span class="before"></span><a href="#" class="gray-link">Clique e veja mais notícias<i class="icon sprite-see-more-gray"></i></a><span class="after"></span>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <div class="container">
    	<div class="row">
    		<div class="col-md-8 hidden-xs">
    			<section id="home-category">
    				<h2 class="title"><span>Colunas</span></h2>
    				<div class="row">
    					<div class="col-sm-5">
    						<ul class="categories">
    						    <?php
        						    $args = array('child_of' => 138);
                                    $categories = get_categories( $args );
                                    $i = 1;
                                    foreach($categories as $category) {
    						    ?>
    							<li class="<?php
                                    if ($i == 1)
                                        echo 'active';
 ?>">
    								<a href="#<?php echo $category -> slug; ?>" role="tab" data-toggle="tab"><?php echo $category -> name; ?><i class="icon sprite-category-arraw"></i></a>
    							</li>
    							<?php $i++;
                                    }
 ?>
    						</ul>
    					</div>
    					<div class="col-sm-7">
    						<div class="tab-content posts-list">
                                <?php
                                $idObj = get_category_by_slug('colunas'); 
                                $id = $idObj->term_id;
                                $categories = get_categories( $args );
                                $i = 0;
                                foreach($categories as $category) {
                                    $i++;
                                    $category = $category->slug;
                                    $args = array (
                                        'category_name' => $category,
                                        'posts_per_page' => 10,
                                     );
                                ?>
                                    <div class="tab-pane fade <?php echo $i == 1 ? 'in active' : ''; ?>" id="<?php echo $category; ?>">
                                        <ul>
                                        <?php
                                         query_posts($args);
                                         if (have_posts()) : while (have_posts()) : the_post();
                                         ?>
                                            <li>
                                                <?php  if (has_post_thumbnail()){ ?>
                                                <div class="mini-thumb">
                                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb', array('class' => 'img-responsive')); ?></a>
                                                </div>
                                                <?php } ?>
                                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            </li>
                                            <?php endwhile; endif; ?>
                                        </ul>
                                    </div>
                                <?php
                                        wp_reset_query();
                                        }
 ?>
    						</div>
                            <div class="see-more">
                                <span class="before"></span><a href="#" class="gray-link">Clique e veja mais notícias<i class="icon sprite-see-more-gray"></i></a><span class="after"></span>
                            </div>
    					</div>
    				</div>
    			</section>
    		</div>
    		<div class="col-md-4">
    			<section id="home-widget">
    				<?php dynamic_sidebar('home-widget'); ?>
    			</section>
    		</div>
    	</div>
    </div>
</div>
<?php get_footer(); ?>