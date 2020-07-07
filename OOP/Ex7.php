<?php
$object=new Subscriber;
$object->name="Fred";
$object->password="pword";
$object->phone="0123456789";
$object->email="Fred@loggs.com";
$object->display();
class User{
    public $name,$password;
    function save_user(){
        echo "Save User code goes here";
    }
}
class Subscriber extends User
{
    public $phone,$email;
    function display(){
        echo "Name: ".$this->name."<BR>";
        echo "Pass: ".$this->password."<BR>";
        echo "Phone: ".$this->phone."<BR>";
        echo "Email: ".$this->email;
    }
}
?>