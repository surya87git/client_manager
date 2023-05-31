<?php error_reporting(0);
// DOWNLOAD COMPOSER - https://getcomposer.org
// NAVIGATE TO PROJECT FOLDER IN COMMAND LINE
// RUN "composer require mpdf/mpdf"

// (A) LOAD MPDF
require("../../config.php");
require "vendor/autoload.php";
$mpdf = new \Mpdf\Mpdf();
//require_once( 'mpdf/mpdf.php');
//$mpdf = new mPDF('utf-8', 'A4-C');
// PORTRAIT BY DEFAULT, WE CAN ALSO SET LANDSCAPE
// $mpdf = new \Mpdf\Mpdf(["orientation" => "L"]);

// (B) OPTIONAL META DATA + PASSWORD PROTECTION

// $mpdf->SetProtection([], "user", "password");

if(isset($_REQUEST['sno']))
{

  $emp_name = $_REQUEST['emp_name'];
  $serial = $_REQUEST['sno'];

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


  
  $qry = "SELECT a.id, a.site_id, a.emp_id, a.emp_name, a.work_note, a.create_date, b.s_name FROM tbl_site_work a left join site_master b on a.site_id = b.id WHERE a.id = '$serial'";
  mysqli_set_charset('utf8');
  $exec = mysqli_query($mysqli, $qry);

  $row = mysqli_fetch_array($exec);

 // print_r($row);
  $html.= '<div class="head"><h2>UK Concept Designer</h2></div>';
  $html .='<table cellspacing="0" class="table table-bordered" style="background-color: #FEE; font-size: 16;">';
  $html .='<tr><td>Date:- '.date("d-m-Y H:i:s",strtotime($row["create_date"])).'</td><td>SNO.:- '.$row["id"].'</td></tr>';
  $html .='<tr><td>Name:- '.$row["emp_name"].'</td>><td>Site Name:-'.$row["s_name"].'</td></tr>';
 
  if($row["work_note"] != "")
  {
    $html .='<tr><td colspan="2">Work Note:- '.$row["work_note"] ?? "".'</td></tr>';
  }
  $html .= '</table>';


  $qry1 = "SELECT * FROM tbl_work_details where serial_no = '$serial'";
  mysqli_set_charset('utf8');
  $exec1 = mysqli_query($mysqli, $qry1);
   // $r = mysqli_fetch_array($exec);
   //print_r($r);
  // exit;          
  if(mysqli_num_rows($exec1) > 0)
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
          <td>'.$res_arr['work'].'</td>
          <td>'.$res_arr['detail'].'</td>
        </tr>';
          
      }
    $html.="</table>";

  }
    
  $qry2 = "SELECT * FROM tbl_mat_detail where serial_no = '$serial'";
  mysqli_set_charset('utf8');
  $exec2 = mysqli_query($mysqli, $qry2);
    
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

 
    $qry3 = "SELECT * FROM tbl_site_problem where serial_no = '$serial'";
    mysqli_set_charset('utf8');
    $exec3 = mysqli_query($mysqli, $qry3);

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
  echo    $html.="</table>";
    }      
  exit;
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
$mpdf->Output("UKC_WORK_REPORT_".strtotime("now").".pdf", "D");
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
