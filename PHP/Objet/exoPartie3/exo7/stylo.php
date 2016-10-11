<?php

	class stylo
	{
		private $_ref;
		private $_color;
		private $_price;
		private $_qtyStock;

		function __construct($ref,$color,$price,$qtyStock)
		{
			$this->_setRef($ref);
			$this->_setColor($color);
			$this->_setPrice($price);
			$this->_setQtyStock($qtyStock);
		}

		function infoStylo() {
				echo "Référence : ".$this->_ref."<br>"
				."Couleur : ".$this->_color."<br>"
				."Prix : ".$this->_price." € <br>"
				."Quantité en stock: ". $this->_qtyStock. " restant.";
		}

	    public function getRef()
	    {
	        return $this->_ref;
	    }

	    public function _setRef($ref)
	    {
	        $this->_ref = $ref;

	        return $this;
	    }

	    public function getColor()
	    {
	        return $this->_color;
	    }

	    public function _setColor($color)
	    {
	        $this->_color = $color;

	        return $this;
	    }

	    public function getPrice()
	    {
	        return $this->_price;
	    }

	    public function _setPrice($price)
	    {
	        if (!is_numeric($price)) {
				throw new Exception("Saisie invalide pour le prix", 1);
			}else {
				$this->_price=$price;
				return $this;
			}
	    }

	    public function getQtyStock()
	    {
	        return $this->_qtyStock;
	    }

	    public function _setQtyStock($qtyStock)
	    {
	        if (!is_numeric($qtyStock)) {
				throw new Exception("Saisie invalide pour la quantité", 1);
			}else {
				$this->_qtyStock=$qtyStock;
			}
	    }
}
?>_