<?php 

$booking_timer = $client_info[0]->booking_timer;
$curr_date = date("Y-m-d H:i:s");

$encode_data = $this->uri->segment(3);

if($curr_date > $booking_timer){
  redirect('/welcome/expired_link/'.$encode_data, 'refresh');
}


 $permanent_addr_arr = json_decode($client_info[0]->permanent_addr, true);
 $permanent_addr = implode(", ", $permanent_addr_arr);

  //print_r($permanent_addr_arr);

 $present_addr_arr = json_decode($client_info[0]->present_addr, true);
 $present_addr = implode(", ", $present_addr_arr);

 $office_addr_arr = json_decode($client_info[0]->office_addr, true);
 $office_addr = implode(", ", $office_addr_arr);

 $d_addr_arr = json_decode($dec_maker[0]->d_addr, true);
 $d_addr = implode(", ", $d_addr_arr);

 $p_addr_arr = json_decode($payee[0]->p_addr, true);
 $p_addr = implode(", ", $p_addr_arr);
 

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <title>Welcome:- UKConcept Designer, Raipur</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/fontawesome.css">   
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/templatemo-digimedia-v3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/animated.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/owl.css">

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->  
  <!-- ***** Header Area Start ***** -->
  <header class="header-area sticky wow ">
    <div class="container">
      <div class="row">
        <div class="col-5">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <center><a href="index.html" class="logo">
              <img src="<?php echo base_url();?>assets/images/logo2.jpg" width="200px" alt="">
            </a></center>     
          </nav>    
        </div>  
         
      </div>
    </div>  
  </header>
  <!-- ***** Header Area End ***** -->

  <!--------Personal Information Details Section------->
  
  <div class="main-banner wow " id="top" >
  <center><p style="color: #4DA6E7; font-weight: 400; margin-top: 35px; font-size: small; line-height: 17px;">Confrm and pay your booking Amount, to alive your offer within <br><small id="demo" style="color: red;font-size: 15px;"></small> Days </p></center>
    <div class="container">
      <div class="row">
        <center><div class="col-lg-12">
            <span style="text-align: center; color: #4DA6E7;font-weight: 800;">Personal Information</span>
            <a href="<?php echo base_url();?>" data-bs-toggle="modal" data-bs-target="#zoomInModal"><i class="fa fa-pencil-square-o" aria-hidden="true" style="margin-left: 10px; color: #4DA6E7;"  ></i></a>
            <div class="line-dec"></div>
        </div></center>
        
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center">
              <div class="left-content show-up header-text wow ">
                <div class="row">
                  <div class="col-lg-12" style="margin-top: 30px;">
                  <h4><span style="color: #4DA6E7; font-size: medium; font-weight: bold; text-decoration: underline;"><?php echo $client_info[0]->client_name ?? ""; ?> </span> &nbsp; <span style="font-size: small;">S/o: <?php echo $client_info[0]->spouse_name ?? ""; ?></span></h4> 
                      <div>
                        <span style="font-size: small;"><?php echo $client_info[0]->email_id ?? ""; ?></span>
                        <span style="font-size: small;margin-left: 30px;"><?php echo $client_info[0]->mobile_no ?? ""; ?></span>
                        <span style="font-size: small;margin-left: 30px;">Gender: <?php echo $client_info[0]->gender ?? ""; ?></span>
                        <span style="font-size: small;margin-left: 30px;">Age: <?php echo $client_info[0]->age ?? ""; ?></span>
                        <span style="font-size: small;margin-left: 30px;">Pan: <?php echo $client_info[0]->pan_no ?? ""; ?></span>
                        <span style="font-size: small;margin-left: 30px;">Adhaar: <?php echo $client_info[0]->aadhar_no ?? ""; ?></span>                    
                      </div>
                      <div class="mt-3">
                        <span style="font-size: small;font-weight: bold;color: #4DA6E7;">Permanent Address</span> <a href="<?php echo base_url();?>" data-bs-toggle="modal" data-bs-target="#zoomInModal1"><i class="fa fa-pencil-square-o" aria-hidden="true" style="margin-left: 100px; color: #4DA6E7;"  ></i></a> <br>
                        <span style="font-size: small;"><?php echo $permanent_addr; ?></span>
                      </div> 
                      <div class="mt-3">
                          <span style="font-size: small;font-weight: bold;color: #4DA6E7;">Present Address</span> <a href="<?php echo base_url();?>" data-bs-toggle="modal" data-bs-target="#zoomInModal2"><i class="fa fa-pencil-square-o" aria-hidden="true" style="margin-left: 100px; color: #4DA6E7;"  ></i></a>  <br> 
                          <span style="font-size: small;"><?php echo $present_addr; ?></span>
                      </div>
                      <div class="mt-3">
                        <span style="font-size: small;font-weight: bold;color: #4DA6E7;">Office Address</span> <a href="<?php echo base_url();?>" data-bs-toggle="modal" data-bs-target="#zoomInModal3"><i class="fa fa-pencil-square-o" aria-hidden="true" style="margin-left: 100px; color: #4DA6E7;"  ></i></a>  <br>
                        <span style="font-size: small;"><?php echo $office_addr; ?></span>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!----end of Personal Information Details Section------>
  <hr style="border-top: 1px dashed #4DA6E7">

   <!------Decision maker Details Section------->
   <div id="Decision Maker" class="about section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <center><div class="col-lg-12">
                <span style="text-align: center; color: #4DA6E7;font-weight: 800;">Decision Maker</span>
                <a href="<?php echo base_url();?>" data-bs-toggle="modal" data-bs-target="#zoomInModaldecisionmaker"><i class="fa fa-pencil-square-o" aria-hidden="true" style="margin-left: 10px; color: #4DA6E7;"  ></i></a> 
                <div class="line-dec"></div>
            </div></center>
            <div class="col-lg-12 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div>
                  <span style="font-weight: 700; font-size: medium; text-decoration: underline;color: #4DA6E7;"><?php echo $dec_maker[0]->d_name; ?></span>
                  &nbsp; &nbsp; <span style="font-size: small;">Relation: <?php echo $dec_maker[0]->d_relation; ?></span>
                </div>
                <div>
                  <span style="font-size: small;"><?php echo $dec_maker[0]->d_email_id; ?></span>
                  <span style="font-size: small;margin-left: 30px;"><?php echo $dec_maker[0]->d_mobile_no; ?></span>  
                  <span style="font-size: small;margin-left: 30px;">Pan: <?php echo $dec_maker[0]->d_pan_no; ?></span>
                  <span style="font-size: small;margin-left: 30px;">Adhaar: <?php echo $dec_maker[0]->d_aadhar_no; ?></span>                    
                </div>     
                <div class="mt-3">
                  <span style="font-size: small;font-weight: bold;color: #4DA6E7;;"> Address</span><br>
                  <span style="font-size: small;"><?php echo $d_addr; ?></span>
                </div>              
              </div>
            </div>    
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-----End of Decision Maker Details Sections-->
  <hr style="border-top: 1px dashed #4DA6E7">


  <!----Payee Section---->
  <div id="payee" class="about section">
    <div class="container">
      <center>
            <div class="col-lg-12">
              <span style="text-align: center; color: #4DA6E7;font-weight: 800;">Payee</span>
              <a href="" data-bs-toggle="modal" data-bs-target="#zoomInModalpayee">
                  <i class="fa fa-pencil-square-o" aria-hidden="true" style="margin-left: 10px; color: #4DA6E7;"></i>
              </a>
            </div>
      </center> 
      <div class="row">
        <div class="col-lg-12">
          <div class="row">    
            <div class="col-lg-12 align-self-center  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div>
                  <span style="font-weight: 700; font-size: medium; color: #4DA6E7; text-decoration: underline;"><?php echo $payee[0]->payee_name; ?></span>
                  &nbsp; &nbsp; <span style="font-size: smaller;">Relation:  <?php echo $payee[0]->p_relation; ?></span>
                </div>
                <div>
                  <span style="font-size: small;"><?php echo $payee[0]->p_email_id; ?></span>
                  <span style="font-size: small;margin-left: 30px;"><?php echo $payee[0]->p_mobile_no; ?></span>    
                  <span style="font-size: small;margin-left: 30px;">Pan: <?php echo $payee[0]->p_pan_no; ?></span>
                  <span style="font-size: small;margin-left: 30px;">Adhaar: <?php echo $payee[0]->p_aadhar_no; ?></span>                    
                </div>     
                <div class="mt-3">
                  <span style="font-size: small;font-weight: bold;color: #4DA6E7;;"> Address</span><br>
                  <span style="font-size: small;"><?php echo $p_addr;?></span>
                </div>
                
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---End of Payee Section--->
  <hr style="border-top: 1px dashed #4DA6E7">

  <!---Transaction Section--->
  <div id="Transaction" class="about section">
    <div class="container">
      <div class="row">
      <center><div class="col-lg-12">
            <span style="text-align: center; color: #4DA6E7;font-weight: 800;">Transaction Details</span>
            
        </div></center>
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div style="margin-top: 20px;">
                  <span style="font-weight: 700; font-size: medium; text-decoration: underline;color: #4DA6E7;">Amount:  Rs. <?php echo $trans_detail[0]->final_amt ?? "NA";; ?></span>
                  &nbsp; &nbsp;&nbsp;<span style="color: #4DA6E7;font-size: small;">( <?php echo $trans_detail[0]->final_amt_in_word ?? "NA";; ?> )</span>  
                </div>
                <div>
                  <span style="font-size: small;">Offer: Rs. <?php echo $trans_detail[0]->offer_amt ?? "NA"; ?></span> 
                  <span style="font-size: small;margin-left: 30px;">Quotation:  <?php echo $trans_detail[0]->quotation_type ?? "NA"; ?></span>
                  <span style="font-size: small;margin-left: 30px;">Discounted Rate:  <?php echo $trans_detail[0]->final_rate ?? "NA"; ?></span>                
                  <span style="font-size: small;margin-left: 30px;">Booking Amount: <span class="text-danger">(Non- Refundable):</span> Rs. <?php echo $trans_detail[0]->paid_booking_amt ?? "NA";; ?></span> <br> 
                                
                </div>     
                <div class="mt-1">
                  <span style="font-size: small;">Funding Mode: </span><span style="font-size: small;"><?php echo $trans_detail[0]->funding_mode ?? "NA"; ?></span>
                  <span style="font-size: small;margin-left: 30px;">Self Amount: <span style="font-size: small;">Rs. <?php echo $trans_detail[0]->self_amt ?? "NA";; ?></span>
                  <span style="font-size: small;margin-left: 30px;">Bank Name: <span style="font-size: small;"><?php echo $trans_detail[0]->bank_name ?? "NA";; ?></span>
                  <span style="font-size: small;margin-left: 30px;">Loan Amount:</span> <span style="font-size: small;">Rs. <?php echo $trans_detail[0]->loan_amt ?? "NA";; ?></span>
                  <span style="font-size: small;margin-left: 30px;">Loan Account: <span style="font-size: small;"><?php echo $trans_detail[0]->loan_acc_no ?? "NA";; ?></span>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---End of Transaction Section----->
  <hr style="border-top: 1px dashed #4DA6E7">

  <!--Plot Details Section Start---->
  <div id="plot_details" class="about section">
    <div class="container">
      <div class="row">
      <center><div class="col-lg-12">
            <span style="text-align: center; color: #4DA6E7;font-weight: 800;">Plot Details</span>
            
            <div class="line-dec"></div>
        </div></center>
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12 align-self-center  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">
                <div class="section-heading">
                  <span>Plot Details</span>     
                  <div class="line-dec"></div>
                </div>
                <div style="margin-top: 20px;">
                  <span style="font-weight: 300; font-size: small; color: black; text-decoration: underline;"><?php echo $plot_detail[0]->plot_location ?? "NA"; ?></span>         
                </div>
                <div>
                  <span style="font-size: small;">Plot No.: <?php echo $plot_detail[0]->plot_no ?? "NA"; ?></span>
                  <span style="font-size: small;margin-left: 30px;">Plot Size : <?php echo $plot_detail[0]->plot_size ?? "NA"; ?> sqft</span>
                  <span style="font-size: small;margin-left: 30px;">Plot Facing: <?php echo $plot_detail[0]->plot_facing ?? "NA"; ?></span>  
                  <span style="font-size: small;margin-left: 30px;">Depth (from plint): <?php echo $plot_detail[0]->plot_depth ?? "NA"; ?> ft</span>              
                </div>     
                
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!---End of Plot Section Details---->
  <hr style="border-top: 1px dashed #4DA6E7">

  <!-----Files Details Section---->
  <div id="Files" class="about section">
    <div class="container">
      <div class="row">
        <center>
          <div class="col-lg-12">
              <span style="text-align: center; color: #4DA6E7;font-weight: 800;">Attached Document</span>

              <div class="line-dec"></div>
          </div>
        </center>
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="<?php echo base_url();?>assets2/images/transaction_vector.png" alt="">
              </div>
            </div>
            <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="about-right-content">   
                <div>                  
                </div>
                  <div class="ticks-list">
                  <?php
                  if($attach_doc[0]->chk_adhar_copy == "yes")
                  {
                    $adhar_copy = base_url("assets/uploads/".$attach_doc[0]->adhar_copy);
                    ?>
                    <a href="<?php echo $adhar_copy;?>"  download>
                        <i style="color: #4DA6E7;" class="fa fa-check"></i> Aadhar Card </a> 
                    <?php 
                  }
                  if($attach_doc[0]->chk_pancard_copy == "yes")
                  { 
                     $pancard_copy = base_url("assets/uploads/".$attach_doc[0]->pancard_copy);  
                  ?>
                    <a href="<?php echo $pancard_copy;?>" style="margin-left: 60px;" download>
                      <i style="color: #4DA6E7;" class="fa fa-check"></i> PAN Card</a> <br>
                  <?php 
                  }
                  if($attach_doc[0]->chk_electric_bill == "yes")
                  { 
                    $electric_bill = base_url("assets/uploads/".$attach_doc[0]->electric_bill);
                  ?> 
                    <a href="<?php echo $electric_bill;?>" style="margin-left: 60px;"  download>
                    <i style="color: #4DA6E7;" class="fa fa-check"></i> Electricity Bill</a> 
                  <?php 
                  }
                  if($attach_doc[0]->chk_registry_copy == "yes")
                  { 
                    $registry_copy = base_url("assets/uploads/".$attach_doc[0]->registry_copy);
                  ?>
                    <a href="<?php echo $registry_copy;?>" style="margin-left: 60px;" download>
                    <i style="color: #4DA6E7;" class="fa fa-check"></i> Registry Copy</a> 
                  <?php 
                  }
                  if($attach_doc[0]->chk_b_one_copy == "yes")
                  { 
                    $b_one_copy = base_url("assets/uploads/".$attach_doc[0]->b_one_copy);
                  ?>
                    <a href="<?php echo $b_one_copy;?>" style="margin-left: 60px;"  download>
                    <i style="color: #4DA6E7;" class="fa fa-check"></i> Latest B-ONE Copy</a> <br>
                  <?php 
                  }
                  if($attach_doc[0]->chk_khasra_map == "yes")
                  {
                    $khasra_map = base_url("assets/uploads/".$attach_doc[0]->khasra_map);
                  ?> 
                    <a href="<?php echo $khasra_map;?>" style="margin-left: 60px;" download>
                    <i style="color: #4DA6E7;" class="fa fa-check"></i> Khasra Copy</a> 
                  <?php 
                  }

                  if($attach_doc[0]->chk_approved_tncp == "yes")
                  { 
                    $approved_tncp = base_url("assets/uploads/".$attach_doc[0]->approved_tncp);
                  ?>
                    <a href="<?php echo $approved_tncp;?>" style="margin-left: 60px;" download>
                    <i style="color: #4DA6E7;" class="fa fa-check"></i> Map TNCP/Municipal</a> 
                  <?php 
                  }

                  if($attach_doc[0]->chk_tax_receipt == "yes")
                  { 
                    $tax_receipt = base_url("assets/uploads/".$attach_doc[0]->tax_receipt);
                  ?> 
                    <a href="<?php echo $tax_receipt;?>" style="margin-left: 60px;" download>
                    <i style="color: #4DA6E7;" class="fa fa-check"></i> TAX Receipt </a> 
                  <?php 
                  }
                  if($attach_doc[0]->chk_any_other == "yes")
                  { 
                    $any_other = base_url("assets/uploads/".$attach_doc[0]->any_other);
                  ?>
                    <a href="<?php echo $any_other;?>" style="margin-left: 60px;" download>
                    <i style="color: #4DA6E7;" class="fa fa-check"></i> Other Documents</a> 
                  <?php 
                   }
                  ?>
              </div>
            </div>
          </div>
        </div>
        <form id="frmReview">
            <div class="row" style="margin-top: 30px;">
              <h2 style="color: #4DA6E7; text-decoration: underline;font-weight: bold;text-align: center;">Commitment</h2>
                <span style="text-align: center;" class="mt-2">Here are the Commitment we provide from your side.</span>
            </div>
            <div class="row">
                <?php  
                
                $chk_commit = $commit[0]->commitment;
                $chk_arr = explode(",", $chk_commit);

                  $aggr_period = date("d M, Y", strtotime($commit[0]->aggr_period)) ?? "";
                  $comp_period = date("d M, Y", strtotime($commit[0]->comp_period)) ?? "";
                  $work_start_on = date("d M, Y", strtotime($commit[0]->work_start_on)) ?? "";
                  $sba_data = $commit[0]->sba ?? "";
                  $est_cost = $commit[0]->est_cost ?? "";

                  $CI = & get_instance();

                if($chk_arr){

                 foreach($chk_arr as $key=>$c_id){
                            
                    $commitment = $CI->Master_model->getNameById("bkf_commitment_list","commitment",$c_id);                                      
                  ?>
                <div class="col-lg-4 mt-3">
                  <span><i style="color: #4DA6E7;" class="fa fa-check"></i>&nbsp;<?php echo $commitment; ?></span>
                </div>
                <?php } }?>
                
                <div class="col-lg-4 mt-2">
                  <span><i style="color: #4DA6E7;" class="fa fa-check"></i> &nbsp;Agreement Period: <?php echo $aggr_period;?></span>
                </div>
                <div class="col-lg-4 mt-2">
                  <span><i style="color: #4DA6E7;" class="fa fa-check"></i> &nbsp;Project Completion Period: <?php echo $comp_period;?></span>
                </div>
                <div class="col-lg-4 mt-2">
                  <span><i style="color: #4DA6E7;" class="fa fa-check"></i> &nbsp;Work on Site: <?php echo $work_start_on;?></span>
                </div>
                <div class="col-lg-4 mt-2">
                  <span><i style="color: #4DA6E7;" class="fa fa-check"></i> &nbsp;Super Build-up area: <?php echo $sba_data;?> Sqft.</span>
                </div>
                <div class="col-lg-4 mt-2">
                  <span><i style="color: #4DA6E7;" class="fa fa-check"></i> &nbsp;Estimate Cost: <?php echo number_format($est_cost);?> </span>
                </div>

            </div>
            <div class="col-sm-6 mt-3">
              <input type="Checkbox" style="width: 15px; height: 15px;" id="chk_accept" name="chk_accept" value="">
              <label for="chk_accept" style="color: #4DA6E7;font-weight: bold;">&nbsp;Accept this if you satisfy with commitment.</label>
            </div>

          <!-----Payment Mode Start------------>
     
      <div class="my-2">
          <div id="payment_mode" style="display:none;">
              <label for="" style="font-weight: bold; color: #4DA6E7;" class="mt-2">Payment Mode</label> 

              <div class="my-2">
                <div class="form-check form-check-inline">
                  <input type="radio" id="chk_upi" name="payment_mode" value="UPI/QR" name="radio1"  class="form-check-input">
                  <label for="chk_upi" class="form-check-label">UPI/QR Code</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" id="chk_card" name="payment_mode" value="Card/Link" class="form-check-input">
                  <label for="chk_card" class="form-check-label">Link/Card</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" id="chk_neft" name="payment_mode" value="NEFT/RTGS/IMPS" class="form-check-input">
                  <label for="chk_neft" class="form-check-label">NEFT/RTGS/IMPS</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" id="chk_cheque" name="payment_mode" value="Cheque" class="form-check-input">
                  <label for="chk_cheque" class="form-check-label">Cheque</label>
                </div>
                <!-------Qr Code----------->
                <center><div class="col-12 mt-3" id="upi_field" style="display:none;">
                  <span class="form-label" style="color: #4DA6E7;">QR Code</span>
                  <div class="col-5 mt-1">
                    <img src="<?php echo base_url();?>assets/images/qr-3,00,000.jpeg" alt="">
                  </div>
                  <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modalqr">
                   <i class="fa fa-search-plus"></i> Click here to zoom 
                  </a>
                </div></center>
                <!-------End of Qr Code----------->

                <!----------Link Section----------->
                <div class="col-12 mt-3" id="card_field" style="display:none;">
                  <span style="color: #4DA6E7;">Click the below button to make a payment</span>
                  <div class="col-12 mt-2">
                    <a href="https://tinyurl.com/2olo7rbw" target="_blank" class="btn btn-primary"> <i class="fa fa-credit-card" aria-hidden="true"></i>&nbsp;&nbsp;Rs. 3,00,000/- Pay Now <i class="fa fa-arrow-circle-right" aria-hidden="true" style="margin-left: 10px;"></i></a>
                  </div>
                </div>
                <!----------End of Link Section------------------->
                    
                <!--------Netbanking Section------->
                <div class="row gy-3 mt-2" id="neft_field" id="chk_neft" style="display:none;">
                  <span style="color: #4DA6E7;">Netbanking</span><br>
                  <div class="col-lg-12">
                    <div class="fill-form">
                      <div class="row">
                        <div class="col-lg-4 mt-2">
                          <div class="info-post">
                            <div class="icon">
                              <span>Account Holder Name: <span style=" color: #4DA6E7;">UK Concept Designer</span> </span><br>
                              <span>Bank Name: <span style="color: #4DA6E7;">HDFC Bank</span></span><br>
                              <span>Account Number: <span style="color: #4DA6E7;">50200011762575</span></span><br>
                              <span>IFSC Code: <span style="color: #4DA6E7;">HDFC0003687</span></span><br>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>                
                <!-----End of Netbanking Section-------->
                <!-------Enter Transaction Details------->
                <div class="col-md-6 mt-3"  id="trans_field" style="display:none;">
                    <span style="color: #4DA6E7;">Transection ID</span>
                    <input type="text" id="trans_id" name="trans_id" value="" class="form-control" placeholder="Enter Transaction Id" required>
                  </div>
                <!------End of Transaction Details-------->
                <!-----Cheque Section---->
                <div class="row gy-3" id="cheque_field" style="display:none;">
                  <span style="color: #4DA6E7;">Cheque No.</span>
                  <div class="col-6 mt-2">  
                    <input type="number" id="cheque_no" name="cheque_no" class="form-control" placeholder="Enter Cheque Number" required>
                  </div>            
                </div>   
                <!-----End of Cheque Section---->
                </div>  
                <!-----Start of Review Section---->
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="fill-form">
                        <div class="row">
                          <center> 
                            <div>
                                <div class="col-lg-12 mt-2">
                                  <h4 style="color: #4da6e7;text-decoration: underline;font-weight: bold;">Write Your Review</h4>
                                  <span class="mt-3">Write here for any Query. We will Sort it really soon.</span>
                                  <fieldset class="mt-3">
                                    <input type="hidden" id="bk_id" name="bk_id" value="<?php echo $client_info[0]->id ?? ""; ?>">    
                                    <textarea id="client_review" name="client_review" class="form-control" rows="8" cols="50" placeholder="Write Your Query Here" required></textarea>
                                  </fieldset>
                                </div>                
                                <div class="col-lg-3 mt-3">
                                  <button type="submit" id="btnReview" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                          </center>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!----End of Review Section------>        
        </form>
      </div>
          <!---Payment Mode end--------->
        
      </div>
      <div id="contact" class="contact-us section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <h6>Contact Us</h6>
                <h4>For Any Query</h4>
                <div class="line-dec"></div>
              </div>
            </div>
            <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="contact-dec">
                      <img src="<?php echo base_url();?>assets2/images/con_icon.png" alt="">
                    </div>
                  </div>
                  
                  <div class="col-lg-12">
                    <div class="fill-form">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="info-post">
                            <div class="icon">
                              <img src="<?php echo base_url();?>assets2/images/location-icon.png" alt="">
                              <a href="https://goo.gl/maps/v2wmMCcHegU6q8UaA">Office 441, 4th Floor, Magneto the Mall, Labhandi, Raipur (C.G.)</a>
                            </div>
                          </div>
                        </div> 
                        <div class="col-lg-4">
                          <div class="info-post">
                            <div class="icon">
                              <img src="<?php echo base_url();?>assets2/images/phone-icon.png" alt="">
                              <a href="tel: + 91 7880055446"> + 91 7880055446</a>,
                              <a href="tel:+91 0771-4088844">+91 0771-4088844</a><br><br>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="info-post">
                            <div class="icon">
                              <img src="<?php echo base_url();?>assets2/images/email.png" alt="">
                              <a href="mailto:info@ukcdesigner.in">info@ukcdesigner.in <br><br></a>
                            </div>
                          </div>
                        </div>                                
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!---End of Files Details Section------->
  <!----------------------Personal Modal-----------------------> 
  <div id="zoomInModal" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="zoomInModalLabel">Personal Details </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="frmClientInfo">
              <div class="row">
                <div class="col-xl-6 mt-2">                         
                  <input type="text" id="Client_name" value="<?php echo $client_info[0]->client_name ?? ""; ?> " name="client_name"  class="form-control" placeholder="Client Name">
                </div>
                <div class="col-xl-6 mt-2">                         
                  <input type="text" id="mobile_number" value="<?php echo $client_info[0]->mobile_no ?? ""; ?>" name="mobile_no"  class="form-control" placeholder="Mobile Number">
                </div>
                <div class="col-xl-6 mt-2">                         
                  <input type="text" id="Relaton" value="<?php echo $client_info[0]->spouse_name ?? ""; ?>" name="spouse_name"  class="form-control" placeholder="Enter Relation">
                </div>
                <div class="col-xl-6 mt-2">                          
                  <input type="email" id="emai" value="<?php echo $client_info[0]->email_id ?? ""; ?>" name="email_id"  class="form-control" placeholder="Enter Email">
                </div>
                <div class="col-xl-6 mt-2">                         
                  <input type="number" id="Relaton" value="<?php echo $client_info[0]->age ?? ""; ?>" name="age"  class="form-control" placeholder="Enter Age">
                </div>
                <div class="col-xl-6 mt-2">                         
                  <input type="text" id="gender" value=" <?php echo $client_info[0]->gender ?? ""; ?>" name="gender"  class="form-control" placeholder="Enter Gender">
                </div>
                <div class="col-xl-6 mt-2">                         
                  <input type="text" id="pan" value="<?php echo $client_info[0]->pan_no ?? ""; ?>" name="pan_no"  class="form-control" placeholder="Enter Pan Number">
                </div>
                <div class="col-xl-6 mt-2">                         
                  <input type="text" id="adhaar_card" value="<?php echo $client_info[0]->aadhar_no ?? ""; ?>" name="aadhar_no"  class="form-control" placeholder="Enter Adhaar Card">
                </div>           
              </div>
              <div class="modal-footer">
                <input type="hidden" name="booking_id" value="<?php echo $client_info[0]->id ?? ""; ?>">
                <input type="hidden" name="type" value="client_info">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btn_client" value="Calculate">Update Now</button>
              </div>
            </form>
          </div>
            
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->                                     
<!-------------------End of Personal Modal----------------->


<!-------------------Permanent Address ----------------------------> 
<div id="zoomInModal1" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="zoomInModalLabel">Permanent Address</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form id="frmPermanentAddr">                       
            <div class="row">
              <div class="col-xl-12">                         
                <input type="text" id="p_hno" name="p_hno" value="<?php echo $permanent_addr_arr['p_hno']?>"  class="form-control" placeholder="House Number">
              </div>
              <div class="col-xl-12 mt-2">                         
                <input type="text" id="p_street" name="p_street" value="<?php echo $permanent_addr_arr['p_street']?>"  class="form-control" placeholder="Street Number">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="p_landmark" name="p_landmark" value="<?php echo $permanent_addr_arr['p_landmark']?>"  class="form-control" placeholder="Enter Landmark">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="p_city" name="p_city" value="<?php echo $permanent_addr_arr['p_city']?>"  class="form-control" placeholder="Enter City">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="p_state" name="p_state" value="<?php echo $permanent_addr_arr['p_state']?>"  class="form-control" placeholder="Enter State">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="number" id="p_pincode" name="p_pincode" value="<?php echo $permanent_addr_arr['p_pincode']?>"   class="form-control" placeholder="Enter Pin Code">
              </div>                        
            </div>
            <div class="modal-footer">
                <input type="hidden" name="booking_id" value="<?php echo $client_info[0]->id ?? ""; ?>">
                <input type="hidden" name="type" value="permanent_addr">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btn_p_addr">Update Now</button>
            </div>                                               
          </form>
          </div>
          
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->                                     
<!-------------------Permanent Address ----------------->


<!-------------------Present Address ----------------------------> 
<div id="zoomInModal2" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="zoomInModalLabel">Permanent Address </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form id="frmPresentAddr">                       
            <div class="row">
              <div class="col-xl-12">                         
                <input type="text" id="r_hno" name="r_hno" value="<?php echo $present_addr_arr['r_hno']; ?>"  class="form-control" placeholder="House Number">
              </div>
              <div class="col-xl-12 mt-2">                         
                <input type="text" id="r_street" name="r_street" value="<?php echo $present_addr_arr['r_street']; ?>"  class="form-control" placeholder="Street Number">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="r_landmark" name="r_landmark" value="<?php echo $present_addr_arr['r_landmark']; ?>"  class="form-control" placeholder="Enter Landmark">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="r_city" name="r_city" value="<?php echo $present_addr_arr['r_city']; ?>"  class="form-control" placeholder="Enter City">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="r_state" name="r_state" value="<?php echo $present_addr_arr['r_state']; ?>"  class="form-control" placeholder="Enter State">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="number" id="r_pincode" name="r_pincode" value="<?php echo $present_addr_arr['r_pincode']; ?>"   class="form-control" placeholder="Enter Pin Code">
              </div>                        
            </div>
            <div class="modal-footer">
              <input type="hidden" name="booking_id" value="<?php echo $client_info[0]->id ?? ""; ?>">
              <input type="hidden" name="type" value="present_addr">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="btn_r_addr">Update Now</button>
            </div>                                                
          </form>
        </div>         
    </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
</div><!-- /.modal -->                                     
<!-------------------Permanent Address ----------------->


<!-------------------Office Address ----------------------------> 
<div id="zoomInModal3" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="zoomInModalLabel">Office Address </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form id="frmOfficeAddr">                       
            <div class="row">
              <div class="col-xl-12">                         
                <input type="text" id="o_hno" name="o_hno" value="<?php echo $office_addr_arr['o_hno']?>"  class="form-control" placeholder="House Number">
              </div>
              <div class="col-xl-12 mt-2">                         
                <input type="text" id="o_street" name="o_street" value="<?php echo $office_addr_arr['o_street']?>"  class="form-control" placeholder="Street Number">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="o_landmark" name="o_landmark" value="<?php echo $office_addr_arr['o_landmark']?>"  class="form-control" placeholder="Enter Landmark">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="o_city" name="o_city" value="<?php echo $office_addr_arr['o_city']?>"  class="form-control" placeholder="Enter City">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="o_state" name="o_state" value="<?php echo $office_addr_arr['o_state']?>"  class="form-control" placeholder="Enter State">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="number" id="o_pincode" name="o_pincode" value="<?php echo $office_addr_arr['o_pincode']?>"   class="form-control" placeholder="Enter Pin Code">
              </div>                        
            </div>

            <div class="modal-footer">
              <input type="hidden" name="booking_id" value="<?php echo $client_info[0]->id ?? ""; ?>">
              <input type="hidden" name="type" value="office_addr">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="btn_o_addr">Update Now</button>
            </div>
          </form>
          </div>
          
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->                                     
<!-------------------Office Address ----------------->


  <!----------------------Decision Maker Modal-----------------------> 
  <div id="zoomInModaldecisionmaker" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="zoomInModalLabel">Decision Maker Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="frmDecmaker">
              <div class="row">
                <div class="col-xl-6 mt-2">                         
                  <input type="text" id="d_name" name="d_name" value="<?php echo $dec_maker[0]->d_name; ?>"  class="form-control" placeholder="Decision Name">
                </div>
                <div class="col-xl-6 mt-2">                         
                  <input type="text" id="d_mobile_no" name="d_mobile_no" value="<?php echo $dec_maker[0]->d_mobile_no; ?>"  class="form-control" placeholder="Mobile Number">
                </div>               
                <div class="col-xl-6 mt-2">                         
                  <input type="email" id="d_email_id" name="d_email_id" value="<?php echo $dec_maker[0]->d_email_id; ?>"  class="form-control" placeholder="Enter Email">
                </div>
                <div class="col-xl-6 mt-2">                         
                  <input type="text" id="d_relation" name="d_relation" value="<?php echo $dec_maker[0]->d_relation; ?>"   class="form-control" placeholder="Enter Relation">
                </div>                       
                <div class="col-xl-6 mt-2">                         
                  <input type="text" id="d_pan_no" name="d_pan_no" value="<?php echo $dec_maker[0]->d_pan_no; ?>"  class="form-control" placeholder="Enter Pan Number">
                </div>
                <div class="col-xl-6 mt-2">                         
                  <input type="text" id="d_aadhar_no" name="d_aadhar_no" value="<?php echo $dec_maker[0]->d_aadhar_no; ?>"  class="form-control" placeholder="Enter Adhaar Card">
                </div>
                <span class="mt-2">Address</span>
                <div class="col-xl-12 mt-2">                         
                  <input type="text" id="d_hno" name="d_hno" value="<?php echo $d_addr_arr['d_hno']?>"  class="form-control" placeholder="House Number">
                </div>
                <div class="col-xl-12 mt-2">                         
                  <input type="text" id="d_street" name="d_street" value="<?php echo $d_addr_arr['d_street']?>"  class="form-control" placeholder="Street Number">
                </div>
                <div class="col-xl-6 mt-2">                         
                  <input type="text" id="d_landmark" name="d_landmark" value="<?php echo $d_addr_arr['d_landmark']?>"  class="form-control" placeholder="Enter Landmark">
                </div>
                <div class="col-xl-6 mt-2">                         
                  <input type="text" id="d_city" name="d_city" value="<?php echo $d_addr_arr['d_city']?>"  class="form-control" placeholder="Enter City">
                </div>
                <div class="col-xl-6 mt-2">                         
                  <input type="text" id="d_state" name="d_state" value="<?php echo $d_addr_arr['d_state']?>"  class="form-control" placeholder="Enter State">
                </div>
                <div class="col-xl-6 mt-2">                         
                  <input type="number" id="d_pincode" name="d_pincode" value="<?php echo $d_addr_arr['d_pincode']?>"  class="form-control" placeholder="Enter Pin Code">
                </div>   
              </div>
              <div class="modal-footer">
                <input type="hidden" name="booking_id" value="<?php echo $client_info[0]->id ?? ""; ?>">
                <input type="hidden" name="dec_id" value="<?php echo $dec_maker[0]->id ?? ""; ?>">
                <input type="hidden" name="type" value="decision_maker">                       
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btn_dmaker">Save Now</button>
              </div>                         
            </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->                                     
<!-------------------End of Decision Maker Modal----------------->


<!----------------------Payee Modal-----------------------> 
<div id="zoomInModalpayee" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="zoomInModalLabel">Payee Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <form id="frmPayee">
            <div class="row">
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="payee_name" name="payee_name" value="<?php echo $payee[0]->payee_name; ?>"   class="form-control" placeholder="Decision Name">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="payee_mobile_no" name="payee_mobile_no" value="<?php echo $payee[0]->p_mobile_no; ?>"  class="form-control" placeholder="Mobile Number">
              </div>               
              <div class="col-xl-6 mt-2">                         
                <input type="email" id="payee_email_id" name="payee_email_id" value="<?php echo $payee[0]->p_email_id; ?>"   class="form-control" placeholder="Enter Email">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="payee_relation" name="payee_relation" value="<?php echo $payee[0]->p_relation; ?>"  class="form-control" placeholder="Enter Relation">
              </div>                       
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="payee_pan_no" name="payee_pan_no" value="<?php echo $payee[0]->p_pan_no; ?>"  class="form-control" placeholder="Enter Pan Number">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="payee_aadhar_no" name="payee_aadhar_no" value="<?php echo $payee[0]->p_aadhar_no; ?>"  class="form-control" placeholder="Enter Adhaar Card">
              </div>
              <span class="mt-2">Address</span>
              <div class="col-xl-12 mt-2">                         
                <input type="text" id="payee_hno" name="payee_hno" value="<?php echo $p_addr_arr['p_hno']?>"  class="form-control" placeholder="House Number">
              </div>
              <div class="col-xl-12 mt-2">                         
                <input type="text" id="payee_street" name="payee_street" value="<?php echo $p_addr_arr['p_street']?>"  class="form-control" placeholder="Street Number">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="payee_landmark" name="payee_landmark" value="<?php echo $p_addr_arr['p_landmark']?>"  class="form-control" placeholder="Enter Landmark">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="payee_city" name="payee_city" value="<?php echo $p_addr_arr['p_city']?>"  class="form-control" placeholder="Enter City">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="text" id="payee_state" name="payee_state" value="<?php echo $p_addr_arr['p_state']?>"  class="form-control" placeholder="Enter State">
              </div>
              <div class="col-xl-6 mt-2">                         
                <input type="number" id="payee_pincode" name="payee_pincode" value="<?php echo $p_addr_arr['p_pincode']?>"  class="form-control" placeholder="Enter Pin Code">
              </div>   
            </div>
            <div class="modal-footer">
              <input type="hidden" name="booking_id" value="<?php echo $client_info[0]->id ?? ""; ?>">
              <input type="hidden" name="payee_id" value="<?php echo $payee[0]->id ?? ""; ?>">
              <input type="hidden" name="type" value="payee_detalis">                       
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" id="btn_payee">Save Now</button>
            </div>                         
          </form>
        </div>
     </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->                                     
<!-------------------End of Payee Modal----------------->
<!----------------------QR Modal-----------------------> 
<div id="modalqr" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="zoomInModalLabel">QR Code</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="col-md-12">
              <img src="<?php echo base_url();?>assets/images/qr-3,00,000.jpeg" alt="">
          </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary ">Save This</button>
          </div>

      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->                                     
<!-------------------End of QR Modal----------------->
  <input type="hidden" id="counter" name="counter" value="<?php echo date("M d, Y H:i:s", strtotime($client_info[0]->booking_timer)); ?>">
  <!-- Scripts -->
  <script src="<?php echo base_url();?>assets2/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets2/js/owl-carousel.js"></script>
  <?php /*?><script src="<?php echo base_url();?>assets2/js/animation.js"></script><? */?>
  <script src="<?php echo base_url();?>assets2/js/imagesloaded.js"></script>
  <script src="<?php echo base_url();?>assets2/js/custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
  
<script>

$(document).ready(function(){

/**-----Payment Mode------------- */

$("#chk_accept").on("click", function(){

      $("#upi_field").slideUp();
      $("#card_field").slideUp();
      $("#neft_field").slideUp();        
      $("#cheque_field").slideUp();
      $("#trans_field").slideUp();

      $("#chk_upi").prop('checked', false);
      $("#chk_card").prop('checked', false);
      $("#chk_neft").prop('checked', false);
      $("#chk_cheque").prop('checked', false);

      if(this.checked){ 
        $("#payment_mode").slideDown();        
      }           
      else{
        $("#payment_mode").slideUp();
      }

  });

  $("#chk_upi").on("click", function(){
      if(this.checked){ 
        $("#neft_field").slideUp();
        $("#card_field").slideUp();
        $("#cheque_field").slideUp();
        $("#trans_field").slideDown();
        $("#upi_field").slideDown();         
      }           
  });

  $("#chk_card").on("click", function(){
      if(this.checked){        
        $("#upi_field").slideUp();
        $("#neft_field").slideUp();
        $("#cheque_field").slideUp();

        $("#trans_field").slideDown();
        $("#card_field").slideDown();
      }
  });
 
  $("#chk_neft").on("click", function(){
      if(this.checked){ 
        $("#upi_field").slideUp();
        $("#card_field").slideUp();
        $("#cheque_field").slideUp();

        $("#trans_field").slideDown();
        $("#neft_field").slideDown();
      }
  });

  $("#chk_cheque").on("click", function(){

      if(this.checked){ 
          $("#upi_field").slideUp();
          $("#card_field").slideUp();
          $("#neft_field").slideUp();
          $("#trans_field").slideUp();

          $("#cheque_field").slideDown();
      }
  });

/**--------------------------------*/

/**------Client Review----- */
$('#frmReview').validate({
    rules: {     
           
    },
    messages: {
           
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    submitHandler: function(form) {      
      var url = "<?php echo site_url('welcome/ajax_client_review')?>";
      var frmdata = $("#frmReview").serialize(); //new FormData($('#costForm')[0]);//$("#followupForm").serialize();
          
        $.ajax({
              type: "POST",
              url: url,
              data: frmdata, 
              success: function(data)
              { 
                
                  var spl_txt = data.split("~~~");
                  if(spl_txt[1] == 1)
                  { 
                    alert("Successfully Submitted...\n Our Team will Contact you as soon as possible...");
                    window.top.close();
                    //location.reload();
                  }
                  else
                  { 
                    alert("Something went wrong...");
                    $("#btn_topup").show();  
                  }   
              }
        });
    }

  });

/**------Permanent Address-------- */


 /**------Client Info----- */
 $('#frmClientInfo').validate({
    rules: {     
      client_name:{
        required: true
      },
      email_id: {
        required: true
      },
      mobile_no: {
        required: true
      },      
    },
    messages: {
      client_name:{
        required: 'Enter client Name'
      },
      email_id: {
        required: 'Enter Email Id'
      },
      mobile_no: {
        required: 'Select Mobile No.'
      },      
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    submitHandler: function(form) {      
      var url = "<?php echo site_url('booking/ajax_edit_client_info')?>";
      var frmdata = $("#frmClientInfo").serialize(); //new FormData($('#costForm')[0]);//$("#followupForm").serialize();
          
        $.ajax({
              type: "POST",
              url: url,
              data: frmdata, 
              success: function(data)
              { 
                  console.log(data);                 
                  var spl_txt = data.split("~~~");
                  if(spl_txt[1] == 1)
                  { 
                    alert("Successfully updated...");
                    location.reload();
                  }
                  else
                  { 
                    alert("Something went wrong...");
                    $("#btn_topup").show();  
                  }   
              }
        });
    }

  });

/**------Permanent Address-------- */

  $('#frmPermanentAddr').validate({
    rules: {     
      p_hno:{
        required: true
      },
      p_street: {
        required: true
      },
      p_landmark: {
        required: true
      }     
    },
    messages: {
      p_hno:{
        required: 'Enter client Name'
      },
      p_street: {
        required: 'Enter Email Id'
      },
      p_landmark: {
        required: 'Select Mobile No.'
      }     
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    submitHandler: function(form) {      
      var url = "<?php echo site_url('booking/ajax_edit_client_info')?>";
      var frmdata = $("#frmPermanentAddr").serialize(); //new FormData($('#costForm')[0]);//$("#followupForm").serialize();
          
          $.ajax({
              type: "POST",
              url: url,
              data: frmdata, 
              success: function(data)
              { 
                  console.log(data);                 
                  var spl_txt = data.split("~~~");
                  if(spl_txt[1] == 1)
                  { 
                    alert("Successfully updated...");
                    location.reload();
                  }
                  else
                  { 
                    alert("Something went wrong...");
                    //$("#btn_topup").show();  
                  }   
              }
          });
      }

  });

/**--------Present Address------------------- */

$('#frmPresentAddr').validate({
    rules: {     
      r_hno:{
        required: true
      },
      r_street: {
        required: true
      },
      r_landmark: {
        required: true
      }     
    },
    messages: {
      r_hno:{
        required: 'Enter client Name'
      },
      r_street: {
        required: 'Enter Email Id'
      },
      r_landmark: {
        required: 'Select Mobile No.'
      }     
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    submitHandler: function(form) {      
      var url = "<?php echo site_url('booking/ajax_edit_client_info')?>";
      var frmdata = $("#frmPresentAddr").serialize(); //new FormData($('#costForm')[0]);//$("#followupForm").serialize();
          
          $.ajax({
              type: "POST",
              url: url,
              data: frmdata, 
              success: function(data)
              { 
                  console.log(data);                 
                  var spl_txt = data.split("~~~");
                  if(spl_txt[1] == 1)
                  { 
                    alert("Successfully updated...");
                    location.reload();
                  }
                  else
                  { 
                    alert("Something went wrong...");
                    //$("#btn_topup").show();  
                  }   
              }
          });
      }

  });

/**---------Office Address-------*/

$('#frmOfficeAddr').validate({
    rules: {     
      o_hno:{
        required: true
      },
      o_street: {
        required: true
      },
      o_landmark: {
        required: true
      }     
    },
    messages: {
      o_hno:{
        required: 'Enter client Name'
      },
      o_street: {
        required: 'Enter Email Id'
      },
      o_landmark: {
        required: 'Select Mobile No.'
      }     
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    submitHandler: function(form) {      
      var url = "<?php echo site_url('booking/ajax_edit_client_info')?>";
      var frmdata = $("#frmOfficeAddr").serialize(); //new FormData($('#costForm')[0]);//$("#followupForm").serialize();
          
          $.ajax({
              type: "POST",
              url: url,
              data: frmdata, 
              success: function(data)
              { 
                  console.log(data);                 
                  var spl_txt = data.split("~~~");
                  if(spl_txt[1] == 1)
                  { 
                    alert("Successfully updated...");
                    location.reload();
                  }
                  else
                  { 
                    alert("Something went wrong...");
                    //$("#btn_topup").show();  
                  }   
              }
          });
      }

  });

/***----------Decision Maker------------------ */
  $('#frmDecmaker').validate({
    rules: {
      d_name:{
        required: true
      },
      d_mobile_no: {
        required: true
      },
      d_email_id: {
        required: true
      },
      d_relation: {
        required: true
      },      
      d_hno:{
        required: true
      },
      d_street: {
        required: true
      },
      d_landmark: {
        required: true
      }
    },
    messages: {
      d_name:{
        required: 'Enter client Name'
      },
      d_mobile_no: {
        required: 'Enter Email Id'
      },
      d_email_id: {
        required: 'Enter Email Id'
      },       
      d_hno:{
        required: 'Enter client Name'
      },
      d_street: {
        required: 'Enter Email Id'
      },
      d_landmark: {
        required: 'Select Mobile No.'
      }     
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    submitHandler: function(form) {      
      var url = "<?php echo site_url('booking/ajax_decision_maker')?>";
      var frmdata = $("#frmDecmaker").serialize(); //new FormData($('#costForm')[0]);//$("#followupForm").serialize();  
          $.ajax({
              type: "POST",
              url: url,
              data: frmdata, 
              success: function(data)
              { 
                console.log(data);                 
                var spl_txt = data.split("~~~");
                if(spl_txt[1] == 2)
                { 
                  alert("Successfully updated...");
                  location.reload();
                }
                else
                { 
                  alert("Something went wrong...");
                  //$("#btn_topup").show();  
                }   
              }
          });
      }
  });


/**----------Payee Details Script----------------- */  

$('#frmPayee').validate({
    rules: {
      payee_name:{
        required: true
      },
      payee_mobile_no: {
        required: true
      },
      payee_email_id: {
        required: true
      },
      payee_relation: {
        required: true
      },      
      payee_hno:{
        required: true
      },
      payee_street: {
        required: true
      },
      payee_landmark: {
        required: true
      }
    },
    messages: {
      payee_name:{
        required: 'Enter client Name'
      },
      payee_mobile_no: {
        required: 'Enter Email Id'
      },
      payee_email_id: {
        required: 'Enter Email Id'
      },       
      payee_hno:{
        required: 'Enter client Name'
      },
      payee_street: {
        required: 'Enter Email Id'
      },
      payee_landmark: {
        required: 'Select Mobile No.'
      }     
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    },
    submitHandler: function(form) {      
      var url = "<?php echo site_url('booking/ajax_client_payee')?>";
      var frmdata = $("#frmPayee").serialize(); //new FormData($('#costForm')[0]);//$("#followupForm").serialize();  
          $.ajax({
              type: "POST",
              url: url,
              data: frmdata, 
              success: function(data)
              { 
                console.log(data);                 
                var spl_txt = data.split("~~~");
                if(spl_txt[1] == 1)
                { 
                  alert("Successfully Saved...");
                  location.reload();
                }
              else if(spl_txt[1] == 2)
                { 
                  alert("Successfully updated...");
                  location.reload();
                }
              else
                { 
                  alert("Something went wrong...");
                  //$("#btn_topup").show();  
                }   
              }
          });
      }

  });


});

</script>

<!-----Timer js------>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date($("#counter").val()).getTime();
    
    console.log(countDownDate);

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();
        
      //console.log("~~~~>"+countDownDate+"~~~~"+now);
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h "
      + minutes + "m " + seconds + "s ";
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>
  <!--------End of timer--------->
</body>
</html>