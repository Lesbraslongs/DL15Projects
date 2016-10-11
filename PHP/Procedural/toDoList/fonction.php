<?php

	function form($action,$methode,$legende){
		echo "<form action=\"$action.php\" method=\"$methode\">";
		echo "<fieldset>";
		echo"<legend>$legende</legend>";
	}

	function finForm(){
		echo "</form>";
	}

	function finFieldset(){
		echo "</fieldset>";
	}

	function input($classe, $type,$nom, $valeur, $indication){
		if (is_null($valeur)) {

			echo "<input class=\"$classe\" type=\"$type\" name=\"$nom\" placeholder=\"$indication\">";

		}elseif (is_null($indication)) {

			echo "<input class=\"$classe\" type=\"$type\" name=\"$nom\" value=\"$valeur\">";

		}elseif (is_null($valeur) && is_null($indication)) {

			echo "<input class=\"$classe\" type=\"$type\" name=\"$nom\">";

		}else {

		echo "<input class=\"$classe\" type=\"$type\" name=\"$nom\" value=\"$valeur\" placeholder=\"$indication\">";

		}
	}

	function submit($classe, $nom,$val){
		echo"<input class=\"$classe\" type=\"submit\" name=\"$nom\" value=\"$val\">";
	}


	function dropDown($tableau) {
		echo"<select name=\"check\">";
		foreach ($tableau as $tab => $value) {
			echo"<option value=\"$tab\">$value</option>";
		}
		echo"</select>";
	}


	function radio($nom,$valRadio){
		foreach ($valRadio as $radio) {
			echo "<input type=\"radio\" name=\"$nom\" value=\"$radio\"> $radio  ";
		}
	}

	function checkBox($checkBox){
		foreach ($checkBox as $check => $value) {
			echo "<input type=\"checkbox\" name=\"$check\" value=\"$value\">$value <br>";
		}

	}
	function afficherListe (array $tache,$classe){
			echo "<div class=\"divTache\">";
	  		echo "<ul>";
	  		foreach ($tache as $key=>$task) {
	  			echo"<li class=\"$classe\">$task <a class=\"supprimer\"href=\"supprimer.php?suppr=$key\">&#10008;</a><a class=\"valider\" href=\"valider.php?valid=$key\">&#10004;</a></li>";
	  		}
	  		echo "</ul>";
	  		echo "</div>";
	  	}

?>