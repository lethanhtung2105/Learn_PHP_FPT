<?php
$object=new User;
print_r($object); echo "<BR>";
$object->id="12";
$object->name="Joe";
$object->password="mypass";
print_r($object); echo "<BR>";
$object->save_user();
class User{
    public $id,$name,$password;
    function save_user(){
        echo "Save User code goes here";
    }
}
?>