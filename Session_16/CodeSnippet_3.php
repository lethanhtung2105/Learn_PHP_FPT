<?php
$department[0]="Finance";
$department[1]="Sales";
$department[2]="HR";
$department[3]="Purchase";
$no_of_element=count($department);
for ($i=0;$i<$no_of_element;$i++){
    $rec=each($department);
    echo "$rec[key] $rec[value]";
    echo "<BR>";
}
?>