<?php
$connect_mysql=mysqli_connect("localhost","root","","publications");
$result=mysqli_query($connect_mysql,"SELECT * FROM classics");
$rows=$result->num_rows;
echo "The table contains $rows rows.<BR>";
mysqli_close($connect_mysql);
echo "The connection to the database has been closed.";
?>