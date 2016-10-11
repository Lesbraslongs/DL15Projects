<?php
class form
{
	private $data;
	public $surround = 'p';
	public function __construct($data = array()) {
		$this->data = $data;
	}

	public function surround($html) {
		return "<{$this->surround}>{$html}</{$this->surround}>";
	}

	private function getValue($index) {
		return isset($this->data[$index]) ? $this->data[$index] : null;
	}

	public function input($name,$placeholder) {
		return $this->surround ('<input type="text" name="'.$name.'" value ="'.$this->getValue($name).'" placeholder="'.$placeholder.'">');
	}

	public function submit() {
		return $this->surround ('<button type="submit"> Envoyer </button>');
	}
}

