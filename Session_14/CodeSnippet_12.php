<?php
function HRA($Basic_Sal){
    $HRA=0.25*$Basic_Sal;
    return $HRA;
}
$B=HRA(20000);
echo "The HRA is: ";
echo $B;
?>