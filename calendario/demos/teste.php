<meta charset='utf-8' />
<link href='calendario/fullcalendar.css' rel='stylesheet' />
<script src='calendario/lib/moment.min.js'></script>
<script src='calendario/lib/jquery.min.js'></script>
<script src='calendario/lib/jquery-ui.min.js'></script>
<script src='calendario/fullcalendar.min.js'></script>
<script>	
	$(document).ready(function() 
	{
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
		</div>

		<div id='calendar'></div>

		<div id='external-events'>
			<h4>Restaurantes</h4>
			<div class='fc-event'>Thapyoka</div>
			<div class='fc-event'>Moinho do Vale</div>
			<div class='fc-event'>Ataliba</div>
			<div class='fc-event'>Pepper Jack</div>
		</div>

		<div id='external-events'>
			<h4>Pub's e baladas</h4>
			<div class='fc-event'>The Basement English Pub</div>
			<div class='fc-event'>Ahoy Tavern Club</div>
			<div class='fc-event'>Winchester Pub</div>
			<div class='fc-event'>Rivage</div>
		</div>

		<div id='external-events'>
			<p>
				<input type='checkbox' id='drop-remove' />
				<label for='drop-remove'>Remover depois de colocar</label>
			</p>
		</div>

		<div style='clear:both'></div>
	</div>