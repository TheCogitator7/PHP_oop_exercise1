<?php 
class MyFileObject{
    public function isFile(){
        return is_file($this->filename);
        //$this->filename은 인스턴스의 변수
        //하지만 filename만 쓰면 is_file 함수에 대한 변수 밖에 안됨
    }
}
$file=new MyFileObject();
$file->filename='data.txt';
var_dump($file->isFile());

$file2=new MyFileObject();
$file2->filename='data2.txt';
var_dump($file2->isFile());
?>