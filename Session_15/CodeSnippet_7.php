<?php
$a=$_GET['num1text'];
$b=$_GET['num2text'];
function multiply($a,$b){
    $c=$a*$b;
    echo "The multiplication of $a and $b: $c";
}
multiply($a,$b);
?>