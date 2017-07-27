// SLIDER
	var i =0;
	var images = ['img/img-slider-01.jpg', 'img/img-slider-02.jpg', 'img/img-slider-03.jpg', 'img/img-slider-04.jpg'];

	function slider() {
		document.getElementById('slider').src=images[i];

		if(i < images.length -1) {
			i++;
		} else {
			i = 0;
		}
		var t = setTimeout("slider()", 3000);
	}
