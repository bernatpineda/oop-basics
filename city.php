<?php
require_once ('espanoles.php');

abstract class city{
    abstract public function bigCity($cityName);
    abstract public function smallCity();
}
class ourCity extends city implements neighborhood{
    private $message = "New York";
    private $cityName;
    public function show(){
        print $this->message;
    }
    public function bigCity($cityName){
        $this->cityName = $cityName;

    }
    public function smallCity(){
        print $this->cityName;
    }
    public function printNeighborhood(){
        echo "bronch";
 
    }
        
    
    }

    interface neighborhood{
        public function printNeighborhood();
        
        
               
           }
$city1 = new ourCity();
$city1->bigCity("NEW YORK");
$city1->smallCity();
echo $city1->printNeighborhood();
?>