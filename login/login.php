<?php
session_start();
require_once 'login_db.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) die("Fatal Error");
mysqli_select_db($conn,$db);


//cảnh báo đăng nhập
if (isset($_POST['submit'])){
    if ($_POST['username']==null || $_POST['password']==null){
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
    }
    else {
        //check tài khoản
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "select * from user2 where username='" . $username . "' AND password='" . $password . "'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            if ($result->num_rows) {
                $row = $result->fetch_array(MYSQLI_NUM);
                $result->close();
                if (isset($password, $row[2])) {
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;
                    if (isset($_POST['remember']) && $_POST['remember'] == '1') {
                        setcookie('mycookie', $username . ' ' . $password, time() + 3600);
                    }
                    header('location:home.php');
                } else echo "Login fail !";
            }
        } else {
            echo "Tai khoan hoac mat khau cua ban khong dung";
            exit();
        }
    }
}


echo <<<_END
<form action="login.php" method="post"><pre>

      UserName <input type="text" name="username">
      
      PassWord <input type="password" name="password">
      
      <input type="checkbox" name="remember" value="Remember Me"><laber>Remember Me</laber>
        
                    <input type="submit" name="submit" value="LOGIN">
    
    </pre>
</form>    
_END;

?>