<?php
echo "The odd numbers in reverse order are: ";
for($i=5;$i>=-1000;$i--){
    $number=$i*2-1;
    echo "<BR>$number";
}
echo "<BR> The loop ends because the condition is satisfied.";
?>