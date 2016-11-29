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

	function validarCNPJ(cnpj) 
	{
	    cnpj = cnpj.replace(/[^\d]+/g,'');
	 
	    if(cnpj == '')
	    {
	    	return false;
	    } 
	     
	    if (cnpj.length != 14)
	    {
	    	return false;
	    }
	 
	    // Elimina CNPJs invalidos conhecidos
	    if (cnpj == "00000000000000" || cnpj == "11111111111111" || cnpj == "22222222222222" || cnpj == "33333333333333" || cnpj == "44444444444444" || 
	    	cnpj == "55555555555555" || cnpj == "66666666666666" || cnpj == "77777777777777" || cnpj == "88888888888888" || cnpj == "99999999999999")
	    {
	    	return false;
	    }
	         
	    // Valida DVs
	    tamanho = cnpj.length - 2
	    numeros = cnpj.substring(0,tamanho);
	    digitos = cnpj.substring(tamanho);
	    soma = 0;
	    pos = tamanho - 7;
	    
	    for (i = tamanho; i >= 1; i--) 
	    {
			soma += numeros.charAt(tamanho - i) * pos--;
			if (pos < 2)
			{
				pos = 9;
			}
	    }
	    
	    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
	    
	    if (resultado != digitos.charAt(0))
	    {
	    	return false;
	    }
	         
	    tamanho = tamanho + 1;
	    numeros = cnpj.substring(0,tamanho);
	    soma = 0;
	    pos = tamanho - 7;
	    for (i = tamanho; i >= 1; i--) 
	    {
			soma += numeros.charAt(tamanho - i) * pos--;
			if (pos < 2)
			{
				pos = 9;
			}
	    }
	    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
	    if(resultado != digitos.charAt(1))
	    {
	    	return false;
	    }else{
	    	return true;	
	    }
	}
})

<?php
	require 'config.php';
	require 'classes/Db.class.php';

	#Verifica se tem um email para pesquisa
	if(isset($_POST['email']))
	{ 
	    #Recebe o Email Postado
	    $emailPostado = $_POST['email'];

	    #Conecta banco de dados 
	    $con = mysqli_connect("localhost", "root", "", "outrasintencoes");
	    $sql = mysqli_query($con, "SELECT * FROM usuarios WHERE email = '{$emailPostado}'") or print mysql_error();

	    #Se o retorno for maior do que zero, diz que já existe um.
	    if(mysqli_num_rows($sql)>0) 
	        echo json_encode(array('email' => 'Ja existe um usuario cadastrado com este email')); 
	    else 
	        echo json_encode(array('email' => 'Usuário valido.' )); 
	}
?>