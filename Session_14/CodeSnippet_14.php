<?php
$a=10;
function factorial($a){
    if($a<=1){
        return 1;
    }
    else{
        return $a*factorial($a-1);
    }
}
echo "The factorial of $a is; ";
$b=factorial($a);
echo $b;
?>