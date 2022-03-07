<?php
  $ip = $_SERVER['REMOTE_ADDR'].":".$_SERVER['REMOTE_PORT']; 
  $pagina = $_SERVER['HTTP_USER_AGENT'];
  $datum = date("d-m-y / H:i:s"); 
  $invoegen = $datum . " - " . $ip . " - Pagina: " .   $pagina."<br>";
  $fopen = fopen("logs.html", "a"); 
	fwrite($fopen, $invoegen); 
	fclose($fopen);  
?>