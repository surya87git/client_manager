<?php
include("../admin_portal/header.php")
?>
<!-- Begin page -->
<div id="layout-wrapper"> <?php
include("../admin_portal/top-sidebar.php")
?>
 
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
                <a type="button" class="btn btn-success btn-sm btn-label waves-effect waves-light"><i class="ri-list-check label-icon align-middle fs-16 me-2"></i>Stage List</a>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                  <div class="row">
                  <div class="col-lg-4">
                                            <h6 class="fw-semibold">Basic Select</h6>
                                            <select class="js-example-basic-single" name="state">
                                                <option value="AL">Alabama</option>
                                                <option value="MA">Madrid</option>
                                                <option value="TO">Toronto</option>
                                                <option value="LO">Londan</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                      
                      <div class="col-xxl-6 col-md-6 mt-3">
                        <label for="">Enter Start and End Date</label>
                        <input type="text" class="form-control" name="daterange" value="01/01/2015 - 01/31/2015">
                      </div>
                      <div class="col-xxl-12 col-md-12 mt-3">
                        <label for="">Select Work Tag </label>
                        <select id="" name="[" class=" js-example-basic-multiple select2_single form-control" multiple="multiple" placeholder="Select" tabindex="-1">    
                        <option value="brick">Brick</option>
                            <option value="Level Casting">Level Casting</option>
                            <option value="Elevation">Elevation</option>
                            <option value="Plinth">Plinth</option>
                            <option value="lorem">Lorem</option>
                        </select>
                      </div>                        
                    <div class="col-xxl-12 col-md-12 mt-3">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Stage Details</label>
                        <textarea id="message" required="required" class="form-control" name="message" placeholder="Write your note according to stage" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                    </div>
                    <hr style="border-top: 1px dashed #405189;" class="mt-3">
                    <div>
                    <h5>Stage Payment</h5>
                    </div>
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <label for="">Payable Amount</label>
                        <input type="text" id="" name="" class="form-control" placeholder="Enter Total Payment" required/>
                    </div>
                    <div class="form-group col-xxl-6 col-md-6 mt-3">
                      <label>Payable  Date:</label>
                      <input type="text" id="from_date" value="Select Date " required name="from_date" class="form-control"/>        
                      
                    </div>   
                    <div class="col-xxl-6 col-md-6 mt-3">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Payment Status</label>
                        <select class="select2_single form-control" tabindex="-1">
                        <option value="Payment Status">Select Payment Status</option>
                        <option value="Done">Done</option>
                        <option value="Pending">Pending</option>
                        </select>
                    </div>
                      
                  </div>
                  <div class="mt-3" style="float:right;">
                  <button type="button" class="btn btn-success btn-label"><i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i> Submit</button>
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

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<!-- daterange picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/date_range.min.js"></script>
  <!--select2 cdn-->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script src="assets/js/pages/select2.init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/app.js"></script>

<script type="text/javascript"> 
$(document).ready(function(){

  $(".js-example-basic-multiple").select2({
    placeholder: "---Select---",
    allowClear: true
  });

  $('#from_date').datepicker({
    format: 'dd-mm-yyyy',
      autoclose: true,
    }).on('changeDate', function (selected) {
      //var minDate = new Date(selected.date.valueOf());
      //$('#to_date').datepicker('setStartDate', minDate);
  });


  $(function() {
  $('input[name="daterange"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
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

  $(document).on("change", ".switcher", function(e){
    
    var id = $(this).attr("id");
    var status = 0;

    if(e.target.checked)
    {
      status = 1;
    }
          
  $.ajax({

      url:'ajax_login_user.php',
        type: "POST",
        data: ({id: id, status: status, source: "users"}),
        dataType: 'json',
        success: function(data){
          
          if(data == parseInt(1))
          {
              /*Toast.fire({
                  icon: 'success',
                  title: 'Successfully Updated...'
              });
              if(status == 1)
              {
                $("#lbl_sw_"+id).html("Active");
                $("#lbl_sw_"+id).attr("title", "Checked");
              }
              else
              {
                $("#lbl_sw_"+id).html("Inactive");
                $("#lbl_sw_"+id).attr("title", "Unchecked");
              }*/
              //alert("Successfully deleted...");
          } 

        }

    }); 
    
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