<?php
session_start();

if(isset($_POST["nb1"], $_POST["nb2"])){
  $op = strip_tags($_POST["op"]);
  $nb1 = $_POST["nb1"];
  $nb2 = $_POST["nb2"];
  // if(nb1 is not numeric or nb2 is not numeric)
  if(!is_numeric($nb1) || !is_numeric($nb2)){
    $_SESSION["error"]="Vous devez renseigner des nombres";
  }

  if(!isset($_SESSION["error"])){
    switch($op){
      case "plus":
        $_SESSION["res"] = "$nb1 + $nb2 = " . ($nb1 + $nb2);
        break;
      case "moins":
        $_SESSION["res"] = "$nb1 - $nb2 = " . ($nb1 - $nb2);
        break;
      case "mult":
        $_SESSION["res"] = "$nb1 * $nb2 = " . ($nb1 * $nb2);
        break;
      case "div":
        if((int)$nb2 === 0){
          $_SESSION["error"] = "Division par zéro!";
        }
        else{
          $_SESSION["res"] = "$nb1 / $nb2 = " . ($nb1 / $nb2);
        }
        break;
      default:
        $_SESSION["error"] = "Opération non supportée.";
    }
  }

}


header("location: index.php");
