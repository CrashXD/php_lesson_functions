<?php
	if (file_exists("abc.txt")) {
		$num = file_get_contents("abc.txt");
	
		$num++;
	
		file_put_contents("abc.txt", $num);
	
		echo $num;
	}
?>