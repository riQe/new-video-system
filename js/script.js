// Menu Resizing
$(document).on("scroll", function(){

	var armScroll = $(document).scrollTop();
	if(armScroll >= 200) {
		$("header").removeClass("large").addClass("small");
	}else {
		$("header").removeClass("small").addClass("large");
	}

});
// Menu Resizing END

// Video Test

$(document).ready(function() {

	var vid = document.getElementById("videot");
	vid.volume = 0.4;

});

var i = window.setInterval("repeatTime();", 200); // repeat the function

function repeatTime() {


$(document).ready(function() {

	var vid = document.getElementById("videot"); // Selected the video by id
	var min = parseInt(vid.currentTime / 60, 10); //  Minutes
	var sec = parseInt(vid.currentTime % 60); // Seconds

	
	$(".dur").html(min + "." + sec); // print the min and sec in class

});

}

// Video Test END