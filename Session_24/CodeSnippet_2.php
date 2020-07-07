<?php
include "CodeSnippet_1.php";
echo "The Emloyee details: <BR><BR>";
$empdet=new CodeSnippet_1();
$empdet->enteremp(101,"John Williams","Miami");
echo $empdet->empid,"<BR>";
echo $empdet->empname,"<BR>";
echo $empdet->empcity,"<BR>";
?>