<?php
function SIm_range($start_num,$max_limit,$increment_bt=1){
    if ($start_num<$max_limit){
        if ($increment_bt<=0){
            throw new LogicException('Step must be +ve');
        }
        for ($x=$start_num;$x<=$max_limit;$x+=$increment_bt){
            yield $x;
        }
    }
    else{
        if ($increment_bt>=0){
            throw new LogicException('Step must be -ve');
        }
        for ($x=$start_num;$x>=$max_limit;$x+=$increment_bt){
            yield $x;
        }
    }
}
echo 'Single digit odd numbers from range(): <BR>';
foreach (range(1,11,2) as $num){
    echo "$num";
}
echo "<BR>";
echo 'Single digit odd numbers from Sim_range(): <BR>';
foreach (SIm_range(1,11,2) as $num){
    echo "$num";
}
?>