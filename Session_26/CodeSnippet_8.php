<?php
function add(int $left_op,int $right_op){
    return $left_op+$right_op;
}

try {
    echo add('tow','three');
}catch (Exception $e){
    echo "Error occurred in the program";
}catch (Error $e){
    echo "Error occurred in the program";
}
?>