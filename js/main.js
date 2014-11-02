$(function() {
	 Goodnight.css('http://iconyard.com/wp-content/themes/icon-yard/css/night.min.css')

	$('[data-button="theme-toggle"]').click(function() {
		Goodnight.toggle();

		$('[data-element="night"]').toggleClass('display-none');
		$('[data-element="day"]').toggleClass('display-block');
		$('[data-element="day"]').toggleClass('display-none');
	});

	$(document).on('change', '.svg-upload :file', function() {
	    var input = $(this),
	        numFiles = input.get(0).files ? input.get(0).files.length : 1,
	        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
	    input.trigger('fileselect', [numFiles, label]);
	});

	$('.svg-upload :file').on('fileselect', function(event, numFiles, label) {
		$('.svg-name').html(label+' attached.');
    });

});