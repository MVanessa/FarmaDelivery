$(document).ready(function(){
	$("#busca").on("keyup", function() {
    	var valor = $(this).val().toLowerCase();
    	$("#minha-tabela tr").filter(function() {
      		$(this).toggle($(this).text().toLowerCase().indexOf(valor) > -1)
    	});
  	});
});