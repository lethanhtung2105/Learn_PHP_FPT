<?php
session_start();
$myname=$_SESSION['myname'];
session_unset();
session_destroy();
echo "Session destroyed";
?>
<HTML>
<HEAD><TITLE>Session</TITLE></HEAD>
<body>
<a href="mypage.php">Homepage of Mypage.com</a>
</body>
</HTML>
