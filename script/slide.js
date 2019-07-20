
SIDEBAR_FLAG = false;

DEPTH_FLAG = 0;
SELECTED_MENU_ID = "";

$(window).load(function () {

	$(".main-content").click(function (event) {
		event.stopPropagation();
		var sidebar = $("[data-toggle]").data("toggle");

		if(SIDEBAR_FLAG) {
			SIDEBAR_FLAG = false;
			$(sidebar).removeClass("open-sidebar");
		}
	})

	$("[data-toggle]").click(function (event) {
		event.stopPropagation();
		var sidebar = $(this).data("toggle");

		if(SIDEBAR_FLAG) {
			SIDEBAR_FLAG = false;
			$(sidebar).removeClass("open-sidebar");
		} else {
			SIDEBAR_FLAG = true;
			$(sidebar).addClass("open-sidebar");
		}
	});

	$("#leftside-navigation .sub-menu > a").click(function (e) {
			var toggleFlag = true;
			var ulNode = $(this).next();

			if(SELECTED_MENU_ID == ulNode.attr('id')) {
				ulNode.slideUp();
				toggleFlag = false;

			} else {
				if(ulNode.hasClass("depth-1")) {
					if(DEPTH_FLAG == 0) {
						ulNode.slideDown();

					} else if(DEPTH_FLAG == 1) {
						$(".depth-1").slideUp();
						ulNode.slideDown();

					} else {
						$(".depth-5").slideUp();
						$(".depth-4").slideUp();
						$(".depth-3").slideUp();
						$(".depth-2").slideUp();
						$(".depth-1").slideUp();

						var id = ulNode.attr('id');
						splitId = id.split('0');

						if(SELECTED_MENU_ID.substring(0, splitId[0].length) != splitId[0]) {
							ulNode.slideDown();
						} else {
							toggleFlag = false;
						}
					}

					DEPTH_FLAG = 1;

				} else if(ulNode.hasClass("depth-2")) {
					if(DEPTH_FLAG == 0) {
						// impossible..
					} else if(DEPTH_FLAG == 1) {
						ulNode.slideDown();
					} else if(DEPTH_FLAG == 2){
						$(".depth-2").slideUp();
						ulNode.slideDown();
					} else {
						$(".depth-5").slideUp();
						$(".depth-4").slideUp();
						$(".depth-3").slideUp();
						$(".depth-2").slideUp();

						var id = ulNode.attr('id');
						splitId = id.split('0');

						if(SELECTED_MENU_ID.substring(0, splitId[0].length) != splitId[0]) {
							ulNode.slideDown();
						} else {
							toggleFlag = false;
						}
					}

					DEPTH_FLAG = 2;

				} else if(ulNode.hasClass("depth-3")) {
					if(DEPTH_FLAG <= 1) {
						// impossible..
					} else if(DEPTH_FLAG == 2) {
						ulNode.slideDown();
					} else if(DEPTH_FLAG == 3) {
						$(".depth-3").slideUp();
						ulNode.slideDown();
					} else {
						$(".depth-5").slideUp();
						$(".depth-4").slideUp();
						$(".depth-3").slideUp();

						var id = ulNode.attr('id');
						splitId = id.split('0');

						if(SELECTED_MENU_ID.substring(0, splitId[0].length) != splitId[0]) {
							ulNode.slideDown();
						} else {
							toggleFlag = false;
						}
					}

					DEPTH_FLAG = 3;
				}
			}

			if(toggleFlag) {
				SELECTED_MENU_ID = ulNode.attr('id');
			} else {
				SELECTED_MENU_ID = "";
			}
	})
});
