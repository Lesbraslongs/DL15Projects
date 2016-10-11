<?php

/**
*
*/
class Formation{

	function __construct($id,$deb,$fin,$duree,$lib,$niveau,$isbn,$type) {

		$this->_id=$id;
		$this->_deb=$deb;
		$this->_fin=$fin;
		$this->_duree=$duree;
		$this->_lib=$lib;
		$this->_niveau=$niveau;
		$this->_isbn=$isbn;
		$this->_type=$type;
	}

	public function infosTFormation(){
		return "ID : ".$this->_id."<br>"
		."Date Début : ".$this->_deb."<br>"
		."Date Fin : ".$this->_fin."<br>"
		."Durée : ".$this->_duree." Heures <br>"
		."Libellé : ".$this->_lib."<br>"
		."Niveau : ".$this->_niveau."<br>"
		."ISBN : ".$this->_isbn."<br>"
		."Type : ".$this->_type."<br>";
	}
}
?>