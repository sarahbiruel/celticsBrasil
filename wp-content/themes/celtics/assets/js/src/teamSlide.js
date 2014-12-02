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
$(document).ready(function() {
	if ($("#players").length) {
		teamSlider.setUrl(playersUrl);

		$('.prev').click(function(e) {
			e.preventDefault();
			var playerId = $('#players .frame2').attr('data-id');
			teamSlider.setId(playerId);
			teamSlider.getDescription();
			playersCarousel_ext_prev();
		});

		$('.next').click(function(e) {
			e.preventDefault();
			var playerId = $('#players .frame4').attr('data-id');
			teamSlider.setId(playerId);
			teamSlider.getDescription();
			playersCarousel_ext_next();
		});
		
		$('#playersCarousel').change(function(){
			console.log('ok');
		});
		
		var imgWidth = $('.container').width() * 0.63;
		var imgHeight = imgWidth * 0.81;
		console.log(imgHeight);
		
		$('#playersCarousel').boutique({
			starter : 1,
			speed : 800,
			container_width : $('.container').width(),
			front_img_width : imgWidth,
			front_img_height : '100%',
			hoverspeed : 0,
			hovergrowth : 0,
			behind_opac : 0.9,
			back_opac : 0.9,
			behind_size : 0.6,
			back_size : 0.3,
			autoplay : false,
			autointerval : 4000
		});
	}
});
