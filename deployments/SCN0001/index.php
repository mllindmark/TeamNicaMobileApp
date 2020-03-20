<?php

$host = 'http://localhost';
$port = 8086;
$db_name = 'chlorinators';
$user = 'admin';
$pass = 'admin';


//$db_obj = new InfluxDB\Client::fromDSN(sprintf('influxdb://%s:%s@%s:%s/%s',$user,$pass,$host,$port,$db_name));

$world = 'hello';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Team Nica: Beta Page SCN0001</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../web_app.css">

	<script type="text/javascript">
		function siteData() {
		}
	</script>

</head>

<body onload="siteData()">

	<!-- Top Navigation Menu -->
	<div class="topnav">
	  <a href="../../" class="active">Home</a>
	
	  <a href="." class="icon">
	  	<img src="../../images/noun_Refresh.svg" alt="refresh">
	  </a>
	  	  
	</div>

	here it is

	<div id="dataContainer">
		data container.
		<br>
		Time: <?php echo $world; ?>
		<br>
		pH:
		<br>
		ORP
		<br>
		target ORP:
		<br>
		other:
	</div>

	<br>

	<div id="graphContainer">
		GRAAAPH
	</div>

</body>
</html>
