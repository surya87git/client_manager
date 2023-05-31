
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
                  <li class="breadcrumb-item active">Login Users</li>
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
                <h4 class="card-title mb-0 flex-grow-1">Login Users List</h4>
              </div>
              <!-- end card header -->
              <div class="card-body">
                <div class="live-preview">
                  <div class="row">
                      <div class="col-xxl-6 col-md-6">
                        <select class="form-select mb-3" aria-label="Default select example">
                                <option selected>Select Access From</option>
                                <option value="Browser">Browser</option>
                                <option value="Phone App">Phone App</option>              
                        </select>
                      </div>     
                      <div class="col-xxl-6 col-md-6">
                      <input type="text" class="form-control" name="daterange" value="01/01/2015 - 01/31/2015" />
                      </div>
                  
                  </div>
                  
                  <div class="table-responsive">
                  <table id="example" class="table table-striped table-bordered" style="width:100%">                     
                      <thead class="table-light">
                        <tr>
                          <th nowrap>Request Date</th>
                          <th>User Name</th>
                          <th>Access From</th>
                          <th>Mobile UID</th>
                          <th>Brand/Manufactorer</th>
                          <th>Access IP<br/><small>OS Detail</small></th>
                          <th>Browse On</th>
                          <th>Allow Access</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                      <tr>
                            <td nowrap>03-Jan-2023<br><span style="color:blue">[ 11:40 am ]</span></td>
                            <td>Mohit</td>
                            <td>Browser	</td>
                            <td></td>
                            <td></td>
                            <td>110.227.200.143<br><span class="text-success">OS Name: Window</span><br>
                            <span class="text-danger">Version: 10</span></td>
                            <td><span class="text-success">Browser Name: Chrome</span><br><span class="text-danger">Version: 108.0.0.0</span></td>
                            <td><input type="checkbox" name=""></td>
                            <td><a href="javascript:void(0);" id="" class="trash" style="font-weight:bold; color:red;"><img src="<?php echo base_url();?>assets/images/delete.png" height="20px;" width="20px;" alt="Delete" title="Delete" srcset=""></a></td>
                      </tr>
                      <tr>
                            <td nowrap>12 Jan, 2023 <br><span style="color:blue">[ 1:28 pm ]</span></td>
                            <td>Srinivas</td>
                            <td>Mobile</td>
                            <td>c155e454d5a5bba8</td>
                            <td>vivo <br><span class="text-danger">k65v1_64_bsp</span></td>
                            <td></td>
                            <td></td>
                            <td><input type="checkbox" name=""></td>
                            <td><a href="javascript:void(0);" id="" class="trash" style="font-weight:bold; color:red;"><img src="<?php echo base_url();?>assets/images/delete.png" height="20px;" width="20px;" alt="Delete" title="Delete" srcset=""></a></td>
                      </tr>
                     
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
      <div id="flipModal__" class="modal fade flip" tabindex="-1" aria-labelledby="flipModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="flipModalLabel">Login User Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="my-4 ">
            <div class="modal-body">
                      <ul>
                        <li></li>
                      </ul>
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

<!--script src="<?php echo base_url();?>assets/js/plugins.js"></script-->
<!-- prismjs plugin -->
<script src="<?php echo base_url();?>assets/libs/prismjs/prism.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<!-------Daterange Picker------------>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/date_range.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/app.js"></script>

<script type="text/javascript"> 
$(document).ready(function(){
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