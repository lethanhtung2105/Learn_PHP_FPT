<?php
require_once 'sql.php';
//ket noi co so dw lieu
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) echo "loi ket noi co so du lieu";
mysqli_select_db($conn,$db);

echo <<<_END
<form action="AdminSearch.php" method="get">
<pre>
<input type="text" name="search"><BR>
<input type="submit" name="submit" value="SEARCH">
</pre>
</form>
_END;

if (isset($_REQUEST['submit']))
{
    // Gán hàm addslashes để chống sql injection
    $search = addslashes($_GET['search']);

    // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
    if (empty($search)) {
        echo "Yeu cau nhap ten san pham vao o trong";
    }
    else
    {
        $query = "select * from product where ProductName like '%$search%'";
        $result=$conn->query($query);
        if (!$result) die("Database access failed");
        $rows=$result->num_rows;
        for ($j=0;$j<$rows;++$j){
            $row=$result->fetch_array(MYSQLI_NUM);
            $r1=$row[1];
            $r2=$row[2];
            $r3=$row[3];
            $r4=$row[4];

            echo <<<_END
<pre>
ProductName $r1
imgProduct $r2
ProductTitle $r3
Price $r4
</pre>
_END;
        }
    }
}
?>
