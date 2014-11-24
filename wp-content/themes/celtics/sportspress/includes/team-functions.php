<?php
/**
 * Show image teams basede on post id
 * @param int $id id of current post/page
 */
function teamsImage($id) {
    $meta_values = get_post_meta($id, 'sp_team');
    echo '<ul>';
    foreach ($meta_values as $key => $value) {
        $thumbnail = get_the_post_thumbnail($value, 'team-thumb');
        if ($thumbnail)
            echo '<li>' . $thumbnail . '</li>';
    }
    echo '</ul>';
}

/**
 * Show teams name for the event
 * @param int $id id of current post/page
 */
function eventName($id) {
    $meta_values = get_post_meta($id, 'sp_team');
    foreach ($meta_values as $key => $value)
        echo $key == 0 ? get_the_title($value) : ' vs ' . get_the_title($value);
}
