<?php 
class Person{
    private $name;
    public function setName($_name){
        $this->ifEmptyDie($_name);
        $this->name=$_name;
    }
    public function getName(){
        return $this->name;
    }
    public function sayHi(){
        print("Hi, I'm {$this->name}.");
    }
    private function ifEmptyDie($__name){
        if(empty($__name)){
            die('There is no name');
        }
    }
}
$young=new Person();
$young->setName('Young');
//$young->name='Young';//error
$young->sayHi();//Hi, I'm Young
var_dump($young->getName());//string(5) "Young"
?>