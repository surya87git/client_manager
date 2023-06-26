
<div class="main-content">
    <div class="page-content">
      <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0">Add Add User</h4>
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
                <h4 class="card-title mb-0 flex-grow-1">Add User</h4>
                <div class="flex-shrink-0">
                    <a href="userlist.php" class="btn btn-success btn-sm"><i class="ri-file-list-2-line align-bottom"></i>&nbsp; User List</a>
                </div>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                  <div class="row">
                      <div class="col-xxl-12 col-md-12 mt-3">
                        <label for="">Select Role for User</label>
                        <select id="" name="" class=" js-example-basic-multiple select2_single form-control"  placeholder="Select" tabindex="-1">    
                          <option value="" Selected>Select Role for User</option>
                          <option value="Admin">Admin</option>
                          <option value="Team Member">Team Member</option>
                          <option value="Team Head">Team Head</option>
                          <option value="Employee">Employee</option>
                        </select>
                      </div>
                      <div class="col-xxl-6 col-md-6 mt-3">
                        <label for="">User Name</label>
                        <input type="text" id="" name="" class="form-control" placeholder="Enter User Name" required/>
                      </div>
                      <div class="col-xxl-6 col-md-6 mt-3">
                        <label for="">Mobile Number</label>
                        <input type="text" id=""  name="" class="form-control" value="" placeholder="Enter User Number">
                      </div>
                      <div class="col-xxl-6 col-md-6 mt-3">
                        <label for="">Email Address</label>
                        <input type="text" id=""  name="" class="form-control" value="" placeholder="Enter User Email Address">
                      </div>
                      <div class="col-xxl-6 col-md-6 mt-3">
                        <label for="">Select User Designation</label>
                        <select id="" name="" class=" js-example-basic-multiple select2_single form-control"  placeholder="Select User Designation" tabindex="-1">    
                          <option value="" Selected>Select Role for User</option>
                          <option value="Site Master">Site Master</option>
                          <option value="Project Manager">Project Manager</option>
                          <option value="Interior Designer">Interior Designer</option>
                          <option value="Architect">Architect</option>
                        </select>
                      </div>   
                      <div class="col-xxl-12 col-md-12 mt-3">
                        <label for="">User Address</label>
                        <input type="text" id=""  name="" class="form-control" value="" placeholder="Enter User Address">
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
<!-------Daterange Picker------------>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/date_range.min.js"></script>
<script src="<?php echo base_url();?>assets/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="assets/js/app.js"></script>

<script type="text/javascript"> 
$(document).ready(function(){

  $(".js-example-basic-multiple").select2({
    placeholder: "---Select---",
    allowClear: true
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