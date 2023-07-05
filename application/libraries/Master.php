<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master{

    public function genToken($id, $token_for = NULL)
    {
        
        $currenttimeseconds = date("mdYHis");
        $token_id= $token_for.$userId.$currenttimeseconds;              
        return sha1($token_id);
    }

    public function getdate($dateStr)
    {        
        $date = DateTime::createFromFormat('d/m/Y', $dateStr);
        $formattedDate = $date->format('Y-m-d');
        return $formattedDate;
    }
   
}
?>
