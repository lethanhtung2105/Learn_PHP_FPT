<?php
$lang=array(1=>"VB",2=>"Java",3=>"PHP",4=>"Delphi");
$total_elmt=count($lang);
echo "<BR>";
for($i=0;$i<$total_elmt;$i++){
    $rec=each($lang);
    echo "$rec[key] $rec[value]";
    echo "<BR>";
}
echo "<BR>";
sort($lang);
$total_elmt=count($lang);
echo "Modified array: ";
echo "<BR>";
for($i=0;$i<$total_elmt;$i++){
    $rec=each($lang);
    echo "$rec[key] $rec[value]";
    echo "<BR>";
}
?>