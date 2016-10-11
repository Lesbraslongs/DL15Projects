 <?php
    $nbPhotocop=20;
    $prix=0;
    if ($nbPhotocop <=10) {
    	$prix=$nbPhotocop*0.1;
    }elseif ($nbPhotocop <=30) {
    	$nbPhotocop -= 10;
    	$prix+=10*0.1+($nbPhotocop*0.08);
    }else{
    	$nbPhotocop-=30;
    	$prix+=10*0.1 + 20*0.08+($nbPhotocop*0.05);
    }


    if ($prix == 1) {
    	echo ("Prix total : $prix Euro");
	}else {
		echo ("Prix total : $prix Euros");
	}

?>
