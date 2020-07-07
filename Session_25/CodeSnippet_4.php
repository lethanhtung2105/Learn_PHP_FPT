<?php
class oddnum{
    function oddnum(){
        $i=5;
        do{
            $num=$i*2-1;
            echo "<BR> $num";
            $i--;
        }while($i>1);
    }
}
?>