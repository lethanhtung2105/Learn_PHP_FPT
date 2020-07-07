<?php
$server="localhost";
$username="root";
$password="";
$db="user2";
$connect_mysql=mysqli_connect($server,$username,$password,$db);
if ($connect_mysql){
    echo "Connection established<BR>";
}
else{
    die("Unable to connect<BR>");
}
$mysql_db=mysqli_select_db($connect_mysql,$db);
if ($mysql_db){
    echo "Connected to the database<BR>";
}
else{
    die("Unable to conncet to the darabase<BR>");
}
$sql_dipt=("SELECT * FROM user_contact;");
echo "<BR>Displaying Records from the USER_CONTACT table:<BR>";
$result=mysqli_query($connect_mysql,$sql_dipt);
while ($row=mysqli_fetch_array($result)){
    echo "$row[USER_NAME] ";
    echo "$row[USER_EMAIL_ID]";
}
?>