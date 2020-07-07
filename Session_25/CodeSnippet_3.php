<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$add="";
$sub="";
$mul="";
$div="";
$sin="";
$cos="";
$log="";
$num1="";
$num2="";
$first="";
$second="";
include ('CodeSnippet_2.php');
$first=$_GET['num1'];
$second=$_GET['num2'];
$n1=$_GET['add'];
$n2=$_GET['sub'];
$n3=$_GET['mul'];
$n4=$_GET['div'];
$n5=$_GET['sin'];
$n6=$_GET['cos'];
$n7=$_GET['log'];
$calculate=new caculator();
$calculate1=new calci();
if ($n1){
    $add=$calculate1->addition($first,$second);
    echo "<BR><BR>";
    echo "The sum of $first $ $second is: $add";
}
else if($n2){
    $sub=$calculate1->subtraction($first,$second);
    echo "<BR><BR>";
    echo "The difference betwen $first & $second is: $sub";
}
else if($n3){
    $prod=$calculate1->multiply($first,$second);
    echo "<BR><BR>";
    echo "The product of $first & $second is: $prod";
}
else if ($n4){
    $div=$calculate1->division($first,$second);
    echo "<BR><BR>";
    echo "The quotient for $first & $second is: $div";
}
else if ($n5){
    $sine=$calculate->sinvalue($first);
    echo "<BR><BR>";
    echo "The sine value of $first is: $sine";
}
else if ($n6){
    $cosine=$calculate->cosvalue($first);
    echo "<BR><BR>";
    echo "The cosine value of $first is: $cosine";
}
else if ($n7){
    $logvalue=$calculate->logarithm($first);
    echo "<BR><BR>";
    echo "The log of $first is: $logvalue";
}
echo "<BR><BR><a href='CodeSnippet_1.html'>Go Back</a>";
?>