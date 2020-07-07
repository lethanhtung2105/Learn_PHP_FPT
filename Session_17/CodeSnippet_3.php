<?php
$serverOS=array(0=>"Windows NT",1=>"Windows 2000",3=>"Windows 2003");
$applicationOS=array(1=>"Windows 95",2=>"Window 98",3=>"Windows ME");
$server_count=count($serverOS);
echo "Server Operating systems";
echo "<BR>";
for($i=0;$i<$server_count;$i++){
    $rec=each($serverOS);
    echo "$rec[key] $rec[value]";
    echo "<BR>";
}
echo "<BR>";
echo "Application Operating systems";
echo "<BR>";
$app_count=count($applicationOS);
for($i=0;$i<$app_count;$i++){
    $rec=each($applicationOS);
    echo "$rec[key] $rec[value]";
    echo "<BR>";
}
$OptSys=array_merge($serverOS,$applicationOS);
echo "<BR>";
echo "Merged array of Operating systems";
echo "<BR>";
$total=count($OptSys);
for($i=0;$i<$total;$i++){
    $rec=each($OptSys);
    echo "$rec[key] $rec[value]";
    echo "<BR>";
}
?>