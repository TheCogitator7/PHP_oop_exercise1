<h1>Inheritance</h1>
<?php 
class Animal{
    public function run(){
        print('running..<br>');
    }
    public function breathe(){
        print('breathing..<br>');
    }
}

class Human extends Animal{
    public function talk(){
        print('talking..<br>');
    }
    public function think(){
        print('thinking..<br>');
    }
}

$young=new Human();
$young->run();
$young->talk();
?>