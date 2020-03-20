<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Team Nica Beta Web App</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="web_app.css">
</head>
<body>	

	<script type="text/javascript">
		
		/* Toggle between showing and hiding the navigation menu links when the user clicks on the hamburger menu / bar icon */
		function toggleNavBar(id) {
		  var x = document.getElementById(id);
		  if (x.style.display === "block") {
		    x.style.display = "none";
		  } else {
		    x.style.display = "block";
		  }
		}

	</script>

	<!-- Top Navigation Menu -->
	<div class="topnav">
	  <a href="" class="active">Team Nica Web App</a>
	  <!-- Navigation links (hidden by default) -->
	  <div id="myLinks">
	  	<a href="./deployments/SCN0001/">SCN0001</a>
	  	<a href="./map/">Map</a>
	  	<a href="javascript:void(0);" onclick="toggleNavBar('About')">About</a>
	    <a href="javascript:void(0);" onclick="toggleNavBar('Contact')">Contact</a>
	  </div>


	  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
	  <a href="javascript:void(0);" class="icon" onclick="toggleNavBar('myLinks')">
	  	<svg width="30" height="25">
	  		<rect style="fill:white;" height="5" width="30"></rect>
		  	<rect style="fill:white;" y="10" height="5" width="30"></rect>
		  	<rect style="fill:white;" y="20" height="5" width="30"></rect>
		</svg>
	  </a>
	  

	  
	</div>

	<div id="Landing">
		<h1>Welcome Landing Page</h1>
		<p>
			Here a paragraph about the project.
			It goes like this:
			Let's give a quick overview.
			Something pithy.
		</p>
		<p>
			Here's another paragraph. 
			This one can be shorter.
		</p>
	</div>

	<div id="About" style="display: none">
		This is a project for Megan Lindmark.
		She is a bad ass.
	</div>

	<div id="Contact" style="display: none">
		Get at me:
		<br>
		Megan dash Lindmark    at     uiowa      dot      com
	</div>

</body>
</html>
<? 
} 
?>