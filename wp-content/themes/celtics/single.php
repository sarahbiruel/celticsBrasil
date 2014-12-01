<?php
/**
 * The single template file
 *
 * @package Celtics Brasil
 * @since 0.1.0
 */

get_header();
?>

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <?php if(have_posts()) : 
                        while(have_posts()) : the_post(); 
            ?>
            <div id="single-thumbnail">
                <?php the_post_thumbnail('featured', array('class' => 'img-responsive')); ?>

                <div class="featured-capition-list">
                    <div class="featured-capition">
                        <div class="title">
                            Marcus Smart é ovacionado no Fenway Park.
                        </div>
                    </div>
                </div>

                <nav class="featured-nav">
                    <li><a href="#" class="prev"> <i class="icon sprite-featured-arrow-left"></i></a></li>
                    <li><a href="#" class="next"> <i class="icon sprite-featured-arrow-right"></i></a></li>
                </nav>

                <div class="sprite-feature-capition-shadow visible-md visible-lg"></div>

            </div>

            
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <!-- Artigo -->
            <div class="single-post">
                
                <!-- Data -->
                <div class="block-date-comments">
                    <div class="date-comments">
                        <div>
                            <?php echo
                                '<p class="number">' . get_the_date('d') . '</p>',
                                '<p class="month">' . get_the_date('F') . '</p>',
                                '<span>' . get_the_date('Y') . '</span>';
                            ?>
                        </div>
                    </div>
                    <div class="date-comments light-green">
                        <p class="number">154</p>
                        <span>comentários</span>
                    </div>
                </div>

                <h1 class="single-title"><span><?php the_title(); ?></span></h1>

                <article>
                    <?php the_content(); ?>
                </article>
                <?php 
                    endwhile;
                        endif;
                ?>
                <!-- Comments -->
                <?php get_template_part( 'includes/single', 'comments' ); ?>
            </div>
        </div>

        <!-- Sidebar -->

        <div class="col-md-4 sidebar">

            <!-- Author -->
            <div class="author-single">
                <div class="author-head">
                    <div class="picture-thumb">
                        <?php echo get_avatar($post->post_author, 70 ); ?>
                    </div>

                    <div class="author-name">
                        <h2 class="single-title"><span><?php the_author(); ?></span></h2>
                    </div>
                </div>

                <div class="author-resume">
                    <p><?php the_author_meta('description'); ?></p> 
                </div>

                <div class="social-icons">
                    <a href="#"><span class="icon sprite-facebook-gray"></span></a>
                    <a href="#"><span class="icon sprite-twitter-gray"></span></a>
                    <a href="#"><span class="icon sprite-instagram-gray"></span></a>
                </div>
            </div>

            <hr class="line">

            <!-- Recent Posts -->

            <div class="recent-posts">

                <?php dynamic_sidebar('single-widget'); ?>

            </div>

            <div class="see-more"><span class="before"></span><a href="#" class="gray-link">Clique e veja mais notícias<i class="icon sprite-see-more-gray"></i></a><span class="after"></span></div> <!-- carrega outras noticias -->

            <hr class="line">

            <!-- Categories -->
            <div class="sidebar-categories">
                <h2 class="single-title"><span>Colunas</span></h2>
                <ul class="categories-list">
                    <li>
                        <i class="icon sprite-single-categories-arrow"></i>
                        <a href="#">Aprenda sem Berro</a>
                    </li>
                    <li>
                        <i class="icon sprite-single-categories-arrow"></i>
                        <a href="#">Craques do Passado</a>    
                    </li>
                    <li>
                        <i class="icon sprite-single-categories-arrow"></i>
                        <a href="#">Glauco Cemia</a>
                    </li>
                    <li>
                        <i class="icon sprite-single-categories-arrow"></i>
                        <a href="#">Rivalidades</a> 
                    </li>
                    <li>
                        <i class="icon sprite-single-categories-arrow"></i>
                        <a href="#">Sinal Verde</a>
                    </li>
                    <li>
                        <i class="icon sprite-single-categories-arrow"></i>
                        <a href="#">Títulos</a>
                    </li>
                    <li>
                        <i class="icon sprite-single-categories-arrow"></i>
                        <a href="#">Túnel do Tempo</a>    
                    </li>
                </ul>
            </div>

            <hr class="line">

            <div class="home-social text-center">
                <ul class="row">
                    <li class="col-sm-4">
                        <a href="#">
                            <i class="icon sprite-rss"></i>
                            <div class="alias">ARTIGOS</div>
                            <span class="number">1952</span>
                        </a>
                    </li>
                    <li class="col-sm-4">
                        <a href="#">
                            <i class="icon sprite-twitter"></i>
                            <div class="alias">SEGUIDORES</div>
                            <span class="number">2763</span>
                        </a>
                    </li>
                    <li class="col-sm-4">
                        <a href="#">
                            <i class="icon sprite-facebook"></i>
                            <div class="alias">CURTIDAS</div>
                            <span class="number">1963</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</div>


<?php
get_footer();
?>