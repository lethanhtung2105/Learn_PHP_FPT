<?php
function DisplayHello(){
    yield "Hello";
    yield " ";
    yield "World!";
    yield from DisplayGoodbye();
}
function DisplayGoodbye(){
    yield "Goodbye";
    yield " ";
    yield "Mars!";
}
$gen=DisplayHello();
foreach ($gen as $value){
    echo $value;
    echo '<BR>';
}
?>