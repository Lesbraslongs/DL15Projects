 <?php
 	$chaine="chaine de caracteres";
 	$taille=strlen($chaine);
 	$tab=array();

 	for ($i=0; $i < $taille ; $i++) { 
 		$tab[$i]=$chaine[$i];
 	}

 	for ($i=strlen($chaine)-1; $i>= 0; $i--) {
 		echo $tab[$i];
 	}


/* ------------------ALTERNATIVE -----------------
//$txt="Bonjour";
//$tab=str_split($txt);
//foreach (array_reverse($tab) as $key => $value){
//	echo $value
} */
?>