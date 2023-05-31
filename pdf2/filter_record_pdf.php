<?php error_reporting(0);
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

$site_id = $_REQUEST["site_id"] ?? ""; 
$from_date = $_REQUEST['from_date'] ?? "";
$to_date = $_REQUEST['to_date'] ?? "";

mysqli_set_charset($mysqli, 'utf8');

$qry ="";
$qry .="SELECT a.id, a.site_id, a.emp_id, a.work_note, a.emp_name, a.create_date, b.s_name FROM tbl_site_work a 
LEFT JOIN site_master b ON a.site_id = b.id where a.id <> 0";

if($site_id)
{
$qry .= " and a.site_id = $site_id ";
}
if($from_date !="" && $to_date !="")
{
$from_date = date("Y-m-d",strtotime($from_date));
$to_date = date("Y-m-d",strtotime($to_date));
$qry .= " and DATE(a.create_date) BETWEEN '$from_date' and '$to_date'";
}

$qry .= " order by a.id desc";    
  
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
    $create_date = date("d-m-Y H:i:s",strtotime($res["create_date"]));
    $site_id = $res["site_id"];
    $site_name = $res["s_name"];
    $emp_name = $res["emp_name"];

    $html .='<table cellspacing="0" class="table table-bordered" style="background-color: #FEE; font-size: 16;">';
    $html .='<tr><td>Date:- '.date("d-m-Y H:i:s",strtotime($create_date)).'</td><td>SNO.:- '.$id.'</td></tr>';
    $html .='<tr><td>Name:- '.$emp_name.'</td><td>Site Name:-'.$site_name.'</td></tr>';
    if($res["work_note"] != "")
    {
      $html .='<tr><td colspan="2">Work Note:- '.$res["work_note"] ?? "".'</td></tr>';
    }
    $html .= '</table>';
  //$html.="<br/>";

    $qry1 = "SELECT * FROM tbl_work_details where serial_no = '$id'";

    mysqli_set_charset($mysqli, 'utf8');
    $exec1 = mysqli_query($mysqli, $qry1);
   // $r = mysqli_fetch_array($exec);
   //print_r($r);
  // exit;          
    if(isset($exec1))
    {
        $html.='<label><h4>Work Done on Site</h4></label>
        <table cellspacing="0" class="table table-bordered table-hover">

        <tr>
        <th style="width:5%">#</th>
        <th style="width:25%">Work</th>
        <th style="width:70%">Details</th>
        </tr>';
            
        $i=0;
        while($res_arr = mysqli_fetch_array($exec1))
        {
            $i++;
            $html.='<tr>
            <td>'.$i.'</td>
            <td style="font-family: freeserif;">'.$res_arr['work'].'</td>
            <td style="font-family: freeserif;">'.$res_arr['detail'].'</td>
        </tr>';
            
        }

        $html.="</table>";
    }

    $qry2 = "SELECT * FROM tbl_mat_detail where serial_no = '$id'";
    mysqli_set_charset($mysqli, 'utf8');
    $exec2 = mysqli_query($mysqli, $qry2);
    
    //$r = mysqli_fetch_array($exec);
    //print_r($r);
    //exit;  
    if(mysqli_num_rows($exec2) > 0)        
    {
        $html.='<label><h4>Material used in Site</h4></label>
          <table cellspacing="0" class="table table-bordered table-hover">
          <tr>
              <th style="width:5%">#</th>
              <th style="width:25%">Material</th>
              <th style="width:70%">Cons. Qty</th>
          </tr>';
            
            $i=0;
            while($res_arr = mysqli_fetch_array($exec2))
            {
                $i++;
                $html.='<tr>
                  <td>'.$i.'</td>
                  <td>'.$res_arr['material'].'</td>
                  <td>'.$res_arr['mat_qty'].' '.$res_arr['qty_type'].'</td>
                </tr>';                
            }
        $html.="</table>";
    }        

    $qry3 = "SELECT * FROM tbl_site_problem where serial_no = '$id'";
    mysqli_set_charset($mysqli, 'utf8');
    
    $exec3 = mysqli_query($mysqli, $qry3);
   // $r = mysqli_fetch_array($exec);
   //print_r($r);
  // exit;   
  if(mysqli_num_rows($exec3) > 0)
    {      
        $html.='<label><h4>Problem on Site</h4></label>
        <table cellspacing="0" class="table table-bordered table-hover">
        <tr>
            <th style="width:5%">#</th>
            <th style="width:25%">Problem</th>
            <th style="width:30%">Details</th>
            <th style="width:40%">Solution</th>
        </tr>';
            
            $i=0;
            while($res_arr = mysqli_fetch_array($exec3))
            {
                $i++;
                $html.='<tr>
                <td>'.$i.'</td>
                <td>'.$res_arr['problem'].'</td>
                <td>'.$res_arr['p_detail'].'</td>
                <td>'.$res_arr['solution'].'</td>
            </tr>';
                
            }
         $html.="</table>";
    } 

    $html .= '<hr>';
}//end of main loop

//echo $html;
//exit;
$mpdf = new \Mpdf\Mpdf([
  'mode' => 'utf-8',
  'default_font' => 'ind_hi_1_001'
]);

$mpdf->SetDisplayMode('fullpage');
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;

$mpdf = new \Mpdf\Mpdf();

$mpdf->SetTitle("UK Concept Designer");
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
$mpdf->Output("UKC_WORK_REPORT".strtotime("now").".pdf", "D");
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
