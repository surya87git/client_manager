<?php error_reporting(0);

require "vendor/autoload.php";
require("../../config.php");

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

$cid = $_REQUEST['cid'];
$qry = "";
$qry .= "SELECT a.*,b.* FROM tbl_client_agreement a LEFT JOIN tbl_site_details b ON a.id = b.client_id WHERE a.id = $cid";
$stmt = mysqli_query($mysqli, $qry);
$res = mysqli_fetch_array($stmt);

$anu_str = $res['anubandh'];
$anu_arr = explode(",", $anu_str);

$ground_f_area = $res['ground_f_area'] ?? "";  
$first_f_area = $res['first_f_area'] ?? "";
$second_f_area = $res['second_f_area'] ?? "";
$third_f_area = $res['third_f_area'] ?? "";  
$total_area = $res['total_area'] ?? "";

$ground_f_price = $res['ground_f_price'] ?? "";  
$first_f_price = $res['first_f_price'] ?? "";
$second_f_price = $res['second_f_price'] ?? "";
$third_f_price = $res['third_f_price'] ?? ""; 

$map_g_floor = $res['map_g_floor'] ?? "";  
$map_f_floor = $res['map_f_floor'] ?? "";
$map_s_floor = $res['map_s_floor'] ?? "";
$map_t_floor = $res['map_t_floor'] ?? ""; 

$bwall_price = $res['bwall_price'] ?? "";
$bwall_area = $res['bwall_area'] ?? "";
$rfeet_price = $res['rfeet_price'] ?? "";
$outer_dev_area_price = $res['outer_dev_area_price'] ?? "";
$elev_price = $res['elev_price'] ?? "";

$draw_vr_price = $res['draw_vr_price'] ?? "";  
$disc_price = $res['disc_price'] ?? "";
$other_price = $res['other_price'] ?? "";     

$advance_as_aggr_price = $res['advance_as_aggr_price'] ?? "";
$mkitchen_price = $res['mkitchen_price'] ?? ""; 
$false_ceiling_price = $res['false_ceiling_price'] ?? "";

$total_price = $res['total_price'] ?? "";
$inword_price = $res['inword_price'] ?? "";
$false_ceiling_price = $res["false_ceiling_price"] ?? "";

//print_r($res);

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
	     <td>तहसील - '.$res['site_city'].'</td>
	     <td>जिला - '.$res['site_district'].'</td>
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
	     <td>'.$map_g_floor.'</td>
	  </tr>';
    
$html .= '<tr>
	    <td>प्रथम तल </td>
	    <td>'.$res['first_f_area'].' वर्गफुट</td>
	    <td>नक्शा अनुसार</td>   
	    <td>'.$map_f_floor.'</td>
    	</tr>';
    	
$html .= '<tr>
            <td>द्वितीय तल </td>
            <td>'.$res['second_f_area'].' वर्गफुट</td>
            <td>नक्शा अनुसार</td>   
            <td>'.$map_s_floor.'</td>
          </tr>';
$html .= '<tr>
            <td>तृतीय तल</td>
            <td>'.$res['third_f_area'].' वर्गफुट</td>
            <td>नक्शा अनुसार</td>   
            <td>'.$map_t_floor.'</td>
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
/**--------------COLUMN E---------------- */
$html .= '<div class="head"><h3 style="font-family: freeserif;">COLUMN E</h3></div>';
$html .= '<p class="bold_head">कुल लागत:-</p>';    
$html .= '<table cellspacing="0" class="table table-bordered">';
$html .= '<tr>  
            <td style="font-family: freeserif;">ड्राइंग + VR</td>
            <td style="font-family: freeserif;">&#8377; '.$res["draw_vr_price"].'</td>
            <td style="font-family: freeserif;">Discount</td>
            <td style="font-family: freeserif;">&#8377; '.$res["disc_price"].'</td>
            <td style="font-family: freeserif;">अन्य खर्च</td>
            <td style="font-family: freeserif;">&#8377; '.$res["other_price"].'</td>
          </tr>';
$html .= '<tr>  
          <td style="font-family: freeserif;">भू.तल</td>
          <td style="font-family: freeserif;">&#8377; '.$res["ground_f_price"].'</td>
          <td style="font-family: freeserif;">प्रथम.तल</td>
          <td style="font-family: freeserif;">&#8377; '.$res["first_f_price"].'</td>
          <td style="font-family: freeserif;">द्वितीय तल </td>
          <td style="font-family: freeserif;">&#8377; '.$res["second_f_price"].'</td>
        </tr>';
$html .= '<tr>  
            <td style="font-family: freeserif;">तिृतीय तल</td>
            <td style="font-family: freeserif;">&#8377; '.$res["third_f_price"].'</td>
            <td style="font-family: freeserif;">बाउन्ड्रीवाल</td>
            <td style="font-family: freeserif;">&#8377; '.$res["bwall_price"].'</td>
            <td style="font-family: freeserif;">कुल लागत</td>
            <td style="font-family: freeserif;">&#8377; '.$res["total_price"].'</td>
        </tr>';

$html .= '<tr>  
            <td style="font-family: freeserif;">कुल अनुबंधित राशि:-</td>
            <td style="font-family: freeserif;">&#8377; '.$res["total_price"].'</td>
            <td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
         </tr>';

$html .= '<tr>  
            <td style="font-family: freeserif;">कुल अनुबंधित राशि:-</td>
            <td style="font-family: freeserif;">&#8377; '.$inword_price.'</td>
            <td colspan="4">&nbsp;</td>
         </tr>';

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
/**------------------Column K--------------------- */
$html .= '<div class="head"><h3 style="font-family: freeserif;">COLUMN K</h3></div>';

$qry2 = "SELECT * from tbl_anubandh where col_head = 'K'";
$stmt2 = mysqli_query($mysqli, $qry2);

$cnt=0;
while($res2 = mysqli_fetch_array($stmt2))
{
  $cnt++;
  $html .= '<p>'.$cnt.'.&nbsp;'.$res2['description'].'</p>';
    
}

/**------------------Column L--------------------- */

$html .= '<div class="head"><h3 style="font-family: freeserif;">COLUMN L</h3></div>';
$html .= '<p class="bold_head">भुगतान लिस्ट जिसके अग्रीम भुगतान / चैक कार्य पूर्ण होने की संभावित दिनांक से आठ दिन पूर्व दिये जाने हैं :-</p>';    
$html .= '<table cellspacing="0" class="table table-bordered">';
$html .= '<tr>  
            <td style="font-family: freeserif;">Total area</td>
            <td style="font-family: freeserif;">&#8377; '.$total_area.'</td>
            <td style="font-family: freeserif;">Per sqft</td>
            <td style="font-family: freeserif;">&#8377; '.$disc_price.'</td>
          </tr>';

          $html .= '<tr>  
            <td style="font-family: freeserif;">Total Boundary wall</td>
            <td style="font-family: freeserif;">&#8377; '.$bwall_area.'</td>
            <td style="font-family: freeserif;">Running feet</td>
            <td style="font-family: freeserif;">&#8377; '.$rfeet_price.'</td>
          </tr>';

          $html .= '<tr>  
            <td style="font-family: freeserif;">Boundary wall</td>
            <td style="font-family: freeserif;">&#8377; '.$bwall_price.'</td>
            <td style="font-family: freeserif;">&nbsp;</td>
            <td style="font-family: freeserif;">&nbsp;</td>
          </tr>';

          $html .= '<tr>  
            <td style="font-family: freeserif;">Elevation</td>
            <td style="font-family: freeserif;">&#8377; '.$elev_price.'</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>';

          $html .= '<tr>  
            <td style="font-family: freeserif;">Outer area development</td>
            <td style="font-family: freeserif;">&#8377; '.$outer_dev_area_price.'</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>';

          $html .= '<tr>  
            <td style="font-family: freeserif;">Modular Kitchen</td>
            <td style="font-family: freeserif;">&#8377; '.$mkitchen_price.'</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>';

          $html .= '<tr>  
            <td style="font-family: freeserif;">False Ceiling</td>
            <td style="font-family: freeserif;">&#8377; '.$false_ceiling_price.'</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>';

          $html .= '<tr>  
            <td style="font-family: freeserif;">Discount</td>
            <td style="font-family: freeserif;">&#8377; '.$disc_price.'</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>';
          
          $html .= '<tr>  
            <td style="font-family: freeserif;">Total Project cost</td>
            <td style="font-family: freeserif;">&#8377; '.$total_price.'</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>';

          $html .= '<tr>  
            <td style="font-family: freeserif;">Advance As per agreement</td>
            <td style="font-family: freeserif;">&#8377; '.$advance_as_aggr_price.'</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>';

          $html .= '<tr>  
            <td style="font-family: freeserif;">Project duration in months</td>
            <td style="font-family: freeserif;">12</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>';

        $html .= '<tr>  
          <td style="font-family: freeserif;">GF area</td>
          <td style="font-family: freeserif;">1st floor area</td>
          <td>2nd floor area</td>
          <td>3rd floor area</td>
        </tr>';

        $html .= '<tr>  
          <td style="font-family: freeserif;">&#8377; '.$ground_f_area.'</td>
          <td style="font-family: freeserif;">&#8377; '.$first_f_area.'</td>
          <td style="font-family: freeserif;">&#8377; '.$second_f_area.'</td>
          <td style="font-family: freeserif;">&#8377; '.$third_f_area.'</td>
        </tr>';

$html .= '</table>';

/**------------------Column M--------------------- */
$html .= '<div class="head"><h3 style="font-family: freeserif;">COLUMN M</h3></div>';
$html .= '<p class="bold_head" style="text-align:center;">नोट:- मटेरियल की क्वालिटी व दर विवरण सूचि का विवरण निम्नानुसार होगा |</p>';
$html .= '<h3 style="font-family: freeserif; text-decoration: underline;text-align:center;">मटेरियल की क्वालिटी व दर विवरण सूचि :-</h3>';
$html .= '<p class="bold_head" style="text-decoration: underline;text-align:center;">पार्टी नं. 2 के अनुसार निम्नानुसार क्वालिटी के निर्धारित सामानो की सूचि सभी आइटम अधिकतम रिटेल प्राइज लिस्ट जिसमें ळैज् के साथ साईट पहुॅच भाडा षामिल है जिसके अनुसार कार्य किया जाना है:-</p>';

$html .= '<table cellspacing="0" class="table table-bordered">';
$html .= '<tr>  
            <td style="font-family: freeserif;">1</td>
            <td style="font-family: freeserif;">सिमेंट</td>
            <td style="font-family: freeserif;">ISO / ISI किसी भी कम्पनी का</td>
            <td style="font-family: freeserif;">स्टेक्चर इंजिनियर अनुसार</td>
          </tr>';
$html .= '<tr>  
            <td style="font-family: freeserif;">2</td>
            <td style="font-family: freeserif;">लोहा</td>
            <td style="font-family: freeserif;">Kamdhenu</td>
            <td style="font-family: freeserif;">स्टेक्चर इंजिनियर अनुसार</td>
          </tr>';
$html .= '<tr>  
            <td style="font-family: freeserif;" colspan="4">टाटा टिस्को के लिए अतिरिक्त भुगतान पार्टी न. 2 देगी</td>
          </tr>';
$html .= '<tr>  
          <td style="font-family: freeserif;">3</td>
          <td style="font-family: freeserif;">ईंटा</td>
          <td style="font-family: freeserif;">बाहर अंदर लाल ईंटा, सेप्टिक, बाउंड्री वाल काली ईंटा</td>
          <td style="font-family: freeserif;">लोकल मार्केट मे उपलब्ध अच्छी गुणवत्ता वाली</td>
        </tr>'; 

$html .= '<tr>  
          <td style="font-family: freeserif;">4</td>
          <td style="font-family: freeserif;">कांक्रीट</td>
          <td style="font-family: freeserif;">रेडी टू मिक्स कांक्रीट (केवल स्लैब में)</td>
          <td style="font-family: freeserif;">स्टेक्चर इंजिनियर अनुसार</td>
        </tr>';
$html .= '</table>';          
/**------------------Column N--------------------- */
$html .= '<div class="head"><h3 style="font-family: freeserif;">COLUMN N</h3></div>';

$html .= '<table cellspacing="0" class="table table-bordered">';

$html .= '<tr>  
            <td class="bold_head" style="font-family: freeserif;">Item Details</td>
            <td class="bold_head" style="font-family: freeserif;">Premium *</td>
          </tr>';

$html .= '<tr>  
        <td style="font-family: freeserif;">Structure</td>
        <td style="font-family: freeserif;">Structure</td>
      </tr>';

$html .= '<tr>  
          <td style="font-family: freeserif;">Bricks</td>
          <td style="font-family: freeserif;">Fly ash /Red bricks*</td>
        </tr>';

$html .= '<tr>  
          <td style="font-family: freeserif;">Cement</td>
          <td style="font-family: freeserif;">Any Brand</td>
        </tr>';

$html .= '<tr>  
          <td style="font-family: freeserif;">Steel (Kamdhenu, Goel, GK etc.)</td>
          <td style="font-family: freeserif;">Any Brand (except TATA Tiscon)</td>
        </tr>';

$html .= '<tr>  
          <td style="font-family: freeserif;">Waterproofing</td>
          <td style="font-family: freeserif;">Toilets</td>
        </tr>';

$html .= '<tr>  
        <td style="font-family: freeserif;">Tiles & Granite</td>
        <td style="font-family: freeserif;">Tiles & Granite</td>
      </tr>';

$html .= '<tr>  
      <td style="font-family: freeserif;">Inner flooring</td>
      <td style="font-family: freeserif;">
        Vitrified Upto 80/- Rs.& wooden tile in hall & master bedroom*
      </td>
    </tr>';

$html .= '<tr>  
      <td style="font-family: freeserif;">Porch & Balcony flooring</td>
      <td style="font-family: freeserif;">12"x12" or 16"x16" or 24"x24" up-to 45/- sqft</td>
    </tr>';

$html .= '<tr>  
            <td style="font-family: freeserif;">Stair</td>
            <td style="font-family: freeserif;">Granite 110/- with SS Railing* glass railing</td>
          </tr>';

$html .= '<tr>  
            <td style="font-family: freeserif;">Kitchen platform</td>
            <td style="font-family: freeserif;">Granite up to 125/- with black stone Base*</td>
          </tr>';

$html .= '<tr>  
          <td style="font-family: freeserif;">Bathroom Tiles</td>
          <td style="font-family: freeserif;">2x4 digitalwall & 1x1 floor up to 50/- sqft</td>
        </tr>';
$html .= '<tr>  
            <td style="font-family: freeserif;">Kitchen wall tile</td>
            <td style="font-family: freeserif;">12"x18"  paper 40/- sqft</td>
          </tr>';
$html .= '<tr>  
          <td style="font-family: freeserif;">Ramp Flooring</td>
          <td style="font-family: freeserif;">Granite up to 60/-</td>
        </tr>';
$html .= '<tr>  
          <td style="font-family: freeserif;">Eboxy work</td>
          <td style="font-family: freeserif;">Applicable only in porch</td>
        </tr>';
$html .= '<tr>  
          <td style="font-family: freeserif;">Door &</td>
          <td style="font-family: freeserif;">Door & Windows</td>
        </tr>';
$html .= '<tr>  
          <td style="font-family: freeserif;">Main Door</td>
          <td style="font-family: freeserif;">Teak wood* (first) up to 20,000/- 23,000/-</td>
        </tr>';
$html .= '<tr>  
        <td style="font-family: freeserif;">Door Kit</td>
        <td style="font-family: freeserif;">complete set up to Rs.2000/-</td>
      </tr>';
$html .= '<tr>  
      <td style="font-family: freeserif;">Net Door</td>
      <td style="font-family: freeserif;">up to 7500/-</td>
    </tr>';
$html .= '<tr>  
    <td style="font-family: freeserif;">Inner Door</td>
    <td style="font-family: freeserif;">Laminated up to 4000/-</td>
  </tr>';
$html .= '<tr>  
  <td style="font-family: freeserif;">Door Kit</td>
  <td style="font-family: freeserif;">Complete set up to Rs.700/-</td>
</tr>';

$html .= '<tr>  
      <td style="font-family: freeserif;">Door frame</td>
      <td style="font-family: freeserif;">Sarai 2.5"x5" or granite plain</td>
    </tr>';

    $html .= '<tr>  
      <td style="font-family: freeserif;">Windows</td>
      <td style="font-family: freeserif;">3 track anodized aluminum1.5mm I dumal I upvc basic upto 425/- sqft</td>
    </tr>';
    $html .= '<tr>  
      <td style="font-family: freeserif;">Front Entrance Gate</td>
      <td style="font-family: freeserif;">MS gate with design and front finish with sheets*(SLIDDING) Up To 150 kg (10500/-)</td>
    </tr>';
    $html .= '<tr>  
      <td style="font-family: freeserif;">Bathroom Door</td>
      <td style="font-family: freeserif;">PVC* Premium blazeon upto 2100/-</td>
    </tr>';
    $html .= '<tr>  
      <td style="font-family: freeserif;">Electrical</td>
      <td style="font-family: freeserif;">Electrical</td>
    </tr>';
    $html .= '<tr>  
    <td style="font-family: freeserif;">Automation</td>
    <td style="font-family: freeserif;">hall and master bedroom</td>
  </tr>';
  $html .= '<tr>  
    <td style="font-family: freeserif;">Earthing work (not included for lift)</td>
    <td style="font-family: freeserif;">Copper Plate Earthing</td>
  </tr>';
  
  $html .= '<tr>  
    <td style="font-family: freeserif;">Electrical Switch Boards</td>
    <td style="font-family: freeserif;">
     HALL - Main switch board, tv unit,ROOM - Main switch board , tv unit,TOILET -Main switch board With gyser point,DINNING - Main switch board only/-,Stair case - only holder provision with switch board,KITCHEN -Main switch board With Refrigirator point and Chimney point
    </td>
  </tr>';
  $html .= '<tr>  
    <td style="font-family: freeserif;">Sanitary</td>
    <td style="font-family: freeserif;">Sanitary</td>
  </tr>';
  $html .= '<tr>  
    <td style="font-family: freeserif;">Bath fittings</td>
    <td style="font-family: freeserif;">Irish, Jaguar, Kohler Starter pack* up to 14,000/-</td>
  </tr>';
  $html .= '<tr>  
  <td style="font-family: freeserif;">Sink</td>
  <td style="font-family: freeserif;">18x24 Double bowl 850/-</td>
</tr>';

$html .= '<tr>  
  <td style="font-family: freeserif;">Plumbing sanitary fitting itmes</td>
  <td style="font-family: freeserif;">Regular Iris item</td>
</tr>';

$html .= '<tr>  
  <td style="font-family: freeserif;">Paints</td>
  <td style="font-family: freeserif;">Paints</td>
</tr>';

$html .= '<tr>  
  <td style="font-family: freeserif;">Interior Paint</td>
  <td style="font-family: freeserif;">As ian or Dulux Royal* emulsion</td>
</tr>';

$html .= '<tr>  
<td style="font-family: freeserif;">Exterior paint </td>
<td style="font-family: freeserif;">Ultima dust and weather proof exterior emulsion*1+ 2 coat</td>
</tr>';

$html .= '<tr>  
  <td style="font-family: freeserif;">Pest control</td>
  <td style="font-family: freeserif;">Not lnculded</td>
</tr>';

$html .= '<tr>  

<td style="font-family: freeserif;">Pole to meter Connection</td>
<td style="font-family: freeserif;">Not lnculded</td>
</tr>';

$html .= '</table>';
/**------------------Anaxure--------------------- */

$html .= '<div class="head"><h2 style="font-family: freeserif; text-decoration: underline;">Schedule Annexure "A"</h2></div>';
$html .= '<p class="bold_head" style="text-align:center;">अनुबंध के साथ दी गई ADVANCE राशी कार्य प्रारंभ करने हेतु मोबिलिटी ADVANCE है ।</p>';    
$html .= '<table cellspacing="0" class="table table-bordered" width="50%">';
$html .= '<tr>  
            <td class="bold_head" style="font-family: freeserif;">Work Stage</td>
            <td class="bold_head" style="font-family: freeserif;">Work Detail</td>
                <td class="bold_head" style="font-family: freeserif;">अनुबंध अनुसार कार्य का अग्रिम भुगतान समय पर देने पर कार्य पूर्ण करने की दिनाँक </td>
          </tr>';
$html .= '</table>';

$html .= '<br/><hr>';

echo $html;
exit;

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

$new_file = "anubandh"._.strtotime("now").".pdf";
$sql = "UPDATE tbl_client_agreement SET anubandh_file='$new_file'"; 
$sql .= " where id=$cid";
$result = mysqli_query($mysqli, $sql);

$mpdf->WriteHTML($html);
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

