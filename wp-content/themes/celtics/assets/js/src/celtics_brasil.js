/**
 * Celtics Brasil
 * http://celticsbrasil.com.br/
 *
 * Copyright (c) 2014 Mamweb (Diego Incerti)
 * Licensed under the GPLv2+ license.
 */

(function(window, undefined) {
	'use strict';

	$(document).ready(function() {
		function showMatchTimer() {
			var winWidth = $(window).width();
			var containerPosition = $('.container').offset().left + 15; //15 = padding
			var matchWidth = $('.match-timer').outerWidth() + $('.next-match').outerWidth();
			var newWidth = containerPosition + matchWidth;
			$('.match-container').width(newWidth).animate({
				'left' : 0
			}, 500);
		}


		$(window).resize(function() {
			showMatchTimer();
		});
		$(window).load(function() {
			$(window).resize();
		});
	});

} )(this);
