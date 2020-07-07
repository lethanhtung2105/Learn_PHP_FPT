<?php
$a=0;
function fib($a){
    if ($a<=1){
        return $a;
    }
    else{
        return fib($a-1)+fib($a-2);
    }
}
while ($a!=8){
    $b=fib($a);
    echo "$b<BR>";
    $a++;
}
?>