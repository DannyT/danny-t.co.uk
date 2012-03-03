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
	DT.global.menuButton = $(".menu-button");

	DT.global.menuButton.click(DT.global.showMenu);
})

DT.global.showMenu = function (event) {
    if (DT.global.menu.is(":visible"))
    	DT.global.menu.slideUp({complete:function(){$(this).css('display','')}});
	else
	    DT.global.menu.slideDown();
}