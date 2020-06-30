<?php
$myname=$_GET['myname'];
$myage=$_GET['myage'];
if($myname==""){
    echo "Please enter your name";
}
else{
    if($myage==""){
        echo $myname;
        echo ",you did not enter your age!";
    }
    else{
        echo "Hi ";
        echo $myname;
        echo ". ";
        echo $myage;
        echo ".";
    }
}
?>