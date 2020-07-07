<?php
function T_ALLOWANCE($BASIC_SAL=100000){
    $T_ALLOWANCE=0.25*$BASIC_SAL;
    echo "The travel allowance is: $T_ALLOWANCE";
}
T_ALLOWANCE();
?>