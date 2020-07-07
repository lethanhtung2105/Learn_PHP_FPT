<?php
$ITdept=array(0=>"Testing",1=>"Traning");
$Salesdept=array(0=>"Advertising",1=>"Marketing");
$no_of_element=count($ITdept);
for($i=0;i<=$no_of_element;$i++){
    $rec=each($ITdept);
    echo "$rec[key] $rec[value]";
    echo "<BR>";
}
echo "<BR>";
$num_of_element=count($Salesdept);
for($i=0;i<=$no_of_element;$i++){
    $rec=each($Salesdept);
    echo "$rec[key] $rec[value]";
    echo "<BR>";
}
echo "<BR>";
$AdminDept=array_merge($ITdept,$Salesdept);
$num1_of_element=count($AdminDept);
for($i=0;$i<$num1_of_element;$i++){
    $rec=each($AdminDept);
    echo "$rec[key] $rec[value]";
    echo "<BR>";
}
echo "<BR>";
$AdminDept=array_merge($Salesdept.$ITdept);
$num2_of_element=count($AdminDept);
for ($i=0;$i<$num2_of_element;$i++){
    $rec=each($AdminDept);
    echo "$rec[key] $rec[value]";
    echo "<BR>";
}
echo "<BR>";
?>