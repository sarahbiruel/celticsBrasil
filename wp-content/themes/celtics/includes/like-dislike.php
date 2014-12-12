<?php
add_action("wp_ajax_like_dislike", "like_dislike");
add_action("wp_ajax_nopriv_like_dislike", "like_dislike");
add_action( 'wp_footer', 'js_init' );

function like_dislike() {
	$commentId = $_REQUEST["id"];
	if (!is_null($commentId)) {
		$operType = $_REQUEST["type"];
			$likes_dislikes = intval(get_comment_meta($commentId, "mw_comment_$operType", true));
			if (update_comment_meta($commentId, "mw_comment_$operType", $likes_dislikes+1)) $likes_dislikes++;
			echo $likes_dislikes;
	}
	die();
}

function get_likes_dislikes($commentId, $type) {
	return intval(get_comment_meta($commentId, "mw_comment_$type", true));
}

function js_init() { ?>
<script type="text/javascript">
$(document).ready(function() {
	likeData = {
		'action': 'like_dislike',
		'url' : "<?php echo admin_url("admin-ajax.php"); ?>"
	};
});
</script> <?php
}