<?php
$Basic_Sal=75000;
function HRA($Basic_Sal){
    $HRA=3/10*$Basic_Sal;
    echo "Your HRA is: ";
    echo $HRA;
    echo "<BR>";
}
function TA($Basic_Sal){
    $TA=1/4*$Basic_Sal;
    echo "Your TA is: ";
    echo $TA;
    echo "<BR>";
}
function TAX($Basic_Sal){
    $TAX=1/10*$Basic_Sal;
    echo "Your TAX is: ";
    echo $TAX;
    echo "<BR>";
}
function Net_Salary($Basic_Sal){
    $a=3/10*$Basic_Sal;
    $b=1/4*$Basic_Sal;
    $c=1/10*$Basic_Sal;
    $Net_Sal=75000+$a+$b-$c;
    echo "Your Net Salary is: ";
    echo $Net_Sal;
}
HRA($Basic_Sal);
echo "<BR>";
TA($Basic_Sal);
echo "<BR>";
TAX($Basic_Sal);
echo "<BR>";
Net_Salary($Basic_Sal);
echo "<BR>";
?>