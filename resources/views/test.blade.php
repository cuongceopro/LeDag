<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<title>LeDag Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="copyright" content="Template Party">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="{{{asset('css/style.css')}}}">
<link rel="stylesheet" href="{{{asset('css/style_add.css')}}}">
<!--
<link rel="stylesheet" href="{{{asset('css/bootstrap_add.css')}}}">
<link rel="stylesheet" href="{{{asset('css/bootstrap_add1.css')}}}">
-->
<link rel="stylesheet" href="{{{asset('css/bootstrap-responsive.css')}}}">
<link rel="stylesheet" href="{{{asset('css/bootstrap-responsive.min.css')}}}">
<!--<link rel="stylesheet" href="{{{asset('css/bootstrap.css')}}}">-->
<link rel="stylesheet" href="{{{asset('css/bootstrap.min.css')}}}">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Bootstrap styles -->
<link href="{{{asset('assets/css/bootstrap.css')}}}" rel="stylesheet"/>
<!-- font awesome styles -->
<link href="{{{asset('assets/font-awesome/css/font-awesome.css')}}}" rel="stylesheet">
<!--fullcalendar-->
<link href="{{{asset('css/fullcalendar.min.css')}}}" rel='stylesheet' />
<link href="{{{asset('css/fullcalendar.print.min.css')}}}" rel='stylesheet' media='print' />
<script src="{{{asset('js/moment.min.js')}}}"></script>
<script src="{{{asset('js/jquery.min.js')}}}"></script>
<script src="{{{asset('js/fullcalendar.min.js')}}}"></script>

<link href="{{{asset('css/fullcalendar.min.css')}}}" rel='stylesheet' />
<link href="{{{asset('css/fullcalendar.print.min.css')}}}" rel='stylesheet' media='print' />
<script src="{{{asset('js/moment.min.js')}}}"></script>
<script src="{{{asset('js/jquery.min.js')}}}"></script>
<script src="{{{asset('js/fullcalendar.min.js')}}}"></script>

<!--fullcalendar-->
<script type="text/javascript" src="js/openclose.js"></script>
<script type="text/javascript" src="{{{asset('js/calender.js')}}}" charset="UTF-8"></script>

<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: '2017-05-12',
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2017-05-01'
				},
				{
					title: 'Long Event',
					start: '2017-05-07',
					end: '2017-05-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-05-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2017-05-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2017-05-11',
					end: '2017-05-13'
				},
				{
					title: 'Meeting',
					start: '2017-05-12T10:30:00',
					end: '2017-05-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2017-05-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2017-05-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2017-05-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2017-05-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2017-05-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2017-05-28'
				}
			]
		});

	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>

  <p>
    aaaa
  </p>

	<div id='calendar'></div>

</body>
</html>
