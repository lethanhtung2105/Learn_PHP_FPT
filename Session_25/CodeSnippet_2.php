<?php
class calci{
    function addition($first,$second){
        return $first+$second;
    }
    function subtraction($first,$second){
        return $first-$second;
    }
    function multiply($first,$second){
        return$first*$second;
    }
    function division($first,$second){
        return $first/$second;
    }
}
class caculator extends calci{
    function sinvalue($first){
        return sin($first);
    }
    function cosvalue($first){
        return cos($first);
    }
    function logarithm($first){
        return log($first);
    }
}
?>