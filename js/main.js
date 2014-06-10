$(function() {
	$('.time:not(.turnoff, .dis)').click(function(){
		var str =	$(this).attr('data-date') +
					' ('+ $(this).attr('data-day') +') '+
					$(this).attr('data-time') +
					'<br><strong>'+$(this).attr('data-price')+' </strong>руб.';
		$('.modal-title').html(str);
		$('.formaModal').modal('show');
	});
});