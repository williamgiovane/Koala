$(document).ready(function()
{	
	$(".cpf").mask("99.999.999-99");
	$(".cnpj").mask("99.999.999/9999-99");
	$(".cep").mask("99999-999");
	$(".phone").mask("(99) 9999-9999");
	$(".data").mask("99/99/9999",{placeholder:"dd/mm/aaaa"});
	$(".hora").mask("99:99",{placeholder:"hh/mm"});

	$("#formCadUsuario").validate(
	{

	});
})