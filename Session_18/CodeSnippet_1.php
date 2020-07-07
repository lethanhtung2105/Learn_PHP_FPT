<?php
$connect_mysql=mysqli_connect('localhost','root','','codesnippet_18');
$mysqli_db=mysqli_select_db($connect_mysql,'codesnippet_18');
if(!$mysqli_db){
    die("Connection failed");
}
else{
    echo "Current Database is selected";
}
?>