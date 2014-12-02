<!DOCTYPE HTML>
<title>Success</title>
<html>
<head>
	<style> @import "style.css";</style>
</head>
<body id="body">
	<div id="wrapper">
		<h1 id="header">JavaJam Coffee House Jobs</h1>
		<div id="nav">
			<ul>
				<li><a href="index.html"> Home</a></li>
				<li><a href="menu.html"> Menu</a></li>
				<li><a href="music.html"> Music</a></li>
				<li><a href="job.html"> Jobs</a></li>
			</ul>
		</div>	
		<div id="floatright" id="content">
			<?php
				date_default_timezone_set("America/New_York");
				echo "Thank you, ".$_POST['myName']. ",". "<br>";
				echo "We will be contacting you by this address ".$_POST['myEmail']."<br>";
				echo "Recieved on ".date("Y-m-d h:i");
			?>
		</div>
	</div>
</body>

<footer id="footer">
	<p>Copyright &copy; 2013 JavaJam Coffee House <a href="#">fjsmoscatello13@aim.com</a></p>
</footer>
</html>