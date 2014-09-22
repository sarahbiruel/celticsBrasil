/*
 * class changeElementeVisible()
 * Hide the element visible and show the next or prev based on the data-index value
 *
 * @param obj = the element class that contain the data-index
 */

function changeElementeVisible(obj) {
	this.obj = obj;
	this.length = $(obj).length;
	this.oldCaption = 1;
	this.newCaption = 'next';

	this.setDirection = function(newDirection) {
		this.direction = newDirection;
	};

	this.setOldCaption = function() {
		this.oldCaption = $(this.obj + ':visible').data('index');
	};

	this.setNewCaption = function() {
		if (this.direction == 'next')
			this.newCaption = this.oldCaption < this.length ? this.oldCaption + 1 : 1;
		if (this.direction == 'prev')
			this.newCaption = this.oldCaption > 1 ? this.oldCaption - 1 : this.length;
	};

	this.showCaption = function() {
		this.setOldCaption();
		this.setNewCaption();
		$(this.obj).hide();
		$(this.obj + '[data-index="' + this.newCaption + '"]').show();
	};
}

var slideCaption = new changeElementeVisible('#home-slide .featured-capition');

/*
 * Slide caroufredsel plugin
 *
 * @see http://docs.dev7studios.com/jquery-plugins/caroufredsel-advanced
 */
$('#home-slide ul').carouFredSel({
	items : 1,
	transition : true,
	responsive : true,
	prev : {
		button : '.prev',
		onBefore : function(data) {
			slideCaption.setDirection('prev');
			slideCaption.showCaption();
		}
	},
	next : '.next',
	auto : {
		timeoutDuration : 5000
	},
	swipe : {
		onTouch : true
	},
	scroll : {
		fx : 'crossfade',
		items : 1,
		easing : 'linear',
		pauseOnHover : true,
		onBefore : function(data) {
			slideCaption.setDirection('next');
			slideCaption.showCaption();
		}
	}
}); 