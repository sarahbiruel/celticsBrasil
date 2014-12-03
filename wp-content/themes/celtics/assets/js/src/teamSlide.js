/*
 * Single Team slider
 */
$(document).ready(function() {

	var setPlayerDescription = function() {
		if (!$('.frame3').hasClass('old')) {
			$('.player-description').stop(true).fadeTo("slow", 0.7, function() {
				$('.player').removeClass('old');
				$('.frame3').addClass('old');
				var number = $('.frame3').attr('data-number');
				var name = $('.frame3').attr('data-name');
				var positionAbbr = $('.frame3').attr('data-position-abbr') ? ' (' + $('.frame3').attr('data-position-abbr') + ')' : '';
				var position = $('.frame3').attr('data-position') + positionAbbr;
				$('.player-description').find('.number').html(number);
				$('.player-description').find('.name').html(name);
				$('.player-description').find('.position').html(position);
				$('.see-statistics a').attr("href", "#" + number);
			}).fadeTo("slow", 1);
		}
	};

	var PlayersSlideInit = function(objId) {

		var imgWidth = $('.container').width() * 0.63;

		$(objId).boutique({
			speed : 800,
			front_img_width : imgWidth,
			front_topmargin : 0,
			hoverspeed : 0,
			hovergrowth : 0,
			behind_opac : 1,
			back_opac : 0.9,
			behind_size : 0.6,
			back_size : 0.3,
			autoplay : false,
			autointerval : 4000
		});

		var carouselHeight = $(objId).height();
		$('.carousel-container').height(carouselHeight);
		setPlayerDescription();

		$(objId).click(function() {
			setPlayerDescription();
		});
	};

	var PlayerSlideReflash = function(slideId, cloneObj) {
		var newSlide = $(cloneObj).clone().attr('id', slideId);
		$('#' + slideId).remove();
		newSlide.appendTo('.carousel-container');
	};

	var PlayerSlideContent = function(slideId, abbr) {
		abbr = abbr ? abbr : '';

		if (abbr) {
			$(slideId).find('li').each(function() {
				var positionAbbr = $(this).attr('data-position-abbr');
				if (positionAbbr != abbr) {
					$(this).remove();
				}
			});
		}
	};

	if ($("#players").length) {

		PlayerSlideReflash('playersCarousel', '#playersContent');
		PlayerSlideContent('#playersCarousel');
		PlayersSlideInit('#playersCarousel');

		$('.prev').click(function(e) {
			e.preventDefault();
			playersCarousel_ext_prev();
			setPlayerDescription();
		});

		$('.next').click(function(e) {
			e.preventDefault();
			playersCarousel_ext_next();
			setPlayerDescription();
		});

		$('#players .category a').click(function(e) {
			e.preventDefault();
			var abbr = $(this).attr('href');

			PlayerSlideReflash('playersCarousel', '#playersContent');
			PlayerSlideContent('#playersCarousel', abbr);
			PlayersSlideInit('#playersCarousel');
		});

		$(window).resize(function() {
			PlayerSlideReflash('playersCarousel', '#playersContent');
			PlayerSlideContent('#playersCarousel');
			PlayersSlideInit('#playersCarousel');
		});

		$('.see-statistics').click(function() {
			if ($('#statistics .content').is(':visible')) {
				$('#statistics .content').slideUp('slow');
			} else {
				$('#statistics .content').slideDown('slow');
				var scroll = $('#statistics .content').offset().top - 50;
				$('html, body').animate({
					scrollTop : scroll
				}, 500);
			}
		});
	}
});
