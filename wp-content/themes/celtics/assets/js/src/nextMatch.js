/**
 * Next Match Timer
 */

var MatchTimer = function(obj) {
	this.$matchObj = $(obj);
	var matchWidthObj = [];
	
	this.setMatchWidthObj = function(obj) {
		matchWidthObj = [];
		if(obj instanceof Array) {
			for (var i = 0; i < obj.length; i++){
				matchWidthObj.push($(obj[i]));}
		} else {
			matchWidthObj.push($(obj));
		}
	};
	
	var getMatchWidth = function() {
		var matchWidth = 0;
		if(matchWidthObj instanceof Array) {
			for (var i = 0; i < matchWidthObj.length; i++)
				matchWidth += matchWidthObj[i].outerWidth();
		}
		
		return matchWidth;
	};
	
	this.showMatch = function(left,time, extraSize) {
		extraSize = typeof extraSize === undefined ? 0 : extraSize;
		var newWidth = 0;
		newWidth = getMatchWidth() + extraSize;
		this.$matchObj.width(newWidth).animate({
			'left' : left
		}, time);
	};
	
};