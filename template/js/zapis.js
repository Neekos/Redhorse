// $('.mod').click(function(){
// 	var product = $(this).data('product'),
// 		val1 = $(this).data('val1'),
// 		val2 = $(this).data('val2'),
// 		val3 = $(this).data('val3'),
// 		val4 = $(this).data('val4'),
// 		val5 = $(this).data('val5');
		
// 		if (val3 == 0) {
// 			val3 = "нет";
// 		};

// 		if (val5 == '') {
// 			document.getElementById('bk').style.display = "none"
// 		}else{
// 			document.getElementById('bk').style.display = "block"
// 		}

// 		$('#product').val(product);
// 		$('#val1').val(val1);
// 		$('#val2').val(val2);
// 		$('#val3').val(val3);
// 		$('#val4').val(val4);
// 		$('#val5').val(val5);

// 		$("#iiiii").modal();
		

// 		console.log(product, val1, val2, val3, val4 , val5);

// 		var radio = document.getElementsByName('week');

// 		for (var i = 0; i < radio.length; i++) {
// 			radio[i].onchange = testRadio;
// 		}

// 		function testRadio(){
// 			console.log(this.value);
// 		}

// 		document.getElementById('push').onclick = checkRadio;

// 		function checkRadio(){
// 			var m = document.getElementsByName('week'),
// 			valprice = $(this).data('valprice');
// 			for (var i = 0 ; i <m.length; i++) {
// 				if (m[i].checked) {
// 					valprice = m[i];
// 					console.log(product, val1, val2, val3, valprice);
// 					break;
// 				}
// 			}
// 		}

// 		return false;
// });
