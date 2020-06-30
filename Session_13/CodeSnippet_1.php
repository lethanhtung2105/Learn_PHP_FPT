<?php
$fib1=0;
$fib2=1;
$sum=0;
echo "The Fibonacci series: <BR><BR>";
while ($sum<15){
    echo "$fib2<BR>";
    $sum=$fib1+$fib2;

    $fib1=$fib2;
    $fib2=$sum;
}
echo "<BR>";
return  0;
?>