$(function(){
$('#proiecte').click(function(){

	$('#modal').modal('show')
		.find('#modalContent')
		.load($(this).attr('value'));

	});

$('#contact').click(function(){

	$('#modalcontact').modal('show')
		.find('#modalContact')
		.load($(this).attr('value'));

	});

$('#mesaje').click(function(){

	$('#modalmesaje').modal('show')
		.find('#modalMesaje')
		.load($(this).attr('value'));

	});

});
