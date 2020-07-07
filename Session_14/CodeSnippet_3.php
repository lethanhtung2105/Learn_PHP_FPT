<?php
date_default_timezone_set('Asia/Calcutta');
echo "Today is: ".date("1");
$Today_Date=getdate();
$current_month=$Today_Date['month'];
echo "<BR>";
echo "Current month is: ";
echo $current_month;
?>