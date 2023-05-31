<div class="main-content">                
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Booking Form</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                       <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                       <li class="breadcrumb-item active">Booking Form</li>
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
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title mb-0">Initial Booking Details</h4> <a href="<?php echo base_url("index.php/booking/booking_list");?>" class="btn btn-primary btn-sm"><i class="bx bx-list-ul" style="font-size: 15px;"></i> Booking List</a>
                                    </div>        
                                </div><!-- end card header -->
                                <div class="card-body form-steps">
                                    <form action="#">
                                        <div class="text-center pt-3 pb-4 mb-1">
                                            <h5>This is your cost for Booking your project</h5> 
                                            <p class="text-muted">Booking amount is mendatory</p>
                                        </div>
                                        <div id="custom-progress-bar" class="progress-nav mb-4">
                                            <div class="progress" style="height: 1px;">
                                                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <ul class="nav nav-pills progress-bar-tab custom-nav" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link rounded-pill active" data-progressbar="custom-progress-bar" id="pills-gen-info-tab" data-bs-toggle="pill" data-bs-target="#pills-gen-info" type="button" role="tab" aria-controls="pills-gen-info" aria-selected="true">1</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar" id="pills-info-desc-tab" data-bs-toggle="pill" data-bs-target="#pills-info-desc" type="button" role="tab" aria-controls="pills-info-desc" aria-selected="false">2</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link rounded-pill" data-progressbar="custom-progress-bar" id="pills-success-tab" data-bs-toggle="pill" data-bs-target="#pills-success" type="button" role="tab" aria-controls="pills-success" aria-selected="false">3</button>
                                                </li>
                                            </ul>
                                        </div>                                        
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="pills-gen-info" role="tabpanel" aria-labelledby="pills-gen-info-tab">
                                                <div>
                                                    <div class="mb-4">
                                                        <div>
                                                            <h5 class="mb-1">General Information</h5>
                                                            <p class="text-muted">Plan 1</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <ul class="text-primary">
                                                            <li>Concept Planning for unlimited times</li>
                                                            <li>Naksha process will start</li>
                                                            <br>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <center><h3 class="text-danger">Total ₹ 1,00,000</h3></center>
                                                <div class="d-flex">
                                                    <a href="javascript:void(0);" price="100000" class="btn_booking btn btn-success  center ms-auto">Submit</i></a>
                                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-info-desc-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>See More</button>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->

                                            <div class="tab-pane fade" id="pills-info-desc" role="tabpanel" aria-labelledby="pills-info-desc-tab">
                                            <div class="mb-4">
                                                        <div>
                                                            <h5 class="mb-1">General Information</h5>
                                                            <p class="text-muted">Plan 2</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <ul class="text-primary">
                                                            <li>Concept Planning for unlimited times</li>
                                                            <li>Naksha process will start</li>
                                                            <br>                      
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <ul class="text-primary">
                                                            <li>Upper and front elevation</li>
                                                            <li>Side Elevation</li>
                                                            <li>Back Elevation</li>
                                                            <br>                               
                                                            </ul>
                                                        </div>
                                                        
                                                        
                                                    </div>
                                            <center><h3 class="text-danger">Total ₹ 2,00,000</h3></center>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="pills-gen-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Plan 1</button>
                                                <a href="javascript:void(0);" price="200000" class="btn_booking btn btn-success  center ms-auto">Submit</i></a>
                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-success-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>See More</button>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->

                                            <div class="tab-pane fade" id="pills-success" role="tabpanel" aria-labelledby="pills-success-tab">
                                            <div class="mb-4">
                                                        <div>
                                                            <h5 class="mb-1">General Information</h5>
                                                            <p class="text-muted">Plan 3</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4" >
                                                            <ul class="text-primary">
                                                            <li>Concept Planning for unlimited times</li>
                                                            <li>Naksha process will start</li>
                                                            </ul>
                                                            
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <ul class="text-primary">
                                                            <li>Upper and front elevation</li>
                                                            <li>Side Elevation</li>
                                                            <li>Back Elevation</li>
                                                            </ul>
                                                            
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <ul class="text-primary">
                                                            <li>Structure Design</li>
                                                            <li>VR</li>
                                                            <br>                            
                                                            </ul> 
                                                        </div>
                                                        
                                                    </div>
                                                <center><h3 class="text-danger">Total ₹ 3,00,000</h3></center>
                                                <div class="d-flex align-items-start gap-3 mt-4">
                                                <button type="button" class="btn btn-light btn-label previestab" data-previous="pills-info-desc-tab" ><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Plan 2</button>
                                                <a href="javascript:void(0);" price="300000" class="btn_booking btn btn-success  center ms-auto">Submit</i></a>
                                                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="pills-success-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- end tab pane -->
                                        </div>
                                        <!-- end tab content -->
                                    </form>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        
                        <!-- end col -->
                    </div>

<div class="row" id="client_panel" style="display: none;">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                        <h4 class="card-title mb-0">Booking Form</h4>
                        </div>
                        <div class="col-md-6">
                           <span style="color: #0ab39c">Please Import data from Cost Calculator for more efficeincy</span> <button type="button" class="btn btn-success btn-sm btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#myModal" style="float:right;"> Import<i class=" ri-download-2-fill label-icon align-middle "></i></button>
                        </div>
                    </div>      
                </div>
                <!---import from cost calculator modal-------------------->
                <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">Import from Cost Calculator</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <div class="col-lg-12 col-md-12">
                                    <div class="col-sm-auto">
                                        <div class="input-group">
                                            <input type="number" id="client_mob" name="client_mob" class="form-control border-0 shadow" placeholder="Search here by Mobile Num." required>
                                            <button id="btn_search" class="input-group-text bg-primary border-primary text-white">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                    <table class="table table-nowrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Total Area</th>
                                                <th scope="col">Total Floor</th>
                                                <th scope="col">Total Cost</th>                                              
                                            </tr>
                                        </thead>
                                        <tbody id='tr_data'>
                                           
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                                </div>
                                <hr />
                                <div class="modal-footer">
                                <!--button type="button" class="btn btn-info" id="btn_done" data-bs-dismiss="modal">Done</button-->
                                <button type="submit" class="btn btn-primary" id="" data-bs-dismiss="modal" value="Save">Save</button>
                                <input type="hidden" id="" name="lst_id" value="">
                                </div>
                            </div>
                            <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                    <!---End of import from cost  calculator modal-------------------->
    <!------Stepper Start------------------------->            
    <div class="card-body form-steps">
        <!----From Start here----->
        <div class="vertical-navs-step">
            <div class="row gy-5">
                <div class="col-lg-3">
                    <div class="nav flex-column custom-nav nav-pills" role="tablist" aria-orientation="vertical">
                        <button class="nav-link done" id="v-pills-bill-info-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-info" type="button" role="tab" aria-controls="v-pills-bill-info" aria-selected="true">
                            <span class="step-title me-2">
                                <i class="ri-close-circle-fill step-icon me-2"></i> Step 1
                            </span>
                            Client Info. 
                        </button>
                        <button class="nav-link " id="v-pills-bill-address-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bill-address" type="button" role="tab" aria-controls="v-pills-bill-address" aria-selected="false">
                            <span class="step-title me-2">
                                <i class="ri-close-circle-fill step-icon me-2"></i> Step 2
                            </span>
                            Decision Maker
                        </button>
                        <button class="nav-link" id="v-pills-payment-tab" data-bs-toggle="pill" data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment" aria-selected="false">
                            <span class="step-title me-2">
                                <i class="ri-close-circle-fill step-icon me-2"></i> Step 3
                            </span>
                            Payee
                        </button>
                        <button class="nav-link" id="v-pills-acd-tab" data-bs-toggle="pill" data-bs-target="#v-pills-accountdetail" type="button" role="tab" aria-controls="v-pills-accountdetail" aria-selected="false">
                            <span class="step-title me-2">
                                <i class="ri-close-circle-fill step-icon me-2"></i> Step 4
                            </span>
                            Transaction Detail
                        </button>
                        <button class="nav-link" id="v-pills-pd-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pd" type="button" role="tab" aria-controls="v-pills-pd" aria-selected="false">
                            <span class="step-title me-2">
                                <i class="ri-close-circle-fill step-icon me-2"></i> Step 5
                            </span>
                            Plot Details
                        </button>
                        <button class="nav-link" id="v-pills-ad-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ad" type="button" role="tab" aria-controls="v-pills-ad" aria-selected="false">
                            <span class="step-title me-2">
                                <i class="ri-close-circle-fill step-icon me-2"></i> Step 6
                            </span>
                            Attach Document
                        </button>
                    </div>
                    <!-- end nav -->
                </div> <!-- end col-->
    <!--------Start Client Information----------------------------------------->  

    <div class="col-lg-8">

        <form id="frmClientInfo">
            <div class="px-lg-4">
                <div class="tab-content">
                    <div class="tab-pane show active" id="v-pills-bill-info" role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                    <div>
                        <h5>Client Information</h5>            
                    </div>
                <div>

                <div class="row g-3">
                
                    <div class="col-sm-6">
                        <label for="clientname" class="form-label">Client Name</label>
                        <input type="text" id="client_name" name="client_name" value="" class="form-control"  placeholder="Enter Client Name" require>
                    </div>
                    <div class="col-sm-6">
                        <label for="fsname" class="form-label">Father/Spouse Name</label>
                        <input type="text" id="spouse_name" name="spouse_name" value="" class="form-control"  placeholder="Enter Father/Spouse Name" require>
                    </div>
                    <div class="col-sm-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" id="age" name="age" value="" class="form-control"  placeholder="Enter Age" require>
                    </div>
                    <div class="col-sm-3">
                        <label for="sex" class="form-label">Gender</label>
                        <select id="gender" name="gender" class="form-select mb-3" aria-label="Default select example">
                        <option selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>                       
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="occupation" class="form-label">Occupation</label>
                        <input type="text" id="occupation" name="occupation" value="" class="form-control"  placeholder="Enter Occupation" require>
                    </div>
                    <div class="col-sm-6">
                        <label for="mobile" class="form-label">Mobile Number</label>
                        <input type="number" id="mobile_no" name="mobile_no" value="" class="form-control"  placeholder="Enter Mobile Number" require>
                    </div>
                    <div class="col-sm-6">
                        <label for="email" class="form-label">Email ID</label>
                        <input type="email" id="email_id" name="email_id" value="" class="form-control"  placeholder="Enter Email Address" require>
                    </div>
                    <div class="col-sm-6">
                        <label for="pan_number" class="form-label">PAN Number</label>
                        <input type="text" id="pan_no" name="pan_no" value="" class="form-control"  placeholder="Enter PAN number" require>
                    </div>
                    <div class="col-sm-6">
                        <label for="aadhar_number" class="form-label">Aadhar Number</label>
                        <input type="number" id="aadhar_no" name="aadhar_no" value="" class="form-control"  placeholder="Enter Aadhar Number" require>
                    </div>
                    <br><br>
                    <h5 class="text-primary font-weight-bold">Permanent Address</h5>
                    <!--------Permanent Address-------------->
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
                    <br>
                    <br>
                <!--------Present Address------->
                    <h5 class="text-primary font-weight-bold">Present Address</h5>
                    <div class="col-sm-12">
                    <input type="checkbox" name="present_addr" class="form-check-input" id="chk_present_addr">
                    <label class="text-primary" for="chk_present_addr">Same as Permanent Address</span>
                    </div>

                    <div class="row" id="present_addr" style="display:none">
                        <div class="col-sm-6">
                            <label for="address" class="form-label">House No.</label>
                            <input type="text" id="r_hno" name="r_hno" value="" class="form-control"  placeholder="Enter House No." require>
                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">Street/ Colony</label>
                            <input type="text" id="r_street" name="r_street" value="" class="form-control"  placeholder="Enter Street/ Colony Name" require>
                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">Landmark</label>
                            <input type="text" id="r_landmark" name="r_landmark" value="" class="form-control"  placeholder="Enter Landmark" require>
                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">City</label>
                            <input type="text" id="r_city" name="r_city" value="" class="form-control"  placeholder="Enter City" require>
                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">State</label>
                            <input type="text" id="r_state" name="r_state" value="" class="form-control"  placeholder="Enter State" require>
                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">Pin Code</label>
                            <input type="text" id="r_pincode" name="r_pincode" value="" class="form-control"  placeholder="Enter Pin-Code" require>
                        </div>
                    </div>   
                    <!--------END Present Address-------> 
                    <br>
                    <br>
                    <h5 class="text-primary font-weight-bold">Office Address</h5>

                    <div class="col-sm-6">
                    <input type="radio" name="office_addr" class="form-check-input" id="same_p_add">
                    <label class="text-primary" for="same_p_add">Same as Permanent Address</span>
                    </div>

                    <div class="col-sm-6">
                        <input type="radio" name="office_addr" class="form-check-input" id="same_r_add">
                        <label class="text-primary" for="same_r_add">Same as Present Address</label>
                    </div>
                        
                    <div class="row" id="office_addr" style="display:none">  

                        <div class="col-sm-6">
                            <label for="address" class="form-label">House No.</label>
                            <input type="text" id="o_hno" name="o_hno" value="" class="form-control"  placeholder="Enter House No." require>
                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">Street/ Colony</label>
                            <input type="text" id="o_street" name="o_street" value="" class="form-control"  placeholder="Enter Street/ Colony Name" require>
                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">Landmark</label>
                            <input type="text" id="o_landmark" name="o_landmark" value="" class="form-control"  placeholder="Enter Landmark" require>
                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">City</label>
                            <input type="text" id="o_city" name="o_city" value="" class="form-control"  placeholder="Enter City" require>
                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">State</label>
                            <input type="text" id="o_state" name="o_state" value="" class="form-control"  placeholder="Enter State" require>
                        </div>
                        <div class="col-sm-6">
                            <label for="address" class="form-label">Pin Code</label>
                            <input type="text" id="o_pincode" name="o_pincode" value="" class="form-control"  placeholder="Enter Pin-Code" require>
                        </div>
                </div>   

            </div>
        </div>
                
        <div class="d-flex align-items-start gap-3 mt-4">    
            <input type="hidden" id="bid" name="bid">  
            <input type="hidden" id="booking_amt" name="booking_amt">
            <input type="hidden" id="calc_id" name="calc_id"> 
            <input type="submit" value="Save and Next" class="btn btn-success" data-nexttab="v-pills-bill-address-tab">
            <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-bill-address-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Decision Maker</button>
        </div>

    </form>
    </div>
    <!--------------END Client Information------------------------------->

    <!--------------Start Decision Maker------------------------------->
            
                <div class="tab-pane fade show " id="v-pills-bill-address" role="tabpanel" aria-labelledby="v-pills-bill-address-tab">
                    <div>
                        <h5>Decision Maker</h5>  
                    </div>
                    <div class="col-sm-12">
                        <input type="checkbox" name="decision_mkr" class="form-check-input" id="chk_decision_mkr">
                        <label class="text-primary" for="chk_decision_mkr">Same as Client Information</label>
                    </div>
                    <br>
                    <div>
                    <form id="frmDecMaker">
                        <div class="row g-3">
                            <div class="col-6">
                                <label for="name" class="form-label">Name (Decision Marker)</label>
                                <input type="text" id="d_name" name="d_name" value="" class="form-control"  placeholder="Enter Decision Maker Name" require>
                            </div>
                            <div class="col-6">
                                <label for="relation" class="form-label">Relation</label>
                                <input type="text" id="d_relation" name="d_relation" value="" class="form-control"  placeholder="Enter relation" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <input type="number" id="d_mobile_no" name="d_mobile_no" value="" class="form-control"  placeholder="Enter Number" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="d_email_id" name="d_email_id" value="" class="form-control"  placeholder="Enter email" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="pan_number" class="form-label">Pan Number</label>
                                <input type="text" id="d_pan_no" name="d_pan_no" value="" class="form-control"  placeholder="Enter PAN Number" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="aadhar_number" class="form-label">Aadhar Number</label>
                                <input type="number" id="d_aadhar_no" name="d_aadhar_no" value="" class="form-control"  placeholder="Enter Aadhar Number" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label">House No.</label>
                                <input type="text" id="d_hno" name="d_hno" value="" class="form-control"  placeholder="Enter House No." require>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label">Street/ Colony</label>
                                <input type="text" id="d_street" name="d_street" value="" class="form-control"  placeholder="Enter Street/ Colony Name" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label">Landmark</label>
                                <input type="text" id="d_landmark" name="d_landmark" value="" class="form-control" placeholder="Enter Landmark" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label">City</label>
                                <input type="text" id="d_city" name="d_city" value="" class="form-control"  placeholder="Enter City" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label">State</label>
                                <input type="text" id="d_state" name="d_state" value="" class="form-control"  placeholder="Enter State" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label">Pin Code</label>
                                <input type="text" id="d_pincode" name="d_pincode" value="" class="form-control"  placeholder="Enter Pin-Code" require>
                            </div>
                            <div class="col-sm-6">
                                <input type="hidden" id="dec_id" name="dec_id">
                                <input type="submit" value="Save and Next" class="btn btn-success" data-nexttab="v-pills-bill-address-tab">
                            </div>
                        </form>
                    </div>
                    </div>

                <div class="d-flex align-items-start gap-3 mt-4">
                    <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-info-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Client Info</button>
                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-payment-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Payer</button>
                </div>

        </div>

        <!--/form-->

        <!-------END Desigion Maker------------------->
        
                <!-- end tab pane -->
                <div class="tab-pane fade" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab">
                    <div>
                        <h5>Payee</h5>
                    </div>
                    <div class="col-sm-12">
                        <input type="checkbox" class="form-check-input" id="chk_payee_addr">
                        <label class="text-primary" for="chk_payee_addr">Same as Client Information</label>
                    </div>
                    <br>
                    <div>
                    <form id="frmPayee">                        
                        <div class="row gy-3">                        
                            <div class="col-6">
                                <label for="name" class="form-label">Name (Payee Marker)</label>
                                <input type="text" id="payee_name" name="payee_name" value="" class="form-control"  placeholder="Enter Decision Maker Name" require>
                            </div>
                            <div class="col-6">
                                <label for="relation" class="form-label">Relation</label>
                                <input type="text" id="payee_relation" name="payee_relation" value="" class="form-control"  placeholder="Enter relation" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="mobile" class="form-label">Mobile Number</label>
                                <input type="number" id="payee_mobile_no" name="payee_mobile_no" value="" class="form-control"  placeholder="Enter Number" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="payee_email_id" name="payee_email_id" value="" class="form-control"  placeholder="Enter email" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="pan_number" class="form-label">Pan Number</label>
                                <input type="text" id="payee_pan_no" name="payee_pan_no" value="" class="form-control"  placeholder="Enter PAN Number" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="aadhar_number" class="form-label">Aadhar Number</label>
                                <input type="number" id="payee_aadhar_no" name="payee_aadhar_no" value="" class="form-control"  placeholder="Enter Aadhar Number" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="House" class="form-label">House No.</label>
                                <input type="text" id="payee_hno" name="payee_hno" value="" class="form-control"  placeholder="Enter House No." require>
                            </div>
                            <div class="col-sm-6">
                                <label for="Street" class="form-label">Street/ Colony</label>
                                <input type="text" id="payee_street" name="payee_street" value="" class="form-control"  placeholder="Enter Street/ Colony Name" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="Landmark" class="form-label">Landmark</label>
                                <input type="text" id="payee_landmark" name="payee_landmark" value="" class="form-control"  placeholder="Enter Landmark" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="City" class="form-label">City</label>
                                <input type="text" id="payee_city" name="payee_city" value="" class="form-control"  placeholder="Enter City" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="address" class="form-label">State</label>
                                <input type="text" id="payee_state" name="payee_state" value="" class="form-control"  placeholder="Enter State" require>
                            </div>
                            <div class="col-sm-6">
                                <label for="Pin" class="form-label">Pin Code</label>
                                <input type="text" id="payee_pincode" name="payee_pincode" value="" class="form-control"  placeholder="Enter Pin-Code" require>
                            </div>
                            <div class="col-sm-6">
                                <input type="hidden" id="payee_id" name="payee_id">
                                <input type="submit" value="Save and Next" class="btn btn-success" data-nexttab="v-pills-bill-address-tab">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="d-flex align-items-start gap-3 mt-4">
                    <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-bill-address-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to decision maker</button>
                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-acd-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Account Details</button>
                </div>

                </div>
                <!-- end tab pane -->
                <div class="tab-pane fade" id="v-pills-accountdetail" role="tabpanel" aria-labelledby="v-pills-acd-tab">
                <div>
                    <h5>Transaction Details</h5>
                    </div>                    
                    <div>          
                    <form id="frmTransaction">      
                    
                    <div class="row gy-3">
                        <div class="col-12">
                        <label for="anyoffer" class="form-label">Any Offer</label>
                        <input type="number" id="offer_amt" name="offer_amt" value="" class="form-control"  placeholder="Enter Offer" require>
                        </div>
                    <div>

                    <label for="" class="form-label">Quotation rate of selection</label>

                        <div class="my-2">                            
                            <div class="form-check form-check-inline">
                                <input type="radio" id="Standard" name="quotation_type" class="form-check-input"  >
                                <label class="form-check-label" for="Standard">Standard</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="Premium" name="quotation_type" class="form-check-input" >
                                <label class="form-check-label" for="Premium">Premium</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="Luxuary" name="quotation_type" class="form-check-input" >
                                <label class="form-check-label" for="Luxuary">Luxury</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="Ultra Luxuary" name="quotation_type" class="form-check-input" >
                                <label class="form-check-label" for="Ultra Luxuary">Ultra Luxury</label>
                            </div>
                        </div>
                            
                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Final Discounted Rate:</label>
                                <input type="number" id="final_rate" name="final_rate" value="" class="form-control"  placeholder="Enter Rate" require>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Amount</label>
                                <input type="number" class="form-control" name="final_amt" id="final_amt" placeholder="Enter Amount" >          
                            </div>
                            <div class="col-md-12">
                                <label for="" class="form-label">In Words</label>
                                <input type="text" id="final_amt_in_word" name="final_amt_in_word" value="" class="form-control"  placeholder="Enter Rate" require>       
                            </div>
                            <div class="col-md-12">
                                <label for="" class="form-label">Booking Amount Paid</label>&nbsp;<span class="text-danger">Not-Refundable</span>
                                <input type="number" id="paid_booking_amt" name="paid_booking_amt" value="" class="form-control"  placeholder="Enter Amount" require>          
                            </div>

                                <!--label for="" class="form-label">Payment Mode</label>
                                <div class="my-2">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="chk_upi" name="payment_mode" value="UPI" class="form-check-input" >
                                        <label class="form-check-label" for="chk_upi">UPI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="chk_neft" name="payment_mode" value="NEFT/RTGS/IMPS"  class="form-check-input" >
                                        <label class="form-check-label" for="chk_neft">NEFT/RTGS/IMPS</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="chk_cards" name="payment_mode" value="Card" class="form-check-input" >
                                        <label class="form-check-label" for="chk_cards">Card</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="chk_cheque" name="payment_mode" value="Cheque"  class="form-check-input" >
                                        <label class="form-check-label" for="chk_cheque" >Cheque</label>
                                    </div>
                               </div--> 

                             </div>
                            </div>

                            <!--div class="col-12" id="upi_field" style="display:none;">
                               <label  class="form-label">UPI</label>
                               <input type="text" id="upi_id" name="upi_id" value="" class="form-control"  placeholder="Enter UPI" require>
                            </div>

                            <div class="row gy-3" id="trans_field" style="display:none;">
                                <div class="col-6">
                                  <label  class="form-label">Cheque no./ Transection Id:</label>
                                  <input type="number" id="cheque_no" name="cheque_no" value="" class="form-control"  placeholder="Enter Cheque Number">
                                </div> 
                                <div class="col-6">
                                  <label  class="form-label">Cheque / Transection Date</label>
                                  <input type="text" id="cheque_data" name="cheque_data" class="form-control" placeholder="Enter Cheque no./ Transection Id ">
                                </div>
                            </div-->

                            <label for="" class="form-label">Funding mode of project</label>
                            <div class="my-2">  
                                <div class="form-check form-check-inline">                        
                                    <input type="radio" id="chk_self" name="funding_mode" value="Self" class="form-check-input">
                                    <label class="form-check-label" for="chk_self">Self</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="chk_bank" name="funding_mode" value="Bank" class="form-check-input">
                                    <label class="form-check-label" for="chk_bank">Bank</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="chk_both" name="funding_mode" value="Both" class="form-check-input">
                                    <label class="form-check-label" for="chk_both">Both</label>
                                </div>                                                                
                            </div>

                            <!-------Self Amount----->
                            <div class="col-12" id="div_self_amt" style="display:none;">
                              <label class="form-label">Self Amount</label>
                              <input type="number" id="self_amt" name="self_amt" value="" class="form-control"  placeholder="Enter Amount" require>
                            </div>
                <!-----------Bank -------------------------------------->
                        <div id="div_bank_amt" style="display:none;">
                            <div class="col-6">
                                <label  class="form-label">Bank Name</label>
                                <input type="text" id="bank_name" name="bank_name" value="" class="form-control"  placeholder="Enter Bank Name" require>
                            </div>
                            <div class="col-6">
                                <label  class="form-label">Loan Amount</label>
                                <input type="number" id="loan_amt" name="loan_amt" value="" class="form-control"  placeholder="Enter Loan Amount" require>
                            </div>
                            <div class="col-12">
                                <label  class="form-label">Loan Account No.</label>
                                <input type="number" id="loan_acc_no" name="loan_acc_no" class="form-control" placeholder="Enter Load Account">
                            </div>
                        </div>

                      </div>
                    </div>
                        <br/>
                        <div class="col-sm-6">
                            <input type="hidden" id="trans_id" name="trans_id">
                            <input type="submit" value="Save and Next" class="btn btn-success" data-nexttab="v-pills-bill-address-tab">
                        </div>
                    </form>

                    <div class="d-flex align-items-start gap-3 mt-4">
                        <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-payment-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Payee</button>
                        <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-pd-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Plot Details</button>
                    </div>
                </div>

                <div class="tab-pane fade" id="v-pills-pd" role="tabpanel" aria-labelledby="v-pills-pd-tab">
                    <div>
                        <h5>Plot Details</h5>                    
                    </div>                    
                    <div>     
                    <div class="row gy-3">
                    <div>

                    <form id="frmPlot" method="post" enctype="multipart/form-data">                        
                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Plot Location</label>
                                <input type="text" id="plot_location" name="plot_location" value="" class="form-control"  placeholder="Enter Plot Location" require>                            
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Plot No</label>
                                <input type="text" id="plot_no" name="plot_no" value="" class="form-control"  placeholder="Enter Plot Number" require>     
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Plot Size</label>
                                <input type="text" id="plot_size" name="plot_size" class="form-control" placeholder="Enter Plot Size">          
                            </div>
                            <div class="col-sm-6">
                            <label  class="form-label">Plot Facing</label>
                                <select id="plot_facing" name="plot_facing" class="form-select mb-3" aria-label="Default select example">
                                    <option>Select Plot Facing</option>
                                    <option value="North">North</option>
                                    <option value="South">South</option> 
                                    <option value="East">East</option>      
                                    <option value="West">West</option>                     
                                </select>
                            </div>
                            <div class="col-sm-6">                            
                                <label  class="form-label">Number of Roads</label>
                                <select id="num_road" name="num_road" class="form-select mb-3" aria-label="Default select example">
                                    <option>Select Number of Roads</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option> 
                                    <option value="3">3</option>                 
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Depth of the plot from road level</label>
                                <input type="number" id="plot_depth" name="plot_depth" value="" class="form-control"  placeholder="Enter Depth" require>         
                            </div>                                                
                        </div>

                        <br/>

                        <div class="col-sm-6">
                            <input type="hidden" id="plot_id" name="plot_id">
                            <input type="hidden" id="hdn_btn_plot" name="hdn_submit" value="">
                            <input type="submit" name="submit" id="btn_plot" value="Save and Next" class="btn btn-success">
                        </div>

                    </from>
                </div>                                                
                </div>
            </div>

                <div class="d-flex align-items-start gap-3 mt-4">
                <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-acd-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Transaction Details</button>
                <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab" data-nexttab="v-pills-ad-tab"><i class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Attach Document</button>
                </div>
                
            </div>
                <div class="tab-pane fade" id="v-pills-ad" role="tabpanel" aria-labelledby="v-pills-ad-tab">
                    <div>
                        <h5>Attach Document</h5>
                    </div>                    
                    <div>               
                        <div class="row gy-3">
                        <form id="frmDoc" method="post" enctype="multipart/form-data">

                            <div class="col-md-12"> 
                                <input type="checkbox" class="form-check-input" id="adhar_copy" name="chk_adhar_copy" value="yes">
                                <label for="adhar_copy" class="form-check-lebel">Aadhar Card Copy</label>
                                <div class="card-body" id="up_adhar_copy" style="display:none;">
                                <input type="file" class="form-control" name="adhar_copy"/>
                                </div>
                            </div>

                            <div class="col-md-12">         
                                <input type="checkbox" class="form-check-input" id="pancard_copy" name="chk_pancard_copy" value="yes">
                                <label for="pancard_copy" class="form-check-lebel">Pan Card Copy</label> 
                                <div class="card-body" id="up_pancard_copy" style="display:none;">
                                <input type="file" class="form-control" name="pancard_copy">
                                </div>                      
                            </div>

                            <div class="col-md-12">         
                                <input type="checkbox" class="form-check-input" id="electric_bill" name="chk_electric_bill" value="yes">
                                <label for="electric_bill" class="form-check-lebel">Latest Electricity bill copy</label> 
                                <div class="card-body" id="up_electric_bill" style="display:none;">
                                <input type="file" class="form-control" name="electric_bill">
                                </div>                       
                            </div>

                            <div class="col-md-12">         
                                <input type="checkbox" class="form-check-input" id="registry_copy" name="chk_registry_copy" value="yes">
                                <label for="registry_copy" class="form-check-lebel">Registry copy</label>  
                                <div class="card-body" id="up_registry_copy" style="display:none;">
                                <input type="file" class="form-control" name="registry_copy">
                                </div>                      
                            </div>

                            <div class="col-md-12">         
                                <input type="checkbox" class="form-check-input" id="b_one_copy" name="chk_b_one_copy" value="yes">
                                <label for="b_one_copy" class="form-check-lebel">Latest B-ONE</label>                       
                                <div class="card-body" id="up_b_one_copy" style="display:none;">
                                <input type="file" class="form-control" name="b_one_copy">
                                </div> 
                            </div>

                            <div class="col-md-12">         
                                <input type="checkbox" class="form-check-input" id="khasra_map" name="chk_khasra_map" value="yes">
                                <label for="khasra_map" class="form-check-lebel">Khasra Map</label>                       
                                <div class="card-body" id="up_khasra_map" style="display:none;">
                                <input type="file" class="form-control" name="khasra_map">
                                </div> 
                            </div>

                            <div class="col-md-12">         
                            <input type="checkbox" class="form-check-input" id="approved_tncp" name="chk_approved_tncp" value="yes">
                            <label for="approved_tncp" class="form-check-lebel">Approved Map TNCP/ Municipal Corportion</label>  
                            <div class="card-body" id="up_approved_tncp" style="display:none;">
                                <input type="file" class="form-control" name="approved_tncp">
                                </div>                      
                            </div>

                            <div class="col-md-12">         
                                <input type="checkbox" class="form-check-input" id="tax_receipt" name="chk_tax_receipt" value="yes">
                                <label for="tax_receipt" class="form-check-lebel">Property Tax Receipt</label> 
                                <div class="card-body" id="up_tax_receipt" style="display:none;">
                                <input type="file" class="form-control" name="tax_receipt">
                                </div>                       
                            </div>

                            <div class="col-md-12">    
                                <input type="checkbox" class="form-check-input" id="any_other" name="chk_any_other" value="yes">
                                <label for="any_other" class="form-check-lebel">Any Other</label>
                                <div class="card-body" id="up_any_other" style="display:none;">
                                    <input type="text" class="form-control" name="other_name" placeholder="Enter Name"><br/>  
                                    <input type="file" class="form-control" name="any_other">
                                </div>                        
                            </div>

                            <br/>

                            <div class="col-sm-6">
                                <input type="hidden" id="attached_id" name="attached_id">
                                <input type="hidden" id="hdn_btn_doc" name="hdn_submit" value="">
                                <input type="submit" name="submit" id="btn_doc" value="Save and Next" class="btn btn-success">
                            </div>
                            
                        </form>

                    </div>                  
                </div>
                
                    <div class="d-flex align-items-start gap-3 mt-4">
                    <button type="button" class="btn btn-light btn-label previestab" data-previous="v-pills-pd-tab"><i class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to Plot Details</button>
                    <button type="button" class="btn btn-success  right ms-auto " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Done
                    </button>
                    </div>

                    </div>
                </div>
            </div>
            
            <!-- end tab pane -->
            </div>
                <!-- end tab content -->
        </div>
        </div>
        <!-- end col -->
                                                                                    
            </div>
            <!-- end row -->
        </div>
        <!----Form end Here------>
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
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center p-5">
                    <lord-icon
                        src="https://cdn.lordicon.com/lupuorrc.json"
                        trigger="loop"
                        colors="primary:#121331,secondary:#08a88a"
                        style="width:120px;height:120px">
                    </lord-icon>                
                    <div class="mt-4">
                        <h4 class="mb-3">Your booking is done</h4>
                        <div class="hstack gap-2 justify-content-center">
                            <a href="<?php echo base_url('index.php/booking/booking_list/')?>" class="btn btn-link link-success fw-medium"><i class="ri-close-line me-1 align-middle"></i> Close</a>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
      <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        Design &amp; Develop By <a href="https://ukcdesigner.in/" target="_blank">UKConcept Designer</a>
                    </div>
                    <div class="col-sm-6">
                      <div class="text-sm-end d-none d-sm-block">
                        Copyright 2023 © All Right Reserved. 
                      </div>
                    </div>
                </div>
            </div>
    </footer>
  </div>        <!-- end main content-->
</div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!-- JAVASCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- JAVASCRIPT -->
    <script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>
    <script src="<?php echo base_url();?>assets/libs/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!-- form wizard init -->
    <script src="<?php echo base_url();?>assets/js/pages/form-wizard.init.js"></script>
    <!-- App js -->
    <script src="<?php echo base_url();?>assets/js/app.js"></script>


    
    

<script>

$(document).ready(function(){
    $('#cheque_data').datepicker({
      format: 'dd-mm-yyyy'});
    $('#cheque_data').datepicker({ dateFormat: 'dd-mm-yy' }).val();

    $("#v-pills-bill-address-tab").prop("disabled", true);
    $("#v-pills-payment-tab").prop("disabled", true);
    $("#v-pills-acd-tab").prop("disabled", true);    
    $("#v-pills-pd-tab").prop("disabled", true);
    $("#v-pills-ad-tab").prop("disabled", true);

    $("#btn_search").on("click", function(){

        var search = $("#client_mob").val();
        var url = "<?php echo site_url('booking/ajax_client_data')?>";
        $.ajax({
            type: "POST",
            url: url,
            data: {client_mob: search}, 
            success: function(data)
            {                 
                var html = "";
                if(data == parseInt(2))
                {
                    html += '<tr>';
                        html += '<td colspan="3" align="center" style="border-bottom:0"><b>Data Not Found</b></td>';
                    html += '</tr>';
                    $("#tr_data").html(html);
                }
                else if(data == parseInt(0))
                {
                    html += '<tr>';
                        html += '<td colspan="3" align="center" style="border-bottom:0"><b>Enter Mobile Number</b></td>';
                    html += '</tr>';

                    $("#tr_data").html(html);
                }
                else
                {
                    let res = JSON.parse(data);
                    $.each(res, function(key,val) {                    
                        html += '<tr>';
                            html += '<th scope="row"><a href="javascript:void(0);" id="'+val.id+'" class="data_row fw-semibold">'+val.client_name+'</a></th>';
                            html += '<td>'+val.total_area+'sqft</td>';
                            html += '<td>'+val.floor_num+' Floor</td>';
                            html += '<td>Rs. '+val.total_cost+'</td>';                                                                
                        html += '</tr>';
                        $("#tr_data").html(html); 
                    });
                }

            }
            
        });

    });
    
  $(document).on("click", ".data_row", function(){           
        
       var client_id = $(this).attr('id');        
      // alert(client_id);
       var url = "<?php echo site_url('booking/ajax_client_full')?>";

       $.ajax({    
            type: "POST",
            url: url,
            data: {client_id: client_id}, 
            success: function(data)
            {           
               let res = JSON.parse(data); 

               $("#calc_id").val(res[0].id);
               $("#client_name").val(res[0].client_name);              
               $("#mobile_no").val(res[0].client_mob);
               $("#plot_location").val(res[0].client_addr);
               $("#plot_size").val(res[0].total_area);
               $("#num_road").val(res[0].road_facing);
               $("#plot_depth").val(res[0].depth);

            }
        });
    });

    $(".btn_booking").on("click", function(){
        var price = $(this).attr('price');
        $("#booking_amt").val(price);
        $("#paid_booking_amt").val(price);

        $("#client_panel").slideDown(1000);   
                
    });

    //$("#v-pills-bill-address-tab").prop("disabled", true);
    $("#btn_plot").on("click", function(){
       //alert("plot_submit");
       $("#hdn_btn_doc").val(""); 
       $("#hdn_btn_plot").val("plot_submit"); 
    });  

    $("#btn_doc").on("click", function(){
       //alert("doc_submit");
       $("#hdn_btn_plot").val(""); 
       $("#hdn_btn_doc").val("doc_submit"); 
    });

/**-----Payment Method------------- */
    $("#chk_upi").on("click", function(){
        if(this.checked){ 
          $("#trans_field").slideUp();
          $("#upi_field").slideDown();         
        }           
    });

    $("#chk_neft").on("click", function(){
        if(this.checked){ 
           $("#upi_field").slideUp();
           $("#trans_field").slideDown();
        }
    });
/**--------------------------------*/

/**------Funding Mode------------- */

    $("#chk_self").on("click", function(){
        if(this.checked){ 
           $("#div_bank_amt").slideUp();         
           $("#div_self_amt").slideDown();
        }           
    });

    $("#chk_bank").on("click", function(){
        if(this.checked){ 
           $("#div_self_amt").slideUp();
           $("#div_bank_amt").slideDown();     
        }
    });

    $("#chk_both").on("click", function(){
        if(this.checked){ 
           $("#div_self_amt").slideDown();
           $("#div_bank_amt").slideDown();     
        }
    });
/**--------------------------------*/



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
    $("#chk_payee_addr").on("click", function(){

            if(this.checked){ 
              // alert($("#p_hno").val());                
                $("#payee_name").val($("#client_name").val());
                $("#payee_relation").val($("#spouse_name").val());
                $("#payee_mobile_no").val($("#mobile_no").val());                         
                $("#payee_email_id").val($("#email_id").val());                         
                $("#payee_pan_no").val($("#pan_no").val());                         
                $("#payee_aadhar_no").val($("#aadhar_no").val());

                $("#payee_hno").val($("#p_hno").val());
                $("#payee_street").val($("#p_street").val());
                $("#payee_landmark").val($("#p_landmark").val());                         
                $("#payee_city").val($("#p_city").val());                         
                $("#payee_state").val($("#p_state").val());                         
                $("#payee_pincode").val($("#p_pincode").val());
            }
            else{
              
                $("#payee_name").val('');
                $("#payee_relation").val('');
                $("#payee_mobile_no").val('');                         
                $("#payee_email_id").val('');                         
                $("#payee_pan_no").val('');                         
                $("#payee_aadhar_no").val('');

                $("#payee_hno").val('');
                $("#payee_street").val('');
                $("#payee_landmark").val('');                         
                $("#p_city").val('');                         
                $("#p_state").val('');                         
                $("#p_pincode").val('');

            }

 });      


  $("#chk_present_addr").on("click", function(){

          if(this.checked){ 

                $("#present_addr").slideDown();
                $("#r_hno").val($("#p_hno").val());
                $("#r_street").val($("#p_street").val());
                $("#r_landmark").val($("#p_landmark").val());                         
                $("#r_city").val($("#p_city").val());                         
                $("#r_state").val($("#p_state").val());                         
                $("#r_pincode").val($("#p_pincode").val());                         

            }
            else{

                $("#r_hno").val('');
                $("#r_street").val('');
                $("#r_landmark").val('');                         
                $("#r_city").val('');                         
                $("#r_state").val('');                         
                $("#r_pincode").val('');   
                $("#present_addr").slideUp(); 
                
                $("#o_hno").val('');
                $("#o_street").val('');
                $("#o_landmark").val('');                         
                $("#o_city").val('');                         
                $("#o_state").val('');                         
                $("#o_pincode").val('');   
                $("#office_addr").slideUp();

            }
    });

        $("#same_p_add").on("click", function(){

            if ($(this).prop("checked", true)) {

                $("#office_addr").slideDown();
                
                $("#o_hno").val($("#p_hno").val());
                $("#o_street").val($("#p_street").val());
                $("#o_landmark").val($("#p_landmark").val());                         
                $("#o_city").val($("#p_city").val());                         
                $("#o_state").val($("#p_state").val());                         
                $("#o_pincode").val($("#p_pincode").val());    

            }
            else{

                $("#o_hno").val('');
                $("#o_street").val('');
                $("#o_landmark").val('');                         
                $("#o_city").val('');                         
                $("#o_state").val('');                         
                $("#o_pincode").val('');   
                $("#office_addr").slideUp();    

            }

        });

        $("#same_r_add").on("click", function(){

            if ($(this).prop("checked", true)) { 
               
                $("#office_addr").slideDown();

                $("#o_hno").val($("#r_hno").val());
                $("#o_street").val($("#r_street").val());
                $("#o_landmark").val($("#r_landmark").val());                         
                $("#o_city").val($("#r_city").val());                         
                $("#o_state").val($("#r_state").val());                         
                $("#o_pincode").val($("#r_pincode").val());                         
            }
            else{

                $("#o_hno").val('');
                $("#o_street").val('');
                $("#o_landmark").val('');                         
                $("#o_city").val('');                         
                $("#o_state").val('');                         
                $("#o_pincode").val('');  

                $("#office_addr").slideUp();        
            }

        });

/**--------------Start Decision Maker ------------------------------------ */
    $("#chk_decision_mkr").on("click", function(){

        if (this.checked) { 

            $("#d_name").val($("#client_name").val());
            $("#d_mobile_no").val($("#mobile_no").val());
            $("#d_email_id").val($("#email_id").val());                         
            $("#d_pan_no").val($("#pan_no").val());                         
            $("#d_aadhar_no").val($("#aadhar_no").val());      
            $("#d_hno").val($("#p_hno").val());
            $("#d_street").val($("#p_street").val());
            $("#d_landmark").val($("#p_landmark").val());                         
            $("#d_city").val($("#p_city").val());                         
            $("#d_state").val($("#p_state").val());                         
            $("#d_pincode").val($("#p_pincode").val());

        }
        else{

            $("#d_name").val('');
            $("#d_mobile_no").val('');
            $("#d_email_id").val('');                         
            $("#d_pan_no").val('');                         
            $("#d_aadhar_no").val('');      
            $("#d_hno").val('');
            $("#d_street").val('');
            $("#d_landmark").val('');                         
            $("#d_city").val('');                         
            $("#d_state").val('');                         
            $("#d_pincode").val('');

        }

    });

$('#frmDecMaker').validate({

    rules: {     
       d_name:{
        required: true
      },

      d_relation:{
        required: true
      },
      d_mobile_no:{
        required: true
      },      
      d_email_id:{
        required: true
      },
      d_pan_no:{
        required: true
      },
      d_aadhar_no:{
        required: true
      },

      d_street:{
        required: true
      },
      d_hno:{
        required: true
      },
      d_landmark:{
        required: true
      },      
      d_city:{
        required: true
      },
      d_state:{
        required: true
      },
      d_pincode:{
        required: true
      },

    },
    messages: {
        d_name:{
        required: 'Enter client name'
      },
      
      d_relation:{
        required: 'Enter client name'
      },
      d_mobile_no:{
        required: 'Enter client name'
      },    
      d_email_id:{
        required: 'Enter client name'
      },
      d_pan_no:{
        required: 'Enter client name'
      },
      d_aadhar_no:{
        required: 'Enter client name'
      },


      d_hno:{
        required: 'Enter client name'
      },
      d_street:{
        required: 'Enter client name'
      },
      d_landmark:{
        required: 'Enter client name'
      },    
      d_city:{
        required: 'Enter client name'
      },
      d_state:{
        required: 'Enter client name'
      },
      d_pincode:{
        required: 'Enter client name'
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
        
        var bid = $("#bid").val();
        $("#booking_id").remove();

        $('<input>').attr({
            type: 'hidden',
            id: 'booking_id',
            name: 'booking_id',
            value:bid
        }).appendTo('#frmDecMaker');

        var frmdata = $("#frmDecMaker").serialize();       
        console.log(frmdata);

        var url = "<?php echo site_url('booking/ajax_decision_maker')?>";
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
                       alert("Successfully saved...\n Goto Next -->");
                       $("#v-pills-payment-tab").prop("disabled", false);  
                       $("#dec_id").val(spl_txt[2]);  
                    }
                    else if(spl_txt[1] == 2)
                    {
                       alert("Successfully Updated...\n Goto Next -->");
                    } 
                    else
                    {
                        alert("Something Went Wrong...");
                    }
                    
                }
                
            });
      }

});

/**--------------END Decision Maker------------------------------------ */
/**--------------Start Payee---------------------- */
$('#frmPayee').validate({
    rules: {     
        payee_name:{
            required: true
        },
    },
    messages: {
        payee_name:{
        required: 'Enter client name'
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

    var bid = $("#bid").val();
        $("#booking_id").remove();

        $('<input>').attr({
            type: 'hidden',
            id: 'booking_id',
            name: 'booking_id',
            value:bid
        }).appendTo('#frmPayee');

    var frmdata = $("#frmPayee").serialize();

    console.log(frmdata);

    var url = "<?php echo site_url('booking/ajax_client_payee')?>";
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
                    alert("Successfully saved \n go to next-->");
                    $("#v-pills-acd-tab").prop("disabled", false);  
                    $("#payee_id").val(spl_txt[2]);     
                }
                else if(spl_txt[1] == 2){

                   alert("Successfully Updated...");
                }
                else
                {
                    alert("Something went wrong...");
                } 

            }
            
        });
    }

});

/**--------------END Payee---------------------- */

/**--------------Start Transaction---------------*/

$(document).on("keyup", "#final_amt", function(){

    var inword = convertNumberToWords($(this).val());
    $("#final_amt_in_word").val(inword+' Only');
    console.log(inword);

});





$('#frmTransaction').validate({

    rules: {     
            offer_amt:{
                required: true
            },
        },
        messages: {
            offer_amt:{
            required: 'Enter client name'
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

        var bid = $("#bid").val();
        $("#booking_id").remove();

        $('<input>').attr({
            type: 'hidden',
            id: 'booking_id',
            name: 'booking_id',
            value:bid
        }).appendTo('#frmTransaction');

    var frmdata = $("#frmTransaction").serialize();     
    console.log(frmdata);

    var url = "<?php echo site_url('booking/ajax_booking_transaction')?>";
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
                   alert("Successfully saved \n go to next");
                   $("#v-pills-pd-tab").prop("disabled", false); 
                   $("#trans_id").val(spl_txt[2]);   
                }
                else if(spl_txt[1] == 2){
                   
                   alert("Successfully Updated...");
                }
                else
                {
                   alert("Something went wrong...");
                }

            }
            
        });
    }

});

/**--------------END Transaction---------------------- */


/**--------------Start Plot Details---------------------- */
$('#frmPlot').validate({

    rules: {     
        plot_location:{
            required: true
        },
    },
    message: {
        plot_location:{
        required: 'Enter client name'
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
    
    var bid = $("#bid").val();
        $("#booking_id").remove();

        $('<input>').attr({
            type: 'hidden',
            id: 'booking_id',
            name: 'booking_id',
            value:bid
        }).appendTo('#frmPlot');
    
    var frmdata = new FormData($('#frmPlot')[0]);
    console.log(frmdata);
    var url = "<?php echo site_url('booking/ajax_plot_details')?>";

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
        if(spl_txt[1] == 1) {

            alert("Successfully saved \n Go to Next -->");
            $("#v-pills-ad-tab").prop("disabled", false); 

            if(spl_txt[3] == "plot")
            {
                $("#plot_id").val(spl_txt[2]);
            }
            else if(spl_txt[3] == "doc")
            {
                $("#attached_id").val(spl_txt[2]);
            }
            //$("input[name=res_id]").val(spl_txt[2]);
        }
        else if(spl_txt[1] == 2){

            alert("Successfully Updated...");

        }
        else
        {
            alert("Something went wrong...");
        }

        //let res = JSON.parse(data);
        //console.log(res);                    
        // if(res.status == 1)
        // {                  
        //   alert("Saved...");
        //   $("#btn_topup").show();
        // }
        // else
        // { 
        //   alert("Something went wrong...");
        //   $("#btn_topup").show();  
        //}
        
    }
    
});
}

});

/**--------------END Plot---------------------- */

/*
$('#frmDoc').validate({
    rules: {     
       
    },
    message: {
       
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

    var bid = $("#bid").val();
    $("#booking_id").remove();

        $('<input>').attr({
            type: 'hidden',
            id: 'booking_id',
            name: 'booking_id',
            value:bid
        }).appendTo('#frmPlot');
    
        var frmdata = new FormData($('#frmDoc')[0]);
        console.log(frmdata);

        var url = "<?php //echo site_url('booking/ajax_attached_doc')?>";
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

                $("#v-pills-payment-tab").prop("disabled", false);   
                $("#res_id").val(spl_txt[2]);
            }         
        }

    });
}

});

*/

/**-----------Save Data------------------ */

$('#frmClientInfo').validate({
    rules: {     
        client_name:{
          required: true
        },
        spouse_name:{
          required: true
        },
        age:{
          required: true
        },
        gender:{
          required: true
        },
        occupation:{
          required: true
        }, 
        mobile_no:{
          required: true
        }, 
        email_id:{
          required: true
        },
        pan_no:{
          required: true
        },
        aadhar_no:{
          required: true
        },

        p_hno:{
          required: true
        },
        p_street:{
          required: true
        },
        p_landmark:{
          required: true
        },
        p_city:{
          required: true
        },
        p_state:{
          required: true
        },
        p_pincode:{
          required: true
        },        
    },
    messages: {
      client_name:{
        required: 'Enter client name'
      },      
      spouse_name:{
        required: 'Enter spouse name'
      },
      age:{
        required: 'Enter age'
      },
      gender:{
        required: 'Select gender'
      },
      occupation:{
        required: 'Enter occupation'
      },
      mobile_no:{
        required: 'Enter mobile no'
      },      
      email_id:{
        required: 'Enter mobile no'
      },
      pan_no:{
        required: 'Enter pan no'
      },
      aadhar_no:{
        required: 'Enter mobile no'
      },
      p_hno:{
        required: 'Enter street'
      },
      p_street:{
        required: 'Enter street'
      },
      p_landmark:{
        required: 'Enter street'
      },
      p_city:{
        required: 'Enter mobile no'
      },
      p_state:{
        required: 'Enter mobile no'
      },
      p_pincode:{
        required: 'Enter mobile no'
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
       
      var frmdata = $("#frmClientInfo").serialize(); 
      var url = "<?php echo site_url('booking/ajax_client_info')?>";
        $.ajax({
            type: "POST",
            url: url,
            data: frmdata, 
            success: function(data)
            { 
                console.log(data);
                var spl_txt = data.split("~~~");
                if(spl_txt[1] == 1){
                
                    $("#bid").val(spl_txt[2]);
                    $("#booking_id").remove();
                    $('<input>').attr({
                      type: 'hidden',
                      id: 'booking_id',
                      name: 'booking_id',
                      value:spl_txt[2]
                    }).appendTo('#frmPlot');

                   alert("Successfully Saved \n Go to next ==>");
                   $("#v-pills-bill-address-tab").prop("disabled", false);
                }
                else if(spl_txt[1] == 2){

                    alert("Successfully Updated \n Go to Next ==>");

                }
                else{
                    alert("Something went Wrong...");
                }
            }                
        });
    }
});

/**---------END Save Data-------------*/

});


function convertNumberToWords(num) {
    var ones = ["", "One ", "Two ", "Three ", "Four ", "Five ", "Six ", "Seven ", "Eight ", "Nine ", "Ten ", "Eleven ", "Twelve ", "Thirteen ", "Fourteen ", "Fifteen ", "Sixteen ", "Seventeen ", "Eighteen ", "Nineteen "];
    var tens = ["", "", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"];
    if ((num = num.toString()).length > 9) return "Overflow: Maximum 9 digits supported";
    n = ("000000000" + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
    if (!n) return;
    var str = "";
    str += n[1] != 0 ? (ones[Number(n[1])] || tens[n[1][0]] + " " + ones[n[1][1]]) + "Crore " : "";
    str += n[2] != 0 ? (ones[Number(n[2])] || tens[n[2][0]] + " " + ones[n[2][1]]) + "Lakh " : "";
    str += n[3] != 0 ? (ones[Number(n[3])] || tens[n[3][0]] + " " + ones[n[3][1]]) + "Thousand " : "";
    str += n[4] != 0 ? (ones[Number(n[4])] || tens[n[4][0]] + " " + ones[n[4][1]]) + "Hundred " : "";
    str += n[5] != 0 ? (str != "" ? "and " : "") + (ones[Number(n[5])] || tens[n[5][0]] + " " + ones[n[5][1]]) : "";
    return str;
}

</script>

</body>

</html>