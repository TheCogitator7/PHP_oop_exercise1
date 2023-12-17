<?php 
class MyFileObject{
    private $filename;
    function __construct($fname){
        $this->filename=$fname;
        if(!file_exists($this->filename)){
            die('There is no file like '.$this->filename);
        }
    }
    public function isFile(){
        return is_file($this->filename);
    }
}

$file=MyFileObject('data.txt');
//$file->filename='data2.txt' 라고 바꿀 수가 없음(filename 이 private 상태)
var_dump($file->isFile());//bool(true)
?>