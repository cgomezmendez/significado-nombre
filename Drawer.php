<?php
class Drawer{
	private $image;
	private $draw;
	private $adjectiveManager;
	private $x;
	private $name;
	private $height = 10;
	private $gender;

	public function __construct($name,$gender = 'm') {
		$this->draw = new ImagickDraw();
		$this->adjectiveManager = new AdjetiveManager();
		$this->image = new Imagick();
		$width = 1920;
		$height = 1080;
		$this->image->newImage($width,$height,new ImagickPixel('#4679BD'));
		$this->image->setImageFormat('png');
		$this->draw->setFont('font.ttf');
		$this->x = 100;
		$this->name = $name;
		$this->gender = $gender;
	}

	public function drawName() {
		$name = strtoupper($this->name);
		$nameChars = str_split($name);
		$width  = 0;
		foreach ($nameChars as $key => $nameChar) {
			$this->draw->setFillColor('#FFFFDC');
			$this->draw->setFontSize(100);
			$x = 100+($this->x*$key);
			if ($key == 0){
				$x = 100;
			}
			$this->image->annotateImage($this->draw,$x,100,0,$nameChar);
			$metrics = $this->image->queryFontMetrics($this->draw,$nameChar);
			$this->drawAdjective($nameChar,$x,$metrics['textWidth']);
			if ($key == count($nameChars) -1) {
				$width = $x;
			}
		}
		$this->image->cropImage($width+200,$this->height+60,0,0);
	}

	public function drawAdjective($char,$charX,$charWidth) {
		$adjective = $this->adjectiveManager->getAdjectivetartWith($char);
		if ($adjective!=null){
			$adjective = strtoupper($adjective);
			if ($this->gender==='f'){
				if (strtoupper($adjective[strlen($adjective)-1]) === strtoupper('o')){
					$adjective[strlen($adjective)-1] = 'a';
				}
			}
			$this->draw->setFillColor('#9CBBED');
			$adjective = strtoupper($adjective);
			$this->draw->setFontSize(30);
			$adjectiveChars = str_split($adjective);
			foreach ($adjectiveChars as $key => $adjectiveChar) {
				if ($key==0){
					continue;
				}
				$y = 110+(($key-1)*40);
				$metrics = $this->image->queryFontMetrics($this->draw,$adjectiveChar);
				$width = $metrics['textWidth'];
				$this->image->annotateImage($this->draw,$charX+($charWidth-30)/2,$y,90,$adjectiveChar);
				if ($y > $this->height) {
					$this->height = $y;
				}
			}

		}
	}
	public function getImageBlob() {
		$this->drawName();
		return $this->image;
	}
}