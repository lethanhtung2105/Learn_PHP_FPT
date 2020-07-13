<?php
//dang nhap vao data
require_once 'login_db.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_errno) die("Fatal Error");

//insert du lieu
if (isset($_POST['username']) && isset($_POST['password']) &&
    isset($_POST['email']) && isset($_POST['fullname']) &&
    isset($_POST['phone']))
{
    $username = get_post($conn,'username');
    $password = get_post($conn,'password');
    $email = get_post($conn,'email');
    $fullname = get_post($conn,'fullname');
    $phone = get_post($conn,'phone');
    $query = "INSERT INTO user2 VALUES ".
        "('$username','$password','$email','$fullname','$phone')";
    $result = $conn->query($query);
    if (!$result) {
        echo "INSERT failed<br><br>";
    }else{
        echo "Sign Up Success!!!";
        header('location:login.php');
    }
}

//form nhap du lieu
echo <<<_END
  <form action="registration.php" method="post">
  <pre>
  UserName <input type="text" name="username"><BR><BR>
  PassWord <input type="password" name="password"><BR><BR>
     Email <input type="text" name="email"><BR><BR>
  FullName <input type="text" name="fullname"><BR><BR>
     Phone <input type="text" name="phone"><BR><BR>
  <input type="submit" value="ADD Registration">
</pre>
</form>
_END;

function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}
?>