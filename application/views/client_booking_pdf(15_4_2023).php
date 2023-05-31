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
 
?>
<html>

<body>
<h4 style="color: black; font-family: poppins; text-decoration: underline; text-align:left;">Date: <?php echo $client_info[0]->create_date ?></h4>
<h2 style="color: black; font-family: poppins; text-decoration: underline;text-align: center;">Booking Form</h2>
    <table class="table table-borderless table-nowrap" style="width:100%;">
        <tr style="text-decoration:underline;">
            <td colspan="3">Date of booking</td>
            <td colspan="3">Employee Name: <?php echo $client_info[0]->create_by ?? ""; ?></td>
        </tr>
        <tr>
            <td colspan="5">
            <hr style="border-top: 1px solid black;">
            </td>
        </tr>
        <tr >
            <td colspan="3"><b style="text-decoration:underline;">Client Name : </b> <span><?php echo $client_info[0]->client_name ?? ""; ?></span></td>
            <td colspan="3"> <b style="text-decoration:underline;"> Father/Spouse Name :</b><span> <?php echo $client_info[0]->spouse_name ?? ""; ?></span> </td>
        </tr>
        <tr>
        <td colspan="2"> <b style="text-decoration:underline;">Age :</b><span> <?php echo $client_info[0]->age ?? ""; ?></span> </td>
        <td colspan="2"><b style="text-decoration:underline;">Gender :</b> <span> <?php echo $client_info[0]->gender ?? ""; ?></span></td>
        <td colspan="2"><b style="text-decoration:underline;">Occupation :</b><span> <?php echo $client_info[0]->occupation ?? ""; ?></span> </td>
        </tr>
        <tr style="text-decoration:underline;">
           <td colspan="6"><b>Permanent Address</b> </td>
        </tr>
        <tr >
            <td colspan="2">House No.: <span><?php echo $permanent_addr_arr['p_hno']; ?></span></td>
            <td colspan="2">Street/Colony :<span><?php echo $permanent_addr_arr['p_street']; ?></span></td>
            <td colspan="2">Landmark :<span><?php echo $permanent_addr_arr['p_landmark']; ?></span></td>
        </tr>
        <tr>
            <td colspan="2">City :<span><?php echo $permanent_addr_arr['p_city']; ?></span></td>
            <td colspan="2">State :<span><?php echo $permanent_addr_arr['p_state']; ?></span></td>
            <td colspan="2">Pin-Code :<span><?php echo $permanent_addr_arr['p_pincode']; ?></span></td>
        </tr>
        <tr style="text-decoration:underline;">
           <td colspan="6"> <b style="text-decoration:underline;">Present Address</b></td>
        </tr>
        <tr>
            <td colspan="2">House No. :<span><?php echo $present_addr_arr['r_hno']?></span></td>
            <td colspan="2">Street/Colony :<span><?php echo $present_addr_arr['r_street']?></span></td>
            <td colspan="2">Landmark :<span><?php echo $present_addr_arr['r_landmark']?></span></td>
        </tr>
        <tr style="text-decoration:underline;">
            <td colspan="2">City :<span><?php echo $present_addr_arr['r_city']?></span></td>
            <td colspan="2">State :<span><?php echo $present_addr_arr['r_state']?></span></td>
            <td colspan="2">Pin-Code :<span><?php echo $present_addr_arr['r_pincode']?></span></td>
        </tr>
        <tr style="text-decoration:underline;">
           <td colspan="6"><b style="text-decoration:underline;">Office Address</b></td>
        </tr>
        <tr>
            <td colspan="2">House No. :<span><?php echo $office_addr_arr['o_hno']?></span></td>
            <td colspan="2">Street/Colony :<span><?php echo $office_addr_arr['o_street']?></span></td>
            <td colspan="2">Landmark :<span><?php echo $office_addr_arr['o_landmark']?></span></td>
        </tr>
        <tr>
            <td colspan="2">City :<span><?php echo $office_addr_arr['o_city']?></span></td>
            <td colspan="2">State :<span><?php echo $office_addr_arr['o_state']?></span></td>
            <td colspan="2">Pin-Code :<span><?php echo $office_addr_arr['o_pincode']?></span></td>
        </tr>
        <tr>
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">Mobile Number :</b><span> <?php echo $client_info[0]->mobile_no ?? ""; ?></span></td>
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">PAN No. :</b><span> <?php echo $client_info[0]->pan_no ?? ""; ?></span></td>
        </tr>
        <tr>
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">Addhar No. :</b> <span><?php echo $client_info[0]->aadhar_no ?? ""; ?></span></td>
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">Email :</b> <span><?php echo $client_info[0]->email_id ?? ""; ?></span></td>
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
            <td colspan="3"> <b style="text-decoration:underline;text-decoration:underline;">Name (Decision Marker) :</b><span><?php echo $dec_maker[0]->d_name; ?></span> </td>
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">Relation :</b><span><?php echo $dec_maker[0]->d_relation; ?></span></td>
        </tr>
        <tr >
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">Mobile No. :</b><Span><?php echo $dec_maker[0]->d_mobile_no; ?></Span></td>
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">Email :</b><span><?php echo $dec_maker[0]->d_email_id; ?></span></td>
        </tr>
        <tr >
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">Aadhaar No. :</b><Span><?php echo $dec_maker[0]->d_aadhar_no; ?></Span></td>
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">PAN No. :</b><span><?php echo $dec_maker[0]->d_pan_no; ?></span></td>
        </tr>
        <tr >
           <td colspan="6"><b>Address</b></td>
        </tr>
        <tr>
            <td colspan="2">House No. : <span><?php echo $d_addr_arr['d_hno']?></span></td>
            <td colspan="2">Street/Colony : <Span><?php echo $d_addr_arr['d_street']?></Span></td>
            <td colspan="2">Landmark : <span><?php echo $d_addr_arr['d_landmark']?></span></td>
        </tr>
        <tr>
            <td colspan="2">City : <span><?php echo $d_addr_arr['d_city']?></span></td>
            <td colspan="2">State : <span><?php echo $d_addr_arr['d_state']?></span></td>
            <td colspan="2">Pin-Code : <span><?php echo $d_addr_arr['d_pincode']?></span></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr >
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">Name (Payee) :</b> <span><?php echo $payee[0]->payee_name; ?></span></td>
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">Relation :</b><span><?php echo $payee[0]->p_relation; ?></span></td>
        </tr>
        <tr >
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">Mobile No. :</b><span><?php echo $payee[0]->p_mobile_no ?></span></td>
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">Email :</b><span><?php echo $payee[0]->p_email_id; ?></span></td>
        </tr>
        <tr >
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">Aadhaar No. :</b><span><?php echo $payee[0]->p_aadhar_no ?></span></td>
            <td colspan="3"><b style="text-decoration:underline;text-decoration:underline;">PAN No. :</b><span><?php echo $payee[0]->p_pan_no; ?></span></td>
        </tr>
        <tr style="text-decoration:underline;">
           <td colspan="6"> <b>Address</b> </td>
        </tr>
        <tr>
            <td colspan="2">House No. : <span><?php echo $p_addr_arr['p_hno']?></span></td>
            <td colspan="2">Street/Colony : <span><?php echo $p_addr_arr['p_street']?></span></td>
            <td colspan="2">Landmark : <Span><?php echo $p_addr_arr['p_landmark']?></Span></td>
        </tr>
        <tr>
            <td colspan="2">City : <Span><?php echo $p_addr_arr['p_city']?></Span></td>
            <td colspan="2">State : <Span><?php echo $p_addr_arr['p_state']?></Span></td>
            <td colspan="2">Pin-Code : <Span><?php echo $p_addr_arr['p_pincode']?></Span></td>
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
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Lum-sum amount</b><span> <?php echo $trans_detail[0]->final_amt; ?></span></td>
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;"></td>
            <td colspan="2">In Words(:<span> <?php echo $trans_detail[0]->final_amt_in_word; ?></span></td>
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
            <td colspan="2"><b style="text-decoration:underline;text-decoration:underline;">Depth of plot from road level :</b><span> <?php echo $plot_detail[0]->plot_depth; ?> </span></td>
        </tr>
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
        <tr >
            <td style="border: 1px solid black;border-bottom: none;text-decoration:underline; text-align:center;" colspan="6">Only For Individual Bungalows</td>
        </tr>
        <tr >
            <td style="border: 1px solid black;border-top: none; color: red;text-align:center;border-bottom: none;" colspan="6"><Span class="text-danger">**Any work on site will start only after receiving the 25% amount of total contract value**</Span></td>
        </tr>
        <tr >
            <td colspan="3" style="border: 1px solid black;border-top: none; color: red;border-bottom: none;border-right: none;">***Booking Amount 21,000/-</td>
            <td  style="border: 1px  black;border-top: none; color: red;border-bottom: none;border-left: none;">-</td>
            <td colspan="3" style="border: 1px solid black;border-top: none; color: red;border-bottom: none;border-left: none;">No work will start***</td>
        </tr>
        <tr >
            <td colspan="3" style="border: 1px solid black;border-top: none; color: red;border-bottom: none;border-right: none;">***Booking Amount 1,01,000/-</td>
            <td  style="border: 1px  black;border-top: none; color: red;border-bottom: none;border-left: none;">-</td>
            <td colspan="3" style="border: 1px solid black;border-top: none; color: red;border-bottom: none;border-left: none;">Only Concept plan will be given***</td>
        </tr>
        <tr >
            <td colspan="3" style="border: 1px solid black;border-top: none; color: red;border-bottom: none;border-right: none;">***Booking Amount 1,51,000/-</td>
            <td  style="border: 1px  black;border-top: none; color: red;border-bottom: none;border-left: none;">-</td>
            <td colspan="3" style="border: 1px solid black;border-top: none; color: red;border-bottom: none;border-left: none;">Concept plan & map approval work***</td>
        </tr>
        <tr >
            <td style="border: 1px solid black;border-top: none; color: red;text-align:center;border-bottom: none;" colspan="6"><Span class="text-danger">**Elevation, 3D and VR work will start only after agreement signing with UK Concept Designer**</Span></td>
        </tr>
        <tr >
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
<h4 style="text-align:center;color:red;">List of Document submitted</h4> 
<p style="text-decoration:underline;">Client:</p>
<ul>
    <li>Aadhar Card</li>
    <li>Property tax receipt</li>
    <li>Latest BI</li>
    <li>Khasra map</li>
    <li>PAN card copy</li>
    <li>Latest Electricity bill copy</li>
</ul>
<br>
<p> <span style="text-decoration:underline;"> <b>Note</b> </span>  - (An OlP will be given to the client's mobile number WhatsApp by WhatsApp from the company's mobile number 0771-4088844. If the same OTP is with the company's employee, then only the client will give him any kind of payment, otherwise the entire responsibility of the payment will be on the client's own.)</p>

<table class="table table-border table-nowrap" style="width:100%;">
    <tr>
        <td colspan="2" style="text-decoration:underline;"><b>Company Account details</b></td>
        <td colspan="2"></td>
        <td colspan="2"  style="text-decoration:underline;"><b>QR Code</b> </td>
    </tr>
    <tr>
    <td colspan="2">A/c no 50200011762575</td>
        <td colspan="2">Uk Concep designer</td>
        <td colspan="2" rowspan="4" > <img src="images/qr.png" heigt="100px" width="100px" alt=""></td>
    </tr>
    <tr>
    <td colspan="2">UK Concept designer</td>
        <td colspan="2">A/c no. 016105009560</td>
    </tr>
    <tr>
    <td colspan="2">ifs code - hdfc0003687</td>
        <td colspan="2">ifc Code- ICIC0000161</td>
    </tr>
    <tr>
    <td colspan="2">Hdfc bank</td>
        <td colspan="2">Branch Raipur</td>
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
</body>
</html>