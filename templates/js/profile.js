// открыть по кнопке
$('*#userImage').click(function() { 
	
	$('.overlay').fadeIn();
	$('.overlay').addClass('disabled');
	var src = $(this).attr('src');

	$('.popup img').attr('src', src);
});

// закрыть на крестик
$('.close-popup').click(function() { 
	$('.overlay').fadeOut();
	
});

// закрыть по клику вне окна
$(document).mouseup(function (e) { 
	var popup = $('.popup');
	if (e.target!=popup[0]&&popup.has(e.target).length === 0){
		$('.overlay').fadeOut();
		
	}
});