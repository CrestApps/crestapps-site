$(function(){

	
	$(document).on('load resize affix.bs.affix', '#docs-menu', function() {
	    $(this).width( $(this).parent().width());
	});

	$('.list-group-item').on('click', function() {
		$('.glyphicon', this).toggleClass('glyphicon-chevron-down')
		                     .toggleClass('glyphicon-chevron-right');
	});

});


