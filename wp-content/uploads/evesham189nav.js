$(document).ready(function() {
	$('#nav-toggle').click(function() {
		$('.wpc-menu').toggleClass('wpc-menu-mobile');

		$('.wpc-menu li.menu-item-has-children').each(function() {
            $(this).prepend('<div class="nav-toggle-subarrow"><i class="fa fa-angle-down"></i></div>');
        });

		$('.nav-toggle-subarrow, .nav-toggle-subarrow .nav-toggle-subarrow').click(function() {
            $(this).parent().toggleClass("nav-toggle-dropdown");
        });
	});
});
