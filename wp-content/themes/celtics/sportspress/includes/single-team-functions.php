<?php
/**
 * List the description of taxonomy terms description
 * @param string $taxonomy name
 * @param string $default text option for all terms
 */
function listPositionsDescription($taxonomy, $default = FALSE) {
    echo '<ul>';
    echo $default ? '<li><a href="#all"><p>' . $default . '</p></a></li>' : '';
    foreach ($taxonomy as $tax) {
        $description = term_description(intval($tax -> term_id), 'sp_position');
        echo !empty($description) ? '<li><a href="#' . $tax -> slug . '">' . $description . '</a></li>' : '';
    };
    echo '</ul>';
}
