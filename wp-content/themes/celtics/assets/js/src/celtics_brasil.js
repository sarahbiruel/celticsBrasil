/**
 * Celtics Brasil
 * http://celticsbrasil.com.br/
 *
 * Copyright (c) 2014 Mamweb (Diego Incerti)
 * Licensed under the GPLv2+ license.
 */

(function(window, undefined) {
	'use strict';

	var winWidth = $(window).width();

	/*
	 * Next Match Timer
	 *
	 */
	function showMatchTimer() {
		var containerPosition = $('.container').offset().left + 15;
		//15 = padding
		var matchWidth = $('.match-timer').outerWidth() + $('.next-match').outerWidth();
		var newWidth = containerPosition + matchWidth;
		$('.match-container').width(newWidth).animate({
			'left' : 0
		}, 500);

		// call my countdown
		$('.match-timer').countdown({
			delay : 1000
		});
	}

	/*
	 * See More
	 *
	 */
	function seeMoreWidth() {
		var blockWidth = 0;
		var linkWidth = 0;
		var newWidth = 0;
		$('.see-more').each(function() {
			blockWidth = $(this).width();
			linkWidth = $(this).find('a').outerWidth();
			newWidth = (blockWidth - linkWidth) / 2;
			$(this).find('.before').width(newWidth).end().find('.after').width(newWidth);
		});
	}

	/*
	 * Featured
	 */
	function featuredHeight() {
		var featured = $('.big-featured');
		var featuredWidth = featured.find('li').height();
		featured.height(featuredWidth);
	}

	/*
	 * Main menu functions
	 */

	/* $('.header-menu').dlmenu({
	 animationClasses : {
	 classin : 'dl-animate-in-5',
	 classout : 'dl-animate-out-5'
	 }
	 }); */

	/*
	 * Resize functions & trigger
	 */

	$(window).resize(function() {
		featuredHeight();
		showMatchTimer();
		seeMoreWidth();
	});
	$(window).load(function() {
		$(window).resize();
	});

})(this);
