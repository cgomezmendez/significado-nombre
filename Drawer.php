<?php
class Drawer{
	private $image;
	private $draw;
	private $adjectiveManager;
	private $x;
	private $name;
	private $height;
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
		$this->name = strtolower($name);
$search = explode(",","ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,e,i,ø,u");
$replace = explode(",","c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,e,i,o,u");
$this->name = str_replace($search, $replace, $this->name);
		$this->gender = $gender;
	}

	public function drawName() {
		$name = strtoupper($this->name);
		$nameChars = str_split($name);
		$width  = 0;
		foreach ($nameChars as $key => $nameChar) {
			$this->draw->setFillColor('#FFFFDC');
			$this->draw->setFontSize(100);
			$x = 5+($this->x*$key);
			$this->draw->setFont('font.ttf');
			$this->image->annotateImage($this->draw,$x,100,0,$nameChar);
			$metrics = $this->image->queryFontMetrics($this->draw,$nameChar);
			$this->drawAdjective($nameChar,$x,$metrics['textWidth']);
			if ($key == count($nameChars) -1) {
				$width = $x;
			}
		}
		$this->image->cropImage($width+100,$this->height,0,0);
	}

	public function drawAdjective($char,$charX,$charWidth) {
		$this->draw->setFont('font2.ttf');
		$adjective = $this->adjectiveManager->getAdjectivetartWith($char);
		$adjective = substr($adjective,1);
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
			$this->image->annotateImage($this->draw,$charX+$charWidth/3,110,90,$adjective);
			$metrics = $this->image->queryFontMetrics($this->draw,$adjective);
			$height = ($metrics['textHeight']+$metrics['descender'])+400;
			if ($height > $this->height){
				$this->height = $height;
			}
		}
	}
	public function getImageBlob() {
		$this->drawName();
		return $this->image;
	}

}