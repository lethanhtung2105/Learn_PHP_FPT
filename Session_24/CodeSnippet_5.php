<?php
class empdetail{
    var $empid;
    var $empname;
    var $empcity;
    var $empdept;
    function empdetail($id,$name,$city,$dept){
        $this->empid=$id;
        $this->empname=$name;
        $this->empcity=$city;
        $this->empcity=$dept;
    }
}
?>