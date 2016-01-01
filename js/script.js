// Menu Resizing
$(document).on("scroll", function(){

	var armScroll = $(document).scrollTop();
	if(armScroll >= 200) {
		$("header").removeClass("large").addClass("small");
	}else {
		$("header").removeClass("small").addClass("large");
	}

});
// Menu Resizing end