/**
 * @author rd
 */

$(document).ready(function() {
	$("div.menu-list div.menu-item").each(function () {
		$(this).find("ul li:odd").addClass("paire");
	}); 
});
