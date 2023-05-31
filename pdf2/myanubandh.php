<?php
class My_anubandh{


    public $total_cost = 0; 
    public $civil_cost = 0;
    public $civil_perent = 0;
    public $all_pcost = 0;      
    
    /*public function getCivilcost($total_cost, $ffloor_cost = NULL)
    {
        $c_cost = 840;
        $c_pt = $c_cost/$ffloor_cost*100;
        $this->civil_cost = $total_cost/100*$c_pt;

        $plcost_arr = array();

        $plcost_arr[0] = round($this->civil_cost/100*25, 2);
        $plcost_arr[1] = round($this->civil_cost/100*10, 2);
        $plcost_arr[2] = round($this->civil_cost/100*3, 2);

        $this->all_pcost = array_sum($plcost_arr);

        return $plcost_arr;
    }*/

    public function getPlinthcost($total_cost, $ffloor_cost = NULL)
    {
        $c_cost = 840;

        $this->civil_perent = $c_cost/$ffloor_cost*100;
        $this->total_cost = $total_cost;
        $plcost_arr = array();
        $plcost_arr[0] = $total_cost/100*25;
        $plcost_arr[1] = $total_cost/100*10;
        $plcost_arr[2] = $total_cost/100*3;
       
        $this->all_pcost = array_sum($plcost_arr);

        return $plcost_arr;  

    }

    public function getfloorCost($floor_area=null, $builtup_area=null, $payment_percent = NULL)
    {
        $rcivil = $this->total_cost - $this->all_pcost;
        $civil_cost = $rcivil / 100 * $this->civil_perent;

        $floor_percent = $floor_area / $builtup_area * 100;
        $floor_cost  = $civil_cost / 100 * $floor_percent;      
        $fcost = $floor_cost / 100 * $payment_percent;
        return $fcost;  
    }
    
    public function plan_list()
    {      
        $qry = "SELECT * FROM tbl_payment_plan where id <> 0";  
        $exec = mysqli_query($mysqli, $qry);
        return $res = mysqli_fetch_array($exec);
    } 
    //$fcost_array[0], $fwork_area,$total_work_area,$payment_percent
    public function getFcost($fcost,$floor_area=null, $builtup_area=null,$payment_percent= NULL)
    {       
        $f_cost_rate = $fcost - 840;
        $f_cost_percent = $f_cost_rate/$fcost*100;        
       
        $rfinish = $this->total_cost - $this->all_pcost;
        $finishing_cost = $rfinish/100*$f_cost_percent;//finishing cost

        $floor_percent = $floor_area / $builtup_area * 100;

        $floor_cost  = $finishing_cost / 100 * $floor_percent;      
        $fcost = $floor_cost / 100 * $payment_percent;

        return $fcost;
    }

}


?>