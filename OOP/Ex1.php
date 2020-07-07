<?php
$object=new Huy;
print_r($object); echo "<BR>";
$object->name="Joe";
$object->password="mypass";
print_r($object); echo "<BR>";
$object->save_user();
class Huy{
    public $name,$password;
    function save_user(){
        echo "Save User code goes here";
    }
}
?>