<?php

	function form($action,$methode,$legende){
		echo "<form action=\"$action.php\" method=\"$methode\">";
		echo "<fieldset>";
		echo"<legend>$legende</legend>";
	}

	function finForm(){
		echo "</fieldset>";
		echo "</form>";
	}

	function input($type,$nom, $valeur, $indication){
		if (is_null($valeur)) {

			echo "<input type=\"$type\" name=\"$nom\" placeholder=\"$indication\">";

		}elseif (is_null($indication)) {

			echo "<input type=\"$type\" name=\"$nom\" value=\"$valeur\">";

		}elseif (is_null($valeur) && is_null($indication)) {

			echo "<input type=\"$type\" name=\"$nom\">";

		}else {

		echo "<input type=\"$type\" name=\"$nom\" value=\"$valeur\" placeholder=\"$indication\">";

		}
	}

	function submit($nom,$val){
		echo"<input type=\"submit\" name=\"$nom\" value=\"$val\">";
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
?>