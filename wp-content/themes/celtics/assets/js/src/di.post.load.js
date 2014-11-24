/**
 * Ajax Post Loader By: Diego Incerti
 * http://diegoincerti.com.br/
 *
 * Copyright (c) 2014 Diego Incerti
 * Licensed under the GPLv2+ license.
 */

(function($) {
	$.fn.postLoader = function(settings) {
		// Default configs
		var config = {
			'trigger' : '.btn',
			'contentAppend' : false,
			'postsNumber' : 1,
			'page' : 1,
			'maxLoads' : 5,
			'animationDuration' : 500,
			'baseUrl' : '',
			'template' : '',
			'type' : 'GET',
			'loading' : true
		};
		// Set configs
		if (settings) {
			$.extend(config, settings);
		}
		// Variables
		var $content = $(this);
		var $trigger = $content.find(config.trigger);
		// Set contente to return data
		config.contentAppend = config.contentAppend ? $content.find(config.contentAppend) : $content;
		
		/*
		 * Get the relative path of template
		 */
		var backUrl = '';
		var url = window.location.protocol + "//" + window.location.host + window.location.pathname;
		url = url.replace(config.baseUrl, '');
		url = url.split('/');
		for(var i = url.length-2;i>0;i--)
			backUrl += '../';
		config.template = backUrl + config.template;
		
		/*
		 * Ajax Function
		 */
		var load_posts = function() {
			$.ajax({
				type : config.type,
				data : {
					numPosts : config.postsNumber,
					pageNumber : config.page,
				},
				dataType : "html",
				url : config.template,
				success : function(data) {
					$data = $(data);
					$data.hide();
					config.contentAppend.append($data);
					$data.fadeIn(config.animationDuration, function() {
						config.loading = false;
					});
					if (config.page > config.maxLoads)
						$trigger.hide();
				},
				error : function(jqXHR, textStatus, errorThrown) {
					console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
				}
			});
		};
		$trigger.click(function(e) {
			e.preventDefault();
			if (!config.loading) {
				config.loading = true;
				config.page++;
				load_posts();
			}
		});
		if(config.loading)
			load_posts();
	};
})(jQuery);
