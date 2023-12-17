<?php 
class MyFileObject{
    function __construct($fname){
        $this->filename=$fname;
    }
    public function isFile(){
        return is_file($this->filename);
    }
}

$file=new MyFileObject('data.txt');
var_dump($file->isFile());//bool(true)
?>