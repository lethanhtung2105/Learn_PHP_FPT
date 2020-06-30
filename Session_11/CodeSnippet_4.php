<?php
$myname=$_GET['myname'];
$mygrade=$_GET['mygrade'];
echo "<BR>";
if($myname==""){
    echo "Please enter your name";
}
else{
    switch ($mygrade){
        case "":
            echo $myname;
            echo ", you did not enter your Grade!";
            break;
        case "A":
            echo "Facilities for $myname (Grade A)";
            echo "<BR><BR>";
            echo "Increment=30% of baisc salary";
            echo "<BR>";
            echo "Bonus=20% of basic salary";
            echo "<BR>";
            echo "Traveling allowance=$500";
            echo "<BR>";
            echo "Medical allowance=$500";
            echo "<BR>";
            break;
        case "B":
            echo "Facilities for $myname (Grade A)";
            echo "<BR><BR>";
            echo "Increment=20% of baisc salary";
            echo "<BR>";
            echo "Bonus=10% of basic salary";
            echo "<BR>";
            echo "Traveling allowance=$300";
            echo "<BR>";
            echo "Medical allowance=300";
            echo "<BR>";
            break;
        case "C":
            echo "Facilities for $myname (Grade A)";
            echo "<BR><BR>";
            echo "Increment=10% of baisc salary";
            echo "<BR>";
            echo "Bonus=5% of basic salary";
            echo "<BR>";
            echo "Traveling allowance=$100";
            echo "<BR>";
            echo "Medical allowance=$100";
            echo "<BR>";
            break;
        default:
            echo "$myname, Please enter the correct Grade(A,B or C)";
            break;
    }
}
?>
<A HREF="CodeSnippet_3.html">Back</A>
