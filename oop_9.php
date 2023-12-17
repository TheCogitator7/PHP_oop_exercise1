<?php 
$file=new SplFileObject('data.txt');

class myFileObject extends SplFileObject{
    public function isFile(){
        $content=$this->fread($this->getSize());
        $this->rewind();
        return $content;
    }
}
$file=new myFileObject();
var_dump($file->isFile());
var_dump($file->isFile());
?>