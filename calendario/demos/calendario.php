<meta charset='utf-8' />
<link href='calendario/fullcalendar.css' rel='stylesheet' />
<script src='calendario/lib/moment.min.js'></script>
<script src='calendario/lib/jquery.min.js'></script>
<script src='calendario/lib/jquery-ui.min.js'></script>
<script src='calendario/fullcalendar.min.js'></script>
<script>	
	$(document).ready(function() 
	{
		!function(e){"function"==typeof define&&define.amd?define(["jquery","moment"],e):"object"==typeof exports?module.exports=e(require("jquery"),require("moment")):e(jQuery,moment)}(function(e,a){!function(){var e=a.defineLocale("pt-br",{months:"Janeiro_Fevereiro_Março_Abril_Maio_Junho_Julho_Agosto_Setembro_Outubro_Novembro_Dezembro".split("_"),monthsShort:"Jan_Fev_Mar_Abr_Mai_Jun_Jul_Ago_Set_Out_Nov_Dez".split("_"),weekdays:"Domingo_Segunda-feira_Terça-feira_Quarta-feira_Quinta-feira_Sexta-feira_Sábado".split("_"),weekdaysShort:"Dom_Seg_Ter_Qua_Qui_Sex_Sáb".split("_"),weekdaysMin:"Dom_2ª_3ª_4ª_5ª_6ª_Sáb".split("_"),weekdaysParseExact:!0,longDateFormat:{LT:"HH:mm",LTS:"HH:mm:ss",L:"DD/MM/YYYY",LL:"D [de] MMMM [de] YYYY",LLL:"D [de] MMMM [de] YYYY [às] HH:mm",LLLL:"dddd, D [de] MMMM [de] YYYY [às] HH:mm"},calendar:{sameDay:"[Hoje às] LT",nextDay:"[Amanhã às] LT",nextWeek:"dddd [às] LT",lastDay:"[Ontem às] LT",lastWeek:function(){return 0===this.day()||6===this.day()?"[Último] dddd [às] LT":"[Última] dddd [às] LT"},sameElse:"L"},relativeTime:{future:"em %s",past:"%s atrás",s:"poucos segundos",m:"um minuto",mm:"%d minutos",h:"uma hora",hh:"%d horas",d:"um dia",dd:"%d dias",M:"um mês",MM:"%d meses",y:"um ano",yy:"%d anos"},ordinalParse:/\d{1,2}º/,ordinal:"%dº"});return e}(),e.fullCalendar.datepickerLocale("pt-br","pt-BR",{closeText:"Fechar",prevText:"&#x3C;Anterior",nextText:"Próximo&#x3E;",currentText:"Hoje",monthNames:["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"],monthNamesShort:["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],dayNames:["Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado"],dayNamesShort:["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],dayNamesMin:["Dom","Seg","Ter","Qua","Qui","Sex","Sáb"],weekHeader:"Sm",dateFormat:"dd/mm/yy",firstDay:0,isRTL:!1,showMonthAfterYear:!1,yearSuffix:""}),e.fullCalendar.locale("pt-br",{buttonText:{month:"Mês",week:"Semana",day:"Dia",list:"Compromissos"},allDayText:"dia inteiro",eventLimitText:function(e){return"mais +"+e},noEventsMessage:"Não há eventos para mostrar"})});
		/* initialize the external events
		-----------------------------------------------------------------*/
		$('#external-events .fc-event').each(function() 
		{
			// store data so the calendar knows to render an event upon drop
			$(this).data('event', {
				title: $.trim($(this).text()), // use the element's text as the event title
				stick: true // maintain when user navigates (see docs on the renderEvent method)
			});

			// make the event draggable using jQuery UI
			$(this).draggable(
			{
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});
		});

		/* initialize the calendar
		-----------------------------------------------------------------*/
		$('#calendar').fullCalendar(
		{
			header: 
			{
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: true,
			droppable: true, // this allows things to be dropped onto the calendar
			drop: function() {
				// is the "remove after drop" checkbox checked?
				if ($('#drop-remove').is(':checked')) {
					// if so, remove the element from the "Draggable Events" list
					$(this).remove();
				}
			}
		});

	});

</script>
<style>
	body 
	{
		text-align: center;
		font-size: 14px;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
	}
		
	#wrap 
	{		
		width: 1100px;
		margin: 0 auto;
	}
		
	#external-events 
	{
		float: left;
		width: 150px;
		padding: 0 10px;
		border: 1px solid #ccc;
		background: #eee;
		text-align: left;
	}
		
	#external-events h4 
	{
		font-size: 16px;
		margin-top: 0;
		padding-top: 1em;
	}
		
	#external-events .fc-event 
	{
		margin: 10px 0;
		cursor: pointer;
	}
		
	#external-events p 
	{
		margin: 1.5em 0;
		font-size: 11px;
		color: #666;
	}
		
	#external-events p input 
	{
		margin: 0;
		vertical-align: middle;
	}

	#calendar 
	{
		float: right;
		width: 900px;
	}

</style>
</head>
<body>
	<div id='wrap'>
		<div id='external-events'>
			<h4>Pontos turisticos</h4>
			<div class='fc-event'>Parque Vila Germânica</div>
			<div class='fc-event'>Catedral São Paulo Apóstolo</div>
			<div class='fc-event'>Teatro Carlos Gomes</div>
			<div class='fc-event'>Parque Ramiro Ruediger</div>
			<div class='fc-event'>Praia dos Ingleses</div>
			<div class='fc-event'>Museu de Arte de Santa Catarina</div>
			<div class='fc-event'>Estádio Orlando Scarpelli</div>
			<div class='fc-event'>Santo Antônio de Lisboa</div>
		</div>

		<div id='calendar'></div>

		<div id='external-events'>
			<h4>Restaurantes</h4>
			<div class='fc-event'>Thapyoka</div>
			<div class='fc-event'>Moinho do Vale</div>
			<div class='fc-event'>Ataliba</div>
			<div class='fc-event'>Pepper Jack</div>
			<div class='fc-event'>João de Barro</div>
			<div class='fc-event'>Antonio's</div>
			<div class='fc-event'>Pousada dos Sonhos</div>
			<div class='fc-event'>Delícias Portuguesas</div>
		</div>

		<div id='external-events'>
			<h4>Pub's e baladas</h4>
			<div class='fc-event'>The Basement English Pub</div>
			<div class='fc-event'>Ahoy Tavern Club</div>
			<div class='fc-event'>Winchester Pub</div>
			<div class='fc-event'>Rivage</div>
			<div class='fc-event'>Fields</div>
			<div class='fc-event'>Sete Night Club</div>
			<div class='fc-event'>The Roof</div>
			<div class='fc-event'>Cervejaria Devassa</div>
		</div>

		<div id='external-events'>
			<p>
				<input type='checkbox' id='drop-remove' />
				<label for='drop-remove'>Remover depois de colocar</label>
			</p>
		</div>

		<div style='clear:both'></div>
	</div>