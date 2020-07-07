<?php
require_once 'sql.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die("Fatal Error");
mysqli_select_db($conn,$db);


//cảnh báo đăng nhập
if (isset($_POST['login'])){
    if($_POST['username']==null){
        echo "Moi ban nhap tai khoan<BR>";
    }
    else{
        $username=$_POST['username'];
    }
    if ($_POST['password']==null){
        echo "Moi ban nhap mat khau<BR>";
    }
    else{
        $password=$_POST['password'];
    }

    //check tài khoản
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from register where username='".$username."' AND password='".$password."'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
//        echo "Ban da dang nhap thanh cong";
        header("Location: http://localhost/PHPMySQL/Lab5/register.php");
//        die();
        exit();
    }
    else{
        echo "Tai khoan hoac mat khau cua ban khong dung";
        exit();
    }
}

echo <<<_END
<form action="login.php" method="post"><pre>

      UserName <input type="text" name="username">
      
      PassWord <input type="password" name="password">
        
    <input type="submit" name="login" value="LOGIN">
    </pre>
</form>    
_END;

?>