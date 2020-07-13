<?php
session_start();
if (isset($_SESSION['username'])) $username=$_SESSION['username'];
echo "Wellcome ".$username;
//if (isset($_COOKIE['mycookie'])) $username = $_COOKIE['mycookie'];

echo <<<_END
<form action = "login.php" method = "POST"><pre>
                <input type="submit" value="Logout" name="logout"> 
</pre></form>
_END;
if (isset($_POST['logout']))
{
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    setcookie('mycookie','', time()-3600);
    header('localhost:b.php');
}
?>