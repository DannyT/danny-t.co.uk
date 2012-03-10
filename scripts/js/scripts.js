var DT = DT || {};

DT.global = {};

DT.global.header = undefined;
DT.global.nav = undefined;
DT.global.menu = undefined;
DT.global.menuButton = undefined;


DT.global.showMenu = function (event) {
    if (DT.global.menu.getStyle('display')[0] == 'block')
    	DT.global.menu.css({'display':'none'});
	else
	    DT.global.menu.css({'display':'block'});
}

xui.ready(function() { 
	DT.global.header = x$("header");
	DT.global.nav = x$("header nav");
	DT.global.menu = x$("header nav ul");
	DT.global.menuButton = x$(".menu-button");

	DT.global.menuButton.click(DT.global.showMenu);
});
