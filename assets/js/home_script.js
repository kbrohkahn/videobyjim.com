$(document).ready(function() {
	var vid=document.getElementById("fullscreen-video");
	$("#play-video").click(function() {
		$("#fullscreen-video").show(500);
		vid.play();
	});

	$("#pause-video").click(function() {
		$("#fullscreen-video").hide(500);
		vid.pause();
	});
});