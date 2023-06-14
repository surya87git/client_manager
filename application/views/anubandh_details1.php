<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Anubandh Details</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Anubandh</a>
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
            <!-----Client Info Details-------->
            <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-center">
                  <h5 class="card-title flex-grow-1 mb-0">Client Information</h5>
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
                  <div class="col-md-6">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/phone.png" alt="User_Icon">
                      <span>8878879800</span>
                    </span>
                  </div>
                  <div class="col-md-6">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/email.png" alt="User_Icon">
                      <span>dev2.rockss@gmail.com</span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/age.png" alt="User_Icon">
                      <span>Age: 31</span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/age.png" alt="User_Icon">
                      <span>Male</span>
                    </span>
                  </div>
                  <br>
                  <br>
                  <hr>
                  <div class="col-md-6">
                    <span class="text-primary">Pan:</span>
                    <span>cyups5421</span>
                  </div>
                  <div class="col-md-6">
                    <span class="text-primary">Adhaar:</span>
                    <span>2147483647</span>
                  </div>
                  <br>
                  <br>
                  <div class="col-md-12">
                    <span class="text-primary" style="text-decoration:underline; font-weight: 500;">Present Address</span>&nbsp;&nbsp;<a href="" data-bs-toggle="modal" data-bs-target="#zoomInModal1"><i class="ri-edit-2-fill"></i></a>
                  </div>
                  <div class="col-md-12">
                    <img src="<?php echo base_url();?>assets/images/icons/location.png" alt="Location">
                    <span>12/63, devendra nagar, pandir, raipur, chattisghar, 492001</span>
                  </div>
                  <br>
                  <br>
                  <div class="col-md-12">
                    <span class="text-primary" style="text-decoration:underline; font-weight: 500;">Permanent Address</span>&nbsp;&nbsp;<a href="" data-bs-toggle="modal" data-bs-target="#zoomInModal3"><i class="ri-edit-2-fill"></i></a>
                  </div>
                  <div class="col-md-12">
                    <img src="<?php echo base_url();?>assets/images/icons/location.png" alt="Location">
                    <span>12/63, devendra nagar, pandir, raipur, chattisghar, 492001</span>
                  </div>
                </div>
              </div>
            </div> 
            <!-----End of Client Info Details-------->
            <!--end card-->


            <!------Payment Details--------->
            <div class="card">
              <div class="card-header">
                <div class="d-sm-flex align-items-center">
                  <h5 class="card-title flex-grow-1 mb-0">Payment Details</h5>
                  <button type="button" class="btn btn-success btn-sm btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#zoomInModalpayee"><i class=" ri-edit-2-fill label-icon align-middle fs-16 me-2"></i>Edit</button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/user_icon.png" alt="User_Icon">
                      <span>Payment Mode: Cheque</span>
                    </span>
                  </div>
                  <div class="col-md-6">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/transaction.png" alt="phone">
                      <span>Cheque No/Transaction Id: 123456789012</span>
                    </span>
                  </div>
                  <div class="col-md-6">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/rupees.png" alt="email">
                      <span>Amount: 2,00,000 <span class="text-danger">(Two Lakhs Only)</span></span>
                    </span>
                  </div>
                  <br>
                </div>
              </div>
            </div>
            <!------End of Payment Details--------->
            <!--end card-->

            <!-------Site Details--------->
            <div class="card">
              <div class="card-header">
                <div class="d-sm-flex align-items-center">
                  <h5 class="card-title flex-grow-1 mb-0">Site Details</h5><button type="button" class="btn btn-success btn-sm btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#zoomInModalplotdetails"><i class=" ri-edit-2-fill label-icon align-middle fs-16 me-2"></i>Edit</button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6"> 
                      <img src="<?php echo base_url();?>assets/images/icons/location.png" alt="User_Icon">
                      <span>Usha Kiran Parisar, Batagaon, Raipur </span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/location.png" alt="User_Icon">
                      <span>City: Raipur</span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/location.png" alt="User_Icon">
                      <span>Distict: West Sinhbhum</span>
                    </span>
                  </div>
                  <hr class="mt-2">
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                      <span>Khasra No.: 1234567890</span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                      <span>P.H.N. No.: 1234567890</span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                      <span>Plot area: 1234567890</span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                      <span>Rate sqft: 1234567890</span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                      <span>Boundary wall Area: 123 Sqft.</span>
                    </span>
                  </div>
                  <div class="col-md-3">
                    <span>
                      <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                      <span>Boundary wall Cost: Rs. 123</span>
                    </span>
                  </div>
                      <div class="col-md-3">
                        <span>
                          <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                          <span>Running Feet Cost: Rs. 123</span>
                        </span>
                      </div>
                      <div class="col-md-3">
                        <span>
                          <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                          <span>Elevation Cost: Rs. 123</span>
                        </span>
                      </div>
                      <div class="col-md-3">
                        <span>
                          <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                          <span>Drawing+VR Cost: Rs. 123</span>
                        </span>
                      </div>
                      <div class="col-md-3">
                        <span>
                          <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                          <span>Discount Price: Rs. 123</span>
                        </span>
                      </div>
                      <div class="col-md-3">
                        <span>
                          <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                          <span>Modular kitchen Price: Rs. 123</span>
                        </span>
                      </div>
                      <div class="col-md-3">
                        <span>
                          <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                          <span>False Ceiling Price: Rs. 123</span>
                        </span>
                      </div>
                      <div class="col-md-3">
                        <span>
                          <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                          <span>Total Working Area: 123 Sqft.</span>
                        </span>
                      </div>
                      <div class="col-md-3">
                        <span>
                          <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                          <span>Other Price: Rs. 1233</span>
                        </span>
                      </div>
                      <div class="col-md-3">
                        <span>
                          <img src="<?php echo base_url();?>assets/images/icons/tick.png" alt="User_Icon">
                          <span>Advance agreement: Rs. 1233</span>
                        </span>
                      </div>
                      <div class="col-md-6">
                        <span>
                          <img src="<?php echo base_url();?>assets/images/icons/rupees.png" alt="User_Icon">
                          <span>Total Price: Rs. 1233</span> <span class="text-danger">(One Thousand two hundred thirty three only/-) </span>
                        </span>
                      </div>   
                  <br>
                  <br>
                  <hr>
                </div>
              </div>
            </div>
            <!-------End of Site Details--------->
            <!--end card-->

            <!----Start of no of floor-------->
            <div class="card">
              <div class="card-header">
                <div class="d-sm-flex align-items-center">
                  <h5 class="card-title flex-grow-1 mb-0">Site Details</h5><button type="button" class="btn btn-success btn-sm btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#nooffloor"><i class=" ri-edit-2-fill label-icon align-middle fs-16 me-2"></i>Edit</button>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <span class="text-primary">Number of floors:</span>
                    <span>2</span>
                  </div>
                  <div class="col-md-12">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Floor</th>
                            <th>Area</th>
                            <th>Rate</th>
                            <th>According Maps</th>
                          </tr>
                          <tr>
                            <td>Ground Floor</td>
                            <td>Rs. 1234 Sqft.</td>
                            <td>Rs. 123</td>
                            <td>Civil Only</td>
                          </tr>
                          <tr>
                            <td>First Floor</td>
                            <td>Rs. 1234 Sqft.</td>
                            <td>Rs. 123</td>
                            <td>Finishing Only</td>
                          </tr>
                        </tbody>
                      </table>
                      
                  </div>
                        
                </div>
              </div>
            </div>
            <!----End of no of floor-------->

            <!----Verify ----------->
            <div class="row">
              <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                      <div class="d-flex align-items-center">
                        <span>To see the coloumn we are giving to clients :</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg"><i class="ri-eye-fill"></i> View</a> 
                        &nbsp; <a href="<?php echo base_url("index.php/anubandh/makeanubadh");?>" class="btn btn-primary btn-sm"><i class="ri-edit-2-fill"></i> Edit</a>
                      </div>
                                
                    </div>
                </div>
              </div>
            </div>
            <!-----End of Verify------>
          </div>
          <!--end col-->
          <!--container-fluid-->
        </div>
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
                            <input type="text" id="client_name" name="client_name" value="" class="form-control" placeholder="Enter Client Name" required>
                          </div>
                          <div class="col-xl-6 mt-2">
                            <label for="">Mobile Number</label>                         
                            <input type="text" id="mobile_no" name="mobile_no" value="" class="form-control" placeholder="Enter Mobile Number">
                          </div>
                          <div class="col-xl-6 mt-2"> 
                            <label for="">Relation Name</label>                        
                            <input type="text" id="" name="" value="" class="form-control" placeholder="Enter Relative Name" required>
                          </div>
                          <div class="col-xl-6 mt-2">  
                          <label for="">Email</label>                       
                            <input type="email" id="email_id" name="email_id" value="" class="form-control" placeholder="Enter Email">
                          </div>
                          <div class="col-xl-6 mt-2">
                          <label for="">Age</label>                         
                            <input type="number" id="age" name="age" value="" class="form-control" placeholder="Enter Age">
                          </div>
                          <div class="col-xl-6 mt-2">   
                          <label for="">Occupation</label>                      
                            <input type="text" id="" name="" value="" class="form-control" placeholder="Enter Occupation" required>
                          </div>    
                          <div class="col-xl-6 mt-2">  
                          <label for="">Adhaar Card</label>                       
                            <input type="text" id="aadhar_no" name="aadhar_no" value=""  class="form-control" placeholder="Enter Adhaar Card">
                          </div>
                          <div class="col-xl-6 mt-2"> 
                          <label for="">Pan Card</label>                        
                            <input type="text" id="pan_no" name="pan_no" value="" class="form-control" placeholder="Enter Pan Number">
                          </div>
                        </div>                         
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" id="btn_client" value="Calculate">Update Now</button>
                    </div>
                </form>
             </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->                                     
        <!-------------------End of Clinet Information Modal----------------->


            <!----------------------Payee Modal-----------------------> 
          <div id="zoomInModalpayee" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="zoomInModalLabel">Payment Details <small class="text-success" style="font-weight: lighter;">Edit Here</small></h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form id="frmPayee">
                        <div class="row">
                          <div class="col-xl-6 mt-2">   
                            <label for="">Select Payment Mode</label>                      
                          <select class="form-control" name="" id="">
                            <option value="Select_mode">Select Payment Mode</option>
                            <option value="Card">Card</option>
                            <option value="UPI/QR">UPI/QR</option>
                            <option value="Cheque">Cheque</option>
                          </select>
                          </div>
                          <div class="col-xl-6 mt-2">   
                            <label for="">Transaction ID</label>                      
                            <input type="text" id="" name="" value="" class="form-control" placeholder="Enter Transaction Id">
                          </div>               
                          <div class="col-xl-12 mt-2">
                            <label for="">Total Amount</label>                         
                            <input type="number" id="" name="" value="" class="form-control" placeholder="Total Amount">
                          </div>
                          <div class="col-xl-12 mt-2">                         
                            <input type="text" id="" name="" value="" class="form-control" placeholder="Enter Amount in Words">
                          </div>                       
                            
                        </div>
                        <div class="modal-footer">                      
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="btn_payee">Save Now</button>
                      </div>
                      </form>
                    </div>
                  </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->                                     
          <!-------------------End of Payee Modal----------------->
      
    
          <!----------------------Site Details Modal-----------------------> 
          <div id="zoomInModalplotdetails" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="zoomInModalLabel">Site Details <small class="text-success" style="font-weight: lighter;">Edit Here</small>
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="frmPlot">
                    <div class="row">
                      <div class="col-xl-12 mt-2">
                        <label for="">Enter Plot Location</label>
                        <input type="text" id="plot_location" name="plot_location" value="" class="form-control" placeholder="Plot Location">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for="">Enter City</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Enter City">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for="">Enter District</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Enter District">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for="">Enter Khasra No.</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Enter Khasra No">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for="">Enter P.H.N No.</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Enter P.H.N. No.">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for=""><label for="">Enter Plot Area:</label></label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Enter Plot area:">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for="">Enter Rate sqft:</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Enter Rate sqft:">
                      </div>
                      <div class="col-xl-6 mt-2">

                        <label for="">Enter Floor:</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Enter Floor:">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for="">Enter Boundary wall Area:</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Boundary wall Area:">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for="">Enter Boundary wall Cost:</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Boundary wall Cost:">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for="">Enter Running Feet Cost:</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder=" Running Feet Cost:">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for="">Enter Elevation Cost:</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Elevation Cost:">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for="">Enter Drawing+VR Cost:</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Drawing+VR Cost:">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for="">Enter Discount Price:</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Discount Price:">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for="">Enter Modular kitchen Price:</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Modular kitchen Price:">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for="">Enter False Ceiling Price:</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="False Ceiling Price:">
                      </div>
                      <div class="col-xl-6 mt-2">
                        <label for="">Enter Total Working Area:</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Total Working Area: ">
                      </div>
                      <div class="col-xl-12 mt-2">
                        <label for="">Enter Other Price:</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Other Price:">
                      </div>
                      <div class="col-xl-12 mt-2">
                        <label for="">Enter Advance agreement:</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Advance agreement:">
                      </div>
                      <div class="col-xl-12 mt-2">
                        <label for="">Enter Total Price:</label>
                        <input type="text" id="" name="" value="" class="form-control" placeholder="Total Price:">
                      </div>
                      <div class="col-xl-12 mt-2">
                        <input type="text" id="" name="" value="" class="form-control" placeholder="In Words:">
                      </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" id="btn_plot">Update Now</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog --> 
          </div>
        <!-- /.modal -->                                   
        <!-------------------End of Site Details Modal----------------->

          <!----------------------No. of Floor  Modal-----------------------> 
            <div id="nooffloor" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="zoomInModalLabel">No. of floor<small class="text-success" style="font-weight: lighter;">Edit Here</small>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form id="frmPlot">
                      <div class="row">
                        <div class="col-xl-12 mt-2">
                          <label for="">Enter Number of Floor:</label>
                          <select id="" name="nooffloor" class="form-select mb-3" aria-label="Default Select example" aria-invalid="false">
                            <option value="" selected>Select Number of Floor</option>
                            <option value="1">1st floor</option>
                            <option value="2">2nd floor</option>
                            <option value="3">3rd floor</option>
                          </select>
                        </div>
                        <div class="col-12">
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <th>Floor</th>
                                <th>Area</th>
                                <th>Rate</th>
                                <th>According Maps</th>
                              </tr>
                              <tr>
                                <td>Groud Floor</td>
                                <td>1250 Sqft.</td>
                                <td>Rs. 780</td>
                                <td>Civil Only</td>
                              </tr>
                              <tr>
                                <td>First Floor</td>
                                <td>1100 Sqft.</td>
                                <td>Rs. 880</td>
                                <td>Finishing</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="btn_plot">Update Now</button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog --> 
            </div>
          <!-- /.modal -->                                   
          <!-------------------End of no of floor----------------->

          <!--------View Column---------->
              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="myLargeModalLabel">Selected Column</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <h6 class="fs-15">Column C</h6>
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <i class="ri-checkbox-circle-fill text-success"></i>
                        </div>
                        <div class="flex-grow-1 ms-2">
                          <p class="text-muted mb-0">भूमि की रजिस्ट्री कापी प्रदान करेंगे</p>
                        </div>
                      </div>
                      <div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                          <i class="ri-checkbox-circle-fill text-success"></i>
                        </div>
                        <div class="flex-grow-1 ms-2 ">
                          <p class="text-muted mb-0">निर्माण नक्शा अनुज्ञा है ? (यदि अनुज्ञा कराना हो तो सम्पूर्ण खर्चा पार्टी न. 2 द्वारा किया जाना है)</p>
                        </div>
                      </div>
                      <div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                          <i class="ri-checkbox-circle-fill text-success"></i>
                        </div>
                        <div class="flex-grow-1 ms-2 ">
                          <p class="text-muted mb-0">निर्माण नक्शा स्वयं के निर्देष पर बनवा कर हस्ताक्षर करके निर्माण कार्य हेतु दिये</p>
                        </div>
                      </div>
                      <div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                          <i class="ri-checkbox-circle-fill text-success"></i>
                        </div>
                        <div class="flex-grow-1 ms-2 ">
                          <p class="text-muted mb-0">अनुबंधानुसार पानी के लिए पानी की व्यवस्था पार्टी न. 2 प्रदान करेंगे </p>
                        </div>
                      </div>
                      <div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                          <i class="ri-checkbox-circle-fill text-success"></i>
                        </div>
                        <div class="flex-grow-1 ms-2 ">
                          <p class="text-muted mb-0">पानी सप्लाई की मोटर लगा कर देंगे</p>
                        </div>
                      </div>
                      <div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                          <i class="ri-checkbox-circle-fill text-success"></i>
                        </div>
                        <div class="flex-grow-1 ms-2 ">
                          <p class="text-muted mb-0">बिजली लगवाकर देंगे व बिल स्वयं भरेंगे (बिजली की सुविधा प्रदान करना अनिवार्य है ताकि कार्य प्रारंभ किया जा सके)</p>
                        </div>
                      </div>
                      <h6 class="fs-16 my-3">Column F</h6>
                      <div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                          <i class="ri-close-circle-fill text-danger"></i>
                        </div>
                        <div class="flex-grow-1 ms-2 ">
                          <p class="text-muted mb-0">सभी भुगतान के एडवांस चैक पार्टी नं. 1 को शर्तों के अनुसार समय पर अग्रिम देंगे</p>
                        </div>
                      </div>
                      <div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                          <i class="ri-checkbox-circle-fill text-success"></i>
                        </div>
                        <div class="flex-grow-1 ms-2 ">
                          <p class="text-muted mb-0">हो रहे निर्माण का निरीक्षण पार्टी न. 2 स्वयं की संतुष्टि हेतु अपनी स्वेक्षा से प्रति सप्ताह करवाने के लिए स्वतंत्र है</p>
                        </div>
                      </div>
                      <div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                          <i class="ri-close-circle-fill text-danger"></i>
                        </div>
                        <div class="flex-grow-1 ms-2 ">
                          <p class="text-muted mb-0">किसी भी प्रकार के लाइट, पंखे गीजर, टीवी, कोई भी applinces, फर्निचर, चिमनी, कैमरा, dvr, अन्य सिस्टम कार्य में शामिल हैं ?</p>
                        </div>
                      </div>
                      <div class="d-flex mt-2">
                        <div class="flex-shrink-0">
                          <i class="ri-checkbox-circle-fill text-success"></i>
                        </div>
                        <div class="flex-grow-1 ms-2 ">
                          <p class="text-muted mb-0">किसी भी प्रकार की सरकारी, अर्धसरकारी, अन्य संस्थान, इन सभी से कार्यवाही कार्य में शामिल है ?</p>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal">
                        <i class="ri-close-line me-1 align-middle"></i> Close </a>
                      <button type="button" class="btn btn-primary ">Save changes</button>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
          <!-------End of View Column----------->
          <!-------------------Present Address --------------------------------> 
              <div id="zoomInModal1" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="zoomInModalLabel">Present Address <small class="text-success" style="font-weight: lighter;">Edit Here</small></h5>
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
                                  <div class="modal-footer mt-2">
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

    
          <!-------------------Permanent Address ----------------------------> 
              <div id="zoomInModal3" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="zoomInModalLabel">Permanent Address <small class="text-success" style="font-weight: lighter;">Edit Here</small></h5>
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
                              <div class="modal-footer mt-2">
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


          <!-- End Page-content -->
            <footer class="footer">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-6">
                    <script>
                      document.write(new Date().getFullYear())
                    </script> © UKC.
                  </div>
                  <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block"> UKConcept Designer </div>
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

/**-------Mail Function -------- */
$(document).on("click", "#btnMail", function(){

  var booking_id = $(this).attr("mid");
  $.ajax({ 
      url: "http://localhost/cost_calc/index.php/mail/send_booking_mail", 
      type: "POST",
      data: ({booking_id: booking_id}),

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
      url: "http://localhost/cost_calc/index.php/mail/send_confirmation_mail", 
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
 }
 else{
   verify = "no";
   $("#chk_attach").attr("disabled", true);
 }  

 var url = "http://localhost/cost_calc/index.php/booking/ajax_booking_verify";
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

  var url = "http://localhost/cost_calc/index.php/booking/ajax_booking_verify";
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

/**--------------CHKECK Box Verify Admin-------------------------*/

  $(document).on("change", "#chk_admin", function(){
  
  var verify = "";
  if($(this).is(":checked")) {     
    verify = "yes";
  }
  else{
    verify = "no";
  }  

 var url = "http://localhost/cost_calc/index.php/booking/ajax_booking_verify";
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

 var url = "http://localhost/cost_calc/index.php/booking/ajax_booking_verify";
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
      var url = "http://localhost/cost_calc/index.php/booking/ajax_edit_client_info";
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
      var url = "http://localhost/cost_calc/index.php/booking/ajax_edit_client_info";
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
                    //location.reload();
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
      var url = "http://localhost/cost_calc/index.php/booking/ajax_edit_client_info";
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
      var url = "http://localhost/cost_calc/index.php/booking/ajax_edit_client_info";
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
      var url = "http://localhost/cost_calc/index.php/booking/ajax_decision_maker";
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
      var url = "http://localhost/cost_calc/index.php/booking/ajax_client_payee";
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
      var url = "http://localhost/cost_calc/index.php/booking/ajax_booking_transaction";
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
      var url = "http://localhost/cost_calc/index.php/booking/ajax_edit_plot";
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
      var url = "http://localhost/cost_calc/index.php/booking/ajax_edit_doc";
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