function getEarnings(){
	$.ajax({
	  type: "GET",
	  url: "earnings.php",
	  data: {date: $('[name="earnings"]').val()},
	  success: function(result){
	  	$('#result1').html(result);
	  	localStorage.setItem('form1Result', JSON.stringify(result));
	  	localStorage.setItem('form1Data', $('#Form1').serialize());
	  }
	});
}
function getCars(){
	$.ajax({
	  type: "GET",
	  url: "cars.php",
	  data: {mileage: $('[name="mileage"]').val()},
	  dataType: 'json',
	  success: function(result){
  		$('#result2 tbody').html('');
  		for (var i = 0; i < result.length; i++) {
	  		$('#result2 tbody').append(
	  			'<tr>'+
	  			'<td>' + result[i].model + '</td>' +
	  			'<td>' + result[i].mileage + '</td>' +
	  			'<td>' + result[i].year + '</td>' +
	  			'<td>' + result[i].condition + '</td>' +
	  			'</tr>'
	  		);
	  	}
	  	localStorage.setItem('form2Result', JSON.stringify(result));
	  	localStorage.setItem('form2Data', $('#Form2').serialize());
	  }
	});
}
function getModels(){
	$.ajax({
	  type: "GET",
	  url: "models.php",
	  dataType: 'json',
	  success: function(result){
  		$('#result3').html('');
  		for (var i = 0; i < result.length; i++) {
	  		$('#result3').append(
	  			'<li>'+
	  			'<td>' + result[i] + '</td>' +
	  			'</li>'
	  		);
	  	}
	  	localStorage.setItem('form3Result', JSON.stringify(result));
	  	localStorage.setItem('form3Data', $('#Form3').serialize());
	  }
	});
}




// LOCAL STORAGE



function getLocal1(e) {
	$('#result1').html('');
	var currentForm = $(e).parents('form');
	var result = JSON.parse(localStorage.getItem('form1Result'));
	var data = localStorage.getItem('form1Data');
	if (currentForm.serialize() === data) {
	  	$('#result1').html(result);
	} else {
		alert("Данные с такими параметрами отсутствуют!");
	}
}


function getLocal2(e) {
	$('#result2 tbody').html('');
	var currentForm = $(e).parents('form');
	var result = JSON.parse(localStorage.getItem('form2Result'));
	var data = localStorage.getItem('form2Data');
	if (currentForm.serialize() === data) {
		console.log(result);
	  	for (var i = 0; i < result.length; i++) {
	  		$('#result2 tbody').append(
	  			'<tr>'+
	  			'<td>' + result[i].model + '</td>' +
	  			'<td>' + result[i].mileage + '</td>' +
	  			'<td>' + result[i].year + '</td>' +
	  			'<td>' + result[i].condition + '</td>' +
	  			'</tr>'
	  		);
	  	}
	} else {
		alert("Данные с такими параметрами отсутствуют!");
	}
}

function getLocal3(e) {
	$('#result3').html('');
	var currentForm = $(e).parents('form');
	var result = JSON.parse(localStorage.getItem('form3Result'));
	var data = localStorage.getItem('form3Data');
	if (currentForm.serialize() === data) {
	  	for (var i = 0; i < result.length; i++) {
	  		$('#result3').append(
	  			'<li>'+
	  			'<td>' + result[i] + '</td>' +
	  			'</li>'
	  		);
	  	}
	} else {
		alert("Данные с такими параметрами отсутствуют!");
	}
}