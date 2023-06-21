
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">List</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Cost Calculator</a>
                  </li>
                  <li class="breadcrumb-item active">List</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- end page title -->
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1">Calculation List</h4>
                <button type="button" class="btn btn-success btn-sm btn-label waves-effect waves-light"  data-bs-toggle="modal" data-bs-target="#paynow"><i class="ri-secure-payment-fill label-icon align-middle fs-16 me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                    Pay Now
                </button>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                  <div class="table-responsive">
                     <table id="example" class="table table-striped table-bordered" style="width:100%">                     
                      <thead class="table-light">
                        <tr>
                          <th scope="col">Date</th>
                          <th scope="col">Name</th>
                          <th scope="col">Mobile</th>
                          <th scope="col">Location</th>
                          <th scope="col">No.of Floor</th>
                          <th scope="col">Total Cost</th>
                          <th scope="col">Created By</th>
                          <th>Book Now</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                       // print_r($calc_list);
                        if($calc_list){

                          $cnt = 0;
                          foreach($calc_list as $row){
                            $cnt++;
                            $create_date = date("d-M, Y h:i a", strtotime($row->create_date));
                            
                        ?>
                          <tr id="tr_<?php echo $cnt;?>">
                              <td><?php echo $create_date;?></td>
                              <td>
                                <div class="d-flex gap-2 align-items-center">
                                  <div class="flex-grow-1">
                                    <a href="javascript:void(0);" cid="<?php echo $row->id;?>" class="view" data-bs-toggle="modal" data-bs-target="#flipModal"><?php echo $row->client_name;?></a>
                                  </div>
                                </div>
                              </td>
                              <td><?php echo $row->client_mob;?></td>
                              <td><?php echo $row->client_addr;?></td>
                              <td><?php echo $row->floor_num;?> <small>/<?php echo $row->total_area;?> sqft.</small></td>
                              <td>Rs.&nbsp;<?php echo number_format(round($row->total_cost));?></td>
                              <td><?php echo $row->create_by;?></td>
                              <td>
                              <?php if($row->booking_id > 0 ){?>
                                <a href="<?php echo base_url("index.php/booking/booking_details/$row->booking_id");?>" class="badge rounded-pill badge-soft-danger">Booked</a>
                              <?php }else{?>
                                <a href="javascript:void(0);" tc="<?php echo $row->total_cost;?>" id="<?php echo $row->id;?>" class="badge rounded-pill badge-soft-success" data-bs-toggle="modal" data-bs-target="#myModal" >Book Now</a>
                              <?php }?>
                              </td>
                              <td nowrap>
                                <a href="viewplan.php?cmob=<?php echo $row->client_mob;?>" style="font-weight:bold;"><img src="<?php echo base_url();?>assets/images/icons/compare.png" height="20px;" width="20px;" alt="Compare" title="Compare Plan"  srcset=""></a> |
                                <a href="pdf2/anubandh_2.php?cid=<?php echo $row->id;?>" style="font-weight:bold; color:green;"><img src="<?php echo base_url();?>assets/images/icons/download.png" height="20px;" width="20px;" alt="Download" title="Download" srcset=""></a> |  
                                <a href="javascript:void(0);" id="<?php echo $row->id;?>" class="trash" style="font-weight:bold; color:red;"><img src="<?php echo base_url();?>assets/images/icons/delete.png" height="20px;" width="20px;" alt="Delete" title="Delete" srcset=""></a>
                              </td>
                          </tr>
                        <?php }
                        }
                      ?>
                    </tbody>
                      <!--tfoot class="table-light">
                        <tr>
                          <td colspan="5" style="font-weight: bold;">Total</td>
                          <td style="font-weight: bold;">Rs. 90 Cr</td>
                        </tr>
                      </tfoot-->
                    </table>
                    <!-- end table -->
                  </div>
                  <!-- end table responsive -->
                </div>
                
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
        </div>
      </div>
      <div id="flipModal" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="flipModalLabel">Plan Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="my-4 ">
            <div class="modal-body">
          
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
              <!--button type="button" class="btn btn-primary ">Edit The Changes</button-->
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      
      <!------Book Now Modal----------->
        <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"  style="display: none;" data-bs-backdrop="static" 
            data-bs-keyboard="false" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Quick Booking</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                    </div>
                    <hr>
                    <form id="frmBooking">
                      <div class="modal-body">
                          <h6 class="text-primary" style="margin-top:-18px">Here is the Booking Plan</h6>
                            <div class="row">
                                <div class="col-md-6">
                                  <div>
                                      <div class="icheck-success d-inline">
                                        <input type="radio" checked class="switcher" name="plan" value="fixed" id="plan1">
                                        <label title="Checked" for="plan1">Plan 1 <br>
                                          <span>Rs. 3,00,000</span></label><br>
                                      </div>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div>
                                      <div class="icheck-success d-inline">
                                        <input type="radio"  class="switcher" name="plan" value="percent" id="plan2">
                                        <label title="Checked" for="plan2">Plan 2<br>
                                          <span>35 %  of Estimate Cost</span></label><br>
                                      </div>
                                  </div>
                                </div>
                            </div>
                            <br>
                            <p class="text-danger mt-2" style="text-align: center;"><b> Total Booking Amount: Rs. <span id="html_booking_amt">3,00,000</span>/-</b></p>
                            <hr style="border-top: 1px solid red;">
                            <div class="row mt-2">
                              <div class="col-md-12 mt-2">
                                <label for="">Enter Name</label>
                                <input type="text" id="client_name" name="client_name" class="form-control" placeholder="Enter Name" required>
                              </div>
                              <div class="col-md-6 mt-2">
                                <label for="">Enter Mobile No.</label>
                                <input type="number"  id="mobile_no" name="mobile_no" class="form-control" placeholder="Enter Mobile number" required>
                              </div>
                              <div class="col-md-6 mt-2">
                                <label for="">Enter Email Address</label>
                                <input type="email"  id="email_id" name="email_id" class="form-control" placeholder="Enter Email Address" required>
                              </div>
                              <div class="col-md-6 mt-2">
                                <label for="">Enter Adhaar Card No.</label>
                                <input type="text"  id="aadhar_no" name="aadhar_no" class="form-control" placeholder="Enter Adhaar Card No." required>
                              </div>
                              <div class="col-md-6 mt-2">
                                <label for="">Enter Pan No.</label>
                                <input type="text"  id="pan_no" name="pan_no" class="form-control" placeholder="Enter Pancard No." required>
                              </div>
                              <div class="col-md-12 mt-2">
                                <label for="">Enter Payment Link</label>
                                <input type="text"  id="booking_link" name="booking_link" class="form-control" placeholder="Enter Payment Link" required>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <input type="hidden" name="booking_id" id="booking_id">
                        <input type="hidden" name="total_cost" id="total_cost">
                        <input type="hidden" name="calc_id" id="calc_id">
                        <input type="hidden" name="booking_amt" id="booking_amt" value="300000">
                        <!-- Buttons with Label -->
                        <!--button type="submit" id="btn_submit" class="btn btn-primary ">Submit</button-->
                        
                        <div id="div_mail">
                          <button type="submit" id="btn_submit" class="btn btn-danger btn-label waves-effect waves-light"><i class=" ri-links-line label-icon align-middle fs-16 me-2"></i> Send link to Client</button>
                        </div>
                        <div id="div_loader" style="display:none;">
                          <a href="javascript:void(0);" class="btn btn-success btn-label waves-effect waves-light"><i class="ri-secure-payment-fill label-icon align-middle fs-16 me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>Processing...</a>
                        </div>                        
                          <a href="javascript:void(0);" id="btn_pay" class="btn btn-success btn-label waves-effect waves-light"><i class="ri-secure-payment-fill label-icon align-middle fs-16 me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i> Pay Now</a>
                      </div>
                  </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
            
        </div><!-- /.modal -->
        <!------End of Book Now Modal----------->
                
      <!-- Pay Now-->
        <div class="modal fade" id="paynow" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="mt-2">
                          <h4 class="text-danger" style="text-align:center;">Pay Now</h4>
                            <h6 class="mb-3">Payment Mode</h6>
                            <div class="my-2">
                            <div class="form-check form-check-inline">
                              <input type="radio" id="chk_upi" name="payment_mode" value="UPI/QR" class="form-check-input">
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
                            
                            <!----------Link Section----------->
                            <center>
                            <div class="col-12 mt-3" id="" style="">
                              <span class="text-primary">Click the below button to make a payment</span>
                              <div class="col-12 mt-2">
                                <a href="https://tinyurl.com/2olo7rbw" target="_blank" class="btn btn-sm  btn-primary"> <i class=" ri-bank-card-fill" aria-hidden="true"></i>&nbsp;&nbsp;Rs. 3,00,000/- Pay Now</a>
                              </div>
                            </div>
                            </center>
                            <!----------End of Link Section------------------->
                            <!--------Netbanking Section------->
                            <center>
                            <div class="row gy-3 mt-2" id="" style="">
                              <span class="text-primary">Netbanking</span><br>
                              <div class="col-lg-12">
                                <div class="fill-form">
                                  <div class="row">
                                    <div class="col-lg-6 ">
                                      <div class="info-post">
                                        <div class="icon">
                                          <span>Account Holder Name: <span class="text-primary"><br> UK Concept Designer</span> </span>        
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                      <div class="info-post">
                                        <div class="icon">
                                        <span>Bank Name: <span class="text-primary"><br> HDFC Bank</span></span>       
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                      <div class="info-post">
                                        <div class="icon">
                                        <span>Account Number: <span class="text-primary"><br> 50200011762575</span></span>       
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                      <div class="info-post">
                                        <div class="icon">
                                        <span>IFSC Code: <span class="text-primary"><br> HDFC0003687</span></span>       
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>   
                            </center>             
                            <!-----End of Netbanking Section-------->
                            <!-------Enter Transaction Details------->
                            <center>
                            <div class="col-md-6 mt-3" id="trans_field" style="">
                                <span class="text-primary">Transection ID</span>
                                <input type="text" id="trans_id" name="trans_id" value="" class="form-control" placeholder="Enter Transaction Id" required="">
                              </div>
                              </center>
                            <!------End of Transaction Details-------->
                            </div>
                            <div class="hstack gap-2 justify-content-center mt-4">
                                <a href="javascript:void(0);" class="btn btn-link link-success fw-medium" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</a>
                                <a href="javascript:void(0);" class="btn btn-success">Completed</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
      <!-- container-fluid -->

    </div>
    
    <!-- End Page-content -->
    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <script>
              document.write(new Date().getFullYear())
            </script> UKC
          </div>
          <div class="col-sm-6">
            <div class="text-sm-end d-none d-sm-block"> Design & Develop by UKC </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- end main content-->
</div>
<!-- END layout-wrapper -->
<!-- JAVASCRIPT -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?php echo base_url();?>assets/libs/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url();?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>

<!--script src="assets/js/plugins.js"></script-->
<!-- prismjs plugin -->
<script src="<?php echo base_url();?>assets/libs/prismjs/prism.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/app.js"></script>

<script type="text/javascript">

$(document).ready(function(){
  $(".switcher").on("click", function(){
    var amt_type = $(this).val();
    
        if(this.checked){            
          if(amt_type == "fixed"){
              var amt = 300000;
              var booking_amt = amt.toLocaleString('hi-IN');

              console.log(booking_amt);
              $("#html_booking_amt").html(booking_amt);
              $("#booking_amt").val(amt);
          }
          else if(amt_type == "percent"){

              var tc = $("#total_cost").val();  
              var amt = Math.round(tc/100*35);
              var booking_amt = amt.toLocaleString('hi-IN');
              $("#html_booking_amt").html(booking_amt);
              $("#booking_amt").val(amt);

          }

        }           
    });


  $(document).on("click", ".badge", function(){

    var id = $(this).attr("id");
    var tc = $(this).attr("tc");
    $("#total_cost").val(tc);
    $("#calc_id").val(id);

    /**----Reset Modal---------- */
      $("#plan1").prop('checked', true);
      var amt = 300000;
      var booking_amt = amt.toLocaleString('hi-IN');
      console.log(booking_amt);
      $("#html_booking_amt").html(booking_amt);
      $("#booking_amt").val(amt);
  /**----End Reset Modal---------- */
  });

$('#frmBooking').validate({
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
      
      var url = "<?php echo site_url('booking/ajax_quick_booking')?>";
      //var frmdata = $("#frmDoc").serialize(); //new FormData($('#costForm')[0]);//$("#followupForm").serialize();  
      var frmdata = new FormData($('#frmBooking')[0]);
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
                    //alert("Successfully Saved...");
                    ///**------Send Mail--------------------- */

                    var booking_id = spl_txt[2];
                      $.ajax({ 
                          url: "<?php echo site_url('mail/send_booking_mail')?>", 
                          type: "POST",
                          data: ({booking_id: booking_id}),
                          beforeSend: function(){
                            $("#div_mail").hide();
                            $("#div_loader").show();
                            console.log("before send..............");
                          },
                          success: function(data)
                          {
                            $("#div_loader").html("Successfully Sent...");;
                            setTimeout(() => {
                              $("#div_mail").show();
                              $("#div_loader").hide();        
                            }, 5000);  
                          },
                          error: function() {                       
                          setTimeout(() => {
                            $("#div_mail").show();
                            $("#div_loader").hide();        
                          }, 5000);
                        },
                          complete: function() {               
                            setTimeout(() => {
                              $("#div_mail").show();
                              $("#div_loader").hide();        
                            }, 5000);  
                          }
                      });

                    /**------------------------------------ */  
                    //location.reload();
                  }
                 else if(spl_txt[1] == 2)
                  { 
                    alert("Successfully updated...");
                    //location.reload();
                  }
                  else
                  { 
                    alert("Something went wrong...");                   
                  }   
              },
            

          });
      }
  });




  


  $('#example').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
  });

  $(".view").on("click", function(){
    
      var id = $(this).attr("cid");   
      $.ajax({
        url:'ajax_cost_calc.php',
        type: "POST",
        data: ({id: id, type: "model_client"}),
        success: function(data){
          $(".modal-body").html(data);   
        }

      });

  });

  $(".trash").on("click", function(){
    
      var id = $(this).attr("id");

      $.ajax({
        url:'ajax_cost_calc.php',
        type: "POST",
        data: ({id: id, type: "delete_list"}),
        success: function(data){

          var spl_txt = data.split("~~~");
          if(spl_txt[1] == 1)
          {
            $("#tr_"+id).remove();
            alert(spl_txt[2]);
          } 

        }

    }); 

  });


});

</script>

<?php
  include("footer.php");
?>