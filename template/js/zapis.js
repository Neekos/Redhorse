$('.mod').click(function(){
	var product = $(this).data('product'),
		val1 = $(this).data('val1'),
		val2 = $(this).data('val2'),
		val3 = $(this).data('val3'),
		val4 = $(this).data('val4'),
		val5 = $(this).data('val5');
		if (val3 == 0) {
			val3 = "нет";
		};

		if (val5 == '') {
			document.getElementById('bk').style.display = "none"
		}else{
			document.getElementById('bk').style.display = "block"
		}

		$('#product').val(product);
		$('#val1').val(val1);
		$('#val2').val(val2);
		$('#val3').val(val3);
		$('#val4').val(val4);
		$('#val5').val(val5);

		$("#iiiii").modal();
		

		console.log(product, val1, val2, val3, val4 , val5);
		return false;
});