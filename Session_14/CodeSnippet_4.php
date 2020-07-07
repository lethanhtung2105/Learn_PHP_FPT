<?php
$num1=0;
if($num1==0){
    echo "Dividing by zero";
    trigger_error("Cannot divide by zero",E_USER_ERROR);
}
else{
    $B=100/$num1;
}
?>