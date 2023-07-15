<?php 
  $CI = & get_instance();
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
 
 $booking_id = $this->uri->segment(3);

  $admin_verify = $client_info[0]->admin_verify;
  $marketing_verify = $client_info[0]->marketing_verify;
  $client_verify = $client_info[0]->client_verify;

  if($client_info[0]->admin_verify == "yes"){
    $chk_admin = "checked";
  }

  if($client_info[0]->marketing_verify == "yes"){
    $chk_marketing = "checked";
  }

  if($client_info[0]->client_verify == "yes"){
    $chk_client = "checked";
  }

  if($client_info[0]->trans_verify == "yes"){
    $chk_trans = "checked";
  }

  if($client_info[0]->trans_verify_date)
  {
    $trans_verify_date = $client_info[0]->trans_verify_date;
    $trans_verify_date = date("d M, Y H:i:s", strtotime($trans_verify_date));
  }
  else
  {
    $trans_verify_date = "";
  }

  if($client_info[0]->marketing_verify_date)
  {
    $marketing_verify_date = $client_info[0]->marketing_verify_date;
    $marketing_verify_date = date("d M, Y H:i:s", strtotime($marketing_verify_date));
  }
  else
  {
    $marketing_verify_date = "";
  }

  if($client_info[0]->admin_verify_date)
  {
    $admin_verify_date = $client_info[0]->admin_verify_date;
    $admin_verify_date = date("d M, Y H:i:s", strtotime($admin_verify_date));
  }
  else
  {
    $admin_verify_date = "";
  }

  if($client_info[0]->client_verify_date)
  {
    $client_verify_date = $client_info[0]->client_verify_date;
    $client_verify_date = date("d M, Y H:i:s", strtotime($client_verify_date));
  }
  else
  {
    $client_verify_date = "";
  }
  

  if($client_info[0]->aggrement_status == 1)
  {
    $chk_aggr =   "checked disabled"; 
    $aggrement_date = $client_info[0]->aggrement_date;
    $aggrement_date = date("d M, Y H:i:s A", strtotime($aggrement_date));
  }
  else
  {
    $chk_aggr = "";
    $aggrement_date = "";
  }
?>
<style>
  .icheck-success>input:first-child:checked+input[type=hidden]+label::before, .icheck-success>input:first-child:checked+label::before{
    background-color: #0ab39c !important;
    border-color: #0ab39c !important;
  }
</style>
<div class="main-content">
  
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Booking Details</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Booking</a>
                  </li>
                  <li class="breadcrumb-item active">Booking Details</li>
                  
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- end page title -->
        <div class="row">
          <div class="col-xl-9">
          <!--Alert------>
            <?php 
              if($client_info[0]->link_request == 1)
              {
                
              ?>
                <div id="link_request" class="alert alert-danger" role="alert">
                  New Booking <a href="#div_mail" class="alert-link">Link Request</a> from client...
                </div>
              <?php
                //echo '<span id="link_request" style="color:red; font-weight:bold; text-align:center;" >New Link Request</span>';
              }
            ?>
          <!--End Alert------>
            <div class="card">
              
              <div class="card-header">
             
                <div class="d-flex align-items-center">
                  <h5 class="card-title flex-grow-1 mb-0">Project Deatails</h5>
                  <button type="button" class="btn btn-success btn-sm btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#zoomInModal"><i class=" ri-edit-2-fill label-icon align-middle fs-16 me-2"></i>Edit</button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/user_icon.png" alt="User_Icon">
                      <span><?php echo $client_info[0]->client_name ?? ""; ?></span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/phone.png" alt="User_Icon">
                      <span><?php echo $client_info[0]->mobile_no ?? ""; ?></span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/age.png" alt="User_Icon">
                      <span><?php echo $client_info[0]->gender ?? ""; ?></span>
                    </span>
                  </div>
                  <div class="col-md-6">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/email.png" alt="User_Icon">
                      <span><?php echo $client_info[0]->email_id ?? ""; ?></span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/age.png" alt="User_Icon">
                      <span>Age: <?php echo $client_info[0]->age ?? ""; ?></span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                      <span><?php echo $client_info[0]->occupation ?? ""; ?></span>
                    </span>
                  </div>
                  <br>
                  <br>
                  <hr>
                  <div class="col-md-6">
                    <span class="text-primary">Pan:</span>
                    <span><?php echo $client_info[0]->pan_no ?? ""; ?></span>
                  </div>
                  <div class="col-md-6">
                    <span class="text-primary">Adhaar:</span>
                    <span><?php echo $client_info[0]->aadhar_no ?? ""; ?></span>
                  </div>
                  <br>
                  <br>
                  <div class="col-md-12">
                    <span class="text-primary" style="text-decoration:underline;font-weight: 500;">Permanent Address</span>&nbsp;&nbsp;<a href="" data-bs-toggle="modal" data-bs-target="#zoomInModal1"><i class="ri-edit-2-fill"></i></a>
                  </div>
                  <div class="col-md-12">
                    <img src="<?php echo base_url();?>assets/images/icons/location.png" alt="Location">
                    <span><?php echo $permanent_addr; ?></span>
                  </div>
                  <br>
                  <div class="col-md-12">
                    <span class="text-primary" style="text-decoration:underline; font-weight: 500;">Present Address</span>&nbsp;&nbsp;<a href="" data-bs-toggle="modal" data-bs-target="#zoomInModal2"><i class="ri-edit-2-fill"></i></a>
                  </div>
                  <div class="col-md-12">
                    <img src="<?php echo base_url();?>assets/images/icons/location.png" alt="Location">
                    <span><?php echo $present_addr; ?></span>
                  </div>
                  <br>
                  <br>
                  <div class="col-md-12">
                    <span class="text-primary" style="text-decoration:underline; font-weight: 500;">Office Address</span>&nbsp;&nbsp;<a href="" data-bs-toggle="modal" data-bs-target="#zoomInModal3"><i class="ri-edit-2-fill"></i></a>
                  </div>
                  <div class="col-md-12">
                    <img src="<?php echo base_url();?>assets/images/icons/location.png" alt="Location">
                    <span><?php echo $office_addr; ?></span>
                  </div>
                </div>
              </div>
            </div>
            <!--end card-->
            <div class="card">
              <div class="card-header">
                <div class="d-sm-flex align-items-center">
                  <h5 class="card-title flex-grow-1 mb-0">Decision Maker</h5>
                  <button type="button" class="btn btn-success btn-sm btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#zoomInModaldecisionmaker"><i class=" ri-edit-2-fill label-icon align-middle fs-16 me-2"></i>Edit</button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/user_icon.png" alt="User_Icon">
                      <span><?php echo $dec_maker[0]->d_name; ?></span>
                    </span>
                  </div>
                  <div class="col-md-6">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/phone.png" alt="phone">
                      <span><?php echo $dec_maker[0]->d_mobile_no; ?></span>
                    </span>
                  </div>
                  <div class="col-md-6">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/email.png" alt="email">
                      <span><?php echo $dec_maker[0]->d_email_id; ?></span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/age.png" alt="relation">
                      <span>Relation: <?php echo $dec_maker[0]->d_relation; ?></span>
                    </span>
                  </div>
                  <br>
                  <br>
                  <hr>
                  <div class="col-md-6">
                    <span class="text-primary">Pan:</span>
                    <span><?php echo $dec_maker[0]->d_pan_no; ?></span>
                  </div>
                  <div class="col-md-6">
                    <span class="text-primary">Adhaar:</span>
                    <span><?php echo $dec_maker[0]->d_aadhar_no; ?></span>
                  </div>
                  <br>
                  <br>
                  <div class="col-md-12">
                    <span class="text-primary" style="text-decoration:underline;font-weight: 500;">Address</span>
                  </div>
                  <div class="col-md-12">
                    <img src="<?php echo base_url();?>assets/images/icons/location.png" alt="Location">
                    <span><?php echo $d_addr; ?></span>
                  </div>
                </div>
              </div>
            </div>
            <!--end card-->
            <div class="card">
              <div class="card-header">
                <div class="d-sm-flex align-items-center">
                  <h5 class="card-title flex-grow-1 mb-0">Payee</h5><button type="button" class="btn btn-success btn-sm btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#zoomInModalpayee"><i class=" ri-edit-2-fill label-icon align-middle fs-16 me-2"></i>Edit</button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/user_icon.png" alt="User_Icon">
                      <span><?php echo $payee[0]->payee_name; ?></span>
                    </span>
                  </div>
                  <div class="col-md-6">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/phone.png" alt="User_Icon">
                      <span><?php echo $payee[0]->p_mobile_no; ?></span>
                    </span>
                  </div>
                  <div class="col-md-6">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/email.png" alt="User_Icon">
                      <span><?php echo $payee[0]->p_email_id; ?></span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/age.png" alt="User_Icon">
                      <span>Relation: <?php echo $payee[0]->p_relation; ?></span>
                    </span>
                  </div>
                  <br>
                  <br>
                  <hr>
                  <div class="col-md-6">
                    <span class="text-primary">Pan:</span>
                    <span><?php echo $payee[0]->p_pan_no; ?></span>
                  </div>
                  <div class="col-md-6">
                    <span class="text-primary">Adhaar:</span>
                    <span><?php echo $payee[0]->p_aadhar_no; ?></span>
                  </div>
                  <br>
                  <div class="col-md-12">
                    <span class="text-primary" style="text-decoration:underline;font-weight: 500;">Address</span>
                  </div>
                  <div class="col-md-12">
                    <img src="<?php echo base_url();?>assets/images/icons/location.png" alt="Location">
                    <span><?php echo $p_addr;?></span>
                  </div>
                </div>
              </div>
            </div>
            <!--end card-->
          </div>
          <!--end col-->
          <div class="col-xl-3">
            <div class="card">
              <div class="card-header">
                <div class="d-flex">
                  <h5 class="card-title flex-grow-1 mb-0">
                    Transaction 
                  </h5>
                  <button type="button" class="btn btn-success btn-sm btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#zoomInModaltransaction"><i class=" ri-edit-2-fill label-icon align-middle fs-16 me-2"></i>Edit</button>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex align-items-center mb-2">
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">Any Offer:</p>
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <h6 class="mb-0">Rs. <?php echo $trans_detail[0]->offer_amt; ?></h6>
                  </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">Quotation:</p>
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <h6 class="mb-0"><?php echo $trans_detail[0]->quotation_type; ?></h6>
                  </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">Discounted Rate:</p>
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <h6 class="mb-0">Rs. <?php echo $trans_detail[0]->final_rate; ?></h6>
                  </div>
                </div>
                
                <div class="d-flex align-items-center mb-2">
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">Amount:</p>
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <h6 class="mb-0">Rs. <?php echo $trans_detail[0]->final_amt; ?></h6>
                  </div>
                </div>
                <div>
                  <p class="text-muted">[ <?php echo $trans_detail[0]->final_amt_in_word; ?> ]</p>
                </div>
                <div class="d-flex align-items-center ">
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">Booking Amount: <span class="text-danger">Non-Refundable</span>
                    </p>
                  </div>
                </div>
                <div>
                  <p class="flex-grow-1 ms-2">Rs. <?php echo $trans_detail[0]->paid_booking_amt; ?></p>
                </div>

                <div class="d-flex align-items-center mb-2">
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">Funding Mode:</p>
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <h6 class="mb-0"><?php echo $trans_detail[0]->funding_mode; ?></h6>
                  </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">Self Amount: </p>
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <h6 class="mb-0">Rs. <?php echo $trans_detail[0]->self_amt; ?></h6>
                  </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">Bank Name:</p>
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <h6 class="mb-0"><?php echo $trans_detail[0]->bank_name; ?></h6>
                  </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">Loan Amount:</p>
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <h6 class="mb-0">Rs. <?php echo $trans_detail[0]->loan_amt; ?></h6>
                  </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">Loan Account:</p>
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <h6 class="mb-0"><?php echo $trans_detail[0]->loan_acc_no; ?></h6>
                  </div>
                </div>
          <hr/>             
                <div class="d-flex align-items-center mb-2">                  
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">Payment Mode:</p>
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <h6 class="mb-0"><?php echo $trans_detail[0]->payment_mode; ?></h6>
                  </div>
                </div>
                
                <div class="d-flex align-items-center mb-2">
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">Transection ID: </p>
                  </div>
                  <div class="">
                    <h6 class="mb-0">&nbsp;<?php echo $trans_detail[0]->trans_id; ?></h6>
                  </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <div class="flex-shrink-0">
                    <p class="text-muted mb-0">Transaction Date: </p>
                  </div>
                  <div class="flex-grow-1 ms-2">
                    <h6 class="mb-0"> <?php echo $trans_detail[0]->payment_date; ?></h6>
                  </div>
                </div>
                <div class="col-md-12">
                <div>
                <div class="icheck-success d-inline">
                  <input type="checkbox" <?php if($emp_type != 1){ echo 'disabled';} ?> <?php echo $chk_trans;?> class="switcher" name="trans[]" value="Trans" id="chk_trans">
                  <label title="Checked" for="chk_trans" id="">Verify Transaction</label>
                </div> 
                  <br><br>                  
                  <small id="trans_verify_date">Date: <?php echo $trans_verify_date; ?></small>&nbsp; <small id="trans_verify_by">Verify By: <?php echo $client_info[0]->trans_verify_by; ?></small>
              </div>
            </div>
          </div>
        </div>
            <!--end card-->
          <div class="card">
              <div class="card-header">
                <div class="d-flex">
                  <h5 class="card-title flex-grow-1 mb-0">Plot Details</h5>
                  <button type="button" class="btn btn-success btn-sm btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#zoomInModalplotdetails"><i class=" ri-edit-2-fill label-icon align-middle fs-16 me-2"></i>Edit</button>
                </div>
              </div>
              <div class="card-body">
                <div class="col-md-12">
                  <img src="<?php echo base_url();?>assets/images/icons/location.png" alt="Location">
                  <span><?php echo $plot_detail[0]->plot_location; ?></span>
                </div>
                <div class="col-md-12">
                  <img src="<?php echo base_url();?>assets/images/icons/plot_no.png" alt="plot_no">
                  <span>Plot No. : <?php echo $plot_detail[0]->plot_no; ?></span>
                </div>
                <div class="col-md-12">
                  <img src="<?php echo base_url();?>assets/images/icons/size.png" alt="plot_no">
                  <span>Plot Size : <?php echo $plot_detail[0]->plot_size; ?> sqft</span>
                </div>
                <div class="col-md-12">
                  <img src="<?php echo base_url();?>assets/images/icons/compass.png" alt="plot_no">
                  <span>Plot Facing : <?php echo $plot_detail[0]->plot_facing; ?></span>
                </div>
                <div class="col-md-12">
                  <img src="<?php echo base_url();?>assets/images/icons/depth.png" alt="plot_no">
                  <span>Depth (from plint) : <?php echo $plot_detail[0]->num_road; ?> ft</span>
                </div>
              </div>
          </div>
            <!--end card-->
            <div class="card">
              <div class="card-header">
                <div class="d-flex">
                  <h5 class="card-title flex-grow-1 mb-0">Documents</h5><button type="button" class="btn btn-success btn-sm btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#zoomInModalattacheddocument"><i class=" ri-edit-2-fill label-icon align-middle fs-16 me-2"></i>Edit</button>
                </div>
              </div>
              <div class="card-body">
                  <?php
                    if($attach_doc[0]->chk_adhar_copy == "yes")
                    {
                      $adhar_copy = base_url("assets/uploads/".$attach_doc[0]->adhar_copy);
                      echo '<a href="'.$adhar_copy.'" class="badge bg-primary" style="color:white;" download="'.$adhar_copy.'">Aadhar Card &nbsp;<i class="ri-download-2-line"></i></a>';
                    }
                    if($attach_doc[0]->chk_pancard_copy == "yes")
                    {
                      $pancard_copy = base_url("assets/uploads/".$attach_doc[0]->pancard_copy);
                      echo '&nbsp;&nbsp;<a href="'.$pancard_copy.'" class="badge bg-primary" style="color:white;" download="'.$pancard_copy.'">PAN Card &nbsp;<i class="ri-download-2-line"></i></a>';
                    }
                    if($attach_doc[0]->chk_electric_bill == "yes")
                    {
                       $electric_bill = base_url("assets/uploads/".$attach_doc[0]->electric_bill);
                       echo '&nbsp;&nbsp;<a href="'.$electric_bill.'" class="badge bg-primary" style="color:white;" download="'.$electric_bill.'">Electricity Bill &nbsp;<i class="ri-download-2-line"></i></a>';
                    }
                    if($attach_doc[0]->chk_registry_copy == "yes")
                    {
                      $registry_copy = base_url("assets/uploads/".$attach_doc[0]->registry_copy);
                      echo '&nbsp;&nbsp;<a href="'.$registry_copy.'" class="badge bg-primary" style="color:white;" download="'.$registry_copy.'">Registry Copy &nbsp;<i class="ri-download-2-line"></i></a>';
                    }
                    if($attach_doc[0]->chk_b_one_copy == "yes")
                    {
                      $b_one_copy = base_url("assets/uploads/".$attach_doc[0]->b_one_copy);
                      echo '&nbsp;&nbsp;<a href="'.$b_one_copy.'" class="badge bg-primary" style="color:white;" download="'.$b_one_copy.'">Latest B-ONE Copy&nbsp;<i class="ri-download-2-line"></i></a>';
                    }
                    if($attach_doc[0]->chk_khasra_map == "yes")
                    {
                      $khasra_map = base_url("assets/uploads/".$attach_doc[0]->khasra_map);
                      echo '&nbsp;&nbsp;<a href="'.$khasra_map.'" class="badge bg-primary" style="color:white;" download="'.$khasra_map.'">Khasra Copy &nbsp;<i class="ri-download-2-line"></i></a>';
                    }
                    if($attach_doc[0]->chk_approved_tncp == "yes")
                    {
                      $approved_tncp = base_url("assets/uploads/".$attach_doc[0]->approved_tncp);
                      echo '&nbsp;&nbsp;<a href="'.$approved_tncp.'" class="badge bg-primary" style="color:white;" download="'.$approved_tncp.'">Map TNCP/Municipal &nbsp;<i class="ri-download-2-line"></i></a>';
                    }
                    if($attach_doc[0]->chk_tax_receipt == "yes")
                    {
                      $tax_receipt = base_url("assets/uploads/".$attach_doc[0]->tax_receipt);
                      echo '&nbsp;&nbsp;<a href="'.$tax_receipt.'" class="badge bg-primary" style="color:white;" download="'.$tax_receipt.'">TAX Receipt &nbsp;<i class="ri-download-2-line"></i></a>';
                    }
                    if($attach_doc[0]->chk_any_other == "yes")
                    {
                      $any_other = base_url("assets/uploads/".$attach_doc[0]->any_other);
                      echo '&nbsp;&nbsp;<a href="'.$any_other.'" class="badge bg-primary" style="color:white;" download="'.$any_other.'">'.$attach_doc[0]->other_name.' &nbsp;<i class="ri-download-2-line"></i></a>';
                    }                   
                 ?>
              </div>
            </div>
            <!--end card-->
          </div>
          <!--end col-->
        </div>
        <!--end row-->
      </div>

      <!---Commitment Detail section------>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h5 class="card-title flex-grow-1 mb-0">Commitment :</h5>
                  <a href="<?php echo base_url()."index.php/booking/add_commitment/".$booking_id; ?>" class="btn btn-success btn-sm btn-label waves-effect waves-light"><i class=" ri-edit-2-fill label-icon align-middle fs-16 me-2"></i>Edit</a>
                </div>
                <hr/>
                <div class="row mt-3">

                <?php 
                         
                  $chk_commit = $commit[0]->commitment;
                  $chk_arr = explode(",", $chk_commit);

                  $aggr_period = date("d M, Y", strtotime($commit[0]->aggr_period)) ?? "";
                  $comp_period = date("d M, Y", strtotime($commit[0]->comp_period)) ?? "";
                  $work_start_on = date("d M, Y", strtotime($commit[0]->work_start_on)) ?? "";
                  $sba_data = $commit[0]->sba ?? "";
                  $est_cost = $commit[0]->est_cost ?? "";

                

                  if($chk_arr){

                    foreach($chk_arr as $key=>$c_id){
                            
                      $commitment = $CI->Master_model->getNameById("bkf_commitment_list","commitment",$c_id);
                     
                  ?>
                  <div class="col-md-3">
                    <div>
                      <i class="ri-check-double-line label-icon align-middle fs-16 me-2" style="color: #838fb9;"></i>
                        <?php echo $commitment; ?>
                    </div>
                  </div>

                <?php } }?>
                  
                  <div class="col-md-3">
                    <div>
                      <i class="ri-check-double-line label-icon align-middle fs-16 me-2" style="color: #838fb9;"></i>
                      Agreement Period: <?php echo $aggr_period;?>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div>
                      <i class="ri-check-double-line label-icon align-middle fs-16 me-2" style="color: #838fb9;"></i>
                      Project Completion Period: <?php echo $comp_period;?>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div>
                      <i class="ri-check-double-line label-icon align-middle fs-16 me-2" style="color: #838fb9;"></i>
                      Work Start on Site: <?php echo $work_start_on;?>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div>
                      <i class="ri-check-double-line label-icon align-middle fs-16 me-2" style="color: #838fb9;"></i>
                      Super Build-up area: <?php echo $sba_data;?> Sqft.
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div>
                      <i class="ri-check-double-line label-icon align-middle fs-16 me-2" style="color: #838fb9;"></i>
                      Estimate Cost: Rs. <?php echo number_format($est_cost);?>
                    </div>
                  </div>


                </div>               
              </div>
          </div>
        </div>
      </div>
      <!--End of commitment Detail Section------>

    <!--------Anubandh Verification---------->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h5 class="card-title flex-grow-1 mb-0">Anubandh</h5>
                </div>
                <div class="row mt-3">
                  <div class="col-md-3">                    
                    <div class="icheck-success d-inline">
                      <input type="checkbox" class="switcher" <?php  echo $chk_aggr; ?> name="" value="" id="chk_make_anumandh">
                      <label title="Checked" for="chk_make_anumandh" id="">Checked to go for Aggrement</label>
                    <br> 
                        <small id="aggr_date">Aggrement Date: <?php echo $aggrement_date; ?></small>
                    </div>
                  </div>
                  <div class="col-md-3" id="aggr_column" >                    
                    <div id="" class="mt-2">    
                      <a id="" mid="" class="btn btn-success btn-sm  btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><i class=" ri-eye-line label-icon align-middle fs-16 me-2"></i>View / Edit Anubandh Column</a>
                    </div>
                  </div>
                </div>               
              </div>
          </div>
        </div>
      </div>
    <!-------Anubadh Verification End--------->

    <!----Verify ----------->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h5 class="card-title flex-grow-1 mb-0">Checked and Varified :</h5>
                </div>
                
                <div class="row mt-3">
                  <div class="col-md-3">
                    <div>
                      <div class="icheck-success d-inline">
                        <input type="checkbox" <?php echo $chk_marketing;?> class="switcher" name="marketing[]" value="Marketing" id="chk_marketing">
                        <label title="Checked" for="chk_marketing" id="">By Marketing</label>
                      </div> 
                      <br> 
                       <small id="marketing_date">Date: <?php echo $marketing_verify_date; ?></small>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div>
                      <div class="icheck-success d-inline">
                        <input type="checkbox" <?php echo $chk_client;?> class="switcher" name="client[]" value="Client" id="chk_client">
                        <label title="Checked" for="chk_client" id="">By Client</label>
                      </div> 
                      <br>                   
                      <small id="client_date">Date: <?php echo $client_verify_date; ?></small>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div>
                      <div class="icheck-success d-inline">
                        <input type="checkbox" <?php if($emp_type != 1){ echo 'disabled';} ?> <?php echo $chk_admin;?> class="switcher" name="admin[]" value="Admin" id="chk_admin">
                        <label title="Checked" for="chk_admin" id="">By Admin</label>
                      </div>
                      <br> 
                      <small id="admin_date">Date: <?php echo $admin_verify_date;?></small>
                    </div>
                  </div>  

                </div>               
              </div>
          </div>
        </div>
      </div>
    <!-----End of Verify--------->
      
    <!--------Email---------->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h5 class="card-title flex-grow-1 mb-0">Email</h5>
                </div>
                <div class="row mt-3">
                <div class="col-md-4">  
                  <span>Mail for Booking Amount and Verification</span><br><br>
                  <div id="div_mail">  
                    <a href="javascript:void(0);" id="btnMail" mid="<?php echo $client_info[0]->id ?? ""; ?>" class="btn btn-danger btn-sm  btn-label waves-effect waves-light"><i class=" ri-mail-fill label-icon align-middle fs-16 me-2"></i>Send Now</a>
                  </div>
                  <div id="div_loader" style="display:none;">  
                    <a href="javascript:void(0);" id="a_loader" class="btn btn-danger btn-sm  btn-label waves-effect waves-light"><i class=" ri-mail-fill label-icon align-middle fs-16 me-2"></i>Processing...</a>
                  </div>                    
                </div>
                <div class="col-md-4">
                  <span>Booking Confirmation Mail</span><br>
                    <div class="icheck-success d-inline">
                      <input type="checkbox" <?php if($chk_trans != "checked"){ echo "disabled";}?> class="switcher"  name="chk_attach" value="yes" id="chk_attach">
                      <label title="Checked" for="chk_attach">With Attachment</label>
                    </div><br>

                    <?php if($chk_trans == "checked"){
                      $bid = 'id="btnMail_2"';
                      }
                    ?>
                    <div id="div_mail_2">
                      <a href="javascript:void(0);" <?php echo  $bid; ?> mid="<?php echo $client_info[0]->id ?? ""; ?>" style="margin-top: 5px;" class="btnMail_2 btn btn-danger btn-sm  btn-label waves-effect waves-light"><i class=" ri-mail-fill label-icon align-middle fs-16 me-2"></i>Send Now</a>
                    </div>
                    <div id="div_loader_2" style="display:none;">  
                      <a href="javascript:void(0);" id="a_loader_2" class="btn btn-danger btn-sm  btn-label waves-effect waves-light"><i class=" ri-mail-fill label-icon align-middle fs-16 me-2"></i>Processing...</a>
                    </div>
                </div>
                  <div class="col-md-4">
                    <span>Agreement Copy to Client</span>
                    <br>
                    <br>
                      <div id="">
                        <a href="javascript:void(0);" mid="" style="margin-top: 5px;" class=" btn btn-danger btn-sm  btn-label waves-effect waves-light"><i class=" ri-mail-fill label-icon align-middle fs-16 me-2"></i>Send Mail</a>
                      </div>
                      <div id="div_loader_2" style="display:none;">  
                        <a href="javascript:void(0);" id="a_loader_2" class="btn btn-danger btn-sm  btn-label waves-effect waves-light"><i class=" ri-mail-fill label-icon align-middle fs-16 me-2"></i>Processing...</a>
                      </div>
                  </div>
                </div>               
              </div>
          </div>
        </div>
      </div>
    <!-------Email--------->
    

    <!--------Download and view---------->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h5 class="card-title flex-grow-1 mb-0">Download and view</h5>
                </div>
                <div class="row mt-3">
                  <div class="col-md-4">
                    <span>Estimate Cost</span><br><br>
                    <div id="">  
                      <a href="http://localhost/cost_calculator/pdf2/estimate_with_gst.php?cid=<?php echo $client_info[0]->calc_id;?>" id="" mid="" class="btn btn-success btn-sm  btn-label waves-effect waves-light"><i class=" ri-download-2-fill label-icon align-middle fs-16 me-2"></i>Download Now</a>
                    </div>                 
                  </div>
                  <div class="col-md-4">
                    <span >Booking Form</span><br><br>
                    <div id="">  
                      <a href="http://localhost/cost_calc/index.php/booking/client_booking_pdf/<?php echo $booking_id;?>" id="" mid="" class="btn btn-success btn-sm  btn-label waves-effect waves-light"><i class=" ri-download-2-fill label-icon align-middle fs-16 me-2"></i>Download Now</a>
                    </div>                 
                  </div> 
                  <div class="col-md-4">
                    <span>Anubandh Details</span><br><br>
                    <div id="">  
                      <a href="<?php echo site_url('/booking/anubandh_pdf')?>" target="_blank" id="" mid="" class="btn btn-success btn-sm  btn-label waves-effect waves-light"><i class=" ri-download-2-fill label-icon align-middle fs-16 me-2"></i>Download Now</a>
                    </div>                 
                  </div>  
                  
                </div>               
              </div>
          </div>
        </div>
      </div>
    <!-------Download and view--------->

  <!--container-fluid-->
  </div>
  <!--------View Column---------->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="myLargeModalLabel">Selected Column</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <!--h6 class="fs-15">Column C</h6-->
                      <?php 
                      if($column_list->column_data){

                        $cdata = json_decode($column_list->column_data, true);

                          $col_head = "";
                          $temp = "";
                        foreach($cdata as $key=>$val)
                        {  
                          //echo '<-->'.$val;

                          $qry = "SELECT * FROM bkf_aggrement_column where id = $key";
                          $res = $CI->Master_model->getCustom($qry)[0];
                          
                          if($val == "YES"){
                            $add_css = "text-success";
                          }
                          else{
                            $add_css = "text-danger";
                          }

                          if($res->column_name != $temp)
                          {
                            echo '<h6 class="fs-15">COLUMN '.$res->column_name.'</h6>';
                          }
                         
                      ?>
                      <div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                          <i class="ri-checkbox-circle-fill <?php echo $add_css;?>"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <p class="text-muted mb-0"><?php  echo $res->column_desc; ?></p>
                        </div>
                        <div class="flex-shrink-0">
                          <i class="<?php echo $add_css;?>"><?php echo $val?></i>
                        </div>

                      </div>
                      <?php 
                          $temp = $res->column_name;
                        }
                      }
                      ?>

                    
                    </div>
                    <div class="modal-footer">  
                      <a href="<?php echo base_url("index.php/anubandh/make_anubandh/$booking_id");?>" class="btn btn-primary btn-sm">Edit Column</a>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
          <!-------End of View Column----------->
    <!----------------------Client Information Modal-----------------------> 
        <div id="zoomInModal" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="zoomInModalLabel">Client Information <small class="text-success" style="font-weight: lighter;">Edit Here</small></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                    <form id="frmClientInfo">
                        <div class="row">
                          <div class="col-xl-6 mt-2">     
                            <label for="">Client Name</label>                    
                            <input type="text" id="client_name" name="client_name" value="<?php echo $client_info[0]->client_name ?? ""; ?>" class="form-control" placeholder="Client Name" required>
                          </div>
                          <div class="col-xl-6 mt-2"> 
                          <label for="">Mobile Number</label>                           
                            <input type="text" id="mobile_no" name="mobile_no" value="<?php echo $client_info[0]->mobile_no ?? ""; ?>" class="form-control" placeholder="Mobile Number">
                          </div>
                          <div class="col-xl-6 mt-2">  
                            <label for="">Enter Relation</label>                          
                            <input type="text" id="spouse_name" name="spouse_name" value="<?php echo $client_info[0]->spouse_name ?? ""; ?>" class="form-control" placeholder="Enter Relation">
                          </div>
                          <div class="col-xl-6 mt-2"> 
                            <label for="">Enter Email</label>                          
                            <input type="email" id="email_id" name="email_id" value="<?php echo $client_info[0]->email_id ?? ""; ?>" class="form-control" placeholder="Enter Email">
                          </div>
                          <div class="col-xl-3 mt-2">     
                            <label for="">Enter Age</label>                      
                            <input type="number" id="age" name="age" value="<?php echo $client_info[0]->age ?? ""; ?>" class="form-control" placeholder="Enter Age">
                          </div>
                          <div class="col-xl-6 mt-2">  
                            <label for="">Select Gender</label>         
                            <select name="gender" class="form-select mb-3" aria-label="Default select example" aria-invalid="false">
                              <!--option selected="">Select Gender</option-->
                              <option <?php if($client_info[0]->gender == "Male"){ echo 'selected="selected"'; } ?> value="Male">Male</option>
                              <option <?php if($client_info[0]->gender == "Female"){ echo 'selected="selected"'; } ?> value="Female">Female</option>                       
                            </select>
                          </div>
                          <div class="col-xl-6 mt-2">
                            <label for="">Enter Pan Card</label>                          
                            <input type="text" id="pan_no" name="pan_no" value="<?php echo $client_info[0]->pan_no ?? ""; ?>" class="form-control" placeholder="Enter Pan Number">
                          </div>
                          <div class="col-xl-6 mt-2"> 
                          <label for="">Enter Aadhar Card</label>                          
                            <input type="text" id="aadhar_no" name="aadhar_no" value="<?php echo $client_info[0]->aadhar_no ?? ""; ?>"  class="form-control" placeholder="Enter Adhaar Card">
                          </div>
                        </div>                         
                    </div>
                    <div class="modal-footer">
                      <input type="hidden" id="booking_id" name="booking_id" value="<?php echo $client_info[0]->id ?? ""; ?>">
                      <input type="hidden" name="type" value="client_info">
                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" id="btn_client" value="Calculate">Update Now</button>
                    </div>
                </form>
             </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog-->
        </div><!-- /.modal-->                                     
<!-------------------End of Clinet Information Modal----------------->

<!-------------------Present Address --------------------------------> 
        <div id="zoomInModal1" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="zoomInModalLabel">Permanent Address <small class="text-success" style="font-weight: lighter;">Edit Here</small></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form id="frmPermanentAddr">                      
                            <div class="row">
                              <div class="col-xl-12">     
                              <label for="">Enter House Number</label>                      
                                <input type="text" id="p_hno" name="p_hno" value="<?php echo $permanent_addr_arr['p_hno']; ?>" class="form-control" placeholder="House Number">
                              </div>
                              <div class="col-xl-12 mt-2">
                              <label for="">Enter Street Number</label>                           
                                <input type="text" id="p_street" name="p_street" value="<?php echo $permanent_addr_arr['p_street']; ?>" class="form-control" placeholder="Street Number">
                              </div>
                              <div class="col-xl-6 mt-2">  
                              <label for="">Enter Landmark</label>                         
                                <input type="text" id="p_landmark" name="p_landmark" value="<?php echo $permanent_addr_arr['p_landmark']; ?>" class="form-control" placeholder="Enter Landmark">
                              </div>
                              <div class="col-xl-6 mt-2">       
                              <label for="">Enter City</label>                    
                                <input type="text" id="p_city" name="p_city" value="<?php echo $permanent_addr_arr['p_city']; ?>" class="form-control" placeholder="Enter City">
                              </div>
                              <div class="col-xl-6 mt-2">   
                              <label for="">Enter State</label>                        
                                <input type="text" id="p_state" name="p_state" value="<?php echo $permanent_addr_arr['p_state']; ?>" class="form-control" placeholder="Enter State">
                              </div>
                              <div class="col-xl-6 mt-2">
                              <label for="">Enter Pincode</label>                           
                                <input type="number" id="p_pincode" name="p_pincode" value="<?php echo $permanent_addr_arr['p_pincode']; ?>" class="form-control" placeholder="Enter Pin Code">
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
    <!-------------------Present Address ----------------->

    <!-------------------Present Address ----------------------------> 
        <div id="zoomInModal2" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="zoomInModalLabel">Present Address <small class="text-success" style="font-weight: lighter;">Edit Here</small></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form id="frmPresentAddr">                       
                        <div class="row">
                          <div class="col-xl-12"> 
                          <label for="">Enter House Number</label>                          
                            <input type="text" id="r_hno" name="r_hno" value="<?php echo $present_addr_arr['r_hno']?>" class="form-control" placeholder="House Number">
                          </div>
                          <div class="col-xl-12 mt-2">     
                          <label for="">Enter Street Number</label>                      
                            <input type="text" id="r_street" name="r_street" value="<?php echo $present_addr_arr['r_street']?>" class="form-control" placeholder="Street Number">
                          </div>
                          <div class="col-xl-6 mt-2">  
                          <label for="">Enter Landmark</label>                         
                            <input type="text" id="r_landmark" name="r_landmark" value="<?php echo $present_addr_arr['r_landmark']?>" class="form-control" placeholder="Enter Landmark">
                          </div>
                          <div class="col-xl-6 mt-2">   
                          <label for="">Enter City</label>                        
                            <input type="text" id="r_city" name="r_city" value="<?php echo $present_addr_arr['r_city']?>" class="form-control" placeholder="Enter City">
                          </div>
                          <div class="col-xl-6 mt-2">
                          <label for="">Enter State</label>                           
                            <input type="text" id="r_state" name="r_state" value="<?php echo $present_addr_arr['r_state']?>" class="form-control" placeholder="Enter State">
                          </div>
                          <div class="col-xl-6 mt-2">
                          <label for="">Enter Pincode</label>                           
                            <input type="number" id="r_pincode" name="r_pincode" value="<?php echo $present_addr_arr['r_pincode']?>" class="form-control" placeholder="Enter Pin Code">
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
                          <h5 class="modal-title" id="zoomInModalLabel">Office Address <small class="text-success" style="font-weight: lighter;">Edit Here</small></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form id="frmOfficeAddr">                       
                        <div class="row">
                          <div class="col-xl-12"> 
                          <label for="">Enter House Number</label>                          
                            <input type="text" id="o_hno" name="o_hno" value="<?php echo $office_addr_arr['o_hno']?>" class="form-control" placeholder="House Number">
                          </div>
                          <div class="col-xl-12 mt-2">
                          <label for="">Enter Street Number</label>                           
                            <input type="text" id="o_street" name="o_street" value="<?php echo $office_addr_arr['o_street']?>" class="form-control" placeholder="Street Number">
                          </div>
                          <div class="col-xl-6 mt-2">
                          <label for="">Enter Landmark</label>                           
                            <input type="text" id="o_landmark" name="o_landmark" value="<?php echo $office_addr_arr['o_landmark']?>" class="form-control" placeholder="Enter Landmark">
                          </div>
                          <div class="col-xl-6 mt-2">
                          <label for="">Enter City</label>                           
                            <input type="text" id="o_city" name="o_city" value="<?php echo $office_addr_arr['o_city']?>" class="form-control" placeholder="Enter City">
                          </div>
                          <div class="col-xl-6 mt-2"> 
                          <label for="">Enter State</label>                          
                            <input type="text" id="o_state" name="o_state" value="<?php echo $office_addr_arr['o_state']?>" class="form-control" placeholder="Enter State">
                          </div>
                          <div class="col-xl-6 mt-2">   
                          <label for="">Enter Pincode</label>                        
                            <input type="number" id="o_pincode" name="o_pincode" value="<?php echo $office_addr_arr['o_pincode']?>" class="form-control" placeholder="Enter Pin Code">
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
                          <h5 class="modal-title" id="zoomInModalLabel">Decision Maker Details <small class="text-success" style="font-weight: lighter;">Edit Here</small></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                    <form id="frmDecmaker">
                        <div class="row">
                          <div class="col-xl-6 mt-2">
                          <label for="">Enter Decision Maker</label>                           
                            <input type="text" id="d_name" name="d_name" value="<?php echo $dec_maker[0]->d_name; ?>" class="form-control" placeholder="Decision Name">
                          </div>
                          <div class="col-xl-6 mt-2">  
                          <label for="">Enter Mobilr number</label>                         
                            <input type="text" id="d_mobile_no" name="d_mobile_no" value="<?php echo $dec_maker[0]->d_mobile_no; ?>" class="form-control" placeholder="Mobile Number">
                          </div>               
                          <div class="col-xl-6 mt-2">
                          <label for="">Enter Email</label>                           
                            <input type="email" id="d_email_id" name="d_email_id" value="<?php echo $dec_maker[0]->d_email_id; ?>" class="form-control" placeholder="Enter Email">
                          </div>
                          <div class="col-xl-6 mt-2"> 
                          <label for="">Enter Relation</label>                          
                            <input type="text" id="d_relation" name="d_relation" value="<?php echo $dec_maker[0]->d_relation; ?>" class="form-control" placeholder="Enter Relation">
                          </div>                       
                          <div class="col-xl-6 mt-2">
                          <label for="">Enter Pan Card</label>                           
                            <input type="text" id="d_pan_no" name="d_pan_no" value="<?php echo $dec_maker[0]->d_pan_no; ?>" class="form-control" placeholder="Enter Pan Number">
                          </div>
                          <div class="col-xl-6 mt-2">
                          <label for="">Enter Adhaar Card</label>                           
                            <input type="text" id="d_aadhar_no" name="d_aadhar_no" value="<?php echo $dec_maker[0]->d_aadhar_no; ?>" class="form-control" placeholder="Enter Adhaar Card">
                          </div>
                          <span class="mt-2">Address</span>
                          <div class="col-xl-12 mt-2">
                          <label for="">Enter House Number</label>                           
                            <input type="text" id="d_hno" name="d_hno" value="<?php echo $d_addr_arr['d_hno']?>" class="form-control" placeholder="House Number">
                          </div>
                          <div class="col-xl-12 mt-2"> 
                          <label for="">Enter Street</label>                          
                            <input type="text" id="d_street" name="d_street" value="<?php echo $d_addr_arr['d_street']?>" class="form-control" placeholder="Street Number">
                          </div>
                          <div class="col-xl-6 mt-2"> 
                          <label for="">Enter Landmark</label>                          
                            <input type="text" id="d_landmark" name="d_landmark" value="<?php echo $d_addr_arr['d_landmark']?>" class="form-control" placeholder="Enter Landmark">
                          </div>
                          <div class="col-xl-6 mt-2">
                          <label for="">Enter City</label>                           
                            <input type="text" id="d_city" name="d_city" value="<?php echo $d_addr_arr['d_city']?>" class="form-control" placeholder="Enter City">
                          </div>
                          <div class="col-xl-6 mt-2">
                          <label for="">Enter State</label>                           
                            <input type="text" id="d_state" name="d_state" value="<?php echo $d_addr_arr['d_state']?>" class="form-control" placeholder="Enter State">
                          </div>
                          <div class="col-xl-6 mt-2"> 
                          <label for="">Enter Pincode</label>                          
                            <input type="number" id="d_pincode" name="d_pincode" value="<?php echo $d_addr_arr['d_pincode']?>" class="form-control" placeholder="Enter Pin Code">
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
                          <h5 class="modal-title" id="zoomInModalLabel">Payee Details <small class="text-success" style="font-weight: lighter;">Edit Here</small></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form id="frmPayee">
                        <div class="row">
                          <div class="col-xl-6 mt-2">  
                          <label for="">Enter Payee Name</label>                         
                            <input type="text" id="payee_name" name="payee_name" value="<?php echo $payee[0]->payee_name; ?>" class="form-control" placeholder="Decision Name">
                          </div>
                          <div class="col-xl-6 mt-2"> 
                          <label for="">Enter Mobile Number</label>                          
                            <input type="text" id="payee_mobile_no" name="payee_mobile_no" value="<?php echo $payee[0]->p_mobile_no; ?>" class="form-control" placeholder="Mobile Number">
                          </div>               
                          <div class="col-xl-6 mt-2">  
                          <label for="">Enter Email</label>                         
                            <input type="email" id="payee_email_id" name="payee_email_id" value="<?php echo $payee[0]->p_email_id; ?>" class="form-control" placeholder="Enter Email">
                          </div>
                          <div class="col-xl-6 mt-2">
                          <label for="">Enter Relation</label>                           
                            <input type="text" id="payee_relation" name="payee_relation" value="<?php echo $payee[0]->p_relation; ?>" class="form-control" placeholder="Enter Relation">
                          </div>                       
                          <div class="col-xl-6 mt-2">
                          <label for="">Enter Pan Card</label>                           
                            <input type="text" id="payee_pan_no" name="payee_pan_no" value="<?php echo $payee[0]->p_pan_no; ?>" class="form-control" placeholder="Enter Pan Number">
                          </div>
                          <div class="col-xl-6 mt-2"> 
                          <label for="">Enter Adhaar Card</label>                          
                            <input type="text" id="payee_aadhar_no" name="payee_aadhar_no" value="<?php echo $payee[0]->p_aadhar_no; ?>" class="form-control" placeholder="Enter Adhaar Card">
                          </div>
                          <span class="mt-2">Address</span>
                          <div class="col-xl-12 mt-2">
                          <label for="">Enter House Number</label>                           
                            <input type="text" id="payee_hno" name="payee_hno" value="<?php echo $p_addr_arr['p_hno']?>"  class="form-control" placeholder="House Number">
                          </div>
                          <div class="col-xl-12 mt-2">
                          <label for="">Enter Street Number</label>                           
                            <input type="text" id="payee_street" name="payee_street" value="<?php echo $p_addr_arr['p_street']?>" class="form-control" placeholder="Street Number">
                          </div>
                          <div class="col-xl-6 mt-2">  
                          <label for="">Enter Landmark</label>                         
                            <input type="text" id="payee_landmark" name="payee_landmark" value="<?php echo $p_addr_arr['p_landmark']?>" class="form-control" placeholder="Enter Landmark">
                          </div>
                          <div class="col-xl-6 mt-2">  
                          <label for="">Enter City</label>                         
                            <input type="text" id="payee_city" name="payee_city" value="<?php echo $p_addr_arr['p_city']?>" class="form-control" placeholder="Enter City">
                          </div>
                          <div class="col-xl-6 mt-2">  
                          <label for="">Enter State</label>                         
                            <input type="text" id="payee_state" name="payee_state" value="<?php echo $p_addr_arr['p_state']?>" class="form-control" placeholder="Enter State">
                          </div>
                          <div class="col-xl-6 mt-2">  
                          <label for="">Enter Pin Code</label>                         
                            <input type="number" id="payee_pincode" name="payee_pincode" value="<?php echo $p_addr_arr['p_pincode']?>" class="form-control" placeholder="Enter Pin Code">
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
    
    <!----------------------Transaction Details Modal-----------------------> 
        <div id="zoomInModaltransaction" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="zoomInModalLabel">Transaction Details <small class="text-success" style="font-weight: lighter;">Edit Here</small></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form id="frmTrans">
                        <div class="row">
                          <div class="col-xl-6 mt-2">   
                          <label for="">Enter Any Offer</label>                        
                            <input type="number" id="offer_amt" name="offer_amt" value="<?php echo $trans_detail[0]->offer_amt; ?>" class="form-control" placeholder="Enter Offer">
                          </div>
                          <div class="col-xl-6 mt-2">     
                          <label for="">Select Quotation</label>                      
                              <select class="form-select" id="quotation_type" name="quotation_type" aria-label="Default select example">
                                <option selected="">Quotation Type</option>
                                <option <?php if($trans_detail[0]->quotation_type == "Standard"){ echo 'selected="selected"'; } ?> value="Standard">Standard</option>
                                <option <?php if($trans_detail[0]->quotation_type == "Premium"){ echo 'selected="selected"'; } ?> value="Premium">Premium</option>
                                <option <?php if($trans_detail[0]->quotation_type == "Luxuary"){ echo 'selected="selected"'; } ?> value="Luxuary">Luxuary</option>
                                <option <?php if($trans_detail[0]->quotation_type == "Ultra Luxuary"){ echo 'selected="selected"'; } ?> value="Ultra Luxuary">Ultra Luxuary</option>
                              </select>
                          </div>               
                          <div class="col-xl-6 mt-2">                         
                            <input type="number" id="final_rate" name="final_rate" value="<?php echo $trans_detail[0]->final_rate ?? "";; ?>" class="form-control" placeholder="Discounted Rate">
                          </div>
                          <div class="col-xl-6 mt-2">                         
                            <input type="number" id="final_amt" name="final_amt" value="<?php echo $trans_detail[0]->final_amt ?? "";; ?>" class="form-control" placeholder="Final Amount">
                          </div>
                          <div class="col-xl-12 mt-2">                         
                            <input type="text" id="final_amt_in_word" name="final_amt_in_word" value="<?php echo $trans_detail[0]->final_amt_in_word ?? "";; ?>" class="form-control" placeholder="Enter Amount in words">
                          </div>
                          <div class="col-xl-12 mt-2">                         
                            <input type="number" id="paid_booking_amt" name="paid_booking_amt" value="<?php echo $trans_detail[0]->paid_booking_amt ?? "";; ?>"  class="form-control" placeholder="Enter Booking Amount Paid(Not-Refundable)">
                          </div>


                      <?php /*?>
                          <div class="col-xl-12 mt-2">                         
                              <select class="form-select" id="payment_mode" name="payment_mode" aria-label="Default select example">
                                <option selected="">Payment Mode</option>
                                <option <?php if($trans_detail[0]->payment_mode == "Cash"){ echo 'selected="selected"'; } ?> value="Cash">Cash</option>
                                <option <?php if($trans_detail[0]->payment_mode == "UPI"){ echo 'selected="selected"'; } ?> value="UPI">UPI</option>
                                <option <?php if($trans_detail[0]->payment_mode == "NEFT/RTGS/IMPS"){ echo 'selected="selected"'; } ?> value="NEFT/RTGS/IMPS">NEFT/RTGS/IMPS</option>
                                <option <?php if($trans_detail[0]->payment_mode == "Card"){ echo 'selected="selected"'; } ?> value="Card">Card</option>
                                <option <?php if($trans_detail[0]->payment_mode == "Cheque"){ echo 'selected="selected"'; } ?> value="Cheque">Cheque</option>
                              </select>
                          </div> 
                          <div class="col-xl-12 mt-2">                         
                            <input type="text" id="upi_id" name="upi_id" value="<?php echo $trans_detail[0]->upi_id ?? "";; ?>" class="form-control" placeholder="Enter UPI ID">
                          </div>
                          <div class="col-xl-12 mt-2">                         
                            <input type="number" id="cheque_no" name="cheque_no" value="<?php echo $trans_detail[0]->cheque_no ?? "";; ?>" class="form-control" placeholder="Enter Cheque no./ Transection Id:">
                          </div>
                          <div class="col-xl-6 mt-2">                         
                            <input type="date" id="" name="" value="<?php echo $trans_detail[0]->offer_amt ?? "";; ?>" class="form-control" placeholder="Enter Cheque Date">
                          </div>
                        <?php 
                        
                        */?>
                        
                          <div class="col-xl-6 mt-2">                         
                              <select class="form-select" id="funding_mode" name="funding_mode" aria-label="Default select example">
                                <option>Funding Mode</option>
                                <option <?php if($trans_detail[0]->funding_mode == "Self"){ echo 'selected="selected"'; } ?> value="Self">Self</option>
                                <option <?php if($trans_detail[0]->funding_mode == "Bank"){ echo 'selected="selected"'; } ?> value="Bank">Bank</option>
                                <option <?php if($trans_detail[0]->funding_mode == "Both"){ echo 'selected="selected"'; } ?> value="Both">Both</option>
                              </select>
                          </div>  
                          <div class="col-xl-12 mt-2">                         
                            <input type="number" id="self_amt" name="self_amt" value="<?php echo $trans_detail[0]->self_amt ?? "";; ?>" class="form-control" placeholder="Self Amount">
                          </div>     
                          <div class="col-xl-6 mt-2">                         
                            <input type="text" id="bank_name" name="bank_name" value="<?php echo $trans_detail[0]->bank_name ?? "";; ?>" class="form-control" placeholder="Bank Name">
                          </div> 
                          <div class="col-xl-6 mt-2">                         
                            <input type="number" id="loan_amt" name="loan_amt" value="<?php echo $trans_detail[0]->loan_amt ?? "";; ?>" value="" class="form-control" placeholder="Loan Amount">
                          </div>
                          <div class="col-xl-12 mt-2">                         
                            <input type="number" id="loan_acc_no" name="loan_acc_no" value="<?php echo $trans_detail[0]->loan_acc_no ?? "";; ?>" class="form-control" placeholder="Loan Account No.">
                          </div>                                         
                        </div>  
                        <div class="modal-footer">
                          <input type="hidden" name="booking_id" value="<?php echo $client_info[0]->id ?? ""; ?>">
                          <input type="hidden" name="trans_id" value="<?php echo $trans_detail[0]->id ?? ""; ?>">
                          <input type="hidden" name="type" value="trans_details">                       
                          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" id="btn_trans">Update Now</button>
                      </div>                  
                     </form>
                   </div>     
                 </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->                                     



  <!----------------------Plot Details Modal-----------------------> 
  <div id="zoomInModalplotdetails" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="zoomInModalLabel">Plot Details <small class="text-success" style="font-weight: lighter;">Edit Here</small></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                    <form id="frmPlot">
                        <div class="row">
                          <div class="col-xl-12 mt-2">                         
                            <input type="text" id="plot_location" name="plot_location" value="<?php echo $plot_detail[0]->plot_location ?? "";; ?>"  class="form-control" placeholder="Plot Location">
                          </div>
                          <div class="col-xl-4 mt-2">                         
                            <input type="text" id="plot_no" name="plot_no" value="<?php echo $plot_detail[0]->plot_no ?? "";; ?>" class="form-control" placeholder="Plot No.">
                          </div>               
                          <div class="col-xl-3 mt-2">                         
                            <input type="number" id="plot_size" name="plot_size" value="<?php echo $plot_detail[0]->plot_size ?? "";; ?>" class="form-control" placeholder="Plot Size">
                          </div>
                          <div class="col-xl-5 mt-2">                         
                              <select class="form-select" id="plot_facing" name="plot_facing" aria-label="Default select example">
                                <option>Select Plot Facing</option>
                                <option <?php if($plot_detail[0]->plot_facing == "North"){ echo 'selected="selected"'; } ?> value="North">North</option>
                                <option <?php if($plot_detail[0]->plot_facing == "South"){ echo 'selected="selected"'; } ?> value="South">South</option>
                                <option <?php if($plot_detail[0]->plot_facing == "East"){ echo 'selected="selected"'; } ?> value="East">East</option>
                                <option <?php if($plot_detail[0]->plot_facing == "West"){ echo 'selected="selected"'; } ?> value="West">West</option>
                              </select>
                          </div> 
                          <div class="col-xl-6 mt-2">                         
                              <select class="form-select" id="num_road" name="num_road" value="<?php echo $plot_detail[0]->num_road; ?>" aria-label="Default select example">
                                <option>Select Road Number</option>
                                <option <?php if($plot_detail[0]->num_road == 1){ echo 'selected="selected"'; } ?> value="1">1</option>
                                <option <?php if($plot_detail[0]->num_road == 2){ echo 'selected="selected"'; } ?> value="2">2</option>
                                <option <?php if($plot_detail[0]->num_road == 3){ echo 'selected="selected"'; } ?> value="3">3</option>
                                <option <?php if($plot_detail[0]->num_road == 4){ echo 'selected="selected"'; } ?> value="4">4</option>
                              </select>
                          </div>  
                          <div class="col-xl-6 mt-2">                         
                            <input type="number" id="plot_depth" name="plot_depth" value="<?php echo $plot_detail[0]->plot_depth ?? ""; ?>"  class="form-control" placeholder="Depth from Plinth">
                          </div>                                               
                        </div>
                        <div class="modal-footer">
                          <input type="hidden" name="booking_id" value="<?php echo $client_info[0]->id ?? ""; ?>">
                          <input type="hidden" name="plot_id" value="<?php echo $plot_detail[0]->id ?? ""; ?>">
                          <input type="hidden" name="type" value="plot_details">                       
                          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" id="btn_plot">Update Now</button>
                        </div>                         
                      </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->                                     
  <!-------------------End of Plot Details Modal----------------->

  <!----------------------Attached Document Modal-----------------------> 
  <div id="zoomInModalattacheddocument" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="zoomInModalLabel">Attached Documents <small class="text-success" style="font-weight: lighter; margin-left:30px;">Edit Here</small></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form id="frmDoc" method="post" enctype="multipart/form-data">
                        <div class="row">
                          <div class="col-xl-12 mt-2">                         
                           <span class="text-primary"> Attched Documents</span>
                          </div>
                          <div class="col-xl-12">                         
                            <!--a href="Javascript:void(0)" class="badge bg-primary" style="color:white;"> Latest Bi &nbsp;<i class="ri-download-2-line"></i></a>
                            <a href="Javascript:void(0)" class="badge bg-primary" style="color:white;">Adhar Card &nbsp;<i class="ri-download-2-line"></i></a>
                            <a href="Javascript:void(0)" class="badge bg-primary" style="color:white;">Pan Card &nbsp;<i class="ri-download-2-line"></i></a>
                            <a href="Javascript:void(0)" class="badge bg-primary" style="color:white;">Latest Eletrcity copy &nbsp;<i class="ri-download-2-line"></i></a>
                            <a href="Javascript:void(0)" class="badge bg-primary" style="color:white;">Registry Copy &nbsp;<i class="ri-download-2-line"></i></a>
                            <a href="Javascript:void(0)" class="badge bg-primary" style="color:white;">Khasra Copy &nbsp;<i class="ri-download-2-line"></i></a-->
                          
                            <?php
                                if($attach_doc[0]->chk_adhar_copy == "yes")
                                {
                                  $adhar_copy = base_url("assets/uploads/".$attach_doc[0]->adhar_copy);
                                  echo '<a href="'.$adhar_copy.'" class="badge bg-primary" style="color:white;" download="'.$adhar_copy.'">Aadhar Card &nbsp;<i class="ri-download-2-line"></i></a>';
                                }
                                if($attach_doc[0]->chk_pancard_copy == "yes")
                                {
                                  $pancard_copy = base_url("assets/uploads/".$attach_doc[0]->pancard_copy);
                                  echo '&nbsp;&nbsp;<a href="'.$pancard_copy.'" class="badge bg-primary" style="color:white;" download="'.$pancard_copy.'">PAN Card &nbsp;<i class="ri-download-2-line"></i></a>';
                                }
                                if($attach_doc[0]->chk_electric_bill == "yes")
                                {
                                  $electric_bill = base_url("assets/uploads/".$attach_doc[0]->electric_bill);
                                  echo '&nbsp;&nbsp;<a href="'.$electric_bill.'" class="badge bg-primary" style="color:white;" download="'.$electric_bill.'">Electricity Bill &nbsp;<i class="ri-download-2-line"></i></a>';
                                }
                                if($attach_doc[0]->chk_registry_copy == "yes")
                                {
                                  $registry_copy = base_url("assets/uploads/".$attach_doc[0]->registry_copy);
                                  echo '&nbsp;&nbsp;<a href="'.$registry_copy.'" class="badge bg-primary" style="color:white;" download="'.$registry_copy.'">Registry Copy &nbsp;<i class="ri-download-2-line"></i></a>';
                                }
                                if($attach_doc[0]->chk_b_one_copy == "yes")
                                {
                                  $b_one_copy = base_url("assets/uploads/".$attach_doc[0]->b_one_copy);
                                  echo '&nbsp;&nbsp;<a href="'.$b_one_copy.'" class="badge bg-primary" style="color:white;" download="'.$b_one_copy.'">Latest B-ONE Copy&nbsp;<i class="ri-download-2-line"></i></a>';
                                }

                                if($attach_doc[0]->chk_khasra_map == "yes")
                                {
                                  $khasra_map = base_url("assets/uploads/".$attach_doc[0]->khasra_map);
                                  echo '&nbsp;&nbsp;<a href="'.$khasra_map.'" class="badge bg-primary" style="color:white;" download="'.$khasra_map.'">Khasra Copy &nbsp;<i class="ri-download-2-line"></i></a>';
                                }

                                if($attach_doc[0]->chk_approved_tncp == "yes")
                                {
                                  $approved_tncp = base_url("assets/uploads/".$attach_doc[0]->approved_tncp);
                                  echo '&nbsp;&nbsp;<a href="'.$approved_tncp.'" class="badge bg-primary" style="color:white;" download="'.$approved_tncp.'">Map TNCP/Municipal &nbsp;<i class="ri-download-2-line"></i></a>';
                                }

                                if($attach_doc[0]->chk_tax_receipt == "yes")
                                {
                                  $tax_receipt = base_url("assets/uploads/".$attach_doc[0]->tax_receipt);
                                  echo '&nbsp;&nbsp;<a href="'.$khasra_map.'" class="badge bg-primary" style="color:white;" download="'.$tax_receipt.'">TAX Receipt &nbsp;<i class="ri-download-2-line"></i></a>';
                                }

                                if($attach_doc[0]->chk_any_other == "yes")
                                {
                                  $any_other = base_url("assets/uploads/".$attach_doc[0]->any_other);
                                  echo '&nbsp;&nbsp;<a href="'.$khasra_map.'" class="badge bg-primary" style="color:white;" download="'.$any_other.'">'.$attach_doc[0]->other_name.' &nbsp;<i class="ri-download-2-line"></i></a>';
                                }

                            ?>                          
                          </div>  

                          <hr style="border-top: 1px dashed red;margin-top: 10px;">
                          <div class="col-xl-12">                         
                           <span class="text-danger">Documents have to attached</span>
                          </div>
                          <div class="col-xl-12"> 
                              <?php
                                if($attach_doc[0]->chk_adhar_copy != "yes")
                                {
                                ?>
                                  <div class="col-md-12"> 
                                    <input type="checkbox" class="form-check-input" id="adhar_copy" name="chk_adhar_copy" value="yes">
                                    <label for="adhar_copy" class="form-check-lebel">Aadhar Card Copy</label>
                                    <div class="card-body" id="up_adhar_copy" style="display:none;">
                                      <input type="file" class="form-control" name="adhar_copy"/>
                                    </div>
                                  </div>
                                <?php
                                }
                                if($attach_doc[0]->chk_pancard_copy != "yes")
                                {
                                ?>
                                  <div class="col-md-12">         
                                    <input type="checkbox" class="form-check-input" id="pancard_copy" name="chk_pancard_copy" value="yes">
                                    <label for="pancard_copy" class="form-check-lebel">Pan Card Copy</label> 
                                    <div class="card-body" id="up_pancard_copy" style="display:none;">
                                      <input type="file" class="form-control" name="pancard_copy">
                                    </div>                      
                                  </div>        
                                <?php
                                }
                                if($attach_doc[0]->chk_electric_bill != "yes")
                                {
                                ?>
                                  <div class="col-md-12">         
                                    <input type="checkbox" class="form-check-input" id="electric_bill" name="chk_electric_bill" value="yes">
                                    <label for="electric_bill" class="form-check-lebel">Latest Electricity bill copy</label> 
                                    <div class="card-body" id="up_electric_bill" style="display:none;">
                                      <input type="file" class="form-control" name="electric_bill">
                                    </div>                       
                                  </div>
                                <?php
                                }
                                if($attach_doc[0]->chk_registry_copy != "yes")
                                {
                                ?>
                                  <div class="col-md-12">         
                                    <input type="checkbox" class="form-check-input" id="registry_copy" name="chk_registry_copy" value="yes">
                                    <label for="registry_copy" class="form-check-lebel">Registry copy</label>  
                                    <div class="card-body" id="up_registry_copy" style="display:none;">
                                      <input type="file" class="form-control" name="registry_copy">
                                    </div>                      
                                  </div>
                                <?php
                                }
                                if($attach_doc[0]->chk_b_one_copy != "yes")
                                {
                                ?>
                                  <div class="col-md-12">         
                                    <input type="checkbox" class="form-check-input" id="b_one_copy" name="chk_b_one_copy" value="yes">
                                    <label for="b_one_copy" class="form-check-lebel">Latest B-ONE</label>                       
                                    <div class="card-body" id="up_b_one_copy" style="display:none;">
                                      <input type="file" class="form-control" name="b_one_copy">
                                    </div> 
                                  </div>
                                <?php
                                }
                                if($attach_doc[0]->chk_khasra_map != "yes")
                                {
                                ?>
                                  <div class="col-md-12">         
                                    <input type="checkbox" class="form-check-input" id="khasra_map" name="chk_khasra_map" value="yes">
                                    <label for="khasra_map" class="form-check-lebel">Khasra Map</label>                       
                                    <div class="card-body" id="up_khasra_map" style="display:none;">
                                      <input type="file" class="form-control" name="khasra_map">
                                    </div> 
                                  </div>          
                                <?php
                                }
                                if($attach_doc[0]->chk_approved_tncp != "yes")
                                {
                                ?>
                                  <div class="col-md-12">         
                                    <input type="checkbox" class="form-check-input" id="approved_tncp" name="chk_approved_tncp" value="yes">
                                    <label for="approved_tncp" class="form-check-lebel">Approved Map TNCP/ Municipal Corportion</label>  
                                    <div class="card-body" id="up_approved_tncp" style="display:none;">
                                      <input type="file" class="form-control" name="approved_tncp">
                                     </div>                      
                                  </div>          
                                <?php
                                }

                                if($attach_doc[0]->chk_tax_receipt != "yes")
                                {
                                ?>
                                  <div class="col-md-12">         
                                    <input type="checkbox" class="form-check-input" id="tax_receipt" name="chk_tax_receipt" value="yes">
                                    <label for="tax_receipt" class="form-check-lebel">Property Tax Receipt</label> 
                                    <div class="card-body" id="up_tax_receipt" style="display:none;">
                                      <input type="file" class="form-control" name="tax_receipt">
                                    </div>                       
                                  </div>       
                                <?php
                                }
                                if($attach_doc[0]->chk_any_other != "yes")
                                {
                                ?>
                                <div class="col-md-12">    
                                    <input type="checkbox" class="form-check-input" id="any_other" name="chk_any_other" value="yes">
                                    <label for="any_other" class="form-check-lebel">Any Other</label>
                                    <div class="card-body" id="up_any_other" style="display:none;">
                                      <input type="text" class="form-control" name="other_name" placeholder="Enter Name"><br/>  
                                      <input type="file" class="form-control" name="any_other">
                                    </div>                        
                                </div>
                                <?php
                                }                   
                              ?>

                          </div>                                              
                        </div>  

                        <div class="modal-footer">
                          <input type="hidden" name="booking_id" value="<?php echo $client_info[0]->id ?? ""; ?>">
                          <input type="hidden" name="attached_id" value="<?php echo $attach_doc[0]->id ?? ""; ?>">
                          <input type="hidden" name="type" value="att_doc">                       
                          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" id="btn_doc">Update Now</button>
                        </div>

                      </form>

                    </div>                      
                 </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->                                     
    <!-------------------End of Attached Document----------------->

  <!-- End Page-content -->
  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"> Design &amp; Develop By <a href="https://ukcdesigner.in/" target="_blank">UKConcept Designer</a>
        </div>
        <div class="col-sm-6">
          <div class="text-sm-end d-none d-sm-block"> Copyright 2023 © All Right Reserved. </div>
        </div>
      </div>
    </div>
  </footer>
  </div>
  <!-- end main content-->
</div>
<!-- END layout-wrapper -->
<!--start back-to-top-->

<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
  <i class="ri-arrow-up-line"></i>
</button>

<!--end back-to-top-->
<!--JAVASCRIPT-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<!-- App js -->
<script src="<?php echo base_url();?>assets/js/app.js"></script>
<script>

$(document).ready(function(){

/**----Blink Text-------*/ 
   function blink_text() {
      $('#link_request').fadeOut();
      $('#link_request').fadeIn();
    }
  setInterval(blink_text, 2000);
/**----End Blink Text-------*/

/**-------Mail Function -------- */
$(document).on("click", "#btnMail", function(){

  var booking_id = $(this).attr("mid");
  $.ajax({ 
      url: "<?php echo site_url('mail/send_booking_mail')?>", 
      type: "POST",
      data: ({booking_id: booking_id, mail_type: "verification"}),
      beforeSend: function(){
        $("#div_mail").hide();
        $("#div_loader").show(); 
      },
      success: function(data) {       
        var spl_txt = data.split("~~~");
        console.log(data);
        console.log(spl_txt[1]);
        if(spl_txt[1] == 1)
        { 
          $("#a_loader").html("Successfully Sent...");                   
        }
      },
      error: function() { 
        $("#a_loader").html("Something went wrong...");
        setTimeout(() => {
          $("#div_mail").show();
          $("#div_loader").hide();        
        }, 5000);
      },
      complete: function() { 
        $("#a_loader").html("Successfully Sent...");
        $("#link_request").fadeOut();

        setTimeout(() => {
          $("#div_mail").show();
          $("#div_loader").hide();        
        }, 5000);  
      }

  });

});

/**-------Booking Confirmation Mail Function -------- */

$(document).on("click", "#btnMail_2", function(){

  var booking_id = $(this).attr("mid");
  var chk_attach = $("#chk_attach").val();

  var is_attachment = "";

  if($("#chk_attach").is(":checked")) {     
    
      is_attachment = "yes";
  }
  else{
      is_attachment = "no";
  }

   //alert(is_attachment);
  //return false;

  $.ajax({ 
      url: "<?php echo site_url('mail/send_confirmation_mail')?>", 
      type: "POST",
      data: ({booking_id: booking_id, is_attachment: is_attachment}),

      beforeSend: function(){
        $("#div_mail_2").hide();
        $("#div_loader_2").show(); 
      },
      success: function(data) {       
        var spl_txt = data.split("~~~");
        //console.log(data);
        //console.log(spl_txt[1]);
        if(spl_txt[1] == 1)
        { 
          $("#a_loader_2").html("Successfully Sent...");                   
        }
    },
    error: function() { 
      $("#a_loader_2").html("Something went wrong...");
      setTimeout(() => {
        $("#div_mail_2").show();
        $("#div_loader_2").hide();        
      }, 5000);
    },
    complete: function() { 

      $("#a_loader_2").html("Successfully Sent...");

      setTimeout(() => {
        $("#div_mail_2").show();
        $("#div_loader_2").hide();        
      }, 5000);  

    }

});

});

/**--------------CHKECK Box Verify Transaction-------------------------*/

$(document).on("change", "#chk_trans", function(){
 
 var verify = "";
 if($(this).is(":checked")) {     
   verify = "yes";
   $("#chk_attach").removeAttr("disabled", true);
   $(".btnMail_2").attr("id", "btnMail_2");
 }
 else{
   verify = "no";
   $("#chk_attach").attr("disabled", true);
   $(".btnMail_2").removeAttr("id");
 }
   

 var url = "<?php echo site_url('booking/ajax_booking_verify')?>";
 var booking_id = $("#booking_id").val();

 $.ajax({
         type: "POST",
         url: url,
         data: {booking_id: booking_id, verify: verify, type: "trans"}, 
         success: function(data)
         { 
             //console.log(data);                 
             var spl_txt = data.split("~~~");
             if(spl_txt[1] == 1)
             { 
                if(verify == "yes") {     

                    $("#trans_verify_date").html('Date: '+spl_txt[2]);
                    $("#trans_verify_by").html('Verify By: '+spl_txt[3]);

                    alert("Successfully Verified...");                   
                  }
                  else{                 

                    $("#trans_verify_date").html('Date: ');
                    $("#trans_verify_by").html('Verify By: ');

                    alert("Unverified...");
                  }                             
             }
             else
             { 
               alert("Something went wrong...");                   
             }   
         }
   });
});


/**--------------CHKECK Box Verify Marketing-------------------------*/

$(document).on("change", "#chk_marketing", function(){
 
  var verify = "";

  if($(this).is(":checked")) {     
    verify = "yes";
  }
  else{
    verify = "no";
  }  

  var url = "<?php echo site_url('booking/ajax_booking_verify')?>";
  var booking_id = $("#booking_id").val();

  $.ajax({
          type: "POST",
          url: url,
          data: {booking_id: booking_id, verify: verify, type: "marketing"}, 
          success: function(data)
          { 
              //console.log(data);                 
              var spl_txt = data.split("~~~");
              if(spl_txt[1] == 1)
              {   
                if(verify == "yes"){  
                  $("#marketing_date").html('Date: '+spl_txt[2]);   
                    alert("Successfully Verified...");
                  }
                  else{                 
                    $("#marketing_date").html('Date: ');
                    alert("Unverified...");
                  }                               
              }
              else
              { 
                alert("Something went wrong...");                   
              }   
          }
    });
});

/**--------------CHKECK Box Make Anubandh-------------------------*/

$(document).on("change", "#chk_make_anumandh", function(){
  
  var verify = "";
  if($(this).is(":checked")) {     
    verify = 1;
  }
  else{
    verify = 0;
  }  

 var url = "<?php echo site_url('booking/ajax_make_anubandh')?>";
 var booking_id = $("#booking_id").val();

 $.ajax({
         type: "POST",
         url: url,
         data: {booking_id: booking_id, verify: verify, type: "admin"}, 
         success: function(data)
         { 
             //$("#chk_make_anumandh").attr("disabled", true);
            //console.log(data);                 
             var spl_txt = data.split("~~~");
             if(spl_txt[1] == 1)
             { 
                if(verify == 1) {
                    $("#aggr_date").html('Aggrement Date: '+spl_txt[2]);
                    alert("Successfully saved...");
                    $("#chk_make_anumandh").attr("disabled", true);
                  }
                  else{
                    $("#aggr_date").html('Aggrement Date: ');
                  
                    alert("Unsaved...");
                  }                        
             }
             else
             { 
               alert("Something went wrong...");                   
             }   
         }
   });
   
});





/**--------------CHKECK Box Verify Admin-------------------------*/

  $(document).on("change", "#chk_admin", function(){
  
  var verify = "";
  if($(this).is(":checked")) {     
    verify = "yes";
  }
  else{
    verify = "no";
  }  

 var url = "<?php echo site_url('booking/ajax_booking_verify')?>";
 var booking_id = $("#booking_id").val();

 $.ajax({
         type: "POST",
         url: url,
         data: {booking_id: booking_id, verify: verify, type: "admin"}, 
         success: function(data)
         { 
             //console.log(data);                 
             var spl_txt = data.split("~~~");
             if(spl_txt[1] == 1)
             { 
                if(verify == "yes") {
                    $("#admin_date").html('Date: '+spl_txt[2]);
                    alert("Successfully Verified...");
                  }
                  else{
                    $("#admin_date").html('Date: ');
                    alert("Unverified...");
                  }                        
             }
             else
             { 
               alert("Something went wrong...");                   
             }   
         }
   });
   
});

/**--------------CHKECK Box Verify Client-------------------------*/

$(document).on("change", "#chk_client", function(){
  
  var verify = "";
  if($(this).is(":checked")) {     
    verify = "yes";
  }
  else{
    verify = "no";
  }  

 var url = "<?php echo site_url('booking/ajax_booking_verify')?>";
 var booking_id = $("#booking_id").val();

 $.ajax({
         type: "POST",
         url: url,
         data: {booking_id: booking_id, verify: verify, type: "client"}, 
         success: function(data)
         { 
             //console.log(data);                 
             var spl_txt = data.split("~~~");
             if(spl_txt[1] == 1)
             { 
               if(verify == "yes") {   
                $("#client_date").html('Date: '+spl_txt[2]);  
                  alert("Successfully Verified...");
                }
                else{   
                  $("#client_date").html('Date: ');                
                  alert("Unverified...");
                }                                 
             }
             else
             { 
               alert("Something went wrong...");                   
             }   
         }         
   });
   
});
/**------Attachment Code---------- */
$("#adhar_copy").on("click", function(){
            if(this.checked){ 
                $("#up_adhar_copy").slideDown();
            }
            else
            {
                $("#up_adhar_copy").slideUp();
            }
        });

        $("#pancard_copy").on("click", function(){
            if(this.checked){ 
                $("#up_pancard_copy").slideDown();
            }
            else
            {
                $("#up_pancard_copy").slideUp();
            }           
        });

        $("#electric_bill").on("click", function(){
            if(this.checked){ 
                $("#up_electric_bill").slideDown();
            }
            else
            {
                $("#up_electric_bill").slideUp();
            }           
        });

        $("#registry_copy").on("click", function(){
            if(this.checked){ 
                $("#up_registry_copy").slideDown();
            }
            else
            {
                $("#up_registry_copy").slideUp();
            }           
        });

        $("#b_one_copy").on("click", function(){
            if(this.checked){ 
                $("#up_b_one_copy").slideDown();
            }
            else
            {
                $("#up_b_one_copy").slideUp();
            }           
        });

        $("#khasra_map").on("click", function(){
            if(this.checked){ 
                $("#up_khasra_map").slideDown();
            }
            else
            {
                $("#up_khasra_map").slideUp();
            }           
        });

        $("#approved_tncp").on("click", function(){
            if(this.checked){ 
                $("#up_approved_tncp").slideDown();
            }
            else
            {
                $("#up_approved_tncp").slideUp();
            }           
        });

        $("#tax_receipt").on("click", function(){
            if(this.checked){ 
                $("#up_tax_receipt").slideDown();
            }
            else
            {
                $("#up_tax_receipt").slideUp();
            }           
        });

        $("#any_other").on("click", function(){
            if(this.checked){ 
                $("#up_any_other").slideDown();
            }
            else
            {
                $("#up_any_other").slideUp();
            }           
        });

       
        

/**-------END Attachment Code----*/




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
                  //console.log(data);                 
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
                  //console.log(data);                 
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
                  //console.log(data);                 
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
                  //console.log(data);                 
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
                //console.log(data);                 
                var spl_txt = data.split("~~~");
                if(spl_txt[1] == 1)
                {
                  alert("Successfully updated...");
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

/**----------Payee Details Script----------------- */  

$('#frmPayee').validate({
    rules: {
      p_name:{
        required: true
      },
      p_mobile_no: {
        required: true
      },
      p_email_id: {
        required: true
      },
      p_relation: {
        required: true
      },      
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
      p_name:{
        required: 'Enter client Name'
      },
      p_mobile_no: {
        required: 'Enter Email Id'
      },
      p_email_id: {
        required: 'Enter Email Id'
      },       
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
      var url = "<?php echo site_url('booking/ajax_client_payee')?>";
      var frmdata = $("#frmPayee").serialize(); //new FormData($('#costForm')[0]);//$("#followupForm").serialize();  
          $.ajax({
              type: "POST",
              url: url,
              data: frmdata, 
              success: function(data)
              { 
                //console.log(data);                 
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
  
/**---------------------Transaction Details--------------------------------------- */  
$('#frmTrans').validate({
    rules: {
      offer_amt:{
        required: true
      },
      final_rate: {
        required: true
      },
      final_amt: {
        required: true
      }
    },
    messages: {
      offer_amt:{
        required: 'Enter client Name'
      },
      final_rate: {
        required: 'Enter Email Id'
      },
      final_amt: {
        required: 'Enter Email Id'
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
      var url = "<?php echo site_url('booking/ajax_booking_transaction')?>";
      var frmdata = $("#frmTrans").serialize(); //new FormData($('#costForm')[0]);//$("#followupForm").serialize();  
          $.ajax({
              type: "POST",
              url: url,
              data: frmdata, 
              success: function(data)
              { 
                //console.log(data);                 
                var spl_txt = data.split("~~~");
                if(spl_txt[1] == 1)
                { 
                  alert("Successfully updated...");
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

/**---------------------Plot Details--------------------------------------- */  

$('#frmPlot').validate({
    rules: {
      plot_location:{
        required: true
      },
      plot_no: {
        required: true
      },
      plot_facing: {
        required: true
      }
    },
    messages: {
      plot_location:{
        required: 'Enter client Name'
      },
      plot_no: {
        required: 'Enter Email Id'
      },
      plot_facing: {
        required: 'Enter Email Id'
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
      var url = "<?php echo site_url('booking/ajax_edit_plot')?>";
      var frmdata = $("#frmPlot").serialize(); //new FormData($('#costForm')[0]);//$("#followupForm").serialize();  
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
                  else if(spl_txt[1] == 2)
                  { 
                    alert("Successfully updated...");
                    location.reload();
                  }
                  else
                  { 
                    alert("Something went wrong...");                   
                  }
              }
          });
      }
  });  

  
/**---------------------Attached Details--------------------------------------- */  

$('#frmDoc').validate({
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
      var url = "<?php echo site_url('booking/ajax_edit_doc')?>";
      //var frmdata = $("#frmDoc").serialize(); //new FormData($('#costForm')[0]);//$("#followupForm").serialize();  
      var frmdata = new FormData($('#frmDoc')[0]);
      console.log(frmdata);
          $.ajax({            
              type: "POST",
              url: url,
              data: frmdata,
              processData: false,
              contentType: false,  
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
                  }   
              }
          });
      }
  });



});///END 
</script>

</body>
</html>