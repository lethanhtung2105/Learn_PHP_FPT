<?php
class usermail{
    var $username="john";
    var $password="abc123";
    function dispuser(){
        echo $this->username,"<BR><BR>";
        echo $this->password,"<BR><BR>";
    }
}
class userdetails extends usermail{
    var $secretquery="Favorite food";
    var $answer="chinese";
    function dispdetail(){
        echo "<BR><BR>";
        echo $this->secretquery,"<BR><BR>";
        echo $this->answer,"<BR><BR>";
    }
}
$mail=new userdetails();
$mail1=new usermail();
$disp1=$mail->dispdetail();
$disp2=$mail1->dispuser();
?>