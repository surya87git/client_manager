<?php //error_reporting(0);
ini_set('display_errors', 1);
require "vendor/autoload.php";
require("../db/config.php");
require("myanubandh.php");

$html="";
$html.="<style>

.head{
 
  font-family: freeserif;
  text-align: center;
  color: goldenrod !important;
  text-decoration: underline

}

.myTable { 
  width: 100%;
  text-align: left;
  background-color: lemonchiffon;
  border-collapse: collapse; 
}
.myTable th { 
  background-color: goldenrod;
  color: white; 
  }
.myTable td, 
.myTable th { 
  padding: 6px;
  border: 1px solid goldenrod; 
  
  }

</style>";

//print_r($_REQUEST);

$cid = $_REQUEST['cid'];
$qry = "SELECT * FROM tbl_cost_calculator_new where id = '$cid'";  
$exec = mysqli_query($mysqli, $qry);
$res = mysqli_fetch_array($exec);

//print_r($res);

if($res)
{

  $obj = new My_anubandh();
  $fcost_array = explode(",", $res['floor_sq_price']);
  $fdisc_cost_array = explode(",", $res['floor_disc_price']);
  $p_arr = $obj->getPlinthcost($res['total_cost'], $fcost_array[0]);
  $farea_arr = explode(",", $res['work_area']);

/**------------Additional in package-------- */
  
    if($res["stank_cost"]){
      $stank_cost = number_format($res["stank_cost"]);
    }
    else{
      $stank_cost = "0 (Not included)";
    }
    if($res["wtank_cost"]){
      $wtank_cost = number_format($res["wtank_cost"]);
    }
    else{
      $wtank_cost = "0 (Not included)";
    }
    if($res["mkitchen_cost"]){
      $mkitchen_cost = number_format($res["mkitchen_cost"]);
    }
    else{
      $mkitchen_cost = "0 (Not included)";
    }
    
    if($res["sum_fceling_cost"]){
      $sum_fceling_cost = number_format($res["sum_fceling_cost"]);
    }
    else{
      $sum_fceling_cost = "0 (Not included)";
    }

    if($res["floor_strength"]){
      $floor_strength = number_format($res["floor_strength"]);
    }
    else{
      $floor_strength = "0 (Not included)";
    }

    if($res["tata_steel"]){
      $tata_steel = number_format($res["tata_steel"]);
    }
    else{
      $tata_steel = "0 (Not included)";
    }
    
    if($res["jindal_steel"]){
      $jindal_steel = number_format($res["jindal_steel"]);
    }
    else{
      $jindal_steel = "0 (Not included)";
    }
    
    if($res["jindal_bricks"]){
      $jindal_bricks = number_format($res["jindal_bricks"]);
    }
    else{
      $jindal_bricks = "0 (Not included)";
    }

    if($res["marble"]){
      $marble = number_format($res["marble"]);
    }
    else{
      $marble = "0 (Not included)";
    }

    if($res["wooden_look"]){
      $wooden_look = number_format($res["wooden_look"]);
    }
    else{
      $wooden_look = "0 (Not included)";
    }
    
    if($res["add_toilet"]){
      $add_toilet = number_format($res["add_toilet"]);
    }
    else{
      $add_toilet = "0 (Not included)";
    }

    if($res["toilet_type"]){
      $toilet_type = number_format($res["toilet_type"]);
    }
    else{
      $toilet_type = "(Not included)";
    }

   if($res["photo_frame"]){
      $photo_frame = $res["photo_frame"];
    }
    else{
      $photo_frame = "(Not included)";
    }

    if($res["frame_type"]){
      $frame_type = $res["frame_type"];
    }
    else{
      $frame_type = "(Not included)";
    }

    if($res["frame_type"]){
      $frame_type = $res["frame_type"];
    }
    else{
      $frame_type = "(Not included)";
    }

    if($res["comp_time"]){
      $comp_time = $res["comp_time"];
    }
    else{
      $comp_time = "(Not included)";
    }

    if($res["rft_rate"]){
      $comp_time = $res["rft_rate"];
    }
    else{
      $rft_rate = "0";
    }
    
/**------------End-------- */

$html.= '<div class="head">   
          <h2>UK Concept Designer - Estimate</h2>
          <p>Welcome to UK Concept Designer. This is your cost for Booking of your Project</p>
        </div>'; 

$html .='<table cellspacing="0" class="myTable" >';
$html .='<tr><td><b>Date:- </b> '.date("l, d-M-Y h:i:A", strtotime($res["create_date"])).'</td><td><b>Create By:-</b> '.$res["create_by"].'</td></tr>';
$html .='<tr><td><b>Client Name:- '.ucwords($res["client_name"]).'</b></td><td><b>Location:-</b> '.$res["client_addr"].'</td></tr>';
$html .='<tr><td><b>Plot Size:- Length: </b>'.$res["length"]." feet&nbsp; <b>Width: </b> ".$res["width"].' feet&nbsp; <b>Depth: </b> '.$res["depth"].' feet</td><td><b>Area:- </b> '.$res['total_area'].' sqft</td></tr>';

$html .='<tr>
<td><b>Boundary Wall Height:- </b>'.$res["bwall_height"].' feet, <b>Boundary wall RFT:-</b> '.$rft_rate.' rft, <b>Boundary Wall Area:-</b> '.$res["bwall_area"].' sqft</td>
<td><b>Open Area:-</b> '.$res["open_area"].' sqft</td>
</tr>';

$html .='<tr><td colspan="2"><span style="font-size: 16px; font-weight:bold;">Additional in Package:- </span></td></tr>';

$html .='<tr>
	<td><b>Septic Tank (Capacity 25 Years):- </b>₹ '.$stank_cost.'</td>
	<td><b>Water Tank (Capacity 3000 ltr.):- </b>₹ '.$wtank_cost.'</td>
</tr>';

$html .='<tr>
	<td><b>Modular Kitchen:-</b> ₹ '.$mkitchen_cost.'</td>
	<td><b>False Ceiling:-</b> ₹ '.$sum_fceling_cost.'</td>
</tr>';

//$html .='<tr><td colspan="2"><span style="font-size: 16px; font-weight:bold;">Topup Plans:- </span></td></tr>';

$html .='<tr>
	<td><b>Extra Floor Stregth:-</b> ₹ '.$floor_strength.'</td>
	<td><b>Tata Steel:-</b> ₹ '.$tata_steel.'</td>
</tr>';

$html .='<tr>
  <td><b>Jindal Steel:-</b> ₹ '.$jindal_steel.'</td>
	<td><b>Jindal Bricks:-</b> ₹ '.$jindal_bricks.'</td>
</tr>';

$html .='<tr>
	<td><b>Marble:-</b> ₹ '.$marble.'</td>
	<td><b>Wooden Look UPVC Window (Premium):-</b> ₹ '.$wooden_look.'</td>
</tr>';

$html .='<tr>
  <td><b>Additional Toilet:-</b> ₹ '.$add_toilet.'</td>
	<td><b>Toilet Type:-</b> '.$toilet_type.'</td>
</tr>';

$html .='<tr>
  <td><b>Window With Granite:-</b> ₹ '.$photo_frame.'</td>
	<td><b>Frame:-</b> '.$frame_type.'</td>
</tr>';

$html .='<tr>
  <td><b>Early Work Completion Time:-</b> ₹ '.$comp_time.'</td>
  <td>&nbsp;</td>
</tr>';

$html .='<tr><td colspan="2"><b>Number of Floor:- '.$res['floor_num'].'</b></td></tr>';
$html .='<tr><td colspan="2"><b>Super Builtup Area(SBA):- '.$res['total_work_area'].'&nbsp; sqft</b></td></tr>';
$html .='<tr>
  <td>
    <b>Floor Discount Cost:- ₹ '.number_format($res['total_f_disc']).'</b>
  </td>
  <td>
    <b>Additional Cost:- ₹ '.number_format($res['additional_cost']).'</b>
  </td>
</tr>';

$c=0;
$cnt_row = 0;
foreach($fcost_array as $k => $fcost)
{

  $fdc = $fdisc_cost_array[$k];

  if($fdc  > 0 && $fdc < $fcost)
  {
    $final_floor_cost = $fdc;
  }
  else
  {
    $final_floor_cost = $fcost;
  }

  if($c == 0)
  {
    $floor = "Ground Floor";
  }
  else
  {
    $floor = $c." Floor";
  }


  $cnt_row++;
  if($cnt_row == 1)
  {
    $html .= '<tr>';
  }
  $html .='<td><span style="font-size: 16px; font-weight:bold;">'.$floor.' Cost:- ₹ '.number_format($final_floor_cost).'</span></td>';  
  if($cnt_row == 2)
  {
    $html .= '</tr>';
    $cnt_row = 0;
  }
  
  $c++;

}

$html .='<tr><td colspan="2"><span style="font-size: 16px; font-weight:bold;">Total Discount Cost:- ₹ '.number_format($res['total_disc_cost']).'</span></td></tr>';

$html .='<tr><td colspan="2"><span style="font-size: 16px; font-weight:bold;">Building Cost:- ₹ '.number_format($res['total_floor_cost']).'</span></td></tr>';

$html .='<tr><td colspan="2"><span style="font-size: 16px; font-weight:bold;">Boundary Wall Cost:- ₹ '.number_format($res['bwall_cost']).'</span></td></tr>';
$html .='<tr><td colspan="2"><span style="font-size: 16px; font-weight:bold;">Elevation Cost:- ₹ '.number_format($res['elev_cost']).'</span></td></tr>';
$html .='<tr><td colspan="2"><span style="font-size: 16px; font-weight:bold;">Open Area Cost.:- ₹ '.number_format($res['open_area_cost']).'</span></td></tr>';
$html .='<tr><td colspan="2"><span style="font-size: 16px; font-weight:bold;">Extra plinth Cost:- ₹'.number_format(round($res['extra_plinth_cost'])).'</span></td></tr>';
$html .='<tr><td colspan="2"><span style="font-size: 18px; font-weight:bold;">Total Project Cost:- ₹ '.number_format($res['total_cost']).'</span></td></tr>';

$html .= '</table>';

if($res['with_payment_term'] == "yes")
{
$html .= '<br/><br/><br/><br/><br/>';

$floor_num = $res['floor_num'];
$total_work_area = $res['total_work_area'];

$qry = "SELECT * FROM tbl_payment_plan WHERE work_type = 'CIVIL' AND FLOOR < ".$floor_num." ORDER BY FLOOR ASC";  
$exec = mysqli_query($mysqli, $qry);
//$sql = mysqli_fetch_all($exec,MYSQLI_ASSOC);

$html .= '<table cellspacing="0" class="myTable" style="background-color:#fff !important">

  <tr style="background-color: #e7e5cb;"><td colspan="3" style="font-size:16px; font-weight:bold; text-align: center;">Plinth/Other Remaining</td></tr>
  <tr style="background-color: #e7e5cb;">
    <td>Payable Amount with Agreement (only drawing work, site layout, juggi work, cctv+net installation, labour setup, Excavation, Footing reinforcement + casting completion, will done)</td> 
    <td nowrap>Project Cost</td>
    <td nowrap>₹ '.$p_arr[0].'</td>
  </tr>
  
  <tr style="background-color: #e7e5cb;">
    <td>2 days after footing for plinth completion and before back filling, Plinth work Complete</td> 
    <td nowrap>Project Cost</td>
    <td nowrap>₹ '.$p_arr[1].'</td>
  </tr>

  <tr style="background-color: #e7e5cb;">      
    <td>5 days before starting Complete Boundary wall work with gate and complete outer plaster work</td>
    <td nowrap>Project Cost</td>
    <td nowrap>₹ '.$p_arr[2].'</td>
  </tr>';

  $tmp = "";
  $cnt = 0;
  $fwork_area = 0;
  $tpcost = 0;
 
 while($res2 = mysqli_fetch_array($exec))
    {

        $work_type = $res2["work_type"]; 
        $floor_name = $res2["floor_name"];  
        $payment_percent = $res2["payment_percent"];        

        if($tmp != $floor_name)
        { 
          
          $fwork_area = $farea_arr[$cnt];
          $html .= '<tr style="background-color: #f1ecb4;"><td colspan="3" style="font-size:16px; font-weight:bold; text-align: center;">'.$floor_name.' Floor [ Civil Work ]</td></tr>';
          $tmp = $floor_name;
          $cnt++;  
         
        }        
        
        $pcost = $obj->getfloorCost($fwork_area, $total_work_area, $payment_percent, $payment_percent);

        $html .= '<tr style="background-color: #f1ecb4;">    
          <td>'.$res2["work_detail"].'</td> 
          <td nowrap>Floor wise</td>
          <td nowrap>₹ '.round($pcost, 2).'</td>
        </tr>';

        if($tmp == $floor_name)
        {
           $tpcost = $tpcost+$pcost;
        }
        else
        {
          $tpcost = 0;
        }

    }

    $html .= '<tr style="" style="background-color: #f1ecb4;"><td colspan="3" style="font-size:16px; font-weight:bold; text-align: right;">Total Civil Cost ₹&nbsp;'.number_format($tpcost).'</td></tr>';    

    $qry3 = "SELECT * FROM tbl_payment_plan WHERE work_type = 'With Finishing' AND FLOOR < ".$floor_num." ORDER BY FLOOR ASC";  
    $exec3 = mysqli_query($mysqli, $qry3);
    //$sql3= mysqli_fetch_all($exec3, MYSQLI_ASSOC);

    $cnt = 0;
    $fwork_area = 0;
    $tfcost = 0;
    //foreach($sql3 as $res3)
    while($res3 = mysqli_fetch_array($exec3))
        {
  
        $work_type = $res3["work_type"]; 
        $floor_name = $res3["floor_name"];  
        $payment_percent = $res3["payment_percent"];        
  
  
        if($floor_num == 1)
        {
          $fwork_area = $farea_arr[$cnt];
        }
        
        
        if($tmp != $floor_name)
        { 
          $fwork_area = $farea_arr[$cnt];
          $html .= '<tr style="background-color: #f1f5cd;"><td colspan="3" style="font-size:16px; font-weight:bold; text-align: center;">'.$floor_name.' Floor [ Finishing Work ]</td></tr>';
          $tmp = $floor_name;
          $cnt++;  
        }
          
        $fcost = $obj->getFcost($fcost_array[0], $fwork_area,$total_work_area,$payment_percent);  

        $html .= '<tr style="background-color: #f1f5cd;">    
          <td>'.$res3["work_detail"].'</td> 
          <td nowrap>Floor wise</td>
          <td nowrap>₹ '.round($fcost, 2).'</td>
        </tr>'; 


        if($tmp == $floor_name)
          {
              $tfcost = $tfcost+$fcost;
          }
          else
          {
            $tfcost = 0;
          }

      }

    $html .= '<tr style="" style="background-color: #f1ecb4;"><td colspan="3" style="font-size:16px; font-weight:bold; text-align: right;">Total Finishing Cost ₹&nbsp;'.number_format($tfcost).'</td></tr>';    

  $html .='</table>'; 

}

$html .= '<br/>
  <div style="text-align: center; padding-top:2px;">
    <a href="https://ukcdesigner.in/" style="color:goldenrod; font-size:14px;" target="_blank">Copyright © '.date("Y").'&nbsp;&nbsp;UK Concept Designer, Raipur - 492001, Ph. 0771-4088844</a>
  </div>';

 //echo $html;
//exit;

/*$mpdf = new \Mpdf\Mpdf([
  'mode' => 'utf-8',
  'default_font' => 'ind_hi_1_001'
]);
$mpdf->SetDisplayMode('fullpage');
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;
*/

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetWatermarkImage('logo.png');
$mpdf->showWatermarkImage = true;
//$mpdf->watermarkImageAlpha = 0.2;

$mpdf->SetTitle("UKFollowup");
$mpdf->SetAuthor("UKC");
$mpdf->SetCreator("Surya");
$mpdf->SetSubject("UKC Report");
$mpdf->SetKeywords("UKC", "UKC");

$mpdf->WriteHTML($html);
$mpdf->Output("UKC-Cost-Calculation".strtotime("now").".pdf", "D");

//$mpdf->Output();
// (E) OUTPUT
// (E1) DIRECTLY SHOW IN BROWSER
//header("Location: ../../cost_calculator.php");

// (E2) FORCE DOWNLOAD
// $mpdf->Output("demo.pdf", "D");
// (E3) SAVE TO FILE ON SERVER
// 

}
else
{
  echo  "Data not available...";
}
?>

<br><br><br><br><br><br><br><br><br><br><br><br>

<?php 

  
  

?>
