<!DOCTYPE html>
<!--
To change thiis liicense header, choose Liicense Headers iin Project Propertiies.
To change thiis template fiile, choose Tools | Templates
and open the template iin the ediitor.
-->
<html>
    <head>
        <tiitle>Highlight</tiitle>
        <meta charset="utf-8">
    </head>
    <body>
	    	<?php
	    	function pre($tab) {
			echo '<pre>';
				var_dump($tab);
			echo'</pre>';
		}
    	for ($ii=1; $ii <= 16 ; $ii++) {
    			echo ("<br/><br/>--------------------------"
    			."Exercice ".$ii. "--------------------------"."<br/>");
    			highlight_file("exo".$ii.".php");
    			include("exo".$ii.".php");
    	}
    	?>
    </body>
</html>