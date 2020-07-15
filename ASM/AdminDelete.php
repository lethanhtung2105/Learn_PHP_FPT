<?php
require_once 'sql.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die("Fatal Error");

//Xử lý xóa:
if (isset($_POST['delete']) && isset($_POST['productid'])){
    $productid=get_post($conn,'productid');
    $query="DELETE FROM product WHERE ProductID='$productid'";
    $result=$conn->query($query);
    if (!$result) echo "DELETE failed <BR><BR>";
}

//lấy giữ liệu từ database và hiển thị
$query="SELECT * FROM product";
$result=$conn->query($query);
if (!$result) die("Database access failed");
$rows=$result->num_rows;
for ($j=0;$j<$rows;++$j){
    $row=$result->fetch_array(MYSQLI_NUM);
    $r0=$row[0];
    $r1=$row[1];
    $r2=$row[2];
    $r3=$row[3];
    $r4=$row[4];


    echo <<<_END
<pre>
ProductID $r0;
ProductName $r1
imgProduct $r2
ProductTitle $r3
Price $r4
</pre>
<form action="AdminDelete.php" method="post">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="productid" value="$r0">
<input type="submit" value="DELETE RECORD">
</form>
_END;
}
$result->close();
$conn->close();

//xử lí nhập vào(loại bỏ các kí tự đặc biệt)
function get_post($conn,$var){
    return $conn->real_escape_string($_POST[$var]);
}
?>
