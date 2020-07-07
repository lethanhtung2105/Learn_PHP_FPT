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
$sql_update=("UPDATE user_contact SET USER_NAME='David' WHERE USER_ID='102'");

$result=mysqli_query($connect_mysql,$sql_update);
if ($result){
    echo "Records update: $result<BR>";
}
else{
    echo "UNABLE TO UPDATE RECORDS<BR>";
    printf("ERROR message: %s\n",mysqli_error($connect_mysql));
}
?>