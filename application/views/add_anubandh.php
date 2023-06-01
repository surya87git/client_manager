
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Anubandh</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item active">Anubandh Details</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- end page title -->
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title mb-0"></h4>
              </div>
              <!-- end card header -->
                <div class="card-body form-steps">
                  <form class="vertical-navs-step">
                    <div class="row gy-4">
                    <div class="col-lg-3">
                      <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                        <button class="nav-link done" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true">
                          <span class="step-title me-2">
                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 1 </span> Personal Info. </button>
                        <button class="nav-link " id="v-pills-bill-address-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-address" type="button" role="tab" aria-controls="v-pills-bill-address" aria-selected="false">
                          <span class="step-title me-2">
                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 2 </span> Payment Details </button>
                        <button class="nav-link" id="v-pills-payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false">
                          <span class="step-title me-2">
                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 3 </span> Site Details </button>
                            <span style="color:#212529; text-decoration:underline; font-weight:bold;">Import Data From Booking Form</span>
                        <a type="button" class="btn  btn-success" id="" data-bs-toggle="modal" data-bs-target="#myModal" style="color:#ffff;">IMPORT</a>
                      </div>
<!---------Import Modal------------------------->
                      <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel">Import from Booking Form</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <div class="col-lg-12 col-md-12">
                                <div></div>
                              </div>
                            </div>
                            <hr />
                            <div class="modal-footer">
                              <!--button type="button" class="btn btn-info" id="btn_done" data-bs-dismiss="modal">Done</button-->
                              <button type="submit" class="btn btn-primary" id="btn_calc" data-bs-dismiss="modal" value="Save">Save</button>
                              <input type="hidden" id="last_id" name="last_id" value="">
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                      </div>

<!---------END Import Modal------------------------->                      
                     
                      <!-- end nav -->
                    </div>
                      <!-- end col-->
                      <div class="col-lg-9">
                        <div class="px-lg-4">
                          <div class="tab-content">

                           <!--------Start of Personal Information-------->
                          <div class="tab-pane active" id="v-pills-bill-info" role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                            
                          <div>
                              <h5>Personal Information</h5>
                              <p class="text-muted">Fill all persoanl information below</p>
                            </div>
                            <div>
                            <form id="frmClientInfo">

                                <div class="row g-3">

                                  <div class="col-sm-6">
                                      <label for="clientname" class="form-label">Client Name<span class="text-danger">*</span></label>
                                      <input type="text" id="client_name" name="client_name" value="" class="form-control"  placeholder="Enter Client Name" require>
                                  </div>
                                  <div class="col-sm-6">
                                      <label for="fsname" class="form-label">Father/Spouse Name<span class="text-danger">*</span></label>
                                      <input type="text" id="spouse_name" name="spouse_name" value="" class="form-control"  placeholder="Enter Father/Spouse Name" require>
                                  </div>
                                  <div class="col-sm-3">
                                      <label for="age" class="form-label">Age<span class="text-danger">*</span></label>
                                      <input type="number" id="age" name="age" value="" class="form-control"  placeholder="Enter Age" require>
                                  </div>
                                  <div class="col-sm-3">
                                      <label for="sex" class="form-label">Gender<span class="text-danger">*</span></label>
                                      <select id="gender" name="gender" class="form-select mb-3" aria-label="Default select example">
                                      <option selected>Select Gender</option>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>                       
                                      </select>
                                  </div>
                                  <div class="col-sm-6">
                                      <label for="occupation" class="form-label">Occupation<span class="text-danger">*</span></label>
                                      <input type="text" id="occupation" name="occupation" value="" class="form-control"  placeholder="Enter Occupation" require>
                                  </div>
                                  <div class="col-sm-6">
                                      <label for="mobile" class="form-label">Mobile Number<span class="text-danger">*</span></label>
                                      <input type="number" id="mobile_no" name="mobile_no" value="" class="form-control"  placeholder="Enter Mobile Number" require>
                                  </div>
                                  <div class="col-sm-6">
                                      <label for="email" class="form-label">Email ID<span class="text-danger">*</span></label>
                                      <input type="email" id="email_id" name="email_id" value="" class="form-control"  placeholder="Enter Email Address" require>
                                  </div>
                                  <div class="col-sm-6">
                                      <label for="pan_number" class="form-label">PAN Number<span class="text-danger">*</span></label>
                                      <input type="text" id="pan_no" name="pan_no" value="" class="form-control"  placeholder="Enter PAN number" require>
                                  </div>
                                  <div class="col-sm-6">
                                      <label for="aadhar_number" class="form-label">Aadhar Number<span class="text-danger">*</span></label>
                                      <input type="number" id="aadhar_no" name="aadhar_no" value="" class="form-control"  placeholder="Enter Aadhar Number" require>
                                  </div>
                                  <br><br>
                                  <!--------Permanent Address-------------->
                                  <h5 class="text-primary font-weight-bold">Permanent Address</h5>
                                  
                                      <div class="col-sm-6">
                                          <label for="address" class="form-label">House No.</label>
                                          <input type="text" id="p_hno" name="p_hno" value="" class="form-control"  placeholder="Enter House No." require>
                                      </div>
                                      <div class="col-sm-6">
                                          <label for="address" class="form-label">Street/ Colony</label>
                                          <input type="text" id="p_street" name="p_street" value="" class="form-control"  placeholder="Enter Street/ Colony Name" require>
                                      </div>
                                      <div class="col-sm-6">
                                          <label for="address" class="form-label">Landmark</label>
                                          <input type="text" id="p_landmark" name="p_landmark" value="" class="form-control"  placeholder="Enter Landmark" require>
                                      </div>
                                      <div class="col-sm-6">
                                          <label for="address" class="form-label">City</label>
                                          <input type="text" id="p_city" name="p_city" value="" class="form-control"  placeholder="Enter City" require>
                                      </div>
                                      <div class="col-sm-6">
                                          <label for="address" class="form-label">State</label>
                                          <input type="text" id="p_state" name="p_state" value="" class="form-control"  placeholder="Enter State" require>
                                      </div>
                                      <div class="col-sm-6">
                                          <label for="address" class="form-label">Pin Code</label>
                                          <input type="text" id="p_pincode" name="p_pincode" value="" class="form-control"  placeholder="Enter Pin-Code" require>
                                      </div>  

                                  <!--------End Permanent Address-------------->
                                  
                                  <!--------Present Address-------------->
                                  <h5 class="text-primary font-weight-bold">Present Address</h5>
                                  <div class="col-sm-6">
                                      <label for="address" class="form-label">House No.<span class="text-danger">*</span></label>
                                      <input type="text" id="p_hno" name="p_hno" value="" class="form-control"  placeholder="Enter House No." require>
                                  </div>
                                  <div class="col-sm-6">
                                      <label for="address" class="form-label">Street/ Colony<span class="text-danger">*</span></label>
                                      <input type="text" id="p_street" name="p_street" value="" class="form-control"  placeholder="Enter Street/ Colony Name" require>
                                  </div>
                                  <div class="col-sm-6">
                                      <label for="address" class="form-label">Landmark<span class="text-danger">*</span></label>
                                      <input type="text" id="p_landmark" name="p_landmark" value="" class="form-control"  placeholder="Enter Landmark" require>
                                  </div>
                                  <div class="col-sm-6">
                                      <label for="address" class="form-label">City<span class="text-danger">*</span></label>
                                      <input type="text" id="p_city" name="p_city" value="" class="form-control"  placeholder="Enter City" require>
                                  </div>
                                  <div class="col-sm-6">
                                      <label for="address" class="form-label">State<span class="text-danger">*</span></label>
                                      <input type="text" id="p_state" name="p_state" value="" class="form-control"  placeholder="Enter State" require>
                                  </div>
                                  <div class="col-sm-6">
                                      <label for="address" class="form-label">Pin Code<span class="text-danger">*</span></label>
                                      <input type="text" id="p_pincode" name="p_pincode" value="" class="form-control"  placeholder="Enter Pin-Code" require>
                                  </div>            
                                  <!--------End Permanent Address-------------->
                                </div>
                             
                            </div>

                            <div class="d-flex align-items-start gap-3 mt-4">
                               <input type="submit" value="Save and Next" class="btn btn-success" data-nexttab="v-pills-bill-address-tab">
                              <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-bill-address-tab">
                              <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Payment Details </button>
                            </div>
                        </form>
                    </div>
                  <!--------End of Personal Information-------->

                  <!-----Start of Payment Details-------->
                          <div class="tab-pane fade show " id="v-pills-bill-address" role="tabpanel" aria-labelledby="v-pills-bill-address-tab">
                            <div>
                              <label for="" class="form-label">Payment Mode</label>
                              <div class="my-2">
                                <div class="form-check form-check-inline">
                                  <input id="cash" name="radio1" type="radio" class="form-check-input">
                                  <label class="form-check-label" for="cash">Cash</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input id="UPI" name="radio1" type="radio" class="form-check-input">
                                  <label class="form-check-label" for="UPI">UPI</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input id="neft" name="radio1" type="radio" class="form-check-input">
                                  <label class="form-check-label" for="neft">NEFT/RTGS/IMPS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input id="Cards" name="radio1" type="radio" class="form-check-input">
                                  <label class="form-check-label" for="Cards">Cards</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input id="Cheque" name="radio1" type="radio" value="cheque" class="form-check-input">
                                  <label class="form-check-label" for="Cheque">Cheque</label>
                                </div>
                              </div>
                              <div class="row g-3">
                                <div class="col-12">
                                  <label for="bankname" class="form-label">Bank Name</label>
                                  <input type="text" class="form-control" id="bankname" placeholder="Enter Bank Name">
                                </div>
                                <div class="col-12">
                                  <label for="chequenumber" class="form-label">Cheque Number</label>
                                  <input type="number" class="form-control" id="chequenumber" placeholder="Enter Cheque Number">
                                </div>
                                <div class="col-6">
                                  <label for="c/cdate" class="form-label">Cheque/Cash Date</label>
                                  <input type="date" class="form-control" id="c/cdate" placeholder="Enter Cheque/Cash Date">
                                </div>
                                <div class="col-6">
                                  <label for="amount" class="form-label">Amount</label>
                                  <input type="number" class="form-control" id="amount" placeholder="Enter Amount">
                                </div>
                                <div class="col-12">
                                  <label for="amountinwords" class="form-label">Amount in word</label>
                                  <input type="text" class="form-control" id="amountinwords" placeholder="Enter Amount in words">
                                </div>
                              </div>
                              <hr class="my-4 text-muted">
                            </div>
                            <div class="d-flex align-items-start gap-3 mt-4">
                              <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-info-tab">
                                <i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Personal Information </button>
                              <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-payment-tab">
                                <i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Site Details </button>
                            </div>
                          </div>
                          <!-----End of Payment Details-------->
                          <!--------Start of Site Details--------->
                          <div class="tab-pane show " id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab">
                            <div>
                              <h5>Site Details</h5>
                            </div>
                            <div>
                              <div class="row gy-3">
                                <div class="col-md-12">
                                  <label for="siteaddress" class="form-label">Site Address</label>
                                  <input type="text" class="form-control" id="siteaddress" placeholder="Enter Address" required>
                                </div>
                                <div class="col-md-6">
                                  <label for="city" class="form-label">City</label>
                                  <input type="text" class="form-control" id="City" placeholder="Enter City" required>
                                </div>
                                <div class="col-md-6">
                                  <label for="District" class="form-label">District</label>
                                  <input type="text" class="form-control" id="District" placeholder="Enter District" required>
                                </div>
                                <div class="col-md-6">
                                  <label for="khasranumber" class="form-label">Khasra No.</label>
                                  <input type="text" class="form-control" id="khasranumber" placeholder="Enter Khasra Number" required>
                                </div>
                                <div class="col-md-6">
                                  <label for="phn_number" class="form-label">P.H.N. No.</label>
                                  <input type="text" class="form-control" id="phn_number" placeholder="Enter P.H.N Number" required>
                                </div>
                                <div class="col-6">
                                  <label for="plot_area" class="form-label">Plot area</label>
                                  <input type="text" class="form-control" id="plot_area" placeholder="Enter Plot Area">
                                </div>
                                <div class="col-6">
                                  <label for="rate_sqf" class="form-label">Rate sqf</label>
                                  <input type="text" class="form-control" id="rate_sqf" placeholder="Enter Rate sqf">
                                </div>
                                <div class="col-12">
                                  <label for="number_floors">Number of floors</label>
                                  <select class="form-control" name="" id="number_floors">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>
                                  </select>
                                </div>
                                <div class="col-12">
                                  <table class="table table-striped">
                                    <tbody>
                                      <th>Floor</th>
                                      <th>Area</th>
                                      <th>Rate</th>
                                      <th>According Maps</th>
                                      <tr>
                                        <td>G.F</td>
                                        <td>
                                          <input type="text" class="form-control" id="enter_area" placeholder="Enter Area">
                                        </td>
                                        <td>
                                          <input type="number" class="form-control" id="enter_cost" placeholder="Enter Cost">
                                        </td>
                                        <td>
                                          <select class="form-control" name="" id="">
                                            <option value="civil_only">Civil Only</option>
                                            <option value="with_finishing">Finishing</option>
                                          </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>1st </td>
                                        <td>
                                          <input type="text" class="form-control" id="enter_area" placeholder="Enter Area">
                                        </td>
                                        <td>
                                          <input type="number" class="form-control" id="enter_cost" placeholder="Enter Cost">
                                        </td>
                                        <td>
                                          <select class="form-control" name="" id="">
                                            <option value="civil_only">Civil Only</option>
                                            <option value="with_finishing">Finishing</option>
                                          </select>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                <div class="col-4">
                                  <label for="boundary_wall_area" class="form-label">Boundary wall Area</label>
                                  <input type="text" class="form-control" id="boundary_wall_area" placeholder="Enter Boundary Wall Area">
                                </div>
                                <div class="col-4">
                                  <label for="boundary_wall_cost" class="form-label">Boundary wall Cost</label>
                                  <input type="text" class="form-control" id="boundary_wall_cost" placeholder="Enter Boundary Wall Cost">
                                </div>
                                <div class="col-4">
                                  <label for="running_feet_cost" class="form-label">Running Feet Cost</label>
                                  <input type="number" class="form-control" id="running_feet_cost" placeholder="Enter Running Feet Cost">
                                </div>
                                <div class="col-4">
                                  <label for="elevation_cost" class="form-label">Elevation Cost</label>
                                  <input type="number" class="form-control" id="elevation_cost" placeholder="Enter Elevation Cost">
                                </div>
                                <div class="col-4">
                                  <label for="Drawing+VR_cost" class="form-label">Drawing+VR Cost</label>
                                  <input type="number" class="form-control" id="Drawing+VR_cost" placeholder="Enter Drawing+VR Cost">
                                </div>
                                <div class="col-4">
                                  <label for="discount_price" class="form-label">Discount Price</label>
                                  <input type="number" class="form-control" id="discount_price" placeholder="Enter Discounted Price">
                                </div>
                                <div class="col-4">
                                  <label for="Modular_kitchen" class="form-label">Modular kitchen</label>
                                  <input type="number" class="form-control" id="Modular_kitchen" placeholder="Enter Modular Kitchen Price ">
                                </div>
                                <div class="col-4">
                                  <label for="false_ceiling" class="form-label">False Ceiling</label>
                                  <input type="number" class="form-control" id="false_ceiling" placeholder="Enter False Ceiling">
                                </div>
                                <div class="col-4">
                                  <label for="total_working_area" class="form-label">Total Working Area</label>
                                  <input type="number" class="form-control" id="total_working_area" placeholder="Enter Total Working Area">
                                </div>
                                <div class="col-4">
                                  <label for="Other_price" class="form-label">Other Price</label>
                                  <input type="number" class="form-control" id="Other_price" placeholder="Enter Other Price">
                                </div>
                                <div class="col-4">
                                  <label for="Advance_As_per_agreement" class="form-label">Advance As per agreement</label>
                                  <input type="number" class="form-control" id="Advance_As_per_agreement" placeholder="Enter Advance As per agreement">
                                </div>
                                <div class="col-4">
                                  <label for="Total_price" class="form-label">Total Price</label>
                                  <input type="number" class="form-control" id="Total_price" placeholder="Enter Total Price">
                                </div>
                                <div class="col-12">
                                  <label for="Total_in_word" class="form-label">Total in Word</label>
                                  <input type="number" class="form-control" id="Total_in_word" placeholder="Enter Total In Words">
                                </div>
                              </div>
                            </div>
                            <div class="d-flex align-items-start gap-3 mt-4">
                              <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-address-tab">
                                <i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Payment Details </button>
                              <a href="makeanubadh" class="btn btn-success right ms-auto">Select Column</a>
                            </div>
                          </div>
                          <!--------End of Site Details--------->
                        </div>
                          <!-- end tab content -->
                        </div>
                      </div>
                      <!-- end col -->
                    </div>
                    <!-- end row -->
                  </form>
                </div>
            </div>
            <!-- end -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6"> Design & Develop By <a href="https://ukcdesigner.in/" target="_blank">UKConcept Designer</a>
          </div>
          <div class="col-sm-6">
            <div class="text-sm-end d-none d-sm-block"> Copyright <?php echo date("Y");?> © All Right Reserved. </div>
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
<!-- JAVASCRIPT -->
<script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="<?php echo base_url();?>assets/js/plugins.js"></script>
<!-- form wizard init -->
<script src="<?php echo base_url();?>assets/js/pages/form-wizard.init.js"></script>
<!-- App js -->
<script src="<?php echo base_url();?>assets/js/app.js"></script>
</body>
<!-- Mirrored from themesbrand.com/velzon/html/default/forms-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jul 2022 12:37:03 GMT -->
</html>