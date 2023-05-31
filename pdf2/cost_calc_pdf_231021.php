<?php //error_reporting(0);
require("../../config.php");
require "vendor/autoload.php";

$html="";

$html.="<style>
.head{
font-family: freeserif;
text-align: center;
color: #224181 !important
}

.table{
 
  font-family: freeserif;
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
  width: 20px;
}
</style>";

print_r($_REQUEST);

$cid = $_REQUEST['cid'];
$qry = "SELECT * FROM tbl_cost_calculator where id = '$cid'";  
$exec = mysqli_query($mysqli, $qry);
$res = mysqli_fetch_array($exec);

$qry1 = "SELECT * FROM tbl_rate_list LIMIT 0, ".$res['floor_num']." ";  
$exec1 = mysqli_query($mysqli, $qry1);

$floor_num = $res['floor_num'];
$total_cost = $res['total_cost'];

$floor_cost = $res['floor_t_price'];
$f_cost_arr = explode(",", $floor_cost);
$rate = $res['floor_sq_price'];
$rate_arr = explode(",", $rate);
$work_area = $res['work_area'];
$wa_arr = explode(",", $work_area);

$total_work_area = $res['total_work_area'];
$psqft_cost = $total_cost/$total_work_area;

if($res)
{
  $html.= '<div class="head"><h2>UKC Cost Calculation</h2></div>';

  
  $html .='<table cellspacing="0" class="table table-bordered" style="background-color: #FEE; font-size: 16;">';
  $html .='<tr><td>Date:- '.$res["create_date"].'</td><td>&nbsp;</td></tr>';
  $html .='<tr><td>Client Name:- '.$res["client_name"].'</td><td>Address:- '.$res["client_addr"].'</td></tr>';
  $html .='<tr><td>Plot Size:- Length:'.$res["length"]."&nbsp; Width: ".$res["width"].'</td><td>Area:- '.$res['area'].' sqft</td></tr>';
  $html .='<tr><td colspan="2"><span style="font-size: 18px; font-weight:bold;">Number of Floor:- '.$res['floor_num'].'</span></td></tr>';
    if($exec1)
    {  
        $html .='<tr><td colspan="2">';
        $html .='<table cellspacing="0" class="table table-bordered" style="background-color: #FEE; font-size: 16;">';
        $html .= '<tr align="left"><th>Floor</th><th>Area</th><th>Rate</th><th>Total</th></tr>';
        $cnt = 0;
        while($res1 = mysqli_fetch_array($exec1))
        {
            $html .='<tr><td>'.$res1['floor'].'</td><td>'.number_format($wa_arr[$cnt]).'</td><td>₹ '.number_format($rate_arr[$cnt]).'</td><td>₹ '.number_format($f_cost_arr[$cnt]).'</td></tr>';
            $cnt++;  
        }
        $html .= '<tr align="left"><th>Total</th><th>'.number_format($res['total_work_area']).' sqft</th><th>₹ '.number_format($res['floor_tsq_price']).'</th><th>₹ '.number_format($res['sub_total']).'</th></tr>';
        
        $html .= '</table>';
        $html .= '</td></tr>';
        
    }

    $html .='<tr><td colspan="2"><span style="font-size: 16px; font-weight:bold;">Boundary Wall:- ₹ '.number_format($res['b_wall_price']).'</span></td></tr>';
    $html .='<tr><td colspan="2"><span style="font-size: 16px; font-weight:bold;">Elevation:- ₹ '.number_format($res['elev_price']).' ('.$res['elev_type'].')</span></td></tr>';
    $html .='<tr><td colspan="2"><span style="font-size: 16px; font-weight:bold;">Open Area Cons.:- ₹ '.number_format($res['open_area_price']).' ('.$res['oarea_type'].')</span></td></tr>';
    
    $html .='<tr><td colspan="2"><span style="font-size: 16px; font-weight:bold;">Total Project Cost:- ₹ '.number_format($res['total_cost']).'</span></td></tr>';

    $html .='<tr><td colspan="2"><span style="font-size: 16px; font-weight:bold;">Per sqft Cost:- ₹'.number_format(round($psqft_cost)).'</span></td></tr>';


  $html .= '</table>';


  $html.='<table cellspacing="0" class="table table-bordered" style="font-size: 16;">';


if($floor_num == 1)
{

/**-----------Service Charge------------- */
  $paid1 = $total_cost/100*10;
    
/**---------1 Floor--First Payment------------- */
      $paid2 = $total_cost/100*25;
      $check_1= $paid2/100*60;
      $check_2= $paid2/100*40;
    
  /**-----------Second Payment------------- */
      $paid3 = $total_cost/100*20;
      $check_3= $paid3/100*60;
      $check_4= $paid3/100*40;
      
  /**-----------3rd Payment------------- */ 
      $paid4 = $total_cost/100*15;
      $check_5= $paid4/100*60;
      $check_6= $paid4/100*40;
  /**-----------4th Payment------------- */
      $paid5 = $total_cost/100*20;
      $check_7= $paid5/100*60;
      $check_8= $paid5/100*40;
  /**-----------5th Payment------------- */
      $paid6 = $total_cost/100*10;
      $check_9= $paid6/100*60;
      $check_10= $paid6/100*40;
  
      $sum_gf=$paid1+$paid2+$paid3+$paid4+$paid5+$paid6;
  /**-----------END------------- */  

  $html .= '<tr>
            <td>₹ '.number_format($total_cost).'</td>
            <td>कुल अनुबंधित राशी</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>'; 

        $html.= '<tr><td clospan="6"><h4>Ground Floor</h4></td></tr>';

        $html.= '<tr>
            <td>क्रं.</td>
            <td>कार्य कहां तक किया जाना है</td>
            <td>कौन कौनसे काम</td>
            <td>प्रतिशत मे</td>
            <td>विवरण</td>
            <td>भुगतान कितना</td>
            <td>कुल भुगतान</td>
        </tr>

        <tr>
            <td>1</td>
            <td></td>
            <td>अनुबंध राशी</td>
            <td>10%</td>
            <td></td>  
            <td>₹ '.number_format(round($paid1)).'</td>
            <td>₹ '.number_format(round($paid1)).'</td>
        </tr>
        <tr>
            <td>2</td>
            <td>प्लिंथ</td>
            <td>खुदाई, फुटिंग, प्लिंथ कालम बीम, प्लिंथ आउटर जुडाई,प्लिंथ भराई </td>
            <td>25%</td>
            <td>प्रथम चैक</td>
            <td>₹ '.number_format(round($check_1)).'</td>
            <td style="border-bottom:0px;">₹ '.number_format(round($paid2)).'</td>  
        </tr>

        <tr rowspan="2">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>व्दितीय चैक</td>
            <td>₹ '.number_format(round($check_2)).'</td>                     
        </tr>

        <tr>
            <td>3</td>
            <td>भूतल स्लेब </td>
            <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
            <td>20%</td>
            <td>प्रथम चैक</td>
            <td>₹ '.number_format(round($check_3)).'</td>
            <td style="border-bottom:0px;">₹ '.number_format(round($paid3)).'</td>  
        </tr>

        <tr rowspan="2">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>व्दितीय चैक</td>
            <td>₹ '.number_format(round($check_4)).'</td>                     
        </tr>


        <tr>
            <td>4</td>
            <td>भूतल स्लेब ढलाई</td>
            <td>स्लेब ढलाई, भूतल ब्रीक वर्क</td>
            <td>15%</td>
            <td>प्रथम चैक</td>
            <td>₹ '.number_format(round($check_5)).'</td>
            <td style="border-bottom:0px;">₹ '.number_format($paid4).'</td>  
        </tr>

        <tr rowspan="2">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>व्दितीय चैक</td>
            <td>₹ '.number_format(round($check_6)).'</td>                     
        </tr>


        <tr>
            <td>5</td>
            <td>फिनिशिंग वर्क</td>
            <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
            <td>20%</td>
            <td>प्रथम चैक</td>
            <td>₹ '.number_format(round($check_7)).'</td>
            <td style="border-bottom:0px;">₹ '.number_format($paid5).'</td>  
        </tr>

        <tr rowspan="2">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>व्दितीय चैक</td>
            <td>₹ '.number_format(round($check_8)).'</td>                     
        </tr>

        <tr>
            <td>6</td>
            <td>बकायाफिनिशिंग वर्क</td>
            <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
            <td>10%</td>
            <td>प्रथम चैक</td>
            <td>₹ '.number_format(round($check_9)).'</td>
            <td style="border-bottom:0px;">₹ '.number_format($paid6).'</td>  
        </tr>

        <tr rowspan="2">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>व्दितीय चैक</td>
            <td>₹ '.number_format(round($check_10)).'</td>                     
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td align="right">Total</td>
            <td>100%</td>
            <td></td>
            <td>₹ '.number_format(round($sum_gf)).'</td>
            <td>₹ '.number_format(round($sum_gf)).'</td>                     
        </tr>';
   

}
elseif($floor_num == 2)
{

    $gf = $total_cost/100*55;
    $first_f = $total_cost-$gf;

    //$gf = number_format(round($gf));
    //$first_f = number_format($first_f);

/**-----------Service Charge------------- */
    $paid1 = $total_cost/100*10;
    

/**---------Ground Floor--First Payment------------- */
    $paid2 = $gf/100*25;
    $check_1= $paid2/100*60;
    $check_2= $paid2/100*40;
  
/**-----------Second Payment------------- */
    $paid3 = $gf/100*20;
    $check_3= $paid3/100*60;
    $check_4= $paid3/100*40;
    
/**-----------3rd Payment------------- */ 
    $paid4 = $gf/100*15;
    $check_5= $paid4/100*60;
    $check_6= $paid4/100*40;
/**-----------4th Payment------------- */
    $paid5 = $gf/100*20;
    $check_7= $paid5/100*60;
    $check_8= $paid5/100*40;
/**-----------5th Payment------------- */
    $paid6 = $gf/100*10;
    $check_9= $paid6/100*60;
    $check_10= $paid6/100*40;

    $sum_gf=$paid1+$paid2+$paid3+$paid4+$paid5+$paid6;
/*-------- 1st Floor --------------------*/

/**-----------First Payment------------- */
$paid7 = $first_f/100*45;
$check_11= $paid7/100*60;
$check_12= $paid7/100*40;

/**-----------Second Payment------------- */
$paid8 = $first_f/100*25;
$check_13= $paid8/100*60;
$check_14= $paid8/100*40;

/**-----------3rd Payment------------- */ 
$paid9 = $first_f/100*20;
$check_15= $paid9/100*60;
$check_16= $paid9/100*40;
/**-----------4th Payment------------- */
$paid10 = $first_f/100*10;

$check_17= $paid10/100*60;
$check_18= $paid10/100*40;
$sum_1stfloor= $paid7+$paid8+$paid9+$paid10;
    
  

      $html .= '<tr>
                  <td>₹ '.number_format($total_cost).'</td>
                  <td>कुल अनुबंधित राशी</td>
                  <td></td><td></td><td></td><td></td><td></td>
                </tr> 

                <tr>
                  <td>₹ '.number_format(round($gf)).'</td>
                  <td>भूतल</td>
                  <td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td>₹ '.number_format(round($first_f)).'</td>
                    <td>प्रथम तल</td>
                    <td></td>
                    <td></td>
                    <td></td><td></td><td></td>
                </tr>';
    
    $html.= '<tr><td clospan="6"><h4>Ground Floor</h4></td></tr>';

      $html.= '<tr>
                    <td>क्रं.</td>
                    <td>कार्य कहां तक किया जाना है</td>
                    <td>कौन कौनसे काम</td>
                    <td>प्रतिशत मे</td>
                    <td>विवरण</td>
                    <td>भुगतान कितना</td>
                    <td>कुल भुगतान</td>
                </tr>

                <tr>
                    <td>1</td>
                    <td></td>
                    <td>अनुबंध राशी</td>
                    <td>10%</td>
                    <td></td>  
                    <td>₹ '.number_format(round($paid1)).'</td>
                    <td>₹ '.number_format(round($paid1)).'</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>प्लिंथ</td>
                    <td>खुदाई, फुटिंग, प्लिंथ कालम बीम, प्लिंथ आउटर जुडाई,प्लिंथ भराई </td>
                    <td>25%</td>
                    <td>प्रथम चैक</td>
                    <td>₹ '.number_format(round($check_1)).'</td>
                    <td style="border-bottom:0px;">₹ '.number_format(round($paid2)).'</td>  
                </tr>

                <tr rowspan="2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>व्दितीय चैक</td>
                    <td>₹ '.number_format(round($check_2)).'</td>                     
                </tr>

                <tr>
                    <td>3</td>
                    <td>भूतल स्लेब </td>
                    <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
                    <td>20%</td>
                    <td>प्रथम चैक</td>
                    <td>₹ '.number_format(round($check_3)).'</td>
                    <td style="border-bottom:0px;">₹ '.number_format(round($paid3)).'</td>  
                </tr>

                <tr rowspan="2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>व्दितीय चैक</td>
                    <td>₹ '.number_format(round($check_4)).'</td>                     
                </tr>


                <tr>
                    <td>4</td>
                    <td>भूतल स्लेब ढलाई</td>
                    <td>स्लेब ढलाई, भूतल ब्रीक वर्क</td>
                    <td>15%</td>
                    <td>प्रथम चैक</td>
                    <td>₹ '.number_format(round($check_5)).'</td>
                    <td style="border-bottom:0px;">₹ '.number_format($paid4).'</td>  
                </tr>

                <tr rowspan="2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>व्दितीय चैक</td>
                    <td>₹ '.number_format(round($check_6)).'</td>                     
                </tr>


                <tr>
                    <td>5</td>
                    <td>फिनिशिंग वर्क</td>
                    <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
                    <td>20%</td>
                    <td>प्रथम चैक</td>
                    <td>₹ '.number_format(round($check_7)).'</td>
                    <td style="border-bottom:0px;">₹ '.number_format($paid5).'</td>  
                </tr>

                <tr rowspan="2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>व्दितीय चैक</td>
                    <td>₹ '.number_format(round($check_8)).'</td>                     
                </tr>

                <tr>
                    <td>6</td>
                    <td>बकायाफिनिशिंग वर्क</td>
                    <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
                    <td>10%</td>
                    <td>प्रथम चैक</td>
                    <td>₹ '.number_format(round($check_9)).'</td>
                    <td style="border-bottom:0px;">₹ '.number_format($paid6).'</td>  
                </tr>

                <tr rowspan="2">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>व्दितीय चैक</td>
                    <td>₹ '.number_format(round($check_10)).'</td>                     
                </tr>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td align="right">Total</td>
                    <td>100%</td>
                    <td></td>
                    <td>₹ '.number_format(round($sum_gf)).'</td>
                    <td>₹ '.number_format(round($sum_gf)).'</td>                     
                </tr>';

      $html.= '<tr><td clospan="6"><h4>First Floor</h4></td></tr>';

      $html.= '<tr>
                <td>क्रं.</td>
                <td>कार्य कहां तक किया जाना है</td>
                <td>कौन कौनसे काम</td>
                <td>प्रतिशत मे</td>
                <td>विवरण</td>
                <td>भुगतान कितना</td>
                <td>कुल भुगतान</td>
            </tr>
            
            <tr>
                <td>1</td>
                <td>प्रथम स्लेब</td>
                <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
                <td>45%</td>
                <td>प्रथम चैक</td>
                <td>₹ '.number_format(round($check_11)).'</td>
                <td style="border-bottom:0px;">₹ '.number_format(round($paid7)).'</td>  
            </tr>
            <tr rowspan="2">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>व्दितीय चैक</td>
                <td>₹ '.number_format(round($check_12)).'</td>                     
            </tr>

            <tr>
                <td>2</td>
                <td>प्रथम स्लेब ढलाई</td>
                <td>स्लेब ढलाई, ब्रीक वर्क</td>
                <td>25%</td>
                <td>प्रथम चैक</td>
                <td>₹ '.number_format(round($check_13)).'</td>
                <td style="border-bottom:0px;">₹ '.number_format(round($paid8)).'</td>  
            </tr>

            <tr rowspan="2">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>व्दितीय चैक</td>
                <td>₹ '.number_format(round($check_14)).'</td>                     
            </tr>


            <tr>
                <td>3</td>
                <td>फिनिशिंग वर्क</td>
                <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
                <td>20%</td>
                <td>प्रथम चैक</td>
                <td>₹ '.number_format(round($check_15)).'</td>
                <td style="border-bottom:0px;">₹ '.number_format($paid9).'</td>  
            </tr>

            <tr rowspan="2">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>व्दितीय चैक</td>
                <td>₹ '.number_format(round($check_16)).'</td>                     
            </tr>


            <tr>
                <td>4</td>
                <td>बकायाफिनिशिंग वर्क</td>
                <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
                <td>10%</td>
                <td>प्रथम चैक</td>
                <td>₹ '.number_format(round($check_17)).'</td>
                <td style="border-bottom:0px;">₹ '.number_format($paid10).'</td>  
            </tr>

            <tr rowspan="2">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>व्दितीय चैक</td>
                <td>₹ '.number_format(round($check_18)).'</td>                     
            </tr>
            
            <tr>
              <td></td>
              <td></td>
              <td align="right">Total</td>
              <td>100%</td>
              <td></td>
              <td>₹ '.number_format(round($sum_1stfloor)).'</td>
              <td>₹ '.number_format(round($sum_1stfloor)).'</td>                     
            </tr>';
    
  
    
}
elseif($floor_num == 3)
{

 $gf = $total_cost/100*40;
 $first_f = $total_cost/100*30;
 $second_f = $total_cost-($gf+$first_f);

  //$gf = number_format(round($gf));
  //$first_f = number_format($first_f);

/**-----------Service Charge------------- */

  $paid1 = $total_cost/100*10;
  
/**---------Ground Floor--First Payment------------- */
  $paid2 = $gf/100*25;
  $check_1= $paid2/100*60;
  $check_2= $paid2/100*40;

/**-----------Second Payment------------- */
  $paid3 = $gf/100*20;
  $check_3= $paid3/100*60;
  $check_4= $paid3/100*40;
  
/**-----------3rd Payment------------- */ 
  $paid4 = $gf/100*15;
  $check_5= $paid4/100*60;
  $check_6= $paid4/100*40;
/**-----------4th Payment------------- */
  $paid5 = $gf/100*20;
  $check_7= $paid5/100*60;
  $check_8= $paid5/100*40;
/**-----------5th Payment------------- */
  $paid6 = $gf/100*10;
  $check_9= $paid6/100*60;
  $check_10= $paid6/100*40;

  $sum_gf=$paid1+$paid2+$paid3+$paid4+$paid5+$paid6;
/*-------- 1st Floor --------------------*/

/**-----------First Payment------------- */
$paid7 = $first_f/100*45;
$check_11= $paid7/100*60;
$check_12= $paid7/100*40;

/**-----------Second Payment------------- */
$paid8 = $first_f/100*25;
$check_13= $paid8/100*60;
$check_14= $paid8/100*40;

/**-----------3rd Payment------------- */ 
$paid9 = $first_f/100*20;
$check_15= $paid9/100*60;
$check_16= $paid9/100*40;
/**-----------4th Payment------------- */
$paid10 = $first_f/100*10;

$check_17= $paid10/100*60;
$check_18= $paid10/100*40;
$sum_1stfloor= $paid7+$paid8+$paid9+$paid10;
  
/*-------- 2nd Floor --------------------*/

/**-----------First Payment------------- */
$paid11 = $second_f/100*45;
$check_19= $paid11/100*60;
$check_20= $paid11/100*40;

/**-----------Second Payment------------- */
$paid12 = $second_f/100*25;
$check_21= $paid12/100*60;
$check_22= $paid12/100*40;

/**-----------3rd Payment------------- */ 
$paid13 = $second_f/100*20;
$check_23= $paid13/100*60;
$check_24= $paid13/100*40;
/**-----------4th Payment------------- */
$paid14 = $second_f/100*10;

$check_25 = $paid14/100*60;
$check_26 = $paid14/100*40;
$sum_2ndfloor= $paid11+$paid12+$paid13+$paid14;

    $html .= '<tr>
                <td>₹ '.number_format($total_cost).'</td>
                <td>कुल अनुबंधित राशी</td>
                <td></td><td></td><td></td><td></td><td></td>
              </tr> 

              <tr>
                <td>₹ '.number_format(round($gf)).'</td>
                <td>भूतल</td>
                <td></td><td></td><td></td><td></td><td></td>
              </tr>
              <tr>
                  <td>₹ '.number_format(round($first_f)).'</td>
                  <td>प्रथम तल</td>
                  <td></td>
                  <td></td>
                  <td></td><td></td><td></td>
              </tr>
              
              <tr>
                  <td>₹ '.number_format(round($second_f)).'</td>
                  <td>द्वितीय तल</td>
                  <td></td>
                  <td></td>
                  <td></td><td></td><td></td>
              </tr>

              ';
 $html.= '<tr><td clospan="6"><h4>Ground Floor</h4></td></tr>';

    $html.= '<tr>
                  <td>क्रं.</td>
                  <td>कार्य कहां तक किया जाना है</td>
                  <td>कौन कौनसे काम</td>
                  <td>प्रतिशत मे</td>
                  <td>विवरण</td>
                  <td>भुगतान कितना</td>
                  <td>कुल भुगतान</td>
              </tr>

              <tr>
                  <td>1</td>
                  <td></td>
                  <td>अनुबंध राशी</td>
                  <td>10%</td>
                  <td></td>  
                  <td>₹ '.number_format(round($paid1)).'</td>
                  <td>₹ '.number_format(round($paid1)).'</td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>प्लिंथ</td>
                  <td>खुदाई, फुटिंग, प्लिंथ कालम बीम, प्लिंथ आउटर जुडाई,प्लिंथ भराई </td>
                  <td>25%</td>
                  <td>प्रथम चैक</td>
                  <td>₹ '.number_format(round($check_1)).'</td>
                  <td style="border-bottom:0px;">₹ '.number_format(round($paid2)).'</td>  
              </tr>

              <tr rowspan="2">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>व्दितीय चैक</td>
                  <td>₹ '.number_format(round($check_2)).'</td>                     
              </tr>

              <tr>
                  <td>3</td>
                  <td>भूतल स्लेब </td>
                  <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
                  <td>20%</td>
                  <td>प्रथम चैक</td>
                  <td>₹ '.number_format(round($check_3)).'</td>
                  <td style="border-bottom:0px;">₹ '.number_format(round($paid3)).'</td>  
              </tr>

              <tr rowspan="2">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>व्दितीय चैक</td>
                  <td>₹ '.number_format(round($check_4)).'</td>                     
              </tr>


              <tr>
                  <td>4</td>
                  <td>भूतल स्लेब ढलाई</td>
                  <td>स्लेब ढलाई, भूतल ब्रीक वर्क</td>
                  <td>15%</td>
                  <td>प्रथम चैक</td>
                  <td>₹ '.number_format(round($check_5)).'</td>
                  <td style="border-bottom:0px;">₹ '.number_format($paid4).'</td>  
              </tr>

              <tr rowspan="2">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>व्दितीय चैक</td>
                  <td>₹ '.number_format(round($check_6)).'</td>                     
              </tr>

              <tr>
                  <td>5</td>
                  <td>फिनिशिंग वर्क</td>
                  <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
                  <td>20%</td>
                  <td>प्रथम चैक</td>
                  <td>₹ '.number_format(round($check_7)).'</td>
                  <td style="border-bottom:0px;">₹ '.number_format($paid5).'</td>  
              </tr>

              <tr rowspan="2">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>व्दितीय चैक</td>
                  <td>₹ '.number_format(round($check_8)).'</td>                     
              </tr>

              <tr>
                  <td>6</td>
                  <td>बकायाफिनिशिंग वर्क</td>
                  <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
                  <td>10%</td>
                  <td>प्रथम चैक</td>
                  <td>₹ '.number_format(round($check_9)).'</td>
                  <td style="border-bottom:0px;">₹ '.number_format($paid6).'</td>  
              </tr>

              <tr rowspan="2">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>व्दितीय चैक</td>
                  <td>₹ '.number_format(round($check_10)).'</td>                     
              </tr>
              
              <tr>
                  <td></td>
                  <td></td>
                  <td align="right">Total</td>
                  <td>100%</td>
                  <td></td>
                  <td>₹ '.number_format(round($sum_gf)).'</td>
                  <td>₹ '.number_format(round($sum_gf)).'</td>                     
              </tr>';
              $html .= '<tr><td colspan="7">&nbsp;</td></tr>';
/*-------------------------1st floor------------------------*/
    
$html.= '<tr><td clospan="6"><h4>First Floor</h4></td></tr>';
    $html.= '<tr>
              <td>क्रं.</td>
              <td>कार्य कहां तक किया जाना है</td>
              <td>कौन कौनसे काम</td>
              <td>प्रतिशत मे</td>
              <td>विवरण</td>
              <td>भुगतान कितना</td>
              <td>कुल भुगतान</td>
          </tr>
          
          <tr>
              <td>1</td>
              <td>प्रथम स्लेब</td>
              <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
              <td>45%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_11)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format(round($paid7)).'</td>  
          </tr>
          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_12)).'</td>                     
          </tr>

          <tr>
              <td>2</td>
              <td>प्रथम स्लेब ढलाई</td>
              <td>स्लेब ढलाई, ब्रीक वर्क</td>
              <td>25%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_13)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format(round($paid8)).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_14)).'</td>                     
          </tr>


          <tr>
              <td>3</td>
              <td>फिनिशिंग वर्क</td>
              <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
              <td>20%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_15)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format($paid9).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_16)).'</td>                     
          </tr>


          <tr>
              <td>4</td>
              <td>बकायाफिनिशिंग वर्क</td>
              <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
              <td>10%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_17)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format($paid10).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_18)).'</td>                     
          </tr>
          
          <tr>
            <td></td>
            <td></td>
            <td align="right">Total</td>
            <td>100%</td>
            <td></td>
            <td>₹ '.number_format(round($sum_1stfloor)).'</td>
            <td>₹ '.number_format(round($sum_1stfloor)).'</td>                     
          </tr>';
          $html .= '<tr><td colspan="7">&nbsp;</td></tr>';
/**------------3rd floor------------ */
$html.= '<tr><td clospan="6"><h4>Second Floor</h4></td></tr>';
$html.= '<tr>
              <td>क्रं.</td>
              <td>कार्य कहां तक किया जाना है</td>
              <td>कौन कौनसे काम</td>
              <td>प्रतिशत मे</td>
              <td>विवरण</td>
              <td>भुगतान कितना</td>
              <td>कुल भुगतान</td>
          </tr>
          
          <tr>
              <td>1</td>
              <td>2nd स्लेब</td>
              <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
              <td>45%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_19)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format(round($paid11)).'</td>  
          </tr>
          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_20)).'</td>                     
          </tr>

          <tr>
              <td>2</td>
              <td>2nd स्लेब ढलाई</td>
              <td>स्लेब ढलाई, ब्रीक वर्क</td>
              <td>25%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_21)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format(round($paid12)).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_22)).'</td>                     
          </tr>


          <tr>
              <td>3</td>
              <td>फिनिशिंग वर्क</td>
              <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
              <td>20%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_23)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format($paid13).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_24)).'</td>                     
          </tr>


          <tr>
              <td>4</td>
              <td>बकायाफिनिशिंग वर्क</td>
              <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
              <td>10%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_25)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format($paid14).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_26)).'</td>                     
          </tr>
          
          <tr>
            <td></td>
            <td></td>
            <td align="right">Total</td>
            <td>100%</td>
            <td></td>
            <td>₹ '.number_format(round($sum_2ndfloor)).'</td>
            <td>₹ '.number_format(round($sum_2ndfloor)).'</td>                     
          </tr>';


  

}
elseif($floor_num == 4)
{
    $gf = $total_cost/100*35;
    $first_f = $total_cost/100*27;
    $second_f = $total_cost/100*30;;
    $third_f = $total_cost-($gf+$first_f+$second_f);
     //$gf = number_format(round($gf));
     //$first_f = number_format($first_f);
   
   /**-----------Service Charge------------- */   
     $paid1 = $total_cost/100*10;     
   /**---------Ground Floor--First Payment------------- */
     $paid2 = $gf/100*25;
     $check_1= $paid2/100*60;
     $check_2= $paid2/100*40;
   
   /**-----------Second Payment------------- */
     $paid3 = $gf/100*20;
     $check_3= $paid3/100*60;
     $check_4= $paid3/100*40;
     
   /**-----------3rd Payment------------- */ 
     $paid4 = $gf/100*15;
     $check_5= $paid4/100*60;
     $check_6= $paid4/100*40;
   /**-----------4th Payment------------- */
     $paid5 = $gf/100*20;
     $check_7= $paid5/100*60;
     $check_8= $paid5/100*40;
   /**-----------5th Payment------------- */
     $paid6 = $gf/100*10;
     $check_9= $paid6/100*60;
     $check_10= $paid6/100*40;
   
     $sum_gf=$paid1+$paid2+$paid3+$paid4+$paid5+$paid6;
   /*-------- 1st Floor --------------------*/
   
   /**-----------First Payment------------- */
   $paid7 = $first_f/100*45;
   $check_11= $paid7/100*60;
   $check_12= $paid7/100*40;
   
   /**-----------Second Payment------------- */
   $paid8 = $first_f/100*25;
   $check_13= $paid8/100*60;
   $check_14= $paid8/100*40;
   
   /**-----------3rd Payment------------- */ 
   $paid9 = $first_f/100*20;
   $check_15= $paid9/100*60;
   $check_16= $paid9/100*40;
   /**-----------4th Payment------------- */
   $paid10 = $first_f/100*10;
   
   $check_17= $paid10/100*60;
   $check_18= $paid10/100*40;
   $sum_1stfloor= $paid7+$paid8+$paid9+$paid10;
     
   /*-------- 2nd Floor --------------------*/
   
   /**-----------First Payment------------- */
   $paid11 = $second_f/100*45;
   $check_19= $paid11/100*60;
   $check_20= $paid11/100*40;
   
   /**-----------Second Payment------------- */
   $paid12 = $second_f/100*25;
   $check_21= $paid12/100*60;
   $check_22= $paid12/100*40;
   
   /**-----------3rd Payment------------- */ 
   $paid13 = $second_f/100*20;
   $check_23= $paid13/100*60;
   $check_24= $paid13/100*40;
   /**-----------4th Payment------------- */
   $paid14 = $second_f/100*10;
   
   $check_25 = $paid14/100*60;
   $check_26 = $paid14/100*40;
   $sum_2ndfloor= $paid11+$paid12+$paid13+$paid14;
/**==============Third Floor================== */
/**-----------First Payment------------- */
$paid15 = $third_f/100*45;
$check_27= $paid15/100*60;
$check_28= $paid15/100*40;

/**-----------Second Payment------------- */
$paid16 = $third_f/100*25;
$check_29= $paid16/100*60;
$check_30= $paid16/100*40;

/**-----------3rd Payment------------- */ 
$paid17 = $third_f/100*20;
$check_31= $paid17/100*60;
$check_32= $paid17/100*40;
/**-----------4th Payment------------- */
$paid18 = $third_f/100*10;

$check_33 = $paid18/100*60;
$check_34 = $paid18/100*40;
$sum_3rdfloor= $paid15+$paid16+$paid17+$paid18;

   
       $html .= '<tr>
                   <td>₹ '.number_format($total_cost).'</td>
                   <td>कुल अनुबंधित राशी</td>
                   <td></td><td></td><td></td><td></td><td></td>
                 </tr> 
   
                 <tr>
                   <td>₹ '.number_format(round($gf)).'</td>
                   <td>भूतल</td>
                   <td></td><td></td><td></td><td></td><td></td>
                 </tr>
                 <tr>
                     <td>₹ '.number_format(round($first_f)).'</td>
                     <td>प्रथम तल</td>
                     <td></td>
                     <td></td>
                     <td></td><td></td><td></td>
                 </tr>
                 
                 <tr>
                     <td>₹ '.number_format(round($second_f)).'</td>
                     <td>द्वितीय तल</td>
                     <td></td>
                     <td></td>
                     <td></td><td></td><td></td>
                 </tr>

                 <tr>
                     <td>₹ '.number_format(round($third_f)).'</td>
                     <td>तीसरी तल</td>
                     <td></td>
                     <td></td>
                     <td></td><td></td><td></td>
                 </tr>
   
                 ';
    $html.= '<tr><td clospan="6"><h4>Ground Floor</h4></td></tr>';
   
       $html.= '<tr>
                     <td>क्रं.</td>
                     <td>कार्य कहां तक किया जाना है</td>
                     <td>कौन कौनसे काम</td>
                     <td>प्रतिशत मे</td>
                     <td>विवरण</td>
                     <td>भुगतान कितना</td>
                     <td>कुल भुगतान</td>
                 </tr>
   
                 <tr>
                     <td>1</td>
                     <td></td>
                     <td>अनुबंध राशी</td>
                     <td>10%</td>
                     <td></td>  
                     <td>₹ '.number_format(round($paid1)).'</td>
                     <td>₹ '.number_format(round($paid1)).'</td>
                 </tr>
                 <tr>
                     <td>2</td>
                     <td>प्लिंथ</td>
                     <td>खुदाई, फुटिंग, प्लिंथ कालम बीम, प्लिंथ आउटर जुडाई,प्लिंथ भराई </td>
                     <td>25%</td>
                     <td>प्रथम चैक</td>
                     <td>₹ '.number_format(round($check_1)).'</td>
                     <td style="border-bottom:0px;">₹ '.number_format(round($paid2)).'</td>  
                 </tr>
   
                 <tr rowspan="2">
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>व्दितीय चैक</td>
                     <td>₹ '.number_format(round($check_2)).'</td>                     
                 </tr>
   
                 <tr>
                     <td>3</td>
                     <td>भूतल स्लेब </td>
                     <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
                     <td>20%</td>
                     <td>प्रथम चैक</td>
                     <td>₹ '.number_format(round($check_3)).'</td>
                     <td style="border-bottom:0px;">₹ '.number_format(round($paid3)).'</td>  
                 </tr>
   
                 <tr rowspan="2">
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>व्दितीय चैक</td>
                     <td>₹ '.number_format(round($check_4)).'</td>                     
                 </tr>
   
   
                 <tr>
                     <td>4</td>
                     <td>भूतल स्लेब ढलाई</td>
                     <td>स्लेब ढलाई, भूतल ब्रीक वर्क</td>
                     <td>15%</td>
                     <td>प्रथम चैक</td>
                     <td>₹ '.number_format(round($check_5)).'</td>
                     <td style="border-bottom:0px;">₹ '.number_format($paid4).'</td>  
                 </tr>
   
                 <tr rowspan="2">
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>व्दितीय चैक</td>
                     <td>₹ '.number_format(round($check_6)).'</td>                     
                 </tr>
   
                 <tr>
                     <td>5</td>
                     <td>फिनिशिंग वर्क</td>
                     <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
                     <td>20%</td>
                     <td>प्रथम चैक</td>
                     <td>₹ '.number_format(round($check_7)).'</td>
                     <td style="border-bottom:0px;">₹ '.number_format($paid5).'</td>  
                 </tr>
   
                 <tr rowspan="2">
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>व्दितीय चैक</td>
                     <td>₹ '.number_format(round($check_8)).'</td>                     
                 </tr>
   
                 <tr>
                     <td>6</td>
                     <td>बकायाफिनिशिंग वर्क</td>
                     <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
                     <td>10%</td>
                     <td>प्रथम चैक</td>
                     <td>₹ '.number_format(round($check_9)).'</td>
                     <td style="border-bottom:0px;">₹ '.number_format($paid6).'</td>  
                 </tr>
   
                 <tr rowspan="2">
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>व्दितीय चैक</td>
                     <td>₹ '.number_format(round($check_10)).'</td>                     
                 </tr>
                 
                 <tr>
                     <td></td>
                     <td></td>
                     <td align="right">Total</td>
                     <td>100%</td>
                     <td></td>
                     <td>₹ '.number_format(round($sum_gf)).'</td>
                     <td>₹ '.number_format(round($sum_gf)).'</td>                     
                 </tr>';
                 $html .= '<tr><td colspan="7">&nbsp;</td></tr>';
   /*-------------------------1st floor------------------------*/
       
   $html.= '<tr><td clospan="6"><h4>First Floor</h4></td></tr>';
       $html.= '<tr>
                 <td>क्रं.</td>
                 <td>कार्य कहां तक किया जाना है</td>
                 <td>कौन कौनसे काम</td>
                 <td>प्रतिशत मे</td>
                 <td>विवरण</td>
                 <td>भुगतान कितना</td>
                 <td>कुल भुगतान</td>
             </tr>
             
             <tr>
                 <td>1</td>
                 <td>प्रथम स्लेब</td>
                 <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
                 <td>45%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_11)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format(round($paid7)).'</td>  
             </tr>
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_12)).'</td>                     
             </tr>
   
             <tr>
                 <td>2</td>
                 <td>प्रथम स्लेब ढलाई</td>
                 <td>स्लेब ढलाई, ब्रीक वर्क</td>
                 <td>25%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_13)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format(round($paid8)).'</td>  
             </tr>
   
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_14)).'</td>                     
             </tr>
   
   
             <tr>
                 <td>3</td>
                 <td>फिनिशिंग वर्क</td>
                 <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
                 <td>20%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_15)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format($paid9).'</td>  
             </tr>
   
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_16)).'</td>                     
             </tr>
   
   
             <tr>
                 <td>4</td>
                 <td>बकायाफिनिशिंग वर्क</td>
                 <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
                 <td>10%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_17)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format($paid10).'</td>  
             </tr>
   
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_18)).'</td>                     
             </tr>
             
             <tr>
               <td></td>
               <td></td>
               <td align="right">Total</td>
               <td>100%</td>
               <td></td>
               <td>₹ '.number_format(round($sum_1stfloor)).'</td>
               <td>₹ '.number_format(round($sum_1stfloor)).'</td>                     
             </tr>';
             $html .= '<tr><td colspan="7">&nbsp;</td></tr>';
   /**------------3rd floor------------ */
   $html.= '<tr><td clospan="6"><h4>Second Floor</h4></td></tr>';
   $html.= '<tr>
                 <td>क्रं.</td>
                 <td>कार्य कहां तक किया जाना है</td>
                 <td>कौन कौनसे काम</td>
                 <td>प्रतिशत मे</td>
                 <td>विवरण</td>
                 <td>भुगतान कितना</td>
                 <td>कुल भुगतान</td>
             </tr>
             
             <tr>
                 <td>1</td>
                 <td>2nd स्लेब</td>
                 <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
                 <td>45%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_19)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format(round($paid11)).'</td>  
             </tr>
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_20)).'</td>                     
             </tr>
   
             <tr>
                 <td>2</td>
                 <td>2nd स्लेब ढलाई</td>
                 <td>स्लेब ढलाई, ब्रीक वर्क</td>
                 <td>25%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_21)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format(round($paid12)).'</td>  
             </tr>
   
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_22)).'</td>                     
             </tr>
   
   
             <tr>
                 <td>3</td>
                 <td>फिनिशिंग वर्क</td>
                 <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
                 <td>20%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_23)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format($paid13).'</td>  
             </tr>
   
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_24)).'</td>                     
             </tr>
   
   
             <tr>
                 <td>4</td>
                 <td>बकायाफिनिशिंग वर्क</td>
                 <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
                 <td>10%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_25)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format($paid14).'</td>  
             </tr>
   
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_26)).'</td>                     
             </tr>
             
             <tr>
               <td></td>
               <td></td>
               <td align="right">Total</td>
               <td>100%</td>
               <td></td>
               <td>₹ '.number_format(round($sum_2ndfloor)).'</td>
               <td>₹ '.number_format(round($sum_2ndfloor)).'</td>                     
             </tr>';
   
   
     
/**==========4th floor=============================*/
$html.= '<tr><td clospan="6"><h4>Third Floor</h4></td></tr>';
$html.= '<tr>
              <td>क्रं.</td>
              <td>कार्य कहां तक किया जाना है</td>
              <td>कौन कौनसे काम</td>
              <td>प्रतिशत मे</td>
              <td>विवरण</td>
              <td>भुगतान कितना</td>
              <td>कुल भुगतान</td>
          </tr>
          <tr>
              <td>1</td>
              <td>3rd स्लेब</td>
              <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
              <td>45%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_27)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format(round($paid15)).'</td>  
          </tr>
          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_28)).'</td>                     
          </tr>

          <tr>
              <td>2</td>
              <td>3rd स्लेब ढलाई</td>
              <td>स्लेब ढलाई, ब्रीक वर्क</td>
              <td>25%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_29)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format(round($paid16)).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_30)).'</td>                     
          </tr>


          <tr>
              <td>3</td>
              <td>फिनिशिंग वर्क</td>
              <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
              <td>20%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_31)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format($paid17).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_32)).'</td>                     
          </tr>


          <tr>
              <td>4</td>
              <td>बकायाफिनिशिंग वर्क</td>
              <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
              <td>10%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_33)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format($paid18).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_34)).'</td>                     
          </tr>
          
          <tr>
            <td></td>
            <td></td>
            <td align="right">Total</td>
            <td>100%</td>
            <td></td>
            <td>₹ '.number_format(round($sum_3rdfloor)).'</td>
            <td>₹ '.number_format(round($sum_3rdfloor)).'</td>                     
          </tr>';

}
elseif($floor_num == 5)
{
    $gf = $total_cost/100*35;
    $first_f = $total_cost/100*25;
    $second_f = $total_cost/100*20;
    $third_f = $total_cost/100*10;
    $fourth_f = $total_cost-($gf+$first_f+$second_f+$third_f);
    //$gf = number_format(round($gf));
    //$first_f = number_format($first_f);
   
   /**-----------Service Charge------------- */   
     $paid1 = $total_cost/100*10;     
   /**---------Ground Floor--First Payment------------- */
     $paid2 = $gf/100*25;
     $check_1= $paid2/100*60;
     $check_2= $paid2/100*40;
   
   /**-----------Second Payment------------- */
     $paid3 = $gf/100*20;
     $check_3= $paid3/100*60;
     $check_4= $paid3/100*40;
     
   /**-----------3rd Payment------------- */ 
     $paid4 = $gf/100*15;
     $check_5= $paid4/100*60;
     $check_6= $paid4/100*40;
   /**-----------4th Payment------------- */
     $paid5 = $gf/100*20;
     $check_7= $paid5/100*60;
     $check_8= $paid5/100*40;
   /**-----------5th Payment------------- */
     $paid6 = $gf/100*10;
     $check_9= $paid6/100*60;
     $check_10= $paid6/100*40;
   
     $sum_gf=$paid1+$paid2+$paid3+$paid4+$paid5+$paid6;
   /*-------- 1st Floor --------------------*/
   
   /**-----------First Payment------------- */
   $paid7 = $first_f/100*45;
   $check_11= $paid7/100*60;
   $check_12= $paid7/100*40;
   
   /**-----------Second Payment------------- */
   $paid8 = $first_f/100*25;
   $check_13= $paid8/100*60;
   $check_14= $paid8/100*40;
   
   /**-----------3rd Payment------------- */ 
   $paid9 = $first_f/100*20;
   $check_15= $paid9/100*60;
   $check_16= $paid9/100*40;
   /**-----------4th Payment------------- */
   $paid10 = $first_f/100*10;
   
   $check_17= $paid10/100*60;
   $check_18= $paid10/100*40;
   $sum_1stfloor= $paid7+$paid8+$paid9+$paid10;
     
   /*-------- 2nd Floor --------------------*/
   
   /**-----------First Payment------------- */
   $paid11 = $second_f/100*45;
   $check_19= $paid11/100*60;
   $check_20= $paid11/100*40;
   
   /**-----------Second Payment------------- */
   $paid12 = $second_f/100*25;
   $check_21= $paid12/100*60;
   $check_22= $paid12/100*40;
   
   /**-----------3rd Payment------------- */ 
   $paid13 = $second_f/100*20;
   $check_23= $paid13/100*60;
   $check_24= $paid13/100*40;
   /**-----------4th Payment------------- */
   $paid14 = $second_f/100*10;
   
   $check_25 = $paid14/100*60;
   $check_26 = $paid14/100*40;
   $sum_2ndfloor= $paid11+$paid12+$paid13+$paid14;
/**==============Third Floor================== */
/**-----------First Payment------------- */
$paid15 = $third_f/100*45;
$check_27= $paid15/100*60;
$check_28= $paid15/100*40;

/**-----------Second Payment------------- */
$paid16 = $third_f/100*25;
$check_29= $paid16/100*60;
$check_30= $paid16/100*40;

/**-----------3rd Payment------------- */ 
$paid17 = $third_f/100*20;
$check_31= $paid17/100*60;
$check_32= $paid17/100*40;
/**-----------4th Payment------------- */
$paid18 = $third_f/100*10;

$check_33 = $paid18/100*60;
$check_34 = $paid18/100*40;
$sum_3rdfloor= $paid15+$paid16+$paid17+$paid18;

/**==============Fourth Floor================== */
/**-----------First Payment------------- */
$paid19 = $third_f/100*45;
$check_35= $paid19/100*60;
$check_36= $paid19/100*40;

/**-----------Second Payment------------- */
$paid20 = $third_f/100*25;
$check_37= $paid20/100*60;
$check_38= $paid20/100*40;

/**-----------3rd Payment------------- */ 
$paid21 = $third_f/100*20;
$check_39= $paid21/100*60;
$check_40= $paid21/100*40;
/**-----------4th Payment------------- */
$paid22 = $third_f/100*10;

$check_41 = $paid22/100*60;
$check_42 = $paid22/100*40;
$sum_4thfloor= $paid19+$paid20+$paid21+$paid22;

   
       $html .= '<tr>
                   <td>₹ '.number_format($total_cost).'</td>
                   <td>कुल अनुबंधित राशी</td>
                   <td></td><td></td><td></td><td></td><td></td>
                 </tr> 
   
                 <tr>
                   <td>₹ '.number_format(round($gf)).'</td>
                   <td>भूतल</td>
                   <td></td><td></td><td></td><td></td><td></td>
                 </tr>
                 <tr>
                     <td>₹ '.number_format(round($first_f)).'</td>
                     <td>प्रथम तल</td>
                     <td></td>
                     <td></td>
                     <td></td><td></td><td></td>
                 </tr>
                 
                 <tr>
                     <td>₹ '.number_format(round($second_f)).'</td>
                     <td>द्वितीय तल</td>
                     <td></td>
                     <td></td>
                     <td></td><td></td><td></td>
                 </tr>

                 <tr>
                     <td>₹ '.number_format(round($third_f)).'</td>
                     <td>तीसरी तल</td>
                     <td></td>
                     <td></td>
                     <td></td><td></td><td></td>
                 </tr>

                 <tr>
                     <td>₹ '.number_format(round($fourth_f)).'</td>
                     <td>चौथी तल</td>
                     <td></td>
                     <td></td>
                     <td></td><td></td><td></td>
                 </tr>
   
                 ';
    $html.= '<tr><td clospan="6"><h4>Ground Floor</h4></td></tr>';
   
       $html.= '<tr>
                     <td>क्रं.</td>
                     <td>कार्य कहां तक किया जाना है</td>
                     <td>कौन कौनसे काम</td>
                     <td>प्रतिशत मे</td>
                     <td>विवरण</td>
                     <td>भुगतान कितना</td>
                     <td>कुल भुगतान</td>
                 </tr>
   
                 <tr>
                     <td>1</td>
                     <td></td>
                     <td>अनुबंध राशी</td>
                     <td>10%</td>
                     <td></td>  
                     <td>₹ '.number_format(round($paid1)).'</td>
                     <td>₹ '.number_format(round($paid1)).'</td>
                 </tr>
                 <tr>
                     <td>2</td>
                     <td>प्लिंथ</td>
                     <td>खुदाई, फुटिंग, प्लिंथ कालम बीम, प्लिंथ आउटर जुडाई,प्लिंथ भराई </td>
                     <td>25%</td>
                     <td>प्रथम चैक</td>
                     <td>₹ '.number_format(round($check_1)).'</td>
                     <td style="border-bottom:0px;">₹ '.number_format(round($paid2)).'</td>  
                 </tr>
   
                 <tr rowspan="2">
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>व्दितीय चैक</td>
                     <td>₹ '.number_format(round($check_2)).'</td>                     
                 </tr>
   
                 <tr>
                     <td>3</td>
                     <td>भूतल स्लेब </td>
                     <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
                     <td>20%</td>
                     <td>प्रथम चैक</td>
                     <td>₹ '.number_format(round($check_3)).'</td>
                     <td style="border-bottom:0px;">₹ '.number_format(round($paid3)).'</td>  
                 </tr>
   
                 <tr rowspan="2">
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>व्दितीय चैक</td>
                     <td>₹ '.number_format(round($check_4)).'</td>                     
                 </tr>
   
   
                 <tr>
                     <td>4</td>
                     <td>भूतल स्लेब ढलाई</td>
                     <td>स्लेब ढलाई, भूतल ब्रीक वर्क</td>
                     <td>15%</td>
                     <td>प्रथम चैक</td>
                     <td>₹ '.number_format(round($check_5)).'</td>
                     <td style="border-bottom:0px;">₹ '.number_format($paid4).'</td>  
                 </tr>
   
                 <tr rowspan="2">
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>व्दितीय चैक</td>
                     <td>₹ '.number_format(round($check_6)).'</td>                     
                 </tr>
   
                 <tr>
                     <td>5</td>
                     <td>फिनिशिंग वर्क</td>
                     <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
                     <td>20%</td>
                     <td>प्रथम चैक</td>
                     <td>₹ '.number_format(round($check_7)).'</td>
                     <td style="border-bottom:0px;">₹ '.number_format($paid5).'</td>  
                 </tr>
   
                 <tr rowspan="2">
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>व्दितीय चैक</td>
                     <td>₹ '.number_format(round($check_8)).'</td>                     
                 </tr>
   
                 <tr>
                     <td>6</td>
                     <td>बकायाफिनिशिंग वर्क</td>
                     <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
                     <td>10%</td>
                     <td>प्रथम चैक</td>
                     <td>₹ '.number_format(round($check_9)).'</td>
                     <td style="border-bottom:0px;">₹ '.number_format($paid6).'</td>  
                 </tr>
   
                 <tr rowspan="2">
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>व्दितीय चैक</td>
                     <td>₹ '.number_format(round($check_10)).'</td>                     
                 </tr>
                 
                 <tr>
                     <td></td>
                     <td></td>
                     <td align="right">Total</td>
                     <td>100%</td>
                     <td></td>
                     <td>₹ '.number_format(round($sum_gf)).'</td>
                     <td>₹ '.number_format(round($sum_gf)).'</td>                     
                 </tr>';
                 $html .= '<tr><td colspan="7">&nbsp;</td></tr>';
   /*-------------------------1st floor------------------------*/
       
   $html.= '<tr><td clospan="6"><h4>First Floor</h4></td></tr>';
       $html.= '<tr>
                 <td>क्रं.</td>
                 <td>कार्य कहां तक किया जाना है</td>
                 <td>कौन कौनसे काम</td>
                 <td>प्रतिशत मे</td>
                 <td>विवरण</td>
                 <td>भुगतान कितना</td>
                 <td>कुल भुगतान</td>
             </tr>
             
             <tr>
                 <td>1</td>
                 <td>प्रथम स्लेब</td>
                 <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
                 <td>45%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_11)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format(round($paid7)).'</td>  
             </tr>
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_12)).'</td>                     
             </tr>
   
             <tr>
                 <td>2</td>
                 <td>प्रथम स्लेब ढलाई</td>
                 <td>स्लेब ढलाई, ब्रीक वर्क</td>
                 <td>25%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_13)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format(round($paid8)).'</td>  
             </tr>
   
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_14)).'</td>                     
             </tr>
   
   
             <tr>
                 <td>3</td>
                 <td>फिनिशिंग वर्क</td>
                 <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
                 <td>20%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_15)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format($paid9).'</td>  
             </tr>
   
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_16)).'</td>                     
             </tr>
   
   
             <tr>
                 <td>4</td>
                 <td>बकायाफिनिशिंग वर्क</td>
                 <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
                 <td>10%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_17)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format($paid10).'</td>  
             </tr>
   
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_18)).'</td>                     
             </tr>
             
             <tr>
               <td></td>
               <td></td>
               <td align="right">Total</td>
               <td>100%</td>
               <td></td>
               <td>₹ '.number_format(round($sum_1stfloor)).'</td>
               <td>₹ '.number_format(round($sum_1stfloor)).'</td>                     
             </tr>';
             $html .= '<tr><td colspan="7">&nbsp;</td></tr>';
   /**------------3rd floor------------ */
   $html.= '<tr><td clospan="6"><h4>Second Floor</h4></td></tr>';
   $html.= '<tr>
                 <td>क्रं.</td>
                 <td>कार्य कहां तक किया जाना है</td>
                 <td>कौन कौनसे काम</td>
                 <td>प्रतिशत मे</td>
                 <td>विवरण</td>
                 <td>भुगतान कितना</td>
                 <td>कुल भुगतान</td>
             </tr>
             
             <tr>
                 <td>1</td>
                 <td>2nd स्लेब</td>
                 <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
                 <td>45%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_19)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format(round($paid11)).'</td>  
             </tr>
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_20)).'</td>                     
             </tr>
   
             <tr>
                 <td>2</td>
                 <td>2nd स्लेब ढलाई</td>
                 <td>स्लेब ढलाई, ब्रीक वर्क</td>
                 <td>25%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_21)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format(round($paid12)).'</td>  
             </tr>
   
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_22)).'</td>                     
             </tr>
   
   
             <tr>
                 <td>3</td>
                 <td>फिनिशिंग वर्क</td>
                 <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
                 <td>20%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_23)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format($paid13).'</td>  
             </tr>
   
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_24)).'</td>                     
             </tr>
   
   
             <tr>
                 <td>4</td>
                 <td>बकायाफिनिशिंग वर्क</td>
                 <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
                 <td>10%</td>
                 <td>प्रथम चैक</td>
                 <td>₹ '.number_format(round($check_25)).'</td>
                 <td style="border-bottom:0px;">₹ '.number_format($paid14).'</td>  
             </tr>
   
             <tr rowspan="2">
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td>व्दितीय चैक</td>
                 <td>₹ '.number_format(round($check_26)).'</td>                     
             </tr>
             
             <tr>
               <td></td>
               <td></td>
               <td align="right">Total</td>
               <td>100%</td>
               <td></td>
               <td>₹ '.number_format(round($sum_2ndfloor)).'</td>
               <td>₹ '.number_format(round($sum_2ndfloor)).'</td>                     
             </tr>';
   
   
     
/**==========4th floor=============================*/
$html.= '<tr><td clospan="6"><h4>Third Floor</h4></td></tr>';
$html.= '<tr>
              <td>क्रं.</td>
              <td>कार्य कहां तक किया जाना है</td>
              <td>कौन कौनसे काम</td>
              <td>प्रतिशत मे</td>
              <td>विवरण</td>
              <td>भुगतान कितना</td>
              <td>कुल भुगतान</td>
          </tr>
          <tr>
              <td>1</td>
              <td>3rd स्लेब</td>
              <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
              <td>45%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_27)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format(round($paid15)).'</td>  
          </tr>
          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_28)).'</td>                     
          </tr>

          <tr>
              <td>2</td>
              <td>3rd स्लेब ढलाई</td>
              <td>स्लेब ढलाई, ब्रीक वर्क</td>
              <td>25%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_29)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format(round($paid16)).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_30)).'</td>                     
          </tr>


          <tr>
              <td>3</td>
              <td>फिनिशिंग वर्क</td>
              <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
              <td>20%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_31)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format($paid17).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_32)).'</td>                     
          </tr>


          <tr>
              <td>4</td>
              <td>बकायाफिनिशिंग वर्क</td>
              <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
              <td>10%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_33)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format($paid18).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_34)).'</td>                     
          </tr>
          
          <tr>
            <td></td>
            <td></td>
            <td align="right">Total</td>
            <td>100%</td>
            <td></td>
            <td>₹ '.number_format(round($sum_3rdfloor)).'</td>
            <td>₹ '.number_format(round($sum_3rdfloor)).'</td>                     
          </tr>';

/**==========4th floor=============================*/
$html.= '<tr><td clospan="6"><h4>Fourth Floor</h4></td></tr>';
$html.= '<tr>
              <td>क्रं.</td>
              <td>कार्य कहां तक किया जाना है</td>
              <td>कौन कौनसे काम</td>
              <td>प्रतिशत मे</td>
              <td>विवरण</td>
              <td>भुगतान कितना</td>
              <td>कुल भुगतान</td>
          </tr>
          <tr>
              <td>1</td>
              <td>4th स्लेब</td>
              <td>कालम बीम व स्लेब मे लोहा बांधने तक</td>
              <td>45%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_35)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format(round($paid19)).'</td>  
          </tr>
          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_36)).'</td>                     
          </tr>

          <tr>
              <td>2</td>
              <td>4th स्लेब ढलाई</td>
              <td>स्लेब ढलाई, ब्रीक वर्क</td>
              <td>25%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_37)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format(round($paid20)).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_38)).'</td>                     
          </tr>


          <tr>
              <td>3</td>
              <td>फिनिशिंग वर्क</td>
              <td>इलेक्ट्रीक, प्लम्बिंग, प्लास्टर</td>
              <td>20%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_39)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format($paid21).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_40)).'</td>                     
          </tr>


          <tr>
              <td>4</td>
              <td>बकायाफिनिशिंग वर्क</td>
              <td>पेंटिंग, खिडकी, दरवाजे, अन्य बचा</td>
              <td>10%</td>
              <td>प्रथम चैक</td>
              <td>₹ '.number_format(round($check_41)).'</td>
              <td style="border-bottom:0px;">₹ '.number_format($paid22).'</td>  
          </tr>

          <tr rowspan="2">
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>व्दितीय चैक</td>
              <td>₹ '.number_format(round($check_42)).'</td>                     
          </tr>
          
          <tr>
            <td></td>
            <td></td>
            <td align="right">Total</td>
            <td>100%</td>
            <td></td>
            <td>₹ '.number_format(round($sum_4thfloor)).'</td>
            <td>₹ '.number_format(round($sum_4thfloor)).'</td>                     
          </tr>';
}

$html .= '</table>';

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
$mpdf->Output("UKC-Cost-Calculation".strtotime("now").".pdf", "D");

//$mpdf->Output();
// (E) OUTPUT
// (E1) DIRECTLY SHOW IN BROWSER
header("Location: ../../cost_calculator.php");

// (E2) FORCE DOWNLOAD
// $mpdf->Output("demo.pdf", "D");
// (E3) SAVE TO FILE ON SERVER
// 

}
else
{
  echo  "Data not available...";
}
