<?php
class Greetings{
    private $word="Hello";
}
$closure=function ($whom){
    echo "$this->word $whom\n";
    echo "<br>";
};
$obj=new Greetings();
$closure->call($obj,'John');
$closure->call($obj,'Kevin');
?>