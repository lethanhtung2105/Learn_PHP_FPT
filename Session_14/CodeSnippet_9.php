<?php
function Squar(&$a){
    $a=$a*$a;
    echo $a;
}
$a=5;
echo "The square of $a is: ";
Square($a);
function multiplication(&$a,&$b){
    $c=$a*$b;
    echo "<BR><BR>The multiplication of $a and $b is: $c";
}
$a=25;
$b=30;
multiplication($a,$b);
?>