<?php
/**
 * List the description of taxonomy terms description
 * @param string $taxonomy name
 * @param string $default text option for all terms
 */
function listPositionsDescription($taxonomy, $default = FALSE) {
    echo '<ul>';
    echo $default ? '<li><a href=""><p>' . $default . '</p></a></li>' : '';
    foreach ($taxonomy as $tax) {
        $description = term_description(intval($tax -> term_id), 'sp_position');
        echo !empty($description) ? '<li><a href="' . $tax -> description . '">' . $description . '</a></li>' : '';
    };
    echo '</ul>';
}
