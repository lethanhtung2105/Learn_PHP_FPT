<?php
require_once "sql.php";
//ket noi co so du lieu
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die("Fatal Error");
mysqli_select_db($conn,$db);

//nhap du lieu tu form
echo <<<_END
<form action="AdminAdd.php" method="post">
<pre>
Product Name  <input type="text" name="productname">

Product Title <input type="text" name="producttitle">

        price <input type="text" name="price">
        
Product Image <input type="text" name="file">

<input type="submit" name="submit" value="ADD">
</pre>
</form>
_END;

//insert du lieu vao database
if (isset($_POST['productname']) && isset($_POST['producttitle']) &&
    isset($_POST['price']) && isset($_POST['file']))
{
    $productname=get_post($conn,'productname');
    $producttitle=get_post($conn,'producttitle');
    $price=get_post($conn,'price');
    $file=get_post($conn,'file');

    $query="INSERT INTO product(productname,producttitle,price,imgproduct) VALUES"."('$productname','$producttitle','$price','$file')";
    $result = $conn->query($query);

    if (!$result) echo "INSERT failed<BR><BR>";
    else{
        echo "Insert success!!!";
    }
}

function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}
?>