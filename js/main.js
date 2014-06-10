$(function() {
	$('.time:not(.turnoff, .dis)').click(function(){
		var str =	$(this).attr('data-date') +
					' ('+ $(this).attr('data-day') +') '+
					$(this).attr('data-time') +
					'<br><strong>'+$(this).attr('data-price')+' </strong>руб.';
		$('.modal-title').html(str);
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
				console.log(data)
			}
		);
		return false;
	})
});