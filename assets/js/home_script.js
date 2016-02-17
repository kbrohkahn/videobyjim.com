$(document).ready(function() {
	var vid = document.getElementById("fullscreen-video"); 
	if (vid != null) {
		vid.play()	
	}

	$("#play-video").click(function() {
		vid.play();
	});

	$("#pause-video").click(function() {
		vid.pause();
	});
});