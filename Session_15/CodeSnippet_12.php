<?php
$a=$_GET['n1text'];
function cube($a){
    $cube=$a*$a*$a;
    return $cube;
}
$b=cube($a);
echo "The cube of $a is ";
echo $b;
?>