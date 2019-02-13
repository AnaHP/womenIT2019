var end = new Date('03/13/2019 8:30 AM');

var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour * 24;
var timer;

function showRemaining() {
	var now = new Date();
	var distance = end - now;
	if (distance < 0) {

		clearInterval(timer);
		document.getElementById('countdown').innerHTML = 'EXPIRED!';

		return;
	}
	var days = Math.floor(distance / _day);
	var hours = Math.floor((distance % _day) / _hour);
	var minutes = Math.floor((distance % _hour) / _minute);
	var seconds = Math.floor((distance % _minute) / _second);

	var textDays = document.getElementById('textDay');
	var textHours = document.getElementById('textHours');
	var textMinutes = document.getElementById('textMinutes');
	var textSeconds = document.getElementById('textSeconds');


	document.getElementById('days').innerHTML = days;
	textDays.innerHTML = 'días';
	document.getElementById('hours').innerHTML = hours;
	textHours.innerHTML = 'horas';
	document.getElementById('minutes').innerHTML = minutes;
	textMinutes.innerHTML = 'minutos';
	document.getElementById('second').innerHTML  = seconds;
	textSeconds.innerHTML = 'segundos';

}

timer = setInterval(showRemaining, 1000);



function animationLabel(){
	$('input').focus(function(){
		$(this).parents('.form-group').addClass('focused');
	});
	$('select').focus(function(){
		$(this).parents('.form-group').addClass('focused');
	});

	$('input').blur(function(){
		var inputValue = $(this).val();
		if ( inputValue == "" ) {
			$(this).removeClass('filled');
			$(this).parents('.form-group').removeClass('focused');  
		} else {
			$(this).addClass('filled');
		}
	}) 

	$('select').blur(function(){
		var select = $(this).val();
			$(this).removeClass('filled');
			$(this).parents('.form-group').removeClass('focused');  
		
	}) 

} 


function dateInpuntCleave(){
	var cleave = new Cleave('.input-element', {
		date: true,
		datePattern: ['Y', 'm', 'd']
	});
}
