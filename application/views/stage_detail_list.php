<?php 
$CI = & get_instance();
$client_name = $CI->get_name("bkf_booking_form","client_name",$booking_id);
?>
<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Stages Details List</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Masters</a>
                  </li>
                  <li class="breadcrumb-item active">Project Stages </li>
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
                <h4 class="card-title mb-0 flex-grow-1"><?php echo $client_name?></h4>
                <a href="<?php echo base_url("index.php/clientmanager/payment_history/".$booking_id)?>" class="btn btn-success btn-sm btn-label waves-effect waves-light"><i class=" ri-file-list-fill label-icon align-middle fs-16 me-2"></i>Payment History</a>&nbsp;&nbsp;
                <a href="<?php echo base_url("index.php/clientmanager/manage_stage_details/".$booking_id)?>" class="btn btn-success btn-sm btn-label waves-effect waves-light"><i class=" ri-file-add-fill label-icon align-middle fs-16 me-2"></i>Add Stage</a>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                <!--form action="">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Stage</label>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <select class=" js-example-basic-multiple select2_single form-control" name="states[]" tabindex="-1">
                          <option value="ajayjain">Ajay Jain</option>
                          <option value="Rahul Bansal">Rahul Bansal</option>
                          <option value="Lalit Yadav">Lalit Yadav</option>
                          <option value="Surya">Surya Narayan</option>
                          <option value="Srini">Srini</option>
                        </select>
                      </div>
                    </div>
                </form-->
                <div class="table-responsive mt-3">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">                     
                      <thead class="table-light">
                        <tr>
                          <th>Stages Name</th>
                          <th>Start Date</th>
                          <th>Total Payable</th>
                          <th>Payment Status</th>
                          <th>Pay Now</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                     
                      if($stage_list){
                        
                      foreach($stage_list as $res)
                        {

                          
                          $stage_name = $CI->get_name("bkf_work_stages","stage_name",$res->stage_id);
                          $start_date = date("d-M-Y", strtotime($res->start_date));
                          $end_date = date("d-M-Y", strtotime($res->end_date));

                          $paid_amt = $res->payable_amt - $res->pending_amt;
                          $running_status = $CI->getStatus($res->running_status);
                        ?>
                        <tr>
                            <td class="text-primary"><b id="lbl_stage_name_<?php echo $res->id;?>"><?php echo $stage_name;?></b><br>
                              <!--small class="text-info">Stage Number: 1</small-->
                            </td>
                            <td><?php echo $start_date;?><br>
                              <small class="text-success">End Date: <?php echo $end_date;?></small>
                            </td>
                            <td>Rs. <?php echo $res->payable_amt;?><br>
                            <input type="hidden" id="payable_amt_<?php echo $res->id;?>" value="<?php echo $res->payable_amt ?? "";?>">
                            <input type="hidden" id="pending_amt_<?php echo $res->id;?>" value="<?php echo $res->pending_amt ?? "";?>">
                            <!--small class="text-danger"> Days: 10 Days Left</small-->
                            </td>
                            <td><span class="badge rounded-pill badge-soft-success" style="font-size:11px">Paid amount: <span style="color:#f16c50"> Rs. <?php echo $paid_amt;?></span></span><br>
                              <small class="text-info">Pending amount: Rs. <?php echo $res->pending_amt ?? "";?></small></td>
                            <td>
                              <?php if($res->pending_amt == 0){?>
                                <a href="javascript:void(0);" class="btn btn-primary btn-label btn-sm waves-effect waves-light rounded-pill"><i class="ri-bank-card-fill label-icon align-middle rounded-pill fs-16 me-2"></i>All Paid</a>
                              <?php }else{ ?>
                                <a href="javascript:void(0);" sid="<?php echo $res->id;?>" stage_id="<?php echo $res->stage_id;?>" booking_id="<?php echo $res->booking_id;?>" class="paynow btn btn-primary btn-label btn-sm waves-effect waves-light rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModalgrid"><i class="ri-bank-card-fill label-icon align-middle rounded-pill fs-16 me-2"></i>Pay Now</a>
                              <?php }?>  
                            </td>
                            <td nowrap>            
                              <div class="dropdown">
                                    <div id="status_<?php echo $res->id;?>"><?php echo $running_status;?></div>
                                    <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ri-more-2-fill"></i>
                                    </a>                                    
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                      <li><a class="action dropdown-item" href="javascript:void(0);" sid="<?php echo $res->id;?>" running_status="Untouched" stage_id="<?php echo $res->stage_id;?>">Untouched</a></li>
                                      <li><a class="action dropdown-item" href="javascript:void(0);" sid="<?php echo $res->id;?>" running_status="Running" stage_id="<?php echo $res->stage_id;?>">Running</a></li>
                                      <li><a class="action dropdown-item" href="javascript:void(0);" sid="<?php echo $res->id;?>" running_status="Completed" stage_id="<?php echo $res->stage_id;?>">Completed</a></li>
                                      <li><a class="action dropdown-item" href="javascript:void(0);" sid="<?php echo $res->id;?>" running_status="Hold" stage_id="<?php echo $res->stage_id;?>">Hold</a></li>
                                    </ul>
                                </div>


                                
                            </td>
                            <td>
                              <div class="hstack gap-3 flex-wrap">
                                <!--a href="javascript:void(0);" class="link-success fs-15"><i class="ri-gallery-fill"></i></a-->
                                <a href="<?php echo base_url('/index.php/clientmanager/manage_stage_details/'.$res->booking_id.'/'.$res->id)?>" class="link-primary fs-15"><i class="ri-edit-2-line"></i></a>
                                <a href="javascript:void(0);" class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                              </div>
                            </td>
                            
                        </tr>  
                        <?php }
                         
                        }?>                  
                    </tbody>
                      
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
        </div>
      </div>
      
      <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    
    <!-----Pay Now Modal------->
    <div class="modal zoomIn" id="exampleModalgrid" tabindex="-1" aria-labelledby="paynow" aria-modal="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title text-primary" id="paynow" style="text-decoration: underline;">Pay Now</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form id="frmPay">
                      <div class="row">
                          <div class="col-xxl-12">
                              <div>
                                  <h5 class="text-primary">Total Payable on Stage <b id="html_stage_name"><?php ?></b></h5>  
                              </div>
                          </div><!--end col-->
                          <div class="col-xxl-12">
                              <div>
                                  <label for="enteramount" class="form-label">Enter Amount</label>
                                  <input type="number" id="paid_amt" name="paid_amt" class="form-control" id="enteramount" placeholder="Enter Amount" required>
                              </div>
                          </div><!--end col-->
                          <div class="col-xxl-12 mt-2">
                              <div>
                                  <label for="entertransaction" class="form-label">Enter Transaction</label>
                                  <input type="text" name="refrence_no" class="form-control" id="entertransaction" placeholder="Enter Transaction number" required>
                              </div>
                          </div><!--end col-->
                          <div class="col-lg-12 mt-2">
                            <label class="form-label">Select Received </label>
                            <div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="received_as" id="inlineRadio1" value="money" required>
                                  <label class="form-check-label" for="inlineRadio1">As Payment</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="received_as" id="inlineRadio2" value="material" required>
                                  <label class="form-check-label" for="inlineRadio2">As Material</label>
                              </div>
                            </div>
                        </div>
                          <div class="col-xxl-12 mt-2">
                            <div>
                              <label for="received_by" class="form-label">Enter Received By</label>
                              <input type="text" class="form-control" name="received_by" id="received_by" placeholder="Enter Receiver Name" required>
                            </div>
                          </div><!--end col--> 
                          <div class="col-lg-12 mt-2">
                            <div class="hstack gap-2 justify-content-end">
                              <input type="hidden" id="sid" name="sid">
                              <input type="hidden" id="stage_id" name="stage_id">
                              <input type="hidden" id="booking_id" name="booking_id">
                              <input type="hidden" id="payable_amt" name="payable_amt">
                              <input type="hidden" id="pending_amt" name="pending_amt">
                              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div><!--end col-->
                      </div><!--end row-->
                  </form>
              </div>
          </div>
      </div>
    </div>
    <!-----End of Pay Now Modal--------->

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
<!-------Daterange Picker------------>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/app.js"></script>

<script type="text/javascript"> 
$(document).ready(function(){

$(document).on("click", ".action", function(){

  var id = $(this).attr("sid");
  var stage_id =  $(this).attr("stage_id");
  var running_status = $(this).attr("running_status");

  var url = "<?php echo site_url('clientmanager/ajax_stage_running_status')?>";
    $.ajax({
          url:url,
          type: "POST",
          data: ({id: id, stage_id: stage_id, running_status: running_status}),
          success: function(data){
              var spl_txt = data.split("~~~");

              if(spl_txt[1] == 2)
              {
                $("#status_"+id).html(spl_txt[2]);
                alert("Status Successfully Changed....");
              } 

          }
      });

});

$(document).on("click", ".paynow", function(){

    var sid = $(this).attr("sid");
    var stage_id = $(this).attr("stage_id");
    var booking_id = $(this).attr("booking_id");

    var stage_name = $('#lbl_stage_name_'+sid).html();

    $("#payable_amt").val($('#payable_amt_'+sid).val());
    $("#pending_amt").val($('#pending_amt_'+sid).val());
    $("#paid_amt").val($('#pending_amt_'+sid).val());
    
    $("#html_stage_name").html(stage_name+' Rs. '+$('#pending_amt_'+sid).val());
    $("#sid").val(sid);
    $("#stage_id").val(stage_id);
    $("#booking_id").val(booking_id);

});


$('#frmPay').validate({
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
          var url = "<?php echo site_url('clientmanager/ajax_stage_payment')?>";
          var frmdata = new FormData($('#frmPay')[0]);
          //console.log(frmdata);
          $.ajax({            
              type: "POST",
              url: url,
              data: frmdata,
              processData: false,
              contentType: false,  
              success: function(data)
              {                 
                  //console.log(data);
                  var spl_txt = data.split("~~~");
                  if(spl_txt[1] == 1)
                  { 
                    alert("Successfully Saved...");     
                    location.reload()                     
                    //window.location.href = "<?php //echo base_url("index.php/clientmanager/manage_stage_details/")?>"+spl_txt[3];
                  }
                  else if(spl_txt[1] == 2)
                  { 
                    alert("Successfully Updated..."); 
                    location.reload()
                    //window.location.href = "<?php //echo base_url("index.php/clientmanager/stage_detail_list/")?>"+spl_txt[3];                  
                  }
                  else
                  { 
                    alert("Something went wrong...");                   
                  }   
              }
          });
      }
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



  $('#example').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": false,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
  $(".js-example-basic-multiple").select2({
    placeholder: "---Select---",
    allowClear: true
  });
});

</script>
</body>
</html>
