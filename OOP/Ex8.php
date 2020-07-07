<?php
$object=new Son;
$object->test();
$object->test2();
class Dad{
    function test(){
        echo "[Class Dad] I am your Father<BR>";
    }
}
class Son extends Dad{
    function test(){
        echo "[class Son] I am Luke<BR>";
    }
    function test2(){
        parent::test();
    }
}?>