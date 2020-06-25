<?php
$num2=0;
echo "The multiplication value of 14 * 15 is <BR>";
function multiply(){
    $num1=14;
    $num2=15;
    $num2=$num1*$num2;
    echo $num2;
}
multiply();
echo "<BR> The value of the local variable on eciting the function is <BR>";
echo $num2;
?>