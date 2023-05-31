<?php //error_reporting(0);
require("../../config.php");
require "vendor/autoload.php";

$html="";

$html.="<style>
.head{
text-align: center;
color: #224181 !important
}

.table{
  width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
}
.table-bordered{
  border: 1px solid #dee2e6;
}
.border, .table td, .table th {
  border-color: #e5e9ec !important;
}
table, th, td {
  border: 1px solid black;
}
td { font-family: freeserif; }
.table-bordered td, .table-bordered th {
  border: 1px solid #dee2e6;
}
tr {
  display: table-row;
  vertical-align: inherit;
  border-color: inherit;
}
.border, .table td, .table th {
  border-color: #e5e9ec !important;
}
.table-bordered td, .table-bordered th {
  border: 1px solid #dee2e6;
}
.table td, .table th {  
  vertical-align: top;
  border-top: 1px solid #dee2e6;  
}
table td {
  word-wrap: break-word;
}

</style>";

$login_id = $_REQUEST["login_id"] ?? "";
$login_type = $_REQUEST["login_type"] ?? "";

$followup_by_id = $_REQUEST["followup_by_id"] ?? "";

$from_date = $_REQUEST['from_date'] ?? "";
$to_date = $_REQUEST['to_date'] ?? "";

//mysqli_set_charset('utf8');

$qry ="";
$qry .="SELECT * FROM tbl_followup_master where is_private = 'YES'";
if($followup_by_id)
{
  $qry .= " and followup_by_id = $followup_by_id";
}

if($from_date !="" && $to_date !="")
{
  $from_date = date("Y-m-d",strtotime($from_date));
  $to_date = date("Y-m-d",strtotime($to_date));
  $qry .= " and DATE(add_date) BETWEEN '$from_date' and '$to_date'";
}

if($login_type == 1)
{
  " and login_id = $login_id";
}
$qry .= " order by id desc"; 

$stmt= mysqli_query($mysqli, $qry);


if(isset($stmt))
{
    
  $html.= '<div class="head"><h2>UK Concept Designer</h2></div>';

    //$emp_name = $_REQUEST['emp_name'];
  //$serial = $_REQUEST['sno'];
  $cnt=0;
  while($res = mysqli_fetch_array($stmt))
  {
    $cnt++;
    $id = $res["id"];
    $login_name = $res["login_name"];
    $client_name = $res["client_name"];
    $client_mob = $res["client_mob"];
    $add_date = date("d-m-Y H:i:s",strtotime($res["add_date"]));
    $create_date = date("d-m-Y H:i:s",strtotime($res["create_date"]));
    $followup_by_name = $res["followup_by_name"];
    $lead_from = $res["lead_from"];
    $work_detail = $res["work_detail"];
    $work_detail = $res["work_detail"];
    $meeting = $res["meeting"];
    $notes = $res["notes"];
    $status = $res["status"];
    $meeting = $res["meeting"];
    $quote_req = $res['quote_req'] ?? '';
   
    $meet_done_date = $res['meet_done_date'];

    if($meet_done_date == "" || $meet_done_date == "0000-00-00 00:00:00")
    {
      $meet_done_date = "";
    }
    else
    {
      $meet_done_date = " (".date("d-m-Y H:i:s", strtotime($meet_done_date)).")";
      
    }


    $html .='<table cellspacing="0" class="table table-bordered" style="background-color: #FEE; font-size: 16;">';
      $html .='<tr><td>Client Name:- '.$client_name.'</td><td>Client Mob:- '.$client_mob.'</td></tr>';
      $html .='<tr><td>Date:- '.$create_date.'</td><td>Start Date:- '.$add_date.'</td></tr>';
      $html .='<tr><td>Create By:- '.$login_name.'</td><td>Followup By:- '.$followup_by_name.'</td></tr>';
      $html .='<tr><td>Quotation Req.:-'.$quote_req.'</td><td>Meeting(With sir?):- '.$meeting.$meet_done_date.'</td></tr>';
      $html .='<tr><td>Status:- '.$status.'</td><td>Lead From:- '.$lead_from.'</td></tr>';
      $html .='<tr><td colspan="2">Work Detail:- '.$work_detail.'</td></tr>';
      $html .='<tr><td colspan="2">Notes:- '.$notes.'</td></tr>';
    $html .= '</table>';
    
    $qry1 = "SELECT * FROM tbl_followup where client_id = '$id' order by id desc";

    //mysqli_set_charset('utf8');
    $exec1 = mysqli_query($mysqli, $qry1);
    // $r = mysqli_fetch_array($exec);
    //print_r($r);
    // exit;          
    if(isset($exec1))
    {
        $html.='<label><h4>Followup Details</h4></label>
        <table cellspacing="0" class="table table-bordered table-hover">
          <tr>
            <th style="width:5%">#</th>
            <th style="width:15%">Fup. Date</th>
            <th style="width:15%">Next Date</th>
            <th style="width:65%">Remarks</th>
          </tr>';
            
        $i=0;
        while($res_arr = mysqli_fetch_array($exec1))
        {
            $i++;
            $html.='<tr>
              <td>'.$i.'</td>
              <td style="font-family: freeserif;">'.date("d-m-Y H:i:s", strtotime($res_arr['fup_date'])).'</td>
              <td style="font-family: freeserif;">'.date("d-m-Y H:i:s", strtotime($res_arr['next_fup_date'])).'</td>
              <td style="font-family: freeserif;">'.$res_arr['remarks'].'</td>
            </tr>';
            
        }

        $html.="</table>";
    }


    $html .= '<hr>';
}

//end of main loop
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

$mpdf->SetTitle("UKFollowup");
$mpdf->SetAuthor("UKC");
$mpdf->SetCreator("Surya");
$mpdf->SetSubject("UKC Report");
$mpdf->SetKeywords("UKC", "UKC");


// (C) THE HTML

// OR WE CAN JUST READ FROM A FILE
// $html = file_get_contents("PAGE.HTML");

// (D) WRITE HTML TO PDF
$mpdf->WriteHTML($html);

// (E) OUTPUT
// (E1) DIRECTLY SHOW IN BROWSER
$mpdf->Output("UKFollowup".strtotime("now").".pdf", "D");

  //header("Location: ../../daily_work_details.php");
  //$mpdf->Output();
  // (E2) FORCE DOWNLOAD
  // $mpdf->Output("demo.pdf", "D");
  // (E3) SAVE TO FILE ON SERVER
  // 

}
else
{
  echo  "Data not available...";
}
