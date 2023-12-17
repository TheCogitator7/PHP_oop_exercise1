<?php 
class MyFileObject{
    public function isFile(){
        return is_file('data.txt');
    }
}
$file=new MyFileObject();
var_dump($file->isFile());//bool(true)
?>