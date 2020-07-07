<?php
error_reporting(0);
function e()
{
    echo "This is e() <BR>";
};
function f(){
    echo "This is f() <BR>";
    return e;
};
function g(){
    echo "This is g() <BR>";
    return f;
};
g();
echo "*************<BR>";
g()();
echo "*************<BR>";
g()()();
?>
