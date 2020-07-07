<?php
$logcookie=$_COOKIE['logname'];
echo "<HTML>";
echo "<HEAD>";
echo "<TITLE> Homepage</TITLE>";
echo "</HEAD>";
echo "<BODY>";
echo "<ALIGN='right'>";

echo "Welcome $logcookie";
echo "<BR><A href='logout.php'>Logout</A>";
echo "<CENTER>";
echo "<H3>Shopper's Paradise</H3>";
echo "<H5>Shop till you drop!!!</H5>";
echo "<HR>";
echo "<BR>";
echo "<TABLE>";
echo "<TR ALIGN='center'>";
echo "<TD><A href='conf.php'>Confectionery</A></TD>";
echo "</TR>";
echo "<TR ALIGN='center'>";
echo "<TD><A href='access.php'>Accessories</A></TD>";
echo "</TR>";
echo "<TR ALIGN='center'>";
echo "<TD><A href='perf.php'>Perfumes</A></TD>";
echo "</TR>";
echo "<TR ALIGN='center'>";
echo "<TD><A href='apparel.php'>Apparel</A></TD>";
echo "</TR>";
echo "</TABLE>";
echo "</CENTER>";
echo "</BODY>";
echo "</HTML>";
?>