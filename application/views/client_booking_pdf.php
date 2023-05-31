<?php 
// print_r($client_info);
 $permanent_addr_arr = json_decode($client_info[0]->permanent_addr, true);
 $permanent_addr = implode(", ", $permanent_addr_arr);

 $present_addr_arr = json_decode($client_info[0]->present_addr, true);
 $present_addr = implode(", ", $present_addr_arr);

 $office_addr_arr = json_decode($client_info[0]->office_addr, true);
 $office_addr = implode(", ", $office_addr_arr);

 $d_addr_arr = json_decode($dec_maker[0]->d_addr, true);
 $d_addr = implode(", ", $d_addr_arr);

 $p_addr_arr = json_decode($payee[0]->p_addr, true);
 $p_addr = implode(", ", $p_addr_arr);
 


 //print_r($commitment);

?>
<html>

<body>
<!-- <h4 style="color: black; font-family: poppins; text-decoration: underline; text-align:left;">Date: <?php echo $client_info[0]->create_date ?></h4> -->
<h2 style="color: black; font-family: poppins; text-decoration: underline;text-align: center;color: #577D86;">Booking Form</h2>
    <table class="table table-borderless table-nowrap" style="width:100%;">
        <tr style="text-decoration:underline;">
            <td colspan="2">Booking Date: <?php echo $client_info[0]->create_date ?></td>
            <td colspan="2"></td>
            <td colspan="2">Booked By: <?php echo $client_info[0]->create_by ?? ""; ?></td>
        </tr>
        <tr>
            <td colspan="6">
            <hr style="border-top: 1px solid black;">
            </td>
        </tr>
        <tr >
            <td colspan="6"><b style="text-decoration:underline;">Client Name : </b> <span><?php echo $client_info[0]->client_name ?? ""; ?></span></td>
        </tr>
        <tr>
            <td colspan="6"> <b style="text-decoration:underline;"> Father/Spouse Name :</b><span> <?php echo $client_info[0]->spouse_name ?? ""; ?></span> </td>
        </tr>  
        <tr>
        <td colspan="2"> <b style="text-decoration:underline;">Age :</b><span> <?php echo $client_info[0]->age ?? ""; ?></span> </td>
        <td colspan="2"></td>
        <td colspan="2"><b style="text-decoration:underline;">Gender :</b> <span> <?php echo $client_info[0]->gender ?? ""; ?></span></td>
        
        </tr>
        <tr>
        <td colspan="2"><b style="text-decoration:underline;">Occupation :</b><span> <?php echo $client_info[0]->occupation ?? ""; ?></span> </td>
        </tr>
        <tr style="text-decoration:underline;">
           <td colspan="6" style="padding-top: 10px; text-decoration:underline;"><b>Permanent Address</b> </td>
        </tr>
        <tr >
            <td colspan="6"><span><?php echo $permanent_addr_arr['p_hno']; ?></span>,
            <span><?php echo $permanent_addr_arr['p_street']; ?></span>,
            <span><?php echo $permanent_addr_arr['p_landmark']; ?></span>,     
            <span><?php echo $permanent_addr_arr['p_city']; ?></span>,
            <span><?php echo $permanent_addr_arr['p_state']; ?></span>,
            <span><?php echo $permanent_addr_arr['p_pincode']; ?></span></td>
        </tr>
        <tr style="text-decoration:underline;">
           <td colspan="6" style="padding-top: 10px;"> <b style="text-decoration:underline;">Present Address</b></td>
        </tr>
        <tr>
            <td colspan="6"><span><?php echo $present_addr_arr['r_hno']?></span>
            <span><?php echo $present_addr_arr['r_street']?></span>
            <span><?php echo $present_addr_arr['r_landmark']?></span>        
            <span><?php echo $present_addr_arr['r_city']?></span>
            <span><?php echo $present_addr_arr['r_state']?></span>
            <span><?php echo $present_addr_arr['r_pincode']?></span></td>
        </tr>
        <tr style="text-decoration:underline;">
           <td colspan="6" style="padding-top: 10px;"><b style="text-decoration:underline;">Office Address</b></td>
        </tr>
        <tr>
            <td colspan="6"><span><?php echo $office_addr_arr['o_hno']?></span>
            <span><?php echo $office_addr_arr['o_street']?></span>
            <span><?php echo $office_addr_arr['o_landmark']?></span>        
            <span><?php echo $office_addr_arr['o_city']?></span>
            <span><?php echo $office_addr_arr['o_state']?></span>
            <span><?php echo $office_addr_arr['o_pincode']?></span>
        </tr>
        <tr>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Mobile No. :</b><span> <?php echo $client_info[0]->mobile_no ?? ""; ?></span></td>
            <td colspan="2"></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">PAN No. :</b><span> <?php echo $client_info[0]->pan_no ?? ""; ?></span></td>
        </tr>
        <tr>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Addhar No. :</b> <span><?php echo $client_info[0]->aadhar_no ?? ""; ?></span></td>
            <td colspan="2"></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Email :</b> <span><?php echo $client_info[0]->email_id ?? ""; ?></span></td>
        </tr>
        <tr>
            <td colspan="6">
                <hr style="border-top: 1px solid black;">
            </td>
        </tr>
        <tr style="text-decoration:underline;">
            <td colspan="6">Same as above</td>
        </tr>
        <tr>

        </tr>
        <tr>
            <td colspan="6" style="text-align: center;text-decoration:underline;font-weight:bold; color: #577D86;padding-top: 10px;">Decision Maker</td>
        </tr>
        <tr>
            <td colspan="2"> <b style="text-decoration:underline;text-decoration:underline;">Name :</b><span><?php echo $dec_maker[0]->d_name; ?></span> </td>
            <td colspan="2"></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Relation :</b><span><?php echo $dec_maker[0]->d_relation; ?></span></td>
        </tr>
        <tr >
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Mobile No. :</b><Span><?php echo $dec_maker[0]->d_mobile_no; ?></Span></td>
            <td colspan="2"></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Email :</b><span><?php echo $dec_maker[0]->d_email_id; ?></span></td>
        </tr>
        <tr >
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Aadhaar No. :</b><Span><?php echo $dec_maker[0]->d_aadhar_no; ?></Span></td>
            <td colspan="2"></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">PAN No. :</b><span><?php echo $dec_maker[0]->d_pan_no; ?></span></td>
        </tr>
        <tr >
           <td colspan="6" style="padding-top: 10px;"><b>Address</b></td>
        </tr>
        <tr>
            <td colspan="6"><span><?php echo $d_addr_arr['d_hno']?></span>
            <span><?php echo $d_addr_arr['d_street']?></span>
            <span><?php echo $d_addr_arr['d_landmark']?></span>        
            <span><?php echo $d_addr_arr['d_city']?></span>
            <span><?php echo $d_addr_arr['d_state']?></span>
            <span><?php echo $d_addr_arr['d_pincode']?></span></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td colspan="6" style="text-align: center;text-decoration:underline;font-weight:bold; color: #577D86;padding-top: 10px;">Payee</td>
        </tr>
        <tr >
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Name :</b> <span><?php echo $payee[0]->payee_name; ?></span></td>
            <td colspan="2"></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Relation :</b><span><?php echo $payee[0]->p_relation; ?></span></td>
        </tr>
        <tr >
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Mobile No. :</b><span><?php echo $payee[0]->p_mobile_no ?></span></td>
            <td colspan="2"></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Email :</b><span><?php echo $payee[0]->p_email_id; ?></span></td>
        </tr>
        <tr >
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Aadhaar No. :</b><span><?php echo $payee[0]->p_aadhar_no ?></span></td>
            <td colspan="2"></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">PAN No. :</b><span><?php echo $payee[0]->p_pan_no; ?></span></td>
        </tr>
        <tr style="text-decoration:underline;">
           <td colspan="6" style="padding-top: 10px;"> <b>Address</b> </td>
        </tr>
        <tr>
            <td colspan="6"><span><?php echo $p_addr_arr['p_hno']?></span>
            <span><?php echo $p_addr_arr['p_street']?></span>
            <span><?php echo $p_addr_arr['p_landmark']?></span>       
            <span><?php echo $p_addr_arr['p_city']?></span>
            <span><?php echo $p_addr_arr['p_state']?></span>
            <span><?php echo $p_addr_arr['p_pincode']?></span></td>
        </tr>
        <tr>
            <td colspan="6"></td>
        </tr>
        <tr>
            <td colspan="6"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2">Client Sign.</td>
            <td colspan="2"></td>
            <td colspan="2">Employee Sign.</td>
        </tr>
    </table>

    <!-------------------------------------End of page 1------------------------>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-----------------Start of Page 2-------------------------------->
    <h4>Date: </h4>
    <table class="table table-borderless table-nowrap" style="width:100%;">
        <tr>
           <td colspan="6"> <b style="text-decoration:underline;">Any Offer Given</b> <span><?php echo $trans_detail[0]->offer_amt; ?></span> </td>
        </tr>
        <tr >
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Quotation Rate Selection :</b><span> <?php echo $trans_detail[0]->quotation_type; ?></span></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;"></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Final Discounted Rate :</b><span> <?php echo $trans_detail[0]->final_rate; ?></span></td>
        </tr>
        <tr >
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Lum-sum amount:</b><span> <?php echo $trans_detail[0]->final_amt; ?></span></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;"></td>
            <td colspan="2">In Words:<span> [<?php echo $trans_detail[0]->final_amt_in_word; ?>]</span></td>
        </tr>
        <tr >
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Booking Amount paid (Non-Refundable) :</b><span> <?php echo $trans_detail[0]->paid_booking_amt; ?></span></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;"></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Payment Mode :</b><span> <?php echo $trans_detail[0]->payment_mode; ?></span></td>
        </tr>
        <tr >
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Cheque no./ Transaction id :</b><span> <?php echo $trans_detail[0]->trans_id==""?$trans_detail[0]->cheque_no:$trans_detail[0]->trans_id ?></span></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;"></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Cheque Date :</b><span><?php echo  $trans_detail[0]->cheque_data ?></span></td>
        </tr>
        <tr >
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Funding Mode for project :</b><span> <?php echo $trans_detail[0]->funding_mode; ?></span></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;"></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">If Loan :</b><span> 
                <?php 
                    if($trans_detail[0]->funding_mode=="Both"){
                        echo $trans_detail[0]->self_amt." ".$trans_detail[0]->loan_amt;
                    }else {
                        if($trans_detail[0]->funding_mode=="Bank")
                        {
                            echo $trans_detail[0]->loan_amt;
                        }else
                        {
                            echo $trans_detail[0]->self_amt;
                        }
                    } ?></span></td>
        </tr>
        <tr>
            <td colspan="6">
                <hr style="border-top: 1px solid black;">
            </td>
        </tr>
        <tr >
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Plot Location :</b><span> <?php echo $plot_detail[0]->plot_location; ?></span></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;"></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Plot No.</b><span> <?php echo $plot_detail[0]->plot_no; ?></span></td>
        </tr>
        <tr >
            <td colspan="2"><b style="text-decoration:underline;">Plot Size  :</b><span> <?php echo $plot_detail[0]->plot_size; ?></span></td>
            <td colspan="2"><b style="text-decoration:underline;"></td>
            <td colspan="2"><b style="text-decoration:underline;">Plot facing</b><span> <?php echo $plot_detail[0]->plot_facing; ?></span></td>
        </tr>
        <tr >
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Number of roads :</b><span> <?php echo $plot_detail[0]->num_road; ?></span></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;"></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Depth of Plot  :</b><span> <?php echo $plot_detail[0]->plot_depth; ?> </span></td>
        </tr>
        <tr >
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">SBA :</b><span><?php echo $commitment[0]->sba; ?> Sqft.</span></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;"></td>
            <td colspan="2">&nbsp;</td>
        </tr>
        <?php
        $f_name = array('Ground','1st','2nd','3rd','4th','5th','6th', '7th', '8th', '9th');

        $c=0;
        $cnt_row = 0;
        $fcost_array = explode(",", $work_area[0]->work_area);
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



          $floor = $f_name[$c];

          $floor = $floor." Floor";

          $cnt_row++;

          if($cnt_row == 1)
          {
            $html .= '<tr>';
          }

           $html .='<td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">'.$floor.' ₹'.number_format($final_floor_cost).'</span></td>';

          if($cnt_row == 2)
          {

            $html .= '</tr>';

            $cnt_row = 0;

          }
          else
          {
                       $html .='<td colspan="2"><b style="text-decoration:underline;"></td>';
          }

          

          $c++;

        }

    echo $html;

?>
        <tr>
            <td colspan="6">
                <hr style="border-top: 1px solid black;">
            </td>
        </tr>

        <tr>
           <td colspan="6"> <b style="text-decoration:underline;">Validity of rates for construction from booking date :</b> <span>After Three Month on Booking Date</span> </td>
        </tr>
        
        <tr>
           <td colspan="6"> <b style="text-decoration:underline;">Booking will be automatically canceled after validity :</b> <span>- ***4(Four) Months from the date f Booking Amount paid***</span> </td>
        </tr>
        <tr>
            <td style="border: 1px solid black;border-bottom: none;text-decoration:underline; text-align:center;" colspan="6">Only For Individual Bungalows</td>
        </tr>
        <tr>
            <td style="border: 1px solid black;border-top: none; color: red;text-align:center;border-bottom: none;" colspan="6"><Span class="text-danger">**Any work on site will start only after receiving the 25% amount of total contract value**</Span></td>
        </tr>
        <tr>
            <td colspan="3" style="border: 1px solid black;border-top: none; color: red;border-bottom: none;border-right: none;">***Booking Amount 21,000/-</td>
            <td  style="border: 1px  black;border-top: none; color: red;border-bottom: none;border-left: none;">-</td>
            <td colspan="3" style="border: 1px solid black;border-top: none; color: red;border-bottom: none;border-left: none;">No work will start***</td>
        </tr>
        <tr >
            <td colspan="3" style="border: 1px solid black;border-top: none; color: red;border-bottom: none;border-right: none;">***Booking Amount 1,01,000/-</td>
            <td  style="border: 1px  black;border-top: none; color: red;border-bottom: none;border-left: none;">-</td>
            <td colspan="3" style="border: 1px solid black;border-top: none; color: red;border-bottom: none;border-left: none;">Only Concept plan will be given***</td>
        </tr>
        <tr>
            <td colspan="3" style="border: 1px solid black;border-top: none; color: red;border-bottom: none;border-right: none;">***Booking Amount 1,51,000/-</td>
            <td  style="border: 1px  black;border-top: none; color: red;border-bottom: none;border-left: none;">-</td>
            <td colspan="3" style="border: 1px solid black;border-top: none; color: red;border-bottom: none;border-left: none;">Concept plan & map approval work***</td>
        </tr>
        <tr >
            <td style="border: 1px solid black;border-top: none; color: red;text-align:center;border-bottom: none;" colspan="6"><Span class="text-danger">**Elevation, 3D and VR work will start only after agreement signing with UK Concept Designer**</Span></td>
        </tr>
        <tr>
            <td style="border: 1px solid black;border-top: none; color: black;text-align:left;border-bottom:  1px solid black;;" colspan="6"><Span class="text-danger">Note - Any Meetings related to design will be held in office only.</Span></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2">Client Sign.</td>
            <td colspan="2"></td>
            <td colspan="2">Employee Sign.</td>
        </tr>
        
    </table>
<!--------------------------------End of Page 2---------------------------->
<!-------------------------------Start of Page 2---------------------------->   
<h4 style="text-align: center;text-decoration:underline;font-weight:bold; color: #577D86;">List of Document submitted</h4> 
<p style="text-decoration:underline;">Documents:</p>
            <ul>
            <?php
                if($attach_doc[0]->chk_adhar_copy == "yes")
                {
                    echo '<li>Aadhar Card Copy</li>';                   
                }
                if($attach_doc[0]->chk_pancard_copy == "yes")
                {
                    echo '<li>Pan Card Copy</li>';
                }
                if($attach_doc[0]->chk_electric_bill == "yes")
                {
                    echo '<li>Latest Electricity Bill Copy</li>';
                }
                if($attach_doc[0]->chk_registry_copy == "yes")
                {
                    echo '<li>Pan Card Copy</li>';
                }
                if($attach_doc[0]->chk_b_one_copy == "yes")
                {
                    echo '<li>Latest B-One</li>';
                }
                if($attach_doc[0]->chk_khasra_map == "yes")
                {
                    echo '<li>Khasra Map</li>';
                }
                if($attach_doc[0]->chk_approved_tncp == "yes")
                {
                    echo '<li>Approved Map TNCP/ Municipal Corportion</li>';
                }
                if($attach_doc[0]->chk_tax_receipt == "yes")
                {
                    echo '<li>Property Tax Receipt</li>';
                }
                if($attach_doc[0]->chk_any_other == "yes")
                {
                    echo '<li>Any Other('.$attach_doc[0]->other_name .')</li>';
                }                       
                ?>      
        </ul>
<hr>
<newpage>
<h4 style="text-align: center;text-decoration:underline;font-weight:bold; color: #577D86;">Commitment we provide:</h4>
<table class="table table-borderless table-nowrap" style="width:100%; margin-left: 20px;">
        <tr >
            <td colspan="3" style="color: black;">Agreement Date: <?php if($commitment[0]->aggr_period){ echo date("d-M-Y", strtotime($commitment[0]->aggr_period)); } ?></td>
            <td colspan="3" style="color: black;"></td>
            <td colspan="3" style="color: black;">Completion Date: <?php if($commitment[0]->comp_period){ echo date("d-M-Y", strtotime($commitment[0]->comp_period)); } ?></td>
        </tr>
        <tr>
        <td colspan="" style="color: black;">Work Start Date: <?php if($commitment[0]->comp_period){ echo date("d-M-Y", strtotime($commitment[0]->work_start_on)); } ?></td>
        </tr>
</table>

<ul>
 <?php
    $chk_commit = $commitment[0]->commitment;
    $chk_arr = explode(",", $chk_commit);
    $CI = & get_instance();

    if($chk_arr){
            foreach($chk_arr as $key=>$c_id){ 
            $commitment = $CI->Master_model->getNameById("bkf_commitment_list","commitment",$c_id);
            echo '<li>'.$commitment.'</li>';
        } 
    }
 ?>
</ul>
<br>
<p> <span style="text-decoration:underline;"> <b>Note</b> </span>  - (An OTP will be given to the client's mobile number WhatsApp by WhatsApp from the company's mobile number 0771-4088844. If the same OTP is with the company's employee, then only the client will give him any kind of payment, otherwise the entire responsibility of the payment will be on the client's own.)</p>

</body>
</html>