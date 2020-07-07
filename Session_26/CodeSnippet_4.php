<?php
function computeDiv($num){
    if (!$num){
        throw new Exception('Division by zero.');
    }
    return 1/$num;
}

try {
    echo computeDiv(0).'<BR><BR>';
    echo 'Result of division';
}catch (Exception $e){
    echo 'Caught exception: ',$e->getMessage(),'<BR><BR>';
} finally {
    {
        echo "Now in finally block.<BR><BR>";
    }
    echo "Program execution continues<BR><BR>";
}
?>