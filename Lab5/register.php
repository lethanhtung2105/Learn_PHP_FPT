<?php
require_once 'sql.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die("Fatal Error");

//Xử lý xóa:
if (isset($_POST['delete']) && isset($_POST['userid'])){
    $userid=get_post($conn,'userid');
    $query="DELETE FROM register WHERE userid='$userid'";
    $result=$conn->query($query);
    if (!$result) echo "DELETE failed <BR><BR>";
}

//Xử lý thêm mới:
if (isset($_POST['userid']) && isset($_POST['username']) &&
    isset($_POST['password']) && isset($_POST['email']) &&
    isset($_POST['phone']) && isset($_POST['fullname']))
{
    $userid=get_post($conn,'userid');
    $username=get_post($conn,'username');
    $password=get_post($conn,'password');
    $email=get_post($conn,'email');
    $phone=get_post($conn,'phone');
    $fullname=get_post($conn,'fullname');

    $query="INSERT INTO register(username,password,email,phone,fullname) VALUES"."('$username','$password','$email','$phone','$fullname')";
    $result = $conn->query($query);

    if (!$result) echo "INSERT failed<BR><BR>";
}

//hiển thị người dùng
echo <<<_END
<h2>Wellcome</h2>
<form action="register.php" method="post"><pre>
      
    UserName <input type="text" name="username">
       
    PassWord <input type="password" name="password">
    
       Email <input type="text" name="email">
        
       Phone <input type="text" name="phone">
        
    FullName <input type="text" name="fullname">
        
    <input type="submit" value="ADD RECORD">
    </pre>
</form>
_END;

//lấy giữ liệu từ database và hiển thị
$query="SELECT * FROM register";
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
    $r5=$row[5];


    echo <<<_END
<pre>
UserId $r0
UserName $r1
Password $r2
Phone $r3
Email $r4
FullName $r5
</pre>
<form action="register.php" method="post">
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="userid" value="$r0">
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
