jQuery(document).ready(function($) {
	$(".ajax-contact-form").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/submit.php",
			data: str,
			success: function(msg) {
				if (msg == 'OK') {
					result = '<p>Your application is accepted</p>';
					$(".fields").hide();
				} else {
					result = msg;
				}
				$('.note').html(result);
			}
		});
		return false;
	});
});

