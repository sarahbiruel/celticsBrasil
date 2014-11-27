var Team = function(elementDescriptionObj) {
	this.descriptionObj = elementDescriptionObj;
	this.carouselObj = '';
	var ajaxUrl = '';
	var playerId = '';

	this.setUrl = function(newUrl) {
		ajaxUrl = newUrl;
	};

	this.setId = function(newid) {
		playerId = newid;
	};

	this.setCarousel = function(newCarouselObj) {
		this.carouselObj = newCarouselObj;
	};

	this.getDescription = function() {
		var descriptionObj = this.descriptionObj;
		descriptionObj.fadeTo('slow', 0.75).addClass('no-click');
		$.ajax({
			type : 'POST',
			url : ajaxUrl,
			dataType : 'json',
			data : {
				id : playerId
			},
			cache : false,
			success : function(data) {
				data.id = data.id ? data.id : '';
				data.number = data.number ? data.number : '';
				data.name = data.name ? data.name : '';
				data.position = data.position['name'] && data.position['description'] ? data.position['name'] + ' (' + data.position['description'] + ')' : '';
				descriptionObj.find('.number').html(data.number);
				descriptionObj.find('.name').html(data.name);
				descriptionObj.find('.position').html(data.position);
				descriptionObj.find('.see-statistics a').attr('href', '#' + data.id).end().fadeTo("slow", 1).removeClass('no-click');
			},
			error : function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	};
};

/*
 * Single Team slider
 */
var teamSlider = new Team($("#players .player-description"));
if ($("#players").length)
	teamSlider.setUrl(playersUrl);

/**
 * Slide caroufredsel plugin
 *
 * @see http://docs.dev7studios.com/jquery-plugins/caroufredsel-advanced
 */
if ($('.players-carousel').length) {
	$('.players-carousel').carouFredSel({
		items : {
			visible : 5
		},
		transition : true,
		responsive : true,
		prev : {
			button : '.featured-nav .prev',
			onBefore : function() {
				var playerId = $('#players .player:nth-child(3)').attr('data-id');
				teamSlider.setId(playerId);
				teamSlider.getDescription();
				$('.player').removeClass('scale1 scale2');
				$('.player:nth-child(2), .player:nth-child(4)').addClass('scale1');
				$('.player:nth-child(3)').addClass('scale2');
			}
		},
		next : {
			button : '.featured-nav .next',
			onBefore : function() {
				var playerId = $('#players .player:nth-child(4)').attr('data-id');
				teamSlider.setId(playerId);
				teamSlider.getDescription();
				$('.player').removeClass('scale1 scale2');
				$('.player:nth-child(3), .player:nth-child(5)').addClass('scale1');
				$('.player:nth-child(4)').addClass('scale2');
			}
		},
		auto : false,
		swipe : {
			onTouch : true
		},
		scroll : {
			fx : 'directscroll',
			items : 1,
			easing : 'linear',
			pauseOnHover : true,
			conditions : function() {
				return teamSlider.descriptionObj.hasClass('no-click') ? false : true;
			}
		},
		onCreate : function() {
			var playerId = $('#players .player:nth-child(3)').attr('data-id');
			teamSlider.setId(playerId);
			teamSlider.getDescription();
		}
	});

	function getPosition(position) {
		$('.player').each(function() {
			var dataPosition = $(this).attr('data-position');
			var eq = $(this).index();
			if (dataPosition != position)
				$('.players-carousel').trigger("removeItem", eq);
		});
		return item;
	}


	$('.category li').click(function(e) {
		var position = $(this).find('a').attr('href');
		position = position.replace('#', '');
		getPosition(position);
		e.preventDefault();
	});
}
