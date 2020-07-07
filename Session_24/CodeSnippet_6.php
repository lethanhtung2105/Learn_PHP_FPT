<?php
include('CodeSnippet_5.php');
echo "The Employee details: <BR><BR>";
$empdet=new empdetail(101,"John Williams","Miami","Accounts");
echo $empdet->empid,"<BR>";
echo $empdet->empname,"<BR>";
echo $empdet->empcity,"<BR>";
echo $empdet->empdept,"<BR>";
echo $empdet->empdept;
?>