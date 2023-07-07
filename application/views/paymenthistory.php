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
              <h4 class="mb-sm-0">Payment History</h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Admin Panel</a>
                  </li>
                  <li class="breadcrumb-item active">Payment History</li>
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
                <h4 class="card-title mb-0 flex-grow-1">Payment History</h4>
                <a href="javascript(void);" class="btn btn-success btn-sm btn-label waves-effect waves-light"><i class="ri-file-list-fill label-icon align-middle fs-16 me-2"></i> Stage Detail List</a>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                  <div class="row">
                      <div class="col-xxl-12 col-md-12 mt-2">
                        <label for="">Select Client</label>
                        <select id="" name="" class=" js-example-basic-multiple select2_single form-control"  placeholder="Select" tabindex="-1">    
                          <option value="" Selected>Select Client</option>
                          <option value="Ajayjain">Ajay Jain</option>
                          <option value="Kapil Goyel">Kapil Goyel</option>
                          <option value="MD. Sajid">MD. Sajid</option>
                          <option value="Ruchika Sabale">Ruchika Sabale</option>
                          <option value="Priyank Kella">Priyank Kella</option>
                        </select>
                      </div>
                      <div class="table-responsive mt-3">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">                     
                      <thead class="table-light">
                        <tr>
                          <th>Client Name</th>
                          <th>Stages Name</th>
                          <th>Payment Date and Time</th>
                          <th>Total Payable</th>
                          <th>Amount Paid</th>
                          <th>Payment Status</th>
                          <th>Received</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>Ajay Jain</td>
                            <td class="text-primary"><b>Footing</b><br>
                            <small class="text-info">Stage Number: 1</small>
                            </td>
                            <td>3 April,2023 <br>
                              <small class="text-info">12:20 pm</small></td>
                            <td>Rs. 20,000 <br>
                            </td>
                            <td>Rs. 20,000 <br>
                              <small class="text-danger">Due: Rs. 0</small></td>
                            <td>
                            <span class="badge badge-soft-success badge-border" style="font-size: 12px;">Paid</span>
                            </td>
                            <td> Received By: Vishal<br>
                            <small class="text-info">As Payment</small></td>
                            <td>
                                <div class="hstack gap-3 flex-wrap">
                                    <a href="javascript:void(0);" class="link-primary fs-15"><i class="ri-edit-2-line"></i></a>
                                    <a href="javascript:void(0);" class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Ajay Jain</td>
                            <td class="text-primary" nowrap><b>Plinth</b><br>
                            <small class="text-info">Stage Number: 2</small>
                            </td>
                            <td>3 April,2023 <br>
                              <small class="text-info">12:20 pm</small></td>
                            <td>Rs. 20,000 <br>
                            </td>
                            <td>Rs. 5,000 <br>
                              <small class="text-danger">Due: Rs. 5,000</small></td>
                            <td>
                            <span class="badge badge-soft-danger badge-border" style="font-size: 12px;">Pending</span>
                            </td>
                            <td>Not Yet Paid</td>
                            <td>
                                <div class="hstack gap-3 flex-wrap">
                                    <a href="javascript:void(0);" class="link-primary fs-15"><i class="ri-edit-2-line"></i></a>
                                    <a href="javascript:void(0);" class="link-danger fs-15"><i class="ri-delete-bin-line"></i></a>
                                </div>
                            </td>
                        </tr>
                       
                    </tbody>
                      
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                  </div>
                  <center><div class="mt-3">
                  <button type="button" class="btn btn-success btn-label"><i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i> Submit</button>
                  </div></center>

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
<script src="<?php echo base_url();?>assets/js/app.js"></script>

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