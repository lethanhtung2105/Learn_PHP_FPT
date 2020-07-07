<?php
require_once 'login.php';
$conn=new mysqli($hn,$un,$pw,$db);
if($conn->connect_error) die("Connect to Db Error");
$query="select * from classics";
$result=$conn->query($query);
if(!$result) die("Query Excute Error");
$rows=$result->num_rows;
for($j=0;$j<$rows;++$j){
    $result->data_seek($j);
    echo 'author:' .$result->fetch_assoc()['author']."<BR>";
    $result->data_seek($j);
    echo 'Title:' .$result->fetch_assoc()['title']."<BR>";
    $result->data_seek($j);
    echo 'Category:' .$result->fetch_assoc()['category']."<BR>";
    $result->data_seek($j);
    echo 'Year:' .$result->fetch_assoc()['year']."<BR>";
    $result->data_seek($j);
    echo 'Isbn:' .$result->fetch_assoc()['isbn']."<BR><BR>";
}
$result->close();;
echo "bang Customers <BR><BR>";
$query2="select * from customers";
$result2=$conn->query($query2);
if (!$result2) die("Query2 Excute Error");
$rows2=$result2->num_rows;
for ($j=0;$j<$rows2;++$j){
    $result2->data_seek($j);
    echo 'Name:'.$result2->fetch_assoc()['name']."<BR>";
    $result2->data_seek($j);
    echo 'Isbn:'.$result2->fetch_assoc()['isbn']."<BR><BR>";
}
$result2->close();
$conn->close();
?>