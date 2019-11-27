$(document).ready( function() {

$( "#loading" ).hide();

$("#categoria-selecta").change(function(){

	$.ajax({
			"type": "POST",
			"url" : "php/cidades.php",
			 data: {title:$(this).val()} ,
			"success" : function(data){

				$("#resultado").html(data);
				

			}

				
			});
	return false;

});
	$( document ).ajaxStart(function() {
		$( "#loading" ).show();
	}).ajaxStop(function() {
		$( "#loading" ).hide();
	});;
})