(function ($, root, undefined) {

	$(function () {
		'use strict';

		$('.hover').on('mouseenter', function(event){
			console.log('mouseover');
	    $(this).find('.showItem').fadeIn();
		});

		$('.hover').on('mouseleave', function(event){
				console.log('mouseout');
		    $(this).find('.showItem').stop().fadeOut();
		});

      $('.caseStudy').click(function() {
				$('.ui.large.modal')
	  .modal('show')
	;
      });

		$('.contactModal').click(function() {
				$('.ui.small.modal.contact')
		.modal('show')
	;
			});

			$('.ui.accordion')
				  .accordion()
				;
	});

})(jQuery, this);
