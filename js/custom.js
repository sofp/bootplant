
// menu
jQuery(function($) {
    $(window).on("load", ReLayout); 

	function ReLayout() {
		if ($( window ).width() < 768) {
			$("li.dropdown-submenu ul").removeClass('dropdown-menu');
			$("li.dropdown-submenu ul").addClass('sub-menu');
			$("li.dropdown-submenu ul").hide();
			$("li.dropdown-submenu button.dropdown-toggle").click(function() {
				$("li.dropdown-submenu ul").toggle();
			});
		}
	}
});

