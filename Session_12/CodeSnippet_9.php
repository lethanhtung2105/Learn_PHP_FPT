<?php
$counter=0;
while ($counter<5){
    $counter++;
    if ($counter==3){
        echo "Continues the loop<BR>";
        continue;
    }
    echo "$counter<BR>";
}
echo "The loop ends here";
?>