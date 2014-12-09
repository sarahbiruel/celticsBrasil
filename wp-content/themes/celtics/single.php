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
                            <?php previous_post('%', '', 'yes'); ?>
                        </div>
                    </div>
                </div>
                <nav class="featured-nav"> 
                    <ul>
                        <li class="next"><?php next_post('%', '<i class="icon sprite-featured-arrow-left"></i>', ''); ?></li>
                        <li class="prev"><?php previous_post('%', '<i class="icon sprite-featured-arrow-right"></i>', ''); ?></li>
                    </ul>
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

                        <?php comments_number('<span>Ninguém comentou ainda :(</span>','<p class="number">1</p> <span>Comentário</span>','<p class="number">%</p><span>Comentários</span>'); ?> 
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
                <?php comments_template('/includes/templates/alternative-comments.php'); ?> 
            </div>
        </div>
        <!-- Sidebar -->
        <div class="col-md-4 sidebar">
            <!-- Author -->
            <div class="author-single">
                <div class="author-head">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="picture-thumb">
                                <?php echo get_avatar($post->post_author, 70 ); ?>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="author-name">
                                <h2 class="single-title"><span><?php the_author(); ?></span></h2>
                            </div>
                        </div>
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

            <!-- Recent Posts -->

            <?php dynamic_sidebar('single-widget'); ?>

            <hr class="line">

            <!-- Categories -->

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
                            <span class="number">1352</span>
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