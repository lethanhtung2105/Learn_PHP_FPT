<?php
$lang[]="VB";
$lang[]="Java";
$lang[]="Perl";
$lang[]="PHP";
$lang[]="VC++";
$lang[]=".NET";
$lang[]="Delphi";
$elmts=count($lang);
for ($item=0;$item<$elmts;$item++){
    $row=each($lang);
    echo "$row[key] $row[value]";
    echo "<BR>";
}
?>