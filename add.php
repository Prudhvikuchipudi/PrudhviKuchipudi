<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <h1 style="font-family:Tahoma;"><center>Prudhvi Kuchipudi</center></h1>
 <a href="http://localhost/xampp/TutorialsPoint/test.php"> this is a link to PHP guide </a>
 <h2>comman things to know</h2>
 <ol>
	<li>first</li>
	<li>second</li>
	<li>third</li>
	<li>fourth</li>
</ol>
 <?php 
	$counter=1;
	while($counter <= 12){
		echo $counter." times 2 is ".($counter*2)."<br/>";
		$counter++;
	}
	
	$display_prices = true;
	if ($display_prices){
		?>
		<h1> The big boy works</h1>
		<h6> The small boy works</h1>
		<?php
	}
 ?> 
 </body>
</html>