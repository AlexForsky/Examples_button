$(document).ready(function() {
	// body...
	$("#form").submit() {
		$ajax({
			type: "POST",
			url: "php/mail.php"
			data: $(this).serialize()
		}).done(function() {
			alert("Спасибо за заявку! Мы скоро с вами свяжемся.");
		});
		return false;
	};
});