var DT = DT || {};

DT.global = {};

DT.global.header = undefined;
DT.global.nav = undefined;
DT.global.menu = undefined;
DT.global.menuButton = undefined;

$(document).ready(function(){

	DT.global.header = $("header");
	DT.global.nav = $("header nav");
	DT.global.menu = $("header nav ul");

	DT.global.menuButton = $("<div class='menu'><a href='#'>menu</a></div>");
	DT.global.menuButton.click(DT.global.showMenu);
	DT.global.header.append(DT.global.menuButton);
})

DT.global.showMenu = function (event) {
    if (DT.global.menu.is(":visible"))
    	DT.global.menu.slideUp();
	else
	    DT.global.menu.slideDown();
}