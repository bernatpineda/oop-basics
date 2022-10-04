<?php
class person{
    public string $name;
    public string $gender;
    public int $age;
    function __construct($name, $gender, $age) {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }
    public function work(){
        echo "I work!";
    }
    public function hobbie(){
        echo "I have hobbies";
    }
    public function Diet(){
        echo "vegetarian!";
    }
    public function showPerson(){ //getter
       return $this->name. " " . 
       $this->gender. " " . 
       $this->age;
       
    }
}
/*$person1 = new person('PEPE', 'MALE', 25);

    echo $person1->showPerson();*/
    
?>