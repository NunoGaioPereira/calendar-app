<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <style>
    	* {
    		margin: 0;
    		padding: 0;
    	}

    	body {
    		background-color: #f2f6f9;
    	}

    	table, th, td, tr, .fc th, .fc td {
    		border-collapse: collapse;
    		border: none;
    		border-width: 0;
    	}

    	table {
    		background-color: #fff;
    	}

    	.fc-head, .fc-widget-header {
    		color: #fff;
    		padding: 10px;
    		background-color: #111;
    	}

    	/*.fc-button, .fc-corner-left, .fc-prev-button, .fc-state-default {
    		background-color: #111;
    		color: #fff;
    		border: none;
    	}
*/
    	.fc-day {
    		// background-color: #eee;
    	}
    	/*fc-button, fc-state-default, fc-corner-left {

    	}*/

    	.side-nav {
    		position: fixed;
    		height: 100%;
    		width: 50px;
    		background-color: #222;
    	}

    	.main-container {
    		margin-left: 50px;
    		padding: 20px;
    	}

    	.fc-event {
    		border: none;
    		border-radius: 0;
    		padding: 5px;
    		background-color: #F44336;
    	}

    	.fc-event .fc-bg {
    		background: transparent;
    	}

    </style>

    <script>
    	$(document).ready(function() {
    		var calendar = $('#calendar').fullCalendar({
	    		editable:true,
	    		header:{
	    			left:'prev, next today',
	    			center:'title',
	    			right:'month, agendaWeek, agendaDay'
	    		},
	    		events:'load.php', 
    		});
		});
    </script>
	
</head>
<body>

	<div class="side-nav">
		
	</div>

	<div class="main-container">
		<!-- <h2>Callendar</h2> -->
		<div class="container">
			<div id="calendar"></div>
		</div>
	</div>
</body>
</html>