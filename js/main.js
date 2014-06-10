$(function() {
	$('.time:not(.turnoff, .dis)').click(function(){
		var str =	$(this).attr('data-date') +
					' ('+ $(this).attr('data-day') +') '+
					$(this).attr('data-time') +
					'<br><strong>'+$(this).attr('data-price')+' </strong>руб.';
		$('.modal-title').html(str);
		$('.formaModal .modal-body form').show();
		$('.formaModal .modal-body h4').hide();
		$('.formaModal').modal('show');
	});



	$('.btn-block.btn-lg').click(function(){
		$.post(
			"send.php",
			{
				name: $('#name').val(),
				phone: $('#phone').val(),
				mail: $('#mail').val(),
				title_quest: $('#title_quest').text(),
				inf: $('#myModalLabel').text()
			},
			function( data ) {
				if (data == '1') {
					$('#name').val('');
					$('#phone').val('');
					$('#mail').val('');
					$('.formaModal .modal-body form').fadeOut(function(){
						$('.formaModal .modal-body h4').fadeIn(400, function() {
							$('.formaModal').modal('hide');
						});
					});
				} else {
					console.log(data);
					alert(data);
				}
			}
		);
		return false;
	})
});