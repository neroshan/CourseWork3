var Wrapper = function() {
	var SLIDES_NUMBER = 4;
	var TIMER = 2300;
	var current = 1;
	
	var nextSlide = function() {
		current++;
		if (current % SLIDES_NUMBER == 0) {
			current = 0;
		}
		return current;
	};
	
	window.setInterval(function() {
		var src = document.getElementById('slide_show_img').src = "img/ss" + nextSlide() + ".png";
		console.log(src);
	}, TIMER);
}()