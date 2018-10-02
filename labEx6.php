<?php
	$file = 'labEx6count.txt';		//path of file
	$count = strval(file_get_contents($file));
	file_put_contents($file, $count+1);
	echo("<center><br><br><br><h2>You are visitor number: ".$count."<br><br><br></h2></center><a href='labEx6.html'>back to Home</a>"); 
?>