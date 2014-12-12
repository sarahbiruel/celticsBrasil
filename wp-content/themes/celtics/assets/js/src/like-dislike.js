function like_dislike(elem, id, type) {
	$.post(likeData.url, {action: likeData.action, id: id, type: type}, function(response) {
		$(elem).children("span").text(response);
		$(elem).parent().addClass(type + "-success");
		$(elem).removeAttr("onclick");
		if (type == "like") $(elem).parent().siblings(".dislike").children("a").removeAttr("onclick");
		if (type == "dislike") $(elem).parent().siblings(".like").children("a").removeAttr("onclick");
	});
}