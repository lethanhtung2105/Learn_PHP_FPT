<?php
$sal=$_GET['sal'];
echo "Salary before bonus: $";
echo $sal;
echo "<BR>";
if($sal>850){
    $bonus=$sal*.1;
    echo "<BR>";
    $sal=$sal+$bonus;
    echo "Total Salary : $$sal";
}
?>