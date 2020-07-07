<?php
$val1=$_GET['logname'];
$val2=$_GET['pass'];
setcookie("logname",$val1);
if ($val1==""){
    echo "Please enter the name!";
    echo "<HTML>";
    echo "<HEAD>";
    echo "<TITLE>Validate</TITLE>";
    echo "</HEAD>";
    echo "<BODY>";
    echo "<A HREF='CodeSnippet_1.html'>Back</A>";
    echo "</BODY>";
    echo "</HTML>";
}
if ($val2==""){
    echo "Please enter the name!";
    echo "<HTML>";
    echo "<HEAD>";
    echo "<TITLE>Validate</TITLE>";
    echo "</HEAD>";
    echo "<BODY>";
    echo "<A HREF='CodeSnippet_1.html'>Back</A>";
    echo "</BODY>";
    echo "</HTML>";
}
else{
    Header("Location: CodeSnippet_3.php");
}
?>