<?php
$department[0]="Finance";
$department[1]="Sales";
$department[2]="HR";
$department[3]="Purchase";
$dept=array_keys($department);
$no_of_element=count($department);
for($i=0;$i<=$department;$i++){
    $rec=each($dept);
    echo "$rec[value]";
    echo "<BR>";
}
?>