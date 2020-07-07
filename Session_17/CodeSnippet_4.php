<?php
$student=array(
    001=>array(
        "Name"=>"Chris Edwards",
        "Email"=>"chris.e@flaymore.edu",
        "Grade"=>"A",
        "Gender"=>"Male"
    ),
    002=>array(
        "Name"=>"Martina Lake",
        "Email"=>"martina.e@flaymore.edu",
        "Grade"=>"A+",
        "Gender"=>"Female"
    )
);
$total_elmt=count($student);
for($i=0;$i<$total_elmt;$i++){
    $row=each($student);
    $val=$row["Key"];
    echo "00$val: ";
    echo "<BR>";
    $valcount=count($student[$val]);
    for($t=0;$t<$valcount;$t++){
        $rec=each($student[$val]);
        echo "$rec[key] : $rec[value]";
        echo "<BR>";
    }
    echo "<BR>";
}
?>