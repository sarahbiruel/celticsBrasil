var Team = function(elementObj) {
	this.obj = elementObj;
	var ajaxUrl = '';
	var playerId = '';

	this.setUrl = function(newUrl) {
		ajaxUrl = newUrl;
	};

	this.setId = function(newid) {
		playerId = newid;
	};

	this.getDescription = function() {
		var obj = this.obj;
		$.ajax({
			type : "POST",
			url : ajaxUrl,
			dataType : 'json',
			data : {
				id : playerId
			},
			cache : false,
			success : function(data) {
				data.number = data.number ? data.number : '';
				data.name = data.name ? data.name : '';
				data.position = data.position['name'] && data.position['description'] ? data.position['name'] + ' (' + data.position['description'] + ')' : '';
				obj.find('.number').html(data.number);
				obj.find('.name').html(data.name);
				obj.find('.position').html(data.position);
			},
			error : function(jqXHR, textStatus, errorThrown) {
				console.log(textStatus, errorThrown);
			}
		});
	};
};
