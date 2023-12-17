<h1>Function Style</h1>
<?php 
$array_data=array('a', 'b', 'c');
array_push($array_data, "d");
foreach($array_data as $item){
    echo $item.'<br>';
}
var_dump(count($array_data));
?>

<h1>Object Style</h1>
<?php 
$object_data=new arrayObject(array('a', 'b', 'c'));
$object_data->append('d');
foreach($object_data as $items){
    echo $items.'<br>';
}
var_dump($object_data->count());
?>