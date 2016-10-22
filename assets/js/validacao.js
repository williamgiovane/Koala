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

	function ptMes()
	{
		var a = $("#calendar h2").text();
		var d = $("#calendar h2");
		var b = a.split(" ",1);

		switch(b[0]){
			case 'January':
				var c = a.replace(b,"Janeiro");
				d.text(c);
			break;
			case 'February':
				var c = a.replace(b,"Fevereiro");
				d.text(c);
			break;
			case 'March':
				var c = a.replace(b,"Março");
				d.text(c);
			break;
			case 'April':
				var c = a.replace(b,"Abril");
				d.text(c);
			break;
			case 'May':
				var c = a.replace(b,"Maio");
				d.text(c);
			break;
			case 'June':
				var c = a.replace(b,"Junho");
				d.text(c);
			break;		

			case 'July':
				var c = a.replace(b,"Julho");
				d.text(c);
			break;

			case 'August':
				var c = a.replace(b,"Agosto");
				d.text(c);
			break;

			case 'September':
				var c = a.replace(b,"Setembro");
				d.text(c);
			break;

			case 'October':
				var c = a.replace(b,"Outubro");
				d.text(c);
			break;

			case 'November':
				var c = a.replace(b,"Novembro");
				d.text(c);
			break;

			case 'December':
				var c = a.replace(b,"Dezembro");
				d.text(c);
			break;
		}
	}

	function ptDiaDaSemana()
	{
		$(".fc-head .fc-sun").text("Domingo");
		$(".fc-head .fc-mon").text("Segunda");
		$(".fc-head .fc-tue").text("Terça");
		$(".fc-head .fc-wed").text("Quarta");
		$(".fc-head .fc-thu").text("Quinta");
		$(".fc-head .fc-fri").text("Sexta");
		$(".fc-head .fc-sat").text("Sábado");
	}
})