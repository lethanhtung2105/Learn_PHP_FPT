<?php
$server="localhost";
$username="root";
$password="";
$connect_mysql=mysqli_connect($server,$username,$password,'user2');
if ($connect_mysql){
    echo "Connection established.";
}
else{
    die("Unable to connect");
}
$db="user2";
$mysql_db=mysqli_select_db($connect_mysql,$db);

if ($mysql_db){
    echo "<BR><BR>Connected to the database";
}
else{
    die("<BR><BR>Unable to connect to the database");
}
$sql_insert="INSERT INTO user_contact(USER_ID,USER_NAME,USER_EMAIL_ID) VALUES(102,'john','john@gmail.com')";
$result=mysqli_query($connect_mysql,$sql_insert);
if ($result){
    echo "<BR><BR>The records have been added to the table.";
}
else{
    echo "<BR><BR>Unable to insert records.";
    mysqli_error();
}

?>