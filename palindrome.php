<?php
class stringTest{
	
	public $stringStudy = 'Race fast, safe car';		
	public $stringStudyClear;
	public $equally;
	public $stringLenght;
	
	public function getStringLenght (){
		$this->stringStudyClear = preg_replace('/[^a-zа-яё\d]/ui', '',$this->stringStudy);  //оставить только буквы и цифры
		$this->stringStudyReverse = strrev($this->stringStudyClear);						//перевернуть строку
		$this->equally = strcasecmp($this->stringStudyClear, $this->stringStudyReverse);	//проверить на равенство, если строки равны, то 0
		$this->stringLenght = strlen($this->stringStudyReverse);			//вычислить длину строки
	}
}

$ex = new stringTest;
$ex->getStringLenght();

if ($ex->equally == 0){
	echo "Этот палиндром имеет ". intdiv($ex->stringLenght, 2) ." пар одинаковых символов. "."<br />";
}
else {
    echo "Это не палиндром";
}
?>
