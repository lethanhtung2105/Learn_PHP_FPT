<?php
$cookieval=$_COOKIE['uname'];
?>
<HTML>
<BODY>
<?php
if (isset($cookieval)){
    echo "Welcome $cookieval";
}
else{
    echo "You need to log in";
}
?>
</BODY>
</HTML>
