<?php
require_once 'sql.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die("ket noi that bai");

echo <<<_END
<form action="AdminUpdate.php" method="get">
<pre>
   Product ID <input type="text" name="productid">

Product Name  <input type="text" name="productname">

Product Title <input type="text" name="producttitle">

        price <input type="text" name="price">
        
Product Image <input type="text" name="file">

<input type="submit" name="submit" value="UPDATE">
</pre>
</form>
_END;

if (!$conn){
    die("ket noi that bai");
}
if (isset($_REQUEST['submit']) && isset($_GET['productid']) &&
    isset($_GET['productname']) && isset($_GET['producttitle']) &&
    isset($_GET['price']) && isset($_GET['file'])){

    $productid=$_GET['productid'];
    $productname=$_GET['productname'];
    $producttitle=$_GET['producttitle'];
    $price=$_GET['price'];
    $file=$_GET['file'];

    if (empty('productname') && empty('producttitle') &&
    empty('price') && empty('file')) {
        echo "Yeu cau du du lieu san pham vao o trong";
    }


    $query="UPDATE product SET ProductName='$productname',ProductTitle='$producttitle',Price='$price',imgProduct='$file' WHERE ProductID='$productid'";
    $result=$conn->query($query);
    if (!mysqli_query($conn,$result)){
        echo "Update thanh cong";
    }
    else{
        echo "Update that bai";
    }
    mysqli_close($conn);
}
?>