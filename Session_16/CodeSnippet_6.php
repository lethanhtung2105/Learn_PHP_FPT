<?php
$employee_det=array(
    "Employee 1"=>array(
        1=>"$100",
        2=>"$150",
        3=>"$100",
        4=>"$160",
        5=>"$250",
        6=>"$148"
    ),
        "Employee 2"=>array(
            1=>"$180",
            2=>"$195",
            3=>"$200",
            4=>"$130",
            5=>"$280",
            6=>"$218",
    )
);
echo "The commission is: ";
echo $employee_det["Employee 2"][5];
?>