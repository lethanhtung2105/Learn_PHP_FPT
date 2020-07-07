<?php
class salary{
    public $hra;
    public $ta;
    public $tax;
    public function hra_calc($basic){
        $hra=$basic*0.25;
        return $hra;
    }
    public function travelallow_calc($basic){
        $ta=$basic*0.08;
        return $ta;
    }
    public function tax_calc($basic){
        $tax=$basic*0.05;
        return $tax;
    }
}
class net_salary extends salary{
    function net($basic){
        $hra=$this->hra_calc($basic);
        $ta=$this->travelallow_calc($basic);
        $tax=$this->tax_calc($basic);
        return $basic+($hra+$ta)-$tax;
    }
}
?>