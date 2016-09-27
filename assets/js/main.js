$(document).ready(function() {
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		$("html").addClass("mobile");
	}

	var slogan = document.getElementById("slogan")
	var top = 1;
	if (slogan != null) {
		top = slogan.getBoundingClientRect().top;
	}

	$(window).scroll(function() {
		var position = $(window).scrollTop();
		$("#desktop-header").css("background", "rgba(246, 156, 156, " + position/top + ")");
	});
});

function toggleNavbar() {
	if ($("#main-navbar").css("left") == "0px") {
		closeNavbar();
	} else {
		openNavbar();
	}
}

function closeNavbar() {
	$("#content-cover").hide();
	$("#main-navbar").animate({
		left: "-240px"
	}, 500, function() {
		$("#main-navbar").hide();
	});
}

function openNavbar() {
	$("#content-cover").show();
	$("#main-navbar").show();
	$("#main-navbar").animate({
		left: "0px"
	}, 500);
}

function openVimeoSearch() {
	var searchKeyValue = $("#search-key").val();

	window.location = "https://vimeo.com/videographybyjimalthoff/videos/search:"+searchKeyValue+"/sort:date";
}