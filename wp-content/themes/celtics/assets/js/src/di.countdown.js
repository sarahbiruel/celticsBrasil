/**
 * Countdown By: Diego Incerti
 * http://diegoincerti.com.br/
 *
 * Copyright (c) 2014 Diego Incerti
 * Licensed under the GPLv2+ license.
 */

(function($) {
	$.fn.countdown = function(settings) {
		var config = {
			'delay' : 1000,
			'offsetIndex' : 2
		};
		if (settings) {
			$.extend(config, settings);
		}

		// variables
		var obj = $(this);
		var elements = obj.find('> *');
		var elementIndex = elements.length - 1;
		var childrenIndex = elements.first().find('> *').length - config.offsetIndex;
		var maxValue = 9;

		/**
		 * Decrement the numbers usin recursion
		 *
		 * var elementIndex for the day, hour, min, sec.. container
		 * var childrenIndex for the unit, dozens elements
		 *
		 * note: the hour needs to have a class .hour
		 */
		function decrement(elementIndex, childrenIndex) {
			
			// right value for minutes and seconds
			maxValue = childrenIndex == 1 ? 9 : 5;
			
			// right value for hour
			if (elements.eq(elementIndex).hasClass('hour')) {
				if (childrenIndex == 1 && elements.eq(elementIndex).find('> *').eq(childrenIndex - 1).html() < 1)
					maxValue = 3;
				if (childrenIndex == 0)
					maxValue = 2;
			}
			
			// current element value
			currentValue = elements.eq(elementIndex).find('> *').eq(childrenIndex).html();
			
			if (currentValue == 0) {
				
				currentValue = maxValue;
				elements.eq(elementIndex).find('> *').eq(childrenIndex).html(currentValue);
				
				if (childrenIndex == 0) {
					
					if (elementIndex != 0)
						elementIndex--;
						
					childrenIndex++;

				} else
					childrenIndex--;

				decrement(elementIndex, childrenIndex);

			} else {
				currentValue--;
				elements.eq(elementIndex).find('> *').eq(childrenIndex).html(currentValue);
			}

			return;
		}

		// run
		setInterval(function() {
			// valid if the time it's not equal to 0
			for(i=0;i<=elementIndex;i++){
				for(j=0;j<=childrenIndex;j++){
					if(elements.eq(i).find('> *').eq(j).html() != 0){
						// call decrement function
						decrement(elementIndex, childrenIndex);
						return 0;
					}
				}
			}
		}, config.delay);

		return this;

	};
})(jQuery);
