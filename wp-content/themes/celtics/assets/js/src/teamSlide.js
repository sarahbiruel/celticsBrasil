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
