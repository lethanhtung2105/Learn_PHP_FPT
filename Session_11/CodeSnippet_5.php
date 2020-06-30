<?php
$myname=$_POST['myname'];
$myage=$_POST['myage'];
if($myname==""){
    echo "Please enter your name!";
}
else{
    $mesg=($myage=="")?"$myname,please enter your age!":"Hi $myname.Your age is $myage.";
    echo $mesg;
}
?>
<a href="CodeSnippet_2.html">back</a>

