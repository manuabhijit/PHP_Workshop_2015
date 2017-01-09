<?php
	$name="Anthony gonsalves";
	
	$i = 0;
	
	$c = strlen($name);

	while ($i < $c)
	{
		if(!ctype_upper($name[$i]))
		echo $name[$i];
		
		$i++;
	}	

?>