<?php
 
// Our variables
$numPosts = (isset($_GET['numPosts'])) ? $_GET['numPosts'] : 0;
$page = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;
// Our include
function backPath(){
    $baseUrl = $_SERVER['PHP_SELF'];
    $backPath = '';
    $baseUrl = explode('/', $baseUrl);
    $i = count($baseUrl) - 1;
    while ($i) {
    	if($baseUrl[$i] == 'wp-content')
            $i = false;
        else
            $backPath .= '../';
        $i--;
    }
    return $backPath;
}
require_once(backPath().'wp-load.php');

$args = array(
    'post_type' => 'post',
    'posts_per_page' => $numPosts,
    'paged'          => $page
);
$news = new WP_Query($args);
if ($news->have_posts()) : 
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
                <time datetime="<?php echo get_the_date();
                    echo ' ' . get_the_time();
 ?>" class="date-time">
                    <span class="date"> <?php echo get_the_date('j \d\e F \d\e Y'); ?> </span>
                    -
                    <span class="time"> <?php echo get_the_time(); ?>h </span>
                </time>
            </header>
            <div class="excerpt hidden-xs">
                <a href="<?php the_permalink(); ?>"><?php echo excerpt(30); ?></a>
            </div>
        </div>
        <div class="comments">
            <a href="<?php comments_link(); ?>"> <span class="comments-number"> 
            <?php comments_number('0', '1', '%'); ?>  </span> <span><?php comments_number('comentários', 'comentário', 'comentários'); ?></span> </a>
        </div>
    </li>
    <?php endwhile; endif;
        wp_reset_query();
                    