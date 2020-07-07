<?php
function Square($a){
    $a=$a*$a;
    echo $a;
}
$a=5;
echo "The square of $a is: ";
Square($a);
function subtraction($a,$b){
    $c=$a-$b;
    echo "<BR> The difference of $a and $b is: $c";
}
subtraction(90,45);
?>