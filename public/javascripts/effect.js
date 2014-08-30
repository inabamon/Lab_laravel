$(document).ready(function() {
	$('.open_date').datepicker({
		changeYear: true,
		changeMonth:true,
		maxDate: '+0d',
		showOn: 'focus',
		yearRange: '-100:+100',
		buttonImageOnly: true,
		dateFormat:'yy-mm-dd',
		dayNamesMin:['日','一','二','三','四','五','六'],
		monthNamesShort:['1','2','3','4','5','6','7','8','9','10','11','12'],
		prevText:'上月',
		nextText:'次月'
	});

	$('.order_date').datepicker({
		changeYear: true,
		changeMonth:true,
		maxDate: '+0d',
		showOn: 'focus',
		yearRange: '-100:+100',
		buttonImageOnly: true,
		dateFormat:'yy-mm-dd',
		dayNamesMin:['日','一','二','三','四','五','六'],
		monthNamesShort:['1','2','3','4','5','6','7','8','9','10','11','12'],
		prevText:'上月',
		nextText:'次月'
	});

	$('[name = send]').click(function() {
		var if_select_has_empty = 0,
			$orderDate = $('#orderDate'),
			$selectAmount = $('.js-select_amount');
		if ($orderDate.length != 0 && $orderDate.val() == '') {
			alert('請選擇日期');
			$orderDate.focus();
			return false;
		}
		if ($selectAmount.length != 0) {
			$selectAmount.each(function() {
				if ($(this).val() !== '') {
					if_select_has_empty += 1;
				}
			});
			if (if_select_has_empty == 0) {
				alert('請選擇任一藥品');
				return false;
			}
		}
	});

//	$('.remark').focusout(function() {
//		var	$remark = $(this).val(),
//			$id = $(this).next().val();
//		$.ajax({
//			url: 'ajax/update_bd_imag_remark.php',
//			type: 'POST',
//			dataType: 'json',
//			data: {
//				id: $id,
//				remark: $remark
//			},
//		})
//			.done(function (response) {
//				// console.log(response);
//			})
//			.fail(function (xhr) {
//				// console.log('error');
//			})
//	});

//	$('.open_date').change(function() {
//		var	$open_date = $(this).val(),
//			$num = $(this).parent().parent().children().eq(0).text(),
//			$prev_date = $('.open_date').eq($(this).parent().parent().index()).val(),
//			$item_name = $('#item_name').text(),
//			$this = $(this);
//		// alert($prev_date);
//		if ($open_date == '') {
//			return false;
//		};
//		console.log($num);
//		console.log($open_date);
//		console.log($prev_date);
//		console.log($item_name);
//		$.ajax({
//			url: 'ajax/update_bd_imag_open_date.php',
//			type: 'POST',
//			dataType: 'json',
//			data: {
//				num: $num,
//				open_date: $open_date,
//				prev_date: $prev_date,
//				item_name: $item_name
//			},
//		})
//			.done(function (response) {
//				if (response != '') {
//					// console.log(response);
//					window.location.reload();
//				};
//			})
//			.fail(function (xhr) {
//				// console.log('error');
//			})
//	});

//	$('.item_remark').focusout(function() {
//		var	$num = $(this).parent().parent().children().eq(0).text(),
//			$item_name = $('#item_name').text(),
//			_index = $(this).parent().parent().index()-1,
//			$lot = $('.lot').eq(_index).val(),
//			$exp_date = $('.exp_date').eq(_index).val();
//		$.ajax({
//			url: 'ajax/update_bd_imag_other.php',
//			type: 'POST',
//			dataType: 'json',
//			data: {
//				item_name: $item_name,
//				num: $num,
//				lot: $lot,
//				exp_date: $exp_date
//			},
//		})
//			.done(function (response) {
//				// console.log(response);
//			})
//			.fail(function (xhr) {
//				// console.log('error');
//			})
//	});
});