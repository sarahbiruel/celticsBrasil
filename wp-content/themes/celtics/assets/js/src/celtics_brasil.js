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
	 */

	var match = new MatchTimer('.match-container');
	var matchObjs = ['.match-timer', '.next-match'];

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

	$('.header-menu').dlmenu({
		animationClasses : {
			classin : 'dl-animate-in-5',
			classout : 'dl-animate-out-5'
		}
	});

	/*
	 * Countdown plugin
	 * By: Diego Incerti
	 */
	$('.match-timer').countdown();

	/*
	 * Ajax Post loader
	 * By: Diego Incerti
	 */

	$('#home-news').postLoader({
		trigger : '.see-more',
		contentAppend : 'ul',
		postsNumber : 5,
		maxLoads : 4,
		animationDuration : 1000,
		baseUrl : $('.header-logo a').attr('href'),
		template : 'wp-content/themes/celtics/includes/templates/home-news.php'
	});

	function scroll(obj, trigger) {
		var height = $(obj).find('> *').first().height();
		var marginTop = height + 1;
		var ulHeight = 0;
		$(obj).each(function() {
			var lenght = $(this).find('> *').length;
			ulHeight = lenght >= 4 ? ulHeight = height * 4 : ulHeight = height * lenght;
			$(this).height(ulHeight);
		});
		$(trigger).click(function(e) {
			e.preventDefault();
			$(obj + ':visible').find('> *:first-child').animate({
				marginTop : '-' + marginTop
			}, 300, function() {
				var clone = $(this).clone();
				$(this).remove();
				$(obj + ':visible').append(clone);
				$(obj + ':visible').find('> *:last-child').animate({
					marginTop : '-1px'
				});
			});
		});
	}

	/*
	 * Resize functions & trigger
	 */

	$(window).resize(function() {
		featuredHeight();
		var extraSize = $('.container').offset().left + 15;
		match.setMatchWidthObj(matchObjs);
		match.showMatch(0, 500, extraSize);
		seeMoreWidth();
	});

	$(window).load(function() {
		$(window).resize();
		scroll('#home-category .categories-news ul', '#home-category .see-more');

		
	});

})(this);
