<?php
	if($_POST)
	{	
		$m = $_POST
		['m'];
		
		$fuer = $m * 9.8;
		echo "El peso de:" .$fuer." N, clic atras para nueva cantidad"; 
	}
?>