<?php
$a=$_GET['num1text'];
function DA(&$a){
    $b=0.1*$a;
    echo "<BR>Your salary is $a USD";
    echo "<BR>Dearness Allowance is $b USD";
}
DA($a);
?>