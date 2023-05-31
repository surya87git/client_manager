<?php error_reporting(0);
require("../../config.php");
require "vendor/autoload.php";

$html="";

$html.="<style>
.head{
 text-align: center;
 color: #5a5757 !important
}
p{
 font-size:15px;
 font-family: freeserif;
}
.bold_head{
 font-weight:bold;
 font-size:14px;
}
.table{
  width: 100%;
  margin-bottom: 1rem;
  background-color: transparent;
  font-size:15px;
}
.table-bordered{
  border: 1px solid #dee2e6;
}
.border, .table td, .table th {
  border-color: #e5e9ec !important;
  font-size:15px;
}
table, th, td {
  border: 1px solid black;
  font-size:15px;
}
td { font-family: freeserif; }
.table-bordered td, .table-bordered th {
  border: 1px solid #dee2e6;
}
tr{
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
  padding: 5px;
}
table td {
  word-wrap: break-word;
}
</style>";


$cid = 4;//$_REQUEST['cid'];
$qry = "";
$qry .= "SELECT a.*,b.site_addr,b.site_city,b.site_district,b.khasra_no,b.p_h_n,b.plot_area,b.ground_f_area,b.first_f_area,b.second_f_area,b.third_f_area,b.total_area FROM tbl_client_agreement a LEFT JOIN tbl_site_details b ON a.id = b.client_id WHERE a.id = $cid";
$stmt = mysqli_query($mysqli, $qry);
$res = mysqli_fetch_array($stmt);

$anu_str = $res['anubandh'];
$anu_arr = explode(",", $anu_str);
//print_r($anu_arr);

if(isset($res))
{
    $create_date = date("d-m-Y", strtotime($res["create_date"]));  
    $payment_mode = $res["payment_mode"];  
    
    if($payment_mode == "cash" && $payment_mode != "")
    {
      $cash_date = $res["cheque_cash_date"];
      $cheque_date = "";
    }
    else
    {
      $cheque_date = date("d-m-Y", strtotime($res["cheque_cash_date"]));
      $cash_date = "";
    }

    $html .= '<div class="head"><h3 style="font-family: freeserif;">अनुबन्ध पत्र</h3></div>';
    $html .= '<p>पार्टी नं 1- यु.के. कांसेप्ट डिजाईनर (प्रोप्राइटर मोहित सोलंकी) पता- आफिस न. 441, 4th फ्लोर, सर्विस लिफ्ट के पास, मेग्नेटो मॉल, लाभांडी, रायपुर (छ.ग.) मोबाईल न. 7898716164 पान. न. CGGPS3467M आधार न. 312168337474 ई-मेल - planner.mohit12@gmail.com</p>';
    $html .= '<p>पार्टी नं 2-</p>';

    $html .= '<table cellspacing="0" class="table table-bordered">';
      $html .= '<tr>
                  <td>नाम</td>
                  <td>'.$res["client_title"].' '.$res["client_name"].'</td>
                  <td>'.$res["relation"].'&nbsp;'.$res["careof_title"].$res["careof_name"].'</td>
                  <td>उम्र '.$res["client_age"].' वर्ष</td>
               </tr>';
      $html .= '<tr>
                  <td>पता</td>
                  <td>'.$res["present_addr"].' '.$res["client_name"].'</td>
                  <td>प्रांत - '.$res["district"].'<br/>पिन न. - '.$res["pincode"].'</td>
                  <td>मो. - '.$res["mobile_no"].'</td>
              </tr>'; 
        $html .= '<tr>
              <td>पेशा</td>
              <td>'.$res["occupation"].'</td>
              <td>'.$res["present_addr"].'</td>
              <td>&nbsp;</td>
          </tr>';                       
        $html .= '<tr>
              <td>पैन नं.</td>
              <td>'.$res["pan_no"].'</td>
              <td>आधार नं. - '.$res["adhar_no"].'</td>
              <td>ई मेल - '.$res["email_id"].'</td>
          </tr>';                 
    $html .= '</table>';

    $html .= '<p>आज दिनांक '.$create_date.' को पार्टी नं. 1 व 2 के मध्य भवन निर्माण करने बावत निम्नलिखित अनुबंध किया गया हैः</p>';    
    
    //$html .= '<p>पार्टी नं 2- '.$res["client_title"].' '.$res["client_name"].'&nbsp;'.$res["relation"].'&nbsp;'.$res["careof_title"].$res["careof_name"].'</p>';
    
    $html .= '<div class="head"><h3 style="font-family: freeserif;">COLUMN A</h3></div>';

    $html .= '<p>अनुबंध के पुर्व ड्राइंग कार्य कराने के लिए एडवांस राशी का भुगतान पार्टी नं. 2 द्वारा :-</p>';

    $html .= '<table cellspacing="0" class="table table-bordered">';

          $html .= '<tr>
            <td>द्वारा</td>
            <td>बैंक का नाम</td>
            <td>'.$res["bank_name"].'</td>
            <td>चैक दिनाँक - '.$cheque_date.'</td>
          </tr>';  
          
        $html .= '<tr>
            <td>राशी</td>
            <td>'.$res["amount"].'</td>
            <td>शब्दों में - '.$res["amt_inword"].'</td>
            <td>चैक नं. - '.$res["cheque_no"].'</td>
        </tr>';
        $html .= '<tr>
          <td>नगद</td>
          <td>'.$res["amount"].'</td>
          <td>शब्दों में - '.$res["amt_inword"].'</td>
          <td>नगद दिनाँक - '.$cash_date.'</td>
        </tr>';
    $html .= '</table>';

    $html .= '<div class="head"><h3 style="font-family: freeserif;">COLUMN C</h3></div>';

    $html .= '<table cellspacing="0" class="table table-bordered">';

    $qry2 = "SELECT * from tbl_anubandh where col_head = 'C'";
    $stmt2 = mysqli_query($mysqli, $qry2);
    $cnt=0;
    while($data = mysqli_fetch_array($stmt2))
    {
        $cnt++;
        if($cnt == 1)
        {
          $html .= '<tr>';
        }         
        $yn = "";
        if(in_array($data['id'], $anu_arr))
        {
          $yn = "YES";
        }
        else
        {
          $yn = "NO";
        }

    $html .= '<td style="font-family: freeserif;">'.$data["description"].'&nbsp;&nbsp;<span style="color:red;font-weight: bold;">'.$yn.'</span></td>';
        
        if($cnt == 3)
        {
          $html .= '</tr>';
          $cnt = 0;
        }

    }
$html .= '</table>';

/**-----------Start COLUMN D------------ */

$html .= '<div class="head"><h3 style="font-family: freeserif;">COLUMN D</h3></div>';
$html .= '<p class="bold_head">निर्माण कार्य भूमि का विवरण:-</p>';    
$html .= '<table cellspacing="0" class="table table-bordered">';
$html .= '<tr>
      <td>पता</td>
      <td>'.$res['site_addr'].'</td>
      <td>तहसील '.$res['site_city'].'</td>
      <td>जिला '.$res['site_district'].'</td>
      </tr>';

$html .= '<tr>
      <td>खसरा न. </td>
      <td>'.$res['khasra_no'].'</td>
      <td>प. ह. न.</td>
      <td>'.$res['p_h_n'].'</td>
    </tr>'; 

$html .= '<tr>
      <td>भुमि </td>
      <td>'.$res['plot_area'].' वर्गफुट</td>
      <td>कुल निर्माण क्षेत्र (SBA)</td>
      <td>'.$res['total_area'].' वर्गफुट</td>
    </tr>';  

$html .= '<tr>
        <td>भु-तल </td>
        <td>'.$res['ground_f_area'].' वर्गफुट</td>
        <td>नक्शा अनुसार</td>   
        <td>With Finishing</td>
    </tr>';
$html .= '<tr>
        <td>प्रथम तल </td>
        <td>'.$res['first_f_area'].' वर्गफुट</td>
        <td>नक्शा अनुसार</td>   
        <td>With Finishing</td>
    </tr>';
$html .= '<tr>
        <td>द्वितीय तल </td>
        <td>'.$res['second_f_area'].' वर्गफुट</td>
        <td>नक्शा अनुसार</td>   
        <td>With Finishing</td>
    </tr>';
$html .= '<tr>
        <td>तृतीय तल</td>
        <td>'.$res['third_f_area'].' वर्गफुट</td>
        <td>नक्शा अनुसार</td>   
        <td>With Finishing</td>
    </tr>';

 $html .= '</table>'; 

 $html .= '<table cellspacing="0" class="table table-bordered">'; 
           $html .= '<tr>
           <td>द्वितीय तल </td>
           <td>'.$res['second_f_area'].' वर्गफुट</td>
           <td>नक्शा अनुसार = With Finishing</td>  
           <td>तृतीय तल</td>
           <td>'.$res['third_f_area'].' वर्गफुट</td>
           <td>नक्शा अनुसार = With Finishing</td>
        </tr>';
 $html .= '</table>';

    $cnt=0;
    while($data = mysqli_fetch_array($stmt2))
    {
      $cnt++;

        if($cnt == 1)
        {
          $html .= '<tr>';
        }         
        $yn = "";
        if(in_array($data['id'], $anu_arr))
        {
          $yn = "YES";
        }
        else
        {
          $yn = "NO";
        }
        
    $html .= '<td style="font-family: freeserif;">'.$data["description"].'&nbsp;&nbsp;<span style="color:red;font-weight: bold;">'.$yn.'</span></td>';
      
      if($cnt == 3)
      {
        $html .= '</tr>';
        $cnt = 0;
      }
        
    }
$html .= '</table>';

/**--------------COLUMN F---------------- */
$html .= '<div class="head"><h3 style="font-family: freeserif;">COLUMN F</h3></div>';

$qry2 = "SELECT * from tbl_anubandh where col_head = 'F' OR col_head = 'G'";
$stmt2 = mysqli_query($mysqli, $qry2);
$html .= '<table cellspacing="0" class="table table-bordered">';   
    $cnt=0;
    $colg = "";
    $colg_desc = "";
    $colg_id = 0;
    while($data = mysqli_fetch_array($stmt2))
    {
      $cnt++;
        if($cnt == 1)
        {
          $html .= '<tr>';
        }         
        $yn = "";
        if(in_array($data['id'], $anu_arr))
        {
          $yn = "YES";
        }
        else
        {
          $yn = "NO";
        }

        if($data['col_head'] == 'G')
        {
            $colg = $data['col_head'];
            $colg_id = $data['id'];
            $colg_desc = $data['description'];
        }

      $html .= '<td style="font-family: freeserif;">'.$data["description"].'&nbsp;&nbsp;<span style="color:red;font-weight: bold;">'.$yn.'</span></td>';

      if($cnt == 3)
      {
        $html .= '</tr>';
        $cnt = 0;
      }

  }

$html .= '</table>';
/**-----------Start COLUMN G----------------- */

if(in_array($colg_id, $anu_arr))
  {
    $colyn = "YES";
  }
  else
  {
    $colyn = "NO";
  }

$html .= '<div class="head"><h3 style="font-family: freeserif;">COLUMN G</h3></div>';
$html .= '<p>'.$colg_desc.'&nbsp;&nbsp;<span style="color:red;font-weight: bold;">'.$colyn.'</span></p>';

/**--------------COLUMN H---------------- */
$html .= '<div class="head"><h3 style="font-family: freeserif;">COLUMN H</h3></div>';
$html .= '<p class="bold_head">प्लिंथ के बाहर निम्नानुसार अनुबंध में शामिल है / नहीं हैं</p>';

$qry2 = "SELECT * from tbl_anubandh where col_head = 'H'";
$stmt2 = mysqli_query($mysqli, $qry2);
$html .= '<table cellspacing="0" class="table table-bordered">';   
    $cnt=0;
    $colg = "";
    $colg_desc = "";
    $colg_id = 0;
    while($data = mysqli_fetch_array($stmt2))
    {
      $cnt++;
      if($cnt == 1)
      {
        $html .= '<tr>';
      }         
      $yn = "";
      if(in_array($data['id'], $anu_arr))
      {
        $yn = "YES";
      }
      else
      {
        $yn = "NO";
      }

      if($data['col_head'] == 'G')
      {
        $colg = $data['col_head'];
        $colg_id = $data['id'];
        $colg_desc = $data['description'];
      }

      $html .= '<td style="font-family: freeserif;">'.$data["description"].'&nbsp;&nbsp;<span style="color:red;font-weight: bold;">'.$yn.'</span></td>';
      if($cnt == 3)
      {
        $html .= '</tr>';
        $cnt = 0;
      }
  }
$html .= '</table>';
/**------------Column I---------- */
$html .= '<div class="head"><h3 style="font-family: freeserif;">COLUMN I</h3></div>';

$qry2 = "SELECT * from tbl_anubandh where col_head = 'I'";
$stmt2 = mysqli_query($mysqli, $qry2);
$html .= '<table cellspacing="0" class="table table-bordered">';   
    $cnt=0;
    $colg = "";
    $colg_desc = "";
    $colg_id = 0;
    while($data = mysqli_fetch_array($stmt2))
    {

      $cnt++;
      if($cnt == 1)
      {
        $html .= '<tr>';
      }        
       
      $yn = "";
      if(in_array($data['id'], $anu_arr))
      {
        $yn = "YES";
      }
      else
      {
        $yn = "NO";
      }

      $html .= '<td style="font-family: freeserif;">'.$data["description"].'&nbsp;&nbsp;<span style="color:red;font-weight: bold;">'.$yn.'</span></td>';
      if($cnt == 3)
      {
        $html .= '</tr>';
        $cnt = 0;
      }
  }
$html .= '</table>';

$html .= '<div class="head"><h3 style="font-family: freeserif;">COLUMN J</h3></div>';

$qry2 = "SELECT * from tbl_anubandh where col_head = 'J'";
$stmt2 = mysqli_query($mysqli, $qry2);
$res = mysqli_fetch_array($stmt2);
$html .= '<p>'.$res['description'].'</p>';

$html .= '<div class="head"><h3 style="font-family: freeserif;">COLUMN K</h3></div>';

$qry2 = "SELECT * from tbl_anubandh where col_head = 'K'";
$stmt2 = mysqli_query($mysqli, $qry2);

$cnt=0;
while($res2 = mysqli_fetch_array($stmt2))
{
    $cnt++;
$html .= '<p>'.$cnt.'.&nbsp;'.$res2['description'].'</p>';
    
}










$html .= '<hr>';

//echo $html;
//exit;




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


$new_file = "anubandh"._.strtotime("now").".pdf";
$mpdf->Output('anubandh/'.$new_file,'F');
$mpdf->Output($new_file, "D");

//header("Location: ../../daily_work_details.php");
//$mpdf->Output();

   // (E2) FORCE DOWNLOAD
  // $mpdf->Output("demo.pdf", "D");
 // (E3) SAVE TO FILE ON SERVER
// 

}
else
{
  echo "Data not available...";
}

