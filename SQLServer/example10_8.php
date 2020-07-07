<?php
require_once 'login.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die("fatal Error");

$query="SELECT * FROM classics";
$result=$conn->query($query);
if (!$result) die("Fatal Error");

$rows=$result->num_rows;
for ($j=0;$j<$rows;++$j){
    $row=$result->fetch_array(MYSQLI_BOTH);
    echo 'Author: '.$row['author'].'<BR>';
    echo 'Title: '.$row['title'].'<BR>';
    echo 'Category: '.$row['category'].'<BR>';
    echo 'Year: '.$row['year'].'<BR>';
    echo 'ISBN: '.$row['isbn'].'<BR><BR>';
}
$result->close();
$conn->close();
?>