<?php
$servet="localhost";
$username="root";
$password="";
$db="user2";
$connect_mysql=mysqli_connect($servet,$username,$password,$db);
if($connect_mysql){
    echo "Connection established<BR>";
}
else{
    die("Unable to connect<BR>");
}
$mysql_db=mysqli_select_db($connect_mysql,$db);
if ($mysql_db){
    echo "Connected to the database<BR>";
}
else{
    die("Unable to connect to the database<BR>");
}
$sql_delete=("DELETE FROM user_contact WHERE USER_ID='101'");

$result=mysqli_query($connect_mysql,$sql_delete);
if ($result){
    echo "Records Deleted: $result<BR>";
}
else{
    echo "RECORDS NOT FOUND IN THE TABLE<BR>";
    printf("ERROR message: %s\n",mysqli_error($connect_mysql));
}
?>