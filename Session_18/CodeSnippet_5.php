<?php
$connect_mysql=mysqli_connect("localhost","root","","publications");
$result=mysqli_query($connect_mysql,"SELECT * FROM classics");
while ($row=mysqli_fetch_row($result)){
    printf("%s (%s)<BR>",$row[0],$row[1]);
}
?>