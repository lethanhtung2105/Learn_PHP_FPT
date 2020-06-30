<?php
$salary=8000;
if($salary<6000){
    echo "Basic: $salary<BR>";
    echo "Salary below 6000 is not entitled for HRA.";
    exit;
}
else{
    echo "Basic: $salary<BR>";
    $hra=$salary*0.8;
    echo "HRA: $hra";
}
?>