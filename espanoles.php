<?php
require_once('baseclass.php');

class spanish extends person{
    public $skinTone;
    public $languages;
    public static $human = "human";
    function __construct($name, $gender, $age, $skinTone, $languages){
        parent::__construct($name, $gender, $age);
        $this->skinTone = $skinTone;
        $this->languages = $languages;
    }
    public function showSpanish(){ //getter
        return $this->skinTone. " " . 
        $this->languages. " " . 
        $this->gender. " " .
        $this->name. " " .
        $this->age;
}
public function setGender($gender)
{
$this->gender = $gender;
}
public function Diet(){
    echo "vegan!";
}
}
$languages1 = new spanish('PEPE', 'MALE', 25, 'moreno', 'english');

    $languages1->setGender('no-binary');
     echo $languages1->showSpanish();
    echo spanish::$human;




?>
