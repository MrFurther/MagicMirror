<html>
<head>
	<title>Magic Mirror</title>
	<style type="text/css">
		<?php include('css/main.css') ?>
	</style>
	<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<script type="text/javascript">
		var gitHash = '<?php echo trim(`git rev-parse HEAD`) ?>';
	</script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<meta name="google" value="notranslate" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="refresh" content="3600">

</head>
<body>
	<?php
	//File to read
	$file = '/sys/devices/w1_bus_master1/28-000005d2abaa/w1_slave';

	//Read the file line by line
	$lines = file($file);

	//Get the temp from second line 
	$temp = explode('=', $lines[1]);

	//Setup some nice formatting (i.e. 21,3)
	$temp = number_format($temp[1] / 1000, 1, '.', '');

	?>

	<div class="top left"><div class="date small dimmed"></div><div class="time"></div><div class="calendar xxsmall"></div></div>
	<div class="top right"><div class="home"><i class="fa fa-home"></i> <?php echo $temp . '°' ?></div><div class="windsun small dimmed"></div><div class="temp"></div><div class="forecast small dimmed"></div></div>
	<div class="center-ver center-hor"><!-- <div class="dishwasher light">Vaatwasser is klaar!</div> --></div>
	<div class="lower-third center-hor"><div class="compliment light"></div></div>
	<div class="bottom center-hor"><div class="news medium"></div></div>

</div>


<script src="js/jquery.js"></script>
<script src="js/jquery.feedToJSON.js"></script>
<script src="js/ical_parser.js"></script>
<script src="js/moment-with-locales.min.js"></script>
<script src="js/config.js"></script>
<script src="http://cccctanger.com/editcompliments.js"></script>
<script src="js/rrule.js"></script>
<script src="js/version/version.js"></script>
<script src="js/calendar/calendar.js"></script>
<script src="js/compliments/compliments.js"></script>
<script src="js/weather/weather.js"></script>
<script src="js/time/time.js"></script>
<script src="js/news/news.js"></script>
<script src="js/main.js?nocache=<?php echo md5(microtime()) ?>"></script>
<!-- <script src="js/socket.io.min.js"></script> -->



</body>
</html>