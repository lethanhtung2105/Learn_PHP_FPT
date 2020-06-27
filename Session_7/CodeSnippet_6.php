<?php
$anon_class_obj=new class{
    public $greeting='hello';
    public $Id=754;
    const SETT='some configuration';
    public function getValue(){
        return 'some operation';
    }
    public function  getValueWithArg($str1){
        return 'returned value is '.$str1;
    }
};
echo '<BR>';
echo $anon_class_obj->greeting;
echo '<BR>';
echo $anon_class_obj->Id;
echo '<BR>';
echo $anon_class_obj::SETT;
echo '<BR>';
echo $anon_class_obj->getValue();
echo '<BR>';
echo $anon_class_obj->getValueWithArg('Aptech');
echo '<BR>';
echo '<BR>';
?>