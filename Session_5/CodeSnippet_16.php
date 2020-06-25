<?php
if(isset($_COOKIE['Name'])){
    $last=$_COOKIE['Name'];
    echo "Welcome back! <BR> Your name is ";
}
else{
    echo "Welcome to our site!";
}
?>