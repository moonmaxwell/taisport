$( document ).ready(function() {
	$('#currency').click(function(){
		$('.modal-body').removeClass("bg-danger").addClass("bg-success")
	})

	$('#currency2').click(function(){
		$('.modal-body').removeClass("bg-success").addClass("bg-danger")
	})
});