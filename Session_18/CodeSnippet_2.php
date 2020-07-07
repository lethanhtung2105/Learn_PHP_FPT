<?php
$dbname='mysql';
if(!mysqli_connect('127.0.0.1','root')){
    echo 'Could not connect to mysql';
    exit;
}
$sql="SHOW TABLES FROM $dbname";
$connect_mysql=mysqli_connect('127.0.0.1','root','','publications');
$result=mysqli_query($connect_mysql,$sql);
if(!$result)
    $result=mysqli_query($sql);
echo " The tables from the database are: <BR><BR>";
if (!$result){
    echo "DB Error,Unable to list tables<BR>";
    echo 'MYSQL Error: '.mysqli_error();
    exit;
}
while ($row=mysqli_fetch_row($result)){
    echo "Table: {row[0]}<BR>";
}
?>