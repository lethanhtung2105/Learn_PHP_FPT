<?php
session_start();
$myname=$_SESSION['myname'];
?>
<html>
<head><title>Homepage</title></head>
<body>
welcome <?php echo $myname?> to MyPage.com <BR>
</body>
</html>
