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
              <h4 class="mb-sm-0">Manage Team &nbsp;&nbsp;&nbsp;<span class="badge badge-soft-primary">Ajay Jain</span></h4>
              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item">
                    <a href="javascript: void(0);">Admin Panel</a>
                  </li>
                  <li class="breadcrumb-item active">Manage Team </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- end page title -->
        <!-----Add Stages--------->
        <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Assign Team</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">                     
                                        <thead class="table-light">
                                        <tr>
                                            
                                            <th>Employee</th>
                                            <th>Designation</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" class="form-check-input ms-0" id="task_one"> &nbsp;Srinivas Kusre</td>
                                                <td><span class="badge rounded-pill badge-soft-primary">UI/UX Designer</span></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" class="form-check-input ms-0" id="task_one"> &nbsp;Surya Narayan</td>
                                                <td><span class="badge rounded-pill badge-soft-primary">Developer</span></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" class="form-check-input ms-0" id="task_one"> &nbsp;Preetam</td>
                                                <td><span class="badge rounded-pill badge-soft-primary">Android Developer</span></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" class="form-check-input ms-0" id="task_one"> &nbsp;Radhika</td>
                                                <td><span class="badge rounded-pill badge-soft-primary">Telecaller</span></td>
                                                
                                            </tr>
                                            <tr>
                                                <td><input type="checkbox" class="form-check-input ms-0" id="task_one"> &nbsp;Dev</td>
                                                <td><span class="badge rounded-pill badge-soft-primary">Marketing</span></td>
                                                
                                            </tr>
                                        </tbody>
                      
                                     </table>
                                    </div><!-- end table responsive -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Assigned Team</h4>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">                     
                                        <thead class="table-light">
                                        <tr>
                                            <th>Employee</th>
                                            <th>Designation</th>
                                            <th>Action  </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Srinivas Kusre</td>
                                                <td><span class="badge rounded-pill badge-soft-primary">UI/UX Designer</span></td>
                                                <td><button type="button" class="btn btn-sm btn-danger btn-label waves-effect right waves-light rounded-pill"><i class="ri-close-fill label-icon align-middle rounded-pill fs-16 ms-2"></i> Remove</button></td>
                                            </tr>
                                            <tr>
                                                <td>Surya Narayan</td>
                                                <td><span class="badge rounded-pill badge-soft-primary">Developer</span></td>
                                                <td><button type="button" class="btn btn-sm btn-danger btn-label waves-effect right waves-light rounded-pill"><i class="ri-close-fill label-icon align-middle rounded-pill fs-16 ms-2"></i> Remove</button></td>
                                            </tr>
                                            <tr>
                                                <td>Preetam</td>
                                                <td><span class="badge rounded-pill badge-soft-primary">Android Developer</span></td>
                                                <td><button type="button" class="btn btn-sm btn-danger btn-label waves-effect right waves-light rounded-pill"><i class="ri-close-fill label-icon align-middle rounded-pill fs-16 ms-2"></i> Remove</button></td>
                                            </tr>
                                            <tr>
                                                <td>Radhika</td>
                                                <td><span class="badge rounded-pill badge-soft-primary">Telecaller</span></td>
                                                <td><button type="button" class="btn btn-sm btn-danger btn-label waves-effect right waves-light rounded-pill"><i class="ri-close-fill label-icon align-middle rounded-pill fs-16 ms-2"></i> Remove</button></td>
                                            </tr>
                                            <tr>
                                                <td>Dev</td>
                                                <td><span class="badge rounded-pill badge-soft-primary">Marketing</span></td>
                                                <td><button type="button" class="btn btn-sm btn-danger btn-label waves-effect right waves-light rounded-pill"><i class="ri-close-fill label-icon align-middle rounded-pill fs-16 ms-2"></i> Remove</button></td>
                                            </tr>
                                        </tbody>
                      
                                     </table>
                                    </div><!-- end table responsive -->
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                    </div><!-- end row -->
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
      "paging": false,
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
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