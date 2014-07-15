<?php
class AdjetiveManager{
	private $adjectives;
	public function __construct () {
		$jsonadjectives = file_get_contents('adjetivos.json');
		$this->adjectives = json_decode(utf8_decode($jsonadjectives));
	}
	public function getAdjectivetartWith($char) {
		$adjectivesW = array();
		foreach ($this->adjectives as $key => $adjective) {
			if (strtoupper($adjective[0])===strtoupper($char)){
				array_push($adjectivesW, $adjective);
			}
		}
		if (sizeof($adjectivesW) > 0){
			$key = rand(0,(count($adjectivesW)-1));
			$adjective = $adjectivesW[$key];
			$key = array_search($adjective,$this->adjectives);
			unset($this->adjectives[$key]);
			return $adjective;
		}
	}
}