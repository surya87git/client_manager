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

$site_id = $_REQUEST["site_id"] ?? ""; 
$from_date = $_REQUEST['from_date'] ?? "";
$to_date = $_REQUEST['to_date'] ?? "";

mysqli_set_charset($mysqli, 'utf8');
$qry = "";
$qry .= "SELECT a.id, a.site_id, a.create_date, a.slip_no, c.employee_name, d.s_name, d.s_loc FROM tbl_mat_reached a ";
$qry .= "LEFT JOIN employee_master c ON a.dealer_id = c.id ";
$qry .= "LEFT JOIN site_master d ON a.site_id = d.id ";
$qry .= "where a.id <> 0 ";

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

$qry .= " order by a.create_date desc";    
  
$stmt= mysqli_query($mysqli, $qry);

if(isset($stmt))
{
    
  $html.= '<div class="head"><h2>Reached Material List</h2></div>';

   //$emp_name = $_REQUEST['emp_name'];
  //$serial = $_REQUEST['sno'];
$cnt=0;
  while($res = mysqli_fetch_array($stmt))
  {
    $cnt++;

    $id = $res["id"];
    $create_date = date("d-m-Y",strtotime($res["create_date"]));
    $site_id = $res["site_id"];
    $slip_no = $res["slip_no"];
    $employee_name = $res["employee_name"];
    $site_name = $res["s_name"];
    $site_addr = $res["s_loc"];
    
    $html .='<table cellspacing="0" class="table table-bordered" style="background-color: #FEE; font-size: 16;">';
    $html .='<tr><td>Date:- '.date("d-m-Y",strtotime($create_date)).'</td><td>Slip No.:- '.$slip_no.'</td></tr>';
    $html .='<tr><td>Site Name:- '.$site_name.", ".$site_addr.'</td><td>Dealer:-'.$employee_name.'</td></tr>';
    $html .='</table>';

    //$html.="<br/>";

    $qry1 = "";
    $qry1 .="SELECT a.mat_id, a.mat_qty, a.qty_type, b.cat_name, b.cat_id, b.mat_name";
    $qry1 .=" FROM tbl_mat_reached_master a LEFT JOIN tbl_material b ON a.mat_id = b.id";
    $qry1 .=" WHERE a.reached_id = '$id'";
   
    mysqli_set_charset($mysqli, 'utf8');
    $exec1 = mysqli_query($mysqli, $qry1);
   // $r = mysqli_fetch_array($exec);
   //print_r($r);
  // exit;          
    if(isset($exec1))
    {
        
        $html.='<table cellspacing="0" class="table table-bordered table-hover">
        <tr>
        <th style="width:5%">#</th>
        <th style="width:35%">Category</th>
        <th style="width:35%">Material</th>
        <th style="width:25%">Quantity</th>
        </tr>';
                   
        $i=0;
        while($res_arr = mysqli_fetch_array($exec1))
        {
            $i++;
            $html.='<tr>
            <td>'.$i.'</td>
            <td>'.$res_arr['cat_name'].'</td>
            <td>'.$res_arr['mat_name'].'</td>
            <td>'.$res_arr['mat_qty'].' '.$res_arr['qty_type'].'</td>
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
$mpdf->SetTitle("UKC Reached Material List");
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
$mpdf->Output("UKC-RMlist".strtotime("now").".pdf", "D");
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