$(document).ready(function() {
	var vid=document.getElementById("fullscreen-video");
	$("#play-video").click(function() {
		$("#fullscreen-video").show():
		vid.play();
	});

	$("#pause-video").click(function() {
		vid.pause();
	});
});