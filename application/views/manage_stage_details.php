
<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Add Stages Details</h4>
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
        <!-----Add Stages--------->
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header align-items-center d-flex">
                <h4 class="card-title mb-0 flex-grow-1"><span class="badge badge-soft-primary" style="font-size: 15px;">Ajay Jain</span></h4>
                <a href="<?= base_url("index.php/clientmanager/stage_detail_list/".$booking_id);?>" class="btn btn-success btn-sm btn-label waves-effect waves-light"><i class="ri-list-check label-icon align-middle fs-16 me-2"></i>Stage List</a>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <form id="frmStage">
                  <div class="live-preview">
                    <div class="row">
                        <div class="col-xxl-6 col-md-6 mt-3">
                          <label for="">Select Stage</label>
                          <select id="stage_id" name="stage_id" class="js-example-basic-multiple select2_single " tabindex="-1" data-placeholder="Select Work Tag" required>    
                          <option>--Select Stage--</option>
                          <?php if($stage_list){

                            $cnt =0;
                            foreach($stage_list as $res)
                              {
                                  $cnt++;
                                  if($res->id == $sdata->stage_id){
                                    $selected = 'selected="selected"';
                                  }
                                  else{
                                    $selected = '';
                                  }

                                echo '<option '.$selected.' value="'.$res->id.'"> Stage -'.$cnt.' [ '.$res->stage_name.' ]</option>';
                              } 
                            }
                            ?> 
                          </select>
                        </div>
                        <?php 
                          if($sdata->start_date != NULL && $sdata->end_date != NULL){
                            $start_date = date("d-m-Y", strtotime($sdata->start_date));
                            $end_date = date("d-m-Y", strtotime($sdata->end_date));
                          }
                          else{
                            $start_date = date("d-m-Y");
                            $end_date = date("d-m-Y");
                            
                          }
                          
                          $daterange = $start_date." - ".$end_date;
                        ?>
                        <div class="col-xxl-6 col-md-6 mt-3">
                          <label for="">Enter Start and End Date</label>
                          <input type="text" class="form-control" id="daterange" name="daterange" value="<?php echo $daterange;?>" required>
                        </div>
                        <div class="col-xxl-12 col-md-12 mt-3">
                          <label for="">Select Work Tag </label>
                          <select id="work_tag" name="work_tag[]" class="required js-example-basic-multiple select2_single form-control" multiple="multiple" placeholder="Select" tabindex="-1" required>    
                          <?php if($worktag_list){

                            $worktag_arr = explode(",", $sdata->work_tag);
                            //print_r($worktag_arr);
                            foreach($worktag_list as $res)
                              {
                                if(in_array($res->id, $worktag_arr)){
                                  $selected = 'selected="selected"';
                                }
                                else{
                                  $selected = '';
                                }
                                echo '<option '.$selected.' value="'.$res->id.'">'.$res->name.'</option>';
                              } 
                            }
                            ?>    
                          </select>
                        </div>                        
                      <div class="col-xxl-12 col-md-12 mt-3">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Stage Details</label>
                          <textarea id="message"class="form-control" name="stage_details" value="<?php echo $sdata->stage_details ?? "";?>" placeholder="Write your note according to stage" required><?php echo $sdata->stage_details ?? "";?></textarea>
                      </div>
                      <hr style="border-top: 1px dashed #405189;" class="mt-3">
                      <div>
                      <h5>Stage Payment</h5>
                      </div>
                      <div class="col-xxl-6 col-md-6 mt-3">
                          <label for="">Payable Amount</label>
                          <input type="text" id="payable_amt" name="payable_amt" value="<?php echo $sdata->payable_amt ?? "";?>" class="form-control" placeholder="Enter Total Payment" required>
                      </div>
                      <div class="form-group col-xxl-6 col-md-6 mt-3">
                        <label>Payable  Date:</label>
                        <input type="text" class="form-control" id="payable_date" value="<?php if($sdata->payable_date != NULL){ echo date("d-m-Y", strtotime($sdata->payable_date));};?>" name="payable_date" placeholder="Select Date" required>                              
                      </div>   
                      <div class="col-xxl-6 col-md-6 mt-3">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Payment Status</label>
                          <select class="select2_single form-control" id="payment_status" name="payment_status" tabindex="-1" required>
                          <option value="Payment Status">Select Payment Status</option>
                          <option <?php if($sdata->payment_status == "Done"){ echo 'selected="selected"';} ?> value="Done">Done</option>
                          <option <?php if($sdata->payment_status == "Pending"){ echo 'selected="selected"';} ?> value="Pending">Pending</option>
                          </select>
                      </div>
                    </div>
                    <div class="mt-3" style="float:right;">
                      <input type="hidden" name="booking_id" value="<?php echo $booking_id;?>">
                      <input type="hidden" name="sid" value="<?php echo $sid;?>">
                      <button type="submit" class="btn btn-success btn-label"><i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i> Submit</button>
                    </div>
                  </div>
                </form>  
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->
          </div>
          <!-- end col -->
        </div>
        <!-----End of Add Stages--------->
        
      </div>
      
      <!-- container-fluid -->
    </div>
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
<!-- daterange picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<!-------Daterange Picker------------>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/date_range.min.js"></script>
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/app.js"></script>

<script type="text/javascript"> 
$(document).ready(function(){

$('#frmStage').validate({
      rules: {             
        "stage_id":{
          required: true
        },
      },
      messages: {                
        "stage_id":{
          required: ''
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
          var url = "<?php echo site_url('clientmanager/ajax_stage_details')?>";
          var frmdata = new FormData($('#frmStage')[0]);
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
                    window.location.href = "<?php echo base_url("index.php/clientmanager/manage_stage_details/")?>"+spl_txt[3];
                  }
                  else if(spl_txt[1] == 2)
                  { 
                    alert("Successfully Updated..."); 
                    window.location.href = "<?php echo base_url("index.php/clientmanager/stage_detail_list/")?>"+spl_txt[3];                  
                  }
                  else
                  { 
                    alert("Something went wrong...");                   
                  }   
              }
          });
      }
}); 
  
  $(".js-example-basic-multiple").select2({
    placeholder: "---Select---",
    allowClear: true
  });
 

});

$(function() {

  $('input[name="daterange"]').daterangepicker({
      opens: 'left',
      autoclose: true,
      locale: {
      format: 'DD-MM-YYYY'
    }   
  });

  $('#payable_date').datepicker({
      format: 'dd-mm-yyyy',
      setDate: new Date(),
      autoclose: true    
  });


});

</script>
 </body>
</html>